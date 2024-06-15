<!-- Search Start -->
<div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
    <div class="container">
        <form class="row g-2" action="api/script.php?action=search" method="POST">
            <div class="col-md-10">
                <div class="row g-2">
                    <!--
                    <div class="col-md-4">
                        <input type="text" class="form-control border-0 py-3" placeholder="Mots-clés">
                    </div>
                    -->

                   
                    <div class="col-md-4">
                        <select class="form-select border-0 py-3" name='category'>
                            <option >Type de bien</option>
                            <option value="Appartement">Appartement</option>
                            <option value="Maison">Maison</option>
                            <option value="Terrain">Terrain</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <select class="form-select border-0 py-3" name='action'>
                            <option >Action</option>
                            <option value="A louer">A louer</option>
                            <option value="A vendre">A vendre</option>
                        </select>
                    </div>
                 
                    <div class="col-md-4">
                    <select class="form-select border-0 py-3"  name="location" required>
                                                <option value=''>Quartier</option>
                                                <option value="Amanwignon">Amanwignon</option>
                                                <option value="Arafat">Arafat</option>
                                                <option value="Albarika">Albarika</option>
                                                <option value="Banikanni">Banikanni</option>
                                                 <option value="Bah-mora">Bah-mora</option>
                                                <option value="Baka">Baka</option>
                                                 <option value="Bawé">Bawé</option>
                                                <option value="dépot">Dépôt</option>
                                                <option value="Ganou">Ganou</option>
                                                <option value="Guema">Guema</option>
                                                <option value="Gbira">Gbira</option>
                                                <option value="Kpébié">Kpébié</option>
                                                <option value="Ladjifarani">Ladjifarani</option>
                                                <option value="Nima">Nima</option>
                                                <option value="Nouveau quartier">Nouveau quartier</option>
                                                <option value="Oké dama">Oké dama</option>
                                                 <option value="Swinrou">Swinrou</option>
                                                <option value="Thian">Thian</option>
                                                <option value="Titirou">Titirou</option>
                                                <option value="Tourou">Tourou</option>
                                                <option value="Tranza">Tranza</option>
                                                <option value="Wansirou">Wansirou</option>
                                                <option value="Yokossi 1">Yokossi 1</option>
                                                <option value="Yokossi 2">Yokossi 2</option>
                                                <option value="Zongo 1">Zongo 1</option>
                                                <option value="Zongo 2">Zongo 2</option>
                                            </select>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-dark border-0 w-100 py-3">
                    Chercher
            </div>
        </div>
    </div>
</div>
<!-- Search End -->