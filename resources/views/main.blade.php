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
            <div class="w-full px-10 py-4 left-0 top-0 relative bg-fuchsia-900 justify-start sm:items-center gap-2.5 inline-flex">
                <img class="w-[30px] h-[30px] rounded-lg"  src="{{asset('/icon/logo.png')}}"/>
                <div class="sm:w-[600px] justify-between items-start gap-2.5 flex-col sm:flex-row overflow-hidden h-8 hidden flex sm:flex transition-all" id="navBar">
                    <a href="/" class= " hover:bg-fuchsia-800 rounded-md p-2 grow shrink basis-0  text-center text-white text-[13px] font-normal">Dashboard</a>
                    <a href="/billing" class=" hover:bg-fuchsia-800 rounded-md p-2 grow shrink basis-0  text-center text-white text-[13px] font-normal">Billing</a>
                    <a href="/settlement" class=" hover:bg-fuchsia-800 rounded-md p-2 grow shrink basis-0  text-center text-white text-[13px] font-normal">Settlement</a>
                    <a href="/setting/users" class=" hover:bg-fuchsia-800 rounded-md p-2 grow shrink basis-0  text-center text-white text-[13px] font-normal">Setting</a>
                </div>
                <div class="justify-start gap-1.5 flex ml-auto ">
                    <div class="px-2.5 py-1.5 flex-col justify-start gap-0.5 hidden  md:inline-flex">
                        <div class="text-white text-[12px] font-normal">Ali Rilwan</div>
                        <div class="text-white text-[10px] font-normal">Developer</div>
                    </div>
                    <div onclick="NavBar()">
                        <img class="w-[30px] h-[30px] rounded-[25px]" src="{{asset('/icon/user.png')}}" />
                    </div>
                </div>
            </div>
            <div class="w-full m-auto ">

                @yield('content')

            </div>
        </div>
    </div>
    <script>
        function NavBar(){
            if(screen.width < 640){
                element = document.getElementById('navBar');
                console.log(element.classList.contains('hidden'));
                element.classList.toggle('h-8', !element.classList.contains('hidden'));
                element.classList.toggle('hidden', !element.classList.contains('hidden'));
                element.classList.toggle('h-48', element.classList.contains('hidden'));
            }
        }
    </script>
</body>
</html>
