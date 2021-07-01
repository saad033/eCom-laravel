@extends('layout.master')
@section('content')

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    @foreach($products as $product)
    <div class="carousel-item {{$product['id']==1?'active':''}}">
    <a href="/detail/{{$product['id']}}">
      <img src="{{$product['gallery']}}" alt="Los Angeles" width="1500px" height="400px !important">
      <div class="carousel-caption">
        <h3>{{$product['name']}}</h3>
        <p>{{$product['description']}}</p>
      </div>   
      </a>
    </div>
  
  </div>
  @endforeach
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div class="trending-wrapper">
<h1>Trending Products</h1>
<div class="">
    @foreach($products as $product)
    <div class="trending-items">
    <a href="/detail/{{$product['id']}}">
      <img  class="trending-img" src="{{$product['gallery']}}">
      <div class="">
        <h3>{{$product['name']}}</h3>
      
      </div> 
      </a>  
    </div>
  
  </div>
  @endforeach
</div>

@endsection