@extends('layouts.main')

@section('page_title', 'Gallery')

@section('content')

<h2> Gallery </h2>
<hr>

<section class="ftco-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="{{url('images/image_9.jpg')}}" class="block-20" style="background-image: url('images/image_9.jpg');">
              </a>
              <div class="text p-4 d-block">
                
                <div class="meta">
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="100">
              <a href="{{url('images/image_10.jpg')}}" class="block-20" style="background-image: url('images/image_10.jpg');">
              </a>
              <div class="text p-4">
                
                <div class="meta">
                
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="200">
              <a href="{{url('images/image_11.jpg')}}" class="block-20" style="background-image: url('images/image_11.jpg');">
              </a>
              <div class="text p-4">
                
                <div class="meta">
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="200">
              <a href="{{url('images/image_12.jpg')}}" class="block-20" style="background-image: url('images/image_12.jpg');">
              </a>
              <div class="text p-4">
                
                <div class="meta">
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="200">
              <a href="{{url('images/image_13.jpg')}}" class="block-20" style="background-image: url('images/image_13.jpg');">
              </a>
              <div class="text p-4">
                
                <div class="meta">
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="200">
              <a href="{{url('images/image_14.jpg')}}" class="block-20" style="background-image: url('images/image_14.jpg');">

              </a>
              </a>
              <div class="text p-4">
                
                <div class="meta">
                  
                </div>
              </div>
            </div>
          </div>

           

          <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li><a href="{{url('gallery')}}"><span>1</span></a></li>
                <li class="active"><a href="{{url('gallery2')}}">2</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
            </div>
          </div>
       
    </section>

@endsection