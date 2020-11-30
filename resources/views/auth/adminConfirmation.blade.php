@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Wait for admin confirmation') }}
                        </div>
                    @endif

                    {{ __('Wait for admin confirmation') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

