@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Utensils</h5>
        </div>
        <div class="card-body">
            <a href="/utensils/create" class="btn btn-primary">Add Utensil</a>
            <hr>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Unit</td>
                        <td>Quantity</td>
                        <td>Category</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($utensils as $utensil)
                        <tr>
                            <td>{{ $utensil->name }}</td>
                            <td>{{ $utensil->unit }}</td>
                            <td>{{ $utensil->quantity }}</td>
                            <td>{{ $utensil->utensil_category->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
