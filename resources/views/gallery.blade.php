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
              <a href="{{url('images/image_1.jpg')}}" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text p-4 d-block">
                
                <div class="meta">
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="100">
              <a href="{{url('images/image_2.jpg')}}" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text p-4">
                
                <div class="meta">
                
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="200">
              <a href="{{url('images/image_3.jpg')}}" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text p-4">
                
                <div class="meta">
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="200">
              <a href="{{url('images/image_4.jpg')}}" class="block-20" style="background-image: url('images/image_4.jpg');">
              </a>
              <div class="text p-4">
                
                <div class="meta">
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="200">
              <a href="{{url('images/image_5.jpg')}}" class="block-20" style="background-image: url('images/image_5.jpg');">
              </a>
              <div class="text p-4">
                
                <div class="meta">
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="200">
              <a href="{{url('images/image_6.jpg')}}" class="block-20" style="background-image: url('images/image_6.jpg');">

              </a>
              <div class="text p-4">
                
                <div class="meta">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="{{url('gallery2')}}">2</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>

   
@endsection