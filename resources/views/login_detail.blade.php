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
    <p>Login details</p>

@endsection
