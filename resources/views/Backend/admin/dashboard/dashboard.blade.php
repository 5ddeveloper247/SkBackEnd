@extends('Backend.includes.common-template')

@push('styles')
{{--
<link rel="stylesheet" href="{{ asset('css/custom-home.css') }}"> --}}
@endpush



@section('content')
<section id="dash">
    <div class="contain-fluid">
        <ul class="crumbs">
            <li>Dashboard</li>
        </ul>
        <div class="tile_row flex_row">
            <div class="col">
                <div class="tile_blk">
                    <div class="icon"><img src="{{asset('images/vector-car.svg')}}" alt=""></div>
                    <div class="txt">
                        <h4>Some Heading is here</h4>
                        <p>Make more money when you sell your car yourself.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="tile_blk">
                    <div class="icon"><img src="{{asset('images/vector-auction.svg')}}" alt=""></div>
                    <div class="txt">
                        <h4>Some Heading is here</h4>
                        <p>Get an Instant Cash Offer and trade in or sell your...</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="tile_blk">
                    <div class="icon"><img src="{{asset('images/vector-badge.svg')}}" alt=""></div>
                    <div class="txt">
                        <h4>Some Heading is here</h4>
                        <p>Find out what your car is worth to an individual buyer or dealer.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="space"></div>
        <div class="block_row flex_row">
            <div class="col">
                <div class="inner">
                    <strong>05</strong>
                    <p>Live Adverts</p>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <strong>02</strong>
                    <p>Soon to Expire</p>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <strong>01</strong>
                    <p>Incomplete Adverts</p>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <strong>207</strong>
                    <p>Advert Views</p>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <strong>10</strong>
                    <p>Wishlists</p>
                </div>
            </div>
        </div>
        <div class="space"></div>
       
      
        
       
       
       
        
    </div>
</section>
@endsection



@push('scripts')
<script>

</script>
{{-- <script src="{{ asset('js/custom-home.js') }}"></script> --}}
@endpush