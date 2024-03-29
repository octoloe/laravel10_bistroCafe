@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}

                </div>
                <div class="card-body">
                    <div class="panel-body">
                        Zum Admin Bereich:
                        <a href="{{route('admin.index')}}" class="text-decoration-none text-info p-2">Admin Bereich</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection