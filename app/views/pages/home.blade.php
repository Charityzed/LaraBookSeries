@extends('layout.default')

@section('content')

    <div class="jumbotron">
        <h1>Welcome To Larabook!</h1>
        <p>Welcome to the premier place to talk about Lavarel with others. Why dont you sign up to see what all the fuss is all about?</p>

        <p>
            {{link_to_route('register_path', 'Sign Up', null, ['class'=>'btn btn-lg btn-primary'])}}

        </p>
    </div>
    @stop