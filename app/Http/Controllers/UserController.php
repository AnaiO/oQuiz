<?php
namespace App\Http\Controllers;

use App\AppUsers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

class UserController extends Controller 
{
    public function logForm()
    {
        return view('logForm');
    }

    public function signupPost(Request $request, Response $response)
    {
        //if post input exist and email not already in database
        $firstname   = isset($request->firstname)? htmlspecialchars($request->firstname) : "";
        $lastname    = isset($request->lastname)? htmlspecialchars($request->lastname) : "";   
        $email       = isset($request->email)? htmlspecialchars($request->email) : "";   
        $password    = isset($request->password)? htmlspecialchars($request->password) : "";         

        //entrer àa en bdd, table app_users
        //ouvrir une session
        //rediriger vers la page d'accueil 
        

        if(empty(AppUsers::where('email', $email)))
        {
            $appUsers = new AppUsers;
            $appUsers->firstname = ucwords(strtolower($firstname));
            $appUsers->lastname = ucwords(strtolower($lastname));
            $appUsers->email = $email;
            $appUsers->password = $password;
            $appUsers->status = 1;
            $appUsers->save();
        }

        return redirect()->route('home');
        

    }
}