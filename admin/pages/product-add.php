<?php include '_header.php' ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Asansör Ekle</h6>
            </div>
            <!-- Card Content - Collapse -->
            <div class="card-body">

                <form action="../_business/product.request.php" method="post" enctype="multipart/form-data" >

                    <div class="mb-3">
                        <label class="form-label">Asansör Resim</label>
                        <input class="form-control" type="file" name="product_image" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Asansör Adı</label>
                        <input class="form-control" type="text" name="product_name" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Asansör Kısa Açıklaması</label>
                        <input class="form-control" type="text" name="product_short_description">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Asansör Özellikleri</label>
                        <textarea class="editor" name="product_description">
                        </textarea>
                    </div>

                    <div class="d-grid gap-2 mt-2">
                        <button type="submit" name="add_product" class="btn btn-primary">Kaydet</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="ckeditor/ckeditor.js"></script>
<script src="ckeditor/script.js"></script>
<?php include '_footer.php' ?>