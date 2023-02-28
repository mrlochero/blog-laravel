@extends('layouts.client')

{{-- @section('title')
    {{$title}}
@endsection --}}

@section('header')
    @include('blocks.header')
@endsection

@section('search')
    @include('blocks.search')
@endsection

@section('content')
    @include('pages_content.posts')
@endsection

@section('right-side')
    @include('blocks.category')
@endsection

@section('footer')
    @include('blocks.footer')
@endsection