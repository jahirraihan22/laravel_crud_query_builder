<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index(){
        $data['tittle'] = "List of Books";
        $data['books'] = DB::table('books')->get();
        return view('index',$data);
    }
    public function create(){
        return view('store');
    }
    public function store(Request $request){
        $data['book_name'] = $request->book_name;
        $data['author_name'] = $request->author_name;
        $data['publish_date'] = $request->publish_date;
        DB::table('books')->insert($data);
        return redirect()->route('book.index');
    }
    public function edit($id){
        $data['book'] = DB::table('books')->find($id);
        return view('edit',$data);
    }
    public function update(Request $request,$id)
    {
        $data['book_name'] = $request->book_name;
        $data['author_name'] = $request->author_name;
        $data['publish_date'] = $request->publish_date;
        DB::table('books')->where('id',$id)->update($data);
        return redirect()->route('book.index');
    }

    public function delete($id){
        DB::table('books')->where('id',$id)->delete();
        return redirect()->route('book.index');
    }
}
