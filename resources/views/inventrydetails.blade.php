@extends('layouts.main')
@section('page_title', 'Inventry Details')

@section('content')

<h4>Items needs to be supplied</h4>
<hr>


<div class="container">
  <h5>Goods</h5>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Item</th>
        <th>Quantity</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Towels</td>
        <td>100</td>
        
      </tr>
      <tr>
        <td>Plates</td>
        <td>500</td>
        
      </tr>
      
    </tbody>
  </table>
</div>


<div class="container">
  <h5>Vegitables</h5>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Item</th>
        <th>Quantity</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Potatoes</td>
        <td>20kg</td>
        
      </tr>
      <tr>
        <td>Beans</td>
        <td>50kg</td>
        
      </tr>
      
    </tbody>
  </table>
</div>





@endsection