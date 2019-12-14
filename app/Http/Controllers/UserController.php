<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Users\StoreUserRequest;
use App\Http\Requests\Users\UpdateUserRequest;
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

    public function store(StoreUserRequest $request)
    {
        $user = $this->user->store($request->all());
        return redirect()->route('users.index')
            ->with('success','Usuário ' . $user->name . ' foi criado com sucesso');
    }

    public function edit($id)
    {
        $user = $this->user->find($id);

        if (is_null($user)) {
            return redirect()->route('users.index')
                ->with('error', 'Usuário selecionado não existe');
        }
        return view('pages.users.edit')->with(['user' => $user]);
    }

    public function update(UpdateUserRequest $request)
    {
        $user = $this->user->update($request->except(['_token']));
        return redirect()->route('users.index')
            ->with('success','Usuário ' . $request->name . ' foi atualizado com sucesso');
    }

    public function delete($id)
    {
        $user = $this->user->delete($id);
    }
}
