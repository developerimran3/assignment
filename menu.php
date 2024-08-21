<?php include_once __DIR__ . '/templates/header.php'; ?>

<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
    <div class="wrap-container zerogrid">
        <div class="crumbs">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="menu.php">Menu</a></li>
            </ul>
        </div>
        <div id="main-content">
            <div class="wrap-content">
                <div class="row">
                    <?php foreach ($menus as $food): ?>
                        <div class="col-1-3">
                            <div class="wrap-col">
                                <h3><?php echo $food["new_title"]; ?></h3>

                                <?php foreach ($food["items"] as $item): ?>
                                    <div class="post">
                                        <a href="#"><img src="<?php echo $item["photo"] ?>" /></a>
                                        <div class="wrapper">
                                            <h5><a href="#"><?php echo $item["name"] ?></a></h5>
                                            <span><?php echo $item["price"] ?></span>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
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
<?php include_once __DIR__ . '/templates/footer.php'; ?>