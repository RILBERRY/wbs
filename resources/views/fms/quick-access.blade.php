@extends('fms.main')
@section('content')
<div class="w-full h-[560px] p-2.5 flex-col justify-start items-center gap-2.5 inline-flex">
    <div class="w-full md:w-[560px] flex-col justify-start items-start gap-[19px] flex">
        <div class="w-full text-black text-xl font-bold">Transactions</div>
        <a href="/mobile/invoice" class="w-full h-[67px] px-[27px] py-2.5 bg-blue-500 rounded-[10px] justify-center items-center gap-2.5 inline-flex">
            <div class="grow shrink basis-0 text-white text-xl font-bold">Invoice</div>
        </a>
        <a href="/mobile/delivery-note" class="w-full h-[67px] px-[27px] py-2.5 bg-blue-500 rounded-[10px] justify-center items-center gap-2.5 inline-flex">
            <div class="grow shrink basis-0 text-white text-xl font-bold">Delivery note</div>
        </a>
        <a href="/mobile/purchase" class="w-full h-[67px] px-[27px] py-2.5 bg-blue-500 rounded-[10px] justify-center items-center gap-2.5 inline-flex">
            <div class="grow shrink basis-0 text-white text-xl font-bold">Purchases</div>
        </a>
        <a href="/mobile/sales-closing" class="w-full h-[67px] px-[27px] py-2.5 bg-blue-500 rounded-[10px] justify-center items-center gap-2.5 inline-flex">
            <div class="grow shrink basis-0 text-white text-xl font-bold">Sales Closing</div>
        </a>
        <a href="/mobile/stock-closing" class="w-full h-[67px] px-[27px] py-2.5 bg-blue-500 rounded-[10px] justify-center items-center gap-2.5 inline-flex">
            <div class="grow shrink basis-0 text-white text-xl font-bold">Stock Closing</div>
        </a>
        <a href="/mobile/expenses" class="w-full h-[67px] px-[27px] py-2.5 bg-blue-500 rounded-[10px] justify-center items-center gap-2.5 inline-flex">
            <div class="grow shrink basis-0 text-white text-xl font-bold">Expense(GST Bill)</div>
        </a>
    </div>
@endsection


