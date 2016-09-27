@extends('layouts.master')
@section('title','cards')
@section('content')
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Edite Note</h3>
	  </div>
	  <div class="panel-body">
		<form method="POST" action="/notes/{{$note->id}}">
		<input type="hidden" name="_method" value="PUT">
    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		 
		<div class="form-group">
			<textarea class="form-control" name="body">{{$note->body}}</textarea>

		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Update Note</button>
			
		</div>
		</form>
	  </div>
	</div>
@endsection