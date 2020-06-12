@extends('layouts.app')

@section('title')
States of {{ $country->name }}
@endsection

@section('content')
<div>
    <h2>States of {{ $country->name }}</h2>
    <ul class="jp_map">
    @foreach ($states as $state)
        <li><a href="/geo/{{ $country->id }}/{{ $state->id }}/">{{ $state->name }}</a></li>
    @endforeach
    </ul>
    {{ $states->links() }}
</div>

@endsection
