@extends('layouts.admin')

@section('content')
<div class="container">
    <h3 class="text-center">Eine Neue Reservierung Anlegen</h3>
    <div class="row">
        <div class="d-flex justify-content-end mt-5">
            <a href="{{ route('admin.reservations.index') }}" class="btn btn-outline-secondary btn-sm">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-caret-left" viewBox="0 0 16 16">
                    <path
                        d="M10 12.796V3.204L4.519 8zm-.659.753-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753" />
                </svg>
                zurück
            </a>
        </div>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger mt-4">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card shadow mt-4 mx-5 mb-5 p-3 rounded">
        <form action="{{ route('admin.reservations.store') }}" method="POST">
            @csrf

            <div class="row g-3 mb-5">
                <div class="col">
                    <label for="first_name" class="form-label">Vorname</label>
                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name"
                        id="first_name" placeholder="Coffee Ipsum" />

                    @error('first_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col">
                    <label for="last_name" class="form-label">Nachname</label>
                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                        id="last_name" placeholder="Coffee Ipsum" />

                    @error('last_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row g-3 mb-5">
                <div class="col">
                    <label for="tel_number" class="form-label">Telefonnr.</label>
                    <input type="text" class="form-control @error('tel_number') is-invalid @enderror" name="tel_number"
                        id="tel_number" />
                    @error('tel_number')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col">
                    <label for="email" class="form-label">eMail</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        id="email" />
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row g-3 mb-5">
                <div class="col-4">
                    <label for="res_date" class="form-label">Reservierungsdatum</label>
                    <input type="datetime-local" class="form-control @error('res_date') is-invalid @enderror"
                        name="res_date" id="res_date" />
                    @error('res_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-4">
                    <label for="guest_number" class="form-label">Gästeanzahl</label>
                    <input type="number" class="form-control @error('guest_number') is-invalid @enderror"
                        name="guest_number" id="guest_number" placeholder="Coffee Ipsum" />

                    @error('guest_number')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-4">
                    <label for="table_id" class="form-label">Tisch</label>
                    <select id="table_id" name="table_id" class="form-select">
                        <option>-- Bitte Auswählen --</option>
                        @foreach ($tables as $table)
                        <option value="{{ $table->id }}">{{ $table->name }} ({{ $table->guest_number }} Gäste)</option>
                        @endforeach

                    </select>
                    @error('table_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
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