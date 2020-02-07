@extends('master.master')

@section('title')

Ghumantey
@endsection
    @section('content')
    <div class="hero-wrap js-fullheight">
      <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" style="position: fixed;">
            <source src="images/logo.mp4" type="video/mp4">
        </video>
      <div class="container-fluid">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-3 offset-md-1 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 0.6 }"><strong>Nepal <br></strong> Lifetime experiences.</h1>
            <div class="block-17 my-4">
              <form action="/place" method="" class="d-block d-flex">

                  <div class="textfield-search one-third">

                  	<input type="text" class="form-control" placeholder="Ex: Search">
                  </div>
                <input type="submit" class="search-submit btn btn-primary" value="Search">
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-guarantee"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Best Price Guarantee</h3>
                <p>Our Best Price Guarantee means that you can be sure of booking at the best rate.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-like"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Travellers Love Us</h3>
                <p>We love our customers and they love us.
                    100% customer satisfaction is critical for success.
                    And we care a lot about our customers!
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-detective"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Best Travel Agent</h3>
                <p>We have a team of professional guides, guide cum porter and porter having decade long experience.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-support"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Our Dedicated Support</h3>
                <p>We have 24/7 hour friendly customer care support for your convenience.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-destination">
    	<div class="container">
    		<div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
            <h2 class="mb-4"><strong>Featured</strong> Destination</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="destination-slider owl-carousel ftco-animate">
    					<div class="item">
		    				<div class="destination">
		    					<a href="/place" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/g0.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">

		    						<h3><a href="#">Pokhara</a></h3>
		    						<span class="listing">15 Listing</span>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="/place" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/g2.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">

		    						<h3><a href="#">Chitwan</a></h3>

		    						<span class="listing">20 Listing</span>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="/place" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/g3.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">

		    						<h3><a href="#">Bhaktapur</a></h3>

		    						<span class="listing">10 Listing</span>
		    					</div>
		    				</div>
	    				</div>
                        <div class="item">
                            <div class="destination">
                                <a href="/place" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/ilam.jpg);">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">

                                    <h3><a href="#">Ilam</a></h3>

                                    <span class="listing">10 Listing</span>
                                </div>
                            </div>
                        </div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="/place" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/g4.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">

		    						<h3><a href="#">Everest Base Camp</a></h3>

		    						<span class="listing">3 Listing</span>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="/place" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/g5.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">

		    						<h3><a href="#">Dolakha</a></h3>

		    						<span class="listing">3 Listing</span>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="/place" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/g6.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">

		    						<h3><a href="#">Janakpur Dham</a></h3>
		    						<span class="listing">3 Listing</span>
		    					</div>
		    				</div>
	    				</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>


    <section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
          	<span class="subheading">Special Offers</span>
            <h2 class="mb-4"><strong>Top</strong> Tour Packages</h2>
          </div>
        </div>
    	</div>
    	<div class="container">
    		<div class="row">
                <div class="destination-slider owl-carousel ftco-animate">
    			<div class="col-sm col-md-3 col-lg ftco-animate">
    				<div class="destination">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/para.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">Paragliding in Pokhara </a></h3>
		    						<p class="rate">
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star-o"></i>
		    							<span>8 Rating</span>
		    						</p>
	    						</div>
	    						<div class="two">
	    							<span class="price">$60</span>
    							</div>
    						</div>
    						<p>Far far away, behind the world, far to the mountains,eternal nirvana.</p>
    						<p class="days"><span>3days 2nights</span></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<center><span class="ml-auto"><a href="#">Discover</a></span></center>
    						</p>
    					</div>
    				</div>
    			</div>
                    <div class="col-sm col-md-3 col-lg ftco-animate">
                        <div class="destination">
                            <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/rafting.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <div class="d-flex">
                                    <div class="one">
                                        <h3><a href="#">Rafting in trishuli </a></h3>
                                        <p class="rate">
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star-o"></i>
                                            <span>8 Rating</span>
                                        </p>
                                    </div>
                                    <div class="two">
                                        <span class="price">$90</span>
                                    </div>
                                </div>
                                <p>The first river you paddle runs through the rest of your life.</p>
                                <p class="days"><span>2days 1nights</span></p>
                                <hr>
                                <p class="bottom-area d-flex">
                                <center><span class="ml-auto"><a href="#">Discover</a></span></center>
                                </p>
                            </div>
                        </div>
                    </div>
    			<div class="col-sm col-md-3 col-lg ftco-animate">
    				<div class="destination">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/safari.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">Jeep Safari in Chitwan NP</a></h3>
		    						<p class="rate">
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star-o"></i>
		    							<span>4 Rating</span>
		    						</p>
	    						</div>
	    						<div class="two">
	    							<span class="price">$100</span>
    							</div>
    						</div>
    						<p>The jungle drive comes in a close popularity wildlife activity.</p>
    						<p class="days"><span>2days 1 night</span></p>
    						<hr>
    						<p class="bottom-area d-flex">
                            <center><span class="ml-auto"><a href="#">Discover</a></span></center>
    						</p>
    					</div>
    				</div>
    			</div>
                <div class="col-sm col-md-3 col-lg ftco-animate">
                    <div class="destination">
                        <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/homestay.jpg);">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-search2"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <div class="d-flex">
                                <div class="one">
                                    <h3><a href="#">Ghandruk Homestay</a></h3>
                                    <p class="rate">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star-o"></i>
                                        <span>4 Rating</span>
                                    </p>
                                </div>
                                <div class="two">
                                    <span class="price">$100</span>
                                </div>
                            </div>
                            <p>The jungle drive comes in a close popularity wildlife activity.</p>
                            <p class="days"><span>2days 1 night</span></p>
                            <hr>
                            <p class="bottom-area d-flex">
                            <center><span class="ml-auto"><a href="#">Discover</a></span></center>
                            </p>
                        </div>
                    </div>
                </div>
    			<div class="col-sm col-md-3 col-lg ftco-animate">
    				<div class="destination">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/bunjee.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">Bungee Jump at Bhote Koshi</a></h3>
		    						<p class="rate">
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star-o"></i>
		    							<span>8 Rating</span>
		    						</p>
	    						</div>
	    						<div class="two">
	    							<span class="price">$100</span>
    							</div>
    						</div>
    						<p>If you don’t take risks, you’ll have a wasted soul.Come fly with us!</p>
    						<p class="days"><span>2 days 1night</span></p>
    						<hr>
    						<p class="bottom-area d-flex">
                            <center><span class="ml-auto"><a href="#">Discover</a></span></center>
    						</p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
        </div>
    </section>


    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/g3.jpg);">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-4">Some fun facts</h2>
          </div>
        </div>
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="8848">0</strong>
		                <span>Happy Customers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="8848">0</strong>
		                <span>Destination Places</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="8848">0</strong>
		                <span>Hotels</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="8848">0</strong>
		                <span>Restaurant</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

@endsection
