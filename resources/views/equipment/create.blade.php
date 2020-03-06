@extends('layouts.master')
@section('content')
	<form action="/equipment/store" method="POST">
		@csrf
		<input type="text" name="serial_number" placeholder="Serial Number">
		<input type="text" name="brand" placeholder="Brand">
		<input type="date" name="date_bought" placeholder="Date Bought">
		<select name="equipment_category_id" id="">
			@foreach($equipment_categories as $category)
				<option value="{{ $category->id }}">{{ $category->name }}</option>
			@endforeach
		</select>
		<input type="submit">
	</form>
@endsection