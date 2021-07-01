@extends('layout.master')
@section('content')
<div class="row">
<div class="col-sm-4">
<a href="#">Filter</a>
</div>
<div class="col-sm-4">
<div class="trending-wrapper">
<h2>Result for Products</h2>
<div class="">
    @foreach($products as $product)
    <div class="searched-items">
    <a href="/detail/{{$product['id']}}">
      <img  class="trending-img" src="{{$product['gallery']}}">
      <div class="">
        <h3>{{$product['name']}}</h3>
        <h5>{{$product['description']}}</h5>

      
      </div> 
      </a>  
    </div>
  
  </div>
  @endforeach
</div>

</div>
</div>

@endsection