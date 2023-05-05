(function () {
  let token = document.cookie.replace("token=", "");

  if (!token || token == "undefined") {
    window.location.replace("../../../../index.php");
  }

  const getProducts = async (req) => {
    const res = await fetch("http://localhost:3000/products", {
      headers: { Authorization: `Bearer ${token}` },
    });

    const data = await res.json();
    productsAuth = data;

    showAuthProducts();
  };

  getProducts();

  const showAuthProducts = () => {
    productsAuth.forEach((productAuth) => {
      const dashboardProductContainer = document.createElement("DIV");
      // dashboardProductContainer.classList.add("products-row");

      dashboardProductContainer.innerHTML = `
      <div class="products-row">
      <button class="cell-more-button">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
              <circle cx="12" cy="12" r="1" />
              <circle cx="12" cy="5" r="1" />
              <circle cx="12" cy="19" r="1" />
          </svg>
      </button>
      <div class="product-cell image">
          <img src="${productAuth.image}" alt="product">
          <a href="../../../views/shop/productPage.php?id=${productAuth._id}"><span>${productAuth.title}</span></a>
          
      </div>
      <div class="product-cell category"><span class="cell-label">Category:</span>Furniture</div>
      <div class="product-cell status-cell">
          <span class="cell-label">Status:</span>
          <span class="status active">Active</span>
      </div>
      <div class="product-cell sales"><span class="cell-label">Sales:</span>11</div>
      <div class="product-cell stock"><span class="cell-label">Stock:</span>36</div>
      <div class="product-cell price"><span class="cell-label">Price:</span>$${productAuth.price}</div>
      </div>
        `;

      const dashboardProduct = document.querySelector("#dashboard__container");
      dashboardProduct.appendChild(dashboardProductContainer);
    });
  };
})();
