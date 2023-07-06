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
    <div class="w-screen h-screen bg-green-300 ">
        <div class="w-screen h-screen bg-zinc-100 ">
            <div class="w-full h-[50px] px-6 py-2.5 left-0 top-0 relative bg-fuchsia-900 justify-start items-center gap-2.5 inline-flex">
                <img class="w-[30px] h-[30px] rounded-lg" src="https://via.placeholder.com/30x30" />
                <div class="w-[560px] h-[50px] px-5 py-2.5 justify-start items-start gap-2.5 flex">
                    <a href="/" class= " hover:bg-fuchsia-800 rounded-md p-2 grow shrink basis-0  text-center text-white text-[13px] font-normal">Dashboard</a>
                    <a href="/billing" class=" hover:bg-fuchsia-800 rounded-md p-2 grow shrink basis-0  text-center text-white text-[13px] font-normal">Billing</a>
                    <a href="/settlement" class=" hover:bg-fuchsia-800 rounded-md p-2 grow shrink basis-0  text-center text-white text-[13px] font-normal">Settlement</a>
                    <a href="/setting" class=" hover:bg-fuchsia-800 rounded-md p-2 grow shrink basis-0  text-center text-white text-[13px] font-normal">Setting</a>
                </div>
                <div class="grow shrink basis-0 p-2.5"></div>
                <div class="justify-start items-center gap-1.5 flex">
                    <div class="px-2.5 py-1.5 flex-col justify-start items-center gap-0.5 inline-flex">
                        <div class="text-white text-[12px] font-normal">Ali Rilwan</div>
                        <div class="text-white text-[10px] font-normal">Developer</div>
                    </div>
                    <img class="w-[30px] h-[30px] rounded-[25px]" src="https://via.placeholder.com/30x30" />
                </div>
            </div>
            <div class="w-full m-auto ">

                @yield('content')

            </div>
        </div>
    </div>
</body>
</html>
