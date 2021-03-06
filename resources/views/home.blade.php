@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @auth('library')
                        Library
                        @else
                        Admin

                        @endauth

                    You are logged in! {{\Illuminate\Support\Facades\Auth::guard("library")->check() ? 'library' : 'Admin'}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
