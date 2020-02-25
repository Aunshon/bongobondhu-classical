
@extends('layouts.frontEndApp')

@section('contents')

<!-- =======================
    banner part start
    ===========================-->
    <section class="banner_part">
        <div class="banner_content">
            <div class="row justify-content-center">
                <div class="col-lg-6 w-center">
                    <div class="banner_text">
                        <div class="home-page-slide">
                            <img class="w-100 banner_img" src="{{ asset('frontEnd/uploads/banner') }}/bongobondhu.jpg" alt="bondobondu_main">
                            <img class="w-100 banner_img" src="{{ asset('frontEnd/uploads/banner') }}/bongobondhu2.jpg" alt="bondobondu_main">
                            <img class="w-100 banner_img" src="{{ asset('frontEnd/uploads/banner') }}/bongobondhu3.jpg" alt="bondobondu_main">
                            <img class="w-100 banner_img" src="{{ asset('frontEnd/uploads/banner') }}/bongobondhu4.jpg" alt="bondobondu_main">
                            <img class="w-100 banner_img" src="{{ asset('frontEnd/uploads/banner') }}/bongobondhu5.jpg" alt="bondobondu_main">
                            <img class="w-100 banner_img" src="{{ asset('frontEnd/uploads/banner') }}/bongobondhu6.jpg" alt="bondobondu_main">
                        </div>

                        <a class="banner_left_link" href="history-page.html">ইতিহাস</a>
                        <span class="left_line home_line"></span>
                        <span class="right_line home_line"></span>
                        <a class="banner_right_link" href="know-page.html">জানুন</a>

                        <div class="banner_main_text">
                            <h2>অনন্য এক জননেতা</h2>
                            <p>শেখ মুজিব বা মুজিব, ছিলেন বাংলাদেশের প্রথম রাষ্ট্রপতি ও ভারতীয় উপমহাদেশের একজন অন্যতম প্রভাবশালী রাজনৈতিক ব্যক্তিত্ব, যিনি বাঙালির অধিকার রক্ষায় ব্রিটিশ ভারত থেকে ভারত বিভাজন আন্দোলন এবং পরবর্তীতে পূর্ব পাকিস্তান থেকে বাংলাদেশ প্রতিষ্ঠার সংগ্রামে কেন্দ্রীয়ভাবে নেতৃত্ব প্রদান করেন। প্রাচীন বাঙালি সভ্যতার আধুনিক স্থপতি হিসাবে শেখ মুজিবুর রহমানকে বাংলাদেশের "জাতির জনক" বা "জাতির পিতা" বলা হয়ে থাকে।</p>

                            <a class="read_more_btn" href="{{route('readMore')}}">আরো পড়ুন</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =======================
        banner part end
        ===========================-->

@endsection
