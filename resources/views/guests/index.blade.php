<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guest List</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex flex-col min-h-screen items-center justify-center bg-neutral-800">

        <div class="p-4 mb-10 mt-2 ">
            <a href="{{ route('guest.form') }}" class="rounded-full  bg-neutral-900 px-3.5 py-2 font-com text-sm capitalize text-white shadow shadow-black/60 hover:bg-slate-50 hover:text-neutral-900">Add Guest</a>
        </div>

        <div class="my-6">
            <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-neutral-300 md:text-5xl lg:text-6xl"> Guest List</h1>
        </div>

        <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3">

            @foreach ($guests as $guest)

            <div class="group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30">
                <div class="h-96 w-72">
                    <img class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125" src="{{ asset('storage/' . $guest->image) }}" alt="" />
                </div>
                <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70 ">
                </div>
                <div class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                    <h1 class="font-dmserif text-3xl font-bold text-white">{{ $guest->name }}</h1>
                    <p class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">{{ $guest->date }} <br> {{ $guest->concert }} </p>
                    <button class="rounded-full mt-10 bg-neutral-900 px-3.5 py-2 font-com text-sm capitalize text-white shadow shadow-black/60 hover:bg-slate-50 hover:text-neutral-900">See More</button>
                </div>
            </div>

            @endforeach

        </div>
    </div>
</body>
</html>