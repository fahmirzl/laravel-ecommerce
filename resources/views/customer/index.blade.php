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
    <div class="products">
        <div class="options">
            <span onclick="setActiveOptions(this)" class="active">Featured</span>
            <span onclick="setActiveOptions(this)">Latest</span>
        </div>
        <div class="content">
            <div class="product-card">
                <div class="preview">
                    <img src="./product-test.png" alt="">
                </div>
                <div class="information">
                    <div class="title">Elegant Ebony Sweatshirts</div>
                    <div class="pricing">
                        <div class="availability">IN STOCK</div>
                        <div class="price">$35.00</div>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <div class="preview">
                    <img src="./product-test.png" alt="">
                </div>
                <div class="information">
                    <div class="title">Elegant Ebony Sweatshirts</div>
                    <div class="pricing">
                        <div class="availability">IN STOCK</div>
                        <div class="price">$35.00</div>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <div class="preview">
                    <img src="./product-test.png" alt="">
                </div>
                <div class="information">
                    <div class="title">Elegant Ebony Sweatshirts</div>
                    <div class="pricing">
                        <div class="availability">IN STOCK</div>
                        <div class="price">$35.00</div>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <div class="preview">
                    <img src="./product-test.png" alt="">
                </div>
                <div class="information">
                    <div class="title">MOCKUP Black</div>
                    <div class="pricing">
                        <div class="availability">IN STOCK</div>
                        <div class="price">$35.00</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
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

        .products {
            max-width: 1116px;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0 auto;
            margin-top: 72px;
            padding-bottom: 80px;
        }

        .products .options {
            height: 31px;
            display: flex;
            column-gap: 16px;
            align-items: center;
        }

        .products .options span {
            cursor: pointer;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            column-gap: 10px;
            padding: 3px 16px;
            border-radius: 100px;
            font-size: 14px;
            line-height: 175%;
            color: #5c5f6a;
        }

        .products .options span.active {
            color: #202533;
            font-weight: 500;
            border: 1px solid #e9e9eb;
        }

        .products .content {
            margin-top: 48px;
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            row-gap: 40px;
            column-gap: 20px;
        }

        .product-card {
            width: 264px;
            height: 434px;
            display: flex;
            flex-direction: column;
            row-gap: 24px;
            padding: 16px 8px;
            border-radius: 4px;
        }

        .product-card .preview {
            background-color: #f6f6f6;
            border-radius: 8px;
            width: 100%;
            height: 312px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .information {
            width: 100%;
            display: flex;
            flex-direction: column;
            row-gap: 12px;
            justify-content: center;
        }

        .information .title {
            font-size: 15px;
            line-height: 175%;
            font-weight: 600;
            color: #0e1422;
        }

        .information .pricing {
            width: 100%;
            display: flex;
            column-gap: 16px;
            align-items: center;
            margin-left: -1.5px;
        }

        .information .pricing .availability {
            cursor: pointer;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            column-gap: 8px;
            padding: 1px 16px;
            border-radius: 100px;
            font-size: 13px;
            line-height: 175%;
            color: #0e1422;
            border: 1px solid #e6e7e8;
            font-weight: 500;
        }

        .information .pricing .price {
            color: #474b57;
            font-size: 15px;
            margin-top: -1.5px;
        }
    </style>
@endpush

@push('scripts')
    <script>
        function setActiveOptions(span) {
            document.querySelectorAll('span.active').forEach(el => {
                if (el !== span) {
                    el.classList.remove('active');
                }
            });

            span.classList.toggle('active');
        }
    </script>
@endpush
