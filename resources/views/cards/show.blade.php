@extends('layouts.master')
@section('title','cards')
@section('content')
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">{{$card->title}}</h3>
	  </div>
	  <div class="panel-body">
	  	<ul class="list-group">
	    	@foreach($card->notes as $note)
				<li class="list-group-item">{{$note->body}}
				<a href="#"> <span class="pull-right">{{$note->users->username }}</span></a>
				</li>
	    	@endforeach
	 
		</ul>
		<form method="POST" action="/cards/{{$card->id}}/notes">
		 {{ csrf_field() }}
		 
		<div class="form-group">
			<textarea class="form-control" name="body">{{old('body')}}</textarea>
				@if($errors->has('body'))
	                      <p class="text-danger pull-right"> {{$errors->first('body')}}</p>
	            @endif
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Add Note</button>
			
		</div>
		</form>
	  </div>
	</div>
@endsection