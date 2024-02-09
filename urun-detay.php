<?php include __DIR__ . '/views/header.php' ?>
<?php $inner_pages=true; ?>
<?php include __DIR__ . '/views/navbar.php' ?>
<?php include __DIR__.'/business/product-detail.response.php' ?>
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="<?=base_url?>">Anasayfa</a></li>
                <li><a href="<?=base_url?>/asansorler">Asansörler</a></li>
                <li><?php echo $product['product_name'] ?></li>
            </ol>
            <h2><?php echo $product['product_name'] ?></h2>

        </div>
    </section><!-- End Breadcrumbs -->
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6">
                    <div class="img-container">
                        <img src="<?=base_url?>/assets/img/products/<?php echo $product['product_image'] ?>" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="portfolio-description">
                        <?php echo $product['product_description'] ?>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->
</main>
<?php include __DIR__ . '/views/footer.php' ?>