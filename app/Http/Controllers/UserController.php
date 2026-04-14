<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{ public function index(Request $request)
    {
        $keyword = $request->input('search');
        if ($keyword != '') {
            $users = User::where('name', 'LIKE', '%' . $keyword . '%')->paginate(5);
        } else {
            $users = User::orderBy('id')->paginate(10);
        }
        return view(view:'pages.indexUser', data: compact('users'));
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('pages.destinasi1', compact('user'));
    }

    public function create()
    {
        return view(view:'pages.createUser');
    }
    public function store(Request $request)
    {
        User::create($request->all());
        return redirect(to:'/users')->with(key: 'success', value: 'User created successfully.');
    }

    public function delete($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return redirect(to:'/users')->with(key: 'success', value: 'User deleted successfully.');
        } else {
            return redirect(to:'/users')->with(key: 'error', value: 'User not found.');

        }
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('pages.editUser', compact('user'));
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if ($user) {
            $user->update($request->all());
            return redirect('/users')->with('success', 'User updated successfully.');
        } else {
            return redirect('/users')->with( 'error', 'User not found.');
        }
    }

   
}