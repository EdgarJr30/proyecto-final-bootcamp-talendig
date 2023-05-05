const getProducts = async () => {
    
    try {
      const res = await fetch(`http://localhost:3000/products/_${id}`);
      const data = await res.json();
      products = data;
  
      showProducts();
    } catch (error) {
      console.log(error);
    }
  };
  
  getProducts();
  
  function showProducts() {
    const width = "540px";
    const height = "720px";
    products.forEach((product) => {
      const productContainer = document.createElement("LI");
      productContainer.classList.add("scrollbar-item");
  
      const productContainerWithFilter = document.createElement("LI");
      productContainerWithFilter.classList.add("scrollbar-item");
  
      productContainer.innerHTML = `
      <div class="product-card">
      <div class="product-tumb">
        <img src="${productAuth.image}" alt="${productAuth.title}">
      </div>
      <div class="product-details">
        <span class="product-catagory">Women,bag</span>
        <h4><a href="">${productAuth.title}</a></h4>
        <p>${productAuth.description}</p>
        <p>${productAuth._id}</p>
        <div class="product-bottom-details">
          <div class="product-price"><small>$96.00</small>$${productAuth.price}</div>
          <div class="product-links">
            <a href=""><i class="fa fa-heart"></i></a>
            <a href=""><i class="fa fa-shopping-cart"></i></a>
          </div>
        </div>
      </div>
      </div>
          `;
  
      const productsList = document.querySelector("#has-scrollbar");
      const productsListWithFilter = document.querySelector(
        "#has-scrollbar-with-filter"
      );
      
      productsList.appendChild(productContainer);
      productsListWithFilter.appendChild(productContainerWithFilter);
    });
  }