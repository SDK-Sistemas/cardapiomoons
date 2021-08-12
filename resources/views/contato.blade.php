@extends('layouts.guest')

@section('content')

    <div class="breadcrumbs">
        <div class="wrap">
            <div class="wrap_float">
                <a href="#">Home</a>
                <span class="separator">/</span>
                <a href="#">Travel List Right Sidebar</a>
            </div>
        </div>
    </div>
    <div class="page contacts-page full-width">
        <div class="wrap">
            <div class="wrap_float">
                <div class="page_head">
                    <h1 class="title">
                        Let’s have a talk together
                    </h1>
                    <p class="subtitle">
                        But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was
                        born and I will give you a complete account of the system, and expound the actual teachings of the
                        great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or
                        avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue
                        pleasure rationally encounter consequences that are extremely painful.
                    </p>
                </div>
                <div class="page_body">
                    <div class="contacts-left">
                        <div class="tel">
                            <a href="#">+ 1909 202 0119</a>
                            <p>Round the clock support</p>
                        </div>
                        <div class="email">
                            <a href="#">info@hellodigi.ru</a>
                            <p>For any questions</p>
                        </div>
                        <p class="address">
                            1355 Digistrict St, Suite 909 San, Francisco, CA 10001 <br>United States
                        </p>
                        <div class="socials social-links">
                            <a href="#" class="link facebook"><span></span></a>
                            <a href="#" class="link instagram"><span></span></a>
                            <a href="#" class="link pinterest"><span></span></a>
                            <a href="#" class="link twitter"><span></span></a>
                            <a href="#" class="link youtube"><span></span></a>
                        </div>
                        <a class="btn button js-popup-open" data-href="#contact-us">Contact Us</a>
                    </div>
                    <div class="contacts-right">
                        <div class="map">
                            <!--<iframe src=""></iframe>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
