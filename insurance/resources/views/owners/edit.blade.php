@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Owner</h2>

        <form action="{{ route('owners.update', $owner) }}" method="POST">
            @csrf
            @method('PUT')
            @include('owners.form', ['owner' => $owner])
            <button type="submit" class="btn btn-primary mt-3">Update</button>
            <a href="{{ route('owners.index') }}" class="btn btn-secondary mt-3">Cancel</a>
        </form>
    </div>
@endsection
