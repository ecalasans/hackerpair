{!! Form::model($event,
    [
        'method' => 'put',
        'route' => ['events.update', $event->slug],
        'class' => 'form'
    ]
)
!!}

<div class="form-group">
    {!! Form::label('name', 'Event name') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Event Description') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Update Event', ['class' => 'btn btn-primary']) !!}
</div>

{!! Form::close() !!}
