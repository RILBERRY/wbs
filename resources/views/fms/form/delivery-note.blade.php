@extends('fms.main')
@section('content')
    <div class="z-10 w-11/12  px-5 py-10 rounded-md border-zinc-400 flex-col justify-start items-center gap-5 inline-flex absolute top-2/4 -translate-y-2/4 bg-white">
        <div class="self-stretch  justify-center items-start gap-[23px] inline-flex">
            <div class="grow shrink basis-0 h-4 text-black text-sm font-bold">Transaction</div>
            <div class="grow shrink basis-0 h-4 text-right"><span style="text-black text-sm font-normal">Total :</span><span style="text-black text-sm font-bold"> 199,556.15</span></div>
        </div>
        <div class="self-stretch justify-center items-start gap-2.5 inline-flex">
            <button class="w-full h-9 p-2.5 bg-blue-400 text-white rounded-[10px] border border-stone-300 justify-center items-center gap-2.5 flex">
                Diesel
            </button>
            <button class="w-full h-9 p-2.5 rounded-[10px] border border-stone-300 justify-center items-center gap-2.5 flex">
                Petrol
            </button>
            <button class="w-full h-9 p-2.5 rounded-[10px] border border-stone-300 justify-center items-center gap-2.5 flex">
                Remula
            </button>
        </div>
        <div class="self-stretch justify-center items-start gap-2.5 inline-flex">
            <input class="w-full p-2.5 rounded-[10px] border border-stone-300 justify-center items-center gap-2.5 inline-flex"
                placeholder="QTY">
        <input class="w-full p-2.5 rounded-[10px] border border-stone-300 justify-center items-center gap-2.5 inline-flex"
                placeholder="QTY">
        </div>
        <div class="self-stretch p-2.5 bg-green-400 rounded-[10px] justify-center items-center gap-2.5 inline-flex">
            <div class="grow shrink basis-0 text-center text-white text-sm font-normal">Save</div>
        </div>
    </div>

    <div class="w-screen h-screen absolute top-0 left-0 bg-gray-200/60 z-1"></div>

    <div class="w-full rounded-[10px] border border-stone-300 flex-col justify-start items-center flex">
        <div class="self-stretch p-2 bg-blue-500 rounded-tl-[10px] rounded-t-[10px] justify-center items-center gap-2.5 inline-flex">
            <div class="grow shrink basis-0 self-stretch text-white text-xl font-bold">Delivery Note</div>
            <button class="grow shrink basis-0 self-stretch text-right text-white text-sm font-bold">Done</button>
        </div>
        <div class="self-stretch px-[17px] py-2.5 border-b border-zinc-400 flex-col justify-start items-center gap-2.5 flex">
            <div class="self-stretch h-4 text-black text-sm font-bold">Customer Info</div>
            <input class="self-stretch p-2.5 rounded-[10px] border border-stone-300 justify-center items-center gap-2.5 inline-flex"
            placeholder="Invoice No">
            <div class="self-stretch justify-center items-start gap-2.5 inline-flex">
                <input class="w-full p-2.5 rounded-[10px] border border-stone-300 justify-center items-center gap-2.5 inline-flex"
                placeholder="Date" type=date>
                <input class="w-full p-2.5 rounded-[10px] border border-stone-300 justify-center items-center gap-2.5 inline-flex"
                placeholder="Bill No" pattern="\d*">
            </div>
            <input class="self-stretch p-2.5 rounded-[10px] border border-stone-300 justify-center items-center gap-2.5 inline-flex"
            placeholder="Customer Name">
            <input class="self-stretch p-2.5 rounded-[10px] border border-stone-300 justify-center items-center gap-2.5 inline-flex"
            placeholder="Contact" pattern="\d*">
        </div>
        <div class="self-stretch  px-[17px] py-2.5 border-b border-zinc-400 flex-col justify-start items-center gap-2.5 flex">
            <div class="self-stretch justify-start items-center gap-2.5 inline-flex">
                <div class="grow shrink basis-0 h-4 text-black text-sm font-bold">Transaction</div>
                <div class="grow shrink basis-0 h-4 text-right text-black text-sm font-bold">Total : 199,992.89</div>
            </div>
            <div class="self-stretch p-2 rounded-[10px] border border-black flex-col justify-start items-center gap-1 flex">
                <div class="self-stretch text-black text-sm font-bold">Diesel</div>
                <div class="self-stretch justify-center items-start gap-2.5 inline-flex">
                    <div class="grow shrink basis-0 text-black text-sm font-normal">Qty:2,000</div>
                </div>
            </div>
            <div class="self-stretch p-2 rounded-[10px] border border-black flex-col justify-start items-center gap-1 flex">
                <div class="self-stretch text-black text-sm font-bold">Diesel</div>
                <div class="self-stretch justify-center items-start gap-2.5 inline-flex">
                    <div class="grow shrink basis-0 text-black text-sm font-normal">Qty:2,000</div>
                </div>
            </div>
            <div class="self-stretch justify-center items-start gap-2.5 inline-flex">
                <button class="w-1/4 p-2.5 rounded-[10px] bg-blue-500 text-white justify-center items-center gap-2.5 inline-flex">add</button>
                <input class="w-full p-2.5 rounded-[10px] border border-stone-300 justify-center items-center gap-2.5 inline-flex"
                placeholder="Attach File" type="file">
            </div>
        </div>
    </div>
    

@endsection


