<!--Styls-->
<link rel="stylesheet" href="{{ asset('css/contact.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<!--Scripts-->
@vite([
    'resources/js/navbar.js',
])

@extends('layouts.app')  <!-- Este es el layout principal -->

@section('content')
    <div>
        <!-- Contenido específico de la vista -->
         <!--ContactHeader-->
    <div class="luxuryExperience">
        <h3 class="luxuryExperience__subtitle">THE ULTIMATE LUXURY</h3>
        <h1 class="luxuryExperience__title">New Details</h1>
        <div class="luxuryExperience__footer">
            <a class="luxuryExperience__footer__text" href="{{ route('home') }}">Home |</a>
            <h2 class="luxuryExperience__footer__text">Blog</h2>
        </div>
    </div>
    <!--ContactInfo -->
    <div class="contactInfo">
        <div class="contactInfo-item">
            <img class="contactInfo-item__backgroundIcon" src="{{ asset('icons/01.png')}}" />
            <img src="{{ asset('icons/email.png')}}" />
            <div>
                <p class="contactInfo-item-title">Hotel Address</p>
                <p class="contactInfo-item-info">19/A, Cirikon City hall Tower New York, NYC</p>
            </div>
        </div>
    </div>
    <div class="contactInfo">
        <div class="contactInfo-item">
            <img class="contactInfo-item__backgroundIcon" src="{{ asset('icons/02.png')}}" />
            <img src="{{ asset('icons/phone.png')}}" />
            <div>
                <p class="contactInfo-item-title">Phone Number</p>
                <p class="contactInfo-item-info">
                    + 97656 8675 7864 7 <br />
                    + 876 766 8675 765 6
                </p>
            </div>
        </div>
    </div>
    <div class="contactInfo">
        <div class="contactInfo-item">
            <img class="contactInfo-item__backgroundIcon" src="{{ asset('icons/03.png')}}" />
            <img src="{{ asset('icons/maps.png')}}" />
            <div>
                <p class="contactInfo-item-title">Email</p>
                <p class="contactInfo-item-info">
                    info@webmail.com<br />
                    jobs.webmail@mail.com
                </p>
            </div>
        </div>
    </div>
    <!--Image-->
    <div style="display: flex; align-items: center; justify-content: center;">
        <img src="{{ asset('images/personal.jpg')}}" style="width: 20.9rem; height: 12.5rem;margin-top: 2rem;" />
    </div>
    <!--contactForm-->
    <div class="contactForm">
        <div class="contactForm__container">
            <img class="contactForm__container__icon" src="{{ asset('icons/formpeople.png')}}">
            <input class="contactForm__container__input" type="text" placeholder="Your full name">
        </div>

        <div class="contactForm__container">
            <img class="contactForm__container__icon" src="{{ asset('icons/formphone.png')}}">
            <input class="contactForm__container__input" type="email" placeholder="Add phone number">
        </div>

        <div class="contactForm__container">
            <img class="contactForm__container__icon" src="{{ asset('icons/formemail.png')}}">
            <input class="contactForm__container__input" type="text" placeholder="Enter email address">
        </div>

        <div class="contactForm__container">
            <img class="contactForm__container__icon" src="{{ asset('icons/formbook.png')}}">
            <input class="contactForm__container__input" type="text" placeholder="Enter subject">
        </div>

        <div class="contactForm__container contactForm__container">
            <img class="contactForm__container__icon contactForm__container__icon--last"
                src="{{ asset('icons/formpencil.png')}}">
            <input class="contactForm__container__input contactForm__container__input--last" type="text"
                placeholder="Enter message">
        </div>

        <button class="contactForm__button">SEND</button>
    </div>

    </div>
@endsection