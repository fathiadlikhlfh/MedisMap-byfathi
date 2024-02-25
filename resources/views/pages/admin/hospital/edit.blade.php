@extends('layouts.admin')

@section('title', 'Category')

@section('content')
    <!-- page-content start -->
    <div class="bg-slate-100 h-full mt-[77px]  py-3 px-3" style="min-height: 900px;">
        <section class="relative overflow-hidden">
            <div class="container">
                <div class="flex">
                    <div class="w-full">
                        <h3 class="text-xl text-ijo mt-2">Health Facility</h3>
                        <p class="mt-1 font-medium text-ijo mb-4">Health Facility Page</p>
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
                                            <a href="{{ route('dashboard.hospital.index') }}"
                                                class="text-ijo p-3 font-semibold hover:text-white bg-white hover:bg-teal-400 rounded-lg">Back</a>
                                        </nav>
                                    </div>
                                    <!-- menu end -->
                                    <div class="lg:col-span-3 transition-all px-4 h-full">
                                        <div id="edit-hospital" class=" min-h-[650px]">
                                            <h4 class="text-base text-ijo">Update Hospital Data</h4>

                                            <form action="{{ route('dashboard.hospital.update', [$hospital->id]) }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')

                                                <!-- basic info start -->
                                                <div class="grid grid-cols-2 items-center gap-6 mt-6">
                                                    <div class="">
                                                        <div class="mb-4">
                                                            <label for="name"
                                                                class="block text-sm font-semibold mb-1 text-ijo">Hospital
                                                                Name<small class="text-red-500">*</small></label>
                                                            <input type="text"
                                                                class="py-2 px-4 leading-6 block w-full text-gray-700 border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0"
                                                                id="name" placeholder="Name" name="name"
                                                                value="{{ $hospital->name ?? '' }}">
                                                        </div>

                                                        <div class="mb-4">

                                                            <img src="{{ Storage::url($hospital->thumbnail) }}"
                                                                alt="" width="50" height="50">

                                                            <label for="photo"
                                                                class="block text-sm font-semibold mb-1 text-ijo">Thumbnail<small class="text-red-500">*</small></label>
                                                            <input type="file"
                                                                class="py-2 px-4 leading-6 block w-full text-gray-700 border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0"
                                                                id="thumbnail" name="thumbnail">
                                                        </div>

                                                    </div>

                                                    <div class="">
                                                        <div class="mb-4">
                                                            <label for="category"
                                                                class="block text-sm font-semibold mb-1 text-ijo">Category</label>
                                                            <select
                                                                class="py-2 px-4 leading-6 block w-full text-gray-700 border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0"
                                                                style="border: 1px solid #F2F2F2;"
                                                                aria-label="Default select example" name="category_id"
                                                                id="categorySelect">
                                                                <option selected value="{{ $hospital->category_id ?? '' }}">
                                                                    {{ $hospital->category->name }} </option>
                                                                @foreach ($categories as $category)
                                                                    <option value="{{ $category->id }}">
                                                                        {{ $category->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="mb-4">
                                                            <label for="address"
                                                                class="block text-sm font-semibold mb-1 text-ijo">Address<small class="text-red-500">*</small></label>
                                                            <input type="text"
                                                                class="py-2 px-4 leading-6 block w-full text-gray-700 border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0"
                                                                id="address" placeholder="Address" name="address"
                                                                value="{{ $hospital->address ?? '' }}">
                                                        </div>
                                                    </div>

                                                    <div class="mb-4">
                                                        <label for="address"
                                                            class="block text-sm font-semibold mb-1 text-ijo">Latitude<small class="text-red-500">*</small></label>
                                                        <input hidden type="text" required
                                                            class="py-2 px-4 leading-6 block w-full text-gray-700 border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0"
                                                            id="latitude" name="latitude"
                                                            value="{{ $hospital->latitude ?? '' }}">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="address"
                                                            class="block text-sm font-semibold mb-1 text-ijo">Longitude<small class="text-red-500">*</small></label>
                                                        <input hidden type="text" required
                                                            class="py-2 px-4 leading-6 block w-full text-gray-700 border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0"
                                                            id="longitude" name="longitude"
                                                            value="{{ $hospital->longitude ?? '' }}">
                                                    </div>
                                                </div>
                                                <!-- basic info end -->

                                                {{-- <hr class="mb-3"> --}}

                                                {{-- <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="map" class="form-label">Choose Your
                                                            Location</label>
                                                        <div style="height: 300px">
                                                            <input id="pac-input" class="form-control py-2"
                                                                type="text" placeholder="Search Location" />
                                                            <div id="map" class="rounded"></div>
                                                        </div>
                                                    </div>

                                                </div> --}}

                                                <!-- privacy settings start -->
                                                <!-- privacy settings end -->

                                                <hr class="mb-3">

                                                <!-- account removal start -->
                                                <div class="flex">
                                                    <div class="w-full">
                                                        <label for="map" class="form-label text-ijo font-semibold">Description</label>
                                                        <textarea
                                                            class="py-2 px-4 leading-6 block w-full text-gray-700 border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0"
                                                            name="description">{{ $hospital->description ?? '' }}</textarea>
                                                    </div>
                                                </div>
                                                <!-- account removal end -->

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

@push('after-script')
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAabNyMuVT8g7rBRF5fcb7ZjAV8ZYuXDls&callback=initAutocomplete&libraries=places&v=weekly"
        defer></script>

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
                title: "Hospital Location",
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
        }

        window.initAutocomplete = initAutocomplete;
    </script>
@endpush
