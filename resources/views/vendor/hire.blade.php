@extends('master.master')

@section('title')

    Ghumantey | Hire

@endsection

@section('content')
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bike.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Hire Bike</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section contact-section ftco-degree-bg">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-6 offset-3">
                    <h2 class="h4">Fill the form</h2>

                <div class="col-md-12 ">

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




                        <form action="{{route('message.store')}}" method="post">
                            <input type="hidden" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Your Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Your Email" required>
                            </div>
                            <div class="form-group">
                                <label>Mode</label>
                                <select class="form-control" name="people" id="people">
                                    <option value="" selected>---select any mode---</option>
                                    <option value="bsc.csit">Solo</option>
                                    <option value="bba">Guide</option>
                                </select>
                            </div>
                            <div class="form-group" style="height: 500px;">
                                <label>Select from Map</label>
                                <p id="map">
                                </p>
                                <br>
                                <button class="btn btn-success" id="confirmPosition">Confirm Position</button>
                                <br>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="vehicle" value="Bike">
                                Agree to  <a data-toggle="modal" data-target="#myModal" style="color: red">Terms and Conditions</a>
                            </div>
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">BIKE RENTAL SERVICE REGULATIONS</h4>
                                            <button  class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <p>1) To rent a bike the user must produce a valid ID . The bike must be returned within the scheduled time, in the
                                                same place where the bike was rented.<br>
                                                2) Both the user and the service manager will check the bike functionality during the delivery. On accepting the
                                                bike the user states that it is mechanically working and has been checked by himself.<br>
                                                3) The bike must be used only as a transport medium. The user must take care of the bike. All competitions and
                                                dangerous handling are prohibited. The user must use the bike taking care of everything, including the bike
                                                itself and its accessories.<br>
                                                4) It is strictly prohibited to use the bike for any commercial activity and it is forbidden to give it to someone else.
                                                5) The user must respect the rules of the road, rules that he declares he knows.
                                                6) Use of the bike requires physical suitability and technical knowledge from the bike rider. The user states he
                                                has the right ability and competence.<br>
                                                7) Any event, injury or damage caused by the bike will be only responsibility of the bike user. He will therefore
                                                be responsible for damages provoked by the bike to himself, to third person, to the environment and to the bike
                                                itself. No indemnity can be requested to the service manager .<br>
                                                8) Payment Terms: a deposit of 25% non refundable deposit is required when booking. . The balance must be
                                                paid 30 days before arrival. The rental value of less than € 200 shall be paid in full at time of booking.
                                                Payments are in cash, any costs for payment in other currencies, the exchange costs will be charged to the
                                                customer.<br>
                                                9) Cancellation and refund: the cancellation of reservations must be notified with email or fax, the penalties are
                                                as follows:<br>
                                                15 days or more before the rental 25% of the total.<br>
                                                14 days or less before the rental 90% of the total.<br>
                                                There is no refund for hire started. Refunds will be made within thirty days of receipt of notice of termination.
                                                We reserve the right to cancel a rental before delivery for any reason, in which case a refund of 100% of the
                                                amount paid will be made at least 30 days or before the expected delivery date of booking. Are excluded from
                                                the refund any costs incurred by the customer for the reservation.<br>
                                                10)) Delivery: the client acknowledges that PSB Ltd. will do its best to deliver and pick up the bikes at the times
                                                and places agreed, but due to force majuro<br>
                                                The customer agrees to comply with the appointments of delivery and collection of bicycles and authorizes PSB
                                                srl to charge your credit card any more expenses (personnel, highway tolls, meals, lodging, etc.) Incurred by
                                                him for non-compliance of the times delivery.<br>
                                                Any changes to the place of delivery at the end of the rental shall be communicated by e-mail or by phone 48
                                                hours before returning.<br>
                                                11) In the case of any damage caused to the rented bike the user will have to pay for it. The cost of the damage
                                                will be judged by the service manager when the bike is returned.<br>
                                                12) In case of theft of the bike, non-return of the bike or non-repairable damage to the bike, the user will have to
                                                refund the already fixed amount:<br>
                                                • Ciitybike  $8,
                                                • Slowbike,Trekking and Hybrid $12 ,
                                                • MoterBike $15</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Send Request" class="btn btn-primary py-3 px-5">
                            </div>

                        </form>

                    </div>

                </div>
            </div>
    </section>
    <script>
        // Get element references
        var confirmBtn = document.getElementById('confirmPosition');
        var onClickPositionView = document.getElementById('onClickPositionView');
        var onIdlePositionView = document.getElementById('onIdlePositionView');
        var map = document.getElementById('map');

        // Initialize LocationPicker plugin
        var lp = new locationPicker(map, {
            setCurrentPosition: true, // You can omit this, defaults to true
            lat:27.670791,
            lng: 85.340058
        }, {
            zoom: 15 // You can set any google map options here, zoom defaults to 15
        });

        // Listen to button onclick event
        confirmBtn.onclick = function () {
            // Get current location and show it in HTML
            var location = lp.getMarkerPosition();
            onClickPositionView.innerHTML = 'The chosen location is ' + location.lat + ',' + location.lng;
        };

        // Listen to map idle event, listening to idle event more accurate than listening to ondrag event
        google.maps.event.addListener(lp.map, 'idle', function (event) {
            // Get current location and show it in HTML
            var location = lp.getMarkerPosition();
            onIdlePositionView.innerHTML = 'The chosen location is ' + location.lat + ',' + location.lng;
        });
    </script>


@endsection
