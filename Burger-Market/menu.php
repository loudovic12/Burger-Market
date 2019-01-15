<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Menu</title>
	<meta charset="UTF-8">
    
	<!-- Style Début -->
    <?php include "app/styles.php"?>
    <!-- Style Fin -->

	<!-- Perso Style -->
	<link rel="stylesheet" href="css/styles.css"/>
    <link rel="stylesheet" href="css/style1.css"/>
    
</head>
    
    <!-- Menu Début -->
    <?php include "app/header.php"?>
    <!-- Menu Fin -->
    
    <body>
        <section class="row" id="menuback">
       <div class="container site">
            <?php
				require 'admin/database.php';
			 
                $db = Database::connect();
                $statement = $db->query('SELECT items.name, items.description, items.price, items.image FROM items');

                echo '<div class="tab-content">';                    
                    echo '<div class="row">';

                    while ($item = $statement->fetch()) 
                    {
                        echo '<div class="col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="img/' . $item['image'] . '">
                                    <div class="price">' . number_format($item['price'], 2, '.', ''). ' €</div>
                                    <div class="caption">
                                        <h4>' . $item['name'] . '</h4>
                                        <p>' . $item['description'] . '</p>
                                        <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Réservation</a>
                                    </div>
                                </div>
                            </div>';
                    }
                   
                Database::disconnect();
            ?>
        </div>
        </section>
        
        
            <!-- Footer Début -->	
    	       <?php include "app/footer.php"?>
			<!-- Footer Fin -->
    </body>
</html>

