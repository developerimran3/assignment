<?php include_once __DIR__.'/templates/header.php'; ?>
<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
    <div class="wrap-container zerogrid">
        <div class="crumbs">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="staff.php">Staff</a></li>
            </ul>
        </div>
        <div id="main-content">
            <div class="wrap-content">
                <div class="chef">
                    <div class="row">
                    <?php foreach ($staff as $staffs): ?>
                        <div class="col-1-4">
                            <div class="wrap-col">
                                <div class="zoom-container">
                                    <a href="#">
                                        <img src="<?php echo $staffs["image"]  ?>" />
                                    </a>
                                </div>
                                <h3><?php echo $staffs["name"]  ?></h3>                              
                                <ul class="social t-center">
                                <?php foreach ($staffs["social"] as $icon): ?>
                                    <li><a href="<?php echo $icon["link"]  ?>"><i class="<?php echo $icon["className"]  ?>"></i></a></li>
                                    <?php endforeach; ?>
                                </ul>             
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//////////////////////////////////////footer-->
<?php include_once __DIR__.'/templates/footer.php'; ?>