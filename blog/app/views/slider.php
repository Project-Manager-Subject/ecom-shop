<section>
    <div class="bg_in">
        <div class="col-md-7 col-xs-12 col-sm-12" style="padding: 0;margin-top:10px;">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>


                <div class="carousel-inner">
                    <div class="item active">
                        <img src="//cdn.tgdd.vn/2022/11/banner/800-200-800x200-182.png" alt="Siêu khuyến mãi">
                    </div>

                    <div class="item">
                        <img src="//cdn.tgdd.vn/2022/12/banner/800-200-800x200-140.webp" alt="Siêu khuyến mãi">
                    </div>

                    <div class="item">
                        <img src="//cdn.tgdd.vn/2022/12/banner/laphp-800-200-800x200.webp" alt="Siêu khuyến mãi">
                    </div>
                </div>


                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-md-4 col-xs-12 col-sm-12" style="padding: 0;margin-left:30px;margin-top:5px;">

            <div class="row">
                <div style="height: 360px !important; overflow-y: hidden;" class="panel  panel-warning panel-styling">
                    <div class="panel-heading">Tin tức cập nhật</div>
                    <marquee onmouseover="this.stop()" onmouseout="this.start()" direction="down">
                        <div class="panel-body">
                            <?php if (!empty($post)) :
                                foreach ($post as $key => $value) :
                            ?>
                                    <a href="<?php echo BASE_URL ?>/post_home/details/<?php echo $value['id_post'] ?>">
                                        <div class="row">
                                            <div class="col-md-4 col-xs-4 col-sm-4">
                                                <img src="<?php echo BASE_URL ?>/public/upload/post/<?php echo $value['image_post'] ?>">
                                            </div>
                                            <div class="col-md-8 col-xs-8 col-sm-8">
                                                <h4><?php echo $value['title_post'] ?></h4>
                                                <p><?php echo substr($value['desc_post'], 0, 80) ?>...</p>
                                            </div>
                                        </div>
                                    </a>
                                <?php endforeach ?>
                            <?php endif ?>
                        </div>
                    </marquee>
                </div>
            </div>

        </div>

    </div>
    <div class="clear"></div>
</section>