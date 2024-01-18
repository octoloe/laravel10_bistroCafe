<?php

namespace App\Http\Controllers\Admin;

use App\Models\Table;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TableStoreRequest;

class TableController extends Controller
{

    public function index()
    {
        $tables = Table::all();
        return view('admin.tables.index', ['tables' => $tables]);
    }


    public function create()
    {
        return view('admin.tables.create');
    }


    public function store(TableStoreRequest $request)
    {
        Table::create([
            'name' => $request->name,
            'guest_number' => $request->guest_number,
            'status' => $request->status,
            'location' => $request->location,
        ]);

        return redirect()->route('admin.tables.index')->with('success', 'Eine neuer Tisch wurde erfolgreich angelegt!');
    }


    public function show(string $id)
    {
        $table = Table::find($id);
        return view('admin.tables.show', ['table' => $table]);
    }


    public function edit(Table $table)
    {
        return view('admin.tables.edit', ['table' => $table]);
    }


    public function update(TableStoreRequest $request, Table $table)
    {
        $table->update($request->validated());

        return redirect()->route('admin.tables.index')->with('success', 'Der Tisch wurde erfolgreich aktualisiert!');;
    }


    public function destroy(Table $table)
    {
        $table->delete();

        return redirect()->route('admin.tables.index')->with('success', 'Der Tisch wurde erfolgreich gelöscht!');;
    }
}
