<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index()
    {
        $data =  DB::table('todo')->get();
        return view('pages.index',compact('data'));
    }

    public function get_create_page()
    {
        return view('pages.create');
    }

    public function post_create_store(Request $request)
    {

        DB::table('todo')->insert([
            'title' =>$request->title,
            'todocontent'=>$request->todocontent,
            'remark'=>$request->remark,
        ]);
        return view('pages.create');
    }

    public function delete($id)
    {

        DB::table('todo')
            ->where('id', $id)
            ->delete();
        return redirect()->route('get_post_page');
    }
}
