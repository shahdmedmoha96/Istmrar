@extends('layouts.app')

@section('content')


<div class="hero-container container">
    {{-- <div class="hero-bg-circle"></div> --}}

    <div class="hero-content d-flex justify-content-between w-100">
        <div class="d-flex align-items-end" >
            <a href="#" class="hero-btn">
                <span>اطلب عرض تدريبي</span>
                <svg width="34" height="34" viewBox="0 0 34 34" fill="#434B60" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.3433 11.3431L22.657 22.6568M11.3433 11.3431L11.3433 19.8284M11.3433 11.3431H19.8286" stroke="#434B60" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

            </a>
        </div>

        <img src="{{ asset('images/illustration.png') }}" alt="رسم توضيحي" class="hero-img">

    </div>
</div>
@endsection
