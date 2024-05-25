<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nova Immo - Voir propriété</title>

    <?php include 'parts/meta.php'; ?>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <?php include 'parts/spinner.php'; ?>

        <?php include 'parts/header.php'; ?>

        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center
             flex-column-reverse flex-md-row pt-5">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Voir propriété</h1>
                    <nav aria-label="breadcrumb animated fadeIn">
                    </nav>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <img class="img-fluid" src="img/home1.jpeg" alt="appartements a louer">
                </div>
            </div>
        </div>
        <!-- Header End -->


        <?php include 'parts/search.php'; ?>


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
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="img/appart1.jpeg" alt=""></a>
                                        <div
                                            class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            A louer</div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Appartement</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">60.000 F </h5>
                                        <a class="d-block h5 mb-2" href="">Nouvelle construction </a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Yokossi 2</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>R1</small>
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-bed text-primary me-2"></i>2 chambres</small>
                                        <small class="flex-fill text-center py-2"><i
                                                class="fa fa-bath text-primary me-2"></i>2 douches</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="img/home4.jpeg" alt=""></a>
                                        <div
                                            class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            A vendre</div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Maison</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">20.000.000 F</h5>
                                        <a class="d-block h5 mb-2" href="">Maison à vendre</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>face hotel Kobourou</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>R+1</small>
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-bed text-primary me-2"></i>4 chambres</small>
                                        <small class="flex-fill text-center py-2"><i
                                                class="fa fa-bath text-primary me-2"></i>3 douches</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="img/terrain3.jpg" alt=""></a>
                                        <div
                                            class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            A vendre</div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Terrain</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">1.200.000 F</h5>
                                        <a class="d-block h5 mb-2" href="">Parcelle agricole</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Tourou</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>1 ha</small>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-4 mt-5">
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="img/magasin1.jpg" alt=""></a>
                                        <div
                                            class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            A louer</div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Boutique</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">40.000 F </h5>
                                        <a class="d-block h5 mb-2" href="">Boutique au stade </a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Wansirou</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>R1</small>
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-bed text-primary me-2"></i>2 chambres</small>
                                        <small class="flex-fill text-center py-2"><i
                                                class="fa fa-bath text-primary me-2"></i>2 douches</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="">
                                            <img class="img-fluid" src="img/appart2.jpeg" alt=""></a>
                                        <div
                                            class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            A vendre</div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Maison</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">35.000 F</h5>
                                        <a class="d-block h5 mb-2" href="">Appartement à louer</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>face hotel Kobourou</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>R+1</small>
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-bed text-primary me-2"></i>4 chambres</small>
                                        <small class="flex-fill text-center py-2"><i
                                                class="fa fa-bath text-primary me-2"></i>3 douches</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="img/appart3.jpeg" alt=""></a>
                                        <div
                                            class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            A louer</div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Appartement</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">80.000</h5>
                                        <a class="d-block h5 mb-2" href="">Studio à louer</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Guema</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>R</small>
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-bed text-primary me-2"></i>1 chambres</small>
                                        <small class="flex-fill text-center py-2"><i
                                                class="fa fa-bath text-primary me-2"></i>1 douches</small>
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

        <?php include 'parts/footer.php'; ?>
        <script>
            new Vue({
                el: '#app',
                data: {
                    details: '',
                    id: <?= $_GET['id'] ?>;
                },
                mounted(){
                    this.displayDetails();
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
                    displayDetails(){
                        console.log('id');
                        axios.get('api/script.php?action=getProperty')
                            .then((response) => {
                                console.log(response.data);
                                this.details = response.data;
                            })
                            .catch((error) => {
                                console.error(error);
                                alert('Failed to fetch datas');
                            });

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
                    },
                    
                }
            });
        </script>
    </div>

    <?php include 'parts/includeJs.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>

</body>

</html>