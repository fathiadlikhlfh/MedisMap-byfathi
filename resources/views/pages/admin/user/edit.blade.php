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
                        <div class="bg-white rounded">
                            <div class="p-6">
                                <div class="grid lg:grid-cols-4 gap-6" data-fc-type="tab">
                                    <!-- menu start -->
                                    <div class="col-span-1">
                                        <nav aria-label="Tabs"
                                            class="flex flex-row lg:flex-col gap-2 w-auto lg:w-full bg-ijo p-1.5 rounded-md lg:justify-start"
                                            role="tablist">
                                            <a href="{{ route('dashboard.user.index') }}"
                                                class="text-ijo p-3 font-semibold hover:text-white bg-white hover:bg-teal-400 rounded-lg">Back</a>
                                        </nav>
                                    </div>
                                    <!-- menu end -->
                                    <div class="lg:col-span-3 transition-all px-4 h-full">
                                        <div id="edit-hospital" class=" min-h-[650px]">
                                            <h4 class="text-base text-ijo">Update Data User</h4>

                                            <form action="{{ route('dashboard.user.update', [$user->id]) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @method('PUT')
                                                @csrf

                                                <!-- basic info start -->
                                                <div class="grid grid-cols-2 items-center gap-6 mt-6">
                                                    <div class="">
                                                        <div class="mb-4">
                                                            <label for="name"
                                                                class="block text-sm font-semibold mb-1 text-ijo">User
                                                                Name<small class="text-red-500">*</small></label>
                                                            <input type="text" readonly
                                                                class="py-2 px-4 leading-6 block w-full text-gray-700 border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0"
                                                                id="name" placeholder="Name" name="name"
                                                                value="{{ $user->name ?? '' }}">
                                                        </div>

                                                        <div class="mb-4">
                                                            <label for="email"
                                                                class="block text-sm font-semibold mb-1 text-ijo">
                                                                Email<small class="text-red-500">*</small></label>
                                                            <input type="text" readonly
                                                                class="py-2 px-4 leading-6 block w-full text-gray-700 border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0"
                                                                id="email" placeholder="Email" name="email"
                                                                value="{{ $user->email ?? '' }}">
                                                        </div>

                                                        <div class="mb-4">
                                                            <label for="category"
                                                                class="block text-sm font-semibold mb-1 text-ijo">Category</label>
                                                            <select
                                                                class="py-2 px-4 leading-6 block w-full text-gray-700 border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0"
                                                                style="border: 1px solid #F2F2F2;"
                                                                aria-label="Default select example" name="roles"
                                                                id="categorySelect">
                                                                <option value="{{ $user->roles ?? '' }}">
                                                                    {{ $user->roles }} </option>

                                                                <option value="ADMIN">
                                                                    ADMIN</option>

                                                                <option value="USER">
                                                                    USER </option>
                                                            </select>
                                                        </div>


                                                    </div>
                                                </div>
                                                <!-- save start -->
                                                <div class="flex mt-3">
                                                    <div class="w-full">
                                                        <button type="submit"
                                                            class="inline-flex items-center justify-center py-3 px-4 rounded-lg text-sm font-semibold transition-all bg-red-400 hover:bg-red-500 text-white">Submit</button>
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

@push('after-style')
@endpush

@push('after-script')
@endpush
