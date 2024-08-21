<?php include_once __DIR__ . '/templates/header.php'; ?>

<div class="zerogrid">
    <div class="callbacks_container">
        <ul class="rslides" id="slider4">
            <!-- Slider item php code start here -->
            <?php foreach ($banner as $item): ?>
                <li>
                    <img src="<?php echo $item['image']; ?>" alt="">
                    <div class="caption">
                        <h2><?php echo $item['title']; ?></h2></br>
                        <p><?php echo $item['disc']; ?></p>
                    </div>
                </li>
            <?php endforeach; ?>
            <!-- slider item php code ends here -->

        </ul>
    </div>
</div>

<!--////////////////////////////////////Container-->
<section id="container" class="index-page">
    <div class="wrap-container zerogrid">
        <!-----------------content-box-1-------------------->
        <section class="content-box box-1">
            <div class="zerogrid">
                <div class="row box-item">
                    <!--Start Box-->
                    <h2><?php echo $headingText["title"]  ?></h2>
                    <span><?php echo $headingText["subtitle"]  ?></span>
                </div>
            </div>
        </section>
        <!-----------------content-box-2-------------------->
        <section class="content-box box-2">
            <div class="zerogrid">
                <div class="row wrap-box">
                    <!--Start Box-->
                    <div class="header">
                        <h2><?php echo $welcome["title"] ?></h2>
                        <hr class="line">
                        <span><?php echo $welcome["subtitle"]; ?></span>
                    </div>
                    <div class="row">
                        <?php foreach ($menucard as $item): ?>
                            <div class="col-1-3">
                                <div class="wrap-col">
                                    <div class="box-item">
                                        <span class="ribbon"><?php echo $item["card"]; ?><b></b></span>
                                        <img src="<?php echo $item["photo"]; ?>" alt="">
                                        <p><?php echo $item["desc"]; ?></p>
                                        <a href="<?php echo $item["btn"]["link"]; ?>"
                                            class="button button-1"><?php echo $item["btn"]["title"]; ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
<!--//////////////////////////////////////footer-->
<?php include_once __DIR__ . '/templates/footer.php'; ?>