<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Repositories\User\UserRepository;

class AppController extends Controller
{
    private $user;

    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        $users = $this->user->getAll();

        return view('index', compact('users'));
    }

    public function createUser()
    {
        return view('ucreate');
    }

    public function addUser(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users'
        ]);

        $user = $this->user->create([
            "name" => $request->input('name'),
            "email" => $request->input('email'),
            "password" => Hash::make('Basu@123')
        ]);

        return redirect()->route('index')->with('success', 'User has been created!');
    }

    public function viewUser($id)
    {
        $user = $this->user->getById($id);
        return view('user', compact('user'));
    }

    public function addTask(Request $request, $id)
    {
        $this->validate($request, [
            'task' => 'required'
        ]);
        $user = $this->user->getById($id);
        $user->tasks()->create([
            'task' => $request->input('task'),
            'status' => 'pending'
        ]);

        return redirect()->back()->with('success', 'Task has been created successfully!');
    }
}
