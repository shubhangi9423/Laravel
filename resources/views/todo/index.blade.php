@extends('todo.layout')

@section('content')

		<div id="myDIV" class="header">
			<h2 style="margin: 5px">My To Do List</h2>

			<form method="POST" action="{{route('create')}}">
				<input type="text" name="task" id="myInput" placeholder="Title....">
				<input type="submit" value="Add" class="AddBtn">
				{{csrf_field()}}
			</form>
		</div>
      <ul id="myUL">
      	@foreach($tasks as $task)
      	<li onclick="location.href='{{ route('update',['id'=>$task->id]) }}'" @if($task->status) class="checked" @endif>{{$task->content}}
      		<a href="{{route('delete',['id'=>$task->id])}}" class="close">X</a></li>
        @endforeach
      </ul>
	</body>
@endsection	