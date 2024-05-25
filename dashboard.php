<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nova immobilier - Tableau de bord</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <?php include 'parts/meta.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
  
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <?php include 'parts/spinner.php'; ?>

        <?php include 'parts/header.php'; ?>

        <div id="app">
        <div class="row g-0 gx-5 align-items-end">
                    <!--menu-->   
                    <div class="col-sm-12 mt-3 text-center">
                                <div class="menu">
                                            <button class="btn btn-primary m-2" @click='displayNew()'>
                                                Nouvelle annonce
                                            </button>

                                            <button class="btn btn-primary m-2" @click='displayAll()'>
                                                Mes annonces
                                            </button>
                                </div>
                    </div>

                    <!--new add-->
                    <div class="col-sm-12 col-md-8 mt-4 mx-auto" v-if='showNew'>
                        <div class="bg-white border mt-2 rounded p-sm-5 wow fadeInUp" data-wow-delay="0.5s">
                            <form action="api/script.php?action=newAd" method="POST" enctype='multipart/form-data'>
                                <h1 class="mx-auto text-center">Nouvelle annonce</h1>

                                <div class="row g-3">
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" required name='name' placeholder="Nom">
                                            <label for="name">Nom</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-floating">
                                        <input type="text" class="form-control" required name='price' id="price" placeholder="Prix" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">

                                            <label for="price">Prix</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-3 mt-3">
                                    <div class="col-sm-4 col-md-4">
                                        <div class="form-floating">
                                            <select class="custom-select" name='category' v-model='category' required>
                                                <option selected>Catégorie</option>
                                                <option value="Appartement">Appartement</option>
                                                <option value="Maison">Maison</option>
                                                <option value="Terrain">Terrain</option>
                                            </select>
                                            <label for="category">Catégorie</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 col-md-4">
                                        <div class="form-floating">
                                            <select class="custom-select" name="action" required>
                                                <option selected>Action</option>
                                                <option value="A louer">A louer</option>
                                                <option value="A vendre">A vendre</option>
                                            </select>
                                            <label for="action">Action</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 col-md-4">
                                        <div class="form-floating">
                                            <select class="custom-select" name="Location" required>
                                                <option value=''>Quartier</option>
                                                <option value="Arafat">Arafat</option>
                                                <option value="Albarika">Albarika</option>
                                                <option value="Banikanni">Banikanni</option>
                                                <option value="Ganou">Ganou</option>
                                                <option value="Guema">Guema</option>
                                                <option value="Gbira">Gbira</option>
                                                <option value="Ladjifarani">Ladjifarani</option>
                                                <option value="Nima">Nima</option>
                                                <option value="Nouveau quartier">Nouveau quartier</option>
                                                <option value="Oke dama">Oke dama</option>
                                                <option value="Thian">Thian</option>
                                                <option value="Tititrou">Titirou</option>
                                                <option value="Tourou">Tourou</option>
                                                <option value="Tranza">Tranza</option>
                                                <option value="Yokossi 1">Yokossi 1</option>
                                                <option value="Yokossi 2">Yokossi 2</option>
                                                <option value="Zongo 1">Zongo 1</option>
                                                <option value="Zongo 2">Zongo 2</option>
                                            </select>
                                            <label for="quartier">Quartier</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-3 mt-3" v-if='showLand'>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-floating">
                                            <input type="number"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" class="form-control" name='size' id="size" placeholder="Superficie">
                                            <label for="size">Superficie</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-3 mt-3" v-if='showHouse'>
                                    <div class="col-sm-4 col-md-4">
                                        <div class="form-floating">
                                            <select class="custom-select" name='rooms'>
                                                <option >Chambres</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                            <label for="rooms">Chambres</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 col-md-4">
                                        <div class="form-floating"> <label for="bathrooms">Douches</label>
                                            <select class="custom-select" name='bathrooms'>
                                                <option >Douches</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        
                                        </div>
                                    </div>

                                    <div class="col-sm-4 col-md-4">
                                        <div class="form-floating">
                                        <label for="people">Ménages</label>
                                            <select class="custom-select" name='people'>
                                                <option >Ménages</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                            </select>
                                        
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-3 mt-3">
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" name='description' 
                                            required id="description" placeholder="Description"></textarea>
                                            <label for="description">Description</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-3 mt-3">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-floating">
                                            <input type="file" class="form-control"  accept=".jpg, .jpeg, .png, image/*"
                                            name='pic1' id="pic1" placeholder="Photo1" required>
                                            <label for="pic1">Photo 1</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-floating">
                                            <input type="file" class="form-control" name='pic2'  accept=".jpg, .jpeg, .png, image/*"
                                             id="pic2" placeholder="Photo2">
                                            <label for="pic2">Photo 2</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-floating">
                                            <input type="file" class="form-control" name='pic3'  accept=".jpg, .jpeg, .png, image/*"
                                             id="pic3" placeholder="Photo3">
                                            <label for="pic3">Photo 3</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-floating">
                                            <input type="file" class="form-control" name='pic4'  accept=".jpg, .jpeg, .png, image/*"
                                             id="pic4" placeholder="Photo4">
                                            <label for="pic4">Photo 4</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-3 mt-4">
                                    <div class="col-sm-12 col-md-4 mx-auto text-center">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Ajouter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--new add-->

                    <!-- list--> 
                    <div class='col-sm-12 col-md-8 mt-4 mx-auto data-wow-delay="0.5s"' v-if='showAll' >
                         <h1 class="mx-auto text-center">
                            Toutes les annonces
                         </h1>
                        <div class="mt-2table-container">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Nom</th>
                                            <th>Qtier</th>
                                            <th>Prix</th>
                                            <th>Image</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for='detail in details' :key='detail.id'>
                                            <td data-label="Date"> {{ formatDate(detail.date_of_insertion) }} </td>
                                            <td data-label="Nom">{{ detail.name }}</td>
                                            <td data-label="Qartier">{{ detail.location }} </td>
                                            <td data-label="Prix"> {{ format(detail.price) }} </td>
                                            <td data-label="Image">
                                                <img :src='getImgUrl(detail.pic1)' alt="">
                                            </td>
                                            <td data-label="" v-if='detail.situation == "Occupé"'>
                                                <button class="btn btn-sucsess" @click='validate(detail.id)' >
                                                    Publier
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
                showNew: false,
                showAll: true,
                category: '',
                details: '',
                showLand: false,
                showHouse: false
            },
            mounted(){
                this.displayAll();
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
                displayAll(){
                    this.showNew = false;
                    axios.get('api/script.php?action=allDatas')
                        .then((response) => {
                            // Ensure 'this' refers to the Vue component's instance
                            console.log(response.data);
                            this.details = response.data;
                        })
                        .catch((error) => {
                            console.error(error);
                            alert('Failed to fetch datas');
                        });
                    
                        this.showAll = true;
                },
                displayNew(){
                    this.showAll = false;
                    this.showNew = true;
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
                getCard(){
                    alert('We have received your query, please check your email');
                    window.location.replace('dashboard.php');
                },
            }
        });
    </script>

    </div>

    <?php include 'parts/includeJs.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>

<style>
          body {
            font-family: Arial, sans-serif;
        }
        .table-container {
            width: 100%;
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        @media (max-width: 600px) {
            table, thead, tbody, th, td, tr {
                display: block;
            }
            thead tr {
                display: none;
            }
            tr {
                margin-bottom: 15px;
            }
            td {
                position: relative;
                padding-left: 50%;
            }
            td::before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 50%;
                padding-left: 15px;
                font-weight: bold;
                background-color: #f4f4f4;
                border-right: 1px solid #ddd;
                box-sizing: border-box;
            }
        }

        img{
            width: 90px;
            height: 60px;
        }
    </style>

</body>

</html>