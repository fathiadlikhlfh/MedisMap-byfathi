@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <section class="pt-20">
        <div class="container">

            <div class="py-14">
                <div class="flex flex-wrap items-center gap-2 bg-gray-50 py-2 px-3 text-black">
                    <a href="{{ route('home') }}" class="transition-all text-teal-400 hover:text-ijo">Home</a> /
                    <a href="{{ route('search') }}" class="transition-all text-teal-400 hover:text-ijo">Detail</a> /
                    <p class="text-teal-400">{{ $hospital->name }}</p>
                </div>
            </div>

            <div class="lg:w-4/5">
                <span class="bg-teal-50 text-ijo font-medium rounded-md text-xs py-1 px-2"><a
                        href="#">{{ $hospital->category->name }}</a></span>
                <h1 class="lg:text-5xl/snug text-3xl/snug mt-3 text-ijo">{{ $hospital->category->name }} {{ $hospital->name }}</h1>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div>
                <img src="{{ Storage::url($hospital->thumbnail) }}" alt="{{ $hospital->name }}"
                    style="max-height: 300px; width: 100%; object-fit: contain;" class="rounded-md my-10" />

            </div>  

            {{-- <p class="text-sm/relaxed tracking-wider text-gray-600 mb-6"><i class="fa-solid fa-minus me-2"></i>{{ $hospital->address }}</p> --}}

            <div class="bg-gray-100 p-8 mb-6">
                <h5 class="text-base sm:text-lg font-normal text-gray-600 mb-3">{{ $hospital->category->name }} {{ $hospital->name }}</h5>
                <p class="text-gray-500 font-light text-sm mt-5"><i class="fa-solid fa-minus me-2"></i>Description</p>
                <p class="text-gray-500 font-light text-sm mt-2">{{ $hospital->description }}</p>
                <p class="text-gray-500 font-light text-sm mt-5"><i class="fa-solid fa-minus me-2"></i>Category</p>
                <p class="text-gray-500 font-light text-sm mt-2"></i>{{ $hospital->category->name }}</p>
                <p class="text-gray-500 font-light text-sm mt-5"><i class="fa-solid fa-minus me-2"></i>Addres</p>
                <p class="text-gray-500 font-light text-sm mt-2"></i>{{ $hospital->address }}</p>
            </div>

            <div class="mt-4">
                <button id="getUserLocationButton" class="bg-ijo hover:bg-teal-800 text-white font-bold py-2 px-4 rounded">
                    Dapatkan Lokasi Pengguna
                </button>
            </div>

            <div class="col-12">
                <div class="mb-3 mt-5">
                    <div style="height: 300px">
                        <div id="map" class="rounded"></div>
                    </div>
                </div>
            </div> 
            
            <div id="route-steps" class="mt-4"></div>

            <div class="flex gap-2 mt-8 mb-14">
                <p class="text-sm text-gray-500">SHARE:</p>
                <div class="flex gap-3">
                    <span>
                        <a href="#">
                            <svg class="w-5 h-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                            </svg>
                        </a>
                    </span>
                    <span>
                        <a href="#">
                            <svg class="w-5 h-5 text-teal-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                </path>
                            </svg>
                        </a>
                    </span>
                    <span>
                        <a href="#">
                            <svg class="w-5 h-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                            </svg>
                        </a>
                    </span>
                </div>
            </div>

        </div>
    </section>


    <!-- features end -->

@endsection

@push('after-style')
    <style>
        .w-button-custom {
            width: auto;
        }

        .uploader {
            position: relative;
            overflow: hidden;
            width: 50%;
            min-height: 75px;
            background: #ffffff;

            border-radius: 10px;
            border: 2px dashed #e8e8e8;
        }

        @media (min-width:280px) and (max-width: 576px) {
            .w-button-custom {
                width: 100%;
            }

            .uploader {
                width: 100%;
            }
        }

        .uploader .image-uploader {
            width: 75px;
            max-height: 75px;
            object-fit: cover;
            object-position: center;
        }

        #filePhoto {
            position: absolute;
            border-radius: 15px;
            width: 105px;
            height: 75px;
            left: 0;
            z-index: 2;
            opacity: 0;
            cursor: pointer;
        }

        .uploader img {
            border-radius: 10px;
            object-position: center;
            object-fit: cover;
            width: 105px;
            height: 75px;
            border: none;
        }

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
            margin-top: 12px;
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

{{-- @push('after-script')
    <script
        src="https://polyfill.io/v3/polyfill.min.js?features=default">
    </script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAabNyMuVT8g7rBRF5fcb7ZjAV8ZYuXDls&callback=initAutocomplete&libraries=places&v=weekly"
        defer>
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('pac-input');

            searchInput.addEventListener('keydown', function(event) {
                if (event.key === 'Enter') {
                    event.preventDefault();
                }
            });
        });

        function initAutocomplete() {

            const hospitalData = {!! isset($hospital) ? json_encode($hospital) : 'null' !!};
            const hospitalLatitude = parseFloat({{ $hospital->latitude }});
            const hospitalLongitude = parseFloat({{ $hospital->longitude }});

            // Lokasi Marker Fasilitas Kesehatan
            const map = new google.maps.Map(document.getElementById("map"), {
                center: {
                    lat: hospitalLatitude,
                    lng: hospitalLongitude,
                },
                zoom: 12,
                mapTypeId: "roadmap",
            });

            let markers = [];

            const existingMarker = new google.maps.Marker({
                map,
                position: {
                    lat: hospitalLatitude,
                    lng: hospitalLongitude,
                },
                title: "Lokasi Fasilitas Kesehatan", 
            });

            markers.push(existingMarker);


            const input = document.getElementById("pac-input");
            const searchBox = new google.maps.places.SearchBox(input, {
                componentRestrictions: {
                    country: "ID"
                }
            });

            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

            map.addListener("bounds_changed", () => {
                searchBox.setBounds(map.getBounds());
            });

            function createInfoWindow(hospital) {
                return new google.maps.InfoWindow({
                    content: `
                        <h6>${hospital.category.name} ${hospital.name}</h6>
                        <p>${hospital.address}</p>`,
                });
            }

            markers.forEach((marker, index) => {
                const infowindow = createInfoWindow(hospitalData);

                marker.addListener("click", () => {
                    infowindow.open(map, marker);
                });
            });

            searchBox.addListener("places_changed", () => {
                markers.forEach((marker) => {
                    marker.setMap(null);
                });
                markers = [];

                const places = searchBox.getPlaces();

                if (places.length == 0) {
                    return;
                }

                const bounds = new google.maps.LatLngBounds();

                places.forEach((place) => {
                    if (!place.geometry || !place.geometry.location) {
                        console.log("Returned place contains no geometry");
                        return;
                    }

                    const icon = {
                        url: place.icon,
                        size: new google.maps.Size(71, 71),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(17, 34),
                        scaledSize: new google.maps.Size(25, 25),
                    };

                    const newMarker = new google.maps.Marker({
                        map,
                        icon,
                        title: place.name,
                        position: place.geometry.location,
                    });

                    markers.push(newMarker);

                    if (place.geometry.viewport) {
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }

                    const selectedLocation = {
                        latitude: place.geometry.location.lat(),
                        longitude: place.geometry.location.lng()
                    };

                    document.getElementById("latitude").value = selectedLocation.latitude;
                    document.getElementById("longitude").value = selectedLocation.longitude;

                    bounds.extend(place.geometry.location);
                });

                map.fitBounds(bounds);
            });

            map.addListener("click", (event) => {
                const selectedLocation = {
                    latitude: event.latLng.lat(),
                    longitude: event.latLng.lng()
                };

                document.getElementById("latitude").value = selectedLocation.latitude;
                document.getElementById("longitude").value = selectedLocation.longitude;

                markers.forEach((marker) => {
                    marker.setMap(null);
                });
                markers = [];

                const newMarker = new google.maps.Marker({
                    map,
                    position: event.latLng,
                });

                markers.push(newMarker);
            });

            document.getElementById('getUserLocationButton').addEventListener('click', getUserLocation);

            function getUserLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(
                        (position) => {
                            const userLocation = {
                                lat: position.coords.latitude,
                                lng: position.coords.longitude,
                            };

                            map.setCenter(userLocation);
                            map.setZoom(12);

                            const userMarker = new google.maps.Marker({
                                position: userLocation,
                                        map,
                                        title: "Lokasi Pengguna",
                                        icon: {
                                            url: 'https://maps.google.com/mapfiles/ms/icons/red-dot.png',
                                        },
                            });

                            userMarker.setMap(map);

                            const userInfowindow = new google.maps.InfoWindow({
                                content: 'Lokasi Pengguna',
                            });

                            userMarker.addListener("click", () => {
                                userInfowindow.open(map,userMarker);
                            });
                            
                            createRoute(userLocation, existingMarker.position, map);
                        },
                        (error) => {
                            console.error("Error Mendapatkan Lokasi Anda");
                        }
                    );
                } else {
                    console.error("Geoloaction is not Support by this browser.");
                }
            };

            function createRoute(userLocation, hospitalLocation, map) {
                const directionsService = new google.maps.directionsService();
                const directionsRenderer = new google.maps.directionsRenderer({
                    map,
                    suppressMarkers: true,
                });

                const request = {
                    origin: userLocation,
                    destination: hospitalLocation,
                    travelMode: google.maps.travelMode.DRIVING,
                };

                directionsService.route(request, (result, status) => {
                    if (status == google.maps.directionStatus.OK) {
                        directionsRenderer.setDirections(result);
                        displayRouteSteps(result);
                    } else {
                        console.error("Error Creating Route:", status);
                    }
                });
            }

            function displayRouteSteps(directionsResult) {
                const routeLeg = directionsResult.routes[0].legs[0];
                const stepsContainer = document.getElementById("route-steps");

                while(stepsContainer.firstChild) {
                    stepsContainer.removeChild(stepsContainer.firstChild);
                }

                routeLeg.steps.forEach((step, index) => {
                    const stepElement = document.createElement("div");
                    stepElement.innerHTML = '<p>Step ${index + 1}: ${step.instructions}</p>';
                    stepsContainer.appendChild(stepElement);
                });
            }
        }

        window.initAutocomplete = initAutocomplete;
    </script>
@endpush --}}

@push('after-script')
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAabNyMuVT8g7rBRF5fcb7ZjAV8ZYuXDls&callback=initAutocomplete&libraries=places&v=weekly" defer></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('pac-input');

            searchInput.addEventListener('keydown', function(event) {
                if (event.key === 'Enter') {
                    event.preventDefault();
                }
            });
        });

        function initAutocomplete() {
            const hospitalData = {!! isset($hospital) ? json_encode($hospital) : 'null' !!};
            const hospitalLatitude = parseFloat({{ $hospital->latitude }});
            const hospitalLongitude = parseFloat({{ $hospital->longitude }});

            const map = new google.maps.Map(document.getElementById("map"), {
                center: {
                    lat: hospitalLatitude,
                    lng: hospitalLongitude,
                },
                zoom: 12,
                mapTypeId: "roadmap",
            });

            let markers = [];

            const existingMarker = new google.maps.Marker({
                map,
                position: {
                    lat: hospitalLatitude,
                    lng: hospitalLongitude,
                },
                title: "Lokasi Fasilitas Kesehatan", 
            });

            markers.push(existingMarker);

            const input = document.getElementById("pac-input");
            const searchBox = new google.maps.places.SearchBox(input, {
                componentRestrictions: {
                    country: "ID"
                }
            });

            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

            map.addListener("bounds_changed", () => {
                searchBox.setBounds(map.getBounds());
            });

            function createInfoWindow(hospital) {
                return new google.maps.InfoWindow({
                    content: `
                        <h6>${hospital.category.name} ${hospital.name}</h6>
                        <p>${hospital.address}</p>`,
                });
            }

            markers.forEach((marker, index) => {
                const infowindow = createInfoWindow(hospitalData);

                marker.addListener("click", () => {
                    infowindow.open(map, marker);
                });
            });

            searchBox.addListener("places_changed", () => {
                markers.forEach((marker) => {
                    marker.setMap(null);
                });
                markers = [];

                const places = searchBox.getPlaces();

                if (places.length == 0) {
                    return;
                }

                const bounds = new google.maps.LatLngBounds();

                places.forEach((place) => {
                    if (!place.geometry || !place.geometry.location) {
                        console.log("Returned place contains no geometry");
                        return;
                    }

                    const icon = {
                        url: place.icon,
                        size: new google.maps.Size(71, 71),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(17, 34),
                        scaledSize: new google.maps.Size(25, 25),
                    };

                    const newMarker = new google.maps.Marker({
                        map,
                        icon,
                        title: place.name,
                        position: place.geometry.location,
                    });

                    markers.push(newMarker);

                    if (place.geometry.viewport) {
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }

                    const selectedLocation = {
                        latitude: place.geometry.location.lat(),
                        longitude: place.geometry.location.lng()
                    };

                    document.getElementById("latitude").value = selectedLocation.latitude;
                    document.getElementById("longitude").value = selectedLocation.longitude;

                    bounds.extend(place.geometry.location);
                });

                map.fitBounds(bounds);
            });

            map.addListener("click", (event) => {
                const selectedLocation = {
                    latitude: event.latLng.lat(),
                    longitude: event.latLng.lng()
                };

                document.getElementById("latitude").value = selectedLocation.latitude;
                document.getElementById("longitude").value = selectedLocation.longitude;

                markers.forEach((marker) => {
                    marker.setMap(null);
                });
                markers = [];

                const newMarker = new google.maps.Marker({
                    map,
                    position: event.latLng,
                });

                markers.push(newMarker);
            });

            document.getElementById('getUserLocationButton').addEventListener('click', getUserLocation);

            function getUserLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(
                        (position) => {
                            const userLocation = {
                                lat: position.coords.latitude,
                                lng: position.coords.longitude,
                            };

                            map.setCenter(userLocation);
                            map.setZoom(12);

                            const userMarker = new google.maps.Marker({
                                position: userLocation,
                                map,
                                title: "Lokasi Pengguna",
                                icon: {
                                    url: 'https://maps.google.com/mapfiles/ms/icons/red-dot.png',
                                },
                            });

                            userMarker.setMap(map);

                            const userInfowindow = new google.maps.InfoWindow({
                                content: 'Lokasi Pengguna',
                            });

                            userMarker.addListener("click", () => {
                                userInfowindow.open(map, userMarker);
                            });
                        },
                        (error) => {
                            console.error("Error Mendapatkan Lokasi Anda");
                        }
                    );
                } else {
                    console.error("Geolocation is not supported by this browser.");
                }
            }
        }
        
        window.initAutocomplete = initAutocomplete;
    </script>
@endpush



