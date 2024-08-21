<!--////////////////////////////////////Footer-->
<footer class="zerogrid">
    <div class="wrap-footer">
        <div class="row">
            <div class="col-1-3">
                <div class="wrap-col">
                    <h4><?php echo $footer["side1"]['title'] ?></h4>
                    <div class="row">
                        <img src="<?php echo $footer["side1"]['photo'] ?>">
                        <h5><?php echo $footer["side1"]['name'] ?></h5>
                        <p><?php echo $footer["side1"]['desc'] ?>.</p>
                    </div>
                </div>
            </div>
            <div class="col-1-3">
                <div class="wrap-col">
                    <h4>Location</h4>
                    <div class="wrap-map"><iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1845.5111719192994!2d91.80343153155684!3d22.314994710354654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acdf68eb9f2c75%3A0xae327aac9854c0f1!2sM%2FS.%20Recent%20Trading%20Agency!5e0!3m2!1sen!2sbd!4v1723876676776!5m2!1sen!2sbd"
                            width="100%" height="200" frameborder="0" style="border:0"></iframe></div>
                </div>
            </div>
            <div class="col-1-3">
                <div class="wrap-col">
                    <h4><?php echo $footer["side3"]["title"] ?></h4>
                    <p><span>mon.</span> 17:00 - 21:00</p>
                    <p><span>tue.-wed.</span> 16:30 – 21:00</p>
                    <p><span>thu.-sat.</span> 16:30 – 21:00</p>
                    <p><span>sun.</span> 11:00 – 21:00</p>
                    <p><span><?php echo $footer["side3"]["heading"] ?></span></br>
                        <?php echo $footer["side3"]["desc"] ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="wrapper">
            <?php echo $footer["copyright"] ?> <a href="#"></a>
            <ul class="quick-link f-right">
                <?php foreach ($footer["quicklink"] as $item): ?>
                <li><a href="<?php echo $item["link"] ?>"> <?php echo $item["title"] ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</footer>


<!-- js -->
<script src="js/classie.js"></script>
<script src="js/demo.js"></script>

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/responsiveslides.min.js"></script>
<script>
$(function() {
    // Slideshow 4
    $("#slider4").responsiveSlides({
        auto: true,
        pager: false,
        nav: false,
        speed: 500,
        namespace: "callbacks",
        before: function() {
            $('.events').append("<li>before event fired.</li>");
        },
        after: function() {
            $('.events').append("<li>after event fired.</li>");
        }
    });
});
</script>
</div>
</body>

</html>