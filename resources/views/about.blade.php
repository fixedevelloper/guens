@extends('base')
@section('description'){!! __('site.about.but_description') !!}@endsection
@section('content')
@include('_partials._banner',['title'=>__('site.about_us')])
    @include('includes._about')
@include('includes._trial')
@endsection
