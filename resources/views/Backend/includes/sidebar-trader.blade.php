@php
$page="dashboard";
@endphp

<aside style="">
    <div class="logo_blk">
        <div class="logo">
            <a href="{{ url('index.php') }}" style="background-image: url('{{ asset('/images/logo.svg') }}');"></a>
        </div>
        <button type="button" class="toggle"><span></span></button>
    </div>
    <div class="mini_btn">
        <a href="{{ url('#') }}"><img src="{{ asset('/images/symbol-comments.svg') }}" alt="">Live Chat</a>
        <a href="{{ url('#') }}"><img src="{{ asset('/images/symbol-envelope.svg') }}" alt="">Email</a>
        <a href="{{ url('#') }}"><img src="{{ asset('/images/symbol-headphone.svg') }}" alt="">Phone</a>
    </div>
    <div class="inside">
        <ul>
            <li class="">
                <a href="{{route('admin.dashboard')}}">
                    <img src="{{ asset('/images/icon-home.svg') }}" alt="">
                    <em>Dashboard</em>
                </a>
            </li>
            <li class="">
                <a href="{{ url('/admin/users') }}">
                    <img src="{{ asset('/images/icon-calendar.svg') }}" alt="">
                    <em>Admin Users</em>
                </a>
            </li>
            {{-- <li class="">
                <a href="{{ url('/admin/users/guest') }}">
                    <img src="{{ asset('/images/icon-vehicle.svg') }}" alt="">
                    <em>Site Users</em>
                </a>
            </li> --}}
            <li class="">
                <a href="{{ url('/admin/media/view') }}">
                    <img src="{{ asset('/images/icon-vehicle.svg') }}" alt="">
                    <em>Media</em>
                </a>
            </li>
            <li class="active">
                <a href="{{ url('admin/property/listing') }}">
                    <img src="{{ asset('/images/icon-heart-alt.svg') }}" alt="">
                    <em>Property Listing</em>
                </a>
            </li>
            <li class="">
                <a href="{{ url('trader/upload-vehicles.php') }}">
                    <img src="{{ asset('/images/icon-upload.svg') }}" alt="">
                    <em>Upload Vehicles</em>
                </a>
            </li>
            <li class="">
                <a href="{{ url('trader/leasing-vehicles.php') }}">
                    <img src="{{ asset('/images/icon-leasing.svg') }}" alt="">
                    <em>Leasing Vehicles</em>
                </a>
            </li>
            <li class="">
                <a href="{{ url('trader/auction.php') }}">
                    <img src="{{ asset('/images/icon-auction.svg') }}" alt="">
                    <em>Auction</em>
                </a>
            </li>
            <li class="">
                <a href="{{ url('trader/deliveries.php') }}">
                    <img src="{{ asset('/images/icon-truck.svg') }}" alt="">
                    <em>Deliveries</em>
                </a>
            </li>
            <li class="">
                <a href="{{ url('trader/shop-setting.php') }}">
                    <img src="{{ asset('/images/icon-cog-fill.svg') }}" alt="">
                    <em>Shop Setting</em>
                </a>
            </li>
            <li class="">
                <a href="{{ url('trader/users-management.php') }}">
                    <img src="{{ asset('/images/icon-user.svg') }}" alt="">
                    <em>Users Management</em>
                </a>
            </li>
            <li class="">
                <a href="{{ url('trader/client-management.php') }}">
                    <img src="{{ asset('/images/icon-briefcase.svg') }}" alt="">
                    <em>Client Management</em>
                </a>
            </li>
            <li class="">
                <a href="{{ url('trader/reviews.php') }}">
                    <img src="{{ asset('/images/icon-star.svg') }}" alt="">
                    <em>Reviews</em>
                </a>
            </li>
            <li class="">
                <a href="{{ url('trader/subscriptions.php') }}">
                    <img src="{{ asset('/images/icon-pricing.svg') }}" alt="">
                    <em>Subscriptions</em>
                </a>
            </li>
            <li class="">
                <a href="{{ url('trader/invoices.php') }}">
                    <img src="{{ asset('/images/icon-invoice.svg') }}" alt="">
                    <em>Invoices</em>
                </a>
            </li>
            <li class="">
                <a href="{{ url('trader/payment-history.php') }}">
                    <img src="{{ asset('/images/icon-credit-card.svg') }}" alt="">
                    <em>Payment History</em>
                </a>
            </li>
            <li class="">
                <a href="{{ url('trader/support.php') }}">
                    <img src="{{ asset('/images/icon-help.svg') }}" alt="">
                    <em>Support</em>
                </a>
            </li>
            <li class="">
                <a href="{{ url('login.php') }}">
                    <img src="{{ asset('/images/icon-signout.svg') }}" alt="">
                    <em>Logout</em>
                </a>
            </li>
        </ul>
    </div>
</aside>