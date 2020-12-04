<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;
use Session;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = book::all();
        return view('books',['books'=>$data]);
    }

    public function nav()
    {
        $collection = book::select('volumeInfocategories0')->distinct()->get();
        return view('landing',['collection'=>$collection]);

    }

    public function section($volumeInfocategories0)
    {
        $data= book:: findMany($volumeInfocategories0);
        return view('books',['books'=>$data]);
    }



    public function search(Request $req)
    {
        // return $req ->input();
        // search bar for books inside db
        $data = book::where('volumeInfotitle','like','%'.$req->input('query').'%')->get();
        return view('adminsearch', ['books'=>$data]);
    }

    public function tcount()
    {
         $total = book::all()->count();
         return view('admin',['totals'=>$total]);
    }

    public function catcount()
    {
         $number = book::select('volumeInfocategories0')->distinct()->get()->count();
         return view('admin',['numbers'=>$number]);
    }
        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addbook');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $book = new book;
        $volumeInfocategories0 = $request->genre;
        $volumeInfotitle = $request->title;
        $volumeInfoauthors0 = $request->author;
        $volumeInfoinfoLink = $request->infolink;
        $volumeInfoimageLinksthumbnail= $request->imagelink;
        $etag = $request->etag;

        $book = new book;
        $book->volumeInfocategories0 = $volumeInfocategories0;
        $book->volumeInfotitle = $volumeInfotitle;
        $book->volumeInfoauthors0 = $volumeInfoauthors0;
        $book->volumeInfoinfoLink = $volumeInfoinfoLink;
        $book->etag = $etag;
        $book->volumeInfoimageLinksthumbnail= $volumeInfoimageLinksthumbnail;

        $book->save();

        return "New addition made successfully";

        // return redirect()->back()->with('alert','hello');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\book  $book
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
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(book $book)
    {
        //
    }
    
}
