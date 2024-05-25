<?php 
    session_start();

    var_dump($_SESSION['search']);
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

            <div class="container" id="app">
                <div class="container">
                    <!-- Property List Start -->
                    <div class="row g-0 gx-5 align-items-end">
                        <div class="col-sm-12 ">
                            <div class="text-start mx-auto text-center mb-5 wow slideInLeft" data-wow-delay="0.1s">
                                <h1 class="mx-auto mb-3">
                                    Résultats de la recherche
                                </h1>
                                <ul>
            <li v-for="detail in list" :key="detail.id">{{ detail.id }}</li>
        </ul>
                                <p class="text text-center">Nous publions chaque jour des dizaines d'annonces  la ville de Parakou</p>
                            </div>
                        </div>
                        <!--
                        <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                            <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                                <li class="nav-item me-2">
                                    <a class="btn btn-outline-primary active" data-bs-toggle="pill"
                                        href="#tab-1">Populaires</a>
                                </li>
                                <li class="nav-item me-2">
                                    <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-2">A vendre</a>
                                </li>
                                <li class="nav-item me-0">
                                    <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-3">A louer</a>
                                </li>
                            </ul>
                        </div>
                        -->
                    </div>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" >
                                    <div class="property-item rounded overflow-hidden">
                                        <div class="position-relative overflow-hidden">
                                            <a href="">
                                                <img class="img-fluid" :src="getImg(detail.pic1)" alt=""></a>
                                            <div
                                                class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                                {{ detail.action }}    
                                            </div>
                                            <div
                                                class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                                {{ detail.category }}    
                                            </div>
                                        </div>
                                        <div class="p-4 pb-0">
                                            <h5 class="text-primary mb-3"> {{ detail.price }} F CFA </h5>
                                            <a class="d-block h5 mb-2" href=""> {{ detail.description }} </a>
                                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i> {{ detail.location}}</p>
                                        </div>
                                        <div class="d-flex border-top">
                                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>{{detail.people}} ménage{{detail.people > 1 ? 's' : ''}}</small>
                                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>{{detail.rooms}} chambre{{detail.rooms > 1 ? 's' : ''}}</small>
                                            <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>{{detail.bathrooms}} douche{{detail.bathrooms > 1 ? 's' : ''}}</small>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
        <?php include 'parts/footer.php'; ?>
        <script>
        new Vue({
            el: '#app',
            data: {
                details: '',
                list: <?php echo json_encode($_SESSION['search']); ?>
            },
            mounted(){
                this.displayResults();
            },
            watch: {
                    category() {
                    if (this.category == 'Terrain') {
                        this.showLand = true;
                        this.showHouse = false;
                    } else{
                        this.showLand = false;
                        this.showHouse = true;
                    }
                    }
                },  
            methods: {
                displayResults(){
                    this.showNew = false;
                    axios.get('api/script.php?action=results')
                        .then((response) => {
                            console.log(response.data);
                            this.details = response.data;
                        })
                        .catch((error) => {
                            console.error(error);
                            alert('Failed to fetch datas');
                        });
                    
                        this.showAll = true;
                },
                 format(num){
                    let res = new Intl.NumberFormat('fr-FR', { maximumSignificantDigits: 3 }).format(num);
                         return res;
                },
                formatDate(da) {
                    const [datePart, timePart] = da.split(' ');
                    const [year, month, day] = datePart.split('-');
                    return `${day}-${month}-${year}`;
                    },
                getImgUrl(pic) {
                    return "img/" + pic;
                },
                getImg(pic) {
                    return "img/" + pic;
                }
            }
        });
    </script>
    </div>

    <?php include 'parts/includeJs.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>

</body>

</html>