@extends('layout')

    @section('content')
        <div class="container">

            <div class="col-md-8 blog-main">
                <h1>{{ $post->title }}</h1>

                {{ $post->body }}

            </div>

            <hr>

            <div class="comment">
                <ul class="list-group">


                @foreach ($post->comments as $comment)

                    <li class="list-group-item">

                        {{ $comment->body }}

                    </li>

                @endforeach
                </ul>

            </div>

            <hr>

            <div class="card">

                <div class="card-block">

                    <form action="/posts/{{ $post->id }}/comments" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">

                            <textarea name="body" class="form-control" placeholder="Your comment here" cols="30" rows="5"></textarea>
                            
                        </div>

                        <div class="form-group">

                            <button type="submit" class="btn btn-primary">Add commet</button>

                        </div>

                        @include ('layout.errors')

                    </form>

                </div>

            </div>

        </div>

    @endsection