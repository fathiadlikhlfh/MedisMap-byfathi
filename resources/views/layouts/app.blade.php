<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.meta')

    <!-- title -->
    <title>Medical | Home</title>

    @stack('before-style')

    @include('includes.style')

    @stack('after-style')

</head>

<body>

    {{-- @include('sweetalert::alert') --}}

    {{-- @if (\Route::current()->getName() != 'login' && \Route::current()->getName() != 'register-step-1' && \Route::current()->getName() != 'register-step-2' && \Route::current()->getName() != 'register-step-3' && \Route::current()->getName() != 'forgot-password-1' && \Route::current()->getName() != 'forgot-password-2' && \Route::current()->getName() != 'forgot-password-3') --}}
        @include('includes.navbar')
    {{-- @endif --}}

    @yield('content')

    {{-- @if (\Route::current()->getName() != 'login' && \Route::current()->getName() != 'register-step-1' && \Route::current()->getName() != 'register-step-2' && \Route::current()->getName() != 'register-step-3' && \Route::current()->getName() != 'forgot-password-1' && \Route::current()->getName() != 'forgot-password-2' && \Route::current()->getName() != 'forgot-password-3') --}}
        @include('includes.footer')
    {{-- @endif --}}


    @stack('before-script')

    @include('includes.script')

    @stack('after-script')

</body>

</html>
