@extends('layout.user.main')
@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card shadow-sm p-3 mb-3 bg-body rounded" >
            <div class="card-body">
                <h2><a  class="text-dark" href="">Lorem Ipsum</a></h2>
                <p class="mb-3 text-secondary">January 11, 2022 By <a class="text-dark" href="#">era</a></p>
                <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('img/bearbrand.jpg') }}" class="img-fluid">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <a class="btn btn-dark" href="#">Read more</a>
                    </div>
                  </div>
                </div>
                
            </div>
        </div>
        <div class="card shadow-sm p-3 mb-5 bg-body rounded" >
            <div class="card-body">
                <h2><a class="text-dark" href="">Lorem Ipsum</a></h2>
                <p class="mb-3 text-secondary">January 11, 2022 By <a class="text-dark" href="#">era</a></p>
                <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('img/bearbrand.jpg') }}" class="img-fluid ">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <a class="btn btn-dark" href="#">Read more</a>
                    </div>
                  </div>
                </div>
                
            </div>
        </div>
       
    </div>
    <div class="col-md-4">
        <div class="input-group input-group-lg flex-nowrap shadow-sm mb-3">
            <input type="text" class="form-control" placeholder="Search..." aria-label="Search" aria-describedby="addon-wrapping">
            <span class="input-group-text" id="addon-wrapping"><i class="fas fa-search"></i></span>
        </div>
        <img src="{{ asset('img/indomie.jpg') }}" class=" img-fluid mb-3">
        <div class="card shadow-sm p-3 mb-5 bg-body rounded">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 mb-3">
                      <img src="{{ asset('img/bearbrand.jpg') }}" class="img-fluid">
                    </div>
                    <div class="col-md-8 mb-3">
                        <h6><a class=" text-primary" href="">The Fastest WordPress Theme</a></h6>    
                    </div>
                    <div class="col-md-4 mb-3">
                        <img src="{{ asset('img/bearbrand.jpg') }}" class="img-fluid">
                      </div>
                      <div class="col-md-8 mb-3">
                          <h6><a class=" text-primary" href="">The Fastest WordPress Theme</a></h6>    
                      </div>
                      <div class="col-md-4 mb-3">
                        <img src="{{ asset('img/bearbrand.jpg') }}" class="img-fluid">
                      </div>
                      <div class="col-md-8 mb-3">
                          <h6><a class=" text-primary" href="">3 Awesome Security Plugins for WordPress</a></h6>    
                      </div>
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection