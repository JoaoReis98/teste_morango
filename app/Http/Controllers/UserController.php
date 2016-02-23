<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
/**
 *
 */
class UserController extends Controller{

  public function getDashboard(){

    return view('dashboard');
  }
  public function postSignUp(Request $request){
    $this->validate($request, [
      'email'   => 'required|email|unique:users',
      'nome'    => 'required|max:120',
      'password'=> 'required|min:4'
    ]);
    $email = $request['email'];
    $nome = $request['nome'];
    $password = bcrypt($request['password']);

    $user = new User();

    $user->email = $email;
    $user->name = $nome;
    $user->password  = $password ;

    $user->save();
    Auth::login($user);

    return redirect()->route('dashboard');
  }

  public function postSignIn(Request $request){
    $this->validate($request, [
      'email'   => 'required',
      'password'=> 'required'
    ]);

    if(Auth::attempt(['email' => $request['email'], 'password' => $request['password'] ]) ){
      //login
      return redirect()->route('dashboard');
    }else{
      return redirect()->back();
    }

  }

}


 ?>
