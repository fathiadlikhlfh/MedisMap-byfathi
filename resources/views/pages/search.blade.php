@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- features start -->
    {{-- <section class="position-relative overflow-hidden py-4 pb-lg-7 mt-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col text-center">
                    <h1 class="display-5 fw-medium">Better Management. Better Performance</h1>
                    <p class="text-muted mx-auto">
                        Start working with <span class="text-primary fw-bold">Prompt</span> to manage your workforce better
                    </p>
                </div>
            </div>
            <div class="row mt-5">

                @forelse ($hospitals as $item)

                    <div class="col-lg-4">
                        <div>
                            <img src="{{ Storage::url($item->thumbnail) }}" alt="{{ $item->name }}" class="shadow rounded"
                                height="250" style="max-height: 250px; min-width: 250px;" />

                            <div class="mt-3">
                                <a href="#">
                                    <span
                                        class="badge badge-soft-primary mb-1 text-capitalize">{{ $item->category->name }}</span>
                                </a>
                            </div>

                            <h4 class="fw-semibold mt-3">
                                <a class="" href="{{ route('detail', $item->slug) }}">
                                    {{ $item->name }}
                                </a>
                            </h4>

                            <p class="text-muted text-truncate">
                                {{ $item->description }}
                                <a href="{{ route('detail', $item->slug) }}" class="text-primary">read more</a>
                            </p>
                        </div>
                    </div>


                @empty
                @endforelse

                {{ $hospitals->links() }}


                <div class="col-12">
                    <div class="mb-3 mt-5">
                        <div style="height: 300px">
                            <div id="map" class="rounded"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section> --}}

    <section class="py-24">
        <div class="container">


            <div class="relative overflow-hidden">
                <div class="max-w-[85rem] mx-auto px-4">
                  <div class="text-center">
                    <div class="relative flex justify-between items-center">
                        <div class="">
                            <span class="text-3xl font-bold text-ijo/80">
                                Health Facility In Bandung
                            </span>
                        </div>
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
            

            <div class="grid lg:grid-cols-3 grid-cols-1 gap-6 lg:py-16 py-14" data-aos="fade-up">

                @forelse ($hospitals ?? [] as $item)
                    <div>
                        <img src="{{ Storage::url($item->thumbnail) }}" alt="{{ $item->name }}" class="rounded-md mb-5"
                            style="max-height: 250px; min-width:100%; object-fit:cover">

                        <span class="bg-teal-50 text-ijo font-medium rounded-md text-xs py-1 px-2"><a
                                href="#">{{ $item->category->name }}</a></span>
                        <h1 class="text-lg my-3 transition-all text-ijo hover:text-teal-800"><a
                                href="{{ route('detail', $item->slug) }}">{{ $item->category->name }}
                                {{ $item->name }}</a></h1>
                        <p class="text-sm/relaxed tracking-wider text-gray-500 truncate">{{ $item->description }}
                            
                        </p>
                        <a href="{{ route('detail', $item->slug) }}" class="text-ijo font-bold text-sm hover:text-teal-800">read more</a>
                    </div>


                @empty
                <p class="text-center">Tidak ada data faskes yang ditemukan.</p>
                @endforelse
            </div>

            <div class="mb-24 mx-auto">
                {{ $hospitals->links() }}
            </div>


            <div class="col-12">
                <div class="mb-3 mt-5">
                    <div style="height: 300px">
                        <div id="map" class="rounded"></div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- features end -->

@endsection

@push('after-style')
    <style>
        #map {
            height: 100%;
        }

        #description {
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
        }

        #infowindow-content .title {
            font-weight: bold;
        }

        #infowindow-content {
            display: none;
        }

        #map #infowindow-content {
            display: inline;
        }

        .pac-card {
            background-color: #fff;
            border: 0;
            border-radius: 2px;
            box-shadow: 0 1px 4px -1px rgba(0, 0, 0, 0.3);
            margin: 10px;
            padding: 0 0.5em;
            font: 400 18px Roboto, Arial, sans-serif;
            overflow: hidden;
            font-family: Roboto;
            padding: 0;
        }

        #pac-container {
            padding-bottom: 12px;
            margin-right: 12px;
        }

        .pac-controls {
            display: inline-block;
            padding: 5px 11px;
        }

        .pac-controls label {
            font-family: Roboto;
            font-size: 13px;
            font-weight: 300;
        }

        #pac-input {
            background-color: #fff;
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
            margin-left: 12px;
            padding: 0 11px 0 13px;
            text-overflow: ellipsis;
            width: 400px;
        }

        #pac-input:focus {
            border-color: #4d90fe;
        }

        #title {
            color: #fff;
            background-color: #4d90fe;
            font-size: 25px;
            font-weight: 500;
            padding: 6px 12px;
        }

        #target {
            width: 345px;
        }
    </style>
@endpush

@push('after-script')
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAabNyMuVT8g7rBRF5fcb7ZjAV8ZYuXDls&callback=displayBusinessMarkers&libraries=places&v=weekly"
        defer></script>
    <script>
        // function initAutocomplete() {
        //     // Initialize the map
        //     const map = new google.maps.Map(document.getElementById('map'), {
        //         center: {
        //             lat: -34.397,
        //             lng: 150.644
        //         }, // Default center (you can set it to your desired default location)
        //         zoom: 8, // Default zoom level
        //     });

        //     // Hospitals data from the server
        //     const hospitals = {!! json_encode($hospitals) !!};

        //     console.log(hospitals);

        //     // Loop through each hospital and add a marker to the map
        //     hospitals.data.forEach(hospital => {
        //         const marker = new google.maps.Marker({
        //             position: {
        //                 lat: parseFloat(hospital.latitude),
        //                 lng: parseFloat(hospital.longitude)
        //             },
        //             map: map,
        //             title: hospital.name,
        //         });

        //         // You can customize the marker icon if needed
        //         // marker.setIcon('path/to/custom-marker-icon.png');
        //     });
        // }

        function displayBusinessMarkers(businessData) {
            const map = new google.maps.Map(document.getElementById("map"), {
                center: {
                    lat: -6.922187861246663, 
                    lng: 107.61946363551262,
                },
                zoom: 5,
                mapTypeId: "roadmap",
            });

            const markers = [];

            businessData.data.forEach((business) => {

                const hospitalLatitude = parseFloat(business.latitude);
                const hospitalLongitude = parseFloat(business.longitude);

                const marker = new google.maps.Marker({
                    position: {
                        lat: hospitalLatitude,
                        lng: hospitalLongitude,
                    },
                    map,
                    title: `${business.category.name} - ${business.name}`,
                    // title: business.name,
                    // icon: '/assets/images/marker/hospital-marker.png',
                });

                markers.push(marker);

                const infowindow = new google.maps.InfoWindow({
                    content: `
                    <h6>${business.category.name} ${business.name}</h6>
                    <p>${business.address}</p>
                    <p>View <a href="/detail/${business.slug}" class="font-semibold text-blue-500 hover:text-blue-800">Detail</a></p>`,
                });

                marker.addListener("click", () => {
                    infowindow.open(map, marker);
                });
            });

            const bounds = new google.maps.LatLngBounds();
            markers.forEach((marker) => {
                bounds.extend(marker.getPosition());
            });
            map.fitBounds(bounds);
            
            if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                (position) => {
                    const userLocation = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude,
                    };

                    // Tambahkan marker untuk lokasi pengguna
                    const userMarker = new google.maps.Marker({
                        position: userLocation,
                        map,
                        title: "Lokasi Saya",
                        icon: {
                            url: 'https://maps.google.com/mapfiles/ms/icons/red-dot.png',
                        },
                    });

                    userMarker.setMap(map);

                    const userInfowindow = new google.maps.InfoWindow({
                        content: "Lokasi Pengguna",
                    });

                    userMarker.addListener("click", () => {
                        userInfowindow.open(map, userMarker);
                    });

                    const centerControlDiv = document.createElement("div");
                    const centerControl = new CenterControl(centerControlDiv, map, userLocation);

                    centerControlDiv.index = 1;
                    map.controls[google.maps.ControlPosition.TOP_RIGHT].push(centerControlDiv);
                },
                (error) => {
                    console.error("Error getting user location:", error);
                }
            );
        } else {
            console.error("Geolocation is not supported by this browser.");
        }
    }

    function CenterControl(controlDiv, map, userLocation) {
        const controlUI = document.createElement("div");
        controlUI.style.backgroundColor = "#fff";
        controlUI.style.border = "2px solid #fff";
        controlUI.style.borderRadius = "3px";
        controlUI.style.boxShadow = "0 2px 6px rgba(0,0,0,.1)";
        controlUI.style.cursor = "pointer";
        controlUI.style.margin = "10px";
        controlUI.style.textAlign = "center";
        controlUI.title = "Klik untuk mendapatkan lokasi anda";
        controlDiv.appendChild(controlUI);        

        const controlImg = document.createElement("img");
        controlImg.src = 'assets/images/marker/user-marker.png';
        controlImg.style.width = "37px";
        controlUI.appendChild(controlImg);

        // Event listener untuk memusatkan peta ke lokasi pengguna saat tombol diklik
        controlUI.addEventListener("click", () => {
            map.setCenter(userLocation);
            map.setZoom(13); // Ganti level zoom sesuai kebutuhan
        });

        // Event listener untuk menangani efek hover
        controlUI.addEventListener("mouseenter", () => {
            controlUI.style.backgroundColor = "#f0f0f0"; // Ganti warna latar belakang sesuai keinginan
        });

        controlUI.addEventListener("mouseleave", () => {
            controlUI.style.backgroundColor = "#fff"; // Kembalikan warna latar belakang ke nilai awal
        });
    }

        document.addEventListener("DOMContentLoaded", () => {
            const businessData = {!! isset($hospitals) ? json_encode($hospitals) : 'null' !!};
            console.log(businessData);
            if (businessData) {
                displayBusinessMarkers(businessData);
            }
        });
    </script>
@endpush
