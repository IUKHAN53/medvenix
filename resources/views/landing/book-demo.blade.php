@extends('layouts.layoutLanding')
@section('styles')
  <link rel="stylesheet" href="{{asset('landing/assets/css/book-now.css')}}">
@endsection
@section('content')
  <div data-elementor-type="wp-page" data-elementor-id="8" class="elementor elementor-8"
       data-elementor-post-type="page">
    <section
      style="min-height: 80vh;"
      class="elementor-section elementor-top-section elementor-element elementor-element-2d615dd hyro-section_hero hyro-section_hero--demo elementor-section-boxed elementor-section-height-default elementor-section-height-default">
      <div class="elementor-container elementor-column-gap-no">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6da175d"
             data-id="6da175d" data-element_type="column">
          <div class="elementor-widget-wrap elementor-element-populated">
{{--            <div class="elementor-element elementor-element-1f3b2b3 elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-image"--}}
{{--                 data-id="1f3b2b3" data-element_type="widget" data-widget_type="image.default">--}}
{{--              <img decoding="async" width="261" height="133"--}}
{{--                   src="{{asset('landing/assets/img/book-now-svg.svg')}}" alt="">--}}
{{--            </div>--}}
{{--            <div class="elementor-element elementor-element-8799aec elementor-hidden-desktop elementor-widget elementor-widget-image"--}}
{{--                 data-id="8799aec" data-element_type="widget" data-widget_type="image.default">--}}
{{--              <div class="elementor-widget-container">--}}
{{--                <img decoding="async" width="135" height="101"--}}
{{--                     src="{{asset('landing/assets/img/book-now-svg-mobile.svg')}}" alt="">--}}
{{--              </div>--}}
{{--            </div>--}}
            <section
              class="elementor-section elementor-inner-section elementor-element elementor-element-134684a elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default"
              data-id="134684a" data-element_type="section">
              <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-e95f5ba"
                     data-id="e95f5ba" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-cd7e217 d-h3 m-h1 elementor-widget elementor-widget-heading"
                         data-id="cd7e217" data-element_type="widget"
                         data-widget_type="heading.default">
                      <div class="elementor-widget-container">
                        <h1 class="elementor-heading-title elementor-size-default">More
                          conversions come<br>
                          from <i>better</i> conversations.</h1></div>
                    </div>
                    <div class="elementor-element elementor-element-e04cc47 elementor-widget elementor-widget-text-editor"
                         data-id="e04cc47" data-element_type="widget"
                         data-widget_type="text-editor.default">
                      <div class="elementor-widget-container">
                        <p>Get a customized Medvenix demo based on your own data, without lifting a
                          finger. Experience your key business use cases in action from the
                          very first touchpoint.</p></div>
                    </div>
                  </div>
                </div>
                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-dea0ba0 hyro-form-wrapper hyro-form-wrapper--light"
                     data-id="dea0ba0" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-d7a1109 elementor-widget elementor-widget-heading"
                         data-id="d7a1109" data-element_type="widget"
                         data-widget_type="heading.default">
                      <div class="elementor-widget-container">
                        <h6 class="elementor-heading-title elementor-size-default">Book a
                          One-on-One Demo</h6></div>
                    </div>
                    <div class="elementor-element elementor-element-446cc2e elementor-button-align-stretch elementor-form-style--multi_field elementor-form-color--dark elementor-form-button--pink elementor-form-button--filled elementor-widget elementor-widget-form">
                      <div class="elementor-widget-container">
                        <form class="elementor-form" method="post" name="Demo Form"
                              novalidate="novalidate">
                          <input type="hidden" name="post_id" value="8">
                          <input type="hidden" name="form_id" value="446cc2e">
                          <input type="hidden" name="referer_title"
                                 value="Request a Demo - Medvenix.ai">

                          <input type="hidden" name="queried_id" value="8">

                          <div class="elementor-form-fields-wrapper elementor-labels-above">
                            <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-firstname elementor-col-50 elementor-field-required">
                              <input size="1" type="text" name="form_fields[firstname]"
                                     id="form-field-firstname"
                                     class="elementor-field elementor-size-sm  elementor-field-textual"
                                     placeholder="First Name" required>
                            </div>
                            <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-lastname elementor-col-50 elementor-field-required">
                              <input size="1" type="text" name="form_fields[lastname]"
                                     id="form-field-lastname"
                                     class="elementor-field elementor-size-sm  elementor-field-textual"
                                     placeholder="Last Name" required>
                            </div>
                            <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-100 elementor-field-required">
                              <input size="1" type="email" name="form_fields[email]"
                                     id="form-field-email"
                                     class="elementor-field elementor-size-sm  elementor-field-textual"
                                     placeholder="Work Email" required>
                            </div>
                            <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-jobtitle elementor-col-100 elementor-field-required">
                              <input size="1" type="text" name="form_fields[jobtitle]"
                                     id="form-field-jobtitle"
                                     class="elementor-field elementor-size-sm  elementor-field-textual"
                                     placeholder="Job Title" required>
                            </div>
                            <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-company elementor-col-100 elementor-field-required">
                              <input size="1" type="text" name="form_fields[company]"
                                     id="form-field-company"
                                     class="elementor-field elementor-size-sm  elementor-field-textual"
                                     placeholder="Company" required>
                            </div>
                            <div class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-how_did_you_hear_about_us_ elementor-col-100">
                              <select name="form_fields[how_did_you_hear_about_us_]"
                                      id="form-field-how_did_you_hear_about_us_"
                                      class="elementor-field-textual elementor-size-sm">
                                <option value="">How Did You Hear About Us?</option>
                                <option value="Google / Search engine">Google /
                                  Search engine
                                </option>
                                <option value="Social media">Social media</option>
                                <option value="Ad / Publication">Ad / Publication
                                </option>
                                <option value="Word of mouth">Word of mouth</option>
                                <option value="Event">Event</option>
                              </select>
                            </div>

                            <div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
                              <button type="submit" class="btn btn-primary btn-blue btn-lg w-100">
                                Let's Talk
                              </button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
