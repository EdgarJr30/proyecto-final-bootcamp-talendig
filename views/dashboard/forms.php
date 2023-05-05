<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../assets/css/dashboard/index.css">


    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../../../assets/css/dashboard/createProduct.css">
    <link rel="stylesheet" href="../../../assets/css/dashboard/products/style.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>

<body>

    <div class="app-container">
        <?php include_once __DIR__ . '../../../views/dashboard/sidebar.php' ?>


        <div class="container">
            <header>Crear un producto</header>

            <form action="http://localhost:3000/products" method="POST" id="login-form">
                <div class="form first">
                    <div class="details personal">

                        <div class="fields">
                            <div class="input-field">
                               
                            </div>
                        </div>
                    </div>

                    <button class="sumbit">
                        <span class="btnText">Submit</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div>
        </div>
        </form>
    </div>
    </div>
    <script src="../../assets/js/dashboard/createProduct.js"></script>
    <script src="../../assets/js/services/product/POSTproducts.js"></script>
</body>

</html>