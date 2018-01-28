@extends('layout')

@section('content')
    <div class="container">
        <div class="col-md-8 blog-main">
            <h1>Create a post</h1>
            <hr>
            <form method="POST" action="/posts" >
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="post-body">Body</label>
                    <textarea type="text" class="form-control" id="post-body" name="body" class="form-control" placeholder=""></textarea>
                </div>
                <div class="form-checak">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>

                <div class="form-group">

                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>

                @include ('layout.errors')


            </form>



        </div>
    </div>

@endsection