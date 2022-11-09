@extends('layout.app')
@section('title','Home')
@section('content')

@include('Component.HomeBanner')
@include('Component.HomeService')
@include('Component.HomeCourse')
@include('Component.HomeProjects')
@include('Component.HomeReview')
@include('Component.HomeContact')

@endsection
