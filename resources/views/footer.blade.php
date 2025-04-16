<!--------footer------->
<footer id="contact">
    <div class="footer " style="background: url('{{ asset('images/frame.png') }}') no-repeat center/cover;">
        <div class="row">
            <div class="col-sm-12 col-md-4 service ">
                <div class="">
                    <div class="logo">
                        <img src="{{asset('images/logo.png')}}" alt="شعار شركة استمرار">
                        <h5 class="" style="    font-size: 1.80rem;">شركة استمرار الإدارية</h5>
                    </div>
                    <div class="link-serv">
                        <div class="logo">
                            <img src=" {{asset('images/Vector0.png')}}" class="icon-img" alt="" width="16px">
                            <p class="ul">رقم السجل التجاري: ٧٠٤٠٢٦٧٧٥٤</p>
                        </div>
                        <div class="logo">
                            <img src=" {{asset('images/Vector3.png')}}" class="icon-img" alt="" width="16px">
                            <p class="ul">رقم الضريبي: ٣١٢٣٤٢٧٩٩٦٠٠٠٠٠٣</p>
                        </div>
                        <div class="logo">
                            <img src=" {{asset('images/shape.png')}}" class="icon-img" alt="">
                            <p class="ul">info@istmar.com</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class=" col-md-4 ">
                <div class="logo">
                    <img src=" {{asset('images/Vector.png')}}" class="icon-img" alt="" width="16px">
                    <h5 class="">أحمد مهدي - المسؤول الإداري</h5>
                </div>
                <div class="link-serv">
                    <div class="logo">
                        <img src=" {{asset('images/Vector2.png')}}" class="icon-img" alt="">
                        <p class="ul">٥٩٦٨٢٧٤</p>
                    </div>
                    <div class="logo">
                        <img src=" {{asset('images/shape.png')}}" class="icon-img" alt="">
                        <p class="ul">mahdy@istmar.com</p>
                    </div>
                </div>
            </div> --}}
            <div class="col-sm-12  col-md-4 service">
                <div class="">
                    <div class="logo">
                        <img src=" {{asset('images/Icons2.png')}}" class="icon-img" alt="">
                        <h5 class="" style="    font-size: 1.80rem;">العلاقات العامة والمبيعات </h5>
                    </div>
                    <div class="link-serv">
                        <div class="logo">
                            <img src=" {{asset('images/Vector2.png')}}" class="icon-img" alt="">
                            <p class="ul">١٩٦٨٣٠</p>
                        </div>
                        <div class="logo">
                            <img src=" {{asset('images/shape.png')}}" class="icon-img" alt="">
                            <p class="ul">sales@istmar.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4  service">
                <div class="">
                    <div class="logo">
                        <img src=" {{asset('images/Icons.png')}}" class="icon-img" alt="">
                        <h5 class="" style="    font-size: 1.80rem;"> الدعم الفني</h5>
                    </div>
                    <div class="link-serv">
                        <div class="logo">
                            <img src=" {{asset('images/WhatsApp.png')}}" class="icon-img" alt="">
                            <p class="ul">٥٩٦٨٢٧٤</p>
                        </div>
                        <div class="logo">
                            <img src=" {{asset('images/shape.png')}}" class="icon-img" alt="">
                            <p class="ul">support@istmar.com</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <hr>
        <div class="privacy">
            <p>خصوصية مقدم الخدمة</p>
            <div class="hr"></div>
            <p>
                <a href="{{route('privacy')}}" class="text-light">سياسات الخصوصية</a>
            </p>
            <div class="hr"></div>
            <p>خصوصية مقدم الخدمة</p>


        </div>
        <p class="right">© 2025 جميع الحقوق محفوظة لشركة استمرار</p>
    </div>
</footer>
<style>


    @media (max-width: 767px) {
        .service {
            display: flex;
            align-items: center;
            justify-content: center
        }
        .link-serv {
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    }
</style>
