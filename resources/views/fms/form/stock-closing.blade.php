@extends('fms.main')
@section('content')
    <div class="w-full rounded-[10px] border border-stone-300 flex-col justify-start items-center flex">
        <div class="self-stretch p-2 bg-blue-500 rounded-tl-[10px] rounded-t-[10px] justify-center items-center gap-2.5 inline-flex">
            <div class="grow shrink basis-0 self-stretch text-white text-xl font-bold">Stock Closing</div>
            <button class="grow shrink basis-0 self-stretch text-right text-white text-sm font-bold">Done</button>
        </div>
        <div class="self-stretch px-[17px] py-2.5 border-b flex-col justify-start items-center gap-2.5 flex">
            <div class="self-stretch justify-center items-start gap-2.5 inline-flex">
                <div class="grow shrink basis-0 h-4 justify-start items-center gap-2.5 flex">
                    {{-- <div class="grow shrink basis-0 h-4 text-black text-sm font-bold">Transaction</div> --}}
                </div>
                <div class="w-[108px] p-2.5 bg-blue-500 rounded-[10px] flex-col justify-start items-center inline-flex">
                    <div class="self-stretch text-center text-white text-sm font-bold">Calculate</div>
                </div>
            </div>
            <div class="self-stretch p-2 rounded-[10px] border border-black flex-col justify-start  flex">
                <div class="self-stretch text-black text-sm font-bold">last Invoice No</div>
                <input class="w-2/4 ml-auto h-[26px] p-[5px] rounded-[5px] text-sm border border-neutral-400 justify-center gap-2.5 flex" 
                    placeholder="Inv No"  pattern="\d*">
            </div>
            <div class="self-stretch p-2 rounded-[10px] border border-black flex-col justify-start items-center flex">
                <div class="self-stretch text-black text-sm font-bold">Last Delivery Note No</div>
                <input class="w-2/4 ml-auto h-[26px] p-[5px] rounded-[5px] text-sm border border-neutral-400 justify-center gap-2.5 flex" 
                    placeholder="Dn No" pattern="\d*">
            </div>
            <div class="self-stretch p-2 rounded-[10px] border border-black flex-col justify-start items-center flex">
                <div class="self-stretch text-black text-sm font-bold">last Purchase No</div>
                <input class="w-2/4 ml-auto h-[26px] p-[5px] rounded-[5px] text-sm border border-neutral-400 justify-center gap-2.5 flex" 
                    placeholder="Pv No" pattern="\d*">
            </div>
            <div class="self-stretch p-2 rounded-[10px] border border-black flex-col justify-start items-center flex">
                <div class="self-stretch py-[5px] border-b border-stone-400 justify-center items-center inline-flex">
                    <div class="grow shrink basis-0 text-black text-sm font-bold">Diesel</div>
                    <div class="grow shrink basis-0 text-right text-green-600 text-sm font-normal">Diff : 19,233</div>
                    <div class="w-[15px] h-[15px] relative"></div>
                </div>
                <div class="self-stretch py-[5px] justify-center items-start gap-2.5 inline-flex">
                    <div class="grow shrink basis-0 text-black text-sm font-normal">Opening</div>
                    <div class="grow shrink basis-0 text-right text-black text-sm font-normal">203,233</div>
                </div>
                <div class="self-stretch py-[5px] justify-center items-start gap-2.5 inline-flex">
                    <div class="grow shrink basis-0 text-black text-sm font-normal">Purchases</div>
                    <div class="grow shrink basis-0 text-right text-black text-sm font-normal">203,233</div>
                </div>
                <div class="self-stretch py-[5px] justify-center items-start gap-2.5 inline-flex">
                    <div class="grow shrink basis-0 text-black text-sm font-normal">Sales</div>
                    <div class="grow shrink basis-0 text-right text-black text-sm font-normal">189,058</div>
                </div>
                <div class="self-stretch py-[5px] justify-center items-start gap-2.5 inline-flex">
                    <div class="grow shrink basis-0 text-black text-sm font-normal">In stock</div>
                    <input class="grow shrink basis-0 h-[26px] p-[5px] rounded-[5px] text-sm border border-neutral-400 justify-center items-start gap-2.5 flex" 
                    placeholder="Count stock bal" pattern="\d*">
                </div>
            </div>
            <div class="self-stretch p-2 rounded-[10px] border border-black flex-col justify-start items-center flex">
                <div class="self-stretch py-[5px] border-b border-stone-400 justify-center items-center inline-flex">
                    <div class="grow shrink basis-0 text-black text-sm font-bold">Diesel</div>
                    <div class="grow shrink basis-0 text-right text-green-600 text-sm font-normal">Diff : 19,233</div>
                    <div class="w-[15px] h-[15px] relative"></div>
                </div>
                <div class="self-stretch py-[5px] justify-center items-start gap-2.5 inline-flex">
                    <div class="grow shrink basis-0 text-black text-sm font-normal">Opening</div>
                    <div class="grow shrink basis-0 text-right text-black text-sm font-normal">203,233</div>
                </div>
                <div class="self-stretch py-[5px] justify-center items-start gap-2.5 inline-flex">
                    <div class="grow shrink basis-0 text-black text-sm font-normal">Purchases</div>
                    <div class="grow shrink basis-0 text-right text-black text-sm font-normal">203,233</div>
                </div>
                <div class="self-stretch py-[5px] justify-center items-start gap-2.5 inline-flex">
                    <div class="grow shrink basis-0 text-black text-sm font-normal">Sales</div>
                    <div class="grow shrink basis-0 text-right text-black text-sm font-normal">189,058</div>
                </div>
                <div class="self-stretch py-[5px] justify-center items-start gap-2.5 inline-flex">
                    <div class="grow shrink basis-0 text-black text-sm font-normal">In stock</div>
                    <input class="grow shrink basis-0 h-[26px] p-[5px] rounded-[5px] text-sm border border-neutral-400 justify-center items-start gap-2.5 flex" 
                    placeholder="Count stock bal" pattern="\d*">
                </div>
            </div>
            <div class="self-stretch p-2 rounded-[10px] border border-black flex-col justify-start items-center flex">
                <div class="self-stretch py-[5px] border-b border-stone-400 justify-center items-center inline-flex">
                    <div class="grow shrink basis-0 text-black text-sm font-bold">Diesel</div>
                    <div class="grow shrink basis-0 text-right text-green-600 text-sm font-normal">Diff : 19,233</div>
                    <div class="w-[15px] h-[15px] relative"></div>
                </div>
                <div class="self-stretch py-[5px] justify-center items-start gap-2.5 inline-flex">
                    <div class="grow shrink basis-0 text-black text-sm font-normal">Opening</div>
                    <div class="grow shrink basis-0 text-right text-black text-sm font-normal">203,233</div>
                </div>
                <div class="self-stretch py-[5px] justify-center items-start gap-2.5 inline-flex">
                    <div class="grow shrink basis-0 text-black text-sm font-normal">Purchases</div>
                    <div class="grow shrink basis-0 text-right text-black text-sm font-normal">203,233</div>
                </div>
                <div class="self-stretch py-[5px] justify-center items-start gap-2.5 inline-flex">
                    <div class="grow shrink basis-0 text-black text-sm font-normal">Sales</div>
                    <div class="grow shrink basis-0 text-right text-black text-sm font-normal">189,058</div>
                </div>
                <div class="self-stretch py-[5px] justify-center items-start gap-2.5 inline-flex">
                    <div class="grow shrink basis-0 text-black text-sm font-normal">In stock</div>
                    <input class="grow shrink basis-0 h-[26px] p-[5px] rounded-[5px] text-sm border border-neutral-400 justify-center items-start gap-2.5 flex" 
                    placeholder="Count stock bal" pattern="\d*">
                </div>
            </div>
        </div>
    </div>

@endsection


