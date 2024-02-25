@extends('layouts.admin')

@section('title', 'Category')

@section('content')
    <!-- page-content start -->
    <div class="bg-slate-100 h-full mt-[77px]  py-3 px-3" style="min-height: 900px;">
        <section class="relative overflow-hidden">
            <div class="container">
                <div class="flex justify-between items-center">
                    <div class="">
                        <h3 class="text-xl text-ijo font-bold mt-2">Category</h3>
                        <p class="mt-1 font-medium mb-4 text-ijo">Category Page</p>
                    </div>

                    <div>
                        @if (session('create-success'))
                            <div class="bg-green-200 border-green-600 text-green-800 border-l-4 p-4 mt-4">
                                {{ session('create-success') }}
                            </div>
                        @endif

                        @if (session('delete-success'))
                            <div class="bg-red-200 border-red-600 text-red-800 border-l-4 p-4 mt-4">
                                {{ session('delete-success') }}
                            </div>
                        @endif
                    </div>

                </div>

                <div class="flex mt-2">
                    <div class="w-full">
                        <div class="bg-white rounded-3xl">
                            <div class="p-6">
                                <div class="grid lg:grid-cols-4 gap-6" data-fc-type="tab">
                                    <!-- menu start -->
                                    <div class="col-span-1">
                                        <nav aria-label="Tabs"
                                            class="flex flex-row lg:flex-col gap-2 w-auto lg:w-full bg-teal-600 p-1.5 rounded-md lg:justify-start shadow-lg"
                                            role="tablist">
                                            <button
                                                class="fc-tab-active:bg-white font-medium text-white hover:bg-white hover:text-ijo fc-tab-active:text-ijo text-start py-2 px-4 rounded bg-transparent transition-all active"
                                                data-fc-target="#account" type="button">
                                                List category
                                            </button>
                                            <button
                                                class="fc-tab-active:bg-white font-medium text-white hover:bg-white hover:text-ijo fc-tab-active:text-ijo text-start py-2 px-4 rounded bg-transparent transition-all"
                                                data-fc-target="#password" type="button">
                                                Create new category
                                            </button>
                                        </nav>
                                    </div>
                                    <!-- menu end -->
                                    <div class="lg:col-span-3 transition-all px-4 h-full">
                                        <div id="account" class="min-h-[650px]">
                                            <h4 class="text-base font-bold text-ijo">List Category</h4>

                                            <div class="mx-auto mt-5">

                                                <div class="flex flex-col">
                                                    <div class="overflow-x-auto shadow-lg sm:rounded-lg">
                                                        <div class="inline-block min-w-full align-middle">
                                                            <div class="overflow-hidden ">
                                                                <table
                                                                    class="min-w-full divide-y divide-gray-200 table-fixed">
                                                                    <thead class="bg-teal-600">
                                                                        <tr>
                                                                            <th scope="col"
                                                                                class="py-3 px-6 text-xs font-bold tracking-wider text-left text-white uppercase">
                                                                                Category Name
                                                                            </th>
                                                                            <th scope="col" class="p-4">
                                                                                <span class="sr-only">Delete</span>
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody
                                                                        class="bg-white divide-y divide-gray-200">
                                                                        @forelse ($categories as $item)
                                                                            <tr
                                                                                class="hover:bg-teal-50">


                                                                                <td
                                                                                    class="py-4 px-6 text-sm font-bold text-gray-900 whitespace-nowrap">
                                                                                    {{ $item->name }}</td>
                                                                                <td
                                                                                    class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">

                                                                                    <form
                                                                                        action="{{ route('dashboard.category.destroy', $item->id) }}"
                                                                                        method="POST" class="d-inline">
                                                                                        @csrf
                                                                                        @method('DELETE')

                                                                                        <button
                                                                                            class="text-red-600 hover:text-red-800"
                                                                                            onclick="return confirm('Apakah yakin ingin di hapus?')">Delete</button>
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

                                            </div><!-- end tab -->
                                        </div>

                                        <div id="password" class="hidden min-h-[650px]">
                                            <h4 class="text-base text-ijo font-bold">Create Category</h4>

                                            <form action="{{ route('dashboard.category.store') }}" method="POST"
                                                class="mt-5">
                                                @csrf
                                                <div class="mb-4">
                                                    <label for="category"
                                                        class="block text-sm font-semibold mb-1 text-ijo">Category
                                                        Name<small class="text-red-600">*</small></label>
                                                    <input type="text" required
                                                        class="py-2 px-4 leading-6 block w-full text-gray-700 border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0"
                                                        id="category" name="name" placeholder="Enter name category">
                                                </div>

                                                <hr class="my-6">

                                                <!-- save start -->
                                                <div class="row mt-3">
                                                    <div class="col-lg-12">
                                                        <button type="submit"
                                                            class="inline-flex items-center justify-center py-3 px-4 rounded-lg text-sm font-semibold transition-all bg-red-500 text-white hover:bg-red-400">Submit</button>
                                                    </div>
                                                </div>
                                                <!-- save end -->
                                            </form>
                                        </div><!-- end tab -->

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
