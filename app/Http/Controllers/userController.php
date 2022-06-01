<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\loginRequest;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Symfony\Component\VarDumper\VarDumper;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
   

    public function verify(loginRequest $req){
        $user = User::where('password', $req->password)
                    ->where(function($query) use($req) {
                        $query->where('email', $req->common)
                        ->orWhere('phone', $req->common);
                    })->first();

        if($user){
            $req->session()->put('name', $user->name);
            $req->session()->put('img', $user->img);
            $req->session()->put('type', $user->userType);
            $req->session()->put('id', $user->id);
            
            if($req->session()->get('type') == 'admin'){
                return redirect('/admin');
            }
            else if($req->session()->get('type') == 'user'){
                return redirect('/user');
            }
            else{
                $req->session()->flash('error', 'User type could not be determined');
                return redirect('/login');
            }
        }
        else{
            $req->session()->flash('error', 'Invalid email/phone and/or password');
            return redirect('/login');
        }
    }

   

    public function register(Request $req){
            $user = new User();

            $user->name = $req->name;
            $user->email = $req->email;
            $user->phone = $req->phone;
            $user->password = $req->password;
            $user->cPassword = $req->cPassword;
            $user->img = $req->img;
            $user->userType = 'user';
                       
            if($user->save()){
                $req->session()->flash('msg', 'Your account was created. Please login');
                return redirect('/login');
            }
            else{
                $req->session()->flash('error', 'An error occurred. Your account could not be created.');
                return redirect('/signup');
            }
    }

    public function getData(){
        try{
            $userData = User::orderBy('id', 'desc')->get();
            //return $ambulanceData;
            return view('admin.user')->with('userData', $userData);
        }
        catch (\Exception $e) {
            $req->session()->flash('error', $e->getMessage());
        } 
    }
}