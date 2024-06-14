@php
$page="dashboard";
@endphp

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
                    <img src="{{ asset('/images/icon-heart-alt.svg') }}" alt="">
                    <em>Inquiry Catalogue</em>
                </a>
            </li>
            <li class="active">
                <a href="{{ url('admin/contact/view') }}">
                    <img src="{{ asset('/images/icon-reply.svg') }}" alt="">
                    <em>Contact Catalogue</em>
                </a>
            </li>
            <li class="active">
                <a href="{{route('admin.testimonials.view') }}">
                    <img src="{{ asset('/images/icon-reply.svg') }}" alt="">
                    <em>Testimonials</em>
                </a>
            </li>






            <li class="">
                @auth
                <a href="{{ url('/admin/logout')}}">
                    <img src="{{ asset('/images/icon-signout.svg') }}" alt="">
                    <em>Logout</em>
                </a>
                @endauth
            </li>
        </ul>
    </div>
</aside>