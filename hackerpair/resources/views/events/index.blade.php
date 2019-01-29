<table>
    @foreach($events as $event)
        @include('partials._row', ['event' => $event])
    @endforeach
</table>