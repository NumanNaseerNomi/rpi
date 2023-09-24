@extends('layouts.printo')

@section('content')

<!-- Slider (Hero Banner Style) -->
<section class="relative overflow-x-hidden">
    <div class="swiper-container swiper-container-responsive">
        <div class="swiper-wrapper">
            <!-- Slides will be dynamically added here through JavaScript -->
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<section class="paddingsection py-0 md:py-12 px-6 md:px-10">
    <section class="swiper-container companylogo-carousel">
        <div class="swiper-wrapper flex items-center">
            <!-- Logo 1 -->
            <div class="swiper-slide">
                <div class="flex items-center justify-center">
                    <img src="{{ asset('images/home/1.png') }}" alt="Logo 1" class="logo-image">
                </div>
            </div>

            <!-- Logo 2 -->
            <div class="swiper-slide">
                <div class="flex items-center justify-center">
                    <img src="{{ asset('images/home/2.png') }}" alt="Logo 2" class="logo-image">
                </div>
            </div>

            <!-- Logo 3 -->
            <div class="swiper-slide">
                <div class="flex items-center justify-center">
                    <img src="{{ asset('images/home/3.png') }}" alt="Logo 3" class="logo-image">
                </div>
            </div>

            <!-- Logo 4 -->
            <div class="swiper-slide">
                <div class="flex items-center justify-center">
                    <img src="{{ asset('images/home/4.png') }}" alt="Logo 4" class="logo-image">
                </div>
            </div>

            <!-- Logo 5 -->
            <div class="swiper-slide">
                <div class="flex items-center justify-center">
                    <img src="{{ asset('images/home/5.png') }}" alt="Logo 5" class="logo-image">
                </div>
            </div>

            <!-- Logo 6 -->
            <div class="swiper-slide">
                <div class="flex items-center justify-center">
                    <img src="{{ asset('images/home/6.png') }}" alt="Logo 6" class="logo-image">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="flex items-center justify-center">
                    <img src="{{ asset('images/home/7.png') }}" alt="Logo 6" class="logo-image">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="flex items-center justify-center">
                    <img src="{{ asset('images/home/8.png') }}" alt="Logo 6" class="logo-image">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="flex items-center justify-center">
                    <img src="{{ asset('images/home/9.png') }}" alt="Logo 6" class="logo-image">
                </div>
            </div>

        </div>
    </section>
</section>


<section class="categoryboxes md:px-10 md:px-7.5 ">
    <div class="flex flex-col md:flex-row space-y-8 md:space-y-0 md:space-x-8 ">
        <!-- Grid Box 1 -->
        <div class="flex-shrink-0 w-full md:w-1/3 px-3 md:px-0 no-padding-mobile  ">
            <a href="https://printo.ae/categories/print-products"> <img src="{{ asset('images/home/printing.jpg') }}"
                    alt="Image 1 " class="w-full h-auto "> </a>
        </div>

        <!-- Grid Box 2 -->
        <div class="flex-shrink-0 w-full md:w-1/3 px-3 md:px-0 no-padding-mobile  ">
            <a href="https://printo.ae/categories/packaging"> <img src="{{ asset('images/home/packaging.jpg') }}"
                    alt="Image 2 " class="w-full h-auto "> </a>
        </div>

        <!-- Grid Box 3 -->
        <div class="flex-shrink-0 w-full md:w-1/3 px-3 md:px-0 no-padding-mobile  ">
            <a href="https://printo.ae/comingsoon"> <img src="{{ asset('images/home/merch.jpg') }}" alt="Image 3 "
                    class="w-full h-auto ">
            </a>
        </div>
    </div>
</section>

<section class="md:p-5 p-7 md:px-12 bestseller">



    <h2 class="text-2xl md:text-4xl mb-4 py-10 md:py-16">Best Sellers</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-16">
        <!-- Box 1 -->
        <!-- <div class="relative box">
            <a href="https://printo.ae/category/business-cards/products"><img
                    src="{{ asset('images/home/product1.jpg') }}" alt="Product 1" class="box-image"></a>
            <div class="flex items-center justify-between mb-2 md:pt-6 pt-0.5">
                <a href="https://printo.ae/category/business-cards/products">
                    <p class="box-name">Business Cards

                    </p>
                </a>
                </a>
                <div class="whatsapp-button">
                    <a href="" class="whatsapp-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="whatsapptexticon" width="30"
                            height="30" viewBox="0,0,256,256">
                            <g fill="#ffffff" fill-rule="evenodd" stroke="none" stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal">
                                <g transform="scale(8,8)">
                                    <path
                                        d="M24.50391,7.50391c-2.25781,-2.25781 -5.25781,-3.50391 -8.45312,-3.50391c-6.58594,0 -11.94922,5.35938 -11.94922,11.94531c-0.00391,2.10547 0.54688,4.16016 1.59375,5.97266l-1.69531,6.19141l6.33594,-1.66406c1.74219,0.95313 3.71094,1.45313 5.71094,1.45703h0.00391c6.58594,0 11.94531,-5.35937 11.94922,-11.94922c0,-3.19141 -1.24219,-6.19141 -3.49609,-8.44922zM16.05078,25.88281h-0.00391c-1.78125,0 -3.53125,-0.48047 -5.05469,-1.38281l-0.36328,-0.21484l-3.76172,0.98438l1.00391,-3.66406l-0.23437,-0.375c-0.99609,-1.58203 -1.51953,-3.41016 -1.51953,-5.28516c0,-5.47266 4.45703,-9.92578 9.9375,-9.92578c2.65234,0 5.14453,1.03516 7.01953,2.91016c1.875,1.87891 2.90625,4.37109 2.90625,7.02344c0,5.47656 -4.45703,9.92969 -9.92969,9.92969zM21.49609,18.44531c-0.29687,-0.14844 -1.76562,-0.87109 -2.03906,-0.96875c-0.27344,-0.10156 -0.47266,-0.14844 -0.67187,0.14844c-0.19922,0.30078 -0.76953,0.97266 -0.94531,1.17188c-0.17187,0.19531 -0.34766,0.22266 -0.64453,0.07422c-0.30078,-0.14844 -1.26172,-0.46484 -2.40234,-1.48437c-0.88672,-0.78906 -1.48828,-1.76953 -1.66016,-2.06641c-0.17578,-0.30078 -0.01953,-0.46094 0.12891,-0.60937c0.13672,-0.13281 0.30078,-0.34766 0.44922,-0.52344c0.14844,-0.17187 0.19922,-0.29687 0.30078,-0.49609c0.09766,-0.19922 0.04688,-0.375 -0.02734,-0.52344c-0.07422,-0.14844 -0.67187,-1.62109 -0.92187,-2.21875c-0.24219,-0.58203 -0.48828,-0.5 -0.67187,-0.51172c-0.17187,-0.00781 -0.37109,-0.00781 -0.57031,-0.00781c-0.19922,0 -0.52344,0.07422 -0.79687,0.375c-0.27344,0.29688 -1.04297,1.01953 -1.04297,2.48828c0,1.46875 1.07031,2.89063 1.21875,3.08984c0.14844,0.19531 2.10547,3.21094 5.10156,4.50391c0.71094,0.30859 1.26563,0.49219 1.69922,0.62891c0.71484,0.22656 1.36719,0.19531 1.88281,0.12109c0.57422,-0.08594 1.76563,-0.72266 2.01563,-1.42187c0.24609,-0.69531 0.24609,-1.29297 0.17188,-1.41797c-0.07422,-0.125 -0.27344,-0.19922 -0.57422,-0.35156z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=971562876500&text=Iam%20intreasted%20in%20printo%20Services"
                        class="whatsapp-text whatsapptext">WhatsApp Us</a>
                </div>
            </div>
            <p class="box-price text-dark-gray">AED 115.00 / 250 Copies</p>

        </div> -->

    </div>
</section>


<section class="premiumdesign md:p-4 md:px-8 p-0">
    <div class="container mx-auto max-w-full flex flex-col md:flex-row md:p-4 p-0">
        <!-- Left Grid (Bigger) -->
        <section class="w-full md:w-3/5">
            <img src="{{ asset('images/home/left-image.jpg') }}" alt="Left Image" class="w-full h-auto">
        </section>

        <!-- Right Grid (Smaller) -->
        <section class="w-full md:w-2/5 bg-gray-200 p-6 pr-4 md:pr-24 mt-6 md:mt-0 md:ml-4 md:ml-8">
            <div class="flex flex-col h-full">
                <div>
                    <h2 class="text-macbook text-2rem md:text-4xl mb-4 md:pr-26 md:pl-4 md:pt-24">Premium
                        Design.<br class="">Premium Quality.</h2>


                    <p class="mb-4 md:pl-4 md:pt-4 md:pb-8 md:pr-26 md:mb-4 overflow-hidden md:h-[9rem]"
                        style="line-height: 1.5rem;">With a keen focus on excellence, we transform your ideas
                        into stunning visuals that captivate and resonate. Elevate your brand with Printo, where
                        premium design meets unmatched quality, leaving a lasting impression that speaks
                        volumes.
                    </p>
                    <a href="https://printo.ae/pages/about-us"> <button
                            class="bg-black text-white text-base md:text-lg py-2 md:py-4 px-4 md:px-14 rounded-full self-start md:ml-4  md:mt-0">About
                            Us</button></a>
                </div>
            </div>
        </section>
    </div>
</section>


<section class="toppicks md:p-5 p-7 md:px-12">
    <h2 class="text-2xl md:text-4xl mb-6 py-10 md:py-16">Top Picks</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-14">
        <!-- Product 1 -->
        <div class="flex flex-col items-start">
            <a href="https://printo.ae/comingsoon"> <img src="{{ asset('images/home/pick1.jpg') }}" alt="Product 1"
                    class="w-full h-auto mb-2 md:mb-4"></a>
            <div class="flex items-center justify-between mb-2 w-full">
                <a href="https://printo.ae/comingsoon">
                    <p class="box-name">Cups & Mugs</p>
                </a>
                <div class="whatsapp-button">
                    <a href="#" class="whatsapp-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="whatsapptexticon" width="30"
                            height="30" viewBox="0,0,256,256">
                            <g fill="#ffffff" fill-rule="evenodd" stroke="none" stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal">
                                <g transform="scale(8,8)">
                                    <path
                                        d="M24.50391,7.50391c-2.25781,-2.25781 -5.25781,-3.50391 -8.45312,-3.50391c-6.58594,0 -11.94922,5.35938 -11.94922,11.94531c-0.00391,2.10547 0.54688,4.16016 1.59375,5.97266l-1.69531,6.19141l6.33594,-1.66406c1.74219,0.95313 3.71094,1.45313 5.71094,1.45703h0.00391c6.58594,0 11.94531,-5.35937 11.94922,-11.94922c0,-3.19141 -1.24219,-6.19141 -3.49609,-8.44922zM16.05078,25.88281h-0.00391c-1.78125,0 -3.53125,-0.48047 -5.05469,-1.38281l-0.36328,-0.21484l-3.76172,0.98438l1.00391,-3.66406l-0.23437,-0.375c-0.99609,-1.58203 -1.51953,-3.41016 -1.51953,-5.28516c0,-5.47266 4.45703,-9.92578 9.9375,-9.92578c2.65234,0 5.14453,1.03516 7.01953,2.91016c1.875,1.87891 2.90625,4.37109 2.90625,7.02344c0,5.47656 -4.45703,9.92969 -9.92969,9.92969zM21.49609,18.44531c-0.29687,-0.14844 -1.76562,-0.87109 -2.03906,-0.96875c-0.27344,-0.10156 -0.47266,-0.14844 -0.67187,0.14844c-0.19922,0.30078 -0.76953,0.97266 -0.94531,1.17188c-0.17187,0.19531 -0.34766,0.22266 -0.64453,0.07422c-0.30078,-0.14844 -1.26172,-0.46484 -2.40234,-1.48437c-0.88672,-0.78906 -1.48828,-1.76953 -1.66016,-2.06641c-0.17578,-0.30078 -0.01953,-0.46094 0.12891,-0.60937c0.13672,-0.13281 0.30078,-0.34766 0.44922,-0.52344c0.14844,-0.17187 0.19922,-0.29687 0.30078,-0.49609c0.09766,-0.19922 0.04688,-0.375 -0.02734,-0.52344c-0.07422,-0.14844 -0.67187,-1.62109 -0.92187,-2.21875c-0.24219,-0.58203 -0.48828,-0.5 -0.67187,-0.51172c-0.17187,-0.00781 -0.37109,-0.00781 -0.57031,-0.00781c-0.19922,0 -0.52344,0.07422 -0.79687,0.375c-0.27344,0.29688 -1.04297,1.01953 -1.04297,2.48828c0,1.46875 1.07031,2.89063 1.21875,3.08984c0.14844,0.19531 2.10547,3.21094 5.10156,4.50391c0.71094,0.30859 1.26563,0.49219 1.69922,0.62891c0.71484,0.22656 1.36719,0.19531 1.88281,0.12109c0.57422,-0.08594 1.76563,-0.72266 2.01563,-1.42187c0.24609,-0.69531 0.24609,-1.29297 0.17188,-1.41797c-0.07422,-0.125 -0.27344,-0.19922 -0.57422,-0.35156z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=971562876500&text=Iam%20intreasted%20in%20printo%20Services"
                        class="whatsapp-text whatsapptext">WhatsApp Us</a>
                </div>
            </div>
            <p class="box-price text-dark-gray">Contact for Details</p>

        </div>

        <!-- Product 2 -->
        <div class="flex flex-col items-start">
            <a href="https://printo.ae/category/promotional-products/subcategories/hangers/products"> <img
                    src="{{ asset('images/home/pick2.jpg') }}" alt="Product 2" class="w-full h-auto mb-2 md:mb-4"></a>
            <div class="flex items-center justify-between mb-2 w-full">
                <a href="https://printo.ae/category/promotional-products/subcategories/hangers/products">
                    <p class="box-name">Door Hangers</p>
                </a>
                <div class="whatsapp-button">
                    <a href="#" class="whatsapp-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="whatsapptexticon" width="30"
                            height="30" viewBox="0,0,256,256">
                            <g fill="#ffffff" fill-rule="evenodd" stroke="none" stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal">
                                <g transform="scale(8,8)">
                                    <path
                                        d="M24.50391,7.50391c-2.25781,-2.25781 -5.25781,-3.50391 -8.45312,-3.50391c-6.58594,0 -11.94922,5.35938 -11.94922,11.94531c-0.00391,2.10547 0.54688,4.16016 1.59375,5.97266l-1.69531,6.19141l6.33594,-1.66406c1.74219,0.95313 3.71094,1.45313 5.71094,1.45703h0.00391c6.58594,0 11.94531,-5.35937 11.94922,-11.94922c0,-3.19141 -1.24219,-6.19141 -3.49609,-8.44922zM16.05078,25.88281h-0.00391c-1.78125,0 -3.53125,-0.48047 -5.05469,-1.38281l-0.36328,-0.21484l-3.76172,0.98438l1.00391,-3.66406l-0.23437,-0.375c-0.99609,-1.58203 -1.51953,-3.41016 -1.51953,-5.28516c0,-5.47266 4.45703,-9.92578 9.9375,-9.92578c2.65234,0 5.14453,1.03516 7.01953,2.91016c1.875,1.87891 2.90625,4.37109 2.90625,7.02344c0,5.47656 -4.45703,9.92969 -9.92969,9.92969zM21.49609,18.44531c-0.29687,-0.14844 -1.76562,-0.87109 -2.03906,-0.96875c-0.27344,-0.10156 -0.47266,-0.14844 -0.67187,0.14844c-0.19922,0.30078 -0.76953,0.97266 -0.94531,1.17188c-0.17187,0.19531 -0.34766,0.22266 -0.64453,0.07422c-0.30078,-0.14844 -1.26172,-0.46484 -2.40234,-1.48437c-0.88672,-0.78906 -1.48828,-1.76953 -1.66016,-2.06641c-0.17578,-0.30078 -0.01953,-0.46094 0.12891,-0.60937c0.13672,-0.13281 0.30078,-0.34766 0.44922,-0.52344c0.14844,-0.17187 0.19922,-0.29687 0.30078,-0.49609c0.09766,-0.19922 0.04688,-0.375 -0.02734,-0.52344c-0.07422,-0.14844 -0.67187,-1.62109 -0.92187,-2.21875c-0.24219,-0.58203 -0.48828,-0.5 -0.67187,-0.51172c-0.17187,-0.00781 -0.37109,-0.00781 -0.57031,-0.00781c-0.19922,0 -0.52344,0.07422 -0.79687,0.375c-0.27344,0.29688 -1.04297,1.01953 -1.04297,2.48828c0,1.46875 1.07031,2.89063 1.21875,3.08984c0.14844,0.19531 2.10547,3.21094 5.10156,4.50391c0.71094,0.30859 1.26563,0.49219 1.69922,0.62891c0.71484,0.22656 1.36719,0.19531 1.88281,0.12109c0.57422,-0.08594 1.76563,-0.72266 2.01563,-1.42187c0.24609,-0.69531 0.24609,-1.29297 0.17188,-1.41797c-0.07422,-0.125 -0.27344,-0.19922 -0.57422,-0.35156z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=971562876500&text=Iam%20intreasted%20in%20printo%20Services"
                        class="whatsapp-text whatsapptext">WhatsApp Us</a>
                </div>
            </div>
            <p class="box-price text-dark-gray">AED 375.00 / 500 Copies</p>

        </div>

        <!-- Product 3 -->
        <div class="flex flex-col items-start">
            <a href="https://printo.ae/category/business-cards/products"><img src="{{ asset('images/home/pick3.jpg') }}"
                    alt="Product 3" class="w-full h-auto mb-2 md:mb-4"></a>
            <div class="flex items-center justify-between mb-2 w-full">
                <a href="https://printo.ae/category/business-cards/products">
                    <p class="box-name">Business Cards</p>
                </a>
                <div class="whatsapp-button">
                    <a href="#" class="whatsapp-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="whatsapptexticon" width="30"
                            height="30" viewBox="0,0,256,256">
                            <g fill="#ffffff" fill-rule="evenodd" stroke="none" stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal">
                                <g transform="scale(8,8)">
                                    <path
                                        d="M24.50391,7.50391c-2.25781,-2.25781 -5.25781,-3.50391 -8.45312,-3.50391c-6.58594,0 -11.94922,5.35938 -11.94922,11.94531c-0.00391,2.10547 0.54688,4.16016 1.59375,5.97266l-1.69531,6.19141l6.33594,-1.66406c1.74219,0.95313 3.71094,1.45313 5.71094,1.45703h0.00391c6.58594,0 11.94531,-5.35937 11.94922,-11.94922c0,-3.19141 -1.24219,-6.19141 -3.49609,-8.44922zM16.05078,25.88281h-0.00391c-1.78125,0 -3.53125,-0.48047 -5.05469,-1.38281l-0.36328,-0.21484l-3.76172,0.98438l1.00391,-3.66406l-0.23437,-0.375c-0.99609,-1.58203 -1.51953,-3.41016 -1.51953,-5.28516c0,-5.47266 4.45703,-9.92578 9.9375,-9.92578c2.65234,0 5.14453,1.03516 7.01953,2.91016c1.875,1.87891 2.90625,4.37109 2.90625,7.02344c0,5.47656 -4.45703,9.92969 -9.92969,9.92969zM21.49609,18.44531c-0.29687,-0.14844 -1.76562,-0.87109 -2.03906,-0.96875c-0.27344,-0.10156 -0.47266,-0.14844 -0.67187,0.14844c-0.19922,0.30078 -0.76953,0.97266 -0.94531,1.17188c-0.17187,0.19531 -0.34766,0.22266 -0.64453,0.07422c-0.30078,-0.14844 -1.26172,-0.46484 -2.40234,-1.48437c-0.88672,-0.78906 -1.48828,-1.76953 -1.66016,-2.06641c-0.17578,-0.30078 -0.01953,-0.46094 0.12891,-0.60937c0.13672,-0.13281 0.30078,-0.34766 0.44922,-0.52344c0.14844,-0.17187 0.19922,-0.29687 0.30078,-0.49609c0.09766,-0.19922 0.04688,-0.375 -0.02734,-0.52344c-0.07422,-0.14844 -0.67187,-1.62109 -0.92187,-2.21875c-0.24219,-0.58203 -0.48828,-0.5 -0.67187,-0.51172c-0.17187,-0.00781 -0.37109,-0.00781 -0.57031,-0.00781c-0.19922,0 -0.52344,0.07422 -0.79687,0.375c-0.27344,0.29688 -1.04297,1.01953 -1.04297,2.48828c0,1.46875 1.07031,2.89063 1.21875,3.08984c0.14844,0.19531 2.10547,3.21094 5.10156,4.50391c0.71094,0.30859 1.26563,0.49219 1.69922,0.62891c0.71484,0.22656 1.36719,0.19531 1.88281,0.12109c0.57422,-0.08594 1.76563,-0.72266 2.01563,-1.42187c0.24609,-0.69531 0.24609,-1.29297 0.17188,-1.41797c-0.07422,-0.125 -0.27344,-0.19922 -0.57422,-0.35156z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=971562876500&text=Iam%20intreasted%20in%20printo%20Services"
                        class="whatsapp-text whatsapptext">WhatsApp Us</a>
                </div>
            </div>
            <p class="box-price text-dark-gray">AED 115.00 / 250 Copies</p>

        </div>

        <!-- Product 4 -->
        <div class="flex flex-col items-start">
            <img src="{{ asset('images/home/pick4.jpg') }}" alt="Product 4" class="w-full h-auto mb-2 md:mb-4">
            <div class="flex items-center justify-between mb-2 w-full">
                <a href="">
                    <p class="box-name">Cake Boxes</p>
                </a>
                <div class="whatsapp-button">
                    <a href="#" class="whatsapp-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="whatsapptexticon" width="30"
                            height="30" viewBox="0,0,256,256">
                            <g fill="#ffffff" fill-rule="evenodd" stroke="none" stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal">
                                <g transform="scale(8,8)">
                                    <path
                                        d="M24.50391,7.50391c-2.25781,-2.25781 -5.25781,-3.50391 -8.45312,-3.50391c-6.58594,0 -11.94922,5.35938 -11.94922,11.94531c-0.00391,2.10547 0.54688,4.16016 1.59375,5.97266l-1.69531,6.19141l6.33594,-1.66406c1.74219,0.95313 3.71094,1.45313 5.71094,1.45703h0.00391c6.58594,0 11.94531,-5.35937 11.94922,-11.94922c0,-3.19141 -1.24219,-6.19141 -3.49609,-8.44922zM16.05078,25.88281h-0.00391c-1.78125,0 -3.53125,-0.48047 -5.05469,-1.38281l-0.36328,-0.21484l-3.76172,0.98438l1.00391,-3.66406l-0.23437,-0.375c-0.99609,-1.58203 -1.51953,-3.41016 -1.51953,-5.28516c0,-5.47266 4.45703,-9.92578 9.9375,-9.92578c2.65234,0 5.14453,1.03516 7.01953,2.91016c1.875,1.87891 2.90625,4.37109 2.90625,7.02344c0,5.47656 -4.45703,9.92969 -9.92969,9.92969zM21.49609,18.44531c-0.29687,-0.14844 -1.76562,-0.87109 -2.03906,-0.96875c-0.27344,-0.10156 -0.47266,-0.14844 -0.67187,0.14844c-0.19922,0.30078 -0.76953,0.97266 -0.94531,1.17188c-0.17187,0.19531 -0.34766,0.22266 -0.64453,0.07422c-0.30078,-0.14844 -1.26172,-0.46484 -2.40234,-1.48437c-0.88672,-0.78906 -1.48828,-1.76953 -1.66016,-2.06641c-0.17578,-0.30078 -0.01953,-0.46094 0.12891,-0.60937c0.13672,-0.13281 0.30078,-0.34766 0.44922,-0.52344c0.14844,-0.17187 0.19922,-0.29687 0.30078,-0.49609c0.09766,-0.19922 0.04688,-0.375 -0.02734,-0.52344c-0.07422,-0.14844 -0.67187,-1.62109 -0.92187,-2.21875c-0.24219,-0.58203 -0.48828,-0.5 -0.67187,-0.51172c-0.17187,-0.00781 -0.37109,-0.00781 -0.57031,-0.00781c-0.19922,0 -0.52344,0.07422 -0.79687,0.375c-0.27344,0.29688 -1.04297,1.01953 -1.04297,2.48828c0,1.46875 1.07031,2.89063 1.21875,3.08984c0.14844,0.19531 2.10547,3.21094 5.10156,4.50391c0.71094,0.30859 1.26563,0.49219 1.69922,0.62891c0.71484,0.22656 1.36719,0.19531 1.88281,0.12109c0.57422,-0.08594 1.76563,-0.72266 2.01563,-1.42187c0.24609,-0.69531 0.24609,-1.29297 0.17188,-1.41797c-0.07422,-0.125 -0.27344,-0.19922 -0.57422,-0.35156z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=971562876500&text=Iam%20intreasted%20in%20printo%20Services"
                        class="whatsapp-text whatsapptext">WhatsApp Us</a>
                </div>
            </div>
            <p class="box-price text-dark-gray">Contact for Details</p>

        </div>

        <!-- Product 5 -->
        <div class="flex flex-col items-start">
            <a href="https://printo.ae/products/wallpapers/living-room-wallpapers"> <img
                    src="{{ asset('images/home/pick5.jpg') }}" alt="Product 5" class="w-full h-auto mb-2 md:mb-4"></a>
            <div class="flex items-center justify-between mb-2 w-full">
                <a href="https://printo.ae/products/wallpapers/living-room-wallpapers">
                    <p class="box-name">Wallpapers</p>
                </a>
                <div class="whatsapp-button">
                    <a href="#" class="whatsapp-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="whatsapptexticon" width="30"
                            height="30" viewBox="0,0,256,256">
                            <g fill="#ffffff" fill-rule="evenodd" stroke="none" stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal">
                                <g transform="scale(8,8)">
                                    <path
                                        d="M24.50391,7.50391c-2.25781,-2.25781 -5.25781,-3.50391 -8.45312,-3.50391c-6.58594,0 -11.94922,5.35938 -11.94922,11.94531c-0.00391,2.10547 0.54688,4.16016 1.59375,5.97266l-1.69531,6.19141l6.33594,-1.66406c1.74219,0.95313 3.71094,1.45313 5.71094,1.45703h0.00391c6.58594,0 11.94531,-5.35937 11.94922,-11.94922c0,-3.19141 -1.24219,-6.19141 -3.49609,-8.44922zM16.05078,25.88281h-0.00391c-1.78125,0 -3.53125,-0.48047 -5.05469,-1.38281l-0.36328,-0.21484l-3.76172,0.98438l1.00391,-3.66406l-0.23437,-0.375c-0.99609,-1.58203 -1.51953,-3.41016 -1.51953,-5.28516c0,-5.47266 4.45703,-9.92578 9.9375,-9.92578c2.65234,0 5.14453,1.03516 7.01953,2.91016c1.875,1.87891 2.90625,4.37109 2.90625,7.02344c0,5.47656 -4.45703,9.92969 -9.92969,9.92969zM21.49609,18.44531c-0.29687,-0.14844 -1.76562,-0.87109 -2.03906,-0.96875c-0.27344,-0.10156 -0.47266,-0.14844 -0.67187,0.14844c-0.19922,0.30078 -0.76953,0.97266 -0.94531,1.17188c-0.17187,0.19531 -0.34766,0.22266 -0.64453,0.07422c-0.30078,-0.14844 -1.26172,-0.46484 -2.40234,-1.48437c-0.88672,-0.78906 -1.48828,-1.76953 -1.66016,-2.06641c-0.17578,-0.30078 -0.01953,-0.46094 0.12891,-0.60937c0.13672,-0.13281 0.30078,-0.34766 0.44922,-0.52344c0.14844,-0.17187 0.19922,-0.29687 0.30078,-0.49609c0.09766,-0.19922 0.04688,-0.375 -0.02734,-0.52344c-0.07422,-0.14844 -0.67187,-1.62109 -0.92187,-2.21875c-0.24219,-0.58203 -0.48828,-0.5 -0.67187,-0.51172c-0.17187,-0.00781 -0.37109,-0.00781 -0.57031,-0.00781c-0.19922,0 -0.52344,0.07422 -0.79687,0.375c-0.27344,0.29688 -1.04297,1.01953 -1.04297,2.48828c0,1.46875 1.07031,2.89063 1.21875,3.08984c0.14844,0.19531 2.10547,3.21094 5.10156,4.50391c0.71094,0.30859 1.26563,0.49219 1.69922,0.62891c0.71484,0.22656 1.36719,0.19531 1.88281,0.12109c0.57422,-0.08594 1.76563,-0.72266 2.01563,-1.42187c0.24609,-0.69531 0.24609,-1.29297 0.17188,-1.41797c-0.07422,-0.125 -0.27344,-0.19922 -0.57422,-0.35156z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=971562876500&text=Iam%20intreasted%20in%20printo%20Services"
                        class="whatsapp-text whatsapptext">WhatsApp Us</a>
                </div>
            </div>
            <p class="box-price text-dark-gray">AED 25.20 / Roll</p>

        </div>

        <!-- Product 6 -->
        <div class="flex flex-col items-start">
            <a href="https://printo.ae/products/wallpapers/canvas-frames"> <img
                    src="{{ asset('images/home/pick6.jpg') }}" alt="Product 6" class="w-full h-auto mb-2 md:mb-4"></a>
            <div class="flex items-center justify-between mb-2 w-full">
                <a href="https://printo.ae/products/wallpapers/canvas-frames">
                    <p class="box-name">Canvas Prints</p>
                </a>
                <div class="whatsapp-button">
                    <a href="#" class="whatsapp-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="whatsapptexticon" width="30"
                            height="30" viewBox="0,0,256,256">
                            <g fill="#ffffff" fill-rule="evenodd" stroke="none" stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal">
                                <g transform="scale(8,8)">
                                    <path
                                        d="M24.50391,7.50391c-2.25781,-2.25781 -5.25781,-3.50391 -8.45312,-3.50391c-6.58594,0 -11.94922,5.35938 -11.94922,11.94531c-0.00391,2.10547 0.54688,4.16016 1.59375,5.97266l-1.69531,6.19141l6.33594,-1.66406c1.74219,0.95313 3.71094,1.45313 5.71094,1.45703h0.00391c6.58594,0 11.94531,-5.35937 11.94922,-11.94922c0,-3.19141 -1.24219,-6.19141 -3.49609,-8.44922zM16.05078,25.88281h-0.00391c-1.78125,0 -3.53125,-0.48047 -5.05469,-1.38281l-0.36328,-0.21484l-3.76172,0.98438l1.00391,-3.66406l-0.23437,-0.375c-0.99609,-1.58203 -1.51953,-3.41016 -1.51953,-5.28516c0,-5.47266 4.45703,-9.92578 9.9375,-9.92578c2.65234,0 5.14453,1.03516 7.01953,2.91016c1.875,1.87891 2.90625,4.37109 2.90625,7.02344c0,5.47656 -4.45703,9.92969 -9.92969,9.92969zM21.49609,18.44531c-0.29687,-0.14844 -1.76562,-0.87109 -2.03906,-0.96875c-0.27344,-0.10156 -0.47266,-0.14844 -0.67187,0.14844c-0.19922,0.30078 -0.76953,0.97266 -0.94531,1.17188c-0.17187,0.19531 -0.34766,0.22266 -0.64453,0.07422c-0.30078,-0.14844 -1.26172,-0.46484 -2.40234,-1.48437c-0.88672,-0.78906 -1.48828,-1.76953 -1.66016,-2.06641c-0.17578,-0.30078 -0.01953,-0.46094 0.12891,-0.60937c0.13672,-0.13281 0.30078,-0.34766 0.44922,-0.52344c0.14844,-0.17187 0.19922,-0.29687 0.30078,-0.49609c0.09766,-0.19922 0.04688,-0.375 -0.02734,-0.52344c-0.07422,-0.14844 -0.67187,-1.62109 -0.92187,-2.21875c-0.24219,-0.58203 -0.48828,-0.5 -0.67187,-0.51172c-0.17187,-0.00781 -0.37109,-0.00781 -0.57031,-0.00781c-0.19922,0 -0.52344,0.07422 -0.79687,0.375c-0.27344,0.29688 -1.04297,1.01953 -1.04297,2.48828c0,1.46875 1.07031,2.89063 1.21875,3.08984c0.14844,0.19531 2.10547,3.21094 5.10156,4.50391c0.71094,0.30859 1.26563,0.49219 1.69922,0.62891c0.71484,0.22656 1.36719,0.19531 1.88281,0.12109c0.57422,-0.08594 1.76563,-0.72266 2.01563,-1.42187c0.24609,-0.69531 0.24609,-1.29297 0.17188,-1.41797c-0.07422,-0.125 -0.27344,-0.19922 -0.57422,-0.35156z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=971562876500&text=Iam%20intreasted%20in%20printo%20Services"
                        class="whatsapp-text whatsapptext">WhatsApp Us</a>
                </div>
            </div>
            <p class="box-price text-dark-gray">AED 186.00 / Copy</p>

        </div>

        <!-- Continue adding the remaining products (Product 7 to Product N) in the same manner -->
    </div>
</section>

<section class="bgimage py-16 hidden sm:block">
    <!-- Hidden on mobile -->
    <div class="parallax-container">
        <img src="{{ asset('images/home/bgimage.jpg') }}" alt="Why Us!" class="parallax-image">
    </div>
</section>

<section class="bgimage pb-10 block sm:hidden">
    <!-- Displayed on mobile -->
    <div class="parallax-container">
        <img src="{{ asset('images/home/bgimagemobile.jpg') }}" alt="Why Us!" class="parallax-image">
    </div>
</section>



<section class="faq flex flex-col md:flex-row p-0 md:p-12">
    <!-- FAQ Section (Left Side) -->
    <div class="w-full md:w-3/5 p-2 px-4 md:px-0 md:p-8">
        <h2 class="text-2xl md:text-4xl px-4 md:px-0 mb-8 md:mb-16">
            Frequently Asked
            <br class=""> Questions (FAQs)
        </h2>
        <!-- FAQ Items -->
        <div class="mb-4 md:mb-6 faqitems">
            <button
                class="faqbutton flex items-center justify-between w-full md:text-lg text-sm focus:outline-none border-b border-black pb-2 md:pb-6 px-4 md:px-6">
                <a href="your_arcadion_link_here" class="faqmobile md:pr-6">What are the types of printers and
                    printing services offered by
                    Printo?</a>
                <span class="toggle-icon">+</span>
            </button>
            <p class="text-gray-600 answerfaq hidden">Printo stands as a preeminent printing press in the UAE,
                specializing in digital print solutions. Our expertise caters to diverse clientele including
                Public Relations, Global Brands, and Design Agencies.</p>
        </div>
        <div class="mb-4 md:mb-6 faqitems">
            <button
                class="faqbutton flex items-center justify-between w-full md:text-lg text-sm focus:outline-none border-b border-black pb-2 md:pb-6 px-4 md:px-6">
                <a href="your_arcadion_link_here" class="faqmobile md:pr-6">Are separate delivery charges
                    applicable
                    to individual
                    products?</a>
                <span class="toggle-icon">+</span>
            </button>
            <p class="text-gray-600 answerfaq hidden">No, our streamlined shopping experience entails a singular
                delivery
                charge. You can consolidate multiple products within a single shopping cart, all covered by a
                fixed, unified delivery fee.</p>
        </div>
        <div class="mb-4 md:mb-6 faqitems">
            <button
                class="faqbutton flex items-center justify-between w-full md:text-lg text-sm focus:outline-none border-b border-black pb-2 md:pb-6 px-4 md:px-6">
                <a href="your_arcadion_link_here" class="faqmobile md:pr-6">Does Printo provide international
                    shipping?</a>
                <span class="toggle-icon">+</span>
            </button>
            <p class="text-gray-600 answerfaq hidden">Certainly, Printo takes pride in its global reach! We
                extend our
                delivery services across the world, catering to the diverse printing needs of our clients.</p>
        </div>
        <div class="mb-4 md:mb-6 faqitems">
            <button
                class="faqbutton flex items-center justify-between w-full md:text-lg text-sm focus:outline-none border-b border-black pb-2 md:pb-6 px-4 md:px-6">
                <a href="your_arcadion_link_here" class="faqmobile md:pr-6">What is the turnaround time for
                    Printo's
                    services?</a>
                <span class="toggle-icon">+</span>
            </button>
            <p class="text-gray-600 answerfaq hidden">The duration of service varies as each project possesses
                its unique
                characteristics. Some tasks can be promptly executed within minutes, while others may
                necessitate several days for completion. Inform us about your timeline requirements, and we will
                diligently assess the feasibility. We are committed to meeting even the most demanding
                deadlines.</p>
        </div>
        <div class="mb-4 md:mb-6 faqitems">
            <button
                class="faqbutton flex items-center justify-between w-full md:text-lg text-sm focus:outline-none border-b border-black pb-2 md:pb-6 px-4 md:px-6">
                <a href="your_arcadion_link_here" class="faqmobile md:pr-6">How can I place an order with
                    Printo?</a>
                <span class="toggle-icon">+</span>
            </button>
            <p class="text-gray-600 answerfaq hidden">Initiating an order is a seamless process. Begin by
                selecting your
                preferred product, customizing options to your specifications, and indicating the desired
                quantity. From there, you have the choice to either "DESIGN IT" if you wish to embark on your
                design journey, or "UPLOAD your FILES" if you possess print-ready materials or would like to
                leverage the complimentary support of Printo's designers. Finally, complete the payment process
                and proceed to checkout.</p>
        </div>
        <!-- Add more FAQ items as needed -->
    </div>
    <!-- Empty Space (Right Side) -->
    <div class="w-full md:w-2/5"></div>
</section>

<div class="text-2xl md:text-4xl mb-4 pt-10 md:pt-0 py-4 ml-7 md:ml-12">Hot Items</div>


<section class="flex flex-col md:flex-row p-7 md:p-12">
    <div class="w-full md:w-1/2 h-screen/2 flex flex-col items-start justify-start relative md:pr-4">
        <a href="https://printo.ae/comingsoon"><img src="{{ asset('images/home/hot1.jpg') }}" alt="Image 1"
                class="w-full object-cover"></a>
    </div>
    <div class="w-full md:w-1/2 h-screen/2 py-6 md:py-0 flex flex-col md:pl-12">
        <!-- Desktop version layout -->
        <a href="https://printo.ae/comingsoon"><img src="{{ asset('images/home/hot2.jpg') }}" alt="Image 2"
                class="w-full object-cover md:mb-2 md:pb-4 hidden md:block"></a>
        <a href="https://printo.ae/comingsoon"><img src="{{ asset('images/home/hot3.jpg') }}" alt="Image 3"
                class="w-full object-cover md:pt-5 md:pt-4 hidden md:block"></a>

        <!-- Mobile version layout -->
        <div class="md:hidden w-full flex">
            <a href="https://printo.ae/comingsoon"><img src="{{ asset('images/home/hot2.jpg') }}" alt="Image 2"
                    class="w-1/2 pr-3 object-cover" style=" width:100%; height: 150px;"></a>
            <a href="https://printo.ae/comingsoon"><img src="{{ asset('images/home/hot3.jpg') }}" alt="Image 3"
                    class="w-1/2 pl-3 object-cover" style=" width:100%; height: 150px;"></a>
        </div>
    </div>
</section>


<section class="customerreviews">

    <section class="reviews-container">
        <div class="reviews-title text-2xl md:text-4xl mb-4 ml-7 md:ml-12 py-8 mb-12">Hear From Our Customers
        </div>
        <div class="slider-container mobilereviews">
            <div class="custom-swiper-container swiper-container">
                <div class="swiper-wrapper ml-7 md:ml-12">

                    <div class="swiper-slide p-8 md:p-12 border-2 flex flex-col items-start">
                        <p class="text-lg font-bold mb-2 py-6">Kevin</p>
                        <div class="rating text-yellow-500">
                            &#9733;&#9733;&#9733;&#9733;&#9733;
                            <!-- 5-star rating -->
                        </div>
                        <p class="reviewsh mt-2">Excellent quality business cards - Affordable prices.</p>
                    </div>

                    <div class="swiper-slide p-8 md:p-12 border-2 flex flex-col items-start">
                        <p class="text-lg font-bold mb-2 py-6">George</p>
                        <div class="rating text-yellow-500">
                            &#9733;&#9733;&#9733;&#9733;<span class="text-gray-400">&#9733;</span>
                            <!-- 5-star rating -->
                        </div>
                        <p class="reviewsh mt-2">Good. Very professional. </p>
                    </div>

                    <div class="swiper-slide p-8 md:p-12 border-2 flex flex-col items-start">
                        <p class="text-lg font-bold mb-2 py-6">Rebecca</p>
                        <div class="rating text-yellow-500">
                            &#9733;&#9733;&#9733;&#9733;<span class="text-gray-400">&#9733;</span>
                            <!-- 5-star rating -->
                        </div>
                        <p class="reviewsh mt-2">Amazing quality.</p>
                    </div>

                    <div class="swiper-slide p-8 md:p-12 border-2 flex flex-col items-start">
                        <p class="text-lg font-bold mb-2 py-6">Tahir</p>
                        <div class="rating text-yellow-500">
                            &#9733;&#9733;&#9733;&#9733;&#9733;
                            <!-- 5-star rating -->
                        </div>
                        <p class="reviewsh mt-2">Lovely service - Great quality.</p>
                    </div>

                    <div class="swiper-slide p-8 md:p-12 border-2 flex flex-col items-start">
                        <p class="text-lg font-bold mb-2 py-6">Kevin</p>
                        <div class="rating text-yellow-500">
                            &#9733;&#9733;&#9733;&#9733;&#9733;
                            <!-- 5-star rating -->
                        </div>
                        <p class="reviewsh mt-2">Excellent quality business cards - Affordable prices.</p>
                    </div>

                    <div class="swiper-slide p-8 md:p-12 border-2 flex flex-col items-start">
                        <p class="text-lg font-bold mb-2 py-6">George</p>
                        <div class="rating text-yellow-500">
                            &#9733;&#9733;&#9733;&#9733;<span class="text-gray-400">&#9733;</span>
                            <!-- 5-star rating -->
                        </div>
                        <p class="reviewsh mt-2">Good. Very professional. </p>
                    </div>

                    <div class="swiper-slide p-8 md:p-12 border-2 flex flex-col items-start">
                        <p class="text-lg font-bold mb-2 py-6">Rebecca</p>
                        <div class="rating text-yellow-500">
                            &#9733;&#9733;&#9733;&#9733;<span class="text-gray-400">&#9733;</span>
                            <!-- 5-star rating -->
                        </div>
                        <p class="reviewsh mt-2">Amazing quality.</p>
                    </div>

                    <div class="swiper-slide p-8 md:p-12 border-2 flex flex-col items-start">
                        <p class="text-lg font-bold mb-2 py-6">Tahir</p>
                        <div class="rating text-yellow-500">
                            &#9733;&#9733;&#9733;&#9733;&#9733;
                            <!-- 5-star rating -->
                        </div>
                        <p class="reviewsh mt-2">Lovely service - Great quality.</p>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <section class="whatsappbanner relative px-0 md:px-0 py-8 md:py-16">
        <div class="h-auto text-white relative">
            <img src="{{ asset('images/home/whatsapp.jpg') }}" alt="whatsapp"
                class="mobilewhatsappimage w-full mb-8 md:max-w-none md:mb-0">
            <div class="absolute inset-0 flex flex-col items-center justify-center">
                <div class="text-center">
                    <p
                        class="text-xs pt-6 md:pt-0 md:text-4xl lg:text-6xl font-bold leading-tight mb-3 md:mb-4 uppercase">
                        Let's Start Building Your<br>
                        <span class="whitespace-nowrap">Brand's Unique Story Together.</span>
                    </p>
                    <div class="hidden md:block py-4 md:py-8 lg:py-12 mx-auto" style="width: fit-content;">
                        <a href="https://api.whatsapp.com/send?phone=971562876500&text=Iam%20intreasted%20in%20printo%20Services"
                            class="inline-block bg-white text-black md:px-10 lg:px-24 py-2 md:py-3 rounded-full flex items-center text-1-3rem letstalk">
                            Get in Touch
                            <span class="ml-2 text-black">
                                <i class="fab fa-whatsapp"></i>
                            </span>
                        </a>
                    </div>
                    <div class="md:hidden py-0 md:py-4 mx-auto" style="width: fit-content;">
                        <a href="https://api.whatsapp.com/send?phone=971562876500&text=Iam%20intreasted%20in%20printo%20Services"
                            class="inline-block bg-white text-black px-6 py-0 md:py-2 rounded-full flex items-center text-base letstalk">
                            Get in Touch
                            <span class="ml-2 text-black">
                                <i class="fab fa-whatsapp"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>







    <section class="flex flex-col md:flex-row p-6 md:p-16 formsection">
        <!-- Left Side Content -->
        <div class="md:w-1/2 px-1 md:px-6 pt-0 md:pt-24">
            <h2 class="text-2xl md:text-6xl mb-4 letsstartmargin">Let's Talk Branding</h2>
            <p class="text-black text-1xl md:text-2xl">
                From idea to execution,
                <br class="">we're here to help you achieve your branding goals.
            </p>
        </div>

        <!-- Right Side Form -->
        <div class="md:w-1/2 px-1 md:px-8">
            <form class="p-0 md:p-6 rounded-lg py-6">

                <label class="block mb-2 pt-6 text-1xl md:text-lg">NAME</label>
                <input type="text" name="name" class="w-full px-4 py-2 mb-4 border bg-gray-200" placeholder="Full Name">

                <label class="block mb-2 pt-6 text-1xl md:text-lg">PHONE NUMBER</label>
                <input id="phoneInput" name="phone" type="tel" class="w-full px-10 py-2 mb-4 border pl-10 bg-gray-200"
                    style="width: 100% !important;" placeholder="Your Phone Number">

                <label class="block mb-2 pt-6 text-1xl md:text-lg">EMAIL ADDRESS</label>
                <input type="email" name="email" class="w-full px-4 py-2 mb-4 border bg-gray-200" placeholder="Email">

                <label class="block mb-2 pt-6 text-1xl md:text-lg">MESSAGE</label>
                <textarea class="w-full px-4 py-2 mb-4 border bg-gray-200" name="message" rows="4"
                    placeholder="Message"></textarea>

                <button class="bg-black text-white px-4 py-2 rounded-full">Send Message</button>
            </form>
        </div>
    </section>


    <section class="p-5 md:p-16 newitems">
        <h2 class="text-2xl md:text-4xl px-2 mb-6 text-left py-6">New Items</h2>
        <div class="grid grid-cols-1 grid-cols-2 md:grid-cols-4 gap-0 md:gap-6">
            <div class="p-2 flex flex-col md:items-center">
                <a href="https://printo.ae/comingsoon"><img src="{{ asset('images/home/newitem1.jpg') }}" alt="Image 1"
                        class="w-full object-cover mb-2"></a>
                <a href="https://printo.ae/comingsoon">
                    <p class="md:text-center text-xs md:text-lg text-black pt-2 md:pt-6">Tshirts</p>
                    <p class="newitemsbox-price text-xs md:text-lg text-dark-gray">Contact for Details</p>

                    <div class="whatsapp-button newitemswhatsapp ">
                        <a href="#" class="whatsapp-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="whatsapptexticon" width="30"
                                height="30" viewBox="0,0,256,256">
                                <g fill="#ffffff" fill-rule="evenodd" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8,8)">
                                        <path
                                            d="M24.50391,7.50391c-2.25781,-2.25781 -5.25781,-3.50391 -8.45312,-3.50391c-6.58594,0 -11.94922,5.35938 -11.94922,11.94531c-0.00391,2.10547 0.54688,4.16016 1.59375,5.97266l-1.69531,6.19141l6.33594,-1.66406c1.74219,0.95313 3.71094,1.45313 5.71094,1.45703h0.00391c6.58594,0 11.94531,-5.35937 11.94922,-11.94922c0,-3.19141 -1.24219,-6.19141 -3.49609,-8.44922zM16.05078,25.88281h-0.00391c-1.78125,0 -3.53125,-0.48047 -5.05469,-1.38281l-0.36328,-0.21484l-3.76172,0.98438l1.00391,-3.66406l-0.23437,-0.375c-0.99609,-1.58203 -1.51953,-3.41016 -1.51953,-5.28516c0,-5.47266 4.45703,-9.92578 9.9375,-9.92578c2.65234,0 5.14453,1.03516 7.01953,2.91016c1.875,1.87891 2.90625,4.37109 2.90625,7.02344c0,5.47656 -4.45703,9.92969 -9.92969,9.92969zM21.49609,18.44531c-0.29687,-0.14844 -1.76562,-0.87109 -2.03906,-0.96875c-0.27344,-0.10156 -0.47266,-0.14844 -0.67187,0.14844c-0.19922,0.30078 -0.76953,0.97266 -0.94531,1.17188c-0.17187,0.19531 -0.34766,0.22266 -0.64453,0.07422c-0.30078,-0.14844 -1.26172,-0.46484 -2.40234,-1.48437c-0.88672,-0.78906 -1.48828,-1.76953 -1.66016,-2.06641c-0.17578,-0.30078 -0.01953,-0.46094 0.12891,-0.60937c0.13672,-0.13281 0.30078,-0.34766 0.44922,-0.52344c0.14844,-0.17187 0.19922,-0.29687 0.30078,-0.49609c0.09766,-0.19922 0.04688,-0.375 -0.02734,-0.52344c-0.07422,-0.14844 -0.67187,-1.62109 -0.92187,-2.21875c-0.24219,-0.58203 -0.48828,-0.5 -0.67187,-0.51172c-0.17187,-0.00781 -0.37109,-0.00781 -0.57031,-0.00781c-0.19922,0 -0.52344,0.07422 -0.79687,0.375c-0.27344,0.29688 -1.04297,1.01953 -1.04297,2.48828c0,1.46875 1.07031,2.89063 1.21875,3.08984c0.14844,0.19531 2.10547,3.21094 5.10156,4.50391c0.71094,0.30859 1.26563,0.49219 1.69922,0.62891c0.71484,0.22656 1.36719,0.19531 1.88281,0.12109c0.57422,-0.08594 1.76563,-0.72266 2.01563,-1.42187c0.24609,-0.69531 0.24609,-1.29297 0.17188,-1.41797c-0.07422,-0.125 -0.27344,-0.19922 -0.57422,-0.35156z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=971562876500&text=Iam%20intreasted%20in%20printo%20Services"
                            class="whatsapp-text whatsapptext">WhatsApp Us</a>
                    </div>
            </div>
            <div class="p-2 flex flex-col md:items-center">
                <a href="https://printo.ae/comingsoon"> <img src="{{ asset('images/home/newitem2.jpg') }}" alt="Image 2"
                        class="w-full object-cover mb-2"></a>
                <a href="https://printo.ae/comingsoon">
                    <p class="md:text-center text-xs md:text-lg text-black pt-2 md:pt-6">Cups & Mugs
                    </p>
                </a>
                <p class="newitemsbox-price text-xs md:text-lg text-dark-gray">Contact for Details</p>

                <div class="whatsapp-button newitemswhatsapp">
                    <a href="#" class="whatsapp-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="whatsapptexticon" width="30"
                            height="30" viewBox="0,0,256,256">
                            <g fill="#ffffff" fill-rule="evenodd" stroke="none" stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal">
                                <g transform="scale(8,8)">
                                    <path
                                        d="M24.50391,7.50391c-2.25781,-2.25781 -5.25781,-3.50391 -8.45312,-3.50391c-6.58594,0 -11.94922,5.35938 -11.94922,11.94531c-0.00391,2.10547 0.54688,4.16016 1.59375,5.97266l-1.69531,6.19141l6.33594,-1.66406c1.74219,0.95313 3.71094,1.45313 5.71094,1.45703h0.00391c6.58594,0 11.94531,-5.35937 11.94922,-11.94922c0,-3.19141 -1.24219,-6.19141 -3.49609,-8.44922zM16.05078,25.88281h-0.00391c-1.78125,0 -3.53125,-0.48047 -5.05469,-1.38281l-0.36328,-0.21484l-3.76172,0.98438l1.00391,-3.66406l-0.23437,-0.375c-0.99609,-1.58203 -1.51953,-3.41016 -1.51953,-5.28516c0,-5.47266 4.45703,-9.92578 9.9375,-9.92578c2.65234,0 5.14453,1.03516 7.01953,2.91016c1.875,1.87891 2.90625,4.37109 2.90625,7.02344c0,5.47656 -4.45703,9.92969 -9.92969,9.92969zM21.49609,18.44531c-0.29687,-0.14844 -1.76562,-0.87109 -2.03906,-0.96875c-0.27344,-0.10156 -0.47266,-0.14844 -0.67187,0.14844c-0.19922,0.30078 -0.76953,0.97266 -0.94531,1.17188c-0.17187,0.19531 -0.34766,0.22266 -0.64453,0.07422c-0.30078,-0.14844 -1.26172,-0.46484 -2.40234,-1.48437c-0.88672,-0.78906 -1.48828,-1.76953 -1.66016,-2.06641c-0.17578,-0.30078 -0.01953,-0.46094 0.12891,-0.60937c0.13672,-0.13281 0.30078,-0.34766 0.44922,-0.52344c0.14844,-0.17187 0.19922,-0.29687 0.30078,-0.49609c0.09766,-0.19922 0.04688,-0.375 -0.02734,-0.52344c-0.07422,-0.14844 -0.67187,-1.62109 -0.92187,-2.21875c-0.24219,-0.58203 -0.48828,-0.5 -0.67187,-0.51172c-0.17187,-0.00781 -0.37109,-0.00781 -0.57031,-0.00781c-0.19922,0 -0.52344,0.07422 -0.79687,0.375c-0.27344,0.29688 -1.04297,1.01953 -1.04297,2.48828c0,1.46875 1.07031,2.89063 1.21875,3.08984c0.14844,0.19531 2.10547,3.21094 5.10156,4.50391c0.71094,0.30859 1.26563,0.49219 1.69922,0.62891c0.71484,0.22656 1.36719,0.19531 1.88281,0.12109c0.57422,-0.08594 1.76563,-0.72266 2.01563,-1.42187c0.24609,-0.69531 0.24609,-1.29297 0.17188,-1.41797c-0.07422,-0.125 -0.27344,-0.19922 -0.57422,-0.35156z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=971562876500&text=Iam%20intreasted%20in%20printo%20Services"
                        class="whatsapp-text whatsapptext">WhatsApp Us</a>
                </div>
            </div>
            <div class="p-2 flex flex-col md:items-center">
                <a href="https://printo.ae/comingsoon"> <img src="{{ asset('images/home/newitem3.jpg') }}" alt="Image 3"
                        class="w-full object-cover mb-2"></a>
                <a href="https://printo.ae/comingsoon">
                    <p class="md:text-center text-xs md:text-lg text-black pt-2 md:pt-6">Mousepads</p>
                </a>
                <p class="newitemsbox-price text-xs md:text-lg text-dark-gray">Contact for Details</p>

                <div class="whatsapp-button newitemswhatsapp">
                    <a href="#" class="whatsapp-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="whatsapptexticon" width="30"
                            height="30" viewBox="0,0,256,256">
                            <g fill="#ffffff" fill-rule="evenodd" stroke="none" stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal">
                                <g transform="scale(8,8)">
                                    <path
                                        d="M24.50391,7.50391c-2.25781,-2.25781 -5.25781,-3.50391 -8.45312,-3.50391c-6.58594,0 -11.94922,5.35938 -11.94922,11.94531c-0.00391,2.10547 0.54688,4.16016 1.59375,5.97266l-1.69531,6.19141l6.33594,-1.66406c1.74219,0.95313 3.71094,1.45313 5.71094,1.45703h0.00391c6.58594,0 11.94531,-5.35937 11.94922,-11.94922c0,-3.19141 -1.24219,-6.19141 -3.49609,-8.44922zM16.05078,25.88281h-0.00391c-1.78125,0 -3.53125,-0.48047 -5.05469,-1.38281l-0.36328,-0.21484l-3.76172,0.98438l1.00391,-3.66406l-0.23437,-0.375c-0.99609,-1.58203 -1.51953,-3.41016 -1.51953,-5.28516c0,-5.47266 4.45703,-9.92578 9.9375,-9.92578c2.65234,0 5.14453,1.03516 7.01953,2.91016c1.875,1.87891 2.90625,4.37109 2.90625,7.02344c0,5.47656 -4.45703,9.92969 -9.92969,9.92969zM21.49609,18.44531c-0.29687,-0.14844 -1.76562,-0.87109 -2.03906,-0.96875c-0.27344,-0.10156 -0.47266,-0.14844 -0.67187,0.14844c-0.19922,0.30078 -0.76953,0.97266 -0.94531,1.17188c-0.17187,0.19531 -0.34766,0.22266 -0.64453,0.07422c-0.30078,-0.14844 -1.26172,-0.46484 -2.40234,-1.48437c-0.88672,-0.78906 -1.48828,-1.76953 -1.66016,-2.06641c-0.17578,-0.30078 -0.01953,-0.46094 0.12891,-0.60937c0.13672,-0.13281 0.30078,-0.34766 0.44922,-0.52344c0.14844,-0.17187 0.19922,-0.29687 0.30078,-0.49609c0.09766,-0.19922 0.04688,-0.375 -0.02734,-0.52344c-0.07422,-0.14844 -0.67187,-1.62109 -0.92187,-2.21875c-0.24219,-0.58203 -0.48828,-0.5 -0.67187,-0.51172c-0.17187,-0.00781 -0.37109,-0.00781 -0.57031,-0.00781c-0.19922,0 -0.52344,0.07422 -0.79687,0.375c-0.27344,0.29688 -1.04297,1.01953 -1.04297,2.48828c0,1.46875 1.07031,2.89063 1.21875,3.08984c0.14844,0.19531 2.10547,3.21094 5.10156,4.50391c0.71094,0.30859 1.26563,0.49219 1.69922,0.62891c0.71484,0.22656 1.36719,0.19531 1.88281,0.12109c0.57422,-0.08594 1.76563,-0.72266 2.01563,-1.42187c0.24609,-0.69531 0.24609,-1.29297 0.17188,-1.41797c-0.07422,-0.125 -0.27344,-0.19922 -0.57422,-0.35156z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=971562876500&text=Iam%20intreasted%20in%20printo%20Services"
                        class="whatsapp-text whatsapptext">WhatsApp Us</a>
                </div>
            </div>
            <div class="p-2 flex flex-col md:items-center">
                <a href="https://printo.ae/comingsoon"> <img src="{{ asset('images/home/newitem4.jpg') }}" alt="Image 4"
                        class="w-full object-cover mb-2"></a>
                <a href="https://printo.ae/comingsoon">
                    <p class="md:text-center text-xs md:text-lg text-black pt-2 md:pt-6">Powerbanks
                    </p>
                </a>
                <p class="newitemsbox-price text-xs md:text-lg text-dark-gray">Contact for Details</p>

                <div class="whatsapp-button newitemswhatsapp">
                    <a href="#" class="whatsapp-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="whatsapptexticon" width="30"
                            height="30" viewBox="0,0,256,256">
                            <g fill="#ffffff" fill-rule="evenodd" stroke="none" stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal">
                                <g transform="scale(8,8)">
                                    <path
                                        d="M24.50391,7.50391c-2.25781,-2.25781 -5.25781,-3.50391 -8.45312,-3.50391c-6.58594,0 -11.94922,5.35938 -11.94922,11.94531c-0.00391,2.10547 0.54688,4.16016 1.59375,5.97266l-1.69531,6.19141l6.33594,-1.66406c1.74219,0.95313 3.71094,1.45313 5.71094,1.45703h0.00391c6.58594,0 11.94531,-5.35937 11.94922,-11.94922c0,-3.19141 -1.24219,-6.19141 -3.49609,-8.44922zM16.05078,25.88281h-0.00391c-1.78125,0 -3.53125,-0.48047 -5.05469,-1.38281l-0.36328,-0.21484l-3.76172,0.98438l1.00391,-3.66406l-0.23437,-0.375c-0.99609,-1.58203 -1.51953,-3.41016 -1.51953,-5.28516c0,-5.47266 4.45703,-9.92578 9.9375,-9.92578c2.65234,0 5.14453,1.03516 7.01953,2.91016c1.875,1.87891 2.90625,4.37109 2.90625,7.02344c0,5.47656 -4.45703,9.92969 -9.92969,9.92969zM21.49609,18.44531c-0.29687,-0.14844 -1.76562,-0.87109 -2.03906,-0.96875c-0.27344,-0.10156 -0.47266,-0.14844 -0.67187,0.14844c-0.19922,0.30078 -0.76953,0.97266 -0.94531,1.17188c-0.17187,0.19531 -0.34766,0.22266 -0.64453,0.07422c-0.30078,-0.14844 -1.26172,-0.46484 -2.40234,-1.48437c-0.88672,-0.78906 -1.48828,-1.76953 -1.66016,-2.06641c-0.17578,-0.30078 -0.01953,-0.46094 0.12891,-0.60937c0.13672,-0.13281 0.30078,-0.34766 0.44922,-0.52344c0.14844,-0.17187 0.19922,-0.29687 0.30078,-0.49609c0.09766,-0.19922 0.04688,-0.375 -0.02734,-0.52344c-0.07422,-0.14844 -0.67187,-1.62109 -0.92187,-2.21875c-0.24219,-0.58203 -0.48828,-0.5 -0.67187,-0.51172c-0.17187,-0.00781 -0.37109,-0.00781 -0.57031,-0.00781c-0.19922,0 -0.52344,0.07422 -0.79687,0.375c-0.27344,0.29688 -1.04297,1.01953 -1.04297,2.48828c0,1.46875 1.07031,2.89063 1.21875,3.08984c0.14844,0.19531 2.10547,3.21094 5.10156,4.50391c0.71094,0.30859 1.26563,0.49219 1.69922,0.62891c0.71484,0.22656 1.36719,0.19531 1.88281,0.12109c0.57422,-0.08594 1.76563,-0.72266 2.01563,-1.42187c0.24609,-0.69531 0.24609,-1.29297 0.17188,-1.41797c-0.07422,-0.125 -0.27344,-0.19922 -0.57422,-0.35156z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=971562876500&text=Iam%20intreasted%20in%20printo%20Services"
                        class="whatsapp-text whatsapptext">WhatsApp Us</a>
                </div>
            </div>
            <!-- Add more grid items as needed -->
        </div>
    </section>





</section>

@endsection