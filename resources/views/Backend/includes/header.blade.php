<header>
    <div id="bar">
        <div class="contain">
            <div class="list">
                <strong>Our Vehicles</strong>
                <span>
                    <!-- vehicle_name -->
                </span>
                <ul>
                    <li class="<?php if ($page == "cars") {
                                    echo 'active';
                                } ?>">
                        <a href="<?= $base_url ?>cars.php" data-text="Cars">Cars</a>
                    </li>
                    <li class="<?php if ($page == "luxury-cars") {
                                    echo 'active';
                                } ?>">
                        <a href="<?= $base_url ?>luxury-cars.php" data-text="Cars">Luxury Cars</a>
                    </li>
                    <li class="<?php if ($page == "vans") {
                                    echo 'active';
                                } ?>">
                        <a href="<?= $base_url ?>vans.php" data-text="Vans">Vans</a>
                    </li>
                    <li class="<?php if ($page == "bikes") {
                                    echo 'active';
                                } ?>">
                        <a href="<?= $base_url ?>bikes.php" data-text="Bikes">Bikes</a>
                    </li>
                    <li class="<?php if ($page == "caravans") {
                                    echo 'active';
                                } ?>">
                        <a href="<?= $base_url ?>caravans.php" data-text="Caravans">Caravans</a>
                    </li>
                    <li class="<?php if ($page == "trucks") {
                                    echo 'active';
                                } ?>">
                        <a href="<?= $base_url ?>trucks.php" data-text="Trucks">Trucks</a>
                    </li>
                    <li class="<?php if ($page == "farm") {
                                    echo 'active';
                                } ?>">
                        <a href="<?= $base_url ?>farm.php" data-text="Farm">Farm</a>
                    </li>
                </ul>
            </div>
            <ul class="btn_list">
                <li><a href="<?= $base_url ?>login.php"><img src="<?= $base_url ?>assets/images/icon-user.svg" alt=""></a></li>
                <li><a href="<?= $base_url ?>register.php">Register</a></li>
            </ul>
            <ul class="social_links">
                <li><a href="https://www.facebook.com/ynauto" target="_blank"><img src="<?= $base_url ?>assets/images/social-facebook.svg"></a></li>
                <li><a href="https://twitter.com/YourNAuto" target="_blank"><img src="<?= $base_url ?>assets/images/social-twitter.svg"></a></li>
                <li><a href="https://www.instagram.com/yournextauto" target="_blank"><img src="<?= $base_url ?>assets/images/social-instagram.svg"></a></li>
                <li><a href="https://www.youtube.com/channel/UCfQy3iyfYHPzFxduUXieN9w" target="_blank"><img src="<?= $base_url ?>assets/images/social-youtube.svg"></a></li>
            </ul>
        </div>
    </div>
    <div class="contain">
        <div id="nav">
            <div class="logo">
                <a href="<?= $base_url ?>index.php" style="background-image: url('<?= $base_url ?>assets/images/logo.png'), url('<?= $base_url ?>assets/images/logo-icon.png');"></a>
            </div>
            <button type="button" class="toggle"><span></span></button>
            <nav class="ease">
                <button type="button" class="x_btn"></button>
                <ul id="lst">
                    <?php if ($page == "cars" && "luxury-cars") : ?>
                        <li><a href="#brands" class="run_btn">Used Cars</a></li>
                        <li><a href="#feature" class="run_btn">New Cars</a></li>
                        <li><a href="#popular" class="run_btn">Certified Cars</a></li>
                        <li class="<?php if ($page == "sell-product") {
                                        echo 'active';
                                    } ?>">
                            <a href="<?= $base_url ?>sell-product.php">Value Your Car</a>
                        </li>
                    <?php elseif ($page == "vans") : ?>
                        <li><a href="#brands" class="run_btn">Used Vans</a></li>
                        <li><a href="#feature" class="run_btn">New Vans</a></li>
                        <li><a href="#popular" class="run_btn">Certified Vans</a></li>
                        <li class="<?php if ($page == "sell-product") {
                                        echo 'active';
                                    } ?>">
                            <a href="<?= $base_url ?>sell-product.php">Value Your Vans</a>
                        </li>
                    <?php elseif ($page == "bikes") : ?>
                        <li><a href="#brands" class="run_btn">Used Bikes</a></li>
                        <li><a href="#feature" class="run_btn">New Bikes</a></li>
                        <li><a href="#popular" class="run_btn">Certified Bikes</a></li>
                        <li class="<?php if ($page == "sell-product") {
                                        echo 'active';
                                    } ?>">
                            <a href="<?= $base_url ?>sell-product.php">Value Your Bikes</a>
                        </li>
                    <?php elseif ($page == "caravans") : ?>
                        <li><a href="#brands" class="run_btn">Used Caravans</a></li>
                        <li><a href="#feature" class="run_btn">New Caravans</a></li>
                        <li><a href="#popular" class="run_btn">Certified Caravans</a></li>
                        <li class="<?php if ($page == "sell-product") {
                                        echo 'active';
                                    } ?>">
                            <a href="<?= $base_url ?>sell-product.php">Value Your Caravans</a>
                        </li>
                    <?php elseif ($page == "trucks") : ?>
                        <li><a href="#brands" class="run_btn">Used Trucks</a></li>
                        <li><a href="#feature" class="run_btn">New Trucks</a></li>
                        <li><a href="#popular" class="run_btn">Certified Trucks</a></li>
                        <li class="<?php if ($page == "sell-product") {
                                        echo 'active';
                                    } ?>">
                            <a href="<?= $base_url ?>sell-product.php">Value Your Trucks</a>
                        </li>
                    <?php elseif ($page == "farm") : ?>
                        <li><a href="#brands" class="run_btn">Used Farm</a></li>
                        <li><a href="#feature" class="run_btn">New Farm</a></li>
                        <li><a href="#popular" class="run_btn">Certified Farm</a></li>
                        <li class="<?php if ($page == "sell-product") {
                                        echo 'active';
                                    } ?>">
                            <a href="<?= $base_url ?>sell-product.php">Value Your Farm</a>
                        </li>
                    <?php else : ?>
                        <li><a href="#brands" class="run_btn">Used Cars</a></li>
                        <li><a href="#feature" class="run_btn">New Cars</a></li>
                        <li><a href="#popular" class="run_btn">Certified Cars</a></li>
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
            <ul id="icon_btn">
                <li id="srch">
                    <button type="button" class="pop_btn" data-popup="quick-search">
                        <img src="<?= $base_url ?>assets/images/icon-search.svg" alt="">
                    </button>
                </li>
            </ul>
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
                            <div class="form_blk">
                                <input type="text" name="" id="" class="text_box" placeholder="Search here">
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
        o = $('body').offset().top;
        o = o + 50;
        $(window).on("load scroll", function() {
            s = $(window).scrollTop();
            if (s >= o) {
                $('header').addClass('fix');
            } else {
                $('header').removeClass('fix');
            }
        });
    });
</script>