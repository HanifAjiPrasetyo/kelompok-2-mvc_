<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Book;
use App\Models\Borrow;
use App\Models\ReturnBook;
use Illuminate\Http\Request;
use App\Http\Requests\StoreReturnBookRequest;
use App\Http\Requests\UpdateReturnBookRequest;

class ReturnBookController extends Controller
{
    public function getDenda(Request $request)
    {
        $borrow = Borrow::where('id', $request->id)->first();

        $telat = Carbon::now()->diffInDays(Carbon::parse($borrow->tgl_kembali));

        $denda = $telat * 10000;

        return response()->json(['denda' => $denda]);
    }

    public function list()
    {

        $borrow = Borrow::where('member_id', auth()->user()->member->id)->first();
        $returns = ReturnBook::where('borrow_id', $borrow->id)->get();

        return view('student.return.index', compact('returns'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreReturnBookRequest $request)
    {

        $data = $request->validated();

        ReturnBook::create($data);

        $borrow = Borrow::find($request->borrow_id);
        $book = Book::find($request->book_id);

        $book->update([
            'stok' => $book->stok + $borrow->jumlah
        ]);

        return redirect('/member/return-book/list')->with('success', 'Buku berhasil dikembalikan');
    }

    /**
     * Display the specified resource.
     */
    public function show(ReturnBook $returnBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ReturnBook $returnBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReturnBookRequest $request, ReturnBook $returnBook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ReturnBook $returnBook)
    {
        //
    }
}
