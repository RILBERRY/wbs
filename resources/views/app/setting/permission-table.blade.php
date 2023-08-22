<div class="flex justify-between ">
    <div class="w-4/12 h-fit px-[41px] py-5 bg-white rounded-lg flex-col justify-start items-start inline-flex">
        <div class="self-stretch h-14  justify-between items-center gap-2.5 inline-flex">
            <div class="text-black text-[16px] font-bold">Roles</div>
            <div class=" justify-center items-center gap-2.5 flex">
                <div class="h-[37px] rounded-lg border-neutral-400 justify-start items-start gap-2.5 flex">
                    <input class="text-neutral-400 text-[14px] font-normal p-1.5 border rounded-md" placeholder="Search" type="text">
                </div>
                <div class=" px-5 py-2 bg-green-600 rounded-lg justify-start items-center gap-2 inline-flex">
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
                    <div class="text-center text-white text-[12px] font-normal">New Role</div>
                </div>
            </div>
        </div>
        <div class="self-stretch p-2.5 bg-zinc-100 border border-white border-b-gray-800 justify-start items-start gap-2.5 inline-flex">
            <div class="w-3/6 text-left text-[15px] font-normal">Role</div>
            {{-- <div class="w-3/6 text-center text-[15px] font-normal">Slug</div> --}}
        </div>
        <div class="hover:bg-gray-200 cursor-pointer self-stretch justify-start items-start p-3 inline-flex border border-white border-b-gray-400">
            <div class="w-3/6 text-left text-[15px] font-normal">Admin</div>
            {{-- <div class="w-3/6 text-center text-[15px] font-normal">some-slug</div> --}}
        </div>
        <div class="hover:bg-gray-200 cursor-pointer self-stretch justify-start items-start p-3 inline-flex border border-white border-b-gray-400">
            <div class="w-3/6 text-left text-[15px] font-normal">Customer</div>
            {{-- <div class="w-3/6 text-center text-[15px] font-normal">some-slug</div> --}}
        </div>
    </div>

    <div class="flex-auto mx-5 px-[41px] py-5  bg-white rounded-lg flex-col justify-start items-start inline-flex">
        <div class="self-stretch h-14  justify-between items-center gap-2.5 inline-flex">
            <div class="text-black text-[16px] font-bold">Permission</div>
            <div class="justify-center items-center gap-2.5 flex">
                <div class="h-[37px] rounded-lg border-neutral-400 justify-start items-start gap-2.5 flex">
                    <input class="text-neutral-400 text-[14px] font-normal p-1.5 border rounded-md" placeholder="Search" type="text">
                </div>
            </div>
        </div>
        <div class="self-stretch p-2.5 bg-zinc-100 border border-white border-b-gray-800 justify-start items-start gap-2.5 inline-flex">
            <div class="w-2/6 text-left text-[15px] font-normal">Permission</div>
            <div class="w-2/6 text-center text-[15px] font-normal">Slug</div>
        </div>
        <div class="hover:bg-gray-200 cursor-pointer self-stretch justify-start items-start p-3 inline-flex border border-white border-b-gray-400">
            <div class="w-2/6 text-left text-[15px] font-normal">Dashboard</div>
            <div class="w-2/6 text-center text-[15px] font-normal">index-dashboard</div>
        </div>


    </div>
</div>
