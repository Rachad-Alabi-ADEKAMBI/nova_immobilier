<?php 
    session_start();
    
    //$datas = get('api/')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'parts/meta.php'; ?>

    <title>Nova Immobilier Parakou - Accueil</title>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <?php include 'parts/spinner.php'; ?>

        <?php include 'parts/header.php'; ?>

        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0" id='app'>
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


        <!-- About Start 
        <div class="container-xxl py-5" id='about'>
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="about-img position-relative overflow-hidden p-5 pe-0">
                            <img class="img-fluid w-100" src="img/bureau2.jpg">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">#1 le lieu idéal pour trouver votre prochaine propriété</h1>
                        <p class="mb-4">Nous sommes une agence immobilière présente
                            à Parakou. Notre équipe est composée d'agents immobiliers chevronnés et la satisfaction de
                            la clientèle est
                            notre garantie. Nous vous aidons à gérer
                            toutes
                            vos transactions immobilières rapidement et éfficacement. Nos services sont entre autres:
                        </p>
                        <p><i class="fa fa-check text-primary me-3"></i>La recherche de biens immobiliers (appartements,
                            maisons, etc...)</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Suivi et conseil en gestion immobilière
                            complète</p>
                        <p><i class="fa fa-check text-primary me-3"></i>La gestion de vos transactions de vente et achat
                            de biens immobiliers
                        </p>

                    </div>
                </div>
            </div>
        </div>
         About End -->


        <div class="container-xxl py-5">
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
    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" v-for='detail in details' :key='detail.id'>
        <div class="property-item rounded overflow-hidden" @click='goToProperty(detail.id)'>
            <div class="position-relative overflow-hidden">
                <a :href="'property.php?id=' + detail.id">
                    <img class="img-fluid" :src="getImg(detail.pic1)" alt="">
                </a>
                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                    {{ detail.action }}    
                </div>
                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                    {{ detail.category }}    
                </div>
            </div>
            <div class="p-4 pb-0">
                <h5 class="text-primary mb-3"> {{ detail.price }} F CFA </h5>
                <a class="d-block h5 mb-2" :href="'property.php?id=' + detail.id"> {{ detail.description }} </a>
                <p><i class="fa fa-map-marker-alt text-primary me-2"></i> {{ detail.location }}</p>
            </div>
            <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2">
                    <i class="fa fa-ruler-combined text-primary me-2"></i>
                    {{ detail.people }} ménage{{ detail.people > 1 ? 's' : '' }}
                </small>
                <small class="flex-fill text-center border-end py-2">
                    <i class="fa fa-bed text-primary me-2"></i>
                    {{ detail.rooms }} chambre{{ detail.rooms > 1 ? 's' : '' }}
                </small>
                <small class="flex-fill text-center py-2">
                    <i class="fa fa-bath text-primary me-2"></i>
                    {{ detail.bathrooms }} douche{{ detail.bathrooms > 1 ? 's' : '' }}
                </small>
            </div>
        </div>
    </div>
    
    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
        <a class="btn btn-primary py-3 px-5" href="properties.php">Voir plus</a>
    </div>
</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Property List End -->


        <?php include 'parts/callAgent.php'; ?>

        <!-- Team Start
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Liste des agents</h1>
                    <p>Nova Immo vous propose le meilleur service immobilier de Parakou et environs, découvrez notre
                        équipe.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/user1.jpg" alt="">
                                <div
                                    class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Jean</h5>
                                <small>agent immobilier</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/user2.jpg" alt="">
                                <div
                                    class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Paul</h5>
                                <small>Agent immobilier</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/user6.jpg" alt="">
                                <div
                                    class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Pierre</h5>
                                <small>Agent immobilier</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         Team End -->


        <!-- Testimonial Start -->
        <?php include 'parts/testimonial.php'; ?>
        <!-- Testimonial End -->


        <?php include 'parts/footer.php'; ?>
    </div>

    <?php include 'parts/includeJs.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script>
        new Vue({
            el: '#app',
            data: {
                details: []           },
            mounted(){
                this.displayDetails();
            },
            methods: {
                displayDetails(){
                    console.log(this.id);
                    axios.get('api/script.php?action=threeAds')
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
                getImgUrl(pic) {
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