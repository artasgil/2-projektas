<?php

namespace App\Http\Controllers;

use App\Bookitem;
use Illuminate\Http\Request;

class BookitemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookitems=Bookitem::All();
        return view("bookitems.index", ['bookitems'  => $bookitems]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bookitems.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bookitem = new Bookitem; //Visiskai tuscias objektas siuo metu

        $bookitem->title = $request->bookitem_title;
        $bookitem->book_code = $request->bookitem_code;
        $bookitem->pages = $request->bookitem_pages;
        $bookitem->description = $request->bookitem_description;
        $bookitem->author_id = $request->bookitem_author_id;

        $bookitem->save(); //Paraso uzklausa insert irideda i duomenu baze

        return redirect()->route('bookitems.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bookitem  $bookitem
     * @return \Illuminate\Http\Response
     */
    public function show(Bookitem $bookitem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bookitem  $bookitem
     * @return \Illuminate\Http\Response
     */
    public function edit(Bookitem $bookitem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bookitem  $bookitem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bookitem $bookitem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bookitem  $bookitem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bookitem $bookitem)
    {
        //
    }
}
