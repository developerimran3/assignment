<?php include_once __DIR__.'/templates/header.php'; ?>
<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
    <div class="wrap-container zerogrid">
        <div class="crumbs">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="gallery.php">Gallery</a></li>
            </ul>
        </div>
        <div id="main-content">
            <div class="wrap-content">
                <div class="row">
                <?php foreach ($gallery as $item): ?>
                    <div class="col-1-4">
                        <div class="zoom-container">
                            <a href="<?php echo $item["link"] ?>">
                                <span class="zoom-caption">
                                    <span><?php echo $item["desc"] ?></span>
                                </span>
                                <img src="<?php echo $item["image"] ?>" />
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//////////////////////////////////////footer-->
<?php include_once __DIR__.'/templates/footer.php'; ?>