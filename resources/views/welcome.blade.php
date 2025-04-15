@extends('layouts.app')

@section('content')


<div class="hero-container container">
    {{-- <div class="hero-bg-circle"></div> --}}

    <div class="hero-content d-flex justify-content-between w-100">
        <div class="d-flex" >
            <div class="hero-content d-flex justify-content-between w-100 ">
                <div class="d-flex flex-column align-items-start  pe-4">
                    <h1 class="fw-bold fade-up delay-1" style="line-height: 1.8;">
                        معًا نبني <span style="color: var(--light-1);">مستقبل أعمال</span><br>
                        <span class="fade-up delay-2 d-block">أكثر قوة واستدامة</span>
                    </h1>

                    <p class="fade-up delay-3 mt-2" style="max-width: 500px;color:#D9D9D9; margin-bottom: 60px;">
                        نحن نقدم حلول استشارية متكاملة لتحسين الأداء الإداري والمالي، ومساعدتك في الحصول على الشهادات المعتمدة.
                    </p>


                    <a href="#" class="hero-btn btn btn-primary d-flex align-items-center gap-2 px-2 py-2 rounded-pill shadow">
                        <span>اطلب عرض تدريبي</span>
                        <svg width="34" height="34" viewBox="0 0 34 34" fill="#434B60" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.3433 11.3431L22.657 22.6568M11.3433 11.3431L11.3433 19.8284M11.3433 11.3431H19.8286"
                                  stroke="#434B60" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>

            </div>

        </div>

        {{-- <img src="{{ asset('images/illustration.png') }}" alt="رسم توضيحي" class="hero-img"> --}}
        <video autoplay loop muted playsinline class="hero-img">
            <source src="{{ asset('images/Business support (1).gif.mp4') }}" type="video/mp4">
            المتصفح لا يدعم عرض الفيديو
        </video>


    </div>
</div>
{{-- about section --}}
@include('about')

{{-- service section --}}
@include('services/index')
{{-- footer --}}
@include('footer')
@endsection
