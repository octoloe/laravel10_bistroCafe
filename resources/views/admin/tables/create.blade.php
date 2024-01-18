@extends('layouts.admin')

@section('content')

<div class="container">

    <h3 class="text-center">Einen Neuen Tisch Anlegen</h3>

    <div class="row">
        <div class="d-flex justify-content-end mt-5">
            <a href="{{ route('admin.tables.index') }}" class="btn btn-outline-secondary btn-sm">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-caret-left" viewBox="0 0 16 16">
                    <path
                        d="M10 12.796V3.204L4.519 8zm-.659.753-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753" />
                </svg>
                zurück
            </a>
        </div>
    </div>

    <div class="card shadow mt-4 mx-5 mb-5 p-3 rounded">
        <form action="{{ route('admin.tables.store') }}" method="POST">
            @csrf

            <div class="mb-5">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                    placeholder="Coffee Ipsum" />

                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="row g-3 mb-5">
                <div class="col">
                    <label for="status" class="form-label">Status</label>
                    <select id="status" name="status" class="form-select">
                        <option>-- Bitte Auswählen --</option>
                        @foreach (App\Enums\TableStatus::cases() as $status)
                        <option value="{{ $status->value }}">{{ $status->name }}</option>
                        @endforeach

                    </select>
                    @error('status')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col">
                    <label for="location" class="form-label">Ortswahl</label>
                    <select id="location" name="location" class="form-select">
                        <option>-- Bitte Auswählen --</option>
                        @foreach (App\Enums\TableLocation::cases() as $location)
                        <option value="{{ $location->value }}">{{ $location->name }}</option>
                        @endforeach

                    </select>
                    @error('location')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="mb-5">
                <label for="guest_number" class="form-label">Gästeanzahl</label>
                <input type="number" class="form-control @error('guest_number') is-invalid @enderror"
                    name="guest_number" id="guest_number" placeholder="Coffee Ipsum" />

                @error('guest_number')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <div class="col-12">
                    <button class="btn btn-outline-primary btn-sm" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-check2-all" viewBox="0 0 16 16">
                            <path
                                d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0" />
                            <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708" />
                        </svg>
                        Bestätigen
                    </button>
                </div>
            </div>
        </form>

    </div>
</div>
@endsection