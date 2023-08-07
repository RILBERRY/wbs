<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>WBS</title>
</head>
<body>
    {{-- @yield('content') --}}
    <div class="w-full h-[67px] px-[27px] py-2.5 bg-blue-500 justify-center items-center gap-2.5 inline-flex">
        <div class="grow shrink basis-0 text-white text-2xl font-bold">FMS</div>
    </div>
    <div class="w-full h-[560px] p-2.5 flex-col justify-start items-center gap-2.5 inline-flex">
            @yield('content')

    </div>

</body>
</html>

