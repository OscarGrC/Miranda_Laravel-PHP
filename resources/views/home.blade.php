<!--Styls-->
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<!--Scripts-->
@vite([
    'resources/js/navbar.js',
    'resources/js/homeVideo.js',
    'resources/js/swiper.js',
    'resources/js/swiperCounter.js'
])
@extends('layouts.app')  <!-- Este es el layout principal -->

@section('content')
    <div>
        <!-- Contenido específico de la vista  -->
         
          <!--HomeHeader-->
    <div class="luxuryExperience luxuryExperience-home">
        <h3 class="luxuryExperience__subtitle">THE ULTIMATE LUXURY EXPERIENCE</h3>
        <h1 class="luxuryExperience__title">The Perfect Base For You</h1>
        <button class="luxuryExperience__button-tour">Take a Tour</button>
        <button class="luxuryExperience__button-learn">Learn More</button>
    </div>
    <!-- Reservation Calendar -->
    <div class="reservationCalendar">
        <!-- Arrival Date -->
        <div class="reservationCalendar__item">
            <h3 class="reservationCalendar__item-title">Arrival Date</h3>
            <div class="reservationCalendar__item-inputContainer">
                <img src="{{ asset('icons/calendar.png')}}" alt="Calendar">
                <input type="text" class="reservationCalendar__item-inputContainer__input" value="24th March 2020" />
            </div>
            <hr class="reservationCalendar__divider" />
        </div>
        <!-- Departure Date -->
        <div class="reservationCalendar__item">
            <h3 class="reservationCalendar__item-title">Departure Date</h3>
            <div class="reservationCalendar__item-inputContainer">
                <img src="{{ asset('icons/calendar.png')}}" alt="Calendar">
                <input type="text" class="reservationCalendar__item-inputContainer__input" value="24th March 2020" />
            </div>
            <hr class="reservationCalendar__divider" />
        </div>
        <!-- Button -->
        <button class="reservationCalendar__button">Check Availability</button>
    </div>
    <!--SPACER -->
    <div class="spacer" style="height: 3rem;"></div>
    <!-- About Us-->
    <div class="homeAboutUs">
        <h3 class="homeAboutUs__subtitle">ABOUT US</h3>
        <h1 class="homeAboutUs__title">Discover Our Underground.</h1>
        <p class="homeAboutUs__text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.
        </p>
        <button class="homeAboutUs__button">BOOK NOW</button>
        <div class="homeAboutUs__Card">
            <img class="homeAboutUs__Card__image" src="{{ asset('images/personal.jpg') }}" alt="Card Image" />
            <div class="homeAboutUs__Card__container homeAboutUs__Card__container-strong">
                <img class="homeAboutUs__Card__container__icon" src="{{ asset('icons/homeAboutStaff.png') }}"
                    alt="Card Icon" />
                <img class="homeAboutUs__Card__container__backicon" src="{{ asset('icons/Group.png') }}"
                    alt="Card Icon" />
                <h3 class="homeAboutUs__Card__container__title homeAboutUs__Card__container__title-strong">Strong Team
                </h3>
                <p class="homeAboutUs__Card__container__text homeAboutUs__Card__container__text-strong">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                </p>
            </div>
        </div>
        <div class="homeAboutUs__Card">
            <img class="homeAboutUs__Card__image" src="{{ asset('images/luxRoom.jpg') }}" alt="Card Image" />
            <div class="homeAboutUs__Card__container homeAboutUs__Card__container-luxury">
                <img class="homeAboutUs__Card__container__icon" src="{{ asset('icons/homeAboutCal.png') }}"
                    alt="Card Icon" />
                <h3 class="homeAboutUs__Card__container__title homeAboutUs__Card__container__title-luxury">Luxury Room
                </h3>
                <p class="homeAboutUs__Card__container__text homeAboutUs__Card__container__text-luxury">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                </p>
            </div>
        </div>

    </div>
    <!-- Rooms-->
    <section class="services ">
        <div class="swiper swiper__HomeRooms">
            <div class="swiper-wrapper">
                <div class="swiper-slide swiper-slide-white">
                    <h2 class="swiper-slide__subtitle-alt">ROOMS</h2>
                    <h2 class="swiper-slide__title-alt">Hand Picked Rooms</h2>
                    <div class="roomCard roomCard-homeRooms">
                        <img class=" roomCard__image roomCard__image-homeRooms" src="{{ asset('images/luxRoom.jpg')}}">
                        <div class="roomCard__icons roomCard__icons-sliderHomeRooms">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/bed.png')}}">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/wifi.png')}}">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/car.png')}}">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/cold.png')}}">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/gym.png')}}">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/smoking.png')}}">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/drink.png')}}">
                        </div>
                        <h3 class="roomCard__title">Minimal Duplex Room</h3>
                        <p class="roomCard__description roomCard__description-alt">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore.
                        </p>
                        <div class="roomCard__price-booking">
                            <span class="roomCard__price-booking__price roomCard__price-booking__price-alt">$345</span>
                            <span
                                class="roomCard__price-booking__price roomCard__price-booking__price-alt2">/Night</span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide swiper-slide-white">
                    <h2 class="swiper-slide__subtitle-alt">ROOMS</h2>
                    <h2 class="swiper-slide__title-alt">Hand Picked Rooms</h2>
                    <div class="roomCard roomCard-homeRooms">
                        <img class=" roomCard__image roomCard__image-homeRooms" src="{{ asset('images/luxRoom2.jpg')}}">
                        <div class="roomCard__icons roomCard__icons-sliderHomeRooms">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/bed.png')}}">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/wifi.png')}}">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/car.png')}}">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/cold.png')}}')}}">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/gym.png')}}">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/smoking.png')}}">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/drink.png')}}">
                        </div>
                        <h3 class="roomCard__title">Minimal Duplex Room</h3>
                        <p class="roomCard__description roomCard__description-alt">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore.
                        </p>
                        <div class="roomCard__price-booking">
                            <span class="roomCard__price-booking__price roomCard__price-booking__price-alt">$345</span>
                            <span
                                class="roomCard__price-booking__price roomCard__price-booking__price-alt2">/Night</span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide swiper-slide-white">
                    <h2 class="swiper-slide__subtitle-alt">ROOMS</h2>
                    <h2 class="swiper-slide__title-alt">Hand Picked Rooms</h2>
                    <div class="roomCard roomCard-homeRooms">
                        <img class=" roomCard__image roomCard__image-homeRooms" src="{{ asset('images/luxRoom3.jpg')}}">
                        <div class="roomCard__icons roomCard__icons-sliderHomeRooms">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/bed.png')}}">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/wifi.png')}}">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/car.png')}}">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/cold.png')}}">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/gym.png')}}">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/smoking.png')}}">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/drink.png')}}">
                        </div>
                        <h3 class="roomCard__title">Minimal Duplex Room</h3>
                        <p class="roomCard__description roomCard__description-alt">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore.
                        </p>
                        <div class="roomCard__price-booking">
                            <span class="roomCard__price-booking__price roomCard__price-booking__price-alt">$345</span>
                            <span
                                class="roomCard__price-booking__price roomCard__price-booking__price-alt2">/Night</span>
                        </div>
                    </div>
                </div>



            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>
    <!--HOME VIDEO-->
    <div class="homeVideo">
        <h4 class="homeVideo__intro-title">INTRO VIDEO</h4>
        <h1 class="homeVideo__main-title">Meet With Our Luxury Place.</h1>
        <!-- Description -->
        <p class="homeVideo__description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat you have to understand this.
        </p>
        <!-- Video -->
        <div class="homeVideo__video-container">
            <iframe class="homeVideo__video-container__video"
                src="https://www.youtube.com/embed/Bu3Doe45lcU?start=25&end=75" title="Intro Video" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <button class="homeVideo__video-container__play-button">
                <img src="{{ asset('icons/play.png')}}" alt="Play Button" />
            </button>
        </div>
        <!-- Button -->
        <button class="homeVideo__button">Book Now</button>
    </div>
    <!--FacilitySlider-->
    <section class="services">
        <div class="swiper swiper__Facilities">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="facilities">
                        <h4 class="facilities__subtitle">FACILITIES</h4>
                        <h2 class="facilities__title">Core Features</h2>
                        <div class="facilities__container">
                            <img src="{{ asset('icons/facilities1.png')}}" alt="Feature Icon"
                                class="facilities__container__icon" />
                            <img src="{{ asset('icons/01.png')}}" class="facilities__container__backgroundIcon" />
                            <h3 class="facilities__container__title">Have High Rating</h3>
                            <p class="facilities__container__description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut
                                labore
                                et dolore magna..
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="facilities">
                        <h4 class="facilities__subtitle">FACILITIES</h4>
                        <h2 class="facilities__title">Core Features</h2>
                        <div class="facilities__container">
                            <img src="{{ asset('icons/facilities2.png')}}" alt="Feature Icon"
                                class="facilities__container__icon" />
                            <img src="{{ asset('icons/02.png')}}" class="facilities__container__backgroundIcon" />
                            <h3 class="facilities__container__title">Quiet Hours</h3>
                            <p class="facilities__container__description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut
                                labore
                                et dolore magna..
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="facilities">
                        <h4 class="facilities__subtitle">FACILITIES</h4>
                        <h2 class="facilities__title">Core Features</h2>
                        <div class="facilities__container">
                            <img src="{{ asset('icons/facilities3.png')}}" alt="Feature Icon"
                                class="facilities__container__icon" />
                            <img src="{{ asset('icons/03.png')}}" class="facilities__container__backgroundIcon" />
                            <h3 class="facilities__container__title">Best Locations</h3>
                            <p class="facilities__container__description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut
                                labore
                                et dolore magna..
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="facilities">
                        <h4 class="facilities__subtitle">FACILITIES</h4>
                        <h2 class="facilities__title">Core Features</h2>
                        <div class="facilities__container">
                            <img src="{{ asset('icons/facilities4.png')}}" alt="Feature Icon"
                                class="facilities__container__icon" />
                            <img src="{{ asset('icons/04.png')}}" class="facilities__container__backgroundIcon" />
                            <h3 class="facilities__container__title">Free Cancellation</h3>
                            <p class="facilities__container__description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut
                                labore
                                et dolore magna..
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="facilities">
                        <h4 class="facilities__subtitle">FACILITIES</h4>
                        <h2 class="facilities__title">Core Features</h2>
                        <div class="facilities__container">
                            <img src="{{ asset('icons/facilities5.png')}}" alt="Feature Icon"
                                class="facilities__container__icon" />
                            <img src="{{ asset('icons/05.png')}}" class="facilities__container__backgroundIcon" />
                            <h3 class="facilities__container__title">Payment Options</h3>
                            <p class="facilities__container__description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut
                                labore
                                et dolore magna..
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="facilities">
                        <h4 class="facilities__subtitle">FACILITIES</h4>
                        <h2 class="facilities__title">Core Features</h2>
                        <div class="facilities__container">
                            <img src="{{ asset('icons/facilities6.png')}}" alt="Feature Icon"
                                class="facilities__container__icon" />
                            <img src="{{ asset('icons/06.png')}}" class="facilities__container__backgroundIcon" />
                            <h3 class="facilities__container__title">Special Offers</h3>
                            <p class="facilities__container__description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut
                                labore
                                et dolore magna..
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>




    <!--Menu-->
    <div class="homeMenu">
        <img class="homeMenu__Img" src="{{ asset('icons/donut.png')}}">
        <p class="homeMenu__subtitle">MENU</p>
        <h2 class="homeMenu__title">Our Foods Menu</h2>
        <section class="services ">
            <div class="swiper swiper__Menu">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="homeMenu__menuItem">
                            <img src="{{ asset('images/huevos.jpg')}}" alt="Eggs & Bacon"
                                class="homeMenu__menuItem__image">
                            <div class="homeMenu__menuItem__content">
                                <h3 class="homeMenu__menuItem__content__title">Eggs & Bacon</h3>
                                <p class="homeMenu__menuItem__content__description">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing
                                    elit, sed
                                    do eiusmod tempor.</p>
                            </div>
                        </div>

                        <div class="homeMenu__menuItem">
                            <img src="{{ asset('images/teCofe.jpg')}}" alt="Tea or Coffee"
                                class="homeMenu__menuItem__image">
                            <div class="homeMenu__menuItem__content">
                                <h3 class="homeMenu__menuItem__content__title">Tea or Coffee</h3>
                                <p class="homeMenu__menuItem__content__description">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing
                                    elit, sed
                                    do eiusmod tempor.</p>
                            </div>
                        </div>

                        <div class="homeMenu__menuItem">
                            <img src="{{ asset('images/chia.jpg')}}" alt="Chia Oatmeal"
                                class="homeMenu__menuItem__image">
                            <div class="homeMenu__menuItem__content">
                                <h3 class="homeMenu__menuItem__content__title">Chia Oatmeal</h3>
                                <p class="homeMenu__menuItem__content__description">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing
                                    elit, sed
                                    do eiusmod tempor.</p>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide ">
                        <div class="homeMenu__menuItem">
                            <img src="{{ asset('images/frutika.jpg')}}" alt="Fruit Parfait"
                                class="homeMenu__menuItem__image">
                            <div class="homeMenu__menuItem__content">
                                <h3 class="homeMenu__menuItem__content__title">Fruit Parfait</h3>
                                <p class="homeMenu__menuItem__content__description">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing
                                    elit, sed
                                    do eiusmod tempor.</p>
                            </div>
                        </div>

                        <div class="homeMenu__menuItem">
                            <img src="{{ asset('images/mermelada.png')}}" alt="Marmalade Selection"
                                class="homeMenu__menuItem__image">
                            <div class="homeMenu__menuItem__content">
                                <h3 class="homeMenu__menuItem__content__title">Marmalade Selection</h3>
                                <p class="homeMenu__menuItem__content__description">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing
                                    elit, sed
                                    do eiusmod tempor.</p>
                            </div>
                        </div>

                        <div class="homeMenu__menuItem">
                            <img src="{{ asset('images/queso.jpg')}}" alt="Cheese Plate"
                                class="homeMenu__menuItem__image">
                            <div class="homeMenu__menuItem__content">
                                <h3 class="homeMenu__menuItem__content__title">Cheese Plate</h3>
                                <p class="homeMenu__menuItem__content__description">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing
                                    elit, sed
                                    do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>




                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>

    </div>
    <!--ImageSlide-->
    <section class="services">
        <div class="swiper swiper__HomeImage">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="{{ asset('images/pool.jpg')}}" /></div>
                <div class="swiper-slide"><img src="{{ asset('images/luxRoom3.jpg')}}" /></div>
                <div class="swiper-slide"><img src="{{ asset('images/luxRoom.jpg')}}" /></div>
                <div class="swiper-slide"><img src="{{ asset('images/luxRoom2.jpg')}}" /></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!--Home Info-->
    <div class="homeInfo">
        <div class="homeInfo__item">
            <img class="homeInfo__item__icon" src="{{ asset('icons/cobete.png')}}">
            <div>
                <h2 class="homeInfo__item__title">84k</h2>
                <h2 class="homeInfo__item__title2">+</h2>
            </div>

            <p class="homeInfo__item__subtitle">Projects are Completed</p>
        </div>
        <div class="homeInfo__item">
            <img class="homeInfo__item__icon" src="{{ asset('icons/hipeople.png')}}">
            <div>
                <h2 class="homeInfo__item__title">10M</h2>
                <h2 class="homeInfo__item__title2">+</h2>
            </div>
            <p class="homeInfo__item__subtitle">Active Backers Around World</p>
        </div>
        <div class="homeInfo__item">
            <img class="homeInfo__item__icon" src="{{ asset('icons/exito.png')}}">
            <div>
                <h2 class="homeInfo__item__title">02k</h2>
                <h2 class="homeInfo__item__title2">+</h2>
            </div>
            <p class="homeInfo__item__subtitle">Categories Served</p>
        </div>
        <div class="homeInfo__item">
            <img class="homeInfo__item__icon" src="{{ asset('icons/book.png')}}">
            <div>
                <h2 class="homeInfo__item__title">100M</h2>
                <h2 class="homeInfo__item__title2">+</h2>
            </div>
            <p class="homeInfo__item__subtitle">Idea Raised Funds</p>
        </div>
    </div>
    </div>
@endsection

