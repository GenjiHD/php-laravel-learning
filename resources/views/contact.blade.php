@extends('master');

@section('contect')
<h1>Contact 1</h1>
<p>{{ $name }}</p>

@if($name != "Joaquin")
    Tu nombre no es Joaquin
@else
    <h2>Tu nombre es Joaquin</h2>
@endif

<ul>
    @foreach ([1,2,3,4,5] as $item)
        <li>{{ $item }}</li>
    @endforeach
</ul>
@endsection
