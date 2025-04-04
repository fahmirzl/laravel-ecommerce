@extends('layouts.default')

@section('title', 'Ecommerce')

@section('content')
    <x-navbar></x-navbar>
    <div class="hero-wrapper">
        <div class="hero-section">
            <div class="left-section">
                <p class="hero-title">Fresh Arrival Online</p>
                <span class="hero-description">Discover Our Newest Collection Today.</span>
                <button class="view-collection">
                    <img src="./arrowright.svg" alt="">
                    <span>View Collection</span>
                </button>
            </div>
            <div class="right-section">
                <img src="./hero-image.svg" alt="">
            </div>
        </div>
    </div>
    <div class="advantage">
        <div class="advantage-card">
            <div class="icon">
                <img src="./free-shipping.svg" alt="">
            </div>
            <div class="content">
                <span class="title">Free Shipping</span>
                <p class="description">Upgrade your style today and get FREE shipping on all orders! Don't miss out.</p>
            </div>
        </div>
        <div class="advantage-card">
            <div class="icon">
                <img src="./star-badge.svg" alt="">
            </div>
            <div class="content">
                <span class="title">Satisfaction Guarantee</span>
                <p class="description">Shop confidently with our Satisfaction Guarantee: Love it or get a refund.</p>
            </div>
        </div>
        <div class="advantage-card">
            <div class="icon">
                <img src="./shield-check.svg" alt="">
            </div>
            <div class="content">
                <span class="title">Secure Payment</span>
                <p class="description">Your security is our priority. Your payments are secure with us.</p>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .hero-wrapper {
            width: 100%;
            background-color: #f6f6f6;
        }

        .hero-section {
            max-width: 1092px;
            height: 440px;
            display: flex;
            background-color: #f6f6f6;
            margin: 0 auto;
        }

        .left-section,
        .right-section {
            width: calc(100% / 2);
            height: 100%;
            background-color: #f6f6f6;
            display: flex;
        }

        .left-section {
            justify-content: center;
            overflow: hidden;
            flex-direction: column
        }

        .hero-title {
            font-size: 32px;
            line-height: auto;
            font-weight: 600;
            letter-spacing: -3.5%;
            color: #202533;
        }

        .hero-description {
            color: #474b57;
            line-height: 175%;
            font-size: 14px;
            margin-top: 12px;
        }

        .view-collection {
            display: flex;
            background-color: #0e1422;
            width: 183px;
            height: 44px;
            column-gap: 6px;
            padding: 12px 24px;
            border-radius: 4px;
            align-items: center;
            justify-content: center;
            border: none;
            flex-direction: row-reverse;
            margin-top: 48px;
            margin-left: 2px;
        }

        .view-collection span {
            font-size: 14px;
            line-height: 175%;
            color: white
        }

        .right-section {
            align-items: center;
            justify-content: end;
            overflow: hidden;
        }

        .right-section img {
            padding-top: 66px;
            object-fit: cover;
        }

        .advantage {
            width: 1092px;
            height: 218px;
            padding-bottom: 48px;
            margin: 0 auto;
            margin-top: 88px;
            display: flex;
            flex-wrap: wrap;
        }

        .advantage-card {
            display: flex;
            flex-basis: 328px;
            flex-grow: 1;
            height: 218px;
            flex-direction: column;
        }

        .advantage-card .icon {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f6f6f6;
            border-radius: 50%;
            width: 48px;
            height: 48px;
            column-gap: 10px;
            padding-inline: 10px;
        }

        .advantage-card .content {
            margin-top: 24px;
            width: 100%;
        }

        .advantage-card .content .title {
            color: #202533;
            font-size: 16px;
            font-weight: 500;
            line-height: auto;
        }

        .advantage-card .content .description {
            margin-top: 12px;
            color: #5c5f6a;
            font-size: 14px;
            line-height: 175%;
            padding-right: 56px;
        }
    </style>
@endpush

@push('scripts')
    <script></script>
@endpush
