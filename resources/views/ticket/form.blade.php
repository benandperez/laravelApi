<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('user_client_id') }}
            {{ Form::select('user_client_id',$userClients, $ticket->user_client_id, ['class' => 'form-control' . ($errors->has('user_client_id') ? ' is-invalid' : ''), 'placeholder' => 'User Client Id']) }}
            {!! $errors->first('user_client_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estatus') }}
            {{ Form::text('estatus', $ticket->estatus, ['class' => 'form-control' . ($errors->has('estatus') ? ' is-invalid' : ''), 'placeholder' => 'Estatus']) }}
            {!! $errors->first('estatus', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
