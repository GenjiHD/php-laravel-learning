@extends('dashboard.master');

@section('content')

    @include('dashboard.fragment.errors-form')

    <form action="{{ route('post.store') }}" method="post">

    @method('POST');
    @include('dashboard.post._form')

    </form>
@endsection
