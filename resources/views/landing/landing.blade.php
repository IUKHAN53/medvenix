@extends('layouts.layoutLanding')
@section('styles')
  <link rel="stylesheet" href="{{asset('landing/assets/css/home.css')}}">
  <link rel="stylesheet" href="{{asset('landing/assets/css/custom-home.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css" rel="stylesheet">
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
                The next generation of care for women and families
              </h1>
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
                   href="#psoev5ul2t">
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
                src="{{asset('landing/assets/videos/about-us-bg-video.mp4')}}"
                alt=""
                class="img-fluid position-absolute"
                style="z-index: 2; top: -100px; right: -100px; width: 100%;border-radius: 2px;"
                autoplay="" loop="" muted="" playsinline=""></video>
              <img
                src="{{asset('landing/assets/img/circle-shape-green.svg')}}"
                class="position-absolute"
                style="z-index: 1; top: -200px; left: -50px; width: 400px; height: 400px"
                loading="lazy" alt="" class=" d-none d-sm-block">
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
                    class="elementor-section elementor-inner-section elementor-element elementor-element-54599a4 elementor-section-full_width hyro-section_skill elementor-section-height-default elementor-section-height-default"
                    data-id="54599a4" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                      <div
                        class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-a5c371f"
                        data-id="a5c371f" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                          <div
                            class="elementor-element elementor-element-7baf1279 hyro-tagline elementor-widget elementor-widget-heading"
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
                  <section>

                  </section>
                </div>
              </div>
            </div>
          </section>
        </div>
      </main>
    </div>
  </div>
@endsection

