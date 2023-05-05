<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
    Gadgets.do - Tienda
  </title>
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml" />
  <link rel="stylesheet" href="../../assets/css/style.css" />
  <link rel="stylesheet" href="../../assets/css/shop/shop.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="preload" as="image" href="../../assets/images/logo.png" />
</head>

<body id="top" class="shop__content">
  <?php include_once __DIR__ . './../templates/header.php' ?>

  <section class="product__container" id="product__container">
    <!-- <div class="badge">Hot</div> -->
  </section>

  <?php include_once __DIR__ . './../templates/footer.php' ?>

  <script src="../../assets/js/script.js" defer></script>
  <script src="../../assets/js/services/product/GETAuthProducts.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>