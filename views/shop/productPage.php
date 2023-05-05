<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet" />
	<link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png" />
	<link rel="stylesheet" href="../../assets/css/output.css" />
	<!-- <link rel="stylesheet" href="../../assets/css/style.css" /> -->

	<title>E-commerce product page</title>
</head>

<!-- <body class="overflow-x-hidden lg:overflow-hidden"> -->

<body>
	<!-- <?php include_once __DIR__ . './../templates/pruebaNavbar.php' ?> -->
	<!-- Lightbox -->
	<!-- <div class="bg-black opacity-75 absolute w-screen h-screen hidden z-50" id="light-1"></div> -->
	<!-- <div class="absolute top-16 min-w-fit container mx-auto xl:flex flex-col gap-8 justify-center invisible z-50" id="light-2">
		<div class="h-fit w-full mx-auto">
			<div class="flex items-center justify-center w-[35%] rounded-xl m-auto bg-orange xl:w-[28%]">
				<button class="bg-white relative left-6 rounded-full flex justify-center items-center pr-4 pl-3 py-3 ml-3 z-20 group" id="previous">
					<svg width="12" height="18" xmlns="http://www.w3.org/2000/svg" class="stroke-[#1D2026] group-hover:stroke-orange transition" id="previous">
						<path d="M11 1 3 9l8 8" stroke-width="3" fill="none" fill-rule="evenodd" id="previous" />
					</svg>
				</button>

				<img src="./images/image-product-1.jpg" alt="sneaker" class="rounded-xl" id="hero-lightbox" />

				<button class="bg-white relative right-6 rounded-full flex justify-center items-center pr-3 pl-4 py-3 mr-3 z-20 group" id="next">
					<svg width="13" height="18" xmlns="http://www.w3.org/2000/svg" class="stroke-[#1D2026] group-hover:stroke-orange transition" id="next">
						<path d="m2 1 8 8-8 8" stroke-width="3" fill="none" fill-rule="evenodd" id="next" />
					</svg>
				</button>
			</div>
		</div>

		<div class="thumbnails thumbnails-light w-1/3 flex justify-between gap-4 m-auto lg:mt-6 xl:w-1/4">
			<div id="1" class="w-1/5 cursor-pointer bg-white rounded-xl ring-active">
				<img src="./images/image-product-1.jpg" alt="thumbnail" class="rounded-xl hover:opacity-50 transition active" id="thumbLight-1" />
			</div>

			<div id="2" class="w-1/5 cursor-pointer bg-white rounded-xl">
				<img src="./images/image-product-2.jpg" alt="thumbnail" class="rounded-xl hover:opacity-50 transition" id="thumbLight-2" />
			</div>

			<div id="3" class="w-1/5 cursor-pointer bg-white rounded-xl">
				<img src="./images/image-product-3.jpg" alt="thumbnail" class="rounded-xl hover:opacity-50 transition" id="thumbLight-3" />
			</div>

			<div id="4" class="w-1/5 cursor-pointer bg-white rounded-xl">
				<img src="./images/image-product-4.jpg" alt="thumbnail" class="rounded-xl hover:opacity-50 transition" id="thumbLight-4" />
			</div>
		</div>
	</div> -->

	<!-- Contents -->
	<div class="container mx-auto font-kumbh text-base">
		<!-- Navbar -->
		<!-- <nav class="flex pb-6 container justify-between fixed z-20 border-b-2 border-b-slate-200 bg-white lg:pb-8 lg:pr-8">
			<div class="flex items-center pt-6 ml-6 gap-4">
				<button id="hamburger">
					<svg width="16" height="15" xmlns="http://www.w3.org/2000/svg" class="mt-1 lg:hidden" id="hamburger">
						<path d="M16 12v3H0v-3h16Zm0-6v3H0V6h16Zm0-6v3H0V0h16Z" fill="#69707D" fill-rule="evenodd" id="hamburger" />
					</svg>
				</button>
				<a href="" class="flex gap-6">
					<svg width="138" height="20" xmlns="http://www.w3.org/2000/svg">
						<path d="M8.217 20c4.761 0 7.519-.753 7.519-4.606 0-3.4-3.38-4.172-6.66-4.682l-.56-.085-.279-.041-.35-.053c-2.7-.405-3.18-.788-3.18-1.471 0-.478.49-1.331 2.843-1.331 2.455 0 3.493.647 3.493 1.87v.134h4.281v-.133c0-2.389-1.35-5.238-7.774-5.238-5.952 0-7.201 2.584-7.201 4.752 0 3.097 2.763 4.086 7.223 4.675.21.028.433.054.659.081 1.669.197 3.172.42 3.172 1.585 0 1.01-1.615 1.222-3.298 1.222-2.797 0-3.784-.593-3.784-1.92v-.134H.002L0 14.926v.317c.008.79.118 1.913 1.057 2.862C2.303 19.362 4.712 20 8.217 20Zm13.21 0v-7.49c0-2.104.547-4.423 4.176-4.423 3.915 0 3.778 2.777 3.768 4.042V20h4.18v-7.768c0-2.264-.176-7.766-6.732-7.766-2.778 0-4.192.911-5.195 2.28h-.197V4.467H17.22V20h4.207Zm21.959 0c5.094 0 7.787-2.07 8.217-5.405H47.53c-.386 1.02-1.63 1.72-4.143 1.72-2.721 0-3.962-1.03-4.25-3.106h12.527c.24-2.13-.029-5.417-3.026-7.44v.005c-1.312-.915-3.056-1.465-5.251-1.465-5.24 0-8.336 2.772-8.336 7.845 0 5.17 3.02 7.846 8.336 7.846Zm4.099-9.574h-8.188c.486-1.574 1.764-2.431 4.089-2.431 2.994 0 3.755 1.267 4.099 2.431ZM70.499 20V4.457H66.29V6.74h-.176c-1.053-1.377-2.809-2.283-5.677-2.283-6.433 0-7.225 5.293-7.253 7.635v.137c0 2.092.732 7.771 7.241 7.771 2.914 0 4.684-.818 5.734-2.169h.131V20H70.5Zm-8.854-3.623c-3.996 0-4.447-3.032-4.447-4.148 0-1.21.426-4.148 4.455-4.148 3.631 0 4.374 2.044 4.374 4.148 0 2.35-.742 4.148-4.382 4.148ZM88.826 20l-6.529-9.045 6.588-6.488h-5.827l-6.836 6.756V0h-4.187v19.954h4.187V16.94l3.02-2.976L83.6 20h5.226Zm9.9 0c5.094 0 7.786-2.07 8.217-5.405h-4.074c-.387 1.02-1.63 1.72-4.143 1.72-2.721 0-3.962-1.03-4.25-3.106h12.527c.24-2.13-.029-5.417-3.026-7.44v.005c-1.312-.915-3.057-1.465-5.251-1.465-5.24 0-8.336 2.772-8.336 7.845 0 5.17 3.02 7.846 8.336 7.846Zm4.098-9.574h-8.187c.485-1.574 1.763-2.431 4.089-2.431 2.994 0 3.755 1.267 4.098 2.431ZM112.76 20v-6.97c0-2.103.931-4.542 4.05-4.542 1.33 0 2.393.236 2.785.346l.67-3.976c-.728-.16-1.626-.392-2.757-.392-2.665 0-3.622.794-4.486 2.282h-.262V4.466h-4.21V20h4.21Zm17.221 0c4.761 0 7.519-.753 7.519-4.606 0-3.4-3.38-4.172-6.66-4.682l-.56-.085-.279-.041-.349-.053c-2.701-.405-3.181-.788-3.181-1.471 0-.478.49-1.331 2.843-1.331 2.455 0 3.493.647 3.493 1.87v.134h4.282v-.133c0-2.389-1.35-5.238-7.775-5.238-5.952 0-7.201 2.584-7.201 4.752 0 3.097 2.763 4.086 7.224 4.675.21.028.432.054.658.081 1.669.197 3.172.42 3.172 1.585 0 1.01-1.615 1.222-3.298 1.222-2.796 0-3.784-.593-3.784-1.92v-.134h-4.319l-.001.301v.317c.008.79.117 1.913 1.056 2.862 1.246 1.257 3.655 1.895 7.16 1.895Z" fill="#1D2026" fill-rule="nonzero" />
					</svg>
				</a>
				<div class="flex flex-col bg-white -ml-6 top-0 pt-20 fixed pl-8 w-56 h-screen text-dark-grayish font-bold z-50 -translate-x-96 transition duration-300 lg:flex-row lg:translate-x-0 lg:bg-transparent lg:inline-block lg:w-fit lg:h-fit lg:pt-7 lg:ml-52 lg:pl-0 lg:z-0" id="side-nav">
					<svg width="14" height="15" xmlns="http://www.w3.org/2000/svg" class="absolute top-6 cursor-pointer lg:hidden" id="close">
						<path d="m11.596.782 2.122 2.122L9.12 7.499l4.597 4.597-2.122 2.122L7 9.62l-4.595 4.597-2.122-2.122L4.878 7.5.282 2.904 2.404.782l4.595 4.596L11.596.782Z" fill="#69707D" fill-rule="evenodd" id="close" />
					</svg>
					<a href="" class="nav-info">Collections</a>
					<a href="" class="nav-info">Men</a>
					<a href="" class="nav-info">Women</a>
					<a href="" class="nav-info">About</a>
					<a href="" class="nav-info">Contact</a>
				</div>
				<div class="h-screen w-screen bg-black absolute top-0 opacity-0 hidden transition duration-500 z-10" id="content-cover"></div>
			</div>

			<div class="flex mr-6 pt-6">
				<span id="amount-cart" class="select-none relative left-8 text-[8px] bg-orange text-white px-1 rounded-full w-5 h-4 flex justify-center items-center scale-0 text-xs">0</span>
				<div class="h-5 mt-2 flex flex-col align-middle">
					<svg width="24" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 20" class="cart fill-dark-grayish hover:fill-very-dark transition cursor-pointer">
						<path d="M20.925 3.641H3.863L3.61.816A.896.896 0 0 0 2.717 0H.897a.896.896 0 1 0 0 1.792h1l1.031 11.483c.073.828.52 1.726 1.291 2.336C2.83 17.385 4.099 20 6.359 20c1.875 0 3.197-1.87 2.554-3.642h4.905c-.642 1.77.677 3.642 2.555 3.642a2.72 2.72 0 0 0 2.717-2.717 2.72 2.72 0 0 0-2.717-2.717H6.365c-.681 0-1.274-.41-1.53-1.009l14.321-.842a.896.896 0 0 0 .817-.677l1.821-7.283a.897.897 0 0 0-.87-1.114ZM6.358 18.208a.926.926 0 0 1 0-1.85.926.926 0 0 1 0 1.85Zm10.015 0a.926.926 0 0 1 0-1.85.926.926 0 0 1 0 1.85Zm2.021-7.243-13.8.81-.57-6.341h15.753l-1.383 5.53Z" fill="" fill-rule="nonzero" />
					</svg>
					<div class="hide pop-up min-w-fit h-fit bg-white border shadow-2xl absolute top-24 left-1/2 -translate-x-1/2 rounded-lg font-bold text-sm transition duration-300 sm:left-full sm:top-20 sm:-translate-x-80">
						<h5 class="p-3 text-very-dark">Cart</h5>
						<hr />
						<div class="w-80 h-40 flex p-6">
							<div class="w-full flex flex-col justify-between" id="inside-cart"></div>
						</div>
					</div>
				</div>

				<div class="">
					<img src="./images/image-avatar.png" alt="avatar" width="30" class="ml-5 cursor-pointer rounded-full hover:ring hover:ring-orange transition duration-200 lg:w-10 lg:-mt-0.5" />
				</div>
			</div>
		</nav> -->

		<!-- Main Content -->
		<main class="w-full flex flex-col lg:flex-row product__render" id="product__render">

		</main>

		<script>
			let url_string = (window.location.href).toLowerCase();
			let url = new URL(url_string);
			let id = url.searchParams.get("id");
			const APIurl = `http://localhost:3000/products/${id}`;
			let token = document.cookie.replace("token=", "");

			const getData = async () => {

				const res = await fetch(APIurl, {
					headers: {
						Authorization: `Bearer ${token}`
					},
				})

				const data = await res.json();
				product = data;
				eachProduct();
			}

			getData();

			const eachProduct = () => {
				const productRender = document.querySelector("#product__render");

				const productoHtml = `

					<section class="h-fit flex-col gap-8 mt-16 sm:flex sm:flex-row sm:gap-4 sm:h-full sm:mt-24 sm:mx-2 md:gap-8 md:mx-4 lg:flex-col lg:mx-0 lg:mt-36">
				<picture class="relative flex items-center bg-orange sm:bg-transparent">
					<button class="bg-white w-10 h-10 flex items-center justify-center pr-1 rounded-full absolute left-6 z-10 sm:hidden" id="previous-mobile">
						<svg width="12" height="18" xmlns="http://www.w3.org/2000/svg" id="previous-mobile">
							<path d="M11 1 3 9l8 8" stroke="#1D2026" stroke-width="3" fill="none" fill-rule="evenodd" id="previous-mobile" />
						</svg>
					</button>
					<img src="${product.image}" alt="${product.title}" class="block sm:rounded-xl xl:w-[70%] xl:rounded-xl m-auto pointer-events-none transition duration-300 lg:w-3/4 lg:pointer-events-auto lg:cursor-pointer lg:hover:shadow-xl" id="hero" />
					<button class="bg-white w-10 h-10 flex items-center justify-center pl-1 rounded-full absolute right-6 z-10 sm:hidden" id="next-mobile">
						<svg width="13" height="18" xmlns="http://www.w3.org/2000/svg" id="next-mobile">
							<path d="m2 1 8 8-8 8" stroke="#1D2026" stroke-width="3" fill="none" fill-rule="evenodd" id="next-mobile" />
						</svg>
					</button>
				</picture>

				<div class="thumbnails hidden justify-between gap-4 m-auto sm:flex sm:flex-col sm:justify-start sm:items-center sm:h-fit md:gap-5 lg:flex-row">
					<div id="1" class="w-1/5 cursor-pointer rounded-xl sm:w-28 md:w-32 lg:w-[72px] xl:w-[78px] ring-active">
						<img src="${product.image}" alt="${product.title}" class="rounded-xl hover:opacity-50 transition active" id="thumb-1" />
					</div>

					<div id="2" class="w-1/5 cursor-pointer rounded-xl sm:w-28 md:w-32 lg:w-[72px] xl:w-[78px]">
						<img src="${product.image}" alt="${product.title}" class="rounded-xl hover:opacity-50 transition" id="thumb-2" />
					</div>

					<div id="3" class="w-1/5 cursor-pointer rounded-xl sm:w-28 md:w-32 lg:w-[72px] xl:w-[78px]">
						<img src="${product.image}" alt="${product.title}" class="rounded-xl hover:opacity-50 transition" id="thumb-3" />
					</div>

					<div id="4" class="w-1/5 cursor-pointer rounded-xl sm:w-28 md:w-32 lg:w-[72px] xl:w-[78px]">
						<img src="${product.image}" alt="${product.title}" class="rounded-xl hover:opacity-50 transition" id="thumb-4" />
					</div>
				</div>
			</section>


			<section class="w-full p-6 lg:mt-36 lg:pr-20 lg:py-10 2xl:pr-40 2xl:mt-40 product__render" id="product__render">
				<h4 class="font-bold text-orange mb-2 uppercase text-xs tracking-widest">
					Sneaker Company
				</h4>


								<h1 class="text-very-dark mb-4 font-bold text-3xl lg:text-4xl">
									${product.title}
								</h1>
								<p class="text-dark-grayish mb-6 text-base sm:text-lg">
								${product.description}
								</p>

								<div class="flex items-center justify-between mb-6 sm:flex-col sm:items-start">
									<div class="flex items-center gap-4">
										<h3 class="text-very-dark font-bold text-3xl inline-block">
											$${product.price}
										</h3>
										<span class="inline-block h-fit py-0.5 px-2 font-bold bg-pale-orange text-orange rounded-lg text-sm">50%</span>
									</div>
									<p class="text-dark-grayish w-fit line-through decoration-dark-grayish decoration-1 my-auto">
										// $${product.price}
									</p>
								</div>

								<div class="flex flex-col gap-5 mb-16 sm:flex-row lg:mb-0">
									<div class="w-full h-10 text-sm bg-light py-2 flex items-center justify-between rounded-lg font-bold relatives sm:w-80">
										<div id="minus" class="plus-minus">
											<div class="w-3 h-1 bg-orange absolute" id="minus"></div>
											<svg width="12" height="4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
												<defs>
													<path d="M11.357 3.332A.641.641 0 0 0 12 2.69V.643A.641.641 0 0 0 11.357 0H.643A.641.641 0 0 0 0 .643v2.046c0 .357.287.643.643.643h10.714Z" id="a" />
												</defs>
												<use fill="#FF7E1B" fill-rule="nonzero" xlink:href="#a" />
											</svg>
										</div>
										<span id="amount" class="select-none">0</span>
										<div id="plus" class="plus-minus">
											<svg width="12" height="12" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="plus">
												<defs>
													<path d="M12 7.023V4.977a.641.641 0 0 0-.643-.643h-3.69V.643A.641.641 0 0 0 7.022 0H4.977a.641.641 0 0 0-.643.643v3.69H.643A.641.641 0 0 0 0 4.978v2.046c0 .356.287.643.643.643h3.69v3.691c0 .356.288.643.644.643h2.046a.641.641 0 0 0 .643-.643v-3.69h3.691A.641.641 0 0 0 12 7.022Z" id="b" />
												</defs>
												<use fill="#FF7E1B" fill-rule="nonzero" xlink:href="#b" id="plus" />
											</svg>
										</div>
									</div>
									<button class="w-full h-10 bg-orange py-2 flex items-center justify-center gap-4 text-xs rounded-lg font-bold text-light shadow-md shadow-orange hover:brightness-125 transition select-none" id="add-cart">
										<svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 20">
											<path d="M20.925 3.641H3.863L3.61.816A.896.896 0 0 0 2.717 0H.897a.896.896 0 1 0 0 1.792h1l1.031 11.483c.073.828.52 1.726 1.291 2.336C2.83 17.385 4.099 20 6.359 20c1.875 0 3.197-1.87 2.554-3.642h4.905c-.642 1.77.677 3.642 2.555 3.642a2.72 2.72 0 0 0 2.717-2.717 2.72 2.72 0 0 0-2.717-2.717H6.365c-.681 0-1.274-.41-1.53-1.009l14.321-.842a.896.896 0 0 0 .817-.677l1.821-7.283a.897.897 0 0 0-.87-1.114ZM6.358 18.208a.926.926 0 0 1 0-1.85.926.926 0 0 1 0 1.85Zm10.015 0a.926.926 0 0 1 0-1.85.926.926 0 0 1 0 1.85Zm2.021-7.243-13.8.81-.57-6.341h15.753l-1.383 5.53Z" fill="hsl(223, 64%, 98%)" fill-rule="nonzero" />
										</svg>
										Add to cart
									</button>
								</div>
			</section>

								`;
				productRender.innerHTML += productoHtml;
			}
		</script>
	</div>

	<script src="../../assets/js/shop/script.js"></script>
	<script src="../../assets/js/dashboard/GETProducts.js"></script>
</body>

</html>