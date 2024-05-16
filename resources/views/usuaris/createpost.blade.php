@extends('layouts.app')

@section('content')
    <section class="px-6 py-8">
        <ul style="list-style-type: none;display:flex">
            <li style="margin-right: 30px">
                <h1>Listado de Posts</h1>
            </li>
            <li>
                <a href="/create"><h1>Crear nuevo post</h1></a>
            </li>
        </ul>
        <main class="max-w-lg mx-auto mt-10">
            <div class="border border-gray-200 p-6 rounded-xl">
                <h1 class="text-center font-bold text-xl">Create Post</h1>

                <form method="POST" action="login" class="mt-10">
                    @csrf
                    <div class="mt-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">
                            NAME
                        </label>

                        <input class="border border-gray-200 p-2 w-full rounded" name="name" id="name"
                            type='text' value="{{ old('name') }}">

                    </div>
                    <div class="mt-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="slug">
                            SLUG
                        </label>

                        <input class="border border-gray-200 p-2 w-full rounded" name="slug" id="slug"
                            type="text">

                    </div>
                    <div class="mt-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="extract">
                            EXTRACT
                        </label>

                        <input class="border border-gray-200 p-2 w-full rounded" name="extract" id="extract"
                            type="text">

                    </div>
                    <div class="mt-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="body">
                            BODY
                        </label>

                        <input class="border border-gray-200 p-2 w-full rounded" name="body" id="body"
                            type="textarea">

                    </div>
                    <div class="mt-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="status">
                            STATUS
                        </label>

                        <input class="border border-gray-200 p-2 w-full rounded" name="status" id="status"
                            type="number" min="1" max="2">

                    </div>

                    <div class="mt-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="category">
                            CATEGORY
                        </label>

                        <select name="category" id="category">
                            <option value="6">Eliseo Strosin</option>
                            <option value="7">Wilhelmine Douglas</option>
                            <option value="8">Bernard Wisoky Jr.</option>
                          </select>

                    
                    <div class="mt-6">
                        <button type="submit"
                            class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600">
                            Guarda
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </section>
@endsection