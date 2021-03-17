<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class clientcontroller extends Controller
{
    public function index(){
        $clients = Client::all();
         return view('client.index')-> with(['clients' => $clients]);

    }

    public function create()
    {
        return view('client.create');
    }

    public function store(Request $request){
        Client::create([
            'name' => $request->name,
            'surname'=> $request->surname,
            'age'=> $request->age
        ]);

        return back();
    }

    public function show(Post $post)
    {
        //
    }

    public function edit(Post $post)
    {
        //
    }

    public function update(Request $request, Post $post)
    {
        //
    }
}
