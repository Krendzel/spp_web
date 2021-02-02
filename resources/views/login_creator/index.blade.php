@extends('master')
@section('title', 'Login Creator')
@section('header_buttons')
    <div class="flex items-center space-x-4">
        <button type="submit" form="my_form" class="bg-indigo-400 hover:bg-indigo-500 text-white font-semibold text-sm uppercase rounded-md p-2">Generate badges</button>
        <a href="#" class="bg-green-400 hover:bg-green-500 text-white font-semibold text-sm uppercase rounded-md p-2">Add User</a>
        <a href="#" class="bg-blue-400 hover:bg-blue-500 text-white font-semibold text-sm uppercase rounded-md p-2">Import CSV</a>
    </div>

@endsection
@section('content')
    <div class="container mx-auto py-6 ">
        <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="relative">
                                <span class="sr-only">Edit</span>
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Login
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Full name
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Password
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                notes
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Updated at
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Details</span>
                            </th>
                        </tr>
                        </thead>
                        <form id="my_form" method="POST" action="{{ route('list.users') }}">
                            @csrf
                        @foreach($logins as $login)



                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="pl-3 whitespace-nowrap text-sm text-gray-500">
                                    <input id="comments" name="fields[]" value="{{ $login->id }}" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $login->id }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                            <span class="font-semibold">
                                {{ $login->login }}
                            </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $login->first_name }} {{ $login->last_name }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $login->password }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $login->type }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <span class="uppercase text-xs font-semibold bg-blue-200 text-blue-600 py-1 px-3 rounded-lg">
                                {{ $login->created_at }}
                            </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="{{ url('/edit/'.$login->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                </td>
                            </tr>
                        <!-- More items... -->
                        </tbody>

                        @endforeach
                            </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
