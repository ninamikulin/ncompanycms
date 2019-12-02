@extends('layouts.app')

@section('content')
<div class="card text-center">
    <div class="card-body">
        <h5 class="card-title">{{$company->name}} - Employees</h5>
    </div>
@if ($company->employees->isNotEmpty())
    <table class="table text-center p-3">
    	<thead>
		   	<tr>
		   		<th scope="col">#</th> 
		   		<th scope="col">First name</th> 
			   	<th scope="col">Last name</th>
			   	<th scope="col">Email</th>
				<th scope="col">Phone Number</th>
				<th scope="col"></th>
			</tr>
	   	</thead>
	   	<tbody>
	   		<?php $i = 0 ?>
	   		@foreach($company->employees as $employee)
		    <?php $i++ ?>
		    <tr>
		      <td scope="row">{{ $i }}</td>
		      <td>{{$employee->first_name}}</td>
		      <td>{{$employee->last_name}}</td>
		      <td>{{$employee->email}}</td>
		      <td>{{$employee->phone}}</td> 
		      <td><a href="/companies/{{$employee->company->id}}/employees/{{$employee->id}}/edit">Edit</a></td>    	
		    </tr>
		    @endforeach
		    </tbody>	
	</table> 
@else
<li class="list-group-item text-center">{{$company->name}} doesn't have any employees yet.</li>
@endif	
</div>
	<div class="mt-3">
		<a href="/companies/{{$company->id}}/employees/create"><button type="submit" class="btn btn-primary">Add employee</button></a>
	</div>
</div>
@endsection