@extends('layouts.main')
@section('page_title', 'Contact')

@section('content')


      <div class="container bg-light">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Contact Information</h2>
            <hr>

          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Address:</span> 561/56,Public Fair Road,Anuradhapura</p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@hbooker.com</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Website</span> <a href="#">hbooker.com</a></p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
            <form action="store">
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name" value=''>
              </div>
              <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Your Email" value=''>
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="Subject" value=''>
              </div>
              <div class="form-group">
                <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
            <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=561%2F56%2Cpublic%20fair%20road%2CAnuradhapura%2CSri%20Lanka&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style>Google Maps by <a href="https://www.embedgooglemap.net" rel="nofollow" target="_blank">Embedgooglemap.net</a></div>
            <br>
            <div>
            @include('weather')
            </div>
          </div>


@endsection