@extends('master.master')

@section('title')

Ghumantey | Contact

@endsection

@section('content')
    <div class="hero-wrap js-fullheight" style="background-image: url('images/visit5.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Contact Us</h1>
          </div>
        </div>
      </div>
    </div>
    <section class="ftco-section">
        <div class="container">
            <div class="row d-md-flex">
                <div class="col-md-6 ftco-animate img about-image" style="background-image: url(images/bunjee.jpg);">
                </div>
                <div class="col-md-6 ftco-animate p-md-5">
                    <div class="row">
                        <div class="col-md-12 nav-link-wrap mb-5">
                            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-mission" role="tab" aria-controls="v-pills-mission" aria-selected="false">Who we are?</a>
                                <a class="nav-link" id="v-pills-whatwedo-tab" data-toggle="pill" href="#v-pills-whatwedo" role="tab" aria-controls="v-pills-whatwedo" aria-selected="true">What we do?</a>
                                <a class="nav-link" id="v-pills-goal-tab" data-toggle="pill" href="#v-pills-goal" role="tab" aria-controls="v-pills-goal" aria-selected="false">Our goal</a>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex align-items-center">

                            <div class="tab-content ftco-animate" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-mission" role="tabpanel" aria-labelledby="v-pills-mission-tab">
                                    <div>
                                        <h2 class="mb-4">We are the Ghumanteys!</h2>
                                        <p>First of all the word ghumantey is derived from a nepali word '' ghumantey which means traveller. We have a team of people who have the adrenaline boost when they even think about travelling. </p>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
                                    <div>
                                        <h2 class="mb-4">We are the Ghumanteys!</h2>
                                        <p>Lorem</p>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-goal" role="tabpanel" aria-labelledby="v-pills-goal-tab">
                                    <div>
                                        <h2 class="mb-4">Help Our Customer</h2>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
		<section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-4">
            <p><span>Address:</span> Kathford International college </p>
          </div>
          <div class="col-md-4">
            <p><span>Phone:</span> <a href="tel://1234567920">+977 9868284426</a></p>
          </div>
          <div class="col-md-4">
            <p><span>Email:</span> <a href="mailto:info@yoursite.com">74-ko-basanta@gmail.com</a></p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">




            <form action="{{route('message.store')}}" method="post">
                <input type="hidden" method="post">
                @csrf
                <div class="content-wrapper">
                    <div class="container">
                        @if (session()->has('error'))
                            <div class="alert alert-danger">
                                {!! session()->get('error') !!}

                            </div>
                        @endif
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {!! session()->get('success') !!}

                            </div>
                        @endif

                    </div>
                    </div>
              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Your Name" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Your Email" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea name="message" id="message" cols="30" rows="7"  class="form-control" placeholder="Message" required></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>

          </div>

          <div class="col-md-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14134.00727900619!2d85.340132!3d27.670881!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x368dbad07042b560!2sKathford%20Int&#39;l%20College%20of%20Engineering%20and%20Management!5e0!3m2!1sen!2snp!4v1581008687052!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </section>

    @endsection
