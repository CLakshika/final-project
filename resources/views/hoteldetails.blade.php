@extends('layouts.main')
@section('page_title', 'Hotel Details')

@section('content')

<div class="col-md-12">
<h3>About us</h3>
<img src="{{url('images/Hotel1.jpg')}}" style="width:1000px;height:600px;">
<hr>
<br>
<p>{{$hotel->description}}</p> 



<h3>Contact Details</h3>
<hr>
<br>
<div class="col-md-12">

<h3>{{$hotel->name}}</h3>	
<p><span>Id:</span>{{$hotel->id}}</p> 

<p><span>Location:</span>{{$hotel->location}}</p>
<p><span>Address:</span>{{$hotel->address}}</p>
</div>
<div class="col-md-3">
<p><span>Phone:</span>{{$hotel->telephone}}</p>
</div>
<div class="col-md-3">
<p><span>Email:</span>{{$hotel->email}}</p>
</div>
<div class="col-md-3">
<p><span>Website:</span>{{$hotel->website}}</p></div>

<div class="col-sm-12">
    
<h3>Weather Condition</h3>


<h5 style="color: dodgerblue ">Current Weather in {{ $city }} : {{ $weather }}&#8451</h5>




<img src="{{url('images/weather3.gif')}}">
</div>


@endsection