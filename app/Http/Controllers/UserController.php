<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    /**
     * Gets users except yourself
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        // we get all users without me : 
        $users = User::where('id', '!=', auth()->user()->id)->get();
        return $this->success($users);
    }

}