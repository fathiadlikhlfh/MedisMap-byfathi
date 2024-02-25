@extends('layouts.admin')

@section('title', 'Category')

@section('content')
    <!-- page-content start -->
    

    <div class="bg-slate-100 h-full mt-[77px]  py-3 px-3" style="min-height: 900px;">
        <section class="relative overflow-hidden">
            <div class="container">
                <div class="flex">
                    <div class="w-full">
                        <h3 class="text-xl text-ijo mt-2">User</h3>
                        <p class="mt-1 font-medium text-ijo mb-4">User Page</p>
                    </div>
                </div>

                <div class="flex mt-2">
                    <div class="w-full">
                        <div class="bg-white rounded-2xl">
                            <div class="p-6">
                                <div class="grid lg:grid-cols-4 gap-6" data-fc-type="tab">
                                    <!-- menu start -->
                                    <div class="col-span-1">
                                        <nav aria-label="Tabs"
                                            class="flex flex-row lg:flex-col gap-2 w-auto lg:w-full bg-ijo p-1.5 rounded-md lg:justify-start"
                                            role="tablist">
                                            <button
                                                class="fc-tab-active:bg-white fc-tab-active:text-ijo font-semibold text-start py-2 px-4 rounded bg-transparent transition-all active hover:bg-teal-400"
                                                data-fc-target="#account" type="button">
                                                List User
                                            </button>
                                        </nav>
                                    </div>
                                    <!-- menu end -->
                                    <div class="lg:col-span-3 transition-all px-4 h-full">
                                        <div id="account" class="min-h-[650px]">
                                            <h4 class="text-base text-ijo">List User</h4>

                                            <div class="mx-auto mt-5">

                                                <div class="flex flex-col">
                                                    <div class="overflow-x-auto shadow-md sm:rounded-lg">
                                                        <div class="inline-block min-w-full align-middle">
                                                            <div class="overflow-hidden ">
                                                                <table
                                                                    class="min-w-full divide-y divide-gray-200 table-fixed">
                                                                    <thead class="bg-ijo">
                                                                        <tr>
                                                                            <th scope="col"
                                                                                class="py-3 px-6 text-xs font-semibold tracking-wider text-left text-white uppercase">
                                                                                Name
                                                                            </th>
                                                                            <th scope="col"
                                                                                class="py-3 px-6 text-xs font-semibold tracking-wider text-left text-white uppercase">
                                                                                Email
                                                                            </th>
                                                                            <th scope="col"
                                                                                class="py-3 px-6 text-xs font-semibold tracking-wider text-left text-white uppercase">
                                                                                Roles
                                                                            </th>
                                                                            <th scope="col" class="p-4">
                                                                                <span class="sr-only">Edit</span>
                                                                            </th>
                                                                            <th scope="col" class="p-4">
                                                                                <span class="sr-only">Delete</span>
                                                                            </th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody
                                                                        class="bg-white divide-y divide-gray-200">
                                                                        @forelse ($users as $item)
                                                                            <tr
                                                                                class="hover:bg-gray-100">
                                                                                <td
                                                                                    class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                                                    {{ $item->name }}</td>
                                                                                <td
                                                                                    class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                                                    {{ $item->email }}</td>
                                                                                <td
                                                                                    class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                                                    {{ $item->roles }}</td>
                                                                                <td
                                                                                    class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                                                                    <a href="{{ route('dashboard.user.edit', $item->id) }}"
                                                                                        class="text-blue-600 hover:text-blue-800">Edit</a>
                                                                                </td>
                                                                                <td
                                                                                    class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">

                                                                                    <form
                                                                                        action="{{ route('dashboard.user.destroy', $item->id) }}"
                                                                                        method="POST" class="d-inline">
                                                                                        @csrf
                                                                                        @method('DELETE')

                                                                                        <button
                                                                                            class="text-red-600 hover:text-red-800"
                                                                                            onclick="return confirm('Are you sure?')">Delete</button>
                                                                                    </form>
                                                                                </td>

                                                                            </tr>

                                                                        @empty
                                                                        @endforelse
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div>
                                                @if (session('delete-success'))
                                                    <div class="bg-red-200 border-red-600 text-red-800 border-l-4 p-4 mt-4">
                                                        {{ session('delete-success') }}
                                                    </div>
                                                @endif

                                                @if (session('update-success'))
                                                    <div class="bg-yellow-200 border-yellow-600 text-yellow-800 border-l-4 p-4 mt-4">
                                                        {{ session('update-success') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
    <!-- page-content end -->

@endsection
