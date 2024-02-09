<?php include __DIR__ . '/views/header.php' ?>
<?php $inner_pages=true; ?>
<?php include __DIR__ . '/views/navbar.php' ?>
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="<?=base_url?>">Anasayfa</a></li>
                <li>Referanslarımız</li>
            </ol>
            <h2>Referanslarımız</h2>

        </div>
    </section><!-- End Breadcrumbs -->
    <?php include __DIR__.'/views/our-reference.php' ?>
</main>
<?php include __DIR__ . '/views/footer.php' ?>