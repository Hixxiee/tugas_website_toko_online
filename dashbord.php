<?php

include_once 'koneksi.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>

<body>
    <!-- PROMOTION -->
    <div class="flex items-center justify-between gap-4 bg-indigo-600 px-4 py-3 text-white">
        <p class="text-sm font-medium">
            PROMO SAMPAI 75%
            <a href="#" class="inline-block underline">Berlaku hari ini saja!</a>
        </p>

        <button aria-label="Dismiss" class="shrink-0 rounded-lg bg-black/10 p-1 transition hover:bg-black/20">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd" />
            </svg>
        </button>
    </div>
    <!--END PROMOTION-->

    <!--NAVBAR-->
    <header class="border-b border-gray-200 bg-gray-50">
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
            <div class="flex flex-col items-start gap-4 md:flex-row md:items-center md:justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">CauukStore</h1>

                    <p class="mt-1.5 text-sm text-gray-500">
                        Belanja Pakaian Dengan Harga Yang Terjangkau Dan Berkualitas.
                    </p>
                </div>

                <div class="flex items-center gap-4">
                    <button
                        class="inline-flex items-center justify-center gap-1.5 rounded-sm border border-gray-200 bg-white px-5 py-3 text-gray-900 transition hover:text-gray-700 focus:ring-3 focus:outline-hidden"
                        type="button">
                        <span class="text-sm font-medium"> Cara Belanja </span>

                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                    </button>

                    <button
                        class="inline-block rounded-sm bg-indigo-600 px-5 py-3 text-sm font-medium text-white transition hover:bg-indigo-700 focus:ring-3 focus:outline-hidden"
                        type="button">
                        Checkout
                    </button>
                </div>
            </div>
        </div>
    </header>
    <!--END NAVBAR-->

    <!--CALL ACTION-->
    <section class="bg-gray-50">
        <div class="p-8 md:p-12 lg:px-16 lg:py-24">
            <div class="mx-auto max-w-lg text-center">
                <h2 class="text-2xl font-bold text-gray-900 md:text-2xl">
                    Latest T-shirt.
                </h2>

                <p class="hidden text-gray-500 sm:mt-4 sm:block">
                    Menyediakan pakaian dengan kualitas yang tinggi dan harga yang terjangkau,dengan desain limited
                    edition!.
                </p>
            </div>

            <div class="mx-auto mt-8 max-w-xl">
                <form action="#" class="sm:flex sm:gap-4">
                    <div class="sm:flex-1">
                        <input type="text" placeholder="Pakaian...."
                            class="w-full rounded-md border-gray-200 bg-white p-3 text-gray-700 shadow-xs transition focus:border-white focus:ring-3 focus:ring-indigo-400 focus:outline-hidden" />
                    </div>

                    <button type="submit"
                        class="group mt-4 flex w-full items-center justify-center gap-2 rounded-md bg-indigo-600 px-5 py-3 text-white transition focus:ring-3 focus:ring-yellow-400 focus:outline-hidden sm:mt-0 sm:w-auto">
                        <span class="text-sm font-medium"> Cari </span>

                        <svg class="size-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </section>
    <!--END-->

    <!--PRODUCT LIST-->
    <div class="grid grid-cols 3 gap-5">
        <a href="#" class="group block">
            
            <img
                src="https://images.unsplash.com/photo-1592921870789-04563d55041c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                alt=""
                class="mr-2 w-75">

            <div class="mt-3">
                <h3 class="font-medium text-gray-900 group-hover:underline group-hover:underline-offset-4">
                    Simple Watch
                </h3>

                <p class="mt-1 text-sm text-gray-700">$150</p>
            </div>
        </a>
        <a href="#" class="group block">
            
            <img
                src="https://images.unsplash.com/photo-1592921870789-04563d55041c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                alt=""
                class="mr-2 w-75">

            <div class="mt-3">
                <h3 class="font-medium text-gray-900 group-hover:underline group-hover:underline-offset-4">
                    Simple Watch
                </h3>

                <p class="mt-1 text-sm text-gray-700">$150</p>
            </div>
        </a>
    </div>
    <!--END PRODUCT LIST-->

    <!--FOTTER-->
    <!--END FOTTER-->
</body>

</html>