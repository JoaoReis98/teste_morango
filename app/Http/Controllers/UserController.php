<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
/**
 *
 */
class UserController extends Controller{

  public function postSignUp(Request $request){
    $email = $request['email'];
    $nome = $request['nome'];
    $password = bcrypt($request['password']);

    $user = new User();

    $user->email = $email;
    $user->name = $nome;
    $user->password  = $password ;

    $user->save();

    return redirect()->back();
  }

  public function postSignIn(Request $request){

  }

}


 ?>
