@extends('dashboard.master');

@section('content')

    <a href="{{ route('post.create') }}">Create</a>

    <table>
        <thead>
            <tr>
                <td>
                    <tr>
                        Title
                    </tr>
                    <tr>
                        Posted
                    </tr>
                    <tr>
                        Category
                    </tr>
                    <tr>
                        Options
                    </tr>
                </td>
            </tr>

        </thead>
        <tbody>
            @foreach ($posts as $p)
                <tr>
                    <td>
                        {{ $p->title }}
                    </td>
                    <td>
                        {{ $p->posted }}
                    </td>
                    <td>
                        {{ $p->category->title }}
                    </td>
                    <td>
                        <a href="{{ route('post.edit', $p) }}">Create</a>
                        <a href="{{ route('post.show', $p) }}"></a>
                        <form action="{{ route('post.destroy', $p) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }};

@endsection
