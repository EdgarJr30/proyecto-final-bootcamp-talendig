<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
    Gadgets.do - la tienda online para los amantes de la tecnología
  </title>
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml" />
  <link rel="stylesheet" href="./assets/css/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="preload" as="image" href="./assets/images/logo.png" />
  <link rel="preload" as="image" href="./assets/images/home/banner.jpg" />
  <link rel="preload" as="image" href="./assets/images/home/banner.jpg" />
  <link rel="preload" as="image" href="./assets/images/home/banner.jpg" />
</head>

<body id="top">

  <?php include_once __DIR__ . './views/templates/header.php' ?>


  <header class="header" id="heading__section">
  </header>

  <div class="sidebar">
    <div class="mobile-navbar" data-navbar>
      <div class="wrapper">


        <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>
      </div>

      <ul class="navbar-list">
        <li>
          <a href="../../index.php" class="navbar-link" data-nav-link>Inicio</a>
        </li>

        <li>
          <a href="#collection" class="navbar-link" data-nav-link>Collection</a>
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

  <main>
    <article>
      <section class="section hero" id="home" aria-label="hero" data-section>
        <div class="container">
          <ul class="has-scrollbar">
            <li class="scrollbar-item">
              <div class="hero-card has-bg-image" style="
                    background-image: url('./assets/images/home/banner.jpg');
                  ">
                <div class="card-content">
                  <h1 class="h1 hero-title">
                    Gadgets.do, la tienda online<br />
                    para los amantes de la tecnología
                  </h1>

                  <p class="hero-text">
                    Recicla tus productos que ya no necesitas vendiendo en
                    Gadgets.do, asi cuidamos el planeta.
                  </p>

                  <!-- <p class="price">Starting at $7.99</p> -->

                  <a href="#shop" class="btn btn-primary">Comprar/Vender Ahora</a>
                </div>
              </div>
            </li>

            <li class="scrollbar-item">
              <div class="hero-card has-bg-image" style="
                    background-image: url('./assets/images/home/banner.jpg');
                  ">
                <div class="card-content">
                  <h1 class="h1 hero-title">
                    Gadgets.do, la tienda online<br />
                    para los amantes de la tecnología
                  </h1>

                  <p class="hero-text">
                    Recicla tus productos que ya no necesitas vendiendo en
                    Gadgets.do, asi cuidamos el planeta.
                  </p>

                  <!-- <p class="price">Starting at $7.99</p> -->

                  <a href="#shop" class="btn btn-primary">Comprar/Vender Ahora</a>
                </div>
              </div>
            </li>

            <li class="scrollbar-item">
              <div class="hero-card has-bg-image" style="
                    background-image: url('./assets/images/home/banner.jpg');
                  ">
                <div class="card-content">
                  <h1 class="h1 hero-title">
                    Gadgets.do, la tienda online<br />
                    para los amantes de la tecnología
                  </h1>

                  <p class="hero-text">
                    Recicla tus productos que ya no necesitas vendiendo en
                    Gadgets.do, asi cuidamos el planeta.
                  </p>

                  <!-- <p class="price">Starting at $7.99</p> -->

                  <a href="#shop" class="btn btn-primary">Comprar/Vender Ahora</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <section class="section collection" id="collection" aria-label="collection" data-section>
        <div class="container">
          <ul class="collection-list">
            <li>
              <div class="collection-card has-before hover:shine">
                <h2 class="h2 card-title">SmartPhones</h2>

                <p class="card-text"></p>

                <a href="#" class="btn-link">
                  <span class="span">Shop Now</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

                <div class="has-bg-image" style="
                      background-image: url('./assets/images/home/smartphone.jpg');
                    "></div>
              </div>
            </li>

            <li>
              <div class="collection-card has-before hover:shine">
                <h2 class="h2 card-title">SmartWatch</h2>

                <p class="card-text"></p>

                <a href="#" class="btn-link">
                  <span class="span">Descubrelo Ahora</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

                <div class="has-bg-image" style="
                      background-image: url('./assets/images/home/smartwatch.jpg');
                    "></div>
              </div>
            </li>

            <li>
              <div class="collection-card has-before hover:shine">
                <h2 class="h2 card-title">HeadPhones</h2>

                <p class="card-text"></p>

                <a href="#" class="btn-link">
                  <span class="span">Descubrelo Ahra</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

                <div class="has-bg-image" style="
                      background-image: url('./assets/images/home/headphones.jpg');
                    "></div>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <section class="section shop" id="shop" aria-label="shop" data-section>
        <div class="container">
          <div class="title-wrapper">
            <h2 class="h2 section-title">Los Mas Vendidos</h2>

            <a href="./views/shop/shop.php" class="btn-link">
              <span class="span">Ir a la tienda</span>

              <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </a>
          </div>

          <ul class="has-scrollbar" id="has-scrollbar"></ul>
        </div>
      </section>

      <section class="section shop" id="shop" aria-label="shop" data-section>
        <div class="container">
          <div class="title-wrapper">
            <h2 class="h2 section-title">Menos de $2500</h2>

            <a href="./views/shop/shop.php" class="btn-link">
              <span class="span">Ir a la tienda</span>

              <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </a>
          </div>

          <ul class="has-scrollbar" id="has-scrollbar-with-filter"></ul>
        </div>
      </section>

      <!-- <section class="section banner" aria-label="banner" data-section>
          <div class="container">
            <ul class="banner-list">
              <li>
                <div class="banner-card banner-card-1 has-before hover:shine">
                  <p class="card-subtitle">New Collection</p>

                  <h2 class="h2 card-title">Discover Our Autumn Skincare</h2>

                  <a href="#" class="btn btn-secondary">Explore More</a>

                  <div
                    class="has-bg-image"
                    style="
                      background-image: url('./assets/images/banner-1.jpg');
                    "
                  ></div>
                </div>
              </li>

              <li>
                <div class="banner-card banner-card-2 has-before hover:shine">
                  <h2 class="h2 card-title">25% off Everything</h2>

                  <p class="card-text">
                    Makeup with extended range in colors for every human.
                  </p>

                  <a href="#" class="btn btn-secondary">Shop Sale</a>

                  <div
                    class="has-bg-image"
                    style="
                      background-image: url('./assets/images/banner-2.jpg');
                    "
                  ></div>
                </div>
              </li>
            </ul>
          </div>
        </section> -->

      <section class="section feature" aria-label="feature" data-section>
        <div class="container">
          <h2 class="h2-large section-title">
            ¿Por qué comprar en Gadgets.do?
          </h2>

          <ul class="flex-list">
            <li class="flex-item">
              <div class="feature-card">
                <img src="./assets/images/home/garantia.gif" width="204" height="236" loading="lazy" alt="15 dias de garantia" class="card-icon" />

                <h3 class="h3 card-title">Garantia Asegurada</h3>

                <p class="card-text">
                  En Gadgets.do, nos enorgullece ofrecer productos de alta
                  calidad con una garantía de 15 días. Creemos en la calidad
                  de nuestros productos y queremos asegurarnos de que nuestros
                  clientes estén satisfechos con sus compras.
                </p>
              </div>
            </li>

            <li class="flex-item">
              <div class="feature-card">
                <img src="./assets/images/home/soporte-tecnico.gif" width="204" height="236" loading="lazy" alt="Soporte tecnico 24/7" class="card-icon" />

                <h3 class="h3 card-title">Soporte en linea 24/7</h3>

                <p class="card-text">
                  En Gadgets.do, nos comprometemos a brindar la mejor atención
                  al cliente y a hacer que tu experiencia de compra sea lo más
                  sencilla y satisfactoria posible.
                </p>
              </div>
            </li>

            <li class="flex-item">
              <div class="feature-card">
                <img src="./assets/images/home/eco-friendly.gif" width="204" height="236" loading="lazy" alt="Eco Friendly" class="card-icon" />

                <h3 class="h3 card-title">Eco Friendly</h3>

                <p class="card-text">
                  En Gadgets.do, creemos que cuidar el planeta es fundamental
                  para garantizar un futuro sostenible. ¡Únete a nosotros en
                  nuestro compromiso de cuidar el medio ambiente y haz tus
                  compras eco-friendly en nuestra tienda online!
                </p>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <!-- <section
          class="section offer"
          id="offer"
          aria-label="offer"
          data-section
        >
          <div class="container">
            <figure class="offer-banner">
              <img
                src="./assets/images/offer-banner-1.jpg"
                width="305"
                height="408"
                loading="lazy"
                alt="offer products"
                class="w-100"
              />

              <img
                src="./assets/images/offer-banner-2.jpg"
                width="450"
                height="625"
                loading="lazy"
                alt="offer products"
                class="w-100"
              />
            </figure>

            <div class="offer-content">
              <p class="offer-subtitle">
                <span class="span">Special Offer</span>

                <span class="badge" aria-label="20% off">-20%</span>
              </p>

              <h2 class="h2-large section-title">Mountain Pine Bath Oil</h2>

              <p class="section-text">
                Made using clean, non-toxic ingredients, our products are
                designed for everyone.
              </p>

              <div class="countdown">
                <span class="time" aria-label="days">15</span>
                <span class="time" aria-label="hours">21</span>
                <span class="time" aria-label="minutes">46</span>
                <span class="time" aria-label="seconds">08</span>
              </div>

              <a href="#" class="btn btn-primary">Get Only $39.00</a>
            </div>
          </div>
        </section> -->

      <section class="section blog" id="blog" aria-label="blog" data-section>
        <div class="container">
          <h2 class="h2-large section-title">Descubre Más de Gadgets.do</h2>

          <ul class="flex-list">
            <li class="flex-item">
              <div class="blog-card">
                <figure class="card-banner img-holder has-before hover:shine" style="--width: 700; --height: 450">
                  <img src="./assets/images/home/tienda.jpg" width="700" height="450" loading="lazy" alt="Productos tecnologicos" class="img-cover" />
                </figure>

                <h3 class="h3">
                  <a href="./views/shop/shop.php" class="card-title">Descubre la tienda</a>
                </h3>

                <a href="./views/shop/shop.php" class="btn-link">
                  <span class="span">Nuestra Tienda</span>

                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a>
              </div>
            </li>

            <li class="flex-item">
              <div class="blog-card">
                <figure class="card-banner img-holder has-before hover:shine" style="--width: 700; --height: 450">
                  <img src="./assets/images/home/blog-2.jpg" width="700" height="450" loading="lazy" alt="From Our Blog" class="img-cover" />
                </figure>

                <h3 class="h3">
                  <a href="./views/blog/blog.html" class="card-title">Descubre Nuestro Blog</a>
                </h3>

                <a href="./views/blog/blog.html" class="btn-link">
                  <span class="span">Nuestro Blog</span>

                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a>
              </div>
            </li>

            <li class="flex-item">
              <div class="blog-card">
                <figure class="card-banner img-holder has-before hover:shine" style="--width: 700; --height: 450">
                  <img src="./assets/images/home/blog-3.jpg" width="700" height="450" loading="lazy" alt="Our Story" class="img-cover" />
                </figure>

                <h3 class="h3">
                  <a href="./views/about/about.html" class="card-title">Descubre Nuestra Historia</a>
                </h3>

                <a href="./views/about/about.html" class="btn-link">
                  <span class="span">Nuestra Historia</span>

                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </section>
    </article>
  </main>

  <?php include_once __DIR__ . './views/templates/footer.php' ?>

  <script src="./assets/js/script.js" defer></script>
  <script src="./assets/js/services/product/GETproducts.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>