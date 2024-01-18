@extends('layouts.admin')

@section('content')

<div class="container">

    <h1 class="text-center">Reservierungen</h1>

    <div class="row">
        <div class="d-flex justify-content-end mt-5">
            <a href="{{ route('admin.reservations.create') }}" class="btn btn-outline-success btn-sm">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus"
                    viewBox="0 0 16 16">
                    <path
                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                </svg>
                Neue Reservierung
            </a>
        </div>
    </div>

    <div class="card shadow mt-3 mx-5 px-1 rounded">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Anzahl der Gäste</th>
                        <th scope="col">Reservierungsdatum</th>
                        <th scope="col">Vorname</th>
                        <th scope="col">Nachname</th>
                        <th scope="col">Telefonnr.</th>
                        <th scope="col">eMail.</th>
                        <th scope="col">Tisch</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>

                <tbody class="table-group-divider">
                    @foreach ($reservations as $reservation)
                    <tr>
                        <th scope="row">{{ $loop->index}}</th>
                        <td>{{ $reservation->guest_number }}</td>
                        <td>{{ $reservation->res_date }}</td>
                        <td>{{ $reservation->first_name }}</td>
                        <td>{{ $reservation->last_name }}</td>
                        <td>{{ $reservation->tel_number }}</td>
                        <td>{{ $reservation->email }}</td>
                        <td>{{ $reservation->table->name}}</td>
                        <td>
                            <div>
                                <form action="{{ route('admin.reservations.destroy', $reservation->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm" value="Delete" id=""
                                        ONCLICK="deleteVerification()">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                            <path
                                                d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
                                        </svg>
                                        Löschen
                                    </button>
                                </form>

                                <script>
                                    function deleteVerification() {
                                                            confirm("Möchten Sie diesen Eintrag wirklich löschen?");
                                                            }
                                </script>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection