

@extends('master.review')

@section('content')
       <div class="container">
            <div class="row">

              <div class="col-md-6 offset-3">
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
                  <h3>Review Form</h3>
                  <form action="{{route('review.store')}}" method="post">
                      @csrf

                      <label for="name" >Name</label>
                      <input type="text"class="form-control" name="name" id="name" value="{{auth()->user()->name}}">
                      <label for="email" >Email</label>
                      <input type="email"class="form-control" name="email" id="email" value="{{auth()->user()->email}}">
                      <label for="title" >Title</label>
                      <input type="text"class="form-control" name="title" id="title">
                      <label for="review" >Review</label>
                      <input type="text"class="form-control" name="review" id="review">
                      <label for="rating">Rating</label>
                      <select name="rating" id="rating" class="form-control">
                          <option value="" selected>-choose rating-</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                      </select>
                      <br>
                      <input type="submit" class="btn btn-success" value="Submit Review">

                  </form>
                  <br>
                  <a href="/" class="btn btn-primary">Return to Home</a>
              </div>
            </div>
       </div>

@endsection

