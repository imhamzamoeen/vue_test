<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorebooksRequest;
use App\Http\Requests\UpdatebooksRequest;
use App\Http\Resources\BooksResource;
use App\Models\books;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
     return   BooksResource::collection(books::with('author')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create(StorebooksRequest $storebooksRequest)
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorebooksRequest  $request
     */
    public function store(StorebooksRequest $request)
    {
        //
        $book=books::create($request->validated());
        return new BooksResource($book);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\books  $book
     */
    public function show(books $book)
    {
        return new BooksResource($book);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\books  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(books $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebooksRequest  $request
     * @param  \App\Models\books  $book
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebooksRequest $request, books $book)
    {
        $book->update($request->validated());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\books  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(books $book)
    {
        $this->authorize('delete', $book);
        dump("second");

        $book->delete();
        return response()->noContent();
    }
}
