@extends('layouts/master')


@section('title')
Flourisch &mdash; Promote your event here!
@endsection

@section('content')

    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/img_2a.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-10 text-center col-sm-12 element-animate">
              <h1>Make Your Event</h1>
              <p class="mb-5 sub-text">Share your event to our community and make everyone here know how amazing your works are!</p>
              <p><a href="login" class="btn btn-white btn-outline-white px-3 py-3">Get Started</a></p>
            </div>
          </div>
        </div>

      </div>

    </section>
       

    <section class="section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 element-animate ">
            <div class="media block-6 d-block text-center">
              <div>
                <img src="images/icon1.png" alt="">
              </div>
              <div class="media-body">
                <h3 class="heading">Promote your event</h3>
                <p>Let your event be known by participants</p>
              </div>
            </div>  

          </div>
          <div class="col-md-6 col-lg-4 element-animate ">
            <div class="media block-6 d-block text-center">
              <div>
                <img src="images/icon2.png" alt="">
              </div>
              <div class="media-body">
                <h3 class="heading">Identify the participant</h3>
                <p>Right place to find suitable participants genre that attracted to your event</p>
              </div>
            </div> 

          </div>
          <div class="col-md-6 col-lg-4 element-animate ">
            <div class="media block-6 d-block text-center">
              <div>
                <img src="images/icon3.png" alt="">
              </div>
              <div class="media-body">
                <h3 class="heading">Be the participant</h3>
                <p>Find the event that fulfill your need posted by the event organizer</p>
              </div>
            </div> 

          </div>
        </div>
      </div>
    </section>
   
    <section class="section element-animate">
      <div class="container">
        <div class="row align-items-center mb-5">
          <div class="col-md-5 pr-md-5 mb-5">
            <div class="block-41">
              <div class="block-41-subheading d-flex">
                <div class="block-41-number">01</div>
                <div class="block-41-line align-self-center mx-2"></div>
                <div class="block-41-subheading-2">Simple</div>
              </div>
              
              <div class="block-41-text">
                <p>Great seminar performer, Finding experience, or just curious with our community. All of that can be found only by using this application.</p>
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <img src="images/img_1_long.jpg" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </section>

    <section class="section element-animate bg-light">
      <div class="container">
        <div class="row align-items-center mb-5">
          <div class="col-md-5 pl-md-5 mb-5 order-md-2">
            <div class="block-41">
              <div class="block-41-subheading d-flex">
                <div class="block-41-number">02</div>
                <div class="block-41-line align-self-center mx-2"></div>
                <div class="block-41-subheading-2">Millenial Style</div>
              </div>
        
              <div class="block-41-text">
                <p>Sometimes we forgot to bring the required item when joining an event. Here, there is no need physical evidence like ticket but just bring your phone device and scan the barcode to to the entrance ! </p>
              </div>
            </div>
          </div>
          <div class="col-md-7 order-md-1">
            <img src="images/img_2_long.jpg" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
@endsection