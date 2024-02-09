<?php include __DIR__ . '/../business/our-document.response.php' ?>
<section id="our-document" class="our-document">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Belgelerimiz</h2>
            <p>
                Şirketimizin politikaları, prosedürleri ve diğer önemli belgeleri bu bölümde bulabilirsiniz. İş etiği
                standartları, güvenlik politikaları ve kurumsal yönergeler gibi şirketimizin temel belgelerine buradan
                erişebilirsiniz.
            </p>
        </div>

        <div class="row content">
        <?php foreach ($ourDocuments as $document): ?>
                <div class="col-lg-4">
                    <a data-bs-toggle="modal" data-bs-target="#belgelerimizModal"
                        data-bs-pdf-path="assets/documents/<?php echo $document['document_path'] ?>"
                        data-bs-pdf-title="<?php echo $document['document_title'] ?>">

                        <div class="document-card mb-4" data-aos="fade-up" data-os-delay="100">
                            <div class="icon">
                                <i class="bi bi-file-earmark-pdf"></i>
                            </div>
                            <h4><?php echo $document['document_title'] ?></h4>
                            <p>Belgeyi Görüntülemek İçin Tıklayın</p>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<div class="modal fade p-0" id="belgelerimizModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="padding:0;overflow:hidden">
                <iframe src="" width="100%" height="100%"></iframe>
            </div>
        </div>
    </div>
</div>
<script>
    const belgelerimizModal = document.getElementById('belgelerimizModal');

    if (belgelerimizModal) {
        belgelerimizModal.addEventListener('show.bs.modal', event => {
            const button = event.relatedTarget;
            const recipientPdfPath = button.getAttribute('data-bs-pdf-path');
            const recipientPdfTitle = button.getAttribute('data-bs-pdf-title')
            const iframe = belgelerimizModal.querySelector('.modal-body iframe');
            const modalTitle = belgelerimizModal.querySelector('.modal-title');
            modalTitle.textContent = recipientPdfTitle;
            iframe.src = recipientPdfPath;
        });
    }
</script>