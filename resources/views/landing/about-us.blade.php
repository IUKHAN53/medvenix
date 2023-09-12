@extends('layouts.layoutLanding')
@section('styles')
  <link rel="stylesheet" href="{{asset('landing/assets/css/about-us.css')}}">
  <link rel="stylesheet" href="{{asset('landing/assets/css/custom.css')}}">
  <style>
    .video-container {
      position: relative;
      width: 100%;
      height: 0;
      padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
      /*margin-top: 75px;*/
      overflow: hidden;
    }

    video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
    }

    .overlay-text {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      font-size: 24px;
      z-index: 1;
    }

    /* Portrait phones and smaller */
    @media (max-width: 576px) {
      /* Your CSS here */
      .video-container {
        margin-top: 75px;
      }
    }

    /* Landscape phones and smaller */
    @media (max-width: 767px) {
      /* Your CSS here */
      .video-container {
        margin-top: 75px;
      }
    }

    /* Portrait tablets and large phones */
    @media (min-width: 768px) and (max-width: 991px) {
      /* Your CSS here */
      .video-container {
        margin-top: 75px;
      }
    }

  </style>
@endsection
@section('content')
  <div data-elementor-type="wp-page" data-elementor-id="6547" class="elementor elementor-6547">
    <div class="video-container">
      <video autoplay loop muted style="opacity: 0.5">
        <source src="{{asset('landing/assets/videos/about-us-video.mp4')}}" type="video/mp4">
      </video>
      <div class="overlay-text">
        <h1 class="d-flex gap-3 align-items-center flex-column flex-sm-row justify-content-center mb-5">
          <span>Hi from</span>
          <img src="{{asset('landing/assets/img/logo.png')}}" alt="" style="max-width: 300px; max-height: 80px">
        </h1>
        <div class="d-flex align-items-center justify-content-between gap-4 rounded flex-column flex-sm-row"
             style="background-color: #fff">
          <div class="d-flex align-items-center justify-content-start gap-4 w-100">
            <div>
              <img decoding="async" width="150" height="120"
                   src="{{asset('landing/assets/img/about-us-banner-img.png')}}"/>
            </div>
            <div class="w-100">
              <p class="m-0">Our SuperHyros™ help enterprises to strengthen their relationships
                with end users through adaptive, AI-powered communications.</p>
            </div>
          </div>
          <div class="mx-3">
            <a href="#"
               class="d-flex gap-4  p-4 elementor-button-link elementor-button elementor-size-lg btn-primary btn-blue btn-fill--filled"
               role="button">

              <span class="w-100">Join the Super Hyros</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="13"
                   height="10" viewBox="0 0 13 10" fill="none">
                <line x1="0.75" y1="-0.75" x2="10.25" y2="-0.75"
                      transform="matrix(1 8.73741e-08 8.74713e-08 -1 0.120605 4.41058)"
                      stroke="white" stroke-width="1.5"
                      stroke-linecap="round"></line>
                <path d="M8.12061 8.89105L11.8796 5.12994L7.89795 1.14605"
                      stroke="white" stroke-width="1.5"
                      stroke-linecap="round"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section
    class="elementor-section elementor-top-section elementor-element elementor-element-7950db6e hyro-section_team elementor-section-boxed elementor-section-height-default elementor-section-height-default"
    data-id="7950db6e" data-element_type="section">
    <div class="d-flex flex-column">
    </div>
    <div class="elementor-container elementor-column-gap-no">
      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4affe781"
           data-id="4affe781" data-element_type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
          <div
            class="elementor-element elementor-element-62fed6f5 hyro-tagline elementor-widget elementor-widget-heading"
            data-id="62fed6f5" data-element_type="widget" data-widget_type="heading.default">
            <div class="elementor-widget-container text-center">
                            <span class="elementor-heading-title elementor-size-default">Led by some of the
                                best</span></div>
          </div>
          <div class="elementor-element elementor-element-6a59ad98 d-h3 m-h2 elementor-widget elementor-widget-heading"
               data-id="6a59ad98" data-element_type="widget" data-widget_type="heading.default">
            <div class="elementor-widget-container">
              <h2 class="elementor-heading-title elementor-size-default text-center">League of Leaders</h2></div>
          </div>
          <div class="elementor-element elementor-element-205f317b elementor-widget elementor-widget-text-editor"
               data-id="205f317b" data-element_type="widget" data-widget_type="text-editor.default">
            <div class="elementor-widget-container">
              <p class="text-center">Medvenix is a company full of leaders, bringing together decades of experience in
                enterprise and consumer SaaS, growth startups, healthcare technology and more – but
                our collective superpower is a shared passion for replacing bad chatbots and IVR
                systems with conversational AI that rocks. Here are just a few of us:</p></div>
          </div>
          <ul class="hyro-section_team__grid">
            @foreach($members as $member)
              <li class="hyro-section_team__item">
                <div class="hyro-section_team__item__top">
                  <figure class="hyro-section_team__item__thumbnail">
                    <img width="344" height="360" decoding="async"
                         src="{{$member->image}}"
                         alt="" title="">
                    <img width="688" height="720" decoding="async"
                         src="{{$member->image}}"
                         alt="" title="">
                  </figure>
                  <div class="hyro-section_team__item__top-hover">
                    <figure>
                      <svg xmlns="http://www.w3.org/2000/svg" width="67" height="56"
                           viewBox="0 0 67 56" fill="none">
                        <path d="M11.0766 0.715332L0.5 12.8742L33.3551 55.8806L66.8853 12.8742L55.6336 0.715332H11.0766Z"
                              fill="#F8FBFF"></path>
                        <path
                          d="M13.2536 3.38501L4.17044 13.8233L33.4006 51.4979L63.0632 13.8233L53.4002 3.38501H13.2536Z"
                          fill="#161453"></path>
                        <path
                          d="M37.2466 19.095C39.4079 19.095 41.5411 19.0671 43.6743 19.0671C43.7024 19.095 43.7305 19.123 43.7305 19.151C43.7024 21.2493 43.955 23.3755 43.5059 25.4458C42.5796 29.7263 38.9027 33.0835 34.552 33.6151C29.4435 34.2306 24.756 31.293 23.1281 26.425C21.1352 20.4659 24.9245 13.9753 31.1276 12.8002C31.8013 12.6603 32.4749 12.6324 33.1486 12.6044C34.3555 12.5764 35.5344 12.5764 36.7414 12.5764C36.8817 12.5764 37.022 12.5764 37.1904 12.6044C37.1904 14.7586 37.2185 16.8849 37.2185 19.0671C37.0782 19.0671 36.9378 19.0671 36.7975 19.0671C35.5905 19.0671 34.3836 19.0671 33.1767 19.095C31.0715 19.123 29.3031 20.7177 29.1347 22.788C28.9663 24.9422 30.3978 26.8446 32.5311 27.2083C34.6082 27.572 36.601 26.2571 37.1624 24.2148C37.2466 23.8791 37.2747 23.5434 37.3027 23.2077C37.3027 22.0606 37.3027 20.9135 37.3027 19.7385C37.2466 19.4867 37.2466 19.2909 37.2466 19.095Z"
                          fill="white"></path>
                        <path
                          d="M44.2255 16.7693C43.8583 16.8543 43.7453 16.6844 43.6606 16.3727C43.4064 15.5512 43.1239 14.7863 42.8697 13.9647C42.7849 13.6814 42.6155 13.4831 42.333 13.3981C41.5139 13.1432 40.6947 12.8599 39.8473 12.5766C39.5931 12.4916 39.4519 12.3783 39.4801 12.095C39.5084 11.84 39.4519 11.585 39.8191 11.4717C40.6665 11.2168 41.4856 10.9051 42.333 10.6218C42.6155 10.5368 42.7849 10.3669 42.8697 10.0836C43.1239 9.23369 43.4346 8.41213 43.6606 7.56225C43.7736 7.19397 44.0278 7.25063 44.282 7.2223C44.5362 7.19397 44.6492 7.30729 44.7339 7.53392C45.0164 8.38381 45.2989 9.23369 45.5813 10.0836C45.6661 10.3385 45.8072 10.5085 46.0897 10.5935C46.9371 10.8485 47.7563 11.1601 48.6037 11.4151C48.9709 11.5284 48.9144 11.7833 48.9426 12.0383C48.9708 12.3216 48.8296 12.4349 48.5754 12.5199C47.7562 12.7749 46.9654 13.0865 46.1463 13.3415C45.8355 13.4265 45.6661 13.6248 45.5813 13.9364C45.3271 14.7296 45.0446 15.5228 44.7904 16.3444C44.6774 16.6843 44.5645 16.911 44.2255 16.7693Z"
                          fill="#EF4068"></path>
                      </svg>
                    </figure>
                    <div class="hyro-section_team__item__top-hover__inner">
                      <p>{{$member->quote}}</p>
                      <a href="{{$member->linkedin_url}}" target="_blank"
                         rel="noopener">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="49"
                             viewBox="0 0 48 49" fill="none">
                          <mask id="mask064f4207225e06-ln-ab" style="mask-type:alpha"
                                maskUnits="userSpaceOnUse" x="0" y="0" width="48"
                                height="49">
                            <rect y="0.065918" width="48" height="48"
                                  fill="#D9D9D9"></rect>
                          </mask>
                          <g mask="url(#mask064f4207225e06-ln-ab)">
                            <path
                              d="M27.8801 8.00089C32.5769 9.13694 36.6198 12.3538 38.7799 16.6765C43.2993 25.7197 38.4695 37.2479 28.2824 39.9866C23.0764 41.3882 17.3703 40.0902 13.2633 36.5713C8.80556 32.7519 6.67333 26.6884 7.79488 20.9277C9.52265 11.9445 18.8979 5.84525 27.8801 8.00089ZM25.6135 21.9724C25.6109 21.9177 25.6065 21.8667 25.6065 21.8158C25.6059 21.3592 25.6059 20.9027 25.6065 20.4461C25.6065 20.4086 25.6036 20.3707 25.6065 20.3332C25.613 20.2582 25.5836 20.2216 25.5058 20.2281C25.4792 20.2303 25.4521 20.2281 25.4252 20.2281C24.216 20.2281 23.007 20.2281 21.798 20.2281C21.5871 20.2281 21.6108 20.2103 21.6108 20.4216C21.6108 24.7722 21.6108 29.1227 21.6108 33.4731C21.6108 33.5107 21.6126 33.5485 21.6108 33.586C21.6083 33.6478 21.637 33.6736 21.6978 33.6709C21.7406 33.6688 21.7837 33.6709 21.8269 33.6709C23.0144 33.6709 24.202 33.6709 25.3895 33.6709C25.6304 33.6709 25.6059 33.6983 25.606 33.4573C25.606 31.2231 25.606 28.9887 25.606 26.7542C25.606 26.4859 25.606 26.2176 25.642 25.9504C25.6982 25.5264 25.8034 25.1177 26.0132 24.7417C26.3015 24.2256 26.728 23.8777 27.2981 23.7117C27.7121 23.5898 28.148 23.5611 28.5745 23.6277C29.2422 23.7309 29.7331 24.0843 30.0392 24.6893C30.1138 24.8381 30.1753 24.9931 30.2228 25.1527C30.3559 25.5933 30.4061 26.0465 30.4094 26.5041C30.415 27.3105 30.4118 28.1153 30.4118 28.921C30.4118 30.4517 30.4118 31.9824 30.4118 33.5131C30.4118 33.6689 30.4129 33.6709 30.5541 33.6709C31.8384 33.6709 33.1227 33.6709 34.407 33.6709C34.5482 33.6709 34.5483 33.6691 34.5509 33.5296C34.5509 33.5028 34.5509 33.4759 34.5509 33.4489C34.5509 30.7258 34.5509 28.0027 34.5509 25.2797C34.5509 24.4083 34.4655 23.5344 34.1572 22.7159C33.6536 21.3782 32.7309 20.4761 31.3577 20.0547C30.5948 19.8184 29.7895 19.7515 28.9981 19.8587C27.6016 20.0466 26.5032 20.7339 25.6964 21.888C25.6753 21.9167 25.6662 21.9561 25.6135 21.9724ZM14.78 33.4807C14.78 33.6904 14.7639 33.6706 14.9719 33.6706C16.2289 33.6706 17.4859 33.6706 18.7429 33.6706C18.9611 33.6706 18.9425 33.6956 18.9425 33.4733C18.9425 29.1241 18.9425 24.775 18.9425 20.426C18.9425 20.3884 18.9403 20.3507 18.9425 20.3131C18.9461 20.2507 18.9169 20.2257 18.8564 20.2286C18.8189 20.2303 18.7812 20.2286 18.7434 20.2286C17.4919 20.2286 16.2403 20.2286 14.9886 20.2286C14.7516 20.2286 14.7801 20.2092 14.7801 20.4334C14.778 24.7822 14.78 29.1317 14.78 33.4807ZM14.3832 15.9783C14.3817 17.3535 15.4755 18.4621 16.8359 18.4633C18.2003 18.465 19.2972 17.3646 19.3006 15.9907C19.304 14.6169 18.2067 13.5053 16.8479 13.5037C15.4853 13.5021 14.3843 14.608 14.3832 15.9783Z"
                              fill="#161453"></path>
                          </g>
                        </svg>
                      </a>
                      <a href="{{route('about-us')}}" target="_blank">
                      </a>
                    </div>
                  </div>
                </div>
                <div class="hyro-section_team__item__meta">
                  <strong>{{$member->name}}</strong>
                  <span>{{$member->designation}}</span>
                </div>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section
    class="elementor-section elementor-top-section elementor-element elementor-element-7f651a0 hyro-section_cta hyro-section_cta--demo elementor-section-boxed elementor-section-height-default elementor-section-height-default"
    data-id="7f651a0" data-element_type="section"
    data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
    <div class="elementor-container elementor-column-gap-no">
      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-eb6d1c7"
           data-id="eb6d1c7" data-element_type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
          <div
            class="elementor-element elementor-element-6e7377f elementor-hidden-desktop elementor-widget elementor-widget-image"
            data-id="6e7377f" data-element_type="widget" data-widget_type="image.default">
            <div class="elementor-widget-container text-end">
              <img decoding="async" width="75" height="50"
                   src="data:image/svg+xml,%3Csvg%20xmlns=&#39;http://www.w3.org/2000/svg&#39;%20viewBox=&#39;0%200%2075%2050&#39;%3E%3C/svg%3E"
                   class="attachment-large size-large" alt="" title=""
            </div>
          </div>
          <div class="elementor-element elementor-element-d13bdf8 d-h3 m-h2 elementor-widget elementor-widget-heading"
               data-id="d13bdf8" data-element_type="widget" data-widget_type="heading.default">
            <div class="elementor-widget-container text-center">
              <h3 class="elementor-heading-title elementor-size-default">Join the host of enterprises
                automating<br> critical workflows and conversations.</h3></div>
          </div>
          <div
            class="elementor-element elementor-element-0b7b9a3 elementor-align-center elementor-button-type--primary elementor-button-color--blue elementor-button-fill--filled elementor-widget elementor-widget-button"
            data-id="0b7b9a3" data-element_type="widget" data-widget_type="button.default">
            <div class="elementor-widget-container">
              <div class="elementor-button-wrapper">
                <a href="{{route('book-demo')}}"
                   class="elementor-button-link elementor-button elementor-size-lg btn-primary btn-blue btn-fill--filled"
                   role="button">
                  <span class="elementor-button-content-wrapper">
                                        <span class="elementor-button-icon elementor-align-icon-right">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="10"
                                                 viewBox="0 0 13 10" fill="none">
                                                <line x1="0.75" y1="-0.75" x2="10.25" y2="-0.75"
                                                      transform="matrix(1 8.73741e-08 8.74713e-08 -1 0.120605 4.41058)"
                                                      stroke="white" stroke-width="1.5"
                                                      stroke-linecap="round"></line>
                                                <path d="M8.12061 8.89105L11.8796 5.12994L7.89795 1.14605"
                                                      stroke="white" stroke-width="1.5"
                                                      stroke-linecap="round"></path>
                                            </svg>
                                        </span>
                                        <span class="elementor-button-text">Book a Demo</span>
                                    </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
