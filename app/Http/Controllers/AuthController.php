<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Traits\Response;
use App\Models\User;

class AuthController extends Controller
{
    use Response;

    public function register (Request $request)
    {
        $validator = Validator::make($request->post(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'c_password' => 'required|same:password'
        ]);

        if ($validator->fails()) {
            return $this->failsValidate($validator->errors());
        }

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ];

        User::create($data);

        return $this->sendResponse([], 'Register successfully');
    }

    public function login (Request $request)
    {
        $validator = Validator::make($request->post(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->failsValidate($validator->errors());
        }

        $auth = Auth::attempt(
            [
                'email' => $request->email,
                'password' => $request->password
            ]
        );

        if ($auth) {
            $user = Auth::user();
            $success['token'] =  $user->createToken("King Pirates Luthfi!")->plainTextToken;
            $success['user'] =  $user;

            unset($user->id);
            return $this->sendResponse($success, 'Login successfully.');
        }

        return $this->sendError(400, 'Wrong Email/Password.');
    }

}
