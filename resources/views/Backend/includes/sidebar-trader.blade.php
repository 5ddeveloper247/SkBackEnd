<aside>
    <div class="logo_blk">
        <div class="logo">
            <a href="<?= $base_url ?>index.php" style="background-image: url('<?= $base_url ?>assets/images/logo.svg');"></a>
        </div>
        <button type="button" class="toggle"><span></span></button>
    </div>
    <div class="mini_btn">
        <a href="?"><img src="<?= $base_url ?>assets/images/symbol-comments.svg" alt="">Live Chat</a>
        <a href="?"><img src="<?= $base_url ?>assets/images/symbol-envelope.svg" alt="">Email</a>
        <a href="?"><img src="<?= $base_url ?>assets/images/symbol-headphone.svg" alt="">Phone</a>
    </div>
    <div class="inside">
        <ul>
            <li class="<?php if ($page == "dashboard") {
                            echo 'active';
                        } ?>">
                <a href="<?= $base_url ?>trader/dashboard.php">
                    <img src="<?= $base_url ?>assets/images/icon-home.svg" alt="">
                    <em>Dashboard</em>
                </a>
            </li>
            <li class="<?php if ($page == "appointments") {
                            echo 'active';
                        } ?>">
                <a href="<?= $base_url ?>trader/appointments.php">
                    <img src="<?= $base_url ?>assets/images/icon-calendar.svg" alt="">
                    <em>Appointments</em>
                </a>
            </li>
            <li class="<?php if ($page == "vehicle-listing") {
                            echo 'active';
                        } ?>">
                <a href="<?= $base_url ?>trader/vehicle-listing.php">
                    <img src="<?= $base_url ?>assets/images/icon-vehicle.svg" alt="">
                    <em>Vehicle Listing</em>
                </a>
            </li>
            <li class="<?php if ($page == "classified-vehicles") {
                            echo 'active';
                        } ?>">
                <a href="<?= $base_url ?>trader/classified-vehicles.php">
                    <img src="<?= $base_url ?>assets/images/icon-vehicle.svg" alt="">
                    <em>Classified Vehicles</em>
                </a>
            </li>
            <li class="<?php if ($page == "wishlists") {
                            echo 'active';
                        } ?>">
                <a href="<?= $base_url ?>trader/wishlists.php">
                    <img src="<?= $base_url ?>assets/images/icon-heart-alt.svg" alt="">
                    <em>Wishlists</em>
                </a>
            </li>
            <li class="<?php if ($page == "upload-vehicles") {
                            echo 'active';
                        } ?>">
                <a href="<?= $base_url ?>trader/upload-vehicles.php">
                    <img src="<?= $base_url ?>assets/images/icon-upload.svg" alt="">
                    <em>Upload Vehicles</em>
                </a>
            </li>
            <li class="<?php if ($page == "leasing-vehicles") {
                            echo 'active';
                        } ?>">
                <a href="<?= $base_url ?>trader/leasing-vehicles.php">
                    <img src="<?= $base_url ?>assets/images/icon-leasing.svg" alt="">
                    <em>Leasing Vehicles</em>
                </a>
            </li>
            <li class="<?php if ($page == "auction") {
                            echo 'active';
                        } ?>">
                <a href="<?= $base_url ?>trader/auction.php">
                    <img src="<?= $base_url ?>assets/images/icon-auction.svg" alt="">
                    <em>Auction</em>
                </a>
            </li>
            <li class="<?php if ($page == "deliveries") {
                            echo 'active';
                        } ?>">
                <a href="<?= $base_url ?>trader/deliveries.php">
                    <img src="<?= $base_url ?>assets/images/icon-truck.svg" alt="">
                    <em>Deliveries</em>
                </a>
            </li>
            <li class="<?php if ($page == "shop-setting") {
                            echo 'active';
                        } ?>">
                <a href="<?= $base_url ?>trader/shop-setting.php">
                    <img src="<?= $base_url ?>assets/images/icon-cog-fill.svg" alt="">
                    <em>Shop Setting</em>
                </a>
            </li>
            <li class="<?php if ($page == "users-management") {
                            echo 'active';
                        } ?>">
                <a href="<?= $base_url ?>trader/users-management.php">
                    <img src="<?= $base_url ?>assets/images/icon-user.svg" alt="">
                    <em>Users Management</em>
                </a>
            </li>
            <li class="<?php if ($page == "client-management") {
                            echo 'active';
                        } ?>">
                <a href="<?= $base_url ?>trader/client-management.php">
                    <img src="<?= $base_url ?>assets/images/icon-briefcase.svg" alt="">
                    <em>Client Management</em>
                </a>
            </li>
            <li class="<?php if ($page == "reviews") {
                            echo 'active';
                        } ?>">
                <a href="<?= $base_url ?>trader/reviews.php">
                    <img src="<?= $base_url ?>assets/images/icon-star.svg" alt="">
                    <em>Reviews</em>
                </a>
            </li>
            <li class="<?php if ($page == "subscriptions") {
                            echo 'active';
                        } ?>">
                <a href="<?= $base_url ?>trader/subscriptions.php">
                    <img src="<?= $base_url ?>assets/images/icon-pricing.svg" alt="">
                    <em>Subscriptions</em>
                </a>
            </li>
            <li class="<?php if ($page == "invoices") {
                            echo 'active';
                        } ?>">
                <a href="<?= $base_url ?>trader/invoices.php">
                    <img src="<?= $base_url ?>assets/images/icon-invoice.svg" alt="">
                    <em>Invoices</em>
                </a>
            </li>
            <li class="<?php if ($page == "payment-history") {
                            echo 'active';
                        } ?>">
                <a href="<?= $base_url ?>trader/payment-history.php">
                    <img src="<?= $base_url ?>assets/images/icon-credit-card.svg" alt="">
                    <em>Payment History</em>
                </a>
            </li>
            <li class="<?php if ($page == "support") {
                            echo 'active';
                        } ?>">
                <a href="<?= $base_url ?>trader/support.php">
                    <img src="<?= $base_url ?>assets/images/icon-help.svg" alt="">
                    <em>Support</em>
                </a>
            </li>
            <li class="<?php if ($page == "login") {
                            echo 'active';
                        } ?>">
                <a href="<?= $base_url ?>login.php">
                    <img src="<?= $base_url ?>assets/images/icon-signout.svg" alt="">
                    <em>Logout</em>
                </a>
            </li>
        </ul>
    </div>
</aside>
<!-- aside -->