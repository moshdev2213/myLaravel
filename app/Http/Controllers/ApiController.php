<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\UserCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    public function register(Request $request){
        $validator= Validator::make(
            $request->all(),
            [
                'name' =>'required',
                'email' =>'required|email',
                'password' =>'required',
                'c_password' =>'required|same:password',
            ]
            );
        if($validator->fails()){
            return response()->json(['message'=>'validation error'],400);
        }
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);

        $response['token'] = $user->createToken('Myapp')->plainTextToken;
        $response['name'] = $user->name;
        return response()->json($response,200);
    }
    public function login(Request $request){
        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
            $user = Auth::user();
            $response['token'] = $user->createToken('Myapp')->plainTextToken;
            $response['name'] = $user->name;
            return response()->json($response,200);
        }else{
            return response()->json(['message'=>'invalidation credential'],400);
        }

    }
    public function detail(){
        $user = Auth::user();

        $data = [
            'name'=>$user->name,
            'email'=>$user->email
        ];

        //when uncomment below the response will be an object of user
        $response['user'] = $data;
        return response()->json($response,200);
    }
    //maing Api Responses
    public function user(Request $request , $id){
       $user =  User::find($id);
       return new UserResource($user);
    }
    public function getAllUsers(){
        $user = User::all();
        return new UserCollection($user);
    }
}
