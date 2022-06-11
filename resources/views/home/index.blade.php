@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h1 style="font-weight: lighter;">Welcome "{{{Auth::user()->username}}}"</h1>
        <p class="lead">Only authenticated users can access this section.</p>

        <p class="lead">{{{Auth::user()->username}}}</p>

        <!-- {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}} -->


        @endauth


        @guest
        <h1>Homepage</h1>
        <p class="lead">You are viewing the homepage. Please login to view the restricted data.</p>
        @endguest
    </div>
@endsection