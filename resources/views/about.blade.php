<!--Styls-->
<link rel="stylesheet" href="{{ asset('css/about.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<!--Scripts-->
<script src="{{ asset('js/navbar.js') }}"></script>
<script src="{{ asset('js/aboutVideo.js') }}"></script>
<script src="{{ asset('js/swiper.js') }}"></script>
<script src="{{ asset('js/swiperCounter.js') }}"></script>


@extends('layouts.app')  <!-- Este es el layout principal -->

@section('content')
    <div>
        <!-- Contenido específico de la vista -->
        <!--AboudUsHeader-->
    <div class="luxuryExperience">
        <h3 class="luxuryExperience__subtitle">THE ULTIMATE LUXURY</h3>
        <h1 class="luxuryExperience__title">About Us</h1>
        <div class="luxuryExperience__footer">
            <a class="luxuryExperience__footer__text" href="./home.html">Home |</a>
            <h2 class="luxuryExperience__footer__text">About</h2>
        </div>
    </div>
    <!--AboutVideo-->
    <div class="aboutVideo">
        <div class="aboutVideo__videoContainer">
            <iframe class="aboutVideo__videoContainer__video"
                src="https://www.youtube.com/embed/Bu3Doe45lcU?start=25&end=75" title="Intro Video" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
            <button class="aboutVideo__videoContainer__playButton">
                <img src="{{ asset('icons/play.png') }}" />
            </button>
        </div>
        <p class="aboutVideo__text">
            Hello. Our hotel has been present for over 20 years. We make the best for all our customers.
        </p>
    </div>
    <!--AboutServides-->
    <div class="aboutServices">
        <div class="aboutServices__item">
            <img src="{{ asset('icons/aboutCafe.png') }}" class="aboutServices__item__icon" />
            <img src="{{ asset('icons/aboutCafe1.png') }}" class="aboutServices__item__icon-hover" />
            <p class="aboutServices__item__text">BREAKFAST</p>
        </div>
        <div class="aboutServices__item">
            <img src="{{ asset('icons/aboutPlain.png') }}" class="aboutServices__item__icon" />
            <img src="{{ asset('icons/aboutPlain1.png') }}" class="aboutServices__item__icon-hover" />
            <p class="aboutServices__item__text">AIRPORT PICKUP</p>
        </div>
        <div class="aboutServices__item">
            <img src="{{ asset('icons/aboutMap.png') }}" class="aboutServices__item__icon" />
            <img src="{{ asset('icons/aboutMap1.png') }}" class="aboutServices__item__icon-hover" />
            <p class="aboutServices__item__text">CITY GUIDE</p>
        </div>
        <div class="aboutServices__item">
            <img src="{{ asset('icons/aboutLuxury.png') }}" class="aboutServices__item__icon" />
            <img src="{{ asset('icons/aboutLuxury1.png') }}" class="aboutServices__item__icon-hover" />
            <p class="aboutServices__item__text">LUXURY ROOM</p>
        </div>
    </div>
    <!--AboutRestaurant-->
    <div class="aboutRestaurant">
        <img src="{{ asset('images/restaurant.jpg') }}" class="aboutRestaurant__image" />
        <p class="aboutRestaurant__subtext">RESTAURANT</p>
        <h2 class="aboutRestaurant__title">Get Restaurant Facilities & Many Other More</h2>
        <p class="aboutRestaurant__text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
        </p>
        <button class="aboutRestaurant__button">TAKE A TOUR</button>
    </div>


    <!--FacilitySlider-->
    <section class="services">
        <div class="swiper swiper__Facilities">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="facilities facilities-black">
                        <h4 class="facilities__subtitle facilities__subtitle-alt">FACILITIES</h4>
                        <h2 class="facilities__title facilities__title-alt">Core Features</h2>
                        <div class="facilities__container facilities__container-alt">
                            <img src="{{ asset('icons/facilities1.png') }}" alt="Feature Icon"
                                class="facilities__container__icon" />
                            <img src="{{ asset('icons/01.png') }}" class="facilities__container__backgroundIcon" />
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
                    <div class="facilities facilities-black">
                        <h4 class="facilities__subtitle facilities__subtitle-alt">FACILITIES</h4>
                        <h2 class="facilities__title facilities__title-alt">Core Features</h2>
                        <div class="facilities__container facilities__container-alt">
                            <img src="{{ asset('icons/facilities2.png') }}" alt="Feature Icon"
                                class="facilities__container__icon" />
                            <img src="{{ asset('icons/02.png') }}" class="facilities__container__backgroundIcon" />
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
                    <div class="facilities facilities-black">
                        <h4 class="facilities__subtitle facilities__subtitle-alt">FACILITIES</h4>
                        <h2 class="facilities__title facilities__title-alt">Core Features</h2>
                        <div class="facilities__container facilities__container-alt">
                            <img src="{{ asset('icons/facilities3.png') }}" alt="Feature Icon"
                                class="facilities__container__icon" />
                            <img src="{{ asset('icons/03.png') }}" class="facilities__container__backgroundIcon" />
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
                    <div class="facilities facilities-black">
                        <h4 class="facilities__subtitle facilities__subtitle-alt">FACILITIES</h4>
                        <h2 class="facilities__title facilities__title-alt">Core Features</h2>
                        <div class="facilities__container facilities__container-alt">
                            <img src="{{ asset('icons/facilities4.png') }}" alt="Feature Icon"
                                class="facilities__container__icon" />
                            <img src="{{ asset('icons/04.png') }}" class="facilities__container__backgroundIcon" />
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
                    <div class="facilities facilities-black">
                        <h4 class="facilities__subtitle facilities__subtitle-alt">FACILITIES</h4>
                        <h2 class="facilities__title facilities__title-alt">Core Features</h2>
                        <div class="facilities__container facilities__container-alt">
                            <img src="{{ asset('icons/facilities5.png') }}" alt="Feature Icon"
                                class="facilities__container__icon" />
                            <img src="{{ asset('icons/05.png') }}" class="facilities__container__backgroundIcon" />
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
                    <div class="facilities facilities-black">
                        <h4 class="facilities__subtitle facilities__subtitle-alt">FACILITIES</h4>
                        <h2 class="facilities__title facilities__title-alt">Core Features</h2>
                        <div class="facilities__container facilities__container-alt">
                            <img src="{{ asset('icons/facilities6.png') }}" alt="Feature Icon"
                                class="facilities__container__icon" />
                            <img src="{{ asset('icons/06.png') }}" class="facilities__container__backgroundIcon" />
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



    <!--Counter-->
    <div class="aboutCounter">
        <p class="aboutCounter__subtext">COUNTER</p>
        <h2 class="aboutCounter__title">Some Fun Facts</h2>

        <div class="aboutCounter__item">
            <div class="aboutCounter__item__left">
                <img src="{{ asset('icons/counthappy.png') }}" class="aboutCounter__item__icon" />
            </div>
            <div class="aboutCounter__item__center">
                <p class="aboutCounter__item__center__number">8000</p>
                <p class="aboutCounter__item__center__text">Happy users</p>
            </div>
            <div class="aboutCounter__item__right">
                <img src="{{ asset('icons/countleft.png') }}" class="aboutCounter__item__icon" />
            </div>
        </div>

        <div class="aboutCounter__item">
            <div class="aboutCounter__item__left">
                <img src="{{ asset('icons/countok.png') }}" class="aboutCounter__item__icon" />
            </div>
            <div class="aboutCounter__item__center">
                <p class="aboutCounter__item__center__number">10M</p>
                <p class="aboutCounter__item__center__text">Reviews & Appriciate</p>
            </div>
            <div class="aboutCounter__item__right">
                <img src="{{ asset('icons/countleft.png') }}" class="aboutCounter__item__icon" />
            </div>
        </div>

        <div class="aboutCounter__item">
            <div class="aboutCounter__item__left">
                <img src="{{ asset('icons/countword.png') }}" class="aboutCounter__item__icon" />
            </div>
            <div class="aboutCounter__item__center">
                <p class="aboutCounter__item__center__number">100</p>
                <p class="aboutCounter__item__center__text">Country Coverage</p>
            </div>
            <div class="aboutCounter__item__right">
                <img src="{{ asset('icons/countleft.png') }}" class="aboutCounter__item__icon" />
            </div>
        </div>
        <!-- Slider main container -->
        <section class="services">
            <div class="swiper swiper__Counter">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="{{ asset('images/luxRoom.jpg') }}" /></div>
                    <div class="swiper-slide"><img src="{{ asset('images/luxRoom2.jpg') }}" /></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
    </div>
    </div>
@endsection