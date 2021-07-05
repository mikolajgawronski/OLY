@extends('layouts.app')
@section('content')

<div class="row">
        @foreach($posts as $post)
        <div class="col-xs-12 col-md-6 col-lg-4 single-post">
            <div class="card">
                <a href="{{url('posts',$post->id)}}">
                <div class="embed-responsive embed-responsive-16by9">
                    <img src='{{asset('test.png')}}' width="100%">
                </div>
                <div class="card-content">

                        <h4>{{$post->title}}</h4>

                    <p>{{Str::of($post->description)->limit(48, '(...)')}}</p>
                    <span class="upper-label">{{__('mesages.add')}}</span>
                    <span class="post-author">{{$post->user->name}}</span>
                </div>
                </a>

            </div>
        </div>
        @endforeach

    </div>
@stop
