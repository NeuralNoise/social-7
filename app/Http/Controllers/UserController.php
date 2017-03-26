<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


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
    $email=$request["email"];
    $name=$request["name"];
    $password=bcrypt($request["password"]);

    $user = new User();
    $user->email = $email;
    $user->name = $name;
    $user->password = $password;

    $user->save();

    return redirect()->route('dashboard');
  }
  public function postSignin(Request $request)
  {

  }
}

 ?>
