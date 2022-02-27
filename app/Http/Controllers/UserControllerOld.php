<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users'=>$users]);



    }
    public function createUser()
    {
//        dd('hello');
        return view('users.form');
    }

    public function saveUser(Request $request)
    {
//        dd( $request->all());


    }

    /**
     * @param Request $request
     */
    public function addRow(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        $show = User::create($validatedData);
//dd($show);
        return redirect()->action([UserController::class, 'index'])->with('success', 'Data is successfully saved');

//
    }

    public function edit(User $users, $id)
    {
        $users = User::findOrFail($id);

//        return view('edit', compact('users'));

        return redirect()->action([UserController::class, 'edit']);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->action([UserController::class, 'index'])->with('success', 'Data is successfully saved');
    }
}

