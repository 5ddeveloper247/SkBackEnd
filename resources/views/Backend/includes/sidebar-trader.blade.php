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
        <button type="button" class="toggle"><span></span></button>
    </div>
    <div class="inside">
        <ul>
            <li class="active">
                <a href="{{route('admin.dashboard')}}">
                    <img src="{{ asset('/images/icon-home.svg') }}" alt="">
                    <em>Dashboard</em>
                </a>
            </li>
            <li class="active">
                <a href="{{ url('/admin/users') }}">
                    <img src="{{ asset('/images/icon-user.svg') }}" alt="">
                    <em>Admin Users</em>
                </a>
            </li>
            {{-- <li class="">
                <a href="{{ url('/admin/users/guest') }}">
                    <img src="{{ asset('/images/icon-vehicle.svg') }}" alt="">
                    <em>Site Users</em>
                </a>
            </li> --}}
            <li class="active">
                <a href="{{ url('/admin/media/view') }}">
                    <img src="{{ asset('/images/icon-plus.svg') }}" alt="">
                    <em>Media</em>
                </a>
            </li>
            <li class="active">
                <a href="{{ url('admin/property/listing') }}">
                    <img src="{{ asset('/images/icon-list.svg') }}" alt="">
                    <em>Property Listing</em>
                </a>
            </li>
            <li class="active">
                <a href="{{ url('admin/inquiry/view') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 48 48"><path fill="rgb(0,120,185)" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="m33.3 23.395l-7.119-7.118a3.08 3.08 0 0 0-4.353-.01l-.01.01L6.433 31.664a3.08 3.08 0 0 0-.01 4.353l.01.01l5.561 5.56c1.208 1.209 3.154 1.209 4.313.049l5.512-5.511a3.08 3.08 0 0 1 4.353-.01l.01.01l5.511 5.51c1.161 1.16 3.106 1.16 4.315-.047l5.561-5.561a3.08 3.08 0 0 0 .01-4.353l-.01-.01zm0-9.87l-7.12-7.119a3.08 3.08 0 0 0-4.353-.009l-.009.01L6.431 21.792a3.08 3.08 0 0 0-.01 4.353l.01.01l5.561 5.561c1.208 1.208 3.155 1.208 4.313.048l5.513-5.511a3.08 3.08 0 0 1 4.353-.01l.01.01l5.511 5.51c1.16 1.161 3.105 1.161 4.314-.047l5.561-5.561a3.08 3.08 0 0 0 .01-4.353l-.01-.01L33.3 9.488z"/></svg>
                    <em>Property Enquiry</em>
                </a>
            </li>
            <li class="active">
                <a href="{{ url('admin/contact/view') }}" style="margin-left: 2px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                        <path fill="rgb(0,120,185)"
                            d="M472 48H40a24.028 24.028 0 0 0-24 24v368a24.028 24.028 0 0 0 24 24h88v-58.822a20.01 20.01 0 0 1 10.284-17.478l91.979-51.123L200 260.919V200a56 56 0 0 1 112 0v60.919l-30.263 75.655l91.979 51.126A20.011 20.011 0 0 1 384 405.178V464h88a24.028 24.028 0 0 0 24-24V72a24.028 24.028 0 0 0-24-24m-8 384h-48v-26.822a52.027 52.027 0 0 0-26.738-45.451L321.915 322.3L344 267.081V200a88 88 0 0 0-176 0v67.081l22.085 55.219l-67.347 37.432A52.027 52.027 0 0 0 96 405.178V432H48V80h416Z" />
                    </svg>
                    <em>Contact Us</em>
                </a>
            </li>
            <li class="active">
                <a href="{{route('admin.testimonials.view') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 20 20">
                        <path fill="rgb(0,120,185)"
                            d="M4 3h12c.55 0 1.02.2 1.41.59S18 4.45 18 5v7c0 .55-.2 1.02-.59 1.41S16.55 14 16 14h-1l-5 5v-5H4c-.55 0-1.02-.2-1.41-.59S2 12.55 2 12V5c0-.55.2-1.02.59-1.41S3.45 3 4 3m11 2H4v1h11zm1 3H4v1h12zm-3 3H4v1h9z" />
                    </svg>
                    <em>Testimonials</em>
                </a>
            </li>
            <li class="active">
                <a href="{{route('admin.city.view') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"><path fill="rgb(0,120,185)" d="M19 15h-2v-2h2m0 6h-2v-2h2M13 7h-2V5h2m0 6h-2V9h2m0 6h-2v-2h2m0 6h-2v-2h2m-6-6H5V9h2m0 6H5v-2h2m0 6H5v-2h2m8-6V5l-3-3l-3 3v2H3v14h18V11z"/></svg>
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