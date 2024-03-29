<!-- 
    Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:

- L'e-commerce vende prodotti per animali.
- I prodotti sono categorizzati, le categorie sono Cani o Gatti.
- I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

 Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->

<?php

$categoria_selezionata = isset($_GET['categoria']) ? $_GET['categoria'] : '';

include './models/cuccie.php';
include './models/Cibo.php';
include './models/giochi.php';
include './exception/Sconto.php';





//istanza cuccie
$cuccie = new Cuccie("", "", "", "", "");
$prezzi_cuccie = $cuccie->getPrezzi();
$disponibilita_cuccie = $cuccie->getDisponibilita();


//istanza cibo
$cibo = new Cibo("", "", "", "", "");
$prezzi_ciboAnimols = $cibo->getPrezzi_Cibo();
$disponibilita_cibo = $cibo->getDisponibilita_Cibo();


//istanza giochi
$giochi = new Giochi("", "", "", "", "");
$prezzi_giochiAnimols = $giochi->getPrezzi_Giochi();
$disponibilita_giochi = $giochi->getDisponibilita_Giochi();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-2</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous' />
</head>

<body>
    <header class="container-fluid bg-primary ">
        <div class="container text-white p-4 text-center ">
            <h1>Zampa&Co</h1>
        </div>
    </header>

    <main >
        <div class="text-center mt-3 border rounded-5 container p-3 bg-success ">
          <span class="text-capitalize fs-3 text-white  "><?= $e->getMessage();?></span>  
        </div>


        <div class="container mt-4 ">
            <ul class="list-unstyled d-flex gap-3 justify-content-center ">
                <li>
                    <a class="text-decoration-none text-capitalize text-black fs-4 " href="?categoria=cane">cani</a>
                </li>
                <li>
                    <a class="text-decoration-none text-capitalize text-black fs-4" href="?categoria=gatto">gatti</a>
                </li>

            </ul>

        </div>


        <div class="container-fluid mb-5 ">
            <div class="container d-flex flex-wrap gap-3">
                
                <?php foreach ($Prodotti as $prodotto) : ?>
                    
                   
                    <?php if (empty($categoria_selezionata) || $prodotto->categoria === $categoria_selezionata) : ?>
                    <div class="card p-2 position-relative  " style="width: 18rem;">
                        <div class="mt-3">
                            <img src="<?= $prodotto->img; ?>" class="card-img-top" alt="...">
                            <div class="position-absolute  end-0 top-0  border border-black rounded-5 p-1 m-2">
                                <img src="<?= $prodotto->icona; ?>" class="card-img-top" height="30" width="30" alt="icona">
                            </div>

                        </div>


                        <div class="card-body d-flex justify-content-end  flex-column">
                            <h5 class="card-title"><?= $prodotto->titolo; ?></h5>

                            <?php if (array_key_exists($prodotto->id, $prezzi_cuccie)) : ?>
                                <div class="d-flex flex-column ">
                                    <span>Prezzo: <?= $prezzi_cuccie[$prodotto->id]; ?> $</span>

                                    <?php if ($disponibilita_cuccie[$prodotto->id]) : ?>
                                        <span class="text-success text-capitalize ">Disponibile</span>
                                    <?php else : ?>
                                        <span class="text-danger text-capitalize ">Non disponibile</span>
                                    <?php endif; ?>
                                    <span>Quantità: <?= $prodotto->getQuantita($prodotto->id); ?></span>
                                     
                                </div>
                               
                            <?php endif; ?>



                            <?php if (array_key_exists($prodotto->id, $prezzi_ciboAnimols)) : ?>
                                <div class="d-flex flex-column ">
                                    <span>Prezzo: <?= $prezzi_ciboAnimols[$prodotto->id]; ?>$</span>

                                    <?php if ($disponibilita_cibo[$prodotto->id]) : ?>
                                        <span class="text-success text-capitalize ">Disponibile</span>
                                    <?php else : ?>
                                        <span class="text-danger text-capitalize "> Non disponibile</span>
                                    <?php endif; ?>
                                    <span>Quantità: <?= $prodotto->getQuantita($prodotto->id); ?></span>
                                </div>
                                
                            <?php endif; ?>



                            <?php if (array_key_exists($prodotto->id, $prezzi_giochiAnimols)) : ?>
                                <div class="d-flex flex-column ">
                                    <span>Prezzo: <?= $prezzi_giochiAnimols[$prodotto->id]; ?>$</span>

                                    <?php if ($disponibilita_giochi[$prodotto->id]) : ?>
                                        <span class="text-success text-capitalize ">Disponibile</span>
                                    <?php else : ?>
                                        <span class="text-danger text-capitalize ">Non disponibile</span>
                                    <?php endif; ?>

                                    <span>Quantità: <?= $prodotto->getQuantita($prodotto->id); ?></span>
                                </div>
                               
                            <?php endif; ?>
                        </div>

                        <div class="m-3 d-flex justify-content-center ">
                            <button class="btn btn-primary p-2 text-capitalize  "> aggiungi al carello</button>
                        </div>
                    </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>


    </main>





    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js' integrity='sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==' crossorigin='anonymous'></script>
</body>

</html>