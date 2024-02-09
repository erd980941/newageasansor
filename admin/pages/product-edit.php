<?php include '_header.php' ?>
<?php include '../_business/product.response.php'; ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Ürün Düzenle</h6>
            </div>
            <!-- Card Content - Collapse -->
            <div class="card-body">
                <img src="../../assets/img/products/<?php echo $product['product_image'] ?>" class="img-responsive"
                    width="300">
                <hr>
                <form action="../_business/product.request.php" method="post"  enctype="multipart/form-data">
                    <input type="hidden" name="product_id" value="<?php echo $product['product_id'] ?>">

                    <div class="mb-3">
                        <label class="form-label">Fotoğraf</label>
                        <input type="file" class="form-control" name="product_image">
                        <div class="form-text">İzin Verilen Uzantılar ( jpg, jpeg, png ), Dosya En Boy Oranı 1:1
                            Olmalıdır.</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ürün Adı</label>
                        <input class="form-control" type="text" name="product_name"
                            value="<?php echo $product['product_name'] ?>" required>
                    </div>


                    <div class="mb-3">
                        <label class="form-label">Ürün Kısa Açıklaması</label>
                        <input class="form-control" type="text" name="product_short_description"
                            value="<?php echo $product['product_short_description'] ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ürün Açıklama</label>
                        <textarea class="editor" name="product_description">
                            <?php echo $product['product_description'] ?>
                        </textarea>
                    </div>

                    <div class="d-grid gap-2 mt-2">
                        <button type="submit" name="edit_product" class="btn btn-primary">Kaydet</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="ckeditor/ckeditor.js"></script>
<script src="ckeditor/script.js"></script>
<?php include '_footer.php' ?>