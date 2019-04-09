@extends('layouts.app')

@section('content')
    <h1>Events</h1>

    <ul>
        @forelse($events as $event)
            <li>{{ $event->name }}</li>
            {{ link_to_route('events.edit', 'Edit event', ['event' => $event]) }}
            {!! Form::open(
                [
                    'route' => ['events.destroy', $event],
                    'method' => 'delete'
                ])
            !!}
            {!! Form::submit('Delete Event', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        @empty
            <li>No events found!</li>
        @endforelse
    </ul>

    {{ $events->links() }}
@endsection