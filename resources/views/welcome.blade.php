@extends('layouts.app')

@section('content')


<div class="hero-container container">
    {{-- <div class="hero-bg-circle"></div> --}}

    <div class="hero-content d-flex flex-column flex-lg-row justify-content-between align-items-center w-100 gap-4 px-2 px-lg-5  py-lg-5">
        {{-- النصوص --}}
        <div class="text-content d-flex flex-column align-items-center align-items-lg-start text-center text-lg-start pe-lg-4 flex-grow-1 mx-auto mx-lg-0">
            <div class="h1-wrapper w-100 text-center text-lg-end mx-auto mx-lg-0">
                <h1 class="fw-bold fade-up delay-1 mb-3" style="line-height: 1.8;">
                    معًا نبني <span style="color: var(--light-1);">مستقبل أعمال</span><br>
                    <span class="fade-up delay-2 d-block">أكثر قوة واستدامة</span>
                </h1>
            </div>



            <p class="fade-up delay-3 mt-2 mb-4 text-center text-lg-end mx-auto mx-lg-0"
            style="max-width: 500px; color:#D9D9D9;">
             نحن نقدم حلول استشارية متكاملة لتحسين الأداء الإداري والمالي، ومساعدتك في الحصول على الشهادات المعتمدة.
         </p>


            <a href="#" class="hero-btn btn btn-primary d-flex align-items-center gap-2 px-3 py-2 rounded-pill shadow mx-auto mx-lg-0">
                <span>اطلب عرض تدريبي</span>
                <svg width="34" height="34" viewBox="0 0 34 34" fill="#434B60" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.3433 11.3431L22.657 22.6568M11.3433 11.3431L11.3433 19.8284M11.3433 11.3431H19.8286"
                          stroke="#434B60" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>

        {{-- الفيديو --}}
        <div class="video-wrapper flex-grow-1 text-center">
            <video autoplay loop muted playsinline class="hero-img w-100" style="max-width: 500px; border-radius: 10px;">
                <source src="{{ asset('images/Business support (1).gif.mp4') }}" type="video/mp4">
                المتصفح لا يدعم عرض الفيديو
            </video>
        </div>
    </div>

</div>
{{-- about section --}}
@include('about')

{{-- service section --}}
@include('services/index')
{{-- footer --}}
@include('footer')
@endsection
