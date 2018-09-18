@extends('layouts.app')
@section('head')
    @parent
    @yield('styles')
    <link rel="stylesheet" href="{{ mix('css/documents.css') }}">
@endsection

@section('layout')
    <div class="container" id="documents">
        @yield('content')
    </div>
@endsection

@section('footer-js')
    @parent
    @yield('scripts')
    <script src="{{ mix('js/documents.js') }}"></script>
@endsection
