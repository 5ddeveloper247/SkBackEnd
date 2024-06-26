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
                <a href="{{ route('admin.property.listing') }}">
                <div class="tile_blk">
                    <div class="icon"><img src="{{asset('images/icon-list.svg')}}" alt=""></div>
                    <div class="txt">
                        <h4>Property Listing</h4>
                        <p>Add a property</p>
                    </div>
                </div>
            </a>
            </div>
            <div class="col">
                <a href="{{ route('admin.media.view') }}">
                <div class="tile_blk">
                    
                    <div class="icon"><img src="{{asset('images/icon-plus.svg')}}" alt=""></div>
                    <div class="txt">
                        <h4>Media</h4>
                        <p>Add a Media</p>
                    </div>
               
                </div>
            </a>
            </div>
            <div class="col">
                <a href="{{ route('admin.testimonials.view') }}">
                <div class="tile_blk">
                    
                    <div class="icon"><img src="{{asset('images/icon-reply.svg')}}" alt=""></div>
                    <div class="txt">
                        <h4>Testimonials</h4>
                        <p>Add a testimonial</p>
                    </div>
                   
                </div>
            </a>
            </div>
        </div>
        <div class="space"></div>
        <div class="block_row flex_row">
            <div class="col">
         
                <div class="inner">
                    <strong>{{ $adminUsers }}</strong>
                    <p>Admin Users</p>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <strong>{{ $propertyListings }}</strong>
                    <p>Property Listings</p>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <strong>{{ $inactivePropertyListings }}</strong>
                    <p>Inactive Property Listings</p>
                </div>
            </div>
            
            <div class="col">
                <div class="inner">
                    <strong>{{ $activePropertyListings }}</strong>
                    <p>Completed Property Listings</p>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <strong>{{ $pendingContacts }}</strong>
                    <p>Pending Contact queries</p>
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