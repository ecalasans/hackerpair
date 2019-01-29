<ul>
    @foreach($events as $event)
        <li>
            {{ $event }}
            @if (strpos($event, 'Laravel') !== false)
                ('Sweet framework!')
            @elseif(strpos($event, 'Raspberry') !== false)
                ('love me some Raspberry Pi!')
            @else
                ('dont know much about this one!')
            @endif
        </li>
    @endforeach
</ul>