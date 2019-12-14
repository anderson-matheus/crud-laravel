<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('pages.users.index');
    }


    public function create()
    {
        return view('pages.users.create');
    }

    public function store(Request $request)
    {
      dd('store');
    }

    public function edit($id)
    {
      return view('pages.users.edit');
    }

    public function update(Request $request)
    {
      dd('update');
    }

    public function delete($id)
    {
      dd('delete');
    }
}
