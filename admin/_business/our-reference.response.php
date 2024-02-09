<?php
require_once __DIR__.'/../_classes/our-reference.class.php';

$ourReferenceModel = new OurReference();

$ourReferences = $ourReferenceModel->getOurReferences();


function paginateItems($items, $itemsPerPage, $currentPage) {
    $totalItems = count($items);

    // Toplam sayfa sayısını bulma
    $totalPages = ceil($totalItems / $itemsPerPage);

    // Hangi öğelerin gösterileceğini belirleme
    $offset = ($currentPage - 1) * $itemsPerPage;
    $paginatedItems = array_slice($items, $offset, $itemsPerPage);

    return [
        'paginatedItems' => $paginatedItems,
        'totalPages' => $totalPages
    ];
}
$itemsPerPage = 12; // Her sayfada gösterilecek ürün sayısı
$current_page = isset($_GET['page']) ? $_GET['page'] : 1; //Mevcut Sayfayı Bulma
$paginationResult = paginateItems($ourReferences, $itemsPerPage, $current_page);
$ourReferences = $paginationResult['paginatedItems'];
$totalPages = $paginationResult['totalPages'];

?>