@extends('app')
@section('content')

<h1 class="text-center">Post of Author {{$id}}</h1>
<div class="container card card-default">
	<div class="card-header">
		Post
	</div>
	<div class="card-body">
		<ul class="list-group">
			@foreach ($collections as $collection)
			<li class="list-group-item">
				<div class="card-header">
					<h5>({{$collection['id']}}) {{$collection['title']}}</h5>
				</div>
				<div class="card-body">{{$collection['body']}}</div>
			</li>
			@endforeach
		</ul>
	</div>
</div>

@endsection