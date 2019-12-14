<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\UserInterface;

class DashboardController extends Controller
{
    private $user;

    public function __construct(UserInterface $user)
    {
        $this->user = $user;
    }

    public function index(Request $request)
    {
        $users = $this->user->all($request->all());
        return view('pages.index')->with(['users' => $users]);
    }
}
