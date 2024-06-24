@extends('app')
@section('content')
<br><br>
<div class="container">
<h1 class="text-center">Authore Posts</h1><br><br>
<div class="card card-default">
	<div class="card-header">Posts</div>
	<div class="card-body">
		<ul class="list-group">
			@foreach ($uniqueUserIds as $uniqueUserId)
			<li class="list-group-item d-flex justify-content-between align-item-center">
				<div class="col-md-3">
				Author - {{$uniqueUserId['userId']}}
				</div>
				<span class="badge badge-primary badge-pill">
					{{$countUnique[$uniqueUserId['userId']]}} Posts
				</span>
				<div class="col-md-6">
					<a href="{{ route('post.show', $uniqueUserId['userId']) }}" class="btn btn-sm float-right btn-success">See More..
					</a>
				</div>
			</li>
			@endforeach
		</ul>
	</div>
</div>
</div>

@endsection