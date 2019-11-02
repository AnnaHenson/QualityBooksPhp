<?php

namespace App\Http\Controllers;

use App\book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\category;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('searchString');
        if (isset($search))
        {
            $books = \App\Book::where('title', 'LIKE', '%'.$search.'%')->paginate(3);
            return view('books/book')->with('books', $books);
        }
        else {
            $books = \App\Book::paginate(3);
            return view('books/book')->with('books', $books);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = \App\category::all();
        $suppliers = \App\supplier::all();
        return view('books/create')->with('categories', $categories)->with('suppliers', $suppliers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $book = new \App\Book([
            'title' => $request->get('Title'),
            'description' => $request->get('Description'),
            'price' => $request->get('Price'),
            'category_id' => $request->get('CategoryId'),
            'supplier_id' => $request->get('SupplierId')
        ]);

        if ($request->hasFile('BookImage')) {
            $file = $request->file('BookImage');
            $path = $file->move(public_path().'/books', $file->getClientOriginalName());
            $book->setAttribute('file_name', '/books/'.$file->getClientOriginalName());
        }

        $book->save();
        return redirect('/books');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(book $book)
    {
        //
    }


}
