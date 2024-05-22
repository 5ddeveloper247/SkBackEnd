<header>
    <div class="contain-fluid">
        <div id="nav">
            <nav class="ease">
                <ul id="lst">
                    <?php if ($page == "cars" && "luxury-cars") : ?>
                        <li><a href="<?= $base_url ?>cars.php#brands">Used Cars</a></li>
                        <li><a href="<?= $base_url ?>cars.php#feature">New Cars</a></li>
                        <li><a href="<?= $base_url ?>cars.php#popular">Certified Cars</a></li>
                        <li class="<?php if ($page == "sell-product") {
                                        echo 'active';
                                    } ?>">
                            <a href="<?= $base_url ?>sell-product.php">Value Your Car</a>
                        </li>
                    <?php elseif ($page == "vans") : ?>
                        <li><a href="<?= $base_url ?>vans.php#brands">Used Vans</a></li>
                        <li><a href="<?= $base_url ?>vans.php#feature">New Vans</a></li>
                        <li><a href="<?= $base_url ?>vans.php#popular">Certified Vans</a></li>
                        <li class="<?php if ($page == "sell-product") {
                                        echo 'active';
                                    } ?>">
                            <a href="<?= $base_url ?>sell-product.php">Value Your Vans</a>
                        </li>
                    <?php elseif ($page == "bikes") : ?>
                        <li><a href="<?= $base_url ?>bikes.php#brands">Used Bikes</a></li>
                        <li><a href="<?= $base_url ?>bikes.php#feature">New Bikes</a></li>
                        <li><a href="<?= $base_url ?>bikes.php#popular">Certified Bikes</a></li>
                        <li class="<?php if ($page == "sell-product") {
                                        echo 'active';
                                    } ?>">
                            <a href="<?= $base_url ?>sell-product.php">Value Your Bikes</a>
                        </li>
                    <?php elseif ($page == "caravans") : ?>
                        <li><a href="<?= $base_url ?>caravans.php#brands">Used Caravans</a></li>
                        <li><a href="<?= $base_url ?>caravans.php#feature">New Caravans</a></li>
                        <li><a href="<?= $base_url ?>caravans.php#popular">Certified Caravans</a></li>
                        <li class="<?php if ($page == "sell-product") {
                                        echo 'active';
                                    } ?>">
                            <a href="<?= $base_url ?>sell-product.php">Value Your Caravans</a>
                        </li>
                    <?php elseif ($page == "trucks") : ?>
                        <li><a href="<?= $base_url ?>trucks.php#brands">Used Trucks</a></li>
                        <li><a href="<?= $base_url ?>trucks.php#feature">New Trucks</a></li>
                        <li><a href="<?= $base_url ?>trucks.php#popular">Certified Trucks</a></li>
                        <li class="<?php if ($page == "sell-product") {
                                        echo 'active';
                                    } ?>">
                            <a href="<?= $base_url ?>sell-product.php">Value Your Trucks</a>
                        </li>
                    <?php elseif ($page == "farm") : ?>
                        <li><a href="<?= $base_url ?>farm.php#brands">Used Farm</a></li>
                        <li><a href="<?= $base_url ?>farm.php#feature">New Farm</a></li>
                        <li><a href="<?= $base_url ?>farm.php#popular">Certified Farm</a></li>
                        <li class="<?php if ($page == "sell-product") {
                                        echo 'active';
                                    } ?>">
                            <a href="<?= $base_url ?>sell-product.php">Value Your Farm</a>
                        </li>
                    <?php else : ?>
                        <li><a href="<?= $base_url ?>cars.php#brands">Used Cars</a></li>
                        <li><a href="<?= $base_url ?>cars.php#feature">New Cars</a></li>
                        <li><a href="<?= $base_url ?>cars.php#popular">Certified Cars</a></li>
                        <li class="<?php if ($page == "sell-product") {
                                        echo 'active';
                                    } ?>">
                            <a href="<?= $base_url ?>sell-product.php">Value Your Car</a>
                        </li>
                    <?php endif; ?>
                    <li class="<?php if ($page == "financing") {
                                    echo 'active';
                                } ?>">
                        <a href="<?= $base_url ?>financing.php">Financing</a>
                    </li>
                    <li class="<?php if ($page == "leasing") {
                                    echo 'active';
                                } ?>">
                        <a href="<?= $base_url ?>leasing.php">Leasing</a>
                    </li>
                    <li class="<?php if ($page == "insurance") {
                                    echo 'active';
                                } ?>">
                        <a href="<?= $base_url ?>insurance.php">Insurance</a>
                    </li>
                    <li class="<?php if ($page == "auction") {
                                    echo 'active';
                                } ?>">
                        <a href="<?= $base_url ?>auction.php">Auction</a>
                    </li>
                </ul>
            </nav>
            <!-- <form action="" method="POST">
                <input type="text" name="" id="" class="text_box" placeholder="Search here">
                <button type="submit"><img src="<?= $base_url ?>assets/images/icon-search.svg" alt=""></button>
            </form> -->
            <ul id="icon_btn">
                <li id="noti">
                    <a href="<?= $base_url ?>trader/notifications.php">
                        <img src="<?= $base_url ?>assets/images/icon-bell.svg" alt="">
                    </a>
                </li>
            </ul>
            <div id="pro_btn" class="drop_down">
                <div class="drop_btn">
                    <div class="ico">
                        <img src="<?= $base_url ?>assets/images/users/5.jpg" alt="">
                    </div>
                    <div class="name">John Wick <small>Trader</small></div>
                </div>
                <div class="drop_cnt">
                    <ul class="drop_lst">
                        <li><a href="<?= $base_url ?>trader/dashboard.php">Dashboard</a></li>
                        <li><a href="<?= $base_url ?>trader/appointments.php">Appointments</a></li>
                        <li><a href="<?= $base_url ?>trader/payment-history.php">Payment History</a></li>
                        <li><a href="<?= $base_url ?>login.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header -->