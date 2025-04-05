<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {                
        try {            
            $books = Book::all();
            
            if($books->isEmpty()) {
                return response()->json([
                    'message' => 'No books found'
                ], 404); // 404 = Not Found
            }

            return response()->json($books, 200); // 200 = OK

        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'An error occurred while fetching books',
                'error' => $th->getMessage()
            ], 500); // 500 = Internal Server Error
        }
    }

    /**
     * Search books by author.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function searchByAuthor(Request $request)
    {
        $author = $request->input('author');

        try {
            if (!$author) {
                return response()->json([
                    'message' => 'Author parameter is required'
                ], 400); // 400 = Bad Request
            }

            $books = Book::where('author', 'LIKE', "%$author%")->get();

            if ($books->isEmpty()) {
                return response()->json([
                    'message' => 'No books found for the given criteria'
                ], 404); // 404 = Not Found
            }

            return response()->json($books, 200); // 200 = OK

        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'An error occurred while searching for books',
                'error' => $th->getMessage()
            ], 500); // 500 = Internal Server Error
        }
    }

    /**
     * Search books by title.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function searchByTitle(Request $request)
    {
        $title = $request->input('title');

        // Check if the title parameter was provided
        if (!$title) {
            return response()->json([
                'message' => 'Title parameter is required'
            ], 400); // 400 = Bad Request
        }

        try {
            // Search for books with the given title
            $books = Book::where('title', 'LIKE', "%$title%")->get();

            // Check if any books were found
            if ($books->isEmpty()) {
                return response()->json([
                    'message' => 'No books found for the given criteria'
                ], 404); // 404 = Not Found
            }

            // Return the found books
            return response()->json($books, 200); // 200 = OK

        } catch (\Throwable $th) {
            // Return an error message if an exception was thrown
            return response()->json([
                'message' => 'An error occurred while searching for books',
                'error' => $th->getMessage()
            ], 500); // 500 = Internal Server Error
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book, $id)
    {
        try {            
            $books = Book::find($id);
            if (!$books) {
                return response()->json([
                    'message' => 'Book not found'
                ], 404); // 404 = Not Found
            }            

            return response()->json($books, 200); // 200 = OK

        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'An error occurred while fetching books',
                'error' => $th->getMessage()
            ], 500); // 500 = Internal Server Error
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
