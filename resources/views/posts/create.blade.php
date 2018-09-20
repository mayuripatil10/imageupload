@extends('layout.app')


@section('content')


    {!! Form::open(['action' => 'PostsController@store', 'method'=>'POST','enctype'=>'multipart/form-data']) !!}


    <div class=container>
        <div class="form-group">
            {{Form::label('id', 'id')}}
            {{Form::text('id' , ['class'=>'form-control'] ) }}
        </div>
        <div class="form-group">
            {{Form::label('name', 'name')}}
            {{Form::text('name','',['class'=>'form-control']) }}
        </div>

        <div class="form-group">
            {{Form::label('gst', 'gst')}}
            {{Form::text('gst','',['class'=>'form-control']) }}
        </div>
        <div class="form-group">
            {{Form::label('price', 'price')}}
            {{Form::text('price','',['class'=>'form-control']) }}
        </div>


        <div class="form-group">

            {{Form::file('post_image', ['class'=>'btn ' ]) }}
        </div>

        {{Form::submit('Create',['class'=>'btn btn-primary btn-lg' ] ) }}

    </div>


    {!! Form::close() !!}


@endsection





