@extends('layout.master')
@section('content')

<div class="container">
<div class="row">
<div class="col-sm-6">
<img  class="detail-img" src="{{$products['gallery']}}" alt="">
</div>
<div class="col-sm-6">
    <a href="/">Go Back</a>
    <h3>Name: {{$products['name']}}</h3>
    <h4>Price: {{$products['price']}}</h4>
    <h5>Category: {{$products['category']}}</h5>
    <h5>Description: {{$products['description']}}</h5>
    <br>
    <form action="/add_to_cart" method="POST">
    @csrf
    <input type="hidden" name="product_id" value="{{$products['id']}}">
    <button class="btn btn-primary">Add to Cart</button>
    </form>
    
    <br><br>
    <button class="btn btn-success">Buy Now </button>
    <br><br>


</div>
</div>
  
</div>

@endsection