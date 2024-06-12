<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'parts/meta.php'; ?>

    <title>Nova Immobilier Parakou - Accueil</title>
</head>

<body>
    <div class="app" id="app">
        <div class="container-xxl bg-white p-0">
            <?php include 'parts/spinner.php'; ?>

            <?php include 'parts/header.php'; ?>

            <!-- Header Start -->
            <div class="container-fluid header bg-white p-0" >
                <div class="row g-0 align-items-center flex-column-reverse
                flex-md-row pt-5">
                    <div class="col-md-6 p-5 mt-lg-5    ">
                        <h1 class="display-5 animated fadeIn mb-4">Trouvez <span class="text-primary">l'appartement
                                parfait</span>
                            pour habiter avec votre famille</h1>
                        <p class="animated fadeIn mb-4 pb-2">Dites nous juste ce que vous recherchez, nous nous chargeons du
                            reste</p>
                        <a href="properties.php" class="btn btn-primary py-3 animated fadeIn">Voir les annonces</a>
                    </div>
                    <div class="col-md-6 animated fadeIn">
                        <div class="owl-carousel header-carousel">
                            <div class="owl-carousel-item">
                                <img class="img-fluid" src="img/home1.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header End -->
            <?php include 'parts/search.php'; ?>


            <!-- Category Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        <h1 class="mb-3">Types de propriétés</h1>
                        <p>Nous sommes spécialisés dans la location et 
                            la vente de biens immobiliers à Parakou et environs
                        </p>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-4 col-sm-12 wow fadeInUp" data-wow-delay="0.1s">
                            <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                                <div class="rounded p-4">
                                    <div class="icon mb-3">
                                        <img class="img-fluid" src="img/icon-apartment.png" alt="Icon">
                                    </div>
                                    <h6>Appartements</h6>
                                    <span>+ 40 annonces</span>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 col-sm-12 wow fadeInUp" data-wow-delay="0.5s">
                            <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                                <div class="rounded p-4">
                                    <div class="icon mb-3">
                                        <img class="img-fluid" src="img/icon-house.png" alt="Icon">
                                    </div>
                                    <h6>Maisons</h6>
                                    <span>+ 20 annonces</span>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 col-sm-12 wow fadeInUp" data-wow-delay="0.5s">
                            <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                                <div class="rounded p-4">
                                    <div class="icon mb-3">
                                        <img class="img-fluid" src="img/icon-condominium.png" alt="Icon">
                                    </div>
                                    <h6>Terrains</h6>
                                    <span>15 annonces</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Category End -->

                <div class="container-xxl py-5" id='app'>
                        <div class="container">
                            <!-- Property List Start -->
                            <div class="row g-0 gx-5 align-items-end">
                                <div class="col-lg-6">
                                    <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                                        <h1 class="mb-3">Dernières annonces</h1>
                                        <p>Nous publions chaque jour des dizaines d'annonces d'appartements, maisons terrains et
                                            autres dans la ville de Parakou</p>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-content" >
                                <div id="tab-1" class="tab-pane fade show p-0 active">
                                        <div class="row g-4" >
                                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" v-for='detail in details' :key='detail.id'>
                                                    <div class="property-item rounded overflow-hidden" @click='goToProperty(detail.id)'>
                                                        <div class="position-relative overflow-hidden">
                                                                <img class="img-fluid" :src="getImg(detail.pic1)" alt="">
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
                                                            <h5 class="text-primary mb-3"> {{ format(detail.price )}} F CFA </h5>
                                                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i> {{ detail.location}}</p>
                                                        </div>
                                                    

                                                    </div>
                                                </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                </div>
            <!-- Property List End -->


            <?php include 'parts/callAgent.php'; ?>

            <?php include 'parts/testimonial.php'; ?>


            <?php include 'parts/footer.php'; ?>
        
        </div>
    </div>

    <?php include 'parts/includeJs.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script>
            new Vue({
                el: '#app',
                data: {
                    details: ''        
                },
                mounted(){
                    this.displayDetails();
                },
                methods: {
                    displayDetails(){
                    axios.get('api/script.php?action=availableDatas')
                            .then((response) => {
                                console.log(response.data);
                                this.details = response.data;
                            })
                            .catch((error) => {
                                console.error(error);
                                alert('Failed to fetch data');
                            });
                    }, 
                    format(num){
                        return new Intl.NumberFormat('fr-FR', { maximumSignificantDigits: 3 }).format(num);
                    },
                    formatDate(da) {
                        const [datePart, timePart] = da.split(' ');
                        const [year, month, day] = datePart.split('-');
                        return `${day}-${month}-${year}`;
                    },
                    getImg(pic) {
                        return "img/" + pic;
                    },
                    goToProperty(id){
                            window.location.replace('property.php?id='+id);
                    }
                }
            });
        </script>
   
</body>

</html>