@extends('layouts.app')

@section('template_title')
    {{ $ticket->name ?? "{{ __('Show') Ticket" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Ticket</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tickets.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>User Client Id:</strong>
                            {{ $ticket->user_client_id }}
                        </div>
                        <div class="form-group">
                            <strong>Estatus:</strong>
                            {{ $ticket->estatus }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
