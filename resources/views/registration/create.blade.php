@extends('layout')

@section('content')
    <div class="container">

        <div class="col-lg-8">

            <h1>Register</h1>

            <form method="post" action="/register">

                {{ csrf_field() }}

                <div class="form-group">

                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control">

                </div>

                <div class="form-group">

                    <label for="email">Email address</label>
                    <input type="text" name="email" id="email" class="form-control">

                </div>

                <div class="form-group">

                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" class="form-control">

                </div>

                <div class="form-group">

                    <label for="password_confirmation">Password</label>
                    <input type="text" name="password_confirmation" id="password_confirmation" class="form-control">

                </div>

                <div class="form-group">

                    <input type="submit" class="btn btn-primary" value="Sing in">

                </div>


            </form>

            @include('layout.errors')

        </div>

    </div>

@endsection