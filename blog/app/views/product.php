<section>

    <?php if (!empty($product)) : ?>
        <div class="bg_in">
            <div class="breadcrumbs">

                <ol itemscope itemtype="http://schema.org/BreadcrumbList">

                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">

                        <a itemprop="item" href=".">

                            <span itemprop="name">Trang chủ</span></a>

                        <meta itemprop="position" content="1" />

                    </li>

                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">

                        <a itemprop="item" href="sanpham.php">

                            <span itemprop="name"><?php echo $product[0]['title_category_product'] ?></span></a>

                        <meta itemprop="position" content="2" />

                    </li>


                </ol>

            </div>
            <div class="module_pro_all">
                <div class="box-title">
                    <div class="title-bar">
                        <h1>Danh mục : <?php echo $product[0]['title_category_product'] ?></h1>
                        <!-- <a class="read_more" href="sanpham.php">
                        Xem thêm
                    </a> -->
                    </div>
                </div>
                <div class="pro_all_gird">
                    <div class="girds_all list_all_other_page ">

                        <!-- Bổ sung code tại đây -->

                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        <?php endif ?>
</section>
<!--end:body-->
<div class="clear"></div>