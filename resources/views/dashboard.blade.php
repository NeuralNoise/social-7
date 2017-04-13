@extends('layouts.master')

@section('content')
    <section  class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <header>
                 <h3>Whats in your mind?</h3>
            </header>
            <form action="{{ route('post.create') }}" method="post">
                <div class="form-group">
                    <textarea class="form-control" name="body" id="new-post" rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create Post</button>

            </form>
        </div>
    </section>
        <section class="row posts">
            <div class="col-md-6 col-md-offset-3">
                <header>
                    <h3>What other people say.....</h3>
                </header>
                <article class="post">
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci atque cum earum itaque iusto nulla optio quam soluta tenetur vitae? Aliquam aperiam asperiores facilis iusto laborum! Ad dolorem expedita quo!</p>
                    <div class="info">
                        Posted by Ritwik on 14 April 2017
                    </div>
                    <div class="interaction">
                        <a href="#">Like</a> |
                        <a href="#">Dislike</a> |
                        <a href="#">Edit</a> |
                        <a href="#">Delete</a>
                    </div>
                </article>
            </div>
        </section>
    @endsection