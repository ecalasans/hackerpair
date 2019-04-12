@extends('layouts.app')

@section('content')

    <ul><li>{!! $events->pluck('name')->implode('</li><li>') !!}</li></ul>
@endsection