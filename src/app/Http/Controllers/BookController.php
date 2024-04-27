<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    // データ一覧表示
    public function index()
    {
        // 全レコードを$itemに渡す
        // $items = Book::all();
        $items = Book::with('author')->get(); // 1章1-6追記
        return view('book.index', ['items' => $items]);
    }
    // データ追加用ページに遷移させる
    public function add()
    {
        return view("book.add");
    }
    public function create(Request $request)
    {
        $this->validate($request, Book::$rules);
        $form = $request->all();
        Book::create($form);
        return redirect('/book');
    }

}
