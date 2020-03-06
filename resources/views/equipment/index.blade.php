@extends('layouts.master')
@section('content')
	{{-- HTML CODE --}}
	<a href = '/equipment/create' class="btn btn-primary">Add Equipment</a>
	<hr>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>SN</th>
				<th>Brand</th>
				<th>Date Bought</th>
				<th>Category</th>
			</tr>
		</thead>
		<tbody>
			@foreach($equipments as $equipment)
				<tr>
					<td>{{ $equipment->serial_number }}</td>
					<td>{{ $equipment->brand }}</td>
					<td>{{ $equipment->date_bought }}</td>
					<td>{{ $equipment->equipment_category->name }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection