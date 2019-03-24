@extends('layouts.main')

@section('page_title', 'Facilities')

@section('content')


<h4>Our Facilities </h4>
<hr>
<div>
  <img src="{{ url('images/pool1.jpg') }}" style="width: 1000px; height: 600px" alt="">
  <h4>Pool Area</h4>
  <hr>
  <p>pool complex at The Hotel Hershey features an infinity edge adult pool and whirlpool*, family pool with zero-grade entry, two large slides, and a kiddie spray deck. Relax on lounge chairs and enjoy a refreshing drink or meal from Poolside.  </p>
 <a href="{{url('pooldetails')}}" class="btn btn-primary">Read More</a>
 <br>
 </div>
 <br>
 <div>
  <img src="{{ url('images/spa.jpg') }}" style="width: 1000px; height: 600px" alt="">
  <br>
  <h4>Spa</h4>
  <hr>
  <p>pool complex at The Hotel Hershey features an infinity edge adult pool and whirlpool*, family pool with zero-grade entry, two large slides, and a kiddie spray deck. Relax on lounge chairs and enjoy a refreshing drink or meal from Poolside.  </p>
 <a href="{{url('spadetails')}}" class="btn btn-primary">Read More</a>
 <br>
 </div>
 <br>
 <div>
  <img src="{{ url('images/gym2.jpg') }}" style="width: 1000px; height: 600px" alt="">
  <br>
  <h4>Gym</h4>
  <hr>
  <p>pool complex at The Hotel Hershey features an infinity edge adult pool and whirlpool*, family pool with zero-grade entry, two large slides, and a kiddie spray deck. Relax on lounge chairs and enjoy a refreshing drink or meal from Poolside.  </p>
 <a href="{{url('gymdetails')}}" class="btn btn-primary">Read More</a>
 <br>
 </div>
 <div>
  <img src="{{ url('images/laun.jpg') }}" style="width: 1000px; height: 600px" alt="">
  <br>
  <h4>Launderette</h4>
  <hr>
  <p>pool complex at The Hotel Hershey features an infinity edge adult pool and whirlpool*, family pool with zero-grade entry, two large slides, and a kiddie spray deck. Relax on lounge chairs and enjoy a refreshing drink or meal from Poolside.  </p>
 <a href="{{url('laundetails')}}" class="btn btn-primary">Read More</a>
 <br>
 </div>
 <div>
  <img src="{{ url('images/tennis1.jpg') }}" style="width: 1000px; height: 600px" alt="">
  <br>
  <h4>Tennis Court</h4>
  <hr>
  <p>pool complex at The Hotel Hershey features an infinity edge adult pool and whirlpool*, family pool with zero-grade entry, two large slides, and a kiddie spray deck. Relax on lounge chairs and enjoy a refreshing drink or meal from Poolside.  </p>
 <a href="{{url('tennisdetails')}}" class="btn btn-primary">Read More</a>
 <br>
 </div>
  </div>
  </div>
@endsection