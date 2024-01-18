<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Table;
use App\Enums\TableStatus;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationStoreRequest;

class ReservationController extends Controller
{

    public function index()
    {
        $reservations = Reservation::all();
        return view('admin.reservations.index', ['reservations' => $reservations]);
    }


    public function create()
    {
        $tables = Table::where('status', TableStatus::Verfügbar)->get();
        return view('admin.reservations.create', ['tables' => $tables]);
    }


    public function store(ReservationStoreRequest $request)
    {
        $table = Table::findOrFail($request->table_id);
        if ($request->guest_number > $table->guest_number) {
            return back()->with('warning', 'Bitte den Tisch passend zur Anzahl der Gäste auswählen!');
        }

        Reservation::create($request->validated());

        return to_route('admin.reservations.index')->with('success', 'Eine neue Reservierung wurde erfolgreich angelegt!');;
    }


    public function destroy(Reservation $reservation)
    {
        $reservation->delete();

        return redirect()->route('admin.reservations.index')->with('success', 'Die Reservierung wurde erfolgreich gelöscht!');;
    }
}
