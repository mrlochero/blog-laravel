@extends('layouts.client')

@section('title')
    {{$title}}
@endsection

@section('header')
    @include('clients.blocks.header')
@endsection

@section('search')
    @include('clients.blocks.search')
@endsection

@section('content')
    @include('clients.content.category')
@endsection

@section('right-side')
    @include('clients.blocks.category')
@endsection

@section('footer')
    @include('clients.blocks.footer')
@endsection