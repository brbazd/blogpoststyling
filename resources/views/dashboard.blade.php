<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="max-h-1/2 w-full bg-[url('/resources/images/head.jpg')] bg-center">
        <div class="pt-72 pb-24">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden w-1/2">
                    <div class="py-6 text-white text-6xl font-semibold font-vollkorn">
                        {{ __("You're logged in!") }}
                    </div>
                    <div class="py-3 text-white font-xl">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae animi odio facere accusantium enim velit cupiditate quasi at laudantium debitis voluptatem, quisquam reiciendis nam repellat ex, ducimus illo, quibusdam rerum consequuntur aut odit provident! Totam porro autem sint odio, labore quos ducimus, minus dolor ratione commodi neque corrupti veniam perspiciatis.
                    </div>
                </div>
            </div>
        </div>
    </div>



    <h2 class="font-semibold font-vollkorn text-4xl text-left mx-auto max-w-7xl px-8 pb-2 pt-24">Popular blogposts</h1>

    <div class="pb-8">
        <div class="mx-auto grid gap-4 grid-cols-4 p-6 max-w-7xl">
            @foreach ($blogposts as $blogpost)
                <div class="p-2 h-96 inline-block">
                    <img class="rounded" src="{{$blogpost->image}}" alt="">
                    <p class="text-left py-2 text-xs">{{$blogpost->created_at}}</p>
                    <h3 class="font-semibold font-vollkorn text-2xl">{{Str::ucfirst($blogpost->title)}}</h3>
                    <p class="text-sm">{{Str::limit($blogpost->content, 100, '...');}}</p>
                </div>
            @endforeach
        </div>
    </div>

    <div class="py-8 bg-slate-900">
        <div class="mx-auto max-w-7xl grid gap-4 grid-cols-4 px-6 text-slate-200 py-12">
            <div>
                <h2 class="font-vollkorn font-semibold text-2xl py-1">Contact the Publisher</h2>
                <P class="text-sm py-1">mail@mail.com</P>
                <P class="text-sm py-1">+381 61 1234 567</P>
            </div>
            <div>
                <h2 class="font-vollkorn font-semibold text-2xl py-1">Explore</h2>
                <table>
                    <tr>
                        <td>
                            <a href="#" class="text-sm py-1 inline-block">About us</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#" class="text-sm py-1 inline-block">Partnership</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#" class="text-sm py-1 inline-block">Jobs</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#" class="text-sm py-1 inline-block">Advertisement</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#" class="text-sm py-1 inline-block">Membership</a>
                        </td>
                    </tr>
                </table>
            </div>
            <div>
                <h2 class="font-vollkorn font-semibold text-2xl py-1">Headquarters</h2>
                <P class="text-sm py-1">123 Main St</P>
                <P class="text-sm py-1">11000 Belgrade</P>
                <P class="text-sm py-1">Serbia</P>
            </div>
            <div>
                <h2 class="font-vollkorn font-semibold text-2xl py-1">Social Media</h2>
                <P class="text-sm py-1">fsfdsa</P>
                <P class="text-sm py-1">fsfdsa</P>
                <P class="text-sm py-1">fsfdsa</P>
            </div>
        </div>
    </div>
    <div class="py-6 bg-slate-800">
        <div class="mx-auto max-w-7xl flex justify-between text-slate-200 px-6">
            <p class="text-sm">TEST Corporation</p>
            <p class="text-sm">2023 &copy;</p>
        </div>
    </div>
</x-app-layout>
