@extends('layouts.master')

@section('title')
  Bem-vindo!
@endsection

@section('content')


<div class="container">

@if(count($errors)>0 )
<div class="row">
  <div class="col-md-4 col-md-offset-4">
    <ul>
      @foreach($errors->all() as $error)
       <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
</div>
@endif

  <div class="row">
    <div class ="col-md-6">
        <h3> Registo</h3>
        <form action="{{ route('signup') }}" method="post" >
          <div class="form-group {{ $errors->has('nome') ? 'has-error' :'' }}">
            <lable for="nome"> Nome: </lable>
            <input type="text" id ="nome" name="nome" value="{{ Request::old('nome') }}" class="form-control"/>
          </div>
          <div class="form-group {{ $errors->has('email') ? 'has-error' :'' }}">
            <lable for="email"> Email: </lable>
            <input type="text" id ="email" name="email" value="{{ Request::old('email') }}" class="form-control"/>
          </div>
          <div class="form-group {{ $errors->has('password') ? 'has-error' :'' }}">
            <lable for="password"> Password: </lable>
            <input type="password" id ="password" name="password" value="{{ Request::old('password') }}" class="form-control"/>
          </div>
          <button type="submit" id="registo" class="btn btn-primary">Registar</button>
          <input type="hidden" name="_token" value="{{ Session::token() }}">
       </form>
    </div>

    <div class ="col-md-6">
        <h3> Login</h3>
        <form action="{{ route('signin') }}" method="post" >
          <div class="form-group">
            <lable for="email"> Email: </lable>
            <input type="text" name="email" id ="email" value="{{ Request::old('email') }}" class="form-control"/>
          </div>
          <div class="form-group">
            <lable for="password"> Password: </lable>
            <input type="password" name="password" id ="password" value="{{ Request::old('password') }}" class="form-control"/>
          </div>
          <input type="hidden" name="_token" value="{{ Session::token() }}">
          <button type="submit" id="registo" class="btn btn-primary">Entrar</button>
       </form>
    </div>

  </div>


</div>



@endsection
