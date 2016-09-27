@extends('layouts.master')
@section('title','cards')
@section('content')
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">All Cards Here</h3>
	  </div>
	  <div class="panel-body">
	    	<ul class="list-group">
	    	@foreach ($cards as $card)
	    		<li class="list-group-item">
		<a href="{{$card->path()}}">
	    		{{$card->title}}
	    		</a>
	    		</li>
	    		<!-- <a href="cards/{{$card->id}}"> -->
	    		<!-- <li>{{$card->title}}</li> -->
	    		<!-- </a> -->
	    	@endforeach 
	    	</ul>

	  </div>
	</div>
@endsection