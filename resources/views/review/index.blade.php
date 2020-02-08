

@extends('layouts.app')

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
                      <input type="text"class="form-control" name="name" id="name">
                      <label for="email" >Email</label>
                      <input type="email"class="form-control" name="email" id="email">
                      <label for="title" >Title</label>
                      <input type="text"class="form-control" name="title" id="title">
                      <label for="review" >Review</label>
                      <input type="text"class="form-control" name="review" id="review">
                      <input type="submit" class="btn btn-primary" value="Review">
                  </form>
              </div>
            </div>

@endsection
       </div>


