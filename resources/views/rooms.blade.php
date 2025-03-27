<!--Styls-->
<link rel="stylesheet" href="{{ asset('css/rooms.css') }}">
<!--Scripts-->
<script src="{{ asset('js/navbar.js') }}"></script>
<script src="{{ asset('js/roomsPagination.js') }}"></script>



@extends('layouts.app')  <!-- Este es el layout principal -->

@section('content')
    <div>
    <div class="luxuryExperience">
        <h3 class="luxuryExperience__subtitle">THE ULTIMATE LUXURY</h3>
        <h1 class="luxuryExperience__title">Ultimate Room</h1>
        <div class="luxuryExperience__footer">
            <a class="luxuryExperience__footer__text" href="./home.html">Home |</a>
            <h2 class="luxuryExperience__footer__text">Rooms</h2>
        </div>
    </div>
    <!--Room Card-->
    <div class="roomCard">
        <img class="roomCard__image" src="{{ asset('images/luxRoom.jpg') }}">
        <div class="roomCard__icons">
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

    <div class="roomCard">
        <img class="roomCard__image" src="{{ asset('images/luxRoom.jpg') }}">
        <div class="roomCard__icons">
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

    <div class="roomCard">
        <img class="roomCard__image" src="{{ asset('images/luxRoom.jpg') }}">
        <div class="roomCard__icons">
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

    <div class="roomCard">
        <img class="roomCard__image" src="{{ asset('images/luxRoom.jpg') }}">
        <div class="roomCard__icons">
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

    <div class="roomCard">
        <img class="roomCard__image" src="{{ asset('images/luxRoom.jpg') }}">
        <div class="roomCard__icons">
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

    <div class="roomCard">
        <img class="roomCard__image" src="{{ asset('images/luxRoom.jpg') }}">
        <div class="roomCard__icons">
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
    <!--Rooms Pagination-->
    <div class="roomsPagination">
        <div id="iconBack" class="roomsPagination__button">
            <img src="{{ asset('icons/left.png') }}" />
        </div>
        <h2 class="roomsPagination__button roomsPagination-number " id="page1">1</h2>
        <h2 class="roomsPagination__button roomsPagination-number " id="page2">2</h2>
        <h2 class="roomsPagination__button roomsPagination-number " id="page3">3</h2>
        <h2 class="roomsPagination__button roomsPagination-number " id="page4">...</h2>
        <h2 class="roomsPagination__button roomsPagination-number " id="page5">10</h2>

        <div id="iconNext" class="roomsPagination__button">
            <img src="{{ asset('icons/right.png') }}" />
        </div>
    </div>
    </div>
@endsection