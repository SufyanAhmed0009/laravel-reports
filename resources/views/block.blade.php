<style>
    table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 2px solid #ddd;
    }

    th, td {
        text-align: left;
        padding: 10px;
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

    <a href="{{url('activelist')}}"> <h1 align="center">Blocked Users</h1> </a>

{{--    <a href="{{ url()->previous() }}"> Back</a>--}}
{{--    <a href="{{ url()->previous() }}" class="btn btn-primary btn-sm "  aria-pressed="true">Back</a>--}}

    <hr/>

{{--    Birthday (date and time): <input type="datetime-local" name="bdaytime">--}}
{{--    <form action="{{{ url('blocklist/$swagger->id') }}}" method="post">--}}
{{--        <form action="{{ url::to('/submit') }}" method="post">--}}

            <form action="{{ url('/submit/block') }}" method="post">
{{--                @csrf--}}
                {{ csrf_field() }}
              <b> To: </b>  <input type="date" name="date1" value="2019-09-01">
                &nbsp;&nbsp;&nbsp;&nbsp;
                <b> from: </b>  <input type="date" name="date2" value="2019-09-30">

{{--        First name:<br>--}}
{{--        <input type="text" name="firstname" value="Mickey">--}}
{{--        <br>--}}
{{--        Last name:<br>--}}
{{--        <input type="text" name="lastname" value="Mouse">--}}
                <input type="submit" class="btn btn-primary" >
{{--        <input type="submit"  >--}}
    </form>



{{--    <a href="{{ redirect('login_data') }}">Submit </a>--}}

{{--    <a href="{{ redirect('login_data') }}">Back </a>--}}
{{--    <a "{{ url('login_data') }}"> <button type="button" >Back</button> </a>--}}
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


@endsection
