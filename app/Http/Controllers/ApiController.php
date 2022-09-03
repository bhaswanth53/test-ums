<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\User\UserRepository;

use App\Http\Resources\UserResource;
use App\Http\Resources\UserCollection;

class ApiController extends Controller
{
    private $user;

    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    public function viewUser($id)
    {
        $user = $this->user->getById($id);

        return response()->json([
            'success' => true,
            'user' => new UserResource($user)
        ]);
    }

    public function getUsers()
    {
        $users = $this->user->getAll();

        return response()->json([
            'success' => true,
            'users' => new UserCollection($users)
        ]);
    }
}
