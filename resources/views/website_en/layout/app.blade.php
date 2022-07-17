<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OPPO Store</title>

        {{-- start style  --}}
        @include('website_en.layout.style')

    </head>
            <body>
                <!-- start header navbar  -->
                @include('website_en.layout.navbar')
                <!-- end header navbar -->



                {{--start body  --}}
                @yield('content')
                {{-- end body  --}}


                <!-- start footer  -->
                     @include('website_en.layout.footer')
                 <!-- end footer  -->
                {{-- start script  --}}
                <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
                <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
                <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
                <script src="{{asset('assets/js/jquery.slim.min.js')}}"></script>
                <script src="{{asset('assets/js/main.js')}}"></script>
            </body>
</html>
