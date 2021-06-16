@extends('layouts.app')

@section('content')

    <div class="wrapper">
        @include('content.cms.includes.navbar')
        {{-- @include('content.cms.includes.main-side-bar') --}}
        <div class="content-wrapper">
            @yield('home-contents')
        </div>
        @include('content.cms.includes.footer')
    </div>

@endsection
