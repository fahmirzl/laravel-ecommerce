@extends('layouts.default')

@section('title', 'Ecommerce')

@section('content')
    <x-navbar></x-navbar>
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
@endsection

@push('styles')
    <style>
        .hero-section {
            width: 100%;
            height: 440px;
            padding-inline: 178px;
            display: flex;
            background-color: #f6f6f6;
        }

        .left-section, .right-section {
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
    </style>
@endpush

@push('scripts')
    <script>

    </script>
@endpush