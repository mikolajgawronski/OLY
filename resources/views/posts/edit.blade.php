@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="panel-body">
                {!! Form::model($post,['method'=>'PATCH','class'=>'form-horizontal','action'=>['PostsController@update',$post->id]]) !!}
                @include('posts.form_errors')
                @include('posts.form',['buttonText'=>'Zapisz zmiany'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@stop
