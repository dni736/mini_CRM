@extends('layouts.app')

@section('content')
	@if ($message = Session::get('success'))
		@auth
		<div class="alert alert-success">
	        <strong>{{ $message }}</strong>
		</div>
		@endauth
	@endif
	<h1>Companies</h1>
	@auth
	<a class="btn btn-primary" href="{{ route('companies.create') }}">Create Company</a>
	@endauth
	@if(count($companies) > 0)
		@foreach($companies as $company)
			<div class="card bg-light p-3" style="margin-bottom: 5px;">
				<p>{{$company->company_name}}</p>
			</div>
            <form action="{{ route('companies.destroy', $company->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('companies.show', $company->id) }}">Show</a>

                    @auth
    
                    <a class="btn btn-primary" href="{{ route('companies.edit', $company->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endauth
                </form>
		@endforeach
		{{$companies->links()}}
	@else
		<p>No companies found</p>
	@endif
@endsection