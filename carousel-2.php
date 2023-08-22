<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Tailwind CSS Carousel</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">

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
            /*Set to match the Tailwind colour you want the active one to be */
        }
    </style>

</head>

<body class="bg-white font-sans leading-normal tracking-normal">

    <div class="carousel relative shadow-2xl bg-white">
        <div class="carousel-inner relative overflow-hidden w-full">
            <!--Slide 1-->
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden=""
                checked="checked">
            <div class="carousel-item absolute opacity-0 " style="height:90vh;">
                <section>
                    <div class="block h-full w-full pb-40 text-center">
                        <div class=" grid grid-cols-2 text-left ">
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
                                    <p class="text-xs mt-2 ">
                                        We are a complete communications plaatform <br>
                                        with bots, apps and more-like email,messages, so you <br>
                                        can build great customer relationships, every step of the <br>
                                        way.
                                    </p>
                                </div>
                                <div class="container mt-4">
                                    <a href="#">
                                        <button type="button"
                                            class="text-black bg-yellow-500 px-3 py-2 ring-1 ring-yellow-400r mr-2 mb-2 rounded-full">
                                            <div class="flex items-center ">
                                                <span class="text-xs">Learn more</span>
                                                <svg width="5" height="5" viewBox="0 0 10 10" fill="none"
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
            <label for="carousel-3"
                class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-blackk hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-2"
                class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-blackk hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!--Slide 2-->
            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0" style="height:90vh;">
                <div class="">
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
                                        <p class="text-xs mt-2">
                                            Struggling with high message volumes on WhatsApp? <br>
                                            Need to unify messages from SMS, WhatsApp, Email and <br>
                                            more? Today’s consumer is demanding quicker response <br>
                                            time from businesses.
                                        </p>
                                    </div>
                                    <div class="container mt-4">
                                        <a href="#">
                                            <button type="button"
                                                class="text-black bg-yellow-500 px-3 py-2 ring-1 ring-yellow-400 rounded-full mr-2 mb-2 ">
                                                <div class="flex items-center ">
                                                    <span class="text-xs">Learn more</span>
                                                    <svg width="5" height="5" viewBox="0 0 10 10" fill="none"
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
            <label for="carousel-1"
                class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-blackk hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-3"
                class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-blackk hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!--Slide 3-->
            <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0" style="height:90vh;">
                <div class="">
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
                                        <p class="text-xs mt-2">
                                            A growth hacking tool to help businesses send out <br>
                                            broadcast rich-media messages on WhatsApp. The tool <br>
                                            further supports the ability to set up an auto-reply <br>
                                            sequence for incoming WhatsApp chats.
                                        </p>
                                    </div>
                                    <div class="container mt-4">
                                        <a href="#">
                                            <button type="button"
                                                class="text-black bg-yellow-500 px-3 py-2 ring-1 ring-yellow-400r mr-2 mb-2 rounded-full">
                                                <div class="flex items-center ">
                                                    <span class="text-xs">Learn more</span>
                                                    <svg width="5" height="5" viewBox="0 0 10 10" fill="none"
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
            <label for="carousel-2"
                class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black rounded-full  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-1"
                class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black rounded-full  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!-- Add additional indicators for each slide-->
            <ol class="carousel-indicators">
                <li class="inline-block mr-3">
                    <label for="carousel-1"
                        class="carousel-bullet cursor-pointer block text-3xl font-bold text-white hover:text-blue-700">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-2"
                        class="carousel-bullet cursor-pointer block text-3xl font-bold text-white hover:text-blue-700">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-3"
                        class="carousel-bullet cursor-pointer block text-3xl font-bold text-white hover:text-blue-700">•</label>
                </li>


            </ol>
        </div>




















        <div class="flex justify-center">
            <div class="max-w-3xl grid grid-cols-3 gap-4">
                <!-- Basic Plan -->
                <div class="bg-white shadow-md p-6 rounded-md text-center">
                    <h3 class="text-lg font-semibold mb-4">Basic Plan</h3>
                    <p class="text-gray-600 mb-6">Perfect for individuals</p>
                    <div class="text-3xl font-semibold mb-6">$9.99/month</div>
                    <ul class="text-left text-gray-600 space-y-2">
                        <li>5GB Storage</li>
                        <li>10 Users</li>
                        <li>Email Support</li>
                    </ul>
                    <button
                        class="mt-6 text-white bg-blue-500 hover:bg-blue-600 rounded-full py-2 px-6 transition duration-300 ease-in-out">
                        Select
                    </button>
                </div>

                <!-- Pro Plan -->
                <div class="bg-white shadow-md p-6 rounded-md text-center">
                    <h3 class="text-lg font-semibold mb-4">Pro Plan</h3>
                    <p class="text-gray-600 mb-6">Great for small businesses</p>
                    <div class="text-3xl font-semibold mb-6">$19.99/month</div>
                    <ul class="text-left text-gray-600 space-y-2">
                        <li>20GB Storage</li>
                        <li>50 Users</li>
                        <li>24/7 Support</li>
                    </ul>
                    <button
                        class="mt-6 text-white bg-blue-500 hover:bg-blue-600 rounded-full py-2 px-6 transition duration-300 ease-in-out">
                        Select
                    </button>
                </div>

                <!-- Enterprise Plan -->
                <div class="bg-white shadow-md p-6 rounded-md text-center">
                    <h3 class="text-lg font-semibold mb-4">Enterprise Plan</h3>
                    <p class="text-gray-600 mb-6">For large organizations</p>
                    <div class="text-3xl font-semibold mb-6">Contact Us</div>
                    <ul class="text-left text-gray-600 space-y-2">
                        <li>Unlimited Storage</li>
                        <li>Unlimited Users</li>
                        <li>Premium Support</li>
                    </ul>
                    <button
                        class="mt-6 text-white bg-blue-500 hover:bg-blue-600 rounded-full py-2 px-6 transition duration-300 ease-in-out">
                        Contact
                    </button>
                </div>
            </div>
        </div>

    </div>

</html>






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
                    <p class="text-xs mt-2">
                        This is the heart of the platform as it’s with most <br>
                        platforms, you require a customer database to be able to <br>
                        engage. We currently support single data entry and/or <br>
                        importation via csv.
                    </p>
                </div>
                <div class="container mt-4">
                    <a href="#">
                        <button type="button"
                            class="text-black bg-yellow-500 px-3 py-2 ring-1 ring-yellow-400r mr-2 mb-2 rounded-full">
                            <div class="flex items-center ">
                                <span class="text-xs">Learn more</span>
                                <svg width="5" height="5" viewBox="0 0 10 10" fill="none"
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