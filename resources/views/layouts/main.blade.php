<!DOCTYPE html>
<html lang="en" ng-app="app">

@include('shared._head')
  <body>


  @include('shared._header') 
    
  <section class="ftco-section contact-section" style="background-image: url('https://static1.squarespace.com/static/5459ec52e4b04d305f68f1ed/t/548a9644e4b0a171f6b28d53/1418368582035/Pattern15.jpg') !important;">
      <div class="container bg-light">
        @yield('content')
      </div>
    </section>

    @include('shared._footer') 
    
    @include('shared._scripts') 
    @stack('scripts')
    </body>
    </html>