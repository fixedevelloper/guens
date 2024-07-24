@extends('base')
@section('content')
@include('_partials._banner',['title'=>__('site.register_online')])
<div class="container mt-3">
<div class="col-lg-7 order-1 order-lg-2">
    <div class="contact__item">
     {{--   <div class="section-header mb-40">
            <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">{!! __('site.contact_us') !!}
            </h5>
            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">{!! __('site.get_in') !!}
                <span>{!! __('site.touch') !!} <img src="{!! asset('assets/images/shape/header-shape.png') !!}" alt="shape"></span>
            </h2>
        </div>--}}
        <form action="#">
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
                    <label for="email">{!! __('site.phone') !!}Genre*</label>
                    <input id="email" type="text" placeholder="{!! __('site.phone') !!}">
                </div>
                <div class="col-6">
                    <label for="email">{!! __('site.date_born') !!}*</label>
                    <input id="email" type="date" placeholder="{!! __('site.date_born') !!}">
                </div>
            </div>
            <label for="review">{!! __('site.your_message') !!}*</label>
            <textarea name="review" id="review"></textarea>
            <a href="#0" class="btn-one">{!! __('site.send_now') !!}<i class="fa-light fa-arrow-right-long"></i></a>
        </form>
    </div>
</div>
</div>
@endsection
