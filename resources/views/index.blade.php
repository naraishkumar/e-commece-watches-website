@extends('layouts.main')

@section('content')


<!-- Header Start-->
<div id="header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7">
                <div class="header-content">
                    <h2><span>WATCH</span> is the best <span>Landing Page</span> to showcause your product</h2>
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span>Android and iOS Support</li>
                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span>GPS & Health Tracker</li>
                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span>Read & reply to messages</li>
                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span>Compatible with all devices</li>
                    </ul>
                    <a class="btn" href="#">Buy Now</a>
                </div>
            </div>
            <div class="col-md-5">
                <div class="header-img">
                    <img src="{{asset('img/watch-header.png')}}" alt="Product Image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End-->



<!-- Process Start-->
<div id="process">
    <div class="container">
        <div class="section-header">
            <h2>How It Works</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies
            </p>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="process-col">
                    <i class="fa fa-plug"></i>
                    <h2>Connect Device</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit. In sed lorem efficitur vestibulum erat finibus
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="process-col">
                    <i class="fa fa-sliders-h"></i>
                    <h2>Configure it</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit. In sed lorem efficitur vestibulum erat finibus
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="process-col">
                    <i class="fa fa-check"></i>
                    <h2>Done. Enjoy!!!</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit. In sed lorem efficitur vestibulum erat finibus
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Process End-->


<!-- Products Start -->
<div id="products">
    <div class="container">
        <div class="section-header">
            <h2>Get Your Products</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies
            </p>
        </div>
        <div class="row align-items-center">

            @foreach($products as $product)

            <div class="col-md-3">
                <div class="product-single">
                    <div class="product-img">
                        <img src="{{asset('img/'.$product->image)}}" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <h2>
                            <a href="{{route('single_product', ['id'=> $product->id])}}">
                                {{ $product->name }}
                            </a>
                        </h2>

                        @if($product->sale_price != null)
                        <h3>${{$product->sale_price}}</h3>
                        <h3 style="text-decoration: line-through;">
                            ${{$product->price}}</h3>
                        @else 
                        <h3>${{$product->price}}</h3>

                        @endif
                        

                        <form method="POST" action="{{route('add_to_cart')}}">
                            @csrf
                                <input type="hidden" name="id" value="{{$product->id}}">
                                <input type="hidden" name="name" value="{{$product->name}}">
                                <input type="hidden" name="price" value="{{$product->price}}">
                                <input type="hidden" name="sale_price" value="{{$product->sale_price}}">
                                <input type="hidden" name="quantity" value="1">
                                <input type="hidden" name="image" value="{{$product->image}}">

                                <input type="submit"  value="Add to Cart" class="btn" >

                            </form>



                    </div>
                </div>
            </div>
            @endforeach
            

        <!--<div class="mt-5 text-center"><a href="" class="btn btn-primary">Buy Now</a></div>  -->

    </div>
</div>
<!-- Products End -->











    
@endsection