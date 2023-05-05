(function () {
  let token = document.cookie.replace("token=", "");

  // const decodedToken = JSON.parse(atob(token.split(".")[1]));
  // const tokenExpirationDate = new Date(decodedToken.exp);
  // const now = new Date();

  // console.log(tokenExpirationDate);

  if (!token || token == "undefined") {
    window.location.replace("../../../../index.php");
  }

  // if (now > tokenExpirationDate) {
  //   window.location.replace("../../../../index.html");
  // } else {
  //   return
  // }

  const getAuthProducts = async () => {
    const res = await fetch("http://localhost:3000/products", {
      headers: { Authorization: `Bearer ${token}` },
    });

    const data = await res.json();
    productsAuth = data;

    showAuthProducts();
  };

  getAuthProducts();

  const showAuthProducts = async (id) => {
    // let token = document.cookie.replace("token=", "");
    productsAuth.forEach((productAuth) => {
      // const pID = async () => {
      //  const id = await fetch(`http://localhost:3000/products/${id}`, {
      //     headers: { Authorization: `Bearer ${token}` },
      //   });
      //   console.log(id)
      // }
      // pID()
      const authProductContainer = document.createElement("DIV");
      // authProductContainer.classList.add("container__shop");

      authProductContainer.innerHTML = `
    <div class="product-card">
    <div class="product-tumb">
      <img src="${productAuth.image}" alt="${productAuth.title}">
    </div>
    <div class="product-details">
      <span class="product-catagory">Women,bag</span>
      <h4><a href="${productAuth._id}">${productAuth.title}</a></h4>
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

      const authProductsList = document.querySelector("#product__container");
      authProductsList.appendChild(authProductContainer);
    });
  };

  const logoutBtn = document.getElementById("logout-btn");

  logoutBtn.addEventListener("click", async () => {
    let token = document.cookie.replace("token=", "");
  
      const response = await fetch("http://localhost:3000/users/logout", {
        method: "POST",
        headers: {
          Authorization: `Bearer ${token}`,
        },
      });
      if (response.ok) {
        document.cookie = `${token}=;expires=Thu, 01 Jan 1970 00:00:01 GMT;`;
        document.cookie = "token=undefined";
        window.location.replace("../../../../index.php");
      } else {
        console.error("Failed to logout");
      }
    });
})();
