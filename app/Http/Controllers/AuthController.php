<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\Controller; 
use Sentinel; 
use App\patient; 
use App\band; 
use App\User; 

class AuthController extends Controller {

   
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
   

    /**
     * Get a JWT token via given credentials.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request) {
        $credentials = $request -> only('email', 'password'); 

        if ($token = $this -> guard() -> attempt($credentials)) {
             
            
                if ($user = Sentinel::authenticate($request -> all())) {
                $slug = Sentinel::getUser() -> roles() -> first() -> slug; 
        
                if ($slug == 'admin') {
                  return response() -> json(compact('token')); 
                  
                }elseif ($slug == 'nurse')
                return response() -> json(compact('token')); 
                
                
                }
               // return response()->json(['error' => 'Unauthorized'], 401);  
        }

        return response() -> json(['error' => 'hello'], 401); 
    }

    /**
     * Get the authenticated User
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me() {
        return response() -> json($this -> guard() -> user()); 
    }

    /**
     * Log the user out (Invalidate the token)
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout() {
        $this -> guard() -> logout(); 

        return response() -> json(['message' => 'Successfully logged out']); 
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh() {
        return $this -> respondWithToken($this -> guard() -> refresh()); 
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token) {
        return response() -> json([
            'access_token' => $token, 
            'token_type' => 'bearer', 
            'expires_in' => $this -> guard() -> factory() -> getTTL() * 60
        ]); 
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\Guard
     */
    public function guard() {
        return Auth::guard(); 
    }
    public function getToken() {
        $token = Auth::getToken(); 
        if ( ! $token) {
            return $this -> response -> errorUnauthorized("token is invalid"); 
        }
        try {
            $refershToken = Auth::refersh($token); 

        }catch(JWTHException $e) {
            $this -> response -> error('Something went wrong '); 
        }
        return $refershToken; 
    }
    public function rall(Request $request) {
        $logins = Sentinel::authenticate($request -> all()); 
        if ( ! $logins) {
           return response() -> json([
                    'STATUS' => false, 
                    'MESSAGE' => 'Username or Password Unauthenticate', 
                    'DATA' => null
            ], 200); 
        }
        else {
            return response() -> json([
                   'STATUS' => true, 
                    'MESSAGE' => 'success', 
                    'DATA' => $logins
            ], 200); 
        }
    
    }
}