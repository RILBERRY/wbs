@extends('fms.main')
@section('content')
    <div class="w-full rounded-[10px] border border-stone-300 flex-col justify-start items-center flex">
        <div class="self-stretch p-2 bg-blue-500 rounded-tl-[10px] rounded-t-[10px] justify-center items-center gap-2.5 inline-flex">
            <div class="grow shrink basis-0 self-stretch text-white text-xl font-bold">Purchases</div>
            <button class="grow shrink basis-0 self-stretch text-right text-white text-sm font-bold">Done</button>
        </div>
        <div class="self-stretch px-[17px] py-2.5 border-b border-zinc-400 flex-col justify-start items-center gap-2.5 flex">
            <div class="self-stretch h-4 text-black text-sm font-bold">Supplyer Info</div>
            <input class="self-stretch p-2.5 rounded-[10px] border border-stone-300 justify-center items-center gap-2.5 inline-flex"
            placeholder="Purchases No">
            <div class="self-stretch justify-center items-start gap-2.5 inline-flex">
                <input class="w-full p-2.5 rounded-[10px] border border-stone-300 justify-center items-center gap-2.5 inline-flex"
                placeholder="Date" type=date>
                <input class="w-full p-2.5 rounded-[10px] border border-stone-300 justify-center items-center gap-2.5 inline-flex"
                placeholder="Bill No" pattern="\d*">
            </div>
            <input class="self-stretch p-2.5 rounded-[10px] border border-stone-300 justify-center items-center gap-2.5 inline-flex"
            placeholder="Supplyer Name">
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
                    <div class="grow shrink basis-0 text-black text-sm font-normal">Rate: 18.99</div>
                    <div class="grow shrink basis-0 text-black text-sm font-normal">Qty:2,000</div>
                </div>
                <div class="self-stretch text-right text-black text-sm font-normal">Total : 56,153.22</div>
            </div>
            <div class="self-stretch p-2 rounded-[10px] border border-black flex-col justify-start items-center gap-1 flex">
                <div class="self-stretch text-black text-sm font-bold">Diesel</div>
                <div class="self-stretch justify-center items-start gap-2.5 inline-flex">
                    <div class="grow shrink basis-0 text-black text-sm font-normal">Rate: 18.99</div>
                    <div class="grow shrink basis-0 text-black text-sm font-normal">Qty:2,000</div>
                </div>
                <div class="self-stretch text-right text-black text-sm font-normal">Total : 56,153.22</div>
            </div>
            <div class="self-stretch justify-center items-start gap-2.5 inline-flex">
                <button class="w-1/4 p-2.5 rounded-[10px] bg-blue-500 text-white justify-center items-center gap-2.5 inline-flex">add</button>
                <input class="w-full p-2.5 rounded-[10px] border border-stone-300 justify-center items-center gap-2.5 inline-flex"
                placeholder="Attach File" type="file">
            </div>
        </div>
        <div class="self-stretch px-[17px] py-2.5 border-b flex-col justify-start items-center gap-2.5 flex">
            <div class="self-stretch h-4 text-black text-sm font-bold">Payment</div>
            <input class="self-stretch p-2.5 rounded-[10px] border border-stone-300 justify-center items-center gap-2.5 inline-flex"
            placeholder="Amount">
            <select class="self-stretch p-2.5 bg-transparent rounded-[10px] border border-stone-300 justify-center items-center gap-2.5 inline-flex">
                <option value="MVR">MVR</option>
                <option value="USD">USD</option>
            </select>
            <select class="self-stretch p-2.5 bg-transparent rounded-[10px] border border-stone-300 justify-center items-center gap-2.5 inline-flex">
                <option value="TRANSFER">TRANSFER</option>
                <option value="CASH">CASH</option>
            </select>
        </div>
    </div>

@endsection


