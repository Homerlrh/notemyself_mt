@extends('layouts.app')

@section('content')
    <div class="flex flex-col content-between align-middle items-center">

        <section class="w-full flex justify-content-center justify-center items-center border-black border-b pb-4">
            <h1 class="text-2xl font-bold">{{$user->email}}&nbsp;-&nbsp;</h1>
            <form method="post" action="/logout">
                @csrf
                <button
                    class="font-bold text-lg block hover:underline"
                >
                    Logout
                </button>
            </form>
        </section>

        <section class="w-full py-6 border-black border-b">
            <a
                href="/profile"
                class="font-bold text-lg block border border-black h-20 w-1/3 mx-auto text-center"
            >
                Profile
            </a>
        </section>
        <section class="w-full grid grid-cols-4 gap-2 pt-6 px-4">
            @include("partial.Notes")
            @include("partial.Websites")
            @include("partial.Images")
            @include("partial.Todos")
        </section>


    </div>
@endsection
