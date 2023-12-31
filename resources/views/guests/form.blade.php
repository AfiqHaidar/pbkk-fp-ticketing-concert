<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guest Form</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex flex-col min-h-screen items-center justify-center bg-neutral-800">
    <div class="my-6">
        <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-neutral-300 md:text-5xl lg:text-6xl"> Guest Form</h1>
    </div>

    <div class=" flex-col justify-center items-center">
       <form method="POST" action="{{ route('guest.store') }}" enctype="multipart/form-data">

            @csrf
            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="name">Name:</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            </div>

            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="concert">Concert:</label>
                <input type="text" id="concert" name="concert" value="{{ old('concert') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            </div>

            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="date">Date:</label>
                <input type="date" id="date" name="date" value="{{ old('date') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            </div>

            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Image:</label>
                <input type="file" name="image" id="image" class="form-control-file p-2.5 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 ">
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PNG or JPEG (MAX. 20MB).</p>
            </div>
            
            <div class="mb-6 flex justify-center">
                <a href="{{ route('guest.index') }}" class="rounded-l-full  bg-neutral-900 px-3.5 py-2 font-com text-sm capitalize text-white shadow shadow-black/60 hover:bg-slate-50 hover:text-neutral-900">Guest List</a>
                <button type="submit" class="rounded-r-full  bg-neutral-900 px-3.5 py-2 font-com text-sm capitalize text-white shadow shadow-black/60 hover:bg-slate-50 hover:text-neutral-900" >Add Guest</button>
            </div>
             </form>
        </div>
    </div>
</body>
</html>