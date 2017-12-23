<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Auth;

class UsersController extends Controller
{
    public function get(User $user)
    {
        return $user;
    }


    public function update(Request $request, User $user)
    {
        $updated = "false";
        // Creating the rules
        $rules = ["id" => "required|numeric"];

        if($request->input("username") != null)
            $rules = array_add($rules, "username", "string");

        if($request->input("email") != null)
            $rules = array_add($rules, "email", "email");

        if($request->input("password") != null)
            $rules = array_add($rules, "password", "string");

        if($request->input("role") != null)
            $rules = array_add($rules, "role", "string");

        // First, validate the inputs
        $validator = Validator::make($request->all(), $rules);

        // Ok, the rules passes, now we can update
        // if the requester is the author of the update (or it is an admin)
        if((Auth::user()->role === 'admin' or Auth::id() == $user->id) and $validator->passes())
        {
            $values = $request->all();
            if($request->input("password") != null)
                $values['password'] = \Hash::make($request->input("password"));
            $updated = $user->update($values);
        }
        return $updated;
    }



}
