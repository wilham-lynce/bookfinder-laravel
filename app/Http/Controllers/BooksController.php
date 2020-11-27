<?php

namespace App\Http\Controllers;
use App\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    function list()
    {
        // return Books::all();
        return view('list');
    }
}
