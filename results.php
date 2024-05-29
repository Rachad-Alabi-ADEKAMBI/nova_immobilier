<?php 
    session_start();
    $datas = $_SESSION['search_results'];
   // var_dump($datas);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nova immobilier - Résultats</title>
    <?php include 'parts/meta.php'; ?>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <?php include 'parts/spinner.php'; ?>
        <?php include 'parts/header.php'; ?>
        <?php include 'parts/search.php'; ?>

        <div class="container">
            <!-- Property List Start -->
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-sm-12">
                    <div class="text-start mx-auto text-center mb-5 wow slideInLeft" data-wow-delay="0.1s">
                        <h1 class="mx-auto mb-3">Résultats de la recherche</h1>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <?php foreach ($datas as $detail): ?>
                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                        <a href="property.php?id=<?=$detail['id']?>">
                                            <div class="property-item rounded overflow-hidden">
                                                <div class="position-relative overflow-hidden">
                                                    <img class="img-fluid" src="img/<?= htmlspecialchars($detail['pic1']) ?>" alt="">
                                                    <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                                        <?= htmlspecialchars($detail['action']) ?>
                                                    </div>
                                                    <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                                        <?= htmlspecialchars($detail['category']) ?>
                                                    </div>
                                                </div>
                                                    <div class="p-4 pb-0">
                                                    <h5 class="text-primary mb-3"> <?= number_format($detail['price'], 0, '', ' ') ?> F CFA </h5>
                                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i><?= htmlspecialchars($detail['location']) ?></p>
                                                </div>
                                               <?php
                                                    if($detail['category'] != 'Terrain'){ ?>
                                                         <div class="d-flex border-top">
                                                    <small class="flex-fill text-center border-end py-2">
                                                        <i class="fa fa-ruler-combined text-primary me-2"></i><?= htmlspecialchars($detail['people']) ?> ménage<?= $detail['people'] > 1 ? 's' : '' ?>
                                                    </small>
                                                    <small class="flex-fill text-center border-end py-2">
                                                        <i class="fa fa-bed text-primary me-2"></i><?= htmlspecialchars($detail['rooms']) ?> chambre<?= $detail['rooms'] > 1 ? 's' : '' ?>
                                                    </small>
                                                    <small class="flex-fill text-center py-2">
                                                        <i class="fa fa-bath text-primary me-2"></i><?= htmlspecialchars($detail['bathrooms']) ?> douche<?= $detail['bathrooms'] > 1 ? 's' : '' ?>
                                                    </small>
                                                </div>
                                                    <?php }
                                               ?>
                                            </div>
                                        </a>
                                    </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'parts/footer.php'; ?>
    </div>


    <?php include 'parts/includeJs.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
</body>

<style>
    a{
        color: #666565;
    }
</style>

</html>
