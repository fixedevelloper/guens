@extends('base')
@section('content')
@include('_partials._banner',['title'=>__('site.about_us')])
    @include('includes._about')
@include('includes._trial')
@endsection
