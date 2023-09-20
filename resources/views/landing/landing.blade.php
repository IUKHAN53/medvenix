@extends('layouts.layoutLanding')
@section('styles')
  <link rel="stylesheet" href="{{asset('landing/assets/css/home.css')}}">
  <link rel="stylesheet" href="{{asset('landing/assets/css/custom-home.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css'>
  <style>
    .section-project {
      /*padding: 50px 0;*/
      position: relative;
      /*background-color: #222;*/
    }

    .section__title, .section__subtitle {
      text-align: center;
      color: white;
      display: block;
    }

    .section__title {
      font-size: 3em;
      line-height: 1;
      margin: 0 0 20px;
    }

    .section__subtitle {
      font-size: 1.2em;
      line-height: 1.5;
      opacity: 0.5;
    }

    .section__subtitle a {
      color: inherit;
    }

    .project-carousel {
      position: relative;
      /*padding: 50px 0;*/
    }

    .project-strip {
      margin: 150px 0 150px;
      /*filter: blur(10px);*/
    }

    .project-strip .project {
      cursor: pointer;

    }

    .project-strip .project > div {
      max-width: 160px;
      display: flex;
      justify-content: center;
      flex-direction: column;
    }

    .project-strip .project img {
      max-width: 160px;
      max-height: 160px;
    }

    .project-strip .project span {
      color: #a6a5c0;
      /*max-width: 160px;*/
      /*display: block;*/
      text-align: center;
      margin-top: 10px;
      /*margin: 0 auto;*/
      text-align: center;
    }

    .project-strip img {
      max-width: 100%;
      width: 100%;
      height: auto;
    }

    .project-screen {
      width: 270px;
      height: 460px;
      position: absolute;
      left: -50px;
      right: 0;
      top: 0;
      bottom: 0;
      margin: auto;
    }

    /*.medvenix-section_skill__carousel__phone:before {*/
    /*  top: 0;*/
    /*  left: 50%;*/
    /*  width: 260px;*/
    /*  height: 460px;*/
    /*  border-radius: 50px 50px 0 0;*/
    /*  background: -webkit-gradient(linear,left bottom,left top,from(#edf5ff),to(#fff));*/
    /*  background: linear-gradient(0deg,#edf5ff 0,#fff 100%);*/
    /*  -webkit-transform: translate(-50%);*/
    /*  transform: translate(-50%);*/
    /*  z-index: -1;*/
    /*}*/

    .project-screen .project-detail {
      position: absolute;
      left: 0;
      right: 0;
      /*width: 280px;*/
      /*height: 461px;*/
      border-radius: 50px 50px 0 0;
      width: 270px;
      height: 460px;
      background: linear-gradient(0deg, #edf5ff 0, #fff 100%);
      /* margin: 32px auto 0; */
      /* z-index: -1;*/
      padding: 30px;
    }

    .project-screen .project-detail .project > div {
      /*display: flex;*/
      /*justify-content: center;*/
    }

    .project-screen .screen-frame {
      content: "";
      width: 297px;
      height: 461px;
      position: absolute;
      background-image: url("{{asset('landing/assets/img/skills-carousel__phone.png')}}");
      background-repeat: no-repeat;
      /*background-color: #fff;*/
      /*transform: translate(-50%);*/
      /*z-index: 99;*/
    }

    .project-screen .project {
      margin-right: -100%;
      float: left;
      cursor: move;
    }

    .slick-dots {
      width: 366px;
      position: absolute;
      bottom: -180px;
      left: -15%;
      right: 0;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      margin: 0;
    }

    .project-detail .slick-dots li {
      margin: 0 4px;
      line-height: 0;
    }

    .project-detail .slick-dots li.slick-active button {
      background-color: #373a9a;
    }

    .project-detail .slick-dots li button {
      padding: 0;
      margin: 0;
      border-radius: 0;
      border: none;
      background: 0 0;
      -moz-appearance: none;
      appearance: none;
      -webkit-appearance: none;
      width: 8px;
      height: 8px;
      font-size: 0;
      line-height: 0;
      border-radius: 50%;
      background: #dbdfe9;
      -webkit-transition: .2s;
      transition: .2s all;
    }

    .medvenix-sm {
      font-size: .8rem;
      line-height: 135%;
      letter-spacing: -.005em;
    }

    .medvenix-section_skill__carousel__phone_contents {
      margin-top: 20px;
      display: flex !important;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    /*.slick-dots li button:before {*/
    /*  content: "•";  !* Unicode bullet symbol *!*/
    /*  font-size: 24px;*/
    /*  line-height: 15px;*/
    /*  opacity: .25;*/
    /*  color: black;*/
    /*}*/

    /*.slick-dots li.slick-active button:before {*/
    /*  opacity: .75;*/
    /*  color: black;*/
    /*}*/
  </style>
@endsection
@section('content')
  <div class="wrapper" id="page-wrapper">
    <div class="container-fluid" id="content" tabindex="-1">
      <main class="site-main" id="main">
        <div data-elementor-type="wp-page" data-elementor-id="6395" class="elementor elementor-6395" style="">
          <div class="d-flex flex-column flex-sm-row gap-5 justify-content-between align-items-center container"
               style="padding-bottom: 260px;padding-top: 260px;margin-left: auto;margin-right: auto;padding-left: 30px;padding-right: 30px;">
            <div class="d-flex flex-column gap-4 w-100">
              <h1>
                Automating tedious tasks with our AI-powered platform
              </h1>
              <p style="    color: #161453; margin: 0 0 30px">Streamline healthcare workflows, reduce doctor burnout, and prioritize what truly matters – your patient's well-being</p>
              <div class="d-flex gap-3 align-items-center">
                <a
                  class="elementor-button elementor-button-link elementor-size-lg btn-primary btn-blue btn-fill--filled"
                  href="{{route('book-demo')}}">
                  <span class="elementor-button-content-wrapper">
                    <span class="elementor-button-icon elementor-align-icon-right">
                      <svg xmlns="http://www.w3.org/2000/svg" width="13" height="10"
                           viewBox="0 0 13 10" fill="none">
                        <line x1="0.75" y1="-0.75" x2="10.25" y2="-0.75"
                              transform="matrix(1 8.73741e-08 8.74713e-08 -1 0.120605 4.41058)"
                              stroke="white" stroke-width="1.5" stroke-linecap="round"></line>
                        <path d="M8.12061 8.89105L11.8796 5.12994L7.89795 1.14605"
                              stroke="white" stroke-width="1.5" stroke-linecap="round"></path>
                      </svg>
                    </span>
                    <span class="elementor-button-text">Book a Demo</span>
                  </span>
                </a>
                <a class=""
                   href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25"
                       height="24" viewBox="0 0 25 24" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M9.51522 16.2809C9.51522 17.1288 10.5042 17.592 11.1555 17.0491L16.229 12.8204C16.7087 12.4206 16.7086 11.6837 16.2288 11.2839L11.1553 7.05687C10.504 6.51418 9.51522 6.97736 9.51522 7.82515V16.2809ZM0.378906 12.0003C0.378906 5.38396 5.76165 0 12.3792 0C18.9967 0 24.3794 5.38396 24.3794 12.0003C24.3794 18.6177 18.9966 24.0005 12.3792 24.0005C5.76169 24.0005 0.378906 18.6177 0.378906 12.0003ZM12.3792 1.2C6.42447 1.2 1.57891 6.04663 1.57891 12.0003C1.57891 17.955 6.42443 22.8005 12.3792 22.8005C18.3339 22.8005 23.1794 17.955 23.1794 12.0003C23.1794 6.04663 18.3339 1.2 12.3792 1.2Z"
                          fill="#4548c4"></path>
                  </svg>
                  <span style="color: #4548c4">Watch Now</span>
                </a>
              </div>
            </div>
            <div class="d-flex w-100 position-relative d-none d-sm-block">
              <video
                src="{{$settings->home_video ?? asset('landing/assets/videos/landing_hero_video.mp4')}}"
                alt=""
                class="img-fluid shadow"
                style="z-index: 2;  width: 100%;border-radius: 30px;opacity: 0.9"
                autoplay="" loop="" muted="" playsinline=""></video>
{{--              <img--}}
{{--                src="{{asset('landing/assets/img/circle-shape-green.svg')}}"--}}
{{--                class="position-absolute"--}}
{{--                style="z-index: 1; top: -200px; left: -50px; width: 400px; height: 400px"--}}
{{--                loading="lazy" alt="" class=" d-none d-sm-block">--}}
            </div>
          </div>
          <section
            class="elementor-section elementor-top-section elementor-element elementor-element-5f604044 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
            style="padding-bottom: 20px"
            data-id="5f604044" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
            <div class="elementor-container elementor-column-gap-no">
              <div
                class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-39f82374"
                data-id="39f82374" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                  <section
                    class="elementor-section elementor-inner-section elementor-element elementor-element-54599a4 elementor-section-full_width medvenix-section_skill elementor-section-height-default elementor-section-height-default"
                    data-id="54599a4" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                      <div
                        class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-a5c371f"
                        data-id="a5c371f" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                          <div
                            class="elementor-element elementor-element-7baf1279 medvenix-tagline elementor-widget elementor-widget-heading"
                            data-id="7baf1279" data-element_type="widget"
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                              <span
                                class="elementor-heading-title elementor-size-default">AI-Powered
                                Digital Workforce</span></div>
                          </div>
                          <div
                            class="elementor-element elementor-element-6708b178 d-h3 m-h1 elementor-widget elementor-widget-heading"
                            data-id="6708b178" data-element_type="widget"
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                              <h2 class="elementor-heading-title elementor-size-default">
                                Meet Your <i>Digital Workforce</i></h2></div>
                          </div>
                          <div
                            class="elementor-element elementor-element-2769e6c6 elementor-widget elementor-widget-text-editor"
                            data-id="2769e6c6" data-element_type="widget"
                            data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                              <p>The AI assistants you need to resolve over 85% of
                                repetitive tasks,&nbsp;<br>adaptive across call centers,
                                websites, mobile apps, SMS and more.</p></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
            </div>
            <div class="section section-project">
              <div class="project-carousel">
                <div class="project-strip">
                  <div class="project">
                    <div>
                      <img src="{{asset('landing/assets/img/apps/1.svg')}}" alt=""/>
                      <span>FAQ Resolution</span>
                    </div>
                  </div>
                  <div class="project">
                    <div>
                      <img src="{{asset('landing/assets/img/apps/2.svg')}}" alt=""/>
                      <span>Physician Search</span>
                    </div>
                  </div>
                  <div class="project">
                    <div>
                      <img src="{{asset('landing/assets/img/apps/3.svg')}}" alt=""/>
                      <span>Spot™ GPT-Powered Search</span>
                    </div>
                  </div>
                  <div class="project">
                    <div>
                      <img src="{{asset('landing/assets/img/apps/4.svg')}}" alt=""/>
                      <span>Rx Management</span>
                    </div>
                  </div>
                  <div class="project">
                    <div>
                      <img src="{{asset('landing/assets/img/apps/5.svg')}}" alt=""/>
                      <span>IT Help Desk</span>
                    </div>
                  </div>
                  <div class="project">
                    <div>
                      <img src="{{asset('landing/assets/img/apps/6.svg')}}" alt=""/>
                      <span>Smart Routing</span>
                    </div>
                  </div>
                  <div class="project">
                    <div>
                      <img src="{{asset('landing/assets/img/apps/7.svg')}}" alt=""/>
                      <span>Scheduling Management</span>
                    </div>
                  </div>


                  <div class="project">
                    <div>
                      <img src="{{asset('landing/assets/img/apps/1.svg')}}" alt=""/>
                      <span>FAQ Resolution</span>
                    </div>
                  </div>
                  <div class="project">
                    <div>
                      <img src="{{asset('landing/assets/img/apps/2.svg')}}" alt=""/>
                      <span>Physician Search</span>
                    </div>
                  </div>
                  <div class="project">
                    <div>
                      <img src="{{asset('landing/assets/img/apps/3.svg')}}" alt=""/>
                      <span>Spot™ GPT-Powered Search</span>
                    </div>
                  </div>
                  <div class="project">
                    <div>
                      <img src="{{asset('landing/assets/img/apps/4.svg')}}" alt=""/>
                      <span>Rx Management</span>
                    </div>
                  </div>
                  <div class="project">
                    <div>
                      <img src="{{asset('landing/assets/img/apps/5.svg')}}" alt=""/>
                      <span>IT Help Desk</span>
                    </div>
                  </div>
                  <div class="project">
                    <div>
                      <img src="{{asset('landing/assets/img/apps/6.svg')}}" alt=""/>
                      <span>Smart Routing</span>
                    </div>
                  </div>
                  <div class="project">
                    <div>
                      <img src="{{asset('landing/assets/img/apps/7.svg')}}" alt=""/>
                      <span>Scheduling Management</span>
                    </div>
                  </div>
                </div>
                <div class="project-screen">
                  <div class="project-detail">
                    <div class="medvenix-section_skill__carousel__phone_contents">
                      <figure>
                        <img width="530" height="320" src="{{asset('landing/assets/img/apps/inner-slider/1.png')}}"
                             alt="">
                      </figure>
                      <span>FAQ Resolution</span>
                      <p class="medvenix-sm">
                        Serve customers with instant answers to their most frequently asked questions.
                      </p>
                      <button onclick="location.href='{{route('book-demo')}}'" class="btn btn-blue btn-secondary btn-sm">
                        Learn More
                      </button>
                    </div>
                    <div class="medvenix-section_skill__carousel__phone_contents">
                      <figure>
                        <img width="530" height="320" src="{{asset('landing/assets/img/apps/inner-slider/2.png')}}"
                             alt="">
                      </figure>
                      <span>Physician Search</span>
                      <p class="medvenix-sm">
                        Enable patients to find the right provider for their care needs with ease.
                      </p>
                      <a href="{{route('book-demo')}}" class="btn btn-blue btn-secondary btn-sm">
                        Learn More
                      </a>
                    </div>
                    <div class="medvenix-section_skill__carousel__phone_contents">
                      <figure>
                        <img width="530" height="320" src="{{asset('landing/assets/img/apps/inner-slider/3.png')}}"
                             alt="">
                      </figure>
                      <span>Spot™ GPT-Powered Search</span>
                      <p class="medvenix-sm">
                        Intercept and speed up site search with instant GPT-powered answers.
                      </p>
                      <a href="{{route('book-demo')}}" class="btn btn-blue btn-secondary btn-sm">
                        Learn More
                      </a>
                    </div>
                    <div class="medvenix-section_skill__carousel__phone_contents">
                      <figure>
                        <img width="530" height="320" src="{{asset('landing/assets/img/apps/inner-slider/4.png')}}"
                             alt="">
                      </figure>
                      <span>Rx Management</span>
                      <p class="medvenix-sm">
                        Provide your patients with a frictionless path to instantly track and request Rx refills.
                      </p>
                      <a href="{{route('book-demo')}}" class="btn btn-blue btn-secondary btn-sm">
                        Learn More
                      </a>
                    </div>
                    <div class="medvenix-section_skill__carousel__phone_contents">
                      <figure>
                        <img width="530" height="320" src="{{asset('landing/assets/img/apps/inner-slider/5.png')}}"
                             alt="">
                      </figure>
                      <span>IT Help Desk</span>
                      <p class="medvenix-sm">
                        Automatically deflect customer and employee IT tickets to self-service via SMS.
                      </p>
                      <a href="{{route('book-demo')}}" class="btn btn-blue btn-secondary btn-sm">
                        Learn More
                      </a>
                    </div>
                    <div class="medvenix-section_skill__carousel__phone_contents">
                      <figure>
                        <img width="530" height="320" src="{{asset('landing/assets/img/apps/inner-slider/6.png')}}"
                             alt="">
                      </figure>
                      <span>Smart Routing</span>
                      <p class="medvenix-sm">
                        Swiftly and accurately route calls to the appropriate point of care.
                      </p>
                      <a href="{{route('book-demo')}}" class="btn btn-blue btn-secondary btn-sm">
                        Learn More
                      </a>
                    </div>
                    <div class="medvenix-section_skill__carousel__phone_contents">
                      <figure>
                        <img width="530" height="320" src="{{asset('landing/assets/img/apps/inner-slider/7.png')}}"
                             alt="">
                      </figure>
                      <span>Scheduling <br>Management</span>
                      <p class="medvenix-sm">
                        Allow customers to self-schedule, reschedule, and cancel appointments.
                      </p>
                      <a href="{{route('book-demo')}}" class="btn btn-blue btn-secondary btn-sm">
                        Learn More
                      </a>
                    </div>
                  </div>
                  <div class="screen-frame"></div>
                </div>
              </div>
              <ul class="medvenix-section_skill__carousel__channels" id="channel">
                <li class="medvenix-section_skill__carousel__channel is-active" id="call_center">
                  <figure>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="31" viewBox="0 0 30 31" fill="none">
                      <path
                        d="M22.3436 17.8288C22.1328 17.6451 21.8674 17.536 21.5884 17.5181C21.3094 17.5003 21.0322 17.5748 20.7998 17.7301C20.4814 17.9466 20.1631 18.1535 19.8448 18.3381C18.4665 19.1148 17.136 19.153 15.9296 17.9784C15.4394 17.4978 14.9429 17.0235 14.4591 16.5397C12.2309 14.3115 12.1927 13.643 13.8224 10.8992C14.0484 10.5236 14.1185 9.7533 13.8861 9.45728C12.963 8.28271 11.9508 7.175 10.9513 6.0641C10.8638 5.96742 10.7581 5.88902 10.6402 5.83344C10.5223 5.77786 10.3945 5.74619 10.2642 5.74028C10.134 5.73436 10.0039 5.7543 9.88142 5.79896C9.75894 5.84361 9.64653 5.91209 9.55067 6.00044C6.7591 8.52781 6.21165 11.5581 8.00055 14.9131C9.90721 18.4654 12.784 21.4029 16.2957 23.3833C19.8289 25.4332 22.9229 24.9589 25.619 22.04C25.7093 21.9432 25.7793 21.8292 25.8249 21.7049C25.8705 21.5806 25.8908 21.4484 25.8845 21.3161C25.8783 21.1839 25.8457 21.0542 25.7887 20.9347C25.7316 20.8152 25.6511 20.7083 25.5521 20.6204L22.3436 17.8288Z"
                        fill="white"></path>
                      <path
                        d="M25.3627 16.0376C25.6459 13.004 24.749 10.1421 23.0607 7.93827C21.2787 5.61216 18.615 4.01906 15.5266 3.73073M13.4186 26.3111C10.3302 26.0227 7.66657 24.4296 5.88458 22.1035C4.19623 19.8997 3.29933 17.0378 3.58254 14.0042M13.4186 26.3111L12.3242 24.4568M13.4186 26.3111L12.0404 27.4965M15.5266 3.73073L17.0593 2.99913M15.5266 3.73073L16.2225 5.31384"
                        stroke="#4548C4" stroke-width="1.24332" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </figure>
                  <span class="medvenix-sm">Call Center</span>
                </li>
                <li class="medvenix-section_skill__carousel__channel" id="sms">
                  <figure>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="31" viewBox="0 0 30 31" fill="none">
                      <g clip-path="url(#clip0_988_9122)">
                        <mask id="mask0_988_9122" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-1" y="-1"
                              width="30" height="30">
                          <rect x="-0.923096" y="-0.387939" width="29.1399" height="29.1399" fill="#C4C4C4"></rect>
                        </mask>
                        <g mask="url(#mask0_988_9122)">
                          <path
                            d="M28.2169 13.7026C28.2512 14.7052 28.0783 15.7041 27.7091 16.6369C27.3399 17.5697 26.7822 18.4164 26.071 19.1239C25.3929 19.8051 24.5869 20.3456 23.6994 20.7146C22.812 21.0836 21.8603 21.2738 20.8992 21.2742L12.1246 21.2742C11.9811 21.2742 11.8391 21.3024 11.7065 21.3573C11.5739 21.4122 11.4535 21.4926 11.352 21.594L7.71637 24.4825H7.70593V21.9885C7.70443 21.7632 7.62929 21.5446 7.49196 21.366C7.35464 21.1874 7.16265 21.0586 6.94531 20.9993C5.41535 20.5602 4.06925 19.6363 3.10939 18.3666C2.14953 17.0968 1.62778 15.5498 1.62256 13.9581C1.62287 12.9971 1.813 12.0457 2.18201 11.1584C2.55103 10.2712 3.09167 9.46553 3.77289 8.78777C4.45103 8.10664 5.25696 7.56607 6.14446 7.19707C7.03195 6.82807 7.98354 6.6379 8.94469 6.63746L20.7662 6.63746C24.7351 6.63297 28.0883 9.73666 28.2169 13.7026Z"
                            fill="white"></path>
                        </g>
                        <line x1="8.83018" y1="9.88197" x2="17.4569" y2="9.88197" stroke="#4548C4"
                              stroke-width="1.51388" stroke-linecap="round"></line>
                        <line x1="8.83018" y1="13.1413" x2="20.7164" y2="13.1413" stroke="#4548C4"
                              stroke-width="1.51388" stroke-linecap="round"></line>
                        <line x1="8.83018" y1="16.0387" x2="14.9217" y2="16.0387" stroke="#4548C4"
                              stroke-width="1.51388" stroke-linecap="round"></line>
                      </g>
                      <defs>
                        <clipPath id="clip0_988_9122">
                          <rect width="29.566" height="29.566" fill="white"
                                transform="translate(0.216797 0.751953)"></rect>
                        </clipPath>
                      </defs>
                    </svg>
                  </figure>
                  <span class="medvenix-sm">SMS</span>
                </li>
                <li class="medvenix-section_skill__carousel__channel" id="website">
                  <figure>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="31" viewBox="0 0 30 31" fill="none">
                      <g clip-path="url(#clip0_988_9137)">
                        <mask id="mask0_988_9137" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                              width="31" height="32">
                          <rect x="0.216797" y="0.751953" width="30.3277" height="30.3277" fill="#D9D9D9"></rect>
                        </mask>
                        <g mask="url(#mask0_988_9137)">
                          <path
                            d="M14.3259 3.31177L16.012 3.31177C16.0772 3.32683 16.1416 3.34737 16.2073 3.35741C16.6948 3.42542 17.1892 3.45965 17.668 3.56235C20.4126 4.15025 22.7249 5.4922 24.5448 7.63201C26.9347 10.4423 27.8836 13.7082 27.4304 17.3543C27.1296 19.7761 26.1587 21.9374 24.5269 23.7563C21.445 27.1911 17.5945 28.5832 13.0305 27.8643C10.3037 27.4339 7.98178 26.1591 6.12633 24.1215C3.14393 20.8447 2.1466 17.001 3.15671 12.6949C3.88382 9.59745 5.66713 7.17922 8.29807 5.39452C9.82435 4.35203 11.5745 3.68327 13.4071 3.44231C13.7147 3.39986 14.0201 3.35422 14.3259 3.31177ZM14.2802 20.5535L14.2802 16.5578H10.3206C10.3174 16.6198 10.3115 16.665 10.3128 16.7098C10.3586 17.9522 10.5113 19.1884 10.7693 20.4047C10.8003 20.5544 10.8843 20.5704 11.0112 20.5699C12.0364 20.5667 13.0615 20.5699 14.0862 20.5699C14.1456 20.5672 14.2049 20.559 14.2784 20.5535H14.2802ZM16.0558 20.5398C16.0786 20.5501 16.1025 20.5579 16.127 20.5631C17.2124 20.5653 18.2983 20.5631 19.3837 20.5704C19.5375 20.5704 19.5535 20.4791 19.57 20.37C19.7046 19.4795 19.8488 18.5899 19.9684 17.6975C20.0186 17.325 20.0168 16.9457 20.0392 16.56L16.0558 16.56L16.0558 20.5398ZM4.57534 16.5404C4.57534 16.6239 4.57077 16.6774 4.57534 16.7285C4.70554 18.0111 5.06285 19.2604 5.63062 20.4179C5.69178 20.5416 5.7703 20.5708 5.8972 20.5704C6.89133 20.5663 7.88546 20.5704 8.87959 20.5672C8.93802 20.5672 8.99597 20.5585 9.0512 20.5539C9.05692 20.5356 9.06 20.5165 9.06034 20.4973C8.78327 19.2549 8.62086 17.9897 8.57515 16.7175C8.57013 16.5582 8.49024 16.5377 8.35696 16.5386C7.48423 16.5427 6.61152 16.5386 5.7388 16.5386L4.57534 16.5404ZM25.7886 16.5404H22.0845C21.7709 16.5404 21.7842 16.5404 21.7554 16.8659C21.6897 17.6048 21.6221 18.3443 21.5304 19.0805C21.4688 19.5726 21.3642 20.0591 21.2775 20.5539C21.3112 20.5601 21.3452 20.5644 21.3793 20.5667C22.4118 20.5667 23.4438 20.5713 24.4763 20.5608C24.5543 20.5608 24.6662 20.4772 24.7045 20.4028C25.1364 19.5432 25.4465 18.6276 25.6256 17.6824C25.695 17.3145 25.731 16.9398 25.7867 16.5404H25.7886ZM14.278 14.7859V10.7942L10.8126 10.7942C10.5151 12.1056 10.3456 13.4427 10.3064 14.7868L14.278 14.7859ZM16.0581 14.7836L20.0365 14.7836C19.9939 13.4431 19.8244 12.1096 19.5302 10.8011L16.0581 10.8011V14.7836ZM25.7607 14.7836C25.766 14.7508 25.7686 14.7177 25.7685 14.6845C25.6427 13.3639 25.2696 12.0787 24.6684 10.896C24.6392 10.8381 24.5315 10.7897 24.4566 10.7888C23.7816 10.781 23.106 10.7842 22.4305 10.7842H21.3254C21.4966 12.122 21.6659 13.448 21.8371 14.7849L25.7607 14.7836ZM4.51919 14.7877L8.49984 14.7877C8.67374 13.4466 8.84581 12.1179 9.0188 10.7828C7.98358 10.7828 6.91415 10.7828 5.84516 10.7892C5.78034 10.7892 5.68312 10.8677 5.65756 10.9321C5.39739 11.5839 5.10982 12.2284 4.90853 12.8989C4.72595 13.5042 4.64654 14.1377 4.51645 14.7895L4.51919 14.7877ZM14.2871 5.22564C13.2701 5.40821 11.6634 7.50055 11.3444 9.03375H14.2871L14.2871 5.22564ZM16.0631 5.16676V9.04653L19.0167 9.04653C18.752 8.32352 18.4458 7.63612 18.0413 6.99253C17.699 6.44891 17.2987 5.95503 16.7688 5.58258C16.5556 5.43514 16.3201 5.31921 16.0617 5.16858L16.0631 5.16676ZM11.3074 22.3126C11.4503 22.6568 11.5735 22.9886 11.7228 23.3086C12.1651 24.258 12.6982 25.1444 13.5682 25.7734C13.7786 25.9254 14.0169 26.039 14.2802 26.1924V22.3126L11.3074 22.3126ZM16.0572 26.1308C17.2613 25.7925 18.4544 24.0635 18.9999 22.3208H16.0572V26.1308ZM11.1048 5.87013C9.43342 6.54199 7.9651 7.63616 6.8434 9.04561H9.57977C9.95546 7.92839 10.4677 6.86182 11.1048 5.87013ZM23.4922 9.04424C22.3219 7.60188 20.9178 6.55115 19.2363 5.87196C19.8854 6.86701 20.3719 7.93189 20.7617 9.04424H23.4922ZM11.1153 25.526C10.8218 24.9974 10.5219 24.5131 10.2781 24.0033C10.0344 23.4934 9.83448 22.9617 9.62771 22.4345C9.57568 22.3021 9.49078 22.3017 9.38123 22.3021C8.60802 22.3021 7.8348 22.3021 7.06113 22.3021C7.00498 22.3021 6.94884 22.3112 6.85756 22.319C8.01327 23.7618 9.42186 24.8071 11.113 25.526H11.1153ZM23.4794 22.3309C23.4484 22.3197 23.4165 22.3114 23.384 22.3062C22.5574 22.3062 21.7308 22.3062 20.9046 22.3012C20.7713 22.3012 20.7453 22.3756 20.7074 22.4696C20.5248 22.9261 20.3633 23.3912 20.1478 23.8312C19.8699 24.3981 19.5485 24.9435 19.2349 25.52C20.9083 24.8071 22.3178 23.7623 23.4771 22.3295L23.4794 22.3309Z"
                            fill="white"></path>
                        </g>
                        <path d="M24.022 8.82181L18.8325 8.82181M21.4272 6.22705L21.4272 11.4166" stroke="#4548C4"
                              stroke-width="1.51388" stroke-linecap="round" stroke-linejoin="round"></path>
                      </g>
                      <defs>
                        <clipPath id="clip0_988_9137">
                          <rect width="29.566" height="29.566" fill="white"
                                transform="translate(0.216797 0.751953)"></rect>
                        </clipPath>
                      </defs>
                    </svg>
                  </figure>
                  <span class="medvenix-sm">Website</span>
                </li>
                <li class="medvenix-section_skill__carousel__channel" id="mobile_apps">
                  <figure>
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27" fill="none">
                      <rect x="12.6602" y="24.999" width="10.2829" height="10.2829" rx="1.51388"
                            transform="rotate(-180 12.6602 24.999)" fill="white"></rect>
                      <rect x="25" y="12.6604" width="10.2829" height="10.2829" rx="1.51388"
                            transform="rotate(-180 25 12.6604)" fill="white"></rect>
                      <rect x="12.6602" y="12.6604" width="10.2829" height="10.2829" rx="1.51388"
                            transform="rotate(-180 12.6602 12.6604)" fill="white"></rect>
                      <path d="M22.9438 19.8583L16.7741 19.8583M19.859 16.7734L19.859 22.9431" stroke="#4548C4"
                            stroke-width="1.51388" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </figure>
                  <span class="medvenix-sm">Mobile <br>Apps</span>
                </li>
                <li class="medvenix-section_skill__carousel__channel" id="messaging_tools">
                  <figure>
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27" fill="none">
                      <g clip-path="url(#clip0_714_11706)">
                        <mask id="mask0_714_11706" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-1" y="0"
                              width="29" height="28">
                          <rect x="-0.0327148" width="27.8478" height="27.5483" fill="#D9D9D9"></rect>
                        </mask>
                        <g mask="url(#mask0_714_11706)">
                          <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M14.1405 24.9668C20.6289 24.9668 25.8887 19.7635 25.8887 13.3449C25.8887 6.92623 20.6289 1.7229 14.1405 1.7229C7.65205 1.7229 2.39216 6.92623 2.39216 13.3449C2.39216 14.9981 2.74111 16.5707 3.37013 17.9946L1.74609 23.365C1.54812 24.0197 2.16484 24.6298 2.82664 24.434L7.62158 23.015C9.4868 24.2479 11.7288 24.9668 14.1405 24.9668Z"
                                fill="white"></path>
                          <path d="M7.52344 16.3984L11.831 12.2417L16.7332 16.3984L20.805 12.2417" stroke="#4548C4"
                                stroke-width="1.43831" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                      </g>
                      <defs>
                        <clipPath id="clip0_714_11706">
                          <rect width="27" height="27" fill="white"></rect>
                        </clipPath>
                      </defs>
                    </svg>
                  </figure>
                  <span class="medvenix-sm">Messaging <br>Tools</span>
                </li>
              </ul>
            </div>

          </section>

        </div>
      </main>
    </div>
  </div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js'></script>
  <script>
    let project_detail = $(".project-detail").slick({
      slidesToShow: 1,
      arrows: false,
      asNavFor: '.project-strip',
      autoplay: true,
      autoplaySpeed: 3000,
      dots: true,
      clone: true
    });
    let channel = $('#channel li');
    let activeChannels = {
      1: ['#call_center', '#sms', '#website'],
      2: ['#call_center'],
      3: ['#call_center', '#website', '#mobie_apps', '#messaging_tools'],
      4: ['#website', '#mobile_apps'],
      5: ['#website'],
      6: ['#website', '#mobile_apps'],
      7: ['#call_center', '#website', '#mobile_apps'],
      8: ['#call_center', '#sms', '#website'],
      9: ['#call_center'],
      10: ['#call_center', '#website', '#mobile_apps', '#messaging_tools'],
      11: ['#website', '#mobile_apps'],
      12: ['#website'],
      13: ['#website', '#mobile_apps'],
      14: ['#call_center', '#website', '#mobile_apps'],
    }
    channel.each(function (index, item) {
      let itemSelector = $(item);
      itemSelector.removeClass("is-active")
    })

    project_detail.on('afterChange', function (event, slick, currentSlide) {
      let slideNumber = currentSlide + 1;
      let activeChannelList = activeChannels[slideNumber];

      channel.each(function (index, item) {
        let itemSelector = $(item);
        itemSelector.removeClass("is-active")
      })

      activeChannelList && Object.keys(activeChannelList).forEach(key => {
        $(activeChannelList[key]).addClass('is-active')
      })

    });

    let strip = $('.project-strip').slick({
      slidesToShow: 9,
      slidesToScroll: 1,
      arrows: false,
      asNavFor: '.project-detail',
      dots: false,
      infinite: true,
      centerMode: false,
      focusOnSelect: true,
    });

    strip.on('afterChange', function (event, slick, currentSlide) {
      if (currentSlide >= 6) {
        let number = currentSlide - 6;
        console.log(number)
        project_detail.slick('slickGoTo', number);
      }
    });
  </script>
@endsection
