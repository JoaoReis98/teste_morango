@extends('layouts.master')

@section('title')
  Bem-vindo!
@endsection

@section('content')


<div class="container">

  <div class="row">
    <div class ="col-md-6">
        <h3> Registo</h3>
        <form action="{{ route('signup') }}" method="post" >
          <div class="form-group">
            <lable for="nome"> Nome: </lable>
            <input type="text" id ="nome" name="nome" class="form-control"/>
          </div>
          <div class="form-group">
            <lable for="email"> Email: </lable>
            <input type="text" id ="email" name="email" class="form-control"/>
          </div>
          <div class="form-group">
            <lable for="password"> Password: </lable>
            <input type="password" id ="password" name="password" class="form-control"/>
          </div>
          <button type="submit" id="registo" class="btn btn-primary">Registar</button>
          <input type="hidden" name="_token" value="{{ Session::token() }}">
       </form>
    </div>

    <div class ="col-md-6">
        <h3> Login</h3>
        <form action="#" method="post" >
          <div class="form-group">
            <lable for="email"> Email: </lable>
            <input type="text" name="email" id ="email" class="form-control"/>
          </div>
          <div class="form-group">
            <lable for="password"> Password: </lable>
            <input type="password" name="password" id ="password" class="form-control"/>
          </div>
          <button type="submit" id="registo" class="btn btn-primary">Entrar</button>
       </form>
    </div>

  </div>


</div>



@endsection
