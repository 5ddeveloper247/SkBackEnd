@php
$page='';
@endphp



<header>
    <div id="bar">
        <div class="contain">
            <div class="list">
                <strong>Services</strong>
                <span>
                    <!-- vehicle_name -->
                </span>
                <ul>
                    <li class="">
                        <a href="{{ url('#') }}" data-text="Cars">Home</a>
                    </li>
                    <li class="">
                        <a href="{{ url('#') }}" data-text="Cars">About</a>
                    </li>
                    <li class="">
                        <a href="{{ url('#') }}" data-text="Vans">Contact</a>
                    </li>
                    <li class="">
                        <a href="{{ url('#') }}" data-text="Bikes">Support</a>
                    </li>

                </ul>
            </div>
            <ul class="btn_list">
                <li><a href="{{ url('#') }}"><img src="{{ asset('images/icon-user.svg') }}" alt=""></a></li>
                <li><a href="{{ url('#') }}">Register</a></li>
            </ul>
            <ul class="social_links">
                <li><a href="https://www.facebook.com/ynauto" target="_blank"><img
                            src="{{ asset('images/social-facebook.svg') }}"></a></li>
                <li><a href="https://twitter.com/YourNAuto" target="_blank"><img
                            src="{{ asset('images/social-twitter.svg') }}"></a></li>
                <li><a href="https://www.instagram.com/yournextauto" target="_blank"><img
                            src="{{ asset('images/social-instagram.svg') }}"></a></li>
                <li><a href="https://www.youtube.com/channel/UCfQy3iyfYHPzFxduUXieN9w" target="_blank"><img
                            src="{{ asset('images/social-youtube.svg') }}"></a></li>
            </ul>
        </div>
    </div>
    <div class="contain">
        <div id="nav">
            <div class="logo">
                <a href="{{ url('index.php') }}"
                    style="background-image: url('{{ asset('/images/SK-logo.png') }}');"></a>
            </div>
            {{-- <button type="button" class="toggle"><span></span></button> --}}


            <nav class="ease">
                <button type="button" class="x_btn"></button>
                <ul id="lst">

                    <li><a href="{{ url('financing.php') }}" class="run_btn">Home</a></li>
                    <li><a href="{{ url('financing.php') }}" class="run_btn">About</a></li>
                    <li><a href="{{ url('financing.php') }}" class="run_btn">Contact</a></li>


                </ul>
            </nav>


        </div>
    </div>
    <div class="popup sm" data-popup="quick-search">
        <div class="table_dv">
            <div class="table_cell">
                <div class="contain">
                    <div class="_inner">
                        <button type="button" class="x_btn"></button>
                        <h4>Search Here</h4>
                        <form action="" method="POST">
                            @csrf
                            <div class="form_blk">
                                <input type="text" name="search" id="search" class="text_box" placeholder="Search here">
                            </div>
                            <div class="btn_blk">
                                <button type="submit" class="site_btn block">Search now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header -->

<script>
    $(function() {
            // header fix
            let o = $('body').offset().top + 50;
            $(window).on("load scroll", function() {
                let s = $(window).scrollTop();
                if (s >= o) {
                    $('header').addClass('fix');
                } else {
                    $('header').removeClass('fix');
                }
            });
        });
</script>