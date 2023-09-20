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
        <source src="{{$settings->about_video ?? asset('landing/assets/videos/about-us-video.mp4')}}" type="video/mp4">
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
                <div class="hyro-section_team__item__top" style="border-radius: 20px;">
                  <figure class="hyro-section_team__item__thumbnail">
                    <img width="344" height="360" decoding="async"
                         src="{{$member->image}}"
                         style="border-radius: 20px;"
                         alt="" title="">
                    <img width="688" height="720" decoding="async"
                         src="{{$member->image}}"
                         style="border-radius: 20px;"
                         alt="" title="">
                  </figure>
                  <div class="hyro-section_team__item__top-hover">
                    <figure>
                      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="67px" height="56px" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g><path style="opacity:0.828" fill="#f1f4fa" d="M 9.5,-0.5 C 24.8333,-0.5 40.1667,-0.5 55.5,-0.5C 58.8333,3.5 62.5,7.16667 66.5,10.5C 66.5,11.5 66.5,12.5 66.5,13.5C 55.5306,27.4758 44.5306,41.4758 33.5,55.5C 32.8333,55.5 32.1667,55.5 31.5,55.5C 21.1858,41.1918 10.5191,27.1918 -0.5,13.5C -0.5,12.8333 -0.5,12.1667 -0.5,11.5C 3.2034,7.79765 6.53673,3.79765 9.5,-0.5 Z"/></g>
                        <g><path style="opacity:1" fill="#1c1957" d="M 12.5,2.5 C 26.1829,2.16746 39.8496,2.50079 53.5,3.5C 56.5,6.83333 59.5,10.1667 62.5,13.5C 52.6667,25.8333 42.8333,38.1667 33,50.5C 23.1834,38.8619 13.85,26.8619 5,14.5C 4.33333,13.5 4.33333,12.5 5,11.5C 8.08843,8.91856 10.5884,5.91856 12.5,2.5 Z"/></g>
                        <g><path style="opacity:1" fill="#eeeef3" d="M 42.5,13.5 C 40.412,15.3356 39.0787,17.6689 38.5,20.5C 37.5,20.8333 36.8333,21.5 36.5,22.5C 35.8478,23.7251 34.6811,24.3917 33,24.5C 31.6153,24.4857 30.4486,24.1524 29.5,23.5C 27.5712,18.6285 24.9045,14.2951 21.5,10.5C 21.9704,9.30652 22.9704,8.63985 24.5,8.5C 25.5,8.66667 26.5,8.83333 27.5,9C 29.2112,11.5888 31.0445,14.0888 33,16.5C 34.9986,14.5065 36.4986,12.1732 37.5,9.5C 39.8333,8.16667 42.1667,8.16667 44.5,9.5C 43.3698,10.6223 42.7031,11.9557 42.5,13.5 Z"/></g>
                        <g><path style="opacity:1" fill="#f7f9fb" d="M 38.5,27.5 C 38.5,25.1667 38.5,22.8333 38.5,20.5C 40.588,18.6644 41.9213,16.3311 42.5,13.5C 43.1174,13.3893 43.6174,13.056 44,12.5C 44.4993,17.4889 44.6659,22.4889 44.5,27.5C 42.5,27.5 40.5,27.5 38.5,27.5 Z"/></g>
                        <g><path style="opacity:1" fill="#f7fafc" d="M 21.5,12.5 C 25.4161,16.6748 27.4161,21.6748 27.5,27.5C 25.5,27.5 23.5,27.5 21.5,27.5C 21.5,22.5 21.5,17.5 21.5,12.5 Z"/></g>
                        <g><path style="opacity:1" fill="#575b88" d="M 21.5,10.5 C 24.9045,14.2951 27.5712,18.6285 29.5,23.5C 28.8333,24.8333 28.1667,26.1667 27.5,27.5C 27.4161,21.6748 25.4161,16.6748 21.5,12.5C 21.5,11.8333 21.5,11.1667 21.5,10.5 Z"/></g>
                        <g><path style="opacity:1" fill="#696f96" d="M 42.5,13.5 C 41.9213,16.3311 40.588,18.6644 38.5,20.5C 39.0787,17.6689 40.412,15.3356 42.5,13.5 Z"/></g>
                        <g><path style="opacity:1" fill="#7c85a7" d="M 38.5,20.5 C 38.5,22.8333 38.5,25.1667 38.5,27.5C 37.8333,25.8333 37.1667,24.1667 36.5,22.5C 36.8333,21.5 37.5,20.8333 38.5,20.5 Z"/></g>
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
