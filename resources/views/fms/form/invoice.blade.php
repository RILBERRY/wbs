@extends('fms.main')
@section('content')
    <div class="w-full rounded-[10px] border border-stone-300 flex-col justify-start items-center flex">
        <div class="self-stretch h-[54px] p-[22px] bg-blue-500 rounded-tl-[10px] rounded-t-[10px] justify-center items-center gap-2.5 inline-flex">
            <div class="grow shrink basis-0 self-stretch text-white text-xl font-bold">Invoice</div>
            <button class="grow shrink basis-0 self-stretch text-right text-white text-xl font-bold">Done</button>
        </div>
        <div class="self-stretch px-[17px] py-2.5 border-b border-zinc-400 flex-col justify-start items-center gap-2.5 flex">
            <div class="self-stretch h-4 text-black text-[13px] font-bold">Customer Info</div>
            <input class="self-stretch p-2.5 rounded-[10px] border border-stone-300 justify-center items-center gap-2.5 inline-flex"
            placeholder="Invoice No">
            <div class="self-stretch justify-center items-start gap-2.5 inline-flex">
                <input class="w-full p-2.5 rounded-[10px] border border-stone-300 justify-center items-center gap-2.5 inline-flex"
                placeholder="Date">
                <input class="w-full p-2.5 rounded-[10px] border border-stone-300 justify-center items-center gap-2.5 inline-flex"
                placeholder="Bill No">
            </div>
            <input class="self-stretch p-2.5 rounded-[10px] border border-stone-300 justify-center items-center gap-2.5 inline-flex"
            placeholder="Customer Name">
            <input class="self-stretch p-2.5 rounded-[10px] border border-stone-300 justify-center items-center gap-2.5 inline-flex"
            placeholder="Contact">
        </div>
        <div class="self-stretch  px-[17px] py-2.5 border-b border-zinc-400 flex-col justify-start items-center gap-2.5 flex">
            <div class="self-stretch justify-start items-center gap-2.5 inline-flex">
                <div class="grow shrink basis-0 h-4 text-black text-[13px] font-bold">Transaction</div>
                <div class="grow shrink basis-0 h-4 text-right text-black text-[13px] font-bold">Total : 199,992.89</div>
            </div>
            <div class="self-stretch h-[76px] p-2.5 rounded-[10px] border border-black flex-col justify-start items-center gap-1 flex">
                <div class="self-stretch text-black text-[13px] font-bold">Diesel</div>
                <div class="self-stretch justify-center items-start gap-2.5 inline-flex">
                    <div class="grow shrink basis-0 text-black text-[13px] font-normal">Rate: 18.99</div>
                    <div class="grow shrink basis-0 text-black text-[13px] font-normal">Qty:2,000</div>
                </div>
                <div class="self-stretch text-right text-black text-[13px] font-normal">Total : 56,153.22</div>
            </div>
            <div class="self-stretch h-[76px] p-2.5 rounded-[10px] border border-black flex-col justify-start items-center gap-1 flex">
                <div class="self-stretch text-black text-[13px] font-bold">Diesel</div>
                <div class="self-stretch justify-center items-start gap-2.5 inline-flex">
                    <div class="grow shrink basis-0 text-black text-[13px] font-normal">Rate: 18.99</div>
                    <div class="grow shrink basis-0 text-black text-[13px] font-normal">Qty:2,000</div>
                </div>
                <div class="self-stretch text-right text-black text-[13px] font-normal">Total : 56,153.22</div>
            </div>
            <input class="self-stretch p-2.5 rounded-[10px] border border-stone-300 justify-center items-center gap-2.5 inline-flex"
            placeholder="Attach Bill" type="file">
        </div>
        <div class="self-stretch px-[17px] py-2.5 border-b flex-col justify-start items-center gap-2.5 flex">
            <div class="self-stretch h-4 text-black text-[13px] font-bold">Payment</div>
            <input class="self-stretch p-2.5 rounded-[10px] border border-stone-300 justify-center items-center gap-2.5 inline-flex"
            placeholder="Amount">
            <input class="self-stretch p-2.5 rounded-[10px] border border-stone-300 justify-center items-center gap-2.5 inline-flex"
            placeholder="Currency">
            <input class="self-stretch p-2.5 rounded-[10px] border border-stone-300 justify-center items-center gap-2.5 inline-flex"
            placeholder="Type">
        </div>
    </div>

@endsection


