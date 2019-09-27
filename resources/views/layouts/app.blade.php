<html>


    <head>
        @include('includes.head')
    </head>
{{--    <ul>--}}

{{--        <a href="{{ url('/active') }}" >   <img src="images/yeslogo3.jpg" class="css-class" alt="Image Not Found" width="100px" height="100px" align="left"></a>--}}

{{--        <br/>--}}

{{--        <h1><a href="{{ url('/active') }}" >   YesNet.tv </a> </h1>--}}

{{--    </ul>--}}
{{--    --}}{{--                        <a href="{{ url()->previous() }}"> Back</a> --}}
{{--    --}}{{--                    <a href="{{ url('a') }}"> Return To Main</a>--}}

{{--    <hr/>--}}



<body>
@section('sidebar')







@endsection







@show
{{--<header class="row">--}}
{{--    @include('includes.header')--}}
{{--</header>--}}

{{--<div class="container">--}}
{{--@include('menu')--}}
{{--    @yield('sidebar')--}}
{{--@yield('content')--}}


{{--</div>--}}
        <div class="container" style="max-width: 95%">

            <header class="row">
                @include('includes.header')
            </header>

            <div id="main" class="row">
                <div class="row">

                </div>
                <!-- sidebar content -->
                <div id="sidebar" class="col-md-2">
                    <br/>
                    @include('includes.sidebar')
                </div>

                <!-- main content -->
                <div id="content" class="col-md-8">
                    @yield('content')
                </div>
            </div>
        </div>

    <footer >
        @include('includes.footer')
    </footer>

</div>

{{--<div class="container">--}}

{{--    <header class="row">--}}
{{--        @include('includes.header')--}}
{{--    </header>--}}

{{--    <div id="main" >--}}

{{--        @yield('content')--}}

{{--    </div>--}}

{{--    <footer class="row">--}}
{{--        @include('includes.footer')--}}
{{--    </footer>--}}

{{--</div>--}}



</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>
