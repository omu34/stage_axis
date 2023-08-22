<!DOCTYPE html>
<body>

<head>
	<meta charset="utf-8">
	<title>Tailwind CSS Carousel</title>
	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css" rel="stylesheet" />
	<style>
		.carousel-open:checked+.carousel-item {
			position: static;
			opacity: 100;
		}

		.carousel-item {
			-webkit-transition: opacity 0.6s ease-out;
			transition: opacity 0.6s ease-out;
		}

		#carousel-1:checked~.control-1,
		#carousel-2:checked~.control-2,
		#carousel-3:checked~.control-3 {
			display: block;
		}

		.carousel-indicators {
			list-style: none;
			margin: 0;
			padding: 0;
			position: absolute;
			bottom: 2%;
			left: 0;
			right: 0;
			text-align: center;
			z-index: 10;
		}

		#carousel-1:checked~.control-1~.carousel-indicators li:nth-child(1) .carousel-bullet,
		#carousel-2:checked~.control-2~.carousel-indicators li:nth-child(2) .carousel-bullet,
		#carousel-3:checked~.control-3~.carousel-indicators li:nth-child(3) .carousel-bullet {
			color: #2b6cb0;
			/*Set to match the Tailwind colour you want the active one to be */
		}
	</style>

</head>

<!-- <body class="bg-white font-sans leading-normal tracking-normal">
	<div class="carousel relative shadow-2xl bg-white" id="default-carousel" data-carousel="static">
		<div class="carousel-inner relative overflow-hidden w-full">
			<input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden=""
				checked="checked">
			<div class="carousel-item absolute opacity-0 " style="height:90vh;">

				<div class="hidden duration-700 ease-in-out" data-carousel-item>
					<section>
						<div class="">
							<div class=" grid grid-cols-2  ">
								<div class="container ml-14 mt-16">
									<img src="images/axisFeatures/a-f1.svg" alt="" srcset="">
								</div>

								<div class="container ml-28 mt-8">
									<div class="container mt-8">
										<h6 class="text-3xl font-bold">
											<b>
												WhatsApp<br> Chatbot
											</b>
										</h6>
									</div>
									<div class="container mt-4">
										<h4> <b class="text-sm">Communicate better</b></h4>
										<p class="text-sm mt-4">
											We are a complete communications plaatform <br>
											with bots, apps and more-like email,messages, so you <br>
											can build great customer relationships, every step of the <br>
											way.
										</p>
									</div>
									<div class="container mt-4">
										<a href="#">
											<button type="button"
												class="text-blac bg-yellow-500 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:focus:ring-yellow-900">
												<div class="flex items-center ">
													<span class="pr-2">Learn more</span>
													<svg width="10" height="10" viewBox="0 0 10 10" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<g id="Vector">
															<path fill-rule="evenodd" clip-rule="evenodd"
																d="M9.77671 0.580198C10.0424 0.845861 10.0424 1.27659 9.77671 1.54225L1.61345 9.70551C1.34778 9.97118 0.917058 9.97118 0.651396 9.70551C0.385733 9.43985 0.385733 9.00913 0.651396 8.74346L8.81466 0.580198C9.08032 0.314535 9.51105 0.314535 9.77671 0.580198Z"
																fill="black" />
															<path fill-rule="evenodd" clip-rule="evenodd"
																d="M1.98276 1.06122C1.98276 0.685519 2.28733 0.380951 2.66303 0.380951H9.29569C9.67139 0.380951 9.97596 0.685519 9.97596 1.06122V7.69388C9.97596 8.06958 9.67139 8.37415 9.29569 8.37415C8.91998 8.37415 8.61541 8.06958 8.61541 7.69388V1.7415H2.66303C2.28733 1.7415 1.98276 1.43693 1.98276 1.06122Z"
																fill="black" />
														</g>
													</svg>
												</div>
											</button>
										</a>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>


				<div class="hidden duration-700 ease-in-out" data-carousel-item>
					<section>
						<div class="">
							<div class=" grid grid-cols-2  ">
								<div class="container ml-14 mt-16">
									<img src="images/axisFeatures/a-f2.svg" alt="" srcset="">
								</div>

								<div class="container ml-28 mt-8">
									<div class="container mt-8">
										<h6 class="text-3xl font-bold">
											<b>
												Multi-Agent <br>
												Unified Inbox
											</b>
										</h6>
									</div>
									<div class="container mt-4">
										<h4> <b class="text-sm">Team Inbox</b></h4>
										<p class="text-sm mt-4">
											Struggling with high message volumes on WhatsApp? <br>
											Need to unify messages from SMS, WhatsApp, Email and <br>
											more? Today’s consumer is demanding quicker response <br>
											time from businesses.
										</p>
									</div>
									<div class="container mt-4">
										<a href="#">
											<button type="button"
												class="text-blac bg-yellow-500 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:focus:ring-yellow-900">
												<div class="flex items-center ">
													<span class="pr-2">Learn more</span>
													<svg width="10" height="10" viewBox="0 0 10 10" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<g id="Vector">
															<path fill-rule="evenodd" clip-rule="evenodd"
																d="M9.77671 0.580198C10.0424 0.845861 10.0424 1.27659 9.77671 1.54225L1.61345 9.70551C1.34778 9.97118 0.917058 9.97118 0.651396 9.70551C0.385733 9.43985 0.385733 9.00913 0.651396 8.74346L8.81466 0.580198C9.08032 0.314535 9.51105 0.314535 9.77671 0.580198Z"
																fill="black" />
															<path fill-rule="evenodd" clip-rule="evenodd"
																d="M1.98276 1.06122C1.98276 0.685519 2.28733 0.380951 2.66303 0.380951H9.29569C9.67139 0.380951 9.97596 0.685519 9.97596 1.06122V7.69388C9.97596 8.06958 9.67139 8.37415 9.29569 8.37415C8.91998 8.37415 8.61541 8.06958 8.61541 7.69388V1.7415H2.66303C2.28733 1.7415 1.98276 1.43693 1.98276 1.06122Z"
																fill="black" />
														</g>
													</svg>
												</div>
											</button>
										</a>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>


				<div class="hidden duration-700 ease-in-out" data-carousel-item>
					<section>
						<div class="">
							<div class=" grid grid-cols-2  ">
								<div class="container ml-14 mt-16">
									<img src="images/axisFeatures/a-f3.svg" alt="" srcset="">

								</div>

								<div class="container ml-28 mt-8">
									<div class="container mt-8">
										<h6 class="text-3xl font-bold">
											<b>
												WhatsApp <br>Bulk Sender
											</b>
										</h6>
									</div>
									<div class="container mt-4">
										<h4> <b class="text-sm">Reach Out</b></h4>
										<p class="text-sm mt-4">
											A growth hacking tool to help businesses send out <br>
											broadcast rich-media messages on WhatsApp. The tool <br>
											further supports the ability to set up an auto-reply <br>
											sequence for incoming WhatsApp chats.
										</p>
									</div>
									<div class="container mt-4">
										<a href="#">
											<button type="button"
												class="text-blac bg-yellow-500 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:focus:ring-yellow-900">
												<div class="flex items-center ">
													<span class="pr-2">Learn more</span>
													<svg width="10" height="10" viewBox="0 0 10 10" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<g id="Vector">
															<path fill-rule="evenodd" clip-rule="evenodd"
																d="M9.77671 0.580198C10.0424 0.845861 10.0424 1.27659 9.77671 1.54225L1.61345 9.70551C1.34778 9.97118 0.917058 9.97118 0.651396 9.70551C0.385733 9.43985 0.385733 9.00913 0.651396 8.74346L8.81466 0.580198C9.08032 0.314535 9.51105 0.314535 9.77671 0.580198Z"
																fill="black" />
															<path fill-rule="evenodd" clip-rule="evenodd"
																d="M1.98276 1.06122C1.98276 0.685519 2.28733 0.380951 2.66303 0.380951H9.29569C9.67139 0.380951 9.97596 0.685519 9.97596 1.06122V7.69388C9.97596 8.06958 9.67139 8.37415 9.29569 8.37415C8.91998 8.37415 8.61541 8.06958 8.61541 7.69388V1.7415H2.66303C2.28733 1.7415 1.98276 1.43693 1.98276 1.06122Z"
																fill="black" />
														</g>
													</svg>
												</div>
											</button>
										</a>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>

				<div class="hidden duration-700 ease-in-out" data-carousel-item>
					<section>
						<div class="">
							<div class=" grid grid-cols-2  ">
								<div class="container ml-14 mt-16">
									<img src="images/axisFeatures/a-f5.svg" alt="" srcset="">

								</div>

								<div class="container ml-28 mt-8">
									<div class="container mt-8">
										<h6 class="text-3xl font-bold">
											<b>
												Email <br>
												Marketing
											</b>
										</h6>
									</div>
									<div class="container mt-4">
										<h4> <b class="text-sm">Leverage on emails</b></h4>
										<p class="text-sm mt-4">
											Our email builder is extremely easy to use and suited to <br>
											deliver the key message. We also provide a further ability <br>
											to add attachments (images, documents, etc) to the <br>
											broadcast emails.
										</p>
									</div>
									<div class="container mt-4">
										<a href="#">
											<button type="button"
												class="text-blac bg-yellow-500 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:focus:ring-yellow-900">
												<div class="flex items-center ">
													<span class="pr-2">Learn more</span>
													<svg width="10" height="10" viewBox="0 0 10 10" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<g id="Vector">
															<path fill-rule="evenodd" clip-rule="evenodd"
																d="M9.77671 0.580198C10.0424 0.845861 10.0424 1.27659 9.77671 1.54225L1.61345 9.70551C1.34778 9.97118 0.917058 9.97118 0.651396 9.70551C0.385733 9.43985 0.385733 9.00913 0.651396 8.74346L8.81466 0.580198C9.08032 0.314535 9.51105 0.314535 9.77671 0.580198Z"
																fill="black" />
															<path fill-rule="evenodd" clip-rule="evenodd"
																d="M1.98276 1.06122C1.98276 0.685519 2.28733 0.380951 2.66303 0.380951H9.29569C9.67139 0.380951 9.97596 0.685519 9.97596 1.06122V7.69388C9.97596 8.06958 9.67139 8.37415 9.29569 8.37415C8.91998 8.37415 8.61541 8.06958 8.61541 7.69388V1.7415H2.66303C2.28733 1.7415 1.98276 1.43693 1.98276 1.06122Z"
																fill="black" />
														</g>
													</svg>
												</div>
											</button>
										</a>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>


				<div class="hidden duration-700 ease-in-out" data-carousel-item>
					<section>
						<div class="">
							<div class=" grid grid-cols-2  ">
								<div class="container ml-14 mt-16">
									<img src="images/axisFeatures/a-f3.svg" alt="" srcset="">

								</div>

								<div class="container ml-28 mt-8">
									<div class="container mt-8">
										<h6 class="text-3xl font-bold">
											<b>
												Audience <br>
												Center
											</b>
										</h6>
									</div>
									<div class="container mt-4">
										<h4> <b class="text-sm">Segment your clients</b></h4>
										<p class="text-sm mt-4">
											This is the heart of the platform as it’s with most <br>
											platforms, you require a customer database to be able to <br>
											engage. We currently support single data entry and/or <br>
											importation via csv.
										</p>
									</div>
									<div class="container mt-4">
										<a href="#">
											<button type="button"
												class="text-blac bg-yellow-500 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:focus:ring-yellow-900">
												<div class="flex items-center ">
													<span class="pr-2">Learn more</span>
													<svg width="10" height="10" viewBox="0 0 10 10" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<g id="Vector">
															<path fill-rule="evenodd" clip-rule="evenodd"
																d="M9.77671 0.580198C10.0424 0.845861 10.0424 1.27659 9.77671 1.54225L1.61345 9.70551C1.34778 9.97118 0.917058 9.97118 0.651396 9.70551C0.385733 9.43985 0.385733 9.00913 0.651396 8.74346L8.81466 0.580198C9.08032 0.314535 9.51105 0.314535 9.77671 0.580198Z"
																fill="black" />
															<path fill-rule="evenodd" clip-rule="evenodd"
																d="M1.98276 1.06122C1.98276 0.685519 2.28733 0.380951 2.66303 0.380951H9.29569C9.67139 0.380951 9.97596 0.685519 9.97596 1.06122V7.69388C9.97596 8.06958 9.67139 8.37415 9.29569 8.37415C8.91998 8.37415 8.61541 8.06958 8.61541 7.69388V1.7415H2.66303C2.28733 1.7415 1.98276 1.43693 1.98276 1.06122Z"
																fill="black" />
														</g>
													</svg>
												</div>
											</button>
										</a>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>


			<div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
				<button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1"
					data-carousel-slide-to="0"></button>
				<button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
					data-carousel-slide-to="1"></button>
				<button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
					data-carousel-slide-to="2"></button>
			</div>

			<button type="button"
				class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
				data-carousel-prev>
				<span
					class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30  group-focus:ring-2 group-focus:ring-black  group-focus:outline-none">
					<svg class="w-5 h-5 text-black sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
						xmlns="http://www.w3.org/2000/svg">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
						</path>
					</svg>
				</span>
			</button>
			<button type="button"
				class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
				data-carousel-next>
				<span
					class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 0 group-focus:ring-2 group-focus:ring-black  group-focus:outline-none">
					<svg class="w-5 h-5 text-black sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
						xmlns="http://www.w3.org/2000/svg">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
						</path>
					</svg>
				</span>
			</button>
		</div>
	</div>








	<script src="buger.js"></script>
	<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
</body> -->




<body>







table


<!-- component -->
<style>
    [x-cloak] {
    display: none;
    }
</style>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>

<div class="container mx-auto antialiased text-gray-900 bg-white" x-data="setup()">
  <!-- Navbar -->
  <nav>
    <div class="flex items-center justify-between px-4 py-2">
      <!-- Logo -->
      <div class="flex items-center justify-start w-1/4">
        <a href="#">
          <span class="sr-only">Home</span>
          <span class="text-2xl font-semibold"><span class="text-indigo-500">K</span>-UI </span>
        </a>
      </div>

      <!-- Mobile menu button -->
      <button
              @click="isNavOpen = !isNavOpen"
              x-cloak
              class="inline-flex items-center justify-center text-gray-400 rounded-md lg:hidden focus:outline-none focus:ring-2 focus:ring-indigo-500"
              type="button"
              aria-controls="mobile-menu"
              :aria-expanded="isNavOpen ? 'true' : 'false'"
              >
        <span class="sr-only">Open main menu</span>

        <!-- Menu icon -->
        <svg
             x-show="!isNavOpen"
             class="w-8 h-8"
             xmlns="http://www.w3.org/2000/svg"
             fill="none"
             viewBox="0 0 24 24"
             stroke="currentColor"
             aria-hidden="true"
             >
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>

        <!-- X icon -->
        <svg
             x-show="isNavOpen"
             class="w-8 h-8"
             xmlns="http://www.w3.org/2000/svg"
             fill="none"
             viewBox="0 0 24 24"
             stroke="currentColor"
             aria-hidden="true"
             >
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>

      <!-- Desktop Middle links -->
      <div class="items-center justify-center hidden w-1/2 lg:flex">
        <a
           href="#"
           class="px-4 py-2 text-base font-medium text-gray-400 transition-colors rounded-full hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-700"
           >
          Home
        </a>
        <a
           href="#"
           class="px-4 py-2 text-base font-medium text-gray-900 transition-colors rounded-full hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-700"
           >
          Pricing
        </a>
        <a
           href="#"
           class="px-4 py-2 text-base font-medium text-gray-400 transition-colors rounded-full hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-700"
           >
          Services
        </a>
        <a
           href="#"
           class="px-4 py-2 text-base font-medium text-gray-400 transition-colors rounded-full hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-700"
           >
          Blog
        </a>
      </div>

      <!-- Desktop Right links -->
      <div class="items-center justify-end hidden w-1/4 space-x-2 lg:flex">
        <a
           href="#"
           class="px-4 py-2 text-base font-medium text-gray-400 transition-colors rounded-full hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500"
           >
          Login
        </a>
        <a
           href="#"
           class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-full shadow-sm whitespace-nowrap hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
           >
          Get Started
        </a>
      </div>
    </div>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="flex flex-col items-center space-y-3 lg:hidden" x-cloak x-show="isNavOpen" @click.away="isNavOpen = false">
      <a
         href="#"
         class="px-4 py-2 text-base font-medium text-gray-400 transition-colors rounded-full hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-700"
         >
        Home
      </a>
      <a
         href="#"
         class="px-4 py-2 text-base font-medium text-gray-900 transition-colors rounded-full hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-700"
         >
        Pricing
      </a>
      <a
         href="#"
         class="px-4 py-2 text-base font-medium text-gray-400 transition-colors rounded-full hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-700"
         >
        Services
      </a>
      <a
         href="#"
         class="px-4 py-2 text-base font-medium text-gray-400 transition-colors rounded-full hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-700"
         >
        Blog
      </a>
      <a
         href="#"
         class="px-4 py-2 text-base font-medium text-gray-400 transition-colors rounded-full hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500"
         >
        Login
      </a>
      <a
         href="#"
         class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-full shadow-sm whitespace-nowrap hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
         >
        Get Started
      </a>
    </div>
  </nav>

  <main class="mx-4 my-16">
    <div class="text-center">
      <h1 class="mb-4 text-2xl font-normal md:text-3xl lg:text-4xl">
        Our <span class="font-semibold">plans</span> for your <span class="font-semibold">strategies</span>
      </h1>
      <p class="text-sm font-normal text-gray-400">
        See below our main three plans for your business, for your startup and agency.
      </p>
      <p class="text-sm font-normal text-gray-400">
        It start from here! You can teach yourself what you really like.
      </p>
    </div>

    <!-- Plan switch -->
    <div class="flex items-center justify-center mt-10 space-x-4">
      <span class="text-base font-medium">Bill Monthly</span>
      <button
              class="relative rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
              x-cloak
              @click="billPlan == 'monthly' ? billPlan = 'annually' : billPlan = 'monthly'"
              >
        <div class="w-16 h-8 transition bg-indigo-500 rounded-full shadow-md outline-none"></div>
        <div
             class="absolute inline-flex items-center justify-center w-6 h-6 transition-all duration-200 ease-in-out transform bg-white rounded-full shadow-sm top-1 left-1"
             :class="{ 'translate-x-0': billPlan == 'monthly', 'translate-x-8': billPlan == 'annually' }"
             ></div>
      </button>
      <span class="text-base font-medium">Bill Annually</span>
    </div>

    <!-- Plans -->
    <div
         class="flex flex-col items-center justify-center mt-16 space-y-8 lg:flex-row lg:items-stretch lg:space-x-8 lg:space-y-0"
         >
      <template x-for="(plan, i) in plans" x-key="i">
        <section class="flex flex-col w-full max-w-sm p-12 space-y-6 bg-white rounded-lg shadow-md">
          <!-- Price -->
          <div class="flex-shrink-0">
            <span
                  class="text-4xl font-medium tracking-tight"
                  :class="plan.name == 'Basic' ? 'text-green-500' : ''"
                  x-text="`$${billPlan == 'monthly' ? plan.price.monthly : plan.price.annually}`"
                  ></span>
            <span class="text-gray-400" x-text="billPlan == 'monthly' ? '/month' : '/year'"></span>
          </div>

          <!--  -->
          <div class="flex-shrink-0 pb-6 space-y-2 border-b">
            <h2 class="text-2xl font-normal" x-text="plan.name"></h2>
            <p class="text-sm text-gray-400" x-text="plan.discretion"></p>
          </div>

          <!-- Features -->
          <ul class="flex-1 space-y-4">
            <template x-for="(feature, i) in plan.features" x-key="i">
              <li class="flex items-start">
                <svg
                     class="w-6 h-6 text-green-300"
                     aria-hidden="true"
                     xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 20 20"
                     fill="currentColor"
                     >
                  <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"
                        />
                </svg>
                <span class="ml-3 text-base font-medium" x-text="feature"></span>
              </li>
            </template>
          </ul>

          <!-- Button -->
          <div class="flex-shrink-0 pt-4">
            <button
                    class="inline-flex items-center justify-center w-full max-w-xs px-4 py-2 transition-colors border rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    :class="plan.name == 'Basic' ? 'bg-indigo-500 text-white hover:bg-indigo-700' : 'hover:bg-indigo-500 hover:text-white'"
                    x-text="`Get ${plan.name}`"
                    ></button>
          </div>
        </section>
      </template>
    </div>
  </main>

  <!-- Author links -->
  <div class="fixed flex items-center space-x-4 bottom-5 left-5">
    <a href="https://twitter.com/ak_kamona" target="_blank" class="transition-transform transform hover:scale-125">
      <span class="sr-only">Twitter</span>
      <svg
           aria-hidden="true"
           class="w-8 h-8 text-blue-500"
           fill="currentColor"
           xmlns="http://www.w3.org/2000/svg"
           viewBox="0 0 24 24"
           >
        <path
              d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z"
              ></path>
      </svg>
    </a>
    <a href="https://github.com/Kamona-WD" target="_blank" class="transition-transform transform hover:scale-125">
      <span class="sr-only">Github</span>
      <svg
           aria-hidden="true"
           class="w-8 h-8 text-black"
           fill="currentColor"
           xmlns="http://www.w3.org/2000/svg"
           viewBox="0 0 24 24"
           >
        <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M12.026,2c-5.509,0-9.974,4.465-9.974,9.974c0,4.406,2.857,8.145,6.821,9.465 c0.499,0.09,0.679-0.217,0.679-0.481c0-0.237-0.008-0.865-0.011-1.696c-2.775,0.602-3.361-1.338-3.361-1.338 c-0.452-1.152-1.107-1.459-1.107-1.459c-0.905-0.619,0.069-0.605,0.069-0.605c1.002,0.07,1.527,1.028,1.527,1.028 c0.89,1.524,2.336,1.084,2.902,0.829c0.091-0.645,0.351-1.085,0.635-1.334c-2.214-0.251-4.542-1.107-4.542-4.93 c0-1.087,0.389-1.979,1.024-2.675c-0.101-0.253-0.446-1.268,0.099-2.64c0,0,0.837-0.269,2.742,1.021 c0.798-0.221,1.649-0.332,2.496-0.336c0.849,0.004,1.701,0.115,2.496,0.336c1.906-1.291,2.742-1.021,2.742-1.021 c0.545,1.372,0.203,2.387,0.099,2.64c0.64,0.696,1.024,1.587,1.024,2.675c0,3.833-2.33,4.675-4.552,4.922 c0.355,0.308,0.675,0.916,0.675,1.846c0,1.334-0.012,2.41-0.012,2.737c0,0.267,0.178,0.577,0.687,0.479 C19.146,20.115,22,16.379,22,11.974C22,6.465,17.535,2,12.026,2z"
              ></path>
      </svg>
    </a>
  </div>
</div>

<script>
    const setup = () => {
    return {
        isNavOpen: false,

        billPlan: 'monthly',

        plans: [
        {
            name: 'Easy',
            discretion: 'All the basics for businesses that are just getting started.',
            price: {
            monthly: 29,
            annually: 29 * 12 - 199,
            },
            features: ['One project', 'Your dashboard'],
        },
        {
            name: 'Basic',
            discretion: 'Better for growing businesses that want more customers.',
            price: {
            monthly: 59,
            annually: 59 * 12 - 100,
            },
            features: ['Two projects', 'Your dashboard', 'Components included', 'Advanced charts'],
        },
        {
            name: 'Custom',
            discretion: 'Advanced features for pros who need more customization.',
            price: {
            monthly: 139,
            annually: 139 * 12 - 100,
            },
            features: ['Unlimited projects', 'Your dashboard', '+300 Components', 'Chat support'],
        },
        ],
    }
}
</script>




Accordion

<div id="accordion-collapse" data-accordion="collapse">
	<h2 id="accordion-collapse-heading-1">
	  <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
		<span>What is Flowbite?</span>
		<svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
		  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
		</svg>
	  </button>
	</h2>
	<div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
	  <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
		<p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
		<p class="mb-2 text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a href="/docs/getting-started/introduction/" class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start developing websites even faster with components on top of Tailwind CSS.</p>
		<p class="mb-4 text-gray-500 dark:text-gray-400">What are the differences between Flowbite and Tailwind UI?</p>
		<!-- Nested accordion -->
		<div id="accordion-nested-collapse" data-accordion="collapse">
		  <h2 id="accordion-nested-collapse-heading-1">
			<button type="button" class="flex items-center justify-between w-full p-5 rounded-t-xl font-medium text-left text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-nested-collapse-body-1" aria-expanded="false" aria-controls="accordion-nested-collapse-body-1">
			  <span>Open source</span>
			 <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
				<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
			  </svg>
			</button>
		  </h2>
		  <div id="accordion-nested-collapse-body-1" class="hidden" aria-labelledby="accordion-nested-collapse-heading-1">
			<div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
			  <p class="text-gray-500 dark:text-gray-400">The main difference is that the core components from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product.</p>
			</div>
		  </div>
		  <h2 id="accordion-nested-collapse-heading-2">
			<button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-nested-collapse-body-2" aria-expanded="false" aria-controls="accordion-nested-collapse-body-2">
			  <span>Architecture</span>
			  <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
				<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
			  </svg>
			</button>
		  </h2>
		  <div id="accordion-nested-collapse-body-2" class="hidden" aria-labelledby="accordion-nested-collapse-heading-2">
			<div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
			  <p class="text-gray-500 dark:text-gray-400">Another difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.</p>
			</div>
		  </div>
		  <h2 id="accordion-nested-collapse-heading-3">
			<button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-nested-collapse-body-3" aria-expanded="false" aria-controls="accordion-nested-collapse-body-3">
			  <span>Can I use both?</span>
			  <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
				<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
			  </svg>
			</button>
		  </h2>
		  <div id="accordion-nested-collapse-body-3" class="hidden" aria-labelledby="accordion-nested-collapse-heading-3">
			<div class="p-5 border border-gray-200 dark:border-gray-700">
			  <p class="mb-2 text-gray-500 dark:text-gray-400">We actually recommend using both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.</p>
			  <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
			  <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">
				<li><a href="https://flowbite.com/pro/" class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
				<li><a href="https://tailwindui.com/" rel="nofollow" class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
			  </ul>
			</div>
		  </div>
		</div>
		<!-- End: Nested accordion -->
	  </div>
	</div>
	<h2 id="accordion-collapse-heading-2">
	  <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
		<span>Is there a Figma file available?</span>
		<svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
		  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
		</svg>
	  </button>
	</h2>
	<div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
	  <div class="p-5 border border-gray-200 dark:border-gray-700">
		<p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
		<p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/" class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
	  </div>
	</div>
  </div>
  

<script src="buger.js"></script>
	<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
</body>
</html>