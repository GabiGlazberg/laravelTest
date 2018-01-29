@extends('layout')

@section('content')
    <div class="container">

        <div class="col-lg-8">

            <h1>Login</h1>

            <form method="post" action="/login">

                {{ csrf_field() }}

                <div class="form-group">

                    <label for="email">Email address</label>
                    <input type="text" name="email" id="email" class="form-control">

                </div>

                <div class="form-group">

                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" class="form-control">

                </div>
                <div class="form-group">

                    <input type="submit" class="btn btn-primary" value="Sing in">

                </div>

                @include ('layout.errors')


            </form>

        </div>

    </div>

@endsection