<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function create()
    {
        return view('user.index');
    }

    public function createUser(Request $request)
    {
        $post = new User();
        $post->name = $request->name;
        $post->email = $request->email;
        $post->phone = $request->number;
        $post->save();
        return back()->with('User_created',"User's detail has been created successfully");

    }

    public function view($id)
    {
        // $post = User::where('id',$id)->first();
        $post = User::find($id);
        return view('user.edituser',compact('post'));
    }

    public function editUsers(Request $request)
    {
        $post = User::find($request->id);
        $post->name = $request->name;
        $post->email = $request->email;
        $post->phone = $request->number;
        $post->save();
        return back()->with('edit_user', "User's detail has been updated successfully");
        
    }

    public function deleteUser($id)
    {
        $post = User::where('id',$id)->delete();
        return back()->with('User_deleted','User has been deleted successfully');
    }
    public function getUsers()
    {
        $post = User::all();
        return view('user.users',compact('post'));
    }
}
