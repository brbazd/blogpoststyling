<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="max-h-1/2 w-full bg-[url('/resources/images/head.jpg')]">
        <p>LALALAL</p>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("You're logged in!") }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <h2 class="font-bold text-5xl text-left mx-auto max-w-7xl px-4 py-8">Popular blogposts</h1>

    <div class="py-8">
        <div class="mx-auto grid gap-4 grid-cols-4 p-4 max-w-7xl">
            @foreach ($blogposts as $blogpost)
                <div class="p-2 h-96 inline-block">
                    <img class="rounded" src="{{$blogpost->image}}" alt="">
                    <p class="text-left py-2 text-xs">{{$blogpost->created_at}}</p>
                    <h3 class="font-bold text-2xl">{{Str::ucfirst($blogpost->title)}}</h3>
                    <p class="text-sm">{{Str::limit($blogpost->content, 100, '...');}}</p>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
