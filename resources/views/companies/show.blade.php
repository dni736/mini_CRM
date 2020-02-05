@extends('layouts.app')

@section('content')
	<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Companies | Show</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('companies.index') }}">Back</a>
            </div>
        </div>
    </div>
  
    <form action="{{ route('companies.update',$company->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ $company->company_name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    {{ $company->email }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Logo:</strong>
                    {{ $company->logo }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Website:</strong>
                    {{ $company->website }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    @if(count($company->employees)>0)
                    <strong>Employees:</strong>
                    <ul>
                        @foreach($company->employees as $employee)
                            <li>{{ $employee->last_name }}</li>
                        @endforeach
                    </ul>
                    @else
                    <p>No employees found</p>
                    @endif
                </div>
            </div>
        </div>
   
    </form>
@endsection