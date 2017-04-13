<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


/**
 *
 */
class UserController extends Controller
{

  public function getDashboard()
  {
      return view('dashboard');
  }

    public function postSignup(Request $request)
  {

    $this->validate($request,[
        'email' => 'required|email|unique:users',
        'name' => 'required|max:200',
        'password' => 'required|min:4'
    ]);

    $email=$request["email"];
    $name=$request["name"];
    $password=bcrypt($request["password"]);

    $user = new User();
    $user->email = $email;
    $user->name = $name;
    $user->password = $password;

    Auth::login($user);
    $user->save();

    return redirect()->route('dashboard');
  }
  public function postSignin(Request $request)
  {
      $this->validate($request,[
          'email' => 'required|email',
          'password' => 'required|min:4'
      ]);

      if(Auth::attempt(['email'=> $request["email"], 'password'=>($request["password"])])){
        return redirect()->route('dashboard');
      }
      else{
        return redirect()->back();
      }
  }
}

 ?>
