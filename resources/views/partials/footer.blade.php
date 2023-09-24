<footer class="p-0 md:p-3 md:p-2 text-gray-700 pt-24 md:pt-28">
    <div class="grid grid-cols-1 sm:grid-cols-4 gap-2 md:gap-8 mb-8">
        <!-- Grid 1: Logo and Social Icons -->
        <div class="flex flex-col ml-4 md:ml-16">
            <img src="{{ asset('images/home/logo.png') }}" alt="Printo" class="h-16 logo mb-4">
            <div class="flex gap-2">
                <a href="https://www.linkedin.com/company/printoae/" target="_blank"
                    class="text-black rounded-full bg-gray-200 p-2">
                    <i class="fab fa-linkedin text-xl"></i>
                </a>
                <a href="https://www.instagram.com/printoae/" target="_blank"
                    class="text-black rounded-full bg-gray-200 p-2">
                    <i class="fab fa-instagram text-xl"></i>
                </a>
                <a href="https://web.facebook.com/printouae" target="_blank"
                    class="text-black rounded-full bg-gray-200 p-2">
                    <i class="fab fa-facebook text-xl "></i>
                </a>
            </div>
        </div>

        <!-- Grid 2: Services -->
        <div class="pt-8 md:pt-0 pb-4 ml-4 md:ml-8">
            <h3 class="text-xl mb-6 border-b-2 printoborder">Services</h3>
            <ul>
                <li class="mb-4"><a href="https://printo.ae/categories/print-products"
                        class="text-black mb-6 hover:text-red-600">Printing</a>
                </li>
                <li class="mb-4"><a href="https://printo.ae/categories/packaging"
                        class="text-black mb-6 hover:text-red-600">Packaging</a></li>
                <li class="mb-4"><a href="https://printo.ae/categories/banners-displays"
                        class="text-black mb-6 hover:text-red-600">Banners &
                        Displays</a></li>
                <li class="mb-4"><a href="https://printo.ae/categories/wallpapers"
                        class="text-black mb-6 hover:text-red-600">Wallpapers</a></li>
            </ul>
        </div>

        <!-- Grid 3: Support -->
        <div class="pb-4 support ml-4 md:ml-0">
            <h3 class="text-xl mb-6 border-b-2 printoborder">Support</h3>
            <ul>
                <li class="mb-4"><a href="https://printo.ae/pages/contact"
                        class="text-black mb-6 hover:text-red-600">Contact
                        Us</a></li>
                <li class="mb-4"><a href="#" class="text-black mb-6 hover:text-red-600">Privacy
                        Policy</a>
                </li>
                <li class="mb-4"><a href="https://printo.ae/pages/terms-and-condition"
                        class="text-black mb-6 hover:text-red-600">Conditions</a></li>
            </ul>
        </div>

        <!-- Grid 4: Contact -->
        <div class="contactus ml-4 md:ml-0">
            <h3 class="text-xl mb-6 border-b-2 printoborder">Get in Touch</h3>
            <ul>
                <li class="mb-4"><a href="https://printo.ae/estimate"
                        class="text-black mb-6 hover:text-red-600">Estimate</a>
                </li>
                <li class="mb-4"><a href="#" class="text-black mb-6 hover:text-red-600">Email</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="border-t-2 mb-8"></div>

    <div class="hidden md:flex justify-between">
        <div>
            Printo© Copyright 2023. All Rights Reserved.
        </div>
        <div>
            <!-- <a href="#" class="text-black hover:text-red-600">Privacy</a> -->
        </div>
    </div>

    <div class="flex md:hidden flex-col items-center">
        <div class="mb-2" style="font-size: 14px;">
            Printo © Copyright 2023. All Rights Reserved.
        </div>
        <div>
            <!-- <a href="#" class="text-black hover:text-red-600" style="font-size: 14px;">Privacy</a> -->
        </div>
    </div>

</footer>


</section>




</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
var slides = [];
var swiper;

function updateSlides() {
    var swiperWrapper = document.querySelector('.swiper-wrapper');
    swiperWrapper.innerHTML = ''; // Clear existing slides

    slides.forEach(function(slide) {
        var slideHtml = `
                    <div class="swiper-slide relative">
                        <a href="${slide.link}">
                            <img src="${slide.image}" alt="${slide.alt}" class="slide-image">
                        </a>
                    </div>
                `;
        swiperWrapper.innerHTML += slideHtml;
    });

    if (swiper) {
        swiper.destroy(); // Destroy existing Swiper instance
    }

    swiper = new Swiper('.swiper-container-responsive', {
        slidesPerView: 1,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
    });
}

    const graphqlQuery = `
        query getEvent($type: String!)
        {
            slidersbytype (type: $type)
            {
                id
                title
                link
                product
                {
                    id
                    title
                    slug
                    media
                    {
                        id
                        name
                        collection_name
                        file_name
                    }
                }
                media
                {
                    id
                    name
                    collection_name
                    file_name
                }
            }
        }
    `;

    const options =
    {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ query: graphqlQuery, variables: {type: "home-page"} }),
    };
    
    fetch('https://printo.ae/graphql', options)
    .then((response) => response.json())
    .then(
        (data) =>
        {
            let slidersByType = data.data.slidersbytype;

            slidersByType.forEach(
                (slider) =>
                {
                    let slide =
                    {
                        image: 'https://printo.ae' + '/storage/' + slider.media[0].id + '/' + slider.media[0].file_name,
                        alt: slider.title,
                        link: slider.link,
                    }

                    slides.push(slide);
                }
            );

            updateSlides();
        }
    )
    .catch((error) => { console.error('Error:', error); });

window.addEventListener('resize', updateSlides);
</script>


<script>

    function getBestSellers()
    {
        const graphqlQuery =
        `
            query ($menu: Int!) {
                TopProducts(menu: $menu) {
                    id
                    title
                    slug
                    subcategories {
                        id
                        title
                        slug
                    }
                    menu {
                        id
                        title
                    }
                    products {
                        id
                        title
                        unique_code
                        gender
                        material
                        neck
                        cloth_type
                        brand
                        slug
                        title_two
                        body_title
                        body_subtitle
                        pricing_type
                        rule_of_120
                        status
                        delivery_time
                        media{
                        id
                        file_name
                        collection_name
                        }
                        variants {
                            id,
                            title
                            short_title
                            stock
                            price
                            color {
                                id
                                title
                                hex
                            }
                        }
                        category {
                            id
                            title
                            slug
                            menu {
                                id,
                                title
                            }
                        }
                        packages {
                        id
                        quantity
                        paper {
                            id
                            title
                            side
                        }
                        prices {
                            id
                            quantity
                            sizes {
                                id
                                price
                            }
                            size {
                            id
                            region
                            unit
                            portrait
                            landscape
                            }
                        }
                        }
                        points {
                        id
                        title
                        body
                        media{
                            id
                            file_name
                        }
                        }

                    }
                }
            }
        `;

        const options =
        {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ query: graphqlQuery, variables: {menu: 10} }),
        };
        
        fetch('https://printo.ae/graphql', options)
        .then((response) => response.json())
        .then(
            (data) =>
            {
                let bestSellerContainer = document.querySelector('.bestseller div');
                let products = data.data.TopProducts;

                products.forEach(
                    (product) =>
                    {
                        console.log(product.title);
                        bestSellerContainer.innerHTML +=
                        `
                            <div class="relative box">
                                <a href="https://printo.ae/category/${ product.slug }/products"><img
                                        src="https://printo.ae/storage/${product.products[0].media[0].id}/${product.products[0].media[0].file_name}" alt="${product.products[0].media[0].collection_name}" class="box-image"></a>
                                <div class="flex items-center justify-between mb-2 md:pt-6 pt-0.5">
                                    <a href="https://printo.ae/category/${ product.slug }/products">
                                        <p class="box-name">${ product.title }

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
                                <p class="box-price text-dark-gray">AED ${product.products[0].packages[0].prices[0].sizes[0].price} / ${product.products[0].packages[0].prices[0].quantity} ${product.products[0].packages[0].prices[0].quantity == 1 ? 'Copy' : 'Copies'}</p>

                            </div>
                        `;
                    }
                );
            }
        )
        .catch((error) => { console.error('Error:', error); });
    }

    getBestSellers();
</script>

<script>
const toggleButtons = document.querySelectorAll('.toggle-icon');
const questionLinks = document.querySelectorAll('.faqbutton a'); // Select all the question links

toggleButtons.forEach(button => {
    button.addEventListener('click', () => {
        const answer = button.parentElement.nextElementSibling;
        toggleAnswer(answer, button);
    });
});

questionLinks.forEach(link => {
    link.addEventListener('click', (event) => {
        event.preventDefault(); // Prevent the default link behavior
        const answer = link.parentElement.nextElementSibling;
        const toggleButton = link.parentElement.querySelector('.toggle-icon');
        toggleAnswer(answer, toggleButton);
    });
});

function toggleAnswer(answer, button) {
    if (answer.classList.contains('hidden')) {
        answer.classList.remove('hidden');
        button.textContent = '-';
        button.classList.add('bg-gray-600');
    } else {
        answer.classList.add('hidden');
        button.textContent = '+';
        button.classList.remove('bg-gray-600');
    }
}
</script>

<script>
// Function to initialize Swiper on desktop
function initDesktopSwiper() {
    new Swiper('.custom-swiper-container', {
        slidesPerView: 3.6, // Show 3 slides on desktop
        spaceBetween: 16,
        loop: true,
        autoplay: {
            delay: 3000,
        },
    });
}

// Function to initialize Swiper on mobile
function initMobileSwiper() {
    new Swiper('.custom-swiper-container', {
        slidesPerView: 1.6, // Show 1 slide at a time on mobile
        spaceBetween: 16,
        loop: true,
        autoplay: {
            delay: 3000,
        },
    });
}

// Check the screen width and initialize the appropriate Swiper instance
function initSwiperBasedOnScreenWidth() {
    if (window.innerWidth < 640) {
        // Mobile screen
        initMobileSwiper();
    } else {
        // Desktop screen
        initDesktopSwiper();
    }
}

// Initial initialization based on screen width
initSwiperBasedOnScreenWidth();

// Update Swiper when the window is resized
window.addEventListener('resize', initSwiperBasedOnScreenWidth);
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/intlTelInput.min.js"></script>
<script>
const phoneInput = document.querySelector("#phoneInput");

const iti = window.intlTelInput(phoneInput, {
    initialCountry: "ae", // Set default country
    separateDialCode: true,
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/utils.js",
});

phoneInput.addEventListener("blur", () => {
    const phoneNumber = iti.getNumber();
    phoneInput.value = phoneNumber;
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var companyLogoSwiper = new Swiper('.companylogo-carousel', {
        slidesPerView: 3,
        spaceBetween: 14,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        breakpoints: {
            640: {
                slidesPerView: 6,
                spaceBetween: 14,
            },
        },
    });

    // Manually clone the slides for desktop version
    var desktopSlides = document.querySelectorAll('.companylogo-carousel .swiper-slide');
    var desktopSlideCount = desktopSlides.length;

    if (window.innerWidth > 640) {
        for (var i = 0; i < desktopSlideCount; i++) {
            var cloneSlide = desktopSlides[i].cloneNode(true);
            cloneSlide.classList.add('swiper-slide-duplicate');
            companyLogoSwiper.wrapperEl.appendChild(cloneSlide);
        }
    }
});
</script>


<script>
// Define a function to encapsulate your code
function customScript() {
    const searchButton = document.getElementById('searchButton');
    const searchBar = document.getElementById('searchBar');
    const menuButton = document.getElementById('menuButton');
    const mobileMenu = document.getElementById('mobileMenu');
    const closeMenuButton = document.getElementById('closeMenuButton');

    searchButton.addEventListener('click', () => {
        searchBar.classList.toggle('hidden');
    });

    // Toggle menu visibility using existing classes
    menuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('translate-x-full');
    });

    closeMenuButton.addEventListener('click', () => {
        mobileMenu.classList.add('translate-x-full');
    });
}

// Ensure the script runs after the DOM is fully loaded
document.addEventListener('DOMContentLoaded', customScript);
</script>

<script src="{{ asset('js/app.js') }}" defer></script>