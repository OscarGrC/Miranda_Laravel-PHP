<!--Styls-->
<link rel="stylesheet" href="{{ asset('css/offerts.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<!--Scripts-->
@vite([
    'resources/js/navbar.js',
    'resources/js/swiper.js',
    'resources/js/swiperCounter.js'
])
@extends('layouts.app')  <!-- Este es el layout principal -->

@section('content')
    <div>
        <!-- Contenido específico de la vista -->
       <!--RoomsDetailsHeader-->
    <div class="luxuryExperience">
        <h3 class="luxuryExperience__subtitle">THE ULTIMATE LUXURY</h3>
        <h1 class="luxuryExperience__title">Our Offers</h1>
        <div class="luxuryExperience__footer">
            <a class="luxuryExperience__footer__text" href="{{ route('home') }}">Home |</a>
            <h2 class="luxuryExperience__footer__text">Offers</h2>
        </div>
    </div>
    <!--Offert Card-->
    <div class="OfferCard">
        <div class="OfferCard__imageContainer">
            <img class="OfferCard__imageContainer__image" src="{{ asset('images/luxRoom.jpg') }}" />
            <div class="OfferCard__price">
                <span class="OfferCard__price__amount">$345</span>
                <span class="OfferCard__price__night">/Night</span>
            </div>
            <div class="OfferCard__price OfferCard__price-last">
                <span class="OfferCard__price__amount OfferCard__price__amount-last">$500</span>
                <span class="OfferCard__price__night OfferCard__price__night-last">/Night</span>
            </div>
        </div>
        <div class="OfferCard__header">
            <h3 class="OfferCard__header__subtitle">DOUBLE BED</h3>
            <h2 class="OfferCard__header__title">Luxury Double Bed</h2>
        </div>

        <p class="OfferCard__description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur.
        </p>
        <div class="ServicesList">
            <div class="ServicesList__list">
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/listAC.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">Air conditioner</span>
                </div>
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/listwifi.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">High speed WiFi</span>
                </div>
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/listbreakfast.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">Breakfast</span>
                </div>
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/listkitchen.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">Kitchen</span>
                </div>
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/listclean.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">Cleaning</span>
                </div>
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/listshower.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">Shower</span>
                </div>
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/grocery.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">Grocery</span>
                </div>
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/listbed.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">Single bed</span>
                </div>
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/listShops.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">Shop near</span>
                </div>
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/listtower.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">Towels</span>
                </div>

            </div>
        </div>
        <button class="OfferCard__button">BOOK NOW</button>
    </div>

    <div class="OfferCard">
        <div class="OfferCard__imageContainer">
            <img class="OfferCard__imageContainer__image" src="{{ asset('images/luxRoom2.jpg') }}" />
            <div class="OfferCard__price">
                <span class="OfferCard__price__amount">$345</span>
                <span class="OfferCard__price__night">/Night</span>
            </div>
            <div class="OfferCard__price OfferCard__price-last">
                <span class="OfferCard__price__amount OfferCard__price__amount-last">$500</span>
                <span class="OfferCard__price__night OfferCard__price__night-last">/Night</span>
            </div>
        </div>
        <div class="OfferCard__header">
            <h3 class="OfferCard__header__subtitle">DOUBLE BED</h3>
            <h2 class="OfferCard__header__title">Luxury Double Bed</h2>
        </div>

        <p class="OfferCard__description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur.
        </p>
        <div class="ServicesList">
            <div class="ServicesList__list">
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/listAC.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">Air conditioner</span>
                </div>
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/listwifi.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">High speed WiFi</span>
                </div>
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/listbreakfast.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">Breakfast</span>
                </div>
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/listkitchen.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">Kitchen</span>
                </div>
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/listclean.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">Cleaning</span>
                </div>
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/listshower.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">Shower</span>
                </div>
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/grocery.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">Grocery</span>
                </div>
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/listbed.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">Single bed</span>
                </div>
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/listShops.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">Shop near</span>
                </div>
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/listtower.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">Towels</span>
                </div>

            </div>
        </div>
        <button class="OfferCard__button">BOOK NOW</button>
    </div>

    <div class="OfferCard">
        <div class="OfferCard__imageContainer">
            <img class="OfferCard__imageContainer__image" src="{{ asset('images/luxRoom3.jpg') }}" />
            <div class="OfferCard__price">
                <span class="OfferCard__price__amount">$345</span>
                <span class="OfferCard__price__night">/Night</span>
            </div>
            <div class="OfferCard__price OfferCard__price-last">
                <span class="OfferCard__price__amount OfferCard__price__amount-last">$500</span>
                <span class="OfferCard__price__night OfferCard__price__night-last">/Night</span>
            </div>
        </div>
        <div class="OfferCard__header">
            <h3 class="OfferCard__header__subtitle">DOUBLE BED</h3>
            <h2 class="OfferCard__header__title">Luxury Double Bed</h2>
        </div>

        <p class="OfferCard__description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur.
        </p>
        <div class="ServicesList">
            <div class="ServicesList__list">
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/listAC.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">Air conditioner</span>
                </div>
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/listwifi.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">High speed WiFi</span>
                </div>
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/listbreakfast.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">Breakfast</span>
                </div>
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/listkitchen.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">Kitchen</span>
                </div>
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/listclean.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">Cleaning</span>
                </div>
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/listshower.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">Shower</span>
                </div>
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/grocery.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">Grocery</span>
                </div>
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/listbed.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">Single bed</span>
                </div>
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/listShops.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">Shop near</span>
                </div>
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/listtower.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">Towels</span>
                </div>

            </div>
        </div>
        <button class="OfferCard__button">BOOK NOW</button>
    </div>

    <div class="OfferCard">
        <div class="OfferCard__imageContainer">
            <img class="OfferCard__imageContainer__image" src="{{ asset('images/luxRoom.jpg') }}" />
            <div class="OfferCard__price">
                <span class="OfferCard__price__amount">$345</span>
                <span class="OfferCard__price__night">/Night</span>
            </div>
            <div class="OfferCard__price OfferCard__price-last">
                <span class="OfferCard__price__amount OfferCard__price__amount-last">$500</span>
                <span class="OfferCard__price__night OfferCard__price__night-last">/Night</span>
            </div>
        </div>
        <div class="OfferCard__header">
            <h3 class="OfferCard__header__subtitle">DOUBLE BED</h3>
            <h2 class="OfferCard__header__title">Luxury Double Bed</h2>
        </div>

        <p class="OfferCard__description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur.
        </p>
        <div class="ServicesList">
            <div class="ServicesList__list">
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/listAC.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">Air conditioner</span>
                </div>
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/listwifi.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">High speed WiFi</span>
                </div>
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/listbreakfast.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">Breakfast</span>
                </div>
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/listkitchen.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">Kitchen</span>
                </div>
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/listclean.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">Cleaning</span>
                </div>
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/listshower.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">Shower</span>
                </div>
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/grocery.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">Grocery</span>
                </div>
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/listbed.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">Single bed</span>
                </div>
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/listShops.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">Shop near</span>
                </div>
                <div class="ServicesList__list__item">
                    <img src="{{ asset('icons/listtower.png') }}" class="ServicesList__list__item__icon" />
                    <span class="ServicesList__list__item__text">Towels</span>
                </div>

            </div>
        </div>
        <button class="OfferCard__button">BOOK NOW</button>
    </div>
    <!--Popular list-->
    <section class="services servicesBlack">
        <div class="swiper swiper__Contact">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <h2 class="swiper-slide__subtitle">POPULAR LIST</h2>
                    <h2 class="swiper-slide__title">Popular Rooms</h2>
                    <div class="roomCard roomCard-slider">
                        <img class="roomCard__image" src="{{ asset('images/luxRoom.jpg') }}">
                        <div class="roomCard__icons roomCard__icons-slider">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/bed.png') }}">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/wifi.png') }}">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/car.png') }}">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/cold.png') }}">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/gym.png') }}">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/smoking.png') }}">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/drink.png') }}">
                        </div>
                        <h3 class="roomCard__title">Minimal Duplex Room</h3>
                        <p class="roomCard__description">
                            Lorem ipsum dolor sit amet, consectetur adipi scing elit, sed do eiusmod tempor.
                        </p>
                        <div class="roomCard__price-booking">
                            <span class="roomCard__price-booking__price">$345/Night</span>
                            <span class="roomCard__price-booking__booking">Booking Now</span>
                        </div>
                    </div>
                </div>


                <div class="swiper-slide">
                    <h2 class="swiper-slide__subtitle">POPULAR LIST</h2>
                    <h2 class="swiper-slide__title">Popular Rooms</h2>
                    <div class="roomCard roomCard-slider">
                        <img class="roomCard__image" src="{{ asset('images/luxRoom2.jpg') }}">
                        <div class="roomCard__icons roomCard__icons-slider">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/bed.png') }}">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/wifi.png') }}">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/car.png') }}">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/cold.png') }}">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/gym.png') }}">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/smoking.png') }}">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/drink.png') }}">
                        </div>
                        <h3 class="roomCard__title">Minimal Duplex Room</h3>
                        <p class="roomCard__description">
                            Lorem ipsum dolor sit amet, consectetur adipi scing elit, sed do eiusmod tempor.
                        </p>
                        <div class="roomCard__price-booking">
                            <span class="roomCard__price-booking__price">$345/Night</span>
                            <span class="roomCard__price-booking__booking">Booking Now</span>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide">
                    <h2 class="swiper-slide__subtitle">POPULAR LIST</h2>
                    <h2 class="swiper-slide__title">Popular Rooms</h2>
                    <div class="roomCard roomCard-slider">
                        <img class="roomCard__image" src="{{ asset('images/luxRoom3.jpg') }}">
                        <div class="roomCard__icons roomCard__icons-slider">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/bed.png') }}">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/wifi.png') }}">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/car.png') }}">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/cold.png') }}">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/gym.png') }}">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/smoking.png') }}">
                            <img class="roomCard__icons__icon" src="{{ asset('icons/drink.png') }}">
                        </div>
                        <h3 class="roomCard__title">Minimal Duplex Room</h3>
                        <p class="roomCard__description">
                            Lorem ipsum dolor sit amet, consectetur adipi scing elit, sed do eiusmod tempor.
                        </p>
                        <div class="roomCard__price-booking">
                            <span class="roomCard__price-booking__price">$345/Night</span>
                            <span class="roomCard__price-booking__booking">Booking Now</span>
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
@endsection