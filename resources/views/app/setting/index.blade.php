@extends('main')
@section('content')

<div class="w-11/12 mx-auto mt-10 rounded-lg flex-col justify-start items-start space-y-5 ">
    <div class="w-full h-[89px] px-[41px] py-2.5 bg-white rounded-lg flex-col justify-start items-start gap-2.5 inline-flex">
        <div class="self-stretch h-[69px] p-2.5 justify-between items-center gap-2.5 inline-flex">
            <div class="text-black text-[24px] font-bold">Setting</div>
            <div class=" justify-end items-center gap-2.5 flex">
                <div class="w-32 px-2.5 py-[9px] bg-fuchsia-900 rounded-lg hover:bg-fuchsia-900 cursor-pointer justify-start items-center gap-2 flex"
                    onclick="navTo('users')"
                >
                    <div class="w-5 h-5 relative">
                        <svg width="100%" height="100%" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="Account circle" clip-path="url(#clip0_148_838)">
                            <path id="Vector" d="M10 2.16675C5.4 2.16675 1.66666 5.90008 1.66666 10.5001C1.66666 15.1001 5.4 18.8334 10 18.8334C14.6 18.8334 18.3333 15.1001 18.3333 10.5001C18.3333 5.90008 14.6 2.16675 10 2.16675ZM10 4.66675C11.3833 4.66675 12.5 5.78341 12.5 7.16675C12.5 8.55008 11.3833 9.66675 10 9.66675C8.61666 9.66675 7.5 8.55008 7.5 7.16675C7.5 5.78341 8.61666 4.66675 10 4.66675ZM10 16.5001C7.91666 16.5001 6.075 15.4334 5 13.8167C5.025 12.1584 8.33333 11.2501 10 11.2501C11.6583 11.2501 14.975 12.1584 15 13.8167C13.925 15.4334 12.0833 16.5001 10 16.5001Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_148_838">
                            <rect width="100%" height="20" fill="white" transform="translate(0 0.5)"/>
                            </clipPath>
                            </defs>
                        </svg>

                    </div>
                    <div class="text-center text-white text-[12px] font-normal">Users</div>
                </div>
                <div class="w-32 px-2.5 py-[9px] bg-zinc-500 rounded-lg hover:bg-fuchsia-900 cursor-pointer justify-start items-center gap-2 flex"
                    onclick="navTo('permission')"
                >
                    <div class="w-5 h-5 relative">
                        <svg width="100%" height="100%" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_149_862)">
                            <path d="M24 2L6 10V22C6 33.1 13.68 43.48 24 46C34.32 43.48 42 33.1 42 22V10L24 2ZM24 23.98H38C36.94 32.22 31.44 39.56 24 41.86V24H10V12.6L24 6.38V23.98Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_149_862">
                            <rect width="48" height="48" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="text-center text-white text-[12px] font-normal">Permission</div>
                </div>
                <div class="w-32 px-2.5 py-[9px] bg-zinc-500 rounded-lg hover:bg-fuchsia-900 cursor-pointer justify-start items-center gap-2 flex"
                    onclick="navTo('address')"
                >
                    <div class="w-5 h-5 relative">
                        <svg width="100%" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="Location on" clip-path="url(#clip0_113_701)">
                            <path id="Vector" d="M10 2.16675C6.77501 2.16675 4.16667 4.77508 4.16667 8.00008C4.16667 12.3751 10 18.8334 10 18.8334C10 18.8334 15.8333 12.3751 15.8333 8.00008C15.8333 4.77508 13.225 2.16675 10 2.16675ZM10.1042 12.1667C6.04167 12.2965 6.45834 7.79175 6.45834 7.79175L10.1042 4.45841L13.75 7.79175C13.75 7.79175 14.1667 12.037 10.1042 12.1667Z" fill="white"/>
                            <path id="Rectangle 5" d="M6.875 10.7084L6.25 7.79175H7.5V10.7084H9.375V8.52091H10.8333V10.7084H12.7083V7.79175H14.1667L13.5417 10.7084V12.1667H6.875V10.7084Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_113_701">
                            <rect width="100%" height="20" fill="white" transform="translate(0 0.5)"/>
                            </clipPath>
                            </defs>
                            </svg>
                    </div>
                    <div class="text-center text-white text-[12px] font-normal">Address</div>
                </div>
                <div class="w-32 px-2.5 py-[9px] bg-zinc-500 rounded-lg hover:bg-fuchsia-900 cursor-pointer justify-start items-center gap-2 flex"
                    onclick="navTo('plans')"
                >
                    <div class="w-5 h-5 relative">
                        <svg width="100%" height="100%" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="Frame 52">
                            <path id="Rectangle 6" d="M0.689012 12.6605C0.306088 12.2744 0.301973 11.653 0.679749 11.2618L10.7006 0.884615C10.7006 0.884615 13.3176 2.57494 15.0318 3.57692C14.503 4.17565 14.503 5.02947 15.0318 5.6282C15.6268 6.30177 16.7299 6.30177 17.3248 5.6282C17.8537 5.02947 17.8537 4.17565 17.3248 3.57692C16.7299 2.90335 15.6268 2.90335 15.0318 3.57692C13.3176 2.57494 10.7006 0.884615 10.7006 0.884615L18.9149 0.544878C19.4992 0.520714 19.9794 1.00083 19.9554 1.58508L19.6344 9.39819C19.6238 9.65618 19.5138 9.90008 19.3274 10.0788L9.17239 19.8192C8.77849 20.197 8.15439 20.1892 7.77008 19.8016L0.689012 12.6605Z" fill="white"/>
                            </g>
                            </svg>
                    </div>
                    <div class="text-center text-white text-[12px] font-normal">Price Plans</div>
                </div>
                <div class="w-32 px-2.5 py-[9px] bg-zinc-500 rounded-lg hover:bg-fuchsia-900 cursor-pointer justify-start items-center gap-2 flex"
                    onclick="navTo('fund')"
                >
                    <div class="w-5 h-5 relative">
                        <svg width="100%" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="Account balance wallet" clip-path="url(#clip0_148_856)">
                            <path id="Vector" d="M17.5 15.5V16.3333C17.5 17.25 16.75 18 15.8333 18H4.16667C3.24167 18 2.5 17.25 2.5 16.3333V4.66667C2.5 3.75 3.24167 3 4.16667 3H15.8333C16.75 3 17.5 3.75 17.5 4.66667V5.5H10C9.075 5.5 8.33333 6.25 8.33333 7.16667V13.8333C8.33333 14.75 9.075 15.5 10 15.5H17.5ZM10 13.8333H18.3333V7.16667H10V13.8333ZM13.3333 11.75C12.6417 11.75 12.0833 11.1917 12.0833 10.5C12.0833 9.80833 12.6417 9.25 13.3333 9.25C14.025 9.25 14.5833 9.80833 14.5833 10.5C14.5833 11.1917 14.025 11.75 13.3333 11.75Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_148_856">
                            <rect width="100%" height="20" fill="white" transform="translate(0 0.5)"/>
                            </clipPath>
                            </defs>
                        </svg>

                    </div>
                    <div class="text-center text-white text-[12px] font-normal">Funds</div>
                </div>
            </div>
        </div>

    </div>

    @component('app.setting.price-plans-table')@endcomponent


</div>
<script>
    function navTo(to){

    }
</script>
@endsection
