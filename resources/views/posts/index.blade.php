@extends('layouts.app')

@section('title' ,  'HOME')


@section('content')
<br>



    @guest


        <div class="container border rounded p-4" style="background-color: lightcoral; border;">
            <h4>Jij bent nog niet ingelogd. JOIN US FOR FREE!!</h4>
            <div class="mt-4">
                <a href="/login" style="text-decoration:none; color:black;"><strong>Login</strong></a>
                <a href="/register" style="text-decoration:none; color:black; margin:120px; f"><strong>Register</strong></a>
            </div>

        </div>


    @endguest
    <br>
<div class="container">
    <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header"> Alle posts</div>

                    <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{session ('status')}}
                </div>
                @endif



                {{-- <a href="{{ route('questions.index') }}" style="text-decoration:none; color:purple; ">
                    <h1><strong> See other users' questions and discussions</strong></h1></a>
                <hr> --}}
                @if ($posts->isEmpty())
                <div style="text-align: center;">
                        <p style="color:red;">There are still no posts.</p>
                    </div>
                @else

                @foreach ($posts as $post)
                <h3><a href="{{route('posts.show', $post->id)}}" style="text-decoration:none; ">{{$post->title}}</a></h3>
                {{-- <p>{{$post->message}}</p> --}}
                <small>Gepost door <strong><a href="{{route('profile', $post->user->username)}}" style="text-decoration: none; color:rgb(11, 228, 11)">{{$post->user->username}}</a> </strong> op {{$post->created_at->format('d/m/Y \o\m H:i')}} </small>
                <br>


                @auth

                @if($post->user_id == Auth::user()->id)
                <a href="{{route('posts.edit', $post->id)}}"><img src="{{asset('photos/edit.png')}}"style="width:4%;"> </a>

                {{-- <a href="{{route('posts.edit', $post->id)}}" style="text-decoration: none; color: orange;">Edit post</a> --}}
                 @else
                 <a href="{{route('like', $post->id)}}"><img src="{{ asset('photos/like.png') }}" style="width:4%;"></a>

                 </button>
                    @endif
                @endauth
                <br>
                <small> Deze post heeft <strong style="color:red"> {{$post->likes()->count()}} likes </strong></small>
                 <hr>

                @endforeach
                @endif



                <div class="row mb-0">
                    <div class="col-md-6 offset-md-3 d-flex align-items-center justify-content-center">
                        <a href="{{ route('posts.create') }}" class="btn btn-primary">
                            NEW POST
                        </a>
                    </div>
                </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
