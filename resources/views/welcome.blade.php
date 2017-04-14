@extends('layouts.master')

@section('title')
  Welcome!
@endsection

@section('content')

   @include('includes.message-block')


  <div class="row">
    <form class="" action="{{ route('signup') }}" method="post">
      <div class="col-md-6">
        <h3>Signup</h3>
        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
          <label for="email">Your E-Mail</label>
          <input type="email" name="email" class="form-control" id="" placeholder="E-Mail" value="{{ Request::old('email') }}">
        </div>
        <div class="form-group  {{ $errors->has('name') ? 'has-error' : '' }}">
          <label for="name">Your Name</label>
          <input type="text" name="name" class="form-control" id="" placeholder="Name" value="{{ Request::old('name') }}">
        </div>
        <div class="form-group  {{ $errors->has('password') ? 'has-error' : '' }}">
          <label for="password">Your Password</label>
          <input type="password" name="password" class="form-control" id="" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary" name="button">Submit</button>
        <input type="hidden" name="_token" value="{{ Session::token() }}">
      </div>
    </form>

    <form class="" action="{{ route('signin') }}" method="post">
      <div class="col-md-6">
        <h3>Signin</h3>
        <div class="form-group  {{ $errors->has('email') ? 'has-error' : '' }}">
          <label for="email">Your E-Mail</label>
          <input type="email" name="email" class="form-control" id="" placeholder="E-Mail">
        </div>
        <div class="form-group  {{ $errors->has('password') ? 'has-error' : '' }}">
          <label for="password">Your Password</label>
          <input type="password" name="password" class="form-control" id="" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary" name="button">Submit</button>
        <input type="hidden" name="_token" value="{{ Session::token() }}">
      </div>
    </form>
  </div>
@endsection
