 <!-- Navbar Start -->
 <div class="container-fluid nav-bar bg-transparent">
     <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
         <a href="index.php" class="navbar-brand d-flex align-items-center text-center">
             <div class="icon p-2 me-2">
                 <img class="img-fluid" src="img/logo.png" alt="Icon" style="width: 30px; height: 30px;">
             </div>
             <h1 class="m-0 text-primary">Nova Immo</h1>
         </a>
         <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarCollapse">
             <div class="navbar-nav ms-auto">
                 <a href="index.php" class="nav-item nav-link active">Accueil</a>
                 <a href="index.php#about" class="nav-item nav-link">A-propos</a>
                 <div class="nav-item dropdown">
                     <a href="properties.php" class="nav-link">Annonces</a>
                 </div>
                        <?php if (!isset($_SESSION['user']) || !$_SESSION['user']) { ?>
                            <a href="login.php" class="nav-item nav-link">Connexion</a>
                        <?php } else { ?>
                            <a href="dashboard.php" class="nav-item nav-link">Tableau de bord</a>
                            <a href="logout.php" class="nav-item nav-link">Déconnexion</a>
                        <?php } ?>

                 <a href="https://wa.me/22961069401?text=Bonjour...%20" class="nav-item nav-link">Contact</a>
             </div>
             <a href="https://wa.me/22961069401?text=Bonjour...%20" class="btn btn-primary px-3 d-none d-lg-flex">Déposer une annonce</a>
         </div>
     </nav>
 </div>
 <!-- Navbar End -->