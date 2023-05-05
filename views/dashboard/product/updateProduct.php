<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../assets/css/dashboard/index.css">
    <link rel="stylesheet" href="../../../assets/css/dashboard/createProduct.css">
    <link rel="stylesheet" href="../../../assets/css/dashboard/products/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<body>
    <div class="app-container">
        <?php include_once __DIR__ . '../../../dashboard/sidebar.php' ?>

        <div class="container">
            <header>Actualizar un producto</header>

            <form action="http://localhost:3000/products" method="POST" id="login-form">
                <div class="form first">
                    <div class="details personal">

                        <div class="fields">
                            <div class="input-field">
                                <label for="title">Titulo</label>
                                <input type="text" id="title" name="title" placeholder="Titulo del producto" required>
                            </div>

                            <div class="input-field">
                                <label for="description">Descripcion</label>
                                <input type="text" id="description" name="description" placeholder="Descripcion del producto" required>
                            </div>

                            <div class="input-field">
                                <label for="price">Precio del producto</label>
                                <input type="number" id="price" name="price" placeholder="Precio del producto" min="0" required>
                            </div>

                            <div class="input-field">
                                <label for="image">Imagen del producto</label>
                                <input type="text" id="image" name="image" placeholder="Imagen del producto" required>
                            </div>

                            <div class="input-field">
                                <label>Categoria</label>
                                <select>
                                    <option disabled selected>Seleccionar Categoria</option>
                                    <option>SmarthPhone</option>
                                    <option>Tablets</option>
                                    <option>Computadoras</option>
                                </select>
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
    <script src="../../../assets/js/dashboard/createProduct.js"></script>
    <script src="../../../assets/js/services/product/POSTproducts.js"></script>
</body>

</html>