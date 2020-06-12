@extends('layouts.app')

@section('title')
Top page
@endsection

@section('content')
<div>
    <h3>Countries</h3>
    Only <a href="/geo/us/">United States</a> has state list as data in default status.
    <ul class="jp_map">
    @foreach ($countries as $country)
        <li><a href="/geo/{{ $country->id }}/">{{ $country->name }}</a></li>
    @endforeach
    </ul>
    {{ $countries->links() }}
</div>

@endsection
