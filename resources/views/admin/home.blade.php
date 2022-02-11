@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="offset-2"></div>
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
                {{$user_name}}
            </div>
        </div>
    </div>
</div>
@endsection
