<style>
    table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 2px solid #ddd;
    }

    th, td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even){background-color: #f2f2f2}
</style>

@extends('layouts.app')

@section('title', 'Dashboard')

@section('sidebar')
    @parent

    {{--    <p>This is appended to the master sidebar.</p>--}}
@endsection

@section('content')
    {{--    <p>This is my body content.</p>--}}

    {{--    --}}{{--    @foreach ($users as $user)--}}
    {{--    --}}{{--        <p>This is user {{ <a href="$users"> </a>  }}</p>--}}
    {{--    <a href="{{ url('welcome.blade.php') }}">Some Text</a>--}}
    {{--    --}}{{--    @endforeach--}}

    <a href="{{url('activelist')}}"><h1 align="center">Active Users</h1> </a>

{{--    <a href="{{ url()->previous() }}"> <b>Back </b></a>--}}
{{--    <a href="{{ url()->previous() }}" class="btn btn-primary btn-sm "  aria-pressed="true">Back</a>--}}
{{--    <a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Link</a>--}}

    <hr/>
    <form action="{{ url('/submit/active') }}" method="post">
        {{ csrf_field() }}

       <b>To: </b>  <input type="date" name="date1" value="2019-09-01" >
        &nbsp;&nbsp;&nbsp;&nbsp;
       <b>From: </b>  <input type="date" name="date2" value="2019-09-30">

{{--        <br><br>--}}
{{--        <button type="button" class="btn btn-primary">Primary</button>--}}
       &nbsp;&nbsp;    <input type="submit" class="btn btn-primary" >
    </form>



    <table>
        <thead>
        <tr>
{{--            <th> id</th>--}}
            <th> Name</th>
            <th> Email </th>
            <th> Phone</th>
            <th> Address </th>
        </tr>
        </thead>
        <tbody>


        @foreach($users as $user)
            <tr>
                <td> {{$user->username}} </td>
{{--                &nbsp;--}}
                <td> {{$user->email}} </td>
{{--                &nbsp;--}}
                <td> {{$user->telephone}} </td>
{{--                &nbsp;--}}
                <td> {{$user->address}} </td>
{{--                <td> {{$user->vodlastchange}} </td>--}}
{{--                <td> {{$user->livetvlastchange}} </td>--}}
                {{--                <td> {{$user->last_name}} </td>--}}
                {{--                <td> {{$user->email}} </td>--}}
                {{--                <td> {{$user->phone}} </td>--}}
                {{--                <td> {{$user->address}} </td>--}}
            </tr>
        @endforeach
        </tbody>
    </table>


    <body>


@endsection
