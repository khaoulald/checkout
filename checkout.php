<?php include('connection.php');
$idproduit = $_GET["idproduit"];
$selectData="SELECT *  FROM produit  WHERE Id_produit=$idproduit";
$rel = mysqli_query($db,$selectData);
if($rel -> num_rows>0){};
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkout</title>
    <link href="checkout.css" rel="stylesheet">
</head>
<body>
    
<div class="box">
        <a href="home.php"><img src="Images/kirae.png" alt="" id="img"></a>
        </div>
        <?php if(isset($_SESSION["status"])){ ?>
            <div class="links">
                <h4 class="mt-2 text-white">Hello <?php echo $_SESSION["username"] ?></h4>
            </div>
        <?php } ?>
    </nav>
    <div class="container">

        <form action="" method="POST">
            <?php
                
                if(mysqli_num_rows($rel) > 0)
                    
                    ?>
                    <div class="box1">
                        <?php   
                    while($row = mysqli_fetch_assoc($rel)){
                        
                        ?>
                    <img src="<?php  echo 'Image/'. $row["Url_Image"];?>" class="card-img-top" alt="ProductImage">
                    <?php
                                                
                                            
                                            
                                            $product = mysqli_fetch_assoc($rel);
                                            ?>
                    </div>

            <div class="reserv">
                <h4 class="card-title" id="h4"><span class="bold"><?php echo $row["Libelle"];?></span></h4>


                    <div class="mb-3 row">
                        <label for="staticText" class="col-sm-2 col-form-label">Adresse livraison</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control-plaintext" id="staticText" placeholder="Entrer une adresse de livraison" name="adresse">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticPhone" class="col-sm-2 col-form-label">Téléphone</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control-plaintext" id="staticPhone" placeholder="06******00" name="phone">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">E-mail</label>
                        <div class="col-sm-10">
                        <input type="text"  class="form-control-plaintext" id="staticEmail" placeholder="Entrer votre adresse E-mail" name="email">
                        </div>
                    </div>

                <?php
                }
                ?>
                <button type="submit" name="valid" id="check">
                <a href="checkOut.php?id=<?php echo $product["idProduit"];?>" id="a">achetez
                    <i class="fa-solid fa-circle-check"></i>
                </a>
                </button>   
            </div>
        </form>
    
    </div>
</body>
</body>
</html>