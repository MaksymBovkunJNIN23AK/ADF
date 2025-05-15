@extends('layouts.app')

@section('title', 'Owners List')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Car Owners</h2>
        <a href="{{ route('owners.create') }}" class="btn btn-primary">Add Owner</a>
    </div>

    @foreach ($owners as $owner)
        <div class="card mb-3">
            <div class="card-header">
                <strong>{{ $owner->name }} {{ $owner->surname }}</strong> — {{ $owner->email }}
            </div>
            <div class="card-body">
                <p><strong>Phone:</strong> {{ $owner->phone }}</p>
                <p><strong>Address:</strong> {{ $owner->address }}</p>

                @if ($owner->cars->count())
                    <h5>Cars:</h5>
                    <ul class="list-group mb-3">
                        @foreach ($owner->cars as $car)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <strong>{{ $car->reg_number }}</strong> —
                                    {{ $car->brand }} {{ $car->model }} ({{ $car->year }})
                                </div>
                                <div>
                                    <a href="{{ route('cars.edit', $car) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('cars.destroy', $car) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this car?')">Delete</button>
                                    </form>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p>No cars registered.</p>
                @endif

                <div class="mt-3">
                    <a href="{{ route('owners.edit', $owner) }}" class="btn btn-sm btn-primary">Edit Owner</a>
                    <form action="{{ route('owners.destroy', $owner) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this owner and all their cars?')">Delete Owner</button>
                    </form>
                    <a href="{{ route('cars.create', ['owner_id' => $owner->id]) }}" class="btn btn-sm btn-success">Add Car</a>
                </div>
            </div>
        </div>
    @endforeach
@endsection
