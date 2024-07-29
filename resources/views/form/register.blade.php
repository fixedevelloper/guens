@extends('base')
@section('content')
@include('_partials._banner',['title'=>__('site.register_online')])
<div class="container mt-3  pt-120 pb-120">

    <div class="contact__item">
       <div class="section-header mb-40 text-center">
            <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">{!! __('site.register_online') !!}
            </h5>
            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <span>{!! __('site.register_online') !!} <img src="{!! asset('assets/images/shape/header-shape.png') !!}" alt="shape"></span>
            </h2>
        </div>
        <form method="POST" class="form-register">
            <div class="row g-4">
                <div class="col-6">
                    <label for="name">{!! __('site.your_name') !!}*</label>
                    <input id="name" type="text" placeholder="{!! __('site.your_name') !!}">
                </div>
                <div class="col-6">
                    <label for="email">{!! __('site.your_email') !!}*</label>
                    <input id="email" type="email" placeholder="{!! __('site.your_email') !!}">
                </div>
                <div class="col-6">
                    <label for="email">{!! __('site.phone') !!}*</label>
                    <input id="email" type="text" placeholder="{!! __('site.phone') !!}">
                </div>
                <div class="col-6">
                    <label for="email">{!! __('site.date_born') !!}*</label>
                    <input id="email" type="date" placeholder="{!! __('site.date_born') !!}">
                </div>
            </div>
            <div class="col-12 mb-3">
                <label for="email">{!! __('site.service.service') !!}*</label>
                <select class="form-select">
                    <option value="{!! __('site.service.reservation_billet_avion') !!}">
                        {!! __('site.service.reservation_billet_avion') !!}</option>
                    <option value="{!! __('site.service.assurance') !!}">
                        {!! __('site.service.assurance') !!}</option>
                    <option value="{!! __('site.service.aide_au_logement') !!}">
                        {!! __('site.service.aide_au_logement') !!}</option>
                    <option value="{!! __('site.service.coaching') !!}">
                        {!! __('site.service.coaching') !!}</option>
                    <option value="{!! __('site.service.orientation_cademique') !!}">
                        {!! __('site.service.orientation_cademique') !!}</option>
                    <option value="{!! __('site.service.procedure_consulaire') !!}">
                        {!! __('site.service.procedure_consulaire') !!}</option>
                </select>
            </div>
            <div class="col-12 mt-3">

            <label for="review">{!! __('site.your_message') !!}*</label>
            <textarea name="review" id="review"></textarea>
            </div>
            <a href="#0" class="btn-one">{!! __('site.send_now') !!}<i class="fa-light fa-arrow-right-long"></i></a>
        </form>
    </div>
</div>

@endsection
