<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    /* The grid: Three equal columns that floats next to each other */
    .col-sm-6 {
        float: left;
        width: 33.33%;
        padding: 50px;
        text-align: center;
        font-size: 25px;
        cursor: pointer;
        color: white;
    }

    .containerTab {
        padding: 20px;
        color: white;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Closable button inside the container tab */

    .closebtn {
        float: right;
        color: white;
        font-size: 35px;
        cursor: pointer;
    }

     table {
         border-collapse: collapse;
         border-spacing: 0;
         width: 100%;
         border: 1px solid #ddd;
     }

    th, td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even){background-color: #f2f2f2}

</style>



@extends('layouts.app')
@extends('layouts.sidebar')
{{--@extends('layouts.sidebar')--}}

@section('title', 'Dashboard')
<title> @yield('title')</title>
@section('sidebar')
    @parent

{{--    <p>This is appended to the master sidebar.</p>--}}
@endsection

@section('content')
{{--    <p>This is my body content.</p>--}}

{{--    @foreach ($errors as $user)--}}
{{--        <p>This is user {{ <a href="$errors"> </a>  }}</p>--}}

{{--<div class="container">--}}
{{--    <!-- Content here -->--}}
{{--    <h1> Dashboard</h1>--}}
{{--    <a href="{{ url('/activelist') }}">No. Of Active Users: {{$activeUsers}} </a>--}}

{{--    <br/> <br/>--}}
{{--    <a href="{{ url('/blocklist') }}">No. Of blocked Users: {{$blockUsers}} </a>--}}
{{--</div>--}}

{{--//////////////////////////////////////////////////////////////////////////////////////////////--}}
{{--//test--}}


<body>
<hr/>
<div style="text-align:center">
    <a href="{{ url('/active') }}"><h2>Reports</h2></a>
{{--    <p>Click on the boxes below:</p>--}}
</div>

<!-- Three columns -->
    <div class="content" style="margin-left: 20px">
        <div class="row">

            <div class="col-sm-6" onclick="openTab('b1');" style="background:lightgreen;">
                <a href="{{ url('/activelist') }}">
                <i class="fa fa-user fa-2x" ></i><br/>
        {{--        <i class="fa fa-user-check "></i><br/>--}}


                    No. Of Active Users: {{$activeUsers}} </a>
            </div>
            <div class="col-sm-6" onclick="openTab('b2');" style="background:lightblue;">
                <a href="{{ url('/blocklist') }}">
                <i class="fa fa-ban fa-2x" ></i><br/>
               No. Of blocked Users: {{$blockUsers}} </a>
            </div>

        {{--    <div class="column" onclick="openTab('b3');" style="background:red;">--}}
        {{--        Box 3--}}
        {{--    </div>--}}
        </div>
    </div>

<!-- Full-width columns: (hidden by default) -->
{{--<div id="b1" class="containerTab" style="display:none;background:green">--}}
{{--    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>--}}
{{--    <h2>Box 1</h2>--}}

{{--    {{$errors}}--}}
{{--    <table>--}}
{{--        <thead>--}}
{{--        <tr>--}}
{{--                        <th> id</th>--}}
{{--            <th> Name</th>--}}
{{--            <th> Email </th>--}}
{{--            <th> Phone</th>--}}
{{--            <th> Address </th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}

{{--            <tr>--}}
{{--                <td> heloo1</td>--}}
{{--                <td> heloo2</td>--}}
{{--                <td> heloo3</td>--}}
{{--                <td> heloo4</td>--}}
{{--            </tr>--}}
{{--        @foreach($errors as $user)--}}
{{--            <tr>--}}
{{--                <td> {{$user->username}} </td>--}}
{{--                                &nbsp;--}}
{{--                <td> {{$user->email}} </td>--}}
{{--                                &nbsp;--}}
{{--                <td> {{$user->telephone}} </td>--}}
{{--                                &nbsp;--}}
{{--                <td> {{$user->address}} </td>--}}
{{--                                <td> {{$user->vodlastchange}} </td>--}}
{{--                                <td> {{$user->livetvlastchange}} </td>--}}
{{--                                <td> {{$user->last_name}} </td>--}}
{{--                                <td> {{$user->email}} </td>--}}
{{--                                <td> {{$user->phone}} </td>--}}
{{--                                <td> {{$user->address}} </td>--}}
{{--            </tr>--}}
{{--            @endforeach--}}
{{--        </tbody>--}}
{{--    </table>--}}

{{--    <p>Lorem ipsum dolor sit amet, te quo doctus abhorreant, et pri deleniti intellegat, te sanctus inermis ullamcorper nam. Ius error diceret deseruisse ad</p>--}}
{{--</div>--}}

{{--<div id="b2" class="containerTab" style="display:none;background:blue">--}}
{{--    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>--}}
{{--    <h2>Box 2</h2>--}}
{{--    <p>Lorem ipsum dolor sit amet, te quo doctus abhorreant, et pri deleniti intellegat, te sanctus inermis ullamcorper nam. Ius error diceret deseruisse ad</p>--}}
{{--</div>--}}

{{--<div id="b3" class="containerTab" style="display:none;background:red">--}}
{{--    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>--}}
{{--    <h2>Box 3</h2>--}}
{{--    <p>Lorem ipsum dolor sit amet, te quo doctus abhorreant, et pri deleniti intellegat, te sanctus inermis ullamcorper nam. Ius error diceret deseruisse ad</p>--}}
{{--</div>--}}

<script>
    function openTab(tabName) {
        var i, x;
        x = document.getElementsByClassName("containerTab");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        document.getElementById(tabName).style.display = "block";
    }
</script>

{{--    @endforeach--}}

@endsection
