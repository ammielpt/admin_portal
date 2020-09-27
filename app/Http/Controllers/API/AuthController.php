<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterAuthRequest;
use App\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;

class AuthController extends Controller
{
    public $loginAfterSignUp = true;
    public function register(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        if ($this->loginAfterSignUp) {
            return $this->login($request);
        }
        return response()->json([
            'status' => 'ok',
            'data' => $user
        ], 200);
    }
    public function login(Request $request)
    {
        $input = $request->only('email', 'password');
        $jwt_token = null;
        if (!$jwt_token = JWTAuth::attempt($input)) {
            return response()->json([
                'status' => 'invalid_credentials',
                'message' => 'Correo o contraseña no válidos.',
            ], 401);
        }
        return response()->json([
            'status' => 'ok',
            'token' => $jwt_token,
        ]);
    }
    public function logout(Request $request)
    {
        $this->validate($request, [
            'token' => 'required'
        ]);
        try {
            JWTAuth::invalidate($request->input('token'));
            return response()->json([
                'status' => 'ok',
                'message' => 'Cierre de sesión exitoso.'
            ]);
        }catch(TokenExpiredException $exception){
            return response()->json([
                'status' => 'ok',
                'message' => 'La sesion expiro'
            ], 200);
        } catch (JWTException $exception) {
            return response()->json([
                'status' => 'unknown_error',
                'message' => 'Al usuario no se le pudo cerrar la sesión.'
            ], 500);
        }
    }
    public function getAuthUser(Request $request)
    {
        try{
            $this->validate($request, [
                'token' => 'required'
            ]);
            JWTAuth::setToken($request->input('token'));
            $user = JWTAuth::toUser();
            //$user = JWTAuth::authenticate($request->token);
            return response()->json(['user' => $user]);
        }catch(TokenExpiredException $exception){
            return response()->json([
                'status' => 'ok',
                'message' => 'La sesion expiro'
            ], 200);
        }catch(JWTException $exception){
            return response()->json([
                'status' => 'unknown_error',
                'message' => 'No se puede obtener el usuario'
            ], 500);
        }
    }
    protected function jsonResponse($data, $code = 200)
    {
        return response()->json(
            $data,
            $code,
            ['Content-Type' => 'application/json;charset=UTF8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE
        );
    }
}
