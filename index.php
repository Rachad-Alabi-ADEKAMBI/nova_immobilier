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
                <?php include 'parts/header.php'; ?>
             
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
        </div>

        <?php include 'parts/callAgent.php'; ?>

        <?php include 'parts/testimonial.php'; ?>

        <?php include 'parts/footer.php'; ?>
    </div>

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
                /*   axios.get('api/script.php?action=availableDatas')
                        .then((response) => {
                            console.log(response.data);
                            this.details = response.data;
                        })
                        .catch((error) => {
                            console.error(error);
                            alert('Failed to fetch data');
                        });
                    */
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
    </div>

    <?php include 'parts/includeJs.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
   
</body>

</html>