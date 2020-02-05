@extends('layouts.app')

@section('content')
	@if ($message = Session::get('success'))
		<div class="alert alert-success">
	        <strong>{{ $message }}</strong>
		</div>
	@endif
	<h1>Employees</h1>
	@auth
		<a class="btn btn-primary" href="{{ route('employees.create') }}">Create Employee</a>
	@endauth
	@if(count($employees) > 0)
		@foreach($employees as $employee)
			<div class="card bg-light p-3" style="margin-bottom: 5px;">
				<p>{{$employee->last_name}}</p>
			</div>
            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('employees.show', $employee->id) }}">Show</a>

    				@auth
                    <a class="btn btn-primary" href="{{ route('employees.edit', $employee->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endauth
                </form>
		@endforeach
		{{$employees->links()}}
	@else
		<p>No employees found</p>
	@endif
@endsection