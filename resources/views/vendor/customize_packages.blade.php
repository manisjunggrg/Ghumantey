@extends('master.master')

@section('title')

    Ghumantey | Customized_packages

@endsection

@section('content')
    <div class="hero-wrap js-fullheight" style="background-image: url('images/visit1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Packages</h1>

                </div>
            </div>

        </div>
    </div>


    <section class="ftco-section ftco-degree-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 sidebar">
                    <div class="card">
                        <div class="card-header">{{ __('Fill up the form for Custom packages') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('client.store') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Country" class="col-md-4 col-form-label text-md-right">{{ __('Places') }}</label>

                                    <div class="col-md-6">
                                        <input id="Country" type="text" class="form-control @error('Country') is-invalid @enderror" name="Country" value="{{ old('Country') }}" required autocomplete="Country">

                                        @error('Country')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="days" class="col-md-4 col-form-label text-md-right">{{ __('Days') }}</label>

                                    <div class="col-md-6">
                                        <input id="days" type="number" class="form-control @error('days') is-invalid @enderror" name="days" value="{{ old('days') }}" required autocomplete="days">

                                        @error('days')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>




                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Submit') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-4 ftco-animate">
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
                                        <hr>
                                        <p class="bottom-area d-flex">
                                            <span class="ml-auto"><a href="#">Book Now</a></span>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ftco-animate">
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
                                        <hr>
                                        <p class="bottom-area d-flex">
                                            <span class="ml-auto"><a href="#">Book Now</a></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ftco-animate">
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
                                        <hr>
                                        <p class="bottom-area d-flex">
                                            <span class="ml-auto"><a href="#">Book Now</a></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ftco-animate">
                            <div class="destination">
                                <a href="/place" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/g3.jpg);">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">

                                    <h3><a href="#">Bhaktapur</a></h3>

                                    <span class="listing">10 Listing</span>
                                    <hr>
                                    <p class="bottom-area d-flex">
                                        <span class="ml-auto"><a href="#">Book Now</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ftco-animate">
                            <div class="destination">
                                <a href="/place" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/g6.jpg);">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">

                                    <h3><a href="#">Janakpur Dham</a></h3>
                                    <span class="listing">3 Listing</span>
                                    <hr>
                                    <p class="bottom-area d-flex">
                                        <span class="ml-auto"><a href="#">Book Now</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ftco-animate">
                            <div class="destination">
                                <a href="/place" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/makalu.jpg);">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">

                                    <h3><a href="#">Makalu Barun NP</a></h3>
                                    <span class="listing">6 Listing</span>
                                    <hr>
                                    <p class="bottom-area d-flex">
                                        <span class="ml-auto"><a href="#">Book Now</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col text-center">
                            <div class="block-27">
                                <ul>
                                    <li><a href="#">&lt;</a></li>
                                    <li class="active"><span>1</span></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">&gt;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- .col-md-8 -->
            </div>
        </div>
    </section> <!-- .section -->

@endsection
