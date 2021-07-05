@extends('layouts.app')
@section('content')
    <div class="col-xs-12 posts-header card">
        <h2>{{$post->title}}</h2>
    </div>

    <div class="row">

        <div class="col-xs-12 col-md-9 single-post-left">

            <div class="card">

                <div class="embed-responsive embed-responsive-16by9">
                    <img src='{{asset('test.png')}}' max-width="100%">
                </div>

                <div class="single-post-content">
                    <div class="categories">
                        <h4>{{__('mesages.category')}}</h4>
                        <p>{{$post->subcategory->category->name}} -> {{$post->subcategory->name}}</p>
                    </div>
                    <h4>{{__('mesages.contents')}}</h4>
                    <p>{{$post->description}}</p>
                    <h4>{{__('mesages.price')}}</h4>
                    <p>{{$post->price}} zł</p>
                    <h5>{{__('mesages.tonegotiable')}}:@if($post->is_negotiable) {{__('mesages.yes')}} @else {{__('mesages.no')}} @endif</h5>
                    <h5>{{__('mesages.addFactory')}}:@if($post->is_business) {{__('mesages.yes')}} @else {{__('mesages.no')}} @endif</h5>
                    <span class="upper-label">{{__('mesages.add')}}</span>
                    <span class="post-author">{{$post->user->name}}</span>
                    <span class="upper-label">{{__('mesages.phonenr')}}</span>
                    <span class="post-author">{{$post->user->phone_number}}</span>
                    <span class="upper-label">{{__('mesages.city')}}</span>
                    <span class="post-author">{{$post->user->city}}</span>
                    <h5>{{__('mesages.views')}}: {{$post->views}}</h5>
                    <div class="edit-button">
                        @if(Auth::id() == $post->user_id)
                        <a href="{{action('PostsController@edit',$post->id)}}" class="btn btn-success btn-lg">
                        {{__('mesages.edit')}}
                        </a>
                            <a  onclick="return confirm('Do you want delete add?');">

                            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit(__('mesages.delete'), ['class' => 'btn btn-danger btn-lg'])}}
                            {!!Form::close()!!}
                            </a>

                        @endif
                    </div>


                </div>


            </div>

        </div>

        <div class="col-xs-12 col-md-3 single-post-right">

            <div class="card">
                <div class="right-col-box">
                    <h4>Udostępnij</h4>
                    <div class="social-icons">
                       <a href="https://www.facebook.com/profile.php" target="_blank"> <i class="fa fa-facebook-official"></a></i> 
                        <i class="fa fa-twitter-square"></i>
                        <i class="fa fa-google-plus-square"></i>
                        <i class="fa fa-youtube-square"></i>
                        @include('layouts.clock')
                </div>
            </div>

            <div class="card">
                <div class="right-col-box categories-box">
                    <h4>Popularne kategorie</h4>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <h5>Buty</h5>
                            <span>{{$buty}}</span>
                        </li>
                        <li class="list-group-item">
                            <h5>Elektronika</h5>
                            <span>{{$elektronika}}</span>
                        </li>
                        <li class="list-group-item">
                            <h5>Motoryzacja</h5>
                            <span>{{$motoryzacja}}</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="right-col-box">
                    <h4>Statystyki</h4>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="badge">{{$ilepost}}</span>Postów
                        </li>
                        <li class="list-group-item">
                            <span class="badge">{{$ilekat}}</span>Kategorii
                        </li>
                        <li class="list-group-item">
                            <span class="badge">{{$ileus}}</span>Użytkowników
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
@stop
