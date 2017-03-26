@extends('layouts.master')

@section('title')
  Welcome!
@endsection

@section('content')
  <div class="row">
    <form class="" action="{{ route('signup') }}" method="post">
      <div class="col-md-6">
        <h3>Signup</h3>
        <div class="form-group">
          <label for="email">Your E-Mail</label>
          <input type="text" name="email" class="form-control" id="" placeholder="E-Mail">
        </div>
        <div class="form-group">
          <label for="name">Your Name</label>
          <input type="text" name="name" class="form-control" id="" placeholder="Name">
        </div>
        <div class="form-group">
          <label for="password">Your Password</label>
          <input type="password" name="password" class="form-control" id="" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary" name="button">Submit</button>
        <input type="hidden" name="_token" value="{{ Session::token() }}">
      </div>
    </form>

    <form class="" action="#" method="post">
      <div class="col-md-6">
        <h3>Signin</h3>
        <div class="form-group">
          <label for="email">Your E-Mail</label>
          <input type="text" class="form-control" id="" placeholder="E-Mail">
        </div>
        <div class="form-group">
          <label for="password">Your Password</label>
          <input type="password" class="form-control" id="" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary" name="button">Submit</button>
      </div>
    </form>
  </div>
@endsection
