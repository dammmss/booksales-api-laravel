<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    // GET /api/transactions
    public function index()
    {
        $transactions = Transaction::with('user', 'book')->get();

        if ($transactions->isEmpty()) {
            return response()->json([
                'success' => true,
                'message' => 'No transaction data found.',
                'data' => []
            ], 200);
        }

        return response()->json([
            'success' => true,
            'message' => 'All transactions retrieved successfully.',
            'data' => $transactions
        ], 200);
    }

    // GET /api/transactions/{id}
    public function show($id)
    {
        $transaction = Transaction::with('user', 'book')->find($id);

        if (!$transaction) {
            return response()->json([
                'success' => false,
                'message' => 'Transaction not found.'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Transaction detail retrieved successfully.',
            'data' => $transaction
        ], 200);
    }

    // POST /api/transactions
    public function store(Request $request)
    {
        $validated = $request->validate([
            'book_id' => 'required|exists:books,id',
            'quantity' => 'required|integer|min:1'
        ]);

        $uniqueCode = 'ORD-' . strtoupper(uniqid());
        $user = Auth::user();

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'User not authenticated.'
            ], 401);
        }

        $book = Book::find($validated['book_id']);
        if (!$book) {
            return response()->json([
                'success' => false,
                'message' => 'Book not found.'
            ], 404);
        }

        if ($book->stock < $validated['quantity']) {
            return response()->json([
                'success' => false,
                'message' => 'Insufficient stock.'
            ], 400);
        }

        $totalPrice = $book->price * $validated['quantity'];
        $book->stock -= $validated['quantity'];
        $book->save();

        $transaction = Transaction::create([
            'order_number' => $uniqueCode,
            'user_id' => $user->id,
            'book_id' => $book->id,
            'quantity' => $validated['quantity'],
            'total_price' => $totalPrice,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Transaction created successfully.',
            'data' => $transaction->load('user', 'book')
        ], 201);
    }

    // PUT /api/transactions/id
    public function update(Request $request, $id)
    {
        $transaction = Transaction::find($id);
        $user = Auth::user();

        if (!$transaction) {
            return response()->json([
                'success' => false,
                'message' => 'Transaction not found.'
            ], 404);
        }

        $validated = $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);

        $book = Book::find($transaction->book_id);

        $book->stock += $transaction->quantity;

        if ($book->stock < $validated['quantity']) {
            return response()->json([
            'success' => false,
            'message' => 'Insufficient stock.'
            ], 400);
        }

        $book->stock -= $validated['quantity'];
        $book->save();

        $transaction->update([
            'quantity' => $validated['quantity'],
            'total_price' => $book->price * $validated['quantity']
        ]);
        
        return response()->json([
            'success' => true,
            'message' => 'Transaction updated successfully.',
            'data' => $transaction->load('user', 'book')
        ], 200);

    }

    // DELETE /api/transactions/id
    public function destroy($id)
    {
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return response()->json([
                'success' => false,
                'message' => 'Transaction not found.'
            ], 404);
        }

        try {
            $transaction->delete();

            return response()->json([
                'success' => true,
                'message' => 'Transaction deleted successfully.'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to delete transaction.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
