@extends('layouts.app')

@section('content')
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <div class="border border-gray-200 p-6 rounded-xl">
                <h1 class="text-center font-bold text-xl">Accés amb credencials</h1>

                <form method="POST" action="login" class="mt-10">
                    @csrf
                    <div class="mt-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">
                            EMAIL
                        </label>

                        <input class="border border-gray-200 p-2 w-full rounded" name="email" id="email"
                            type="email" value="{{ old('email') }}">
                        @error('email')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mt-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">
                            PASSWORD
                        </label>

                        <input class="border border-gray-200 p-2 w-full rounded" name="password" id="password"
                            type="password">
                        @error('password')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mt-6">
                        <button type="submit"
                            class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600">
                            Accedeix
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </section>
@endsection
