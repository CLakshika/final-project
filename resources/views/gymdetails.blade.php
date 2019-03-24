@extends('layouts.main')
@section('page_title', 'Gymnasium')

@section('content')

<img src="{{ url('images/gym3.jpg') }}" style="width: 1000px; height: 600px" alt="">
<h1>Gymnasium</h1>
<hr>
<br>
<p>With unparalleled views of the city, in a contemporary setting, the Fitness Centre features a squash court and a complete range of cardiovascular machines and weight-training equipment. Certified trainers are available to help guests maximize their workouts. </p>
<h4> Hours </h4>
<hr>
<div class="container">
<table class="table table-hover">
    <thead>
      <tr>
        <th>Daily</th>
        <th>24 Hours</th>
        
      </tr>
    </thead>
    
  </table>
</div>
@endsection