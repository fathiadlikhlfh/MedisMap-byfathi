@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- =========== Hero Section Start =========== -->

    <!-- =========== Hero Section End =========== -->

    <!-- =========== feature Section Start =========== -->
    <section class="overflow-hidden">
        <div class="xl:py-24 py-16">
            <div class="container">

                <div class="relative overflow-hidden">
                    <div class="max-w-[85rem] mx-auto px-4 py-10">
                      <div class="text-center">
                        <h1 class="text-2xl sm:text-4xl font-bold text-teal-600">
                          Find Health Facility
                        </h1>
                
                        <p class="text-2xl sm:text-4xl font-bold mt-3 text-teal-600">
                          With Detailed Information.
                        </p>
                
                        <div class="mt-7 sm:mt-12 mx-auto max-w-xl relative">
                          <!-- Form -->
                          <form action="{{ route('search') }}" method="GET">
                            @csrf
                            <div class="relative z-10 flex space-x-3 p-3">
                              <div class="flex-[1_0_0%]">
                                <label for="keyword" class="block text-sm text-gray-700 font-medium"><span class="sr-only">Search article</span></label>
                                <input type="text" name="keyword" id="keyword" class="py-2.5 px-4 block w-full border-2 rounded-lg border-teal-600 placeholder:text-gray-500 text-gray-500" placeholder="Cari Faskes">
                              </div>
                              <div class="flex-[0_0_auto]">
                                <button type="submit" class="w-[46px] h-[46px] inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border bg-red-400 text-white hover:bg-red-500 disabled:opacity-50 disabled:pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg>
                                </button>
                              </div>
                            </div>
                          </form>
                          <!-- End Form -->
                        </div>
                      </div>
                    </div>
                  </div>

                <div class="text-center mt-14">
                    <h1 class="text-3xl/tight font-bold mt-3 mb-4 text-ijo/80">Solution For Find Health Facilities</h1>
                    <h1 class="text-3xl/tight font-bold mt-3 mb-4 text-ijo/80">Our Vision & Mision</h1>
                </div>

                <div class="xl:pt-16 xl:pb-28 py-16">
                    <div class="grid lg:grid-cols-2 grid-cols-1 gap-6 items-center">

                        <div class="relative">
                            <img src="assets/images/hero/Medicine-bro.png" alt="Medicine" data-aos="fade-right"
                                data-aos-duration="400">
                        </div>

                        <div class="lg:ms-24">
                            <div data-fc-type="accordion" data-aos="fade-up" data-aos-duration="500">

                                <!-- 1 (Penghubung) -->
                                <button
                                    class="pt-2 inline-flex items-center gap-x-4 w-full font-medium text-left text-gray-800 transition-all hover:text-gray-500 dark:text-gray-200 dark:hover:text-gray-400"
                                    data-fc-type="collapse">
                                    <div class="bg-emerald-50 rounded-lg flex items-center justify-center h-12 w-12">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#92E3A9" d="M7 14v-3.09c-.72-.33-1.39-.73-2-1.2V14zm-2 4H3v-2H1v-2h2V7h2v1.43C6.8 10 9.27 11 12 11c2.73 0 5.2-1 7-2.57V7h2v7h2v2h-2v2h-2v-2H5zm12-7.09V14h2V9.71c-.61.47-1.28.87-2 1.2M16 14v-2.68c-.64.23-1.31.4-2 .52V14zm-3 0v-2.04L12 12l-1-.04V14zm-3 0v-2.16c-.69-.12-1.36-.29-2-.52V14z"/></svg> 
                                    </div>
                                    <h1 class="font-medium mb-4 mt-2">Penghubung</h1>
                                </button>
                                <div class="w-full overflow-hidden duration-300 ps-16">
                                    <p class="text-gray-700 dark:text-gray-300">
                                        MedisMap sebagai jembatan antara dunia medis dan teknologi. Bersama, kami merintis jalur untuk masa depan kesehatan yang lebih cerdas, terhubung, dan bersahabat.
                                    </p>
                                </div>

                                <div class="border-b my-6"></div>

                                <!-- 2 -->
                                <button
                                    class="pt-2 inline-flex items-center gap-x-4 w-full font-medium text-left text-gray-800 transition hover:text-gray-500 dark:text-gray-200 dark:hover:text-gray-400"
                                    data-fc-type="collapse">
                                    <div class="bg-yellow-200/50 rounded-lg flex items-center justify-center h-12 w-12">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="#475569" d="M6.813 2.406L5.405 3.812L7.5 5.906L8.906 4.5zm18.375 0L23.093 4.5L24.5 5.906l2.094-2.093zM16 3.03c-.33.004-.664.023-1 .064c-.01 0-.02-.002-.03 0c-4.056.465-7.284 3.742-7.845 7.78c-.448 3.25.892 6.197 3.125 8.095a5.238 5.238 0 0 1 1.75 3.03v6h2.28c.348.597.983 1 1.72 1s1.372-.403 1.72-1H20v-4h.094v-1.188c0-1.466.762-2.944 2-4.093C23.75 17.06 25 14.705 25 12c0-4.94-4.066-9.016-9-8.97m0 2c3.865-.054 7 3.11 7 6.97c0 2.094-.97 3.938-2.313 5.28l.032.032A7.792 7.792 0 0 0 18.279 22h-4.374c-.22-1.714-.955-3.373-2.344-4.563c-1.767-1.5-2.82-3.76-2.468-6.312c.437-3.15 2.993-5.683 6.125-6.03a6.91 6.91 0 0 1 .78-.064zM2 12v2h3v-2zm25 0v2h3v-2zM7.5 20.094l-2.094 2.093l1.407 1.407L8.905 21.5zm17 0L23.094 21.5l2.093 2.094l1.407-1.407zM14 24h4v2h-4z"/></svg>
                                    </div>
                                    <h1 class="font-medium mb-4 mt-2">Kemudahan</h1>
                                </button>
                                <div class="hidden w-full overflow-hidden duration-300 ps-16">
                                    <p class="text-gray-700 dark:text-gray-300">
                                        MedisMap: Membuka Pintu Kemudahan dalam Perjalanan Kesehatan. Kami Menyatukan Teknologi untuk Mendorong Masyarakat agar Bijaksana dalam Mengelola Layanan Kesehatan Mereka.
                                    </p>
                                </div>

                                <div class="border-b my-6"></div>

                                <!-- 3 -->
                                <button
                                    class="pt-2 inline-flex items-center gap-x-4 w-full font-medium text-left text-gray-800 transition hover:text-gray-500 dark:text-gray-200 dark:hover:text-gray-400"
                                    data-fc-type="collapse">
                                    <div class="bg-gray-500/10 rounded-lg flex items-center justify-center h-12 w-12">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#b91c1c" d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12c5.16-1.26 9-6.45 9-12V5Zm0 3.9a3 3 0 1 1-3 3a3 3 0 0 1 3-3m0 7.9c2 0 6 1.09 6 3.08a7.2 7.2 0 0 1-12 0c0-1.99 4-3.08 6-3.08"/></svg>
                                    </div>
                                    <h1 class="font-medium mb-4 mt-2">Admin Up To Date</h1>
                                </button>
                                <div class="hidden w-full overflow-hidden duration-300 ps-16">
                                    <p class="text-gray-700 dark:text-gray-300">
                                        Admin yang Selalu Up To Date Terhadap Data sebuah Fasilitas Kesehatan serta Menjaga Privasi Data dari Pengguna
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div id="aboutus">
                    <div class="grid lg:grid-cols-2 grid-cols-1n gap-6 items-center">
                        <div class="order-2 lg:order-1 2xl:w-9/12" data-aos="fade-up" data-aos-duration="500">
                            <h1 class="text-3xl font-bold mt-6 mb-4 text-center text-ijo/80">About Us</h1>
                            <p class="text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, reiciendis! Deleniti quaerat, libero sint voluptas aperiam neque doloribus numquam, odit dolorum cumque dicta sequi cum!</p>
                            <p class="text-gray-500 mt-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores accusamus repellat commodi veritatis non accusantium!</p>
                        </div>

                        <div class="relative order-1 lg:order-2">
                            <img src="assets/images/hero/MedicalHelp.png" alt="saas2" data-aos="fade-left"
                                data-aos-duration="600">
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </section>
    <!-- =========== feature Section end =========== -->

    
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
