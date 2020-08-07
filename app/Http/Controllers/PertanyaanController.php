<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
   public function create(){
       return view ('create');
   }

   public function store (request $request){
       dd($request->all());
       $query = DB :: table ('posts')-> insert ([
           "title"=> $request ["tittle"],
           "body"=> $request ["body"]
       ]);
       return redirect ('/posts/create');

   }
}