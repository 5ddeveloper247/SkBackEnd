<header>
    <div class="contain-fluid">
        <div id="nav">
            <nav class="ease">
                <ul id="lst">

                    <li><a href="{{ url('cars.php#brands') }}">Used Cars</a></li>
                    <li><a href="{{ url('cars.php#feature') }}">New Cars</a></li>
                    <li><a href="{{ url('cars.php#popular') }}">Certified Cars</a></li>


                    <li class="active">
                        <a href="{{ url('financing.php') }}">Financing</a>
                    </li>
                    <li class="">
                        <a href="{{ url('leasing.php') }}">Leasing</a>
                    </li>
                    <li class="">
                        <a href="{{ url('insurance.php') }}">Insurance</a>
                    </li>
                    <li class="">
                        <a href="{{ url('auction.php') }}">Auction</a>
                    </li>
                </ul>
            </nav>
            <!-- 
            <form action="" method="POST">
                <input type="text" name="" id="" class="text_box" placeholder="Search here">
                <button type="submit"><img src="{{ asset('/images/icon-search.svg') }}" alt=""></button>
            </form> 
            -->
            <ul id="icon_btn">
                <li id="noti">
                    <a href="{{ url('trader/notifications.php') }}">
                        <img src="{{ asset('/images/icon-bell.svg') }}" alt="">
                    </a>
                </li>
            </ul>
            <div id="pro_btn" class="drop_down">
                <div class="drop_btn">
                    <div class="ico">
                        <img src="{{ asset('/images/users/5.jpg') }}" alt="">
                    </div>
                    <div class="name">John Wick <small>Trader</small></div>
                </div>
                <div class="drop_cnt">
                    <ul class="drop_lst">
                        <li><a href="{{ url('trader/dashboard.php') }}">Dashboard</a></li>
                        <li><a href="{{ url('trader/appointments.php') }}">Appointments</a></li>
                        <li><a href="{{ url('trader/payment-history.php') }}">Payment History</a></li>
                        <li><a href="{{ url('login.php') }}">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>