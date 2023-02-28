<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function index()
    {
        $user = User::paginate(10);
        Log::info('GET method dataUser success called.');
        return response()->json([
            'data' => $user,
        ]);
    }

    public function totalUser()
    {
        $user = User::count();
        Log::info('GET method totalUser success called.');
        return response()->json([
            'totalUser' => $user,
        ]);
    }
}
