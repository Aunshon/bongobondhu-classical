
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Bongobondhu</title>
    <link rel="stylesheet" href="{{ asset('frontEnd/css') }}/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontEnd/css') }}/animate.min.css">
    <link rel="stylesheet" href="{{ asset('frontEnd/css') }}/style.css"/>
    <link rel="stylesheet" href="{{ asset('frontEnd/css') }}/responsive.css">
  </head>
  <body>

    <!-- =======================
          menu bar start
    ===========================-->
    <nav class="menuBar afWarMenu detail_page">
        <div class="container">
           <div class="row justify-content-between">
               <div class="col-lg-4 col-md-6 col-sm-4 col-9">
                   <a href="{{url('/')}}" class="logo">
                       <img src="{{ asset('frontEnd/uploads/logo') }}/logo.png" alt="logo">

                   </a>
                   <h2 class="logo_title">বঙ্গবন্ধু</h2>
               </div>
               <div class="col-lg-2 col-md-6 col-sm-4 col-3 btn-center">
                    <button id="menu_btn"></button>
               </div>
           </div>
           <div class="menu_list">
               <ul>
                   <li><a href="#">আমাদের সম্পর্কে</a></li>
                   <li><a href="#"> আর্টিকেলকে</a></li>
                   <li><a href="#">ভিডিও</a></li>
                   <li><a href="#">ইতিহাসের পাতায় মুজিব</a></li>
                   <li><a href="#"> সচিত্র জীবনী</a></li>
                   <li><a href="#">উক্তি</a></li>
                   <li><a href="#">প্রকাশনা</a></li>
               </ul>

           </div>
        </div>
    </nav>

    <!-- =======================
          menu bar end
    ===========================-->
    <!--==========================
        Detail page  start
   =============================== -->
    <section class="detailPage">
    <div class="detail_banner" style="background:url({{asset('frontEnd/uploads/article')}}/{{$article->photo}}) no-repeat center;">
                 <div class="detail_banner_text">
                        <h1>
                            {{$article->title}}
                        </h1>
                        <h4>{{$article->writer}}</h4>
                 </div>
                {{-- <img class="w-100 shape" src="{{asset('frontEnd/uploads/article')}}/{{$article->photo}}" alt="shape"> --}}
                <img class="w-100 shape" src="{{asset('images/roundShape.png')}}" alt="shape">
        </div>

        <div class="text_detail">
            <div class="container">
                <div class="row">
                    {{-- <div class="col-lg-12 col-md-8">
                        <p>জাতির পিতার নেতৃত্বে যুদ্ধবিধ্বস্ত বাংলাদেশকে রাষ্ট্র হিসেবে গড়ে তোলার যাত্রা ছিল আশাজাগানিয়া। ১০ জানুয়ারি স্বদেশ প্রত্যাবর্তন করেই ১২ জানুয়ারি প্রধানমন্ত্রী হিসেবে শপথ গ্রহণ করেন। এরপর হাজার বছরের শ্রেষ্ঠ বাঙালি জাতির পিতা বঙ্গবন্ধু শেখ মুজিবুর রহমান তাঁর স্বপ্নের সোনার বাংলা গড়তে বহুমাত্রিক উদ্যোগ গ্রহণ করেন। ১৯৭২ সালে প্রাথমিকভাবে আমদানি করা সকল শস্যই ছিল বিদেশীদের সাহায্যে কেনা। জাতিসংঘের হিসাবে ১৯৭১ সালে মুক্তিযুদ্ধের সময় পাকিস্তানিদের সৃষ্ট ক্ষয়ক্ষতির পরিমান ১২০ কোটি ডলার বাস্তবতা হলো অদৃশ্য ক্ষতির হিসাব ছিল আরও বেশি। </p>

                        <p>প্রশাসন পুনর্গঠন, সর্বস্তরে শিক্ষাব্যবস্থার সম্প্রসারণ, নারী পুনর্বাসন, মুক্তিযোদ্ধা কল্যাণ ট্রাস্ট গঠন, বন্ধ কলকারখানা চালুকরণসহ নানা পদক্ষেপ গ্রহণ করে জাতির পিতার নেতৃত্বে নবগঠিত গণপ্রজাতন্ত্রী বাংলাদেশ সরকার। মাত্র নয় মাসে রচিত হয় স্বাধীন সার্বভৌম বাংলাদেশের সংবিধান।</p>
                    </div> --}}

                    <!-- <div class="col-lg-4 col-md-4 pt-5">
                            <img class="paraShape" src="images/paraShape.png" alt="paraShape">
                        <h4>

                            If Mujib vai did not reach Dhaka neither the hartal nor the picketing on 11th March would take place. Strike took place on 11th March, picketing was done in front of the secretariat and from there student leader Sheikh Mujibur Rahman was arrested along with his other comrades Oli Ahad, Shamsul Huq, Shawkat Ali, etc.
                        </h4>
                    </div> -->
                    {{-- <div class="col-lg-12 col-md-4">
                        <p>
                            যুদ্ধবিধ্বস্ত দেশে গৃহীত হয় জনগণের আদর্শকে ধারণকারী বাণিজ্য ও বিনিয়োগনীতি। ক্রমান্বয়ে বিকাশ লাভ করতে শুরু করে বাংলাদেশের অর্থনীতি। পাকিস্তান আমলে বাণিজ্যনীতি ছিল পশ্চিম পাকিস্তাননির্ভর, শোষণের। সদ্য স্বাধীন বাংলাদেশ সরকার গ্রহণ করে আমদানির বদলে কম বৈদেশিক বিনিয়োগে সরকারি-বেসরকারি শিল্প-কারখানার মাধ্যমে বাণিজ্য বিকাশের পথ। স্বাধীনতার পূর্বে লাইসেন্স নিয়ন্ত্রণ করতেন আমলারা; বেশির ভাগ শিল্প-কারখানার মালিকানা ছিল পশ্চিম পাকিস্তানিদের হাতে। ১৯৭২ সালের শিল্প-কারখানা জাতীয়করণ আদেশের (বাংলাদেশ ইন্ডাস্ট্রিয়াল এন্টারপ্রাইজেস ন্যাশনালাইজেশন অর্ডার, ১৯৭২ ও বাংলাদেশ ব্যাংক ন্যাশনালাইজেশন অর্ডার, ১৯৭২) মাধ্যমে বাংলার মানুষ প্রথমবারের মতো প্রত্যক্ষ করে পরিবর্তন। ঘোষিত হয় শিল্পনীতি। পুনরায় চালু করা হয় ঢাকা স্টক এক্সচেঞ্জ। প্রতিষ্ঠা করা হয় বাংলাদেশ বিনিয়োগ করপোরেশন। শূন্য বৈদেশিক মুদ্রার রিজার্ভ নিয়ে বঙ্গবন্ধু সরকারকে শুরু করতে হয়েছে বৈদেশিক বাণিজ্য। দেশের রফতানি বাণিজ্যের বিকাশ, শিল্প ও বাণিজ্য ব্যবস্থাপনায় সংরক্ষণবাদী ব্যবস্থাকে অবমুক্ত ও উদারীকরণে পদক্ষেপ গ্রহণ এবং বিদেশি বিনিয়োগ আকর্ষণ ও পরিপোষণের জন্য আইন (ফরেন ইনভেস্টমেন্ট প্রমোশন ও প্রটেকশন) প্রণয়ন ও সংস্থা (বাংলাদেশ এক্সপোর্ট প্রসেসিং জোন অথরিটি) প্রতিষ্ঠার প্রয়াসও প্রথমবারের মতো গ্রহণ করা হয় এ সময়েই। ১৯৭২ সালের শেষ দিকে আমদানিমূল্য বেড়ে যায় এবং অর্থনীতিতে নেতিবাচক প্রভাব ফেলে আমদানিমূল্যের বৃদ্ধির নেতিবাচক সময়ে আশা জাগানিয়া ছিল রপ্তানিমূল্য বৃদ্ধি। .

                        </p>
                    </div> --}}
                    {{-- <div class="col-lg-12 col-md-8">
                        <p>
                            বাংলাদেশের রাজনৈতিক স্বাধীনতা অর্জনের পর দারিদ্র্যপীড়িত বাংলাদেশের জনগণের দারিদ্র্য দূরীকরণ তথা অর্থনৈতিক মুক্তি অর্জনে জাতির পিতা প্রথম পঞ্চবার্ষিক পরিকল্পনা গ্রহণ করেন ১৯৭৩ সালে। প্রথমত, এই পরিকল্পনার মূল লক্ষ্য ছিল দারিদ্র্য দূরীকরণ। এ জন্য যারা কর্মহীন বা আংশিক কর্মহীনদের সবার কর্মসংস্থানের প্রয়োজনও উপলব্ধি করেন জাতির পিতা। তা ছাড়া জাতীয় আয় বৃদ্ধির সঙ্গে এই আয়ের সুষম বণ্টনের জন্য যথাযথ আর্থিক ও মুদ্রানীতি প্রণয়ন ত্বরান্বিত হওয়ার প্রয়োজনকে যথাযথ গুরুত্বের সঙ্গে বিবেচনা করা হয় এই পরিকল্পনায়। দ্বিতীয়ত, জনগণের অত্যাবশ্যক পণ্যের চাহিদা যাতে পূরণ হয়, সে জন্য প্রয়োজনীয় পণ্যসামগ্রীর (খাদ্যদ্রব্য, পোশাক, ভোজ্যতেল, কেরোসিন ও চিনি) উৎপাদন বাড়াতেও নেওয়া হয় উদ্যোগ। সর্বশেষ, কৃষির প্রাতিষ্ঠানিক ও প্রযুক্তিগত কাঠামোতে রূপান্তর সাধনের প্রয়োজনকে দেওয়া হয় যথাযথ গুরুত্ব, যাতে খাদ্যশস্যের উৎপাদনে স্বয়ংসম্পূর্ণতা অর্জিত হয়, কৃষিতে কর্মসংস্থানের সুযোগ বাড়ে এবং শ্রমশক্তির শহরমুখী অভিবাসন হ্রাস পায়। আলোচ্য প্রতিটি বিষয়েই পরিপূর্ণ দৃষ্টি দিয়েছিলেন জাতির পিতা বঙ্গবন্ধু শেখ মুজিবুর রহমান।
                        </p>
                        <p>যুদ্ধবিধ্বস্ত বাংলাদেশের অর্থনৈতিক ও রাজনৈতিক অবস্থান বিবেচনায় বঙ্গবন্ধু গৃহীত পররাষ্ট্রনীতি ছিল ‘সকলের সাথে বন্ধুত্ব, কারো প্রতি বৈরী মনোভাব নয়’। স্বাধীনতার প্রথম তিন মাসের মধ্যে সোভিয়েত ইউনিয়ন, ব্রিটেন, ফ্রান্সসহ ৬৩টি দেশের স্বীকৃতি লাভ করে বাংলাদেশ। ৩ মাস ২১ দিনের মধ্যে স্বীকৃতি দিয়েছে যুক্তরাষ্ট্র। পাকিস্তান স্বীকৃতি দিতে বাধ্য হয় দুই বছর দুই মাসের মধ্যে। সর্বমোট ১২১টি দেশ স্বীকৃতি প্রদান করে বঙ্গবন্ধুর সময়ে, বঙ্গবন্ধুর বাংলাদেশকে। জোটনিরপেক্ষ আন্দোলন, কমনওয়েলথ, জাতিসংঘ, ইসলামী সম্মেলন সংস্থা ইত্যাদি আন্তর্জাতিক সংস্থায় বলিষ্ঠ ভূমিকা পালন করে বঙ্গবন্ধু তাঁর সুদক্ষ নেতৃত্বের ছাপ রাখতে সমর্থ হন। পারমাণবিক অস্ত্র প্রতিযোগিতা রোধ এবং বিশ্ব শান্তির প্রতি ছিল তাঁর দৃঢ় সমর্থন। এ ক্ষেত্রে তাঁর ভূমিকার স্বীকৃতিস্বরূপ ১৯৭২ সালে বিশ্ব শান্তি পরিষদ বঙ্গবন্ধুকে প্রদান করে ‘জুলিও কুরি’ শান্তি পদক। বঙ্গবন্ধুর এই চৌকষ পররাষ্ট্রনীতির ফলে সদ্য স্বাধীন বাংলাদেশ সাফল্য লাভ করে বাণিজ্য খাতেও। সম্পাদিত হয় বিনিময়-বিনিয়োগসহ নানা দ্বিপক্ষীয়-আন্তর্জাতিক চুক্তিও।</p>

                        <p>মহান মুক্তিযুদ্ধে বিজয় অর্জনের পর স্বাধীনতার ফসল ঘরে ঘরে পৌঁছানোর লক্ষ্যে বঙ্গবন্ধু অক্লান্ত পরিশ্রম করেছেন। সরকার গঠনের মাত্র সাড়ে তিন বছর পর ১৯৭৫ সালের ১৫ আগস্ট বঙ্গবন্ধুকে সপরিবারে নির্মমভাবে হত্যার পর থমকে যায় বাঙালির অগ্রযাত্রা। </p>

                    </div> --}}

                    {!! html_entity_decode($article->article) !!}

                    <div class="col-lg-12">
                            <h2>Writer: {{$article->writer}}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="suggesation_part">
                <div class="row mx-0">
                     <div class="col-lg-8">
                         <div class="row">
                                <div class="col-lg-5 col-sm-8 col-md-8 pl-0 pr-5 mb-5 pb-3">
                                        <div class="post_image">
                                                <img class="w-100" src="{{asset('frontEnd/uploads/article')}}/{{$suggestion->photo}}" alt="post_image">
                                        </div>
                                    </div>
                                    <div class="col-lg-7 mb-5 pb-3 d-flex align-items-center">
                                         <div class="post_content">
                                                <h2>{{$suggestion->title}}</h2>
                                                <p>{{$suggestion->articleHint}}
                                                </p>
                                                <a href="{{url('article/details')}}/{{$suggestion->id}}">সম্পূর্ণ আর্টিকেল পড়ুন</a>
                                         </div>
                                    </div>
                         </div>
                         <!-- post one -->
                     </div>
                     <div class="col-lg-4 d-flex align-items-center">
                            <a class="more_article" href="{{route('readMore')}}">আরো আর্টিকেল</a>
                     </div>

                </div>
                </div>

    </section>

    <!--==========================
        Detail page  end
   =============================== -->

    <script src="{{ asset('frontEnd/js') }}/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('frontEnd/js') }}/popper.min.js"></script>
    <script src="{{ asset('frontEnd/js') }}/bootstrap.min.js"></script>
    <script src="{{ asset('frontEnd/js') }}/custom.js"></script>
  </body>
</html>
