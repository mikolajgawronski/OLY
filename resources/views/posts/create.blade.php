@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="panel-body">
                {!! Form::open(['url'=>'posts','class'=>'form-horizontal']) !!}
                @include('posts.form_errors')
                @include('posts.form',['buttonText'=>__('mesages.addAds')])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@stop
