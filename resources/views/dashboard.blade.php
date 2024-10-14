@extends('layouts.master')
@section('header')
    Dashboard
@endsection
@section('content')
    <!-- row -->
    @if (Auth::user()->usertype == 'user')
        @include('pages.user')
    @elseif (Auth::user()->usertype == 'deliver')
        @include('pages.deliver')
    @elseif (Auth::user()->usertype == 'provider')
        @include('pages.provider')
    @elseif (Auth::user()->usertype == 'admin')
        @include('pages.admin')
    @endif
@endsection
