<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\UserInterface;

class UserController extends Controller
{
  private  $user;

  public function __construct(UserInterface $user)
  {
      $this->user = $user;
  }

  public function index(Request $request)
  {
      $users = $this->user->all($request->all());
      return view('pages.users.index')->with(['users' => $users]);
  }


  public function create()
  {
      return view('pages.users.create');
  }

  public function store(Request $request)
  {
    $user = $this->user->store($request->all());
  }

  public function edit($id)
  {
    return view('pages.users.edit');
  }

  public function update(Request $request)
  {
    $user = $this->user->update($request->all());
  }

  public function delete($id)
  {
    $user = $this->user->delete($id);
  }
}
