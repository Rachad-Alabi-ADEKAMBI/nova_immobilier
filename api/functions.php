<?php
session_start();

/*
function getConnexion()
{
    try {
        return new PDO(
            'mysql:host=localhost;dbname=rapid_link;charset=UTF8',
            'id22185176_rapid_link',
            'Rapid_link0'
        );
    } catch (PDOException $e) {
        // Handle database connection error
        die("Connection failed: " . $e->getMessage());
    }
}


*/

function getConnexion()
{
    try {
        return new PDO(
            'mysql:host=localhost;dbname=nova_immo;charset=UTF8',
            'root',
            ''
        );
    } catch (PDOException $e) {
        // Handle database connection error
        die("Connection failed: " . $e->getMessage());
    }
}

function newAd(){
    $pdo = getConnexion();
    $job = verifyInput($_POST['job']);

    $name = verifyInput($_POST['name']);
    $price = verifyInput($_POST['price']);
    $category = verifyInput($_POST['category']);
    $action = verifyInput($_POST['action']);
    $location = verifyInput($_POST['location']);
    $description = verifyInput($_POST['description']);

    if($category == 'Terrain'){
        $size = verifyInput($_POST['size']);
        $rooms = 0;
        $bathrooms = 0;
        $people = 0;
    } else{
        $size = '';
        $rooms = verifyInput($_POST['rooms']);
        $bathrooms = verifyInput($_POST['bathrooms']);
        $people = verifyInput($_POST['people']);
    }

    $situation = 'Disponible';

    //update
    try {
        $req = $pdo->prepare('INSERT INTO ads SET name = ?, price = ?, category = ?,
            action = ?, location = ?, description = ?, rooms = ?, bathrooms = ?,
                people = ?, situation = ?, size = ?');
        $req->execute(array($name, $price,  $category, $action, $location,
            $description, $rooms, $bathrooms, $people, $situation, $size));

       
    } catch (PDOException $e) {
        echo 'Database error: ' . $e->getMessage();
    }

    $ad_id = $pdo->lastInsertId();

    //pic
    $pic_fields = ['pic1', 'pic2', 'pic3', 'pic4'];
    $base_dir = '../img/';
    
    foreach ($pic_fields as $pic_field) {
        if (isset($_FILES[$pic_field]) && $_FILES[$pic_field]['error'] == 0) {
            $pic_name = time() . '_' . $_FILES[$pic_field]['name'];
            $target = $base_dir . $pic_name;
    
            if (move_uploaded_file($_FILES[$pic_field]['tmp_name'], $target)) {
                $req = $pdo->prepare("UPDATE ads SET $pic_field = ? WHERE id = ?");
                $req->execute([$pic_name, $ad_id]);
            }
        }
    }

      ?>
     
      <script>
     //     alert('Annonce ajoutée avec succès !!');
      //    window.location.replace('../dashboard.php')
      </script>
    <?php

}

function getAllDatas(){
    $pdo = getConnexion();
    $req = $pdo->prepare("SELECT * FROM ads ORDER BY id DESC");
    $req->execute();
    $datas = $req->fetchAll();
    $req->closeCursor();
    sendJSON($datas);
}

function getAvailableDatas(){
    $pdo = getConnexion();
    $req = $pdo->prepare("SELECT * FROM ads WHERE situation = 'Disponible' ORDER BY id DESC");
    $req->execute();
    $datas = $req->fetchAll();
    $req->closeCursor();
    sendJSON($datas);
}

function search() {
    $pdo = getConnexion();

    // Sanitize and retrieve POST variables
    $action = verifyInput($_POST['action']);
    $category = verifyInput($_POST['category']);
    $location = verifyInput($_POST['location']);

 //   echo $location;

     // Prepare the SQL query with action and location filters
    $req = $pdo->prepare("SELECT * FROM ads WHERE action = ?
     AND location = ? 
     and category = ?
     AND situation = 'Disponible'
     ORDER BY id DESC");
    $req->execute([$action, $location, $category]);

    // Fetch all results
    $datas = $req->fetchAll(PDO::FETCH_ASSOC);
    $req->closeCursor();
    
    if (count($datas) == 0) {
        ?>
            <script>
                alert("Aucun résultat pour cette recherche !!");
                window.history.back(); // This will navigate back to the previous page
            </script>
        <?php

        exit();
    }
    
    

    // Initialize an empty results array
    $results = [];

    // Populate the results array with fetched data
    foreach($datas as $data) {
        $results[] = array(
            'id' => $data['id'],
            'name' => $data['name'],
            'category' => $data['category'],
            'pic1' => $data['pic1'],
            'rooms' => $data['rooms'],
            'bathrooms' => $data['bathrooms'],
            'people' => $data['people'],
            'size' => $data['size'],
            'location' => $data['location'],
            'price' => $data['price']
        );
    }

    // Start session and store results
    session_start();
    $_SESSION['search_results'] = $results;
    
    header("Location: ../results.php", true, 301);  

}

function getProperty(){
    $pdo = getConnexion();
    $id = verifyInput($_GET['id']);

    if ($id == 0 || $id < 0) { ?>
        <script>
            alert('Une erreur est survenue, merci de vérifier cette url');
        </script>
        <?php
        exit(); 
    } else {
        $req = $pdo->prepare('SELECT * FROM ads WHERE id = ?');
        $req->execute(array($id));
        $datas = $req->fetchAll();

        sendJSON($datas);
    }
}

function pause(){
    $pdo = getConnexion();
    $id = verifyInput($_GET['id']);

    if ($id == 0 || $id < 0) { ?>
        <script>
            alert('Une erreur est survenue, merci de vérifier cette url');
        </script>
        <?php
        exit(); 
    } else {
        $req = $pdo->prepare("UPDATE ads SET situation = 'Non disponible' WHERE id = ?");
        $req->execute(array($id));
        ?>
            <script>
                alert('Annonce mise en pause !!');
                header('Location: ../dashboard.php');
            </script>

<?php 
    }
}

function publish(){
    $pdo = getConnexion();
    $id = verifyInput($_GET['id']);

    if ($id == 0 || $id < 0) { ?>
        <script>
            alert('Une erreur est survenue, merci de vérifier cette url');
        </script>
        <?php
        exit(); 
    } else {
        $req = $pdo->prepare("UPDATE ads SET situation = 'Disponible' WHERE id = ?");
        $req->execute(array($id));
        ?>
            <script>
                alert('Annonce publiée !!');
                header('Location: ../dashboard.php');
            </script>

<?php 
    }
}

function delete(){
    $pdo = getConnexion();
    $id = verifyInput($_GET['id']);

    if ($id == 0 || $id < 0) { ?>
        <script>
            alert('Une erreur est survenue, merci de vérifier cette url');
        </script>
        <?php
        exit(); 
    } else {
        $req = $pdo->prepare("DELETE FROM ads WHERE id = ?");
        $req->execute(array($id));
        ?>
            <script>
                alert('Annonce supprimée !!');
                header('Location: ../dashboard.php');
            </script>

<?php 
    }
}

function threeAds(){
    $pdo = getConnexion();
    $req = $pdo->prepare("SELECT * FROM ads WHERE situation = 'Disponible' ORDER BY id DESC LIMIT 3");
    $req->execute();
    $datas = $req->fetch();
    $req->closeCursor();
    sendJSON($datas);
}






function login()
{

    if (!empty($_POST)) {
        $pdo = getConnexion();
        

        $errors = [];

        if (
            isset($_POST['username'], $_POST['password']) &&
            !empty($_POST['username'] && !empty($_POST['password']))
        ) {
            $sql = 'SELECT * FROM `users` WHERE `username` = ?';

            $query = $pdo->prepare($sql);

            $query->execute([verifyInput($_POST['username'])]);

            $user = $query->fetch();

            $pass = verifyInput($_POST['password']);

            if (!$user) {
                $errors['user'] = 'Veuillez vérifier les identifi';
            }

            if ($user['password'] != $pass) {
                $errors['pass'] = 'Veuillez vérifier les identifiantssss';
            }
            
           
            if (!empty($errors)) {
                $_SESSION['login'] = [
                    'username' => verifyInput($_POST['username']),
                ]; 
                ?>

                <script>
               alert('Veuillez vérifier les identifiants');
                window.location.replace('../login.php')
                </script>
                <?php
                            }

            if (empty($errors)) {
                $_SESSION['user'] = [
                    'username' => $user['username']
                ];

                header('Location: ../dashboard.php');
            }
        }
    }
}

function logout()
{
    unset($_SESSION['user']);

    header('Location: ../index.php');
}


function sendJSON($infos)
{
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    echo json_encode($infos, JSON_UNESCAPED_UNICODE);
}

function verifyInput($inputContent)
{
    $inputContent = htmlspecialchars($inputContent);
    $inputContent = trim($inputContent);
    return $inputContent;
}

