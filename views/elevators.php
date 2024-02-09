<?php include __DIR__ . '/../business/product.response.php' ?>
<section id="asansorler" class="services section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Asansörler</h2>
            <p>
                Modern ve güvenilir asansör çözümlerini içeren geniş bir ürün yelpazesini keşfedin. Yaşam alanlarınızı
                daha güvenli ve fonksiyonel hale getirmek için en yeni teknolojiye sahip asansör seçenekleriyle tanışın.
            </p>
        </div>

        <div class="row justify-content-center">
            <?php foreach($products as $product ): ?>
                <div class="col-lg-4 mb-4">
                    <article class="card">
                        <img class="card-background" src="assets/img/products/<?php echo $product['product_image'] ?>"
                            alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                            width="1920" height="518" />
                        <div class="card-content | flow">
                            <div class="card-content-container | flow">
                                <h2 class="card-title"><?php echo $product['product_name'] ?></h2>
                                <p class="card-description">
                                    <?php echo $product['product_short_description'] ?>
                                </p>
                            </div>
                            <a href="<?= base_url ?>/asansor/<?php echo $product['product_url'] ?>" class="card-button">DETAY</a>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section><!-- End Services Section -->