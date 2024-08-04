<?php

namespace App\Http\Controllers;

use App\Services\UserServiceInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $users = $this->userService->getAllUsers();
        return response()->json($users);
    }

    public function show($id)
    {
        $user = $this->userService->getUserById($id);
        return response()->json($user);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $user = $this->userService->createUser($data);
        return response()->json($user, 201);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $user = $this->userService->updateUser($id, $data);
        return response()->json($user);
    }

    public function destroy($id)
    {
        $result = $this->userService->deleteUser($id);
        return response()->json(['success' => $result]);
    }
}
