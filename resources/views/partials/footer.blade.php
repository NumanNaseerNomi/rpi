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