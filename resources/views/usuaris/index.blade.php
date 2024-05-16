@php
    use App\Models\Post;
@endphp

@extends('layouts.master')

@section('content')
    <div class="container">
        <ul style="list-style-type: none;display:flex">
            <li style="margin-right: 30px">
                <h1>Listado de Posts</h1>
            </li>
            <li>
                <a href="/create"><h1>Crear nuevo post</h1></a>
            </li>
        </ul>



        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Slug</th>
                    <th>Extract</th>
                    <th>Body</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->name }}</td>
                        <td>{{ $post->slug }}</td>
                        <td>{{ $post->extract }}</td>
                        <td>{{ $post->body }}</td>
                        <td>{{ $post->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $posts->links() }}
    </div>
@endsection
