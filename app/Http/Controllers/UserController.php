<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Auth;

use App\Models\User;


class UserController extends Controller
{
    //

    public function create(){


        
        return view('createUser');
    }

    public function createUser(Request $req){

      

        $user_data = $req->validate([
            "name" => "required",
            "email" => "required|email|unique:users,email",
            "role" => "required",
            "password" => "required"
        ]);

        $user_data['password'] = Hash::make($user_data["password"]);
    


            $user = User::create($user_data);

            Auth::loginUsingId($user->id);

           return redirect('/getusers');


    }

    public function update($id){
        
        return view('updateUser')->with(compact('id'));
    }

    public function delete($id){

        $id = User::where('id',$id)->delete();

        return redirect('/getusers');


        
    }

    public function getUsers(){
       
        $isAdmin = false;
        $users = null;

        // dd(Auth::user()->role);
       if(Auth::user()->role == "admin"){
            $isAdmin = true;
            $users = User::all();
       }

       
        return view('viewUsers')->with(compact('users','isAdmin'));
    }
}
