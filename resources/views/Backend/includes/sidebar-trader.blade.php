@php
$page="dashboard";
@endphp
<style>
    aside ul>li>a>svg {
        width: 2rem;
        height: 2rem;
        margin-right: 1.5rem;
    }
</style>
<aside style="">
    <div class="logo_blk">
        <div class="logo">
            <a href="#" style="background-image: url('{{ asset('/images/SK-logo.png') }}');"></a>
        </div>
        {{-- <button type="button" class="toggle"><span></span></button> --}}
    </div>
    <div class="inside">
        <ul>
            <li class="active">
                <a href="{{route('admin.dashboard')}}">
                    <img src="{{ asset('/images/icon-home.svg') }}" alt="">
                    <em>Dashboard</em>
                </a>
            </li>

            @auth
            @if(Auth::user()->super_admin == 1)
            <li class="active">
                <a href="{{ url('/admin/users') }}">
                    <img src="{{ asset('/images/icon-user.svg') }}" alt="">
                    <em>Admin Users</em>
                </a>
            </li>
            @endif
            @endauth

            {{-- <li class="">
                <a href="{{ url('/admin/users/guest') }}">
                    <img src="{{ asset('/images/icon-vehicle.svg') }}" alt="">
                    <em>Site Users</em>
                </a>
            </li> --}}

            <li class="active">
                <a href="{{ url('admin/property/listing') }}">
                    <img src="{{ asset('/images/icon-list.svg') }}" alt="">
                    <em>Property Listing</em>
                </a>
            </li>
            <li class="active">
                <a href="{{ url('admin/inquiry/view') }}">
                    <img src="{{ asset('/images/enquiry.svg') }}" alt=""> <em>Property Enquiry</em>
                </a>
            </li>
            <li class="active">
                <a href="{{route('admin.testimonials.view') }}">
                    <img src="{{ asset('/images/testimonials.svg') }}" alt="">
                    <em>Testimonials</em>
                </a>
            </li>
            <li class="active">
                <a href="{{ url('admin/contact/view') }}" style="margin-left: 2px">
                    <img src="{{ asset('/images/contactus.svg') }}" alt="">
                    <em>Contact Us</em>
                </a>
            </li>

            <li class="active">
                <a href="{{ url('/admin/media/view') }}">
                    <img src="{{ asset('/images/icon-plus.svg') }}" alt="">
                    <em>Media</em>
                </a>
            </li>
            <li class="active">
                <a href="{{route('admin.city.view') }}">
                    <img src="{{ asset('/images/city.svg') }}" alt="">
                    <em>City</em>
                </a>
            </li>






            <li class="">
                @auth
                <a href="{{ url('/admin/logout')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24">
                        <path fill="rgb(0,120,185)"
                            d="M5 11h8v2H5v3l-5-4l5-4zm-1 7h2.708a8 8 0 1 0 0-12H4a9.99 9.99 0 0 1 8-4c5.523 0 10 4.477 10 10s-4.477 10-10 10a9.99 9.99 0 0 1-8-4" />
                    </svg>
                    <em>Logout</em>
                </a>
                @endauth
            </li>
        </ul>
    </div>
</aside>