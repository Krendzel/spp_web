<!-- This example requires Tailwind CSS v2.0+ -->
@extends('master')
@section('content')
    <div class="flex justify-between container mx-auto my-4 space-x-8">
        <div class="flex border-2 border-gray-200 rounded-lg bg-white hover:bg-gray-50 w-full">
            <div class="p-4 w-full">
                <h2 class="text-xl font-semibold text-gray-500">DHL</h2>
                <span class="text-black text-lg">5,7454</span>
            </div>
            <div class="flex justify-center items-center p-4 ">
                <a href="#" class="bg-blue-500 hover:bg-blue-600 rounded-md p-2 uppercase font-semibold text-xs text-gray-100">Button</a>
            </div>

        </div>
        <div class="border-2 border-gray-200 rounded-lg p-4 bg-white w-full">
            <h2 class="text-xl font-semibold text-gray-500">DHL</h2>
            <span class="text-black text-lg">5,7454</span>
        </div>
        <div class="border-2 border-gray-200 rounded-lg p-4 bg-white w-full">
            <h2 class="text-xl font-semibold text-gray-500">DHL</h2>
            <span class="text-black text-lg">5,7454</span>
        </div>
    </div>
    <div class="container mx-auto py-6 ">
<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Order
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Carrier
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Support
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Tracking number
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Status
                        </th>
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Details</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($orders as $order)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ $order->order}}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="font-semibold">{{ $order->delivery_type }}</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $order->numsup }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $order->tracking_number }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
{{--                                {{ \App\Models\GroupEcomOrders::where('groupecom_id', $pallet->id)->count() }}--}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <span class="uppercase text-xs font-semibold bg-blue-200 text-blue-600 py-1 px-3 rounded-lg">
                                in progress
                            </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Details</a>
                            </td>
                        </tr>
                    @endforeach

                    <!-- More items... -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    </div>
@endsection
