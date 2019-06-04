<?php
namespace App\Http\Controllers;

use App\AppUsers;
use App\Utils\UserSession;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller 
{
    public function logForm()
    {
        return view('logForm');
    }

    public function signupPost(Request $request)
    {   
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $email = $request->email;
        $password = $request->password;
        

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            if(!empty($firstname)
            && (!empty($lastname))
            && (!empty($email))
            && (!empty($password))){
                $emailAlreadyExist = AppUsers::where('email', $email)->get();
       
                if(count($emailAlreadyExist) != 0){
                    echo "deja enregistré";
                }else{
                    $appUsers = new AppUsers;
                    $appUsers->firstname = ucwords(strtolower($firstname));
                    $appUsers->lastname = ucwords(strtolower($lastname));
                    $appUsers->email = $email;
                    $appUsers->password = Hash::make($password);
                    $appUsers->status = 1;
                    $appUsers->save();

                    return redirect()->route('home');
                }

            }else{
                echo "Tous les champs ne sont pas remplis";
            }   
            
        }else{
            echo "email invalide";
        }
    }

    public function signinPost(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        $email = $request->email;
        $password = $request->password;

        $userAccount = AppUsers::where('email', $email)
                                ->first();

        if (!empty($userAccount))
        {
             if(Hash::check($password, $userAccount->password))
             {
                UserSession::connect($email);

                return redirect()->route('home');
                
            }else{
                 echo "mot de passe invalide";
             }
        }else
        {
             echo"utilisateur inconnu";
         }
    }
    
}