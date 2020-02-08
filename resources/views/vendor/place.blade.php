
@extends('master.master')

@section('title')

Ghumantey | Place
@endsection
    @section('content')
    <div class="hero-wrap js-fullheight" style="background-image: url('images/g0.jpg');">
      <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">POKHARA</h1>
                </div>
            </div>
        </div>
    </div>


    <section class="ftco-section ftco-destination">
        <div class="container">
            <div class="row justify-content-start mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate">
                    <span class="subheading"><h5><strong>Culture & Foods</strong></h5></span>
                    <h2 class="mb-4"><strong>Our Gallery</strong> </h2>
                </div>
            </div>
            <section class="gallery-block compact-gallery">
                <div class="container">
                    <div class="heading">
                        <h2>Compact Gallery</h2>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-md-6 col-lg-4 item zoom-on-hover">
                            <a class="lightbox" href="images/rice.jpg">
                                <img class="img-fluid image" src="images/rice.jpg" style="height: 271px; width:370px">
                                <span class="description">
                            <span class="description-heading">Thakali Food</span>
                            <span class="description-body">Daal Bhaat Power 24 hour</span>
                        </span>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 item zoom-on-hover">
                            <a class="lightbox" href="images/dish.jpg">
                                <img class="img-fluid image" src="images/dish.jpg" style="height: 271px">
                                <span class="description">
                            <span class="description-heading">Fish Dish</span>
                            <span class="description-body">Local fish dishes from Fewa lake </span>
                        </span>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 item zoom-on-hover">
                            <a class="lightbox" href="images/g1.jpg">
                                <img class="img-fluid image" src="images/g1.jpg" style="height: 271px">
                                <span class="description">
                            <span class="description-heading">Lorem Ipsum</span>
                            <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </span>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 item zoom-on-hover">
                            <a class="lightbox" href="images/gurung.jpg">
                                <img class="img-fluid image" src="images/gurung.jpg" style="height: 271px">
                                <span class="description">
                            <span class="description-heading">Gurung</span>
                            <span class="description-body">The Gurung people of Pokhara in cultural attire. </span>
                        </span>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 item zoom-on-hover">
                            <a class="lightbox" href="images/lady.jpg">
                                <img class="img-fluid image" src="images/lady.jpg" style="height: 271px">
                                <span class="description">
                            <span class="description-heading">Pokhreli Lady</span>
                            <span class="description-body">A pokhreli woman picking buckwheat on the shadows of Machhapuchre!</span>
                        </span>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 item zoom-on-hover">
                            <a class="lightbox" href="images/g1.jpg">
                                <img class="img-fluid image" src="images/g1.jpg" style="height: 271px">
                                <span class="description">
                            <span class="description-heading">Lorem Ipsum</span>
                            <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </span>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 item zoom-on-hover">
                            <a class="lightbox" href="images/stupa.jpg">
                                <img class="img-fluid image" src="images/stupa.jpg" style="height: 271px">
                                <span class="description">
                            <span class="description-heading">Peace Pagoda</span>
                            <span class="description-body">Peace pagoda in Pokhara.</span>
                        </span>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 item zoom-on-hover">
                            <a class="lightbox" href="images/fishery.jpg">
                                <img class="img-fluid image" src="images/fishery.jpg" style="height: 271px">
                                <span class="description">
                            <span class="description-heading">Lorem Ipsum</span>
                            <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </span>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 item zoom-on-hover">
                            <a class="lightbox" href="images/boat.jpg">
                                <img class="img-fluid image" src="images/boat.jpg">
                                <span class="description">
                            <span class="description-heading">Boat in fewa taal</span>
                            <span class="description-body">Wonderfull view of Fewa taal with machhapuchre in background</span>
                        </span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <section class="ftco-section ftco-destination">
        <div class="container">
            <div class="row justify-content-start mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate">
                    <span class="subheading"><h5><strong>Our Offer</strong></h5></span>
                    <h2 class="mb-4"><strong>More</strong> Packages</h2>
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
                                    <h3><a href="#">Paragliding in SarangKot</a></h3>
                                    <span class="listing">15 Listing</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="destination">
                                <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/g2.jpg);">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">
                                    <h3><a href="#">Homestay</a></h3>
                                    <span class="listing">20 Listing</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="destination">
                                <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/g3.jpg);">
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
                                <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/annapurna.jpg);">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">
                                    <h3><a href="#">Annapurna Trail</a></h3>
                                    <span class="listing">3 Listing</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="destination">
                                <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/boating.jpg);">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">
                                    <h3><a href="#">Fewa Lake</a></h3>
                                    <span class="listing">3 Listing</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="destination">
                                <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/g6.jpg);">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">
                                    <h3><a href="#">Janakpur</a></h3>
                                    <span class="listing">3 Listing</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    @endsection
