@extends('layouts.user_master')

@section('title', 'Home - University Library System')

@section('content')

    <!-- ***** Main Banner Area Start ***** -->
    @include('includes.user.home_sections.main_banner')
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** services Area Start ***** -->
    @include('includes.user.home_sections.services')
    <!-- ***** services Area End ***** -->


    <!-- ***** upcoming-meetings Area Start ***** -->
    @include('includes.user.home_sections.upcomming')
    <!-- ***** upcoming-meetings Area End ***** -->


    <!-- ***** facts Area Start ***** -->
    @include('includes.user.home_sections.facts')
    <!-- ***** facts Area End ***** -->


    <!-- ***** books slider Area Start ***** -->
    @include('includes.user.home_sections.books')
    <!-- ***** books slider Area End ***** -->


    <!-- ***** apply slider Area Start ***** -->
    @include('includes.user.home_sections.apply')
    <!-- ***** apply slider Area End ***** -->

@endsection

@section('scripts')

@endsection
