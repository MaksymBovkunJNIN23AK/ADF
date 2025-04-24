@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add New Owner</h2>

        <form action="{{ route('owners.store') }}" method="POST">
            @csrf
            @include('owners.form')
            <button type="submit" class="btn btn-primary mt-3">Save</button>
            <a href="{{ route('owners.index') }}" class="btn btn-secondary mt-3">Cancel</a>
        </form>
    </div>
@endsection
