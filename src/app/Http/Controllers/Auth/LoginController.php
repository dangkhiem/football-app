<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $data = $request->only(['email', 'password']);

        if (!auth()->attempt($data)) {
            return $this->failureRes();
        }

        $token = auth()->user()->createToken('API Token')->accessToken;
        return response()->json(['user' => auth()->user(), 'token' => $token]);
    }
}
