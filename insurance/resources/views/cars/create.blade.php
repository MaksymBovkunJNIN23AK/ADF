@extends('layouts.app')

@section('title', 'Add Car')

@section('content')
    <h2>Add Car</h2>

    <form action="{{ route('cars.store') }}" method="POST">
        @csrf
        @include('cars.form', ['car' => null])
        <button type="submit" class="btn btn-success mt-2">Save</button>
        <a href="{{ route('owners.index') }}" class="btn btn-secondary mt-2">Back</a>
    </form>
@endsection
