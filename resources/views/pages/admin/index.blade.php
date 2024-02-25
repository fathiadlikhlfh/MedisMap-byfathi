@extends('layouts.admin')

@section('title', 'Admin')

@section('content')
    <!-- page-content start -->
    <div class="bg-slate-100  mt-[77px]  py-3 px-3" style="min-height: 800px;">

        {{-- Cookies/Alert --}}
        {{-- <div id="cookies-simple-with-dismiss-button" class="fixed top start-1/2 transform -translate-x-1/2 z-[60] max-w-4xl w-full mx-auto p-6">
            <!-- Card -->
            <div class="p-4 bg-teal-50 border shadow-xl rounded-lg">
              <div class="flex justify-between items-center gap-x-5 sm:gap-x-10">
                <h2 class="text-sm text-ijo">
                  Success Login as {{ Auth::user()->roles  }} and Welcome Back {{  Auth::user()->name  }}
                </h2>
                <button type="button" class="p-2 inline-flex items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent bg-red-400 text-white hover:bg-red-600 disabled:opacity-50 disabled:pointer-events-none" data-hs-remove-element="#cookies-simple-with-dismiss-button">
                  <span class="sr-only">Dismiss</span>
                  <svg class="flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg>
                </button>
              </div>
            </div>
            <!-- End Card -->
        </div> --}}

        <section class="relative overflow-hidden">
            <div class="container">
                <div class="flex">
                    <div class="w-full">
                        <h3 class="text-xl text-gray-800 mt-2">Hi {{  Auth::user()->name  }}</h3>
                        <p class="mt-1 font-medium mb-4">Welcome to {{ Auth::user()->roles  }} Dasboard</p>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-2">
                    <!-- profile widget star -->
                    <div class="lg:col-span-5 col-span-12">
                        <div class="bg-white rounded">
                            <div class="p-6">
                                <div class="flex">
                                    <div class="grow">
                                        <div class="flex">
                                            <img src="assets/images/avatars/img-5.jpg"
                                                class="img-fluid w-12 h-12 rounded me-3" alt="...">  
                                            <div class="grow">
                                                <h4 class="tetx-lg text-gray-800 mb-1 mt-0 font-semibold">{{  Auth::user()->name  }}</h4>
                                                <p class="text-gray-400 pb-0 text-sm mb-4 font-medium">{{ Auth::user()->roles  }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Btn dropdown --}}
                                    <div class="shrink text-end">
                                        <button class="text-gray-800" data-fc-target="dropdown-target"
                                            data-fc-type="dropdown" data-fc-placement="bottom-end" type="button">
                                            <svg class="h-6 w-6 text-gray-600" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-more-horizontal icon icon-xs">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="19" cy="12" r="1"></circle>
                                                <circle cx="5" cy="12" r="1"></circle>
                                            </svg>
                                        </button>

                                        <div id="dropdown-target"
                                            class="hidden bg-white  shadow rounded py-2 px-1.5 min-w-[10rem]">
                                            <a class="flex items-center py-1.5 px-5 text-base text-gray-500 hover:bg-slate-100 hover:text-slate-700 rounded"
                                                href="javascript:void(0)">
                                                <svg class="h-4 w-4 me-2.5" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-edit icon-xxs icon me-2">
                                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                    </path>
                                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                    </path>
                                                </svg>
                                                <span class="">Lorem.</span>
                                            </a>
                                            <a class="flex items-center py-1.5 px-5 text-base text-gray-500 hover:bg-slate-100 hover:text-slate-700 rounded"
                                                href="javascript:void(0)">
                                                <svg class="h-4 w-4 me-2.5" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-refresh-cw icon-xxs icon me-2">
                                                    <polyline points="23 4 23 10 17 10"></polyline>
                                                    <polyline points="1 20 1 14 7 14"></polyline>
                                                    <path
                                                        d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15">
                                                    </path>
                                                </svg>
                                                <span class="">Lorem.</span>
                                            </a>

                                            <hr class="my-2">

                                            <a class="flex items-center py-1.5 px-5 text-base text-red-500 hover:bg-slate-100 rounded"
                                                href="#">
                                                {{-- <svg class="h-4 w-4 me-2.5" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-trash-2 icon-xxs icon me-2">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                    </path>
                                                    <line x1="10" y1="11" x2="10" y2="17">
                                                    </line>
                                                    <line x1="14" y1="11" x2="14" y2="17">
                                                    </line>
                                                </svg> --}}
                                                <span class="">Lorem.</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex gap-4 flex-wrap py-4 border-b">
                                    <div class="mb-2">
                                        <a href="#" class="flex gap-3 text-gray-400 text-sm mb-3">
                                            <svg class="h-5 w-5"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" width="24" height="24"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-mail icon-xs icon me-1">
                                                <path
                                                    d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                                </path>
                                                <polyline points="22,6 12,13 2,6"></polyline>
                                            </svg>
                                            {{  Auth::user()->email  }}
                                        </a>
                                        <span href="" class="flex gap-3 text-gray-400 text-sm items-center">
                                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 1024 1024"><path fill="currentColor" d="m924.8 625.7l-65.5-56c3.1-19 4.7-38.4 4.7-57.8s-1.6-38.8-4.7-57.8l65.5-56a32.03 32.03 0 0 0 9.3-35.2l-.9-2.6a443.74 443.74 0 0 0-79.7-137.9l-1.8-2.1a32.12 32.12 0 0 0-35.1-9.5l-81.3 28.9c-30-24.6-63.5-44-99.7-57.6l-15.7-85a32.05 32.05 0 0 0-25.8-25.7l-2.7-.5c-52.1-9.4-106.9-9.4-159 0l-2.7.5a32.05 32.05 0 0 0-25.8 25.7l-15.8 85.4a351.86 351.86 0 0 0-99 57.4l-81.9-29.1a32 32 0 0 0-35.1 9.5l-1.8 2.1a446.02 446.02 0 0 0-79.7 137.9l-.9 2.6c-4.5 12.5-.8 26.5 9.3 35.2l66.3 56.6c-3.1 18.8-4.6 38-4.6 57.1c0 19.2 1.5 38.4 4.6 57.1L99 625.5a32.03 32.03 0 0 0-9.3 35.2l.9 2.6c18.1 50.4 44.9 96.9 79.7 137.9l1.8 2.1a32.12 32.12 0 0 0 35.1 9.5l81.9-29.1c29.8 24.5 63.1 43.9 99 57.4l15.8 85.4a32.05 32.05 0 0 0 25.8 25.7l2.7.5a449.4 449.4 0 0 0 159 0l2.7-.5a32.05 32.05 0 0 0 25.8-25.7l15.7-85a350 350 0 0 0 99.7-57.6l81.3 28.9a32 32 0 0 0 35.1-9.5l1.8-2.1c34.8-41.1 61.6-87.5 79.7-137.9l.9-2.6c4.5-12.3.8-26.3-9.3-35M788.3 465.9c2.5 15.1 3.8 30.6 3.8 46.1s-1.3 31-3.8 46.1l-6.6 40.1l74.7 63.9a370.03 370.03 0 0 1-42.6 73.6L721 702.8l-31.4 25.8c-23.9 19.6-50.5 35-79.3 45.8l-38.1 14.3l-17.9 97a377.5 377.5 0 0 1-85 0l-17.9-97.2l-37.8-14.5c-28.5-10.8-55-26.2-78.7-45.7l-31.4-25.9l-93.4 33.2c-17-22.9-31.2-47.6-42.6-73.6l75.5-64.5l-6.5-40c-2.4-14.9-3.7-30.3-3.7-45.5c0-15.3 1.2-30.6 3.7-45.5l6.5-40l-75.5-64.5c11.3-26.1 25.6-50.7 42.6-73.6l93.4 33.2l31.4-25.9c23.7-19.5 50.2-34.9 78.7-45.7l37.9-14.3l17.9-97.2c28.1-3.2 56.8-3.2 85 0l17.9 97l38.1 14.3c28.7 10.8 55.4 26.2 79.3 45.8l31.4 25.8l92.8-32.9c17 22.9 31.2 47.6 42.6 73.6L781.8 426zM512 326c-97.2 0-176 78.8-176 176s78.8 176 176 176s176-78.8 176-176s-78.8-176-176-176m79.2 255.2A111.6 111.6 0 0 1 512 614c-29.9 0-58-11.7-79.2-32.8A111.6 111.6 0 0 1 400 502c0-29.9 11.7-58 32.8-79.2C454 401.6 482.1 390 512 390c29.9 0 58 11.6 79.2 32.8A111.6 111.6 0 0 1 624 502c0 29.9-11.7 58-32.8 79.2"/></svg>
                                            {{ Auth::user()->roles  }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- profile widget end -->

                </div><!-- end grid -->
            </div>
        </section>

        <section class="relative overflow-hidden">
            <div class="container">
                <div class="flex items-center justify-between my-6">
                    <div class="">
                        <h4 class="text-base text-gray-800">User Active</h4>
                    </div>
                    <div class="text-end">
                        <a href="{{ route('dashboard.user.index') }}" class="font-semibold text-ijo text-sm hover:text-teal-800">View All <svg class="h-5 w-5 inline"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-arrow-right ms-1 icon-xxs">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg></a>
                    </div>
                </div><!-- end title -->

                <div class="flex flex-col gap-y-2 w-full mb-4">

                    @forelse ($users as $item)
                        <div class="bg-white">
                            <div class="p-6">
                                <div class="flex flex-wrap lg:flex-nowrap items-center sm:justify-between gap-y-2">
                                    <div class="w-1/2">
                                        <div class="flex items-center gap-2">
                                            <label class="text-sm font-semibold text-gray-700" for="task1">
                                                {{ $item->name }}
                                            </label>
                                        </div> <!-- end checkbox -->
                                    </div> <!-- end col -->
                                    <div class="lg:w-1/3">
                                        <label class="text-sm font-semibold text-gray-700" for="task1">
                                                {{ $item->email }}
                                            </label>
                                    </div>
                                    <div class="lg:w-1/3">
                                        <label class="text-sm font-semibold text-gray-700" for="task1">
                                                {{ $item->roles }}
                                            </label>
                                    </div>
                                    <div class="lg:w-1/3">
                                        <div class="flex items-center justify-end gap-6">
                                            <a href="{{ route('dashboard.user.index') }}">
                                                <div class="">
                                                    <div class="inline-flex items-center gap-2 text-gray-800 hover:text-gray-600" data-fc-type="tooltip">
                                                        <svg class="h-5 w-5 inline" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                                            <path fill="currentColor" d="M30.94 15.66A16.69 16.69 0 0 0 16 5A16.69 16.69 0 0 0 1.06 15.66a1 1 0 0 0 0 .68A16.69 16.69 0 0 0 16 27a16.69 16.69 0 0 0 14.94-10.66a1 1 0 0 0 0-.68M16 25c-5.3 0-10.9-3.93-12.93-9C5.1 10.93 10.7 7 16 7s10.9 3.93 12.93 9C26.9 21.07 21.3 25 16 25"/>
                                                            <path fill="currentColor" d="M16 10a6 6 0 1 0 6 6a6 6 0 0 0-6-6m0 10a4 4 0 1 1 4-4a4 4 0 0 1-4 4"/>
                                                        </svg>
                                                        <span class="text-sm font-medium">View</span>
                                                    </div>
                                                    <div class="bg-gray-800 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50"
                                                        role="tooltip">
                                                        View List data Users
                                                        <div class="bg-gray-800 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]"
                                                            data-fc-arrow></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div> <!-- end col -->
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </section>
    </div>
    <!-- page-content end -->


@endsection

@push('after-style')
@endpush

@push('after-script')
    {{-- <script>
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var latitude = position.coords.latitude;
                var longitude = position.coords.longitude;

                document.getElementById('latitude').value = latitude;
                document.getElementById('longitude').value = longitude;

                document.getElementById('serviceLatitude').value = latitude;
                document.getElementById('serviceLongitude').value = longitude;

            }, function(error) {
                console.error('Error getting location:', error);
            });
        } else {
            console.error('Geolocation is not supported by this browser.');
        }
    </script> --}}
@endpush
