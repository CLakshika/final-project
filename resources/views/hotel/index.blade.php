@extends('layouts.main')
@section('page_title', 'Hotels')

@section('content')


    <div class="container bg-light" ng-controller="HotelController">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
                <h2 class="h4">Hotel Information</h2>
                <hr>
            </div>
                Name: <p style="padding: 1%;"><input style=" border-radius: 5px" type="text" placeholder="Name" ng-model="hotel.name"></p>
                Location : <p style="padding: 1%;"><input style=" border-radius: 5px" type="text" placeholder="Location" ng-model="hotel.location"></p>
                Description: <p style="padding: 1%;"><input style=" border-radius: 5px" type="text" placeholder="Description" ng-model="hotel.description"></p>
        </div>
        <div class="row block-9">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Description</th>
                    <th width="1%"></th>
                </tr>
                </thead>
                <tbody>
                <tr ng-repeat="hotel in hotels | filter : {name:hotel.name}| filter : {location:hotel.location}| filter : {description:hotel.description}">
                    <td>@{{ hotel.name }}</td>
                    <td>@{{ hotel.location }}</td>
                    <td>@{{ hotel.description }}</td>
                    <td><a href="/hotel/@{{ hotel.id }}" class="btn btn-primary btn-sm"><i class="fa fa-bars"></i></a></td>
                </tr>
                </tbody>

            </table>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ url('js/angular/hotel.js') }}"></script>
@endpush