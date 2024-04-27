<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Http\Requests\AuthorRequest;

class AuthorController extends Controller
{

    // 2章2-4
    public function index()
    {
        // $authors = Author::simplePaginate(4); // simplePaginateメソッド： データ量少
        $authors = Author::Paginate(4); // paginateメソッド：データ量多
        return view('index', ['authors' => $authors]);
    }

    // データ一覧ページの表示
    // public function index()
    // {
    //     // authorsテーブルから全件取得
    //     $authors = Author::all();
    //     // dd($authors); // デバック用
    //     return view('index', ['authors' => $authors]);
    // }
    // データ追加用ページの表示
    public function add()
    {
        return view('add');
    }
    // データ追加機能(addで送信されたデータを取得)
    public function create(AuthorRequest $request)
    {
        // add.bladeのinputタグのvalueの値を取得
        $form = $request->all();
        // dd($form); // デバック
        // create()に$request->all()の値を代入
        Author::create($form);
        // データ挿入後はデータの一覧が表示される画面に遷移するようにリダイレクト
        return redirect('/');
    }
    // データ編集ページの表示
    public function edit(Request $request)
    {
        // 更新対象として入力されたidのデータを取得
        $author = Author::find($request->id);
        return view('edit', ['form' => $author]);
    }

    // ここまでではまだ更新対象データを取得しただけで、データは更新されていない

    // データ更新機能
    public function update(AuthorRequest $request)
    {
        // edit.bladeのinputタグのvalueの値を取得
        $form = $request->all();
        // dd($form); // デバック
        unset($form['_token']);
        // 更新対象のレコードを取得し、updateメソッドで$formの内容を元にして更新
        Author::find($request->id)->update($form);
        return redirect('/');
    }

    // データ削除用ページの表示
    public function delete(Request $request)
    {
        $author = Author::find($request->id);
        return view('delete', ['author' => $author]);
    }

    // データ削除機能
    public function remove(Request $request)
    {
        // dd($request->all()); // デバック
        Author::find($request->id)->delete();
        return redirect('/');
    }

    public function find()
    {
        return view('find', ['input' => '']);
    }
    public function search(Request $request)
    {
        // 部分一致
        // $item = Author::where('name', 'LIKE', "%{$request->input}%")->first();
        // 完全一致
        $item = Author::where('name', $request->input)->first();
        $param = [
            'input' => $request->input,
            'item' => $item
        ];
        return view('find', $param);
    }

    public function bind(Author $author)
    {
        $data = [
            'item' => $author,
        ];
        return view('author.binds', $data);
    }
    public function verror()
    {
        return view('verror');
    }
    public function relate(Request $request) //追記
    {
        $hasItems = Author::has('book')->get();
        $noItems = Author::doesntHave('book')->get();
        $param = ['hasItems' => $hasItems, 'noItems' => $noItems];
        return view('author.index', $param);
    }
}
