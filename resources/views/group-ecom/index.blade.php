@extends('master')
@section('title', 'Group E-COM')
@section('header_buttons')
    dsdsa
@endsection
@section('content')
    <div class="flex justify-between container mx-auto my-4 space-x-8">
        <div class="flex border-2 border-gray-200 rounded-lg bg-white hover:bg-gray-50 w-full">
            <div class="p-4 w-full">
                <h2 class="text-xl font-semibold text-gray-500">DHL</h2>
                <span class="text-black text-lg">{{ \App\Models\GroupEcomOrders::where('delivery_type', 'DHL')->count() }}</span>
            </div>
            <div class="flex justify-center items-center p-4 ">
                <a href="#" class="bg-blue-500 hover:bg-blue-600 rounded-md p-2 uppercase font-semibold text-xs text-gray-100">Button</a>
            </div>

        </div>
        <div class="border-2 border-gray-200 rounded-lg p-4 bg-white w-full">
            <h2 class="text-xl font-semibold text-gray-500">InPost</h2>
            <span class="text-black text-lg">{{ \App\Models\GroupEcomOrders::where('delivery_type', 'InPost')->count() }}</span>
        </div>
        <div class="border-2 border-gray-200 rounded-lg p-4 bg-white w-full">
            <h2 class="text-xl font-semibold text-gray-500">DSV</h2>
            <span class="text-black text-lg">{{ \App\Models\GroupEcomOrders::where('delivery_type', 'DSV')->count() }}</span>
        </div>
    </div>

    <div class="container mx-auto py-6 ">
        <h2 class="text-gray-600 uppercase font-semibold text-sm border-b-2 border-b mb-4">List of pallets</h2>
        @include('group-ecom.partials.table')
    </div>
@endsection
