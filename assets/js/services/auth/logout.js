(function () {
  const logoutBtn = document.getElementById("logout-btn");


  // if (!token || token == "undefined") {
  //   // console.log('No esta logueado')
  // } else {
//     logoutBtn.innerHTML = `
//     <button id="logout-btn">Logout</button>
// `;
  // }

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
