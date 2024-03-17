<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Member;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();

        return view('admin.book.index', compact('books'));
    }

    public function home()
    {
        $books = Book::all();

        $member = Member::where('user_id', auth()->user()->id)->first();

        return view('book', compact('books', 'member'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        $data = $request->validated();

        Book::create($data);

        return redirect('/dashboard/book')->with('success', 'Buku berhasil dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $book = Book::find($book->id);

        return view('admin.book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        $data = $request->validated();

        Book::where('id', $book->id)->update($data);

        return redirect('/dashboard/book')->with('success', 'Buku berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        Book::destroy($book->id);

        return redirect('/dashboard/book')->with('success', 'Buku berhasil dihapus');
    }
}
