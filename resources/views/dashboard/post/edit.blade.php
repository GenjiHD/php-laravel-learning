@extends('dashboard.master');

@section('content')
    <form action="{{ route('post.update', $post->id) }}" method="post">

        @method('PATCH')
        @include('dashboard.post._form')

    </form>
@endsection
