@extends('layouts.app')

@section('title', 'Edit Car')

@section('content')
    <h2>Edit Car</h2>

    <form action="{{ route('cars.update', $car) }}" method="POST">
        @csrf
        @method('PUT')
        @include('cars.form')
        <button type="submit" class="btn btn-primary mt-2">Update</button>
        <a href="{{ route('owners.index') }}" class="btn btn-secondary mt-2">Cancel</a>
    </form>
@endsection
