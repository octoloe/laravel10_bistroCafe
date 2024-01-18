@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">

            <h1>Hallo {{ Auth::user()->name }}</h1>

        </div>
    </div>
</div>

@endsection