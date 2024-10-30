<?php

namespace App\Http\Controllers;

use App\Traits\HttpResponses;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    use HttpResponses;

    public function login(Request $request){
        if(Auth::attempt($request->only("email","password"))){
            return $this->response('Authorized', 200, [
                'token' => $request->user()->createToken('invoice', ['*'], now()->addHour())->plainTextToken,
            ]);
        }

        return $this->response('Not Authorized', 403);
    }

    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();
 
        return $this->response('Token Revoked',200);
    }
}
