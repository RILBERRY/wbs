@extends('main')
@section('content')

<div class="w-11/12 h-[85vh] mx-auto mt-10 px-[41px] py-2.5 bg-white rounded-lg flex-col justify-start items-start ">
    <div class="w-full self-stretch h-[69px] p-2.5 justify-between items-center gap-2.5 inline-flex">
        <div class="text-[24px] font-normal">Billings</div>
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
            <div class=" px-2.5 w-[25%] justify-start items-center gap-2.5 flex">
                <div class="text-center text-[15px] font-normal">Bill No</div>
            </div>
            <div class="w-[25%] text-center text-[15px] font-normal">House Name</div>
            <div class="w-[20%] text-center text-[15px] font-normal">Period</div>
            <div class="w-[20%] text-center text-[15px] font-normal">Amount</div>
            <div class="w-[10%] text-center text-[12px] font-normal">Action</div>
        </div>
        <div class="flex flex-col gap-2 overflow-scroll h-[67vh] scrollbar-hide">
            @component('app.components.billing-table-data')@endcomponent
        </div>
        <div class="w-full h-10 p-2.5 justify-end items-center gap-2.5 inline-flex">
            <div class="px-2.5 justify-center items-center gap-2.5 flex">
                <button class="w-10 relative hover:bg-gray-200 p-2 rounded-md ">
                    <svg width="100%" height="100%" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="Arrow back ios" clip-path="url(#clip0_76_325)">
                        <path id="Vector" d="M10.225 3.225L8.75 1.75L0.5 10L8.75 18.25L10.225 16.775L3.45 10L10.225 3.225Z" fill="black"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_76_325">
                        <rect width="20" height="20" fill="white" transform="translate(0.5)"/>
                        </clipPath>
                        </defs>
                    </svg>
                </button>
                <button class="px-5 rounded-md hover:bg-gray-200 bg-gray-400  ">1</button>
                <button class="px-5 rounded-md hover:bg-gray-200 bg-gray-400  ">2</button>
                <button class="px-5 rounded-md hover:bg-gray-200 bg-gray-400  font-bold">3</button>
                <button class="px-5 rounded-md hover:bg-gray-200 bg-gray-400  ">4</button>
                <button class="px-5 rounded-md hover:bg-gray-200 bg-gray-400  ">5</button>
                <button class="w-10  relative hover:bg-gray-200 p-2 rounded-md ">
                    <svg width="100%" height="100%" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="Arrow forward ios" clip-path="url(#clip0_76_333)">
                        <path id="Vector" d="M5.40002 3.43329L11.9667 9.99996L5.40002 16.5666L7.16669 18.3333L15.5 9.99996L7.16669 1.66663L5.40002 3.43329Z" fill="black"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_76_333">
                        <rect width="20" height="20" fill="white" transform="translate(0.5)"/>
                        </clipPath>
                        </defs>
                    </svg>
                </button>
            </div>
        </div>
    </div>

</div>
@endsection
