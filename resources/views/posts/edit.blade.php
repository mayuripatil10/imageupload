@extends('layout.app')
           
           
            @section('content')
            
                
 {!! Form::open(['action' => ['PostsController@update',$post->id], 'method'=>'POST','enctype'=>'multipart/form-data']) !!}
   
   <div class=container>
   <div class="panel panel-warning">
  <div class="panel-heading">
    <h3 class="panel-title">Edit Post</h3>
  </div>
  <div class="panel-body">
   

<div class="form-group">
      {{Form::label('name', 'name')}}
      {{Form::text('name',$post->firstname,['class'=>'form-control','placeholder'=>'First name']) }}
    </div>

<div class="form-group">
      {{Form::label('price', 'price')}}
      {{Form::text('price',$post->lastname,['class'=>'form-control','placeholder'=>'Last name']) }}
    </div>

<div class="form-group">
      {{Form::label('gst', 'gst')}}
      {{Form::textarea('gst',$post->gst,['class'=>'form-control']) }}
    </div>
<div class="form-group">
      
      {{Form::file('post_image'  ,['class'=>'btn' ]) }}
    </div> 
 
{{Form::hidden('_method' ,'PUT') }}
{{Form::submit('Update',['class'=>"btn btn-primary btn-lg"]) }}

  </div>
</div>
</div>
{!! Form::close() !!}

           @endsection



 

