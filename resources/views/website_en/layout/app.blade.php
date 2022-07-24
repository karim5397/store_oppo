<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
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
                <script src="{{asset('frontend/assets/js/jquery-3.6.0.min.js')}}"></script>
                <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
                <script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
                <script src="{{asset('frontend/assets/js/main.js')}}"></script>

                <script type="text/javascript">
                    // ajax submit
                    $(document).ready(function (e) {
                        $.ajaxSetup({
                        headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                        });
                        $('#laravel-ajax-file-upload').submit(function(e) {
                        e.preventDefault();
                        var formData = new FormData(this);
                        $.ajax({
                        type:'POST',
                        url: "{{ route('store.touch')}}",
                        data: formData,
                       dataType: 'json',
                        cache:false,
                        timeout: 2000,
                        contentType: false,
                        processData: false,
                        success: (data) => {
                        this.reset();
                        alert('The Data was sent. Thank you');
                        console.log(data);
                        },
                        error: function(data){
                        console.log(data);
                        }
                        });
                        });
                        });
                    </script>
            </body>
</html>
