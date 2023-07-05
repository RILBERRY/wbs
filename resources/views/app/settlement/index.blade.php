@extends('main')
@section('content')

<div class="w-11/12 h-[85vh] mx-auto mt-10 px-[41px] py-2.5 bg-white rounded-lg flex-col justify-start items-start ">
    <div class="w-full self-stretch h-[69px] p-2.5 justify-between items-center gap-2.5 inline-flex">
        <div class="text-[24px] font-normal">Settlement</div>
        <div class="p-2.5 justify-center items-center gap-2.5 flex">
            <div class="h-[37px] rounded-lg border-neutral-400 justify-start items-start gap-2.5 flex">
                <input class="text-neutral-400 text-[14px] font-normal p-1.5 border rounded-md" placeholder="Search" type="text">
            </div>
            <div class="w-[34px] h-[34px] p-auto relative">
                <svg width="34" height="35" viewBox="0 0 34 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="Filter list" clip-path="url(#clip0_70_236)">
                    <path id="Vector" d="M14.1667 26H19.8333V23.1667H14.1667V26ZM4.25 9V11.8333H29.75V9H4.25ZM8.5 18.9167H25.5V16.0833H8.5V18.9167Z" fill="black"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_70_236">
                    <rect width="34" height="34" fill="white" transform="translate(0 0.5)"/>
                    </clipPath>
                    </defs>
                </svg>
            </div>
        </div>
    </div>

    <div class=" flex flex-col gap-2 w-full ">
        <div class="w-full h-[38px] p-2.5 bg-zinc-100 border  border-white border-b-gray-500 justify-start items-start gap-2.5 inline-flex">
            <div class="grow shrink  w-[20%]  text-left text-[15px] font-normal">Bill no</div>
            <div class="grow shrink basis-0 text-center text-[15px] font-normal">House Name</div>
            <div class="grow shrink basis-0 text-center text-[15px] font-normal">Period</div>
            <div class="grow shrink basis-0 text-center text-[15px] font-normal">Amount</div>
        </div>
        <div class="flex flex-col gap-2 overflow-scroll h-[70vh] scrollbar-hide">
            @component('app.components.settlement-table-data')@endcomponent


        </div>
    </div>

</div>
@endsection
