
<header class="header" id="heading__section">
    <div class="alert">
        <div class="container">
            <p class="alert-text">Envio gratis en todo RD: Pedidos $5000+</p>
        </div>
    </div>

    <div class="header-top" id="header-top" data-header>
        <div class="container">
            <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
                <span class="line line-1"></span>
                <span class="line line-2"></span>
                <span class="line line-3"></span>
            </button>

            <div class="input-wrapper">
                <input type="search" name="search" placeholder="Buscar productos" class="search-field" />

                <button class="search-submit" aria-label="search">
                    <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
                </button>
            </div>

            <a href="../../index.php" class="logo">
                <img src="../../assets/images/logo.png" width="179" height="26" alt="Glowing" />
            </a>

            <div class="header-actions">
                <a href="../../login.html" class="header-action-btn" aria-label="user">
                    <ion-icon name="person-outline" aria-hidden="true" aria-hidden="true"></ion-icon>
                    <p> <small>Iniciar sesion</small> </p>
                </a>

                <!-- <button id="logout-btn"></button> -->
                <button id="logout-btn"></button>
                <script>
                    (function() {

                        const token = document.cookie.replace("token=", "");
                        const logoutBtn = document.querySelector("#logout-btn");

                        if (!token || token == 'undefined') {
                            // console.log('No esta logueado')
                        } else {
                            logoutBtn.innerHTML = `
                            <button id="logout-btn">Logout</button>
                    `;
                        }
                    })();
                </script>

                <button class="header-action-btn" aria-label="favourite item">
                    <ion-icon name="star-outline" aria-hidden="true" aria-hidden="true"></ion-icon>

                    <span class="btn-badge">0</span>
                </button>

                <button class="header-action-btn" aria-label="cart item">
                    <data class="btn-text" value="0">$0.00</data>

                    <ion-icon name="bag-handle-outline" aria-hidden="true" aria-hidden="true"></ion-icon>

                    <span class="btn-badge">0</span>
                </button>
            </div>

            <nav class="navbar">
                <ul class="navbar-list">
                    <li>
                        <a href="../../index.php" class="navbar-link has-after">Inicio</a>
                    </li>

                    <li>
                        <a href="../blog/blog.php" class="navbar-link has-after">Tienda</a>
                    </li>

                    <li>
                        <a href="#offer" class="navbar-link has-after">Ofertas</a>
                    </li>

                    <li>
                        <a href="../../views/blog/blog.php" class="navbar-link has-after">Blog</a>
                    </li>

                    <li>
                        <a href="../../views/contact/contacto.php" class="navbar-link has-after">Contacto</a>
                    </li>

                    <li id="dashboard__btn"></li>

                    <script>
                        const token = document.cookie.replace("token=", "");
                        const dashboardBtn = document.querySelector("#dashboard__btn");


                        if (!token || token == 'undefined') {
                            // console.log('No esta logueado')
                        } else {
                            dashboardBtn.innerHTML = `
                            <a href="../../views/dashboard/index.php" class="navbar-link has-after">Admin Panel</a>
                        `
                        }
                    </script>
                </ul>
            </nav>
        </div>
    </div>
</header>

<div class="sidebar">
    <div class="mobile-navbar" data-navbar>
        <div class="wrapper">
            <a href="../../index.php" class="logo">
                <img src="../../assets/images/logo.png" width="179" height="26" alt="Glowing" />
            </a>

            <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
                <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
            </button>
        </div>

        <ul class="navbar-list">
            <li>
                <a href="../../index.php" class="navbar-link" data-nav-link>Inicio</a>
            </li>

            <li>
                <a href="../../views/shop/shop.php" class="navbar-link" data-nav-link>Tienda</a>
            </li>

            <li>
                <a href="#offer" class="navbar-link" data-nav-link>Ofertas</a>
            </li>

            <li>
                <a href="../../views/blog/blog.html" class="navbar-link" data-nav-link>Blog</a>
            </li>
        </ul>
    </div>

    <div class="overlay" data-nav-toggler data-overlay></div>
</div>

<script src="../../assets/js/services/auth/logout.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>