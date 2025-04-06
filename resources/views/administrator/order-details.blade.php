@extends('layouts.admin')

@section('title', 'Order Detail')
@section('before', 'Orders')
@section('before_link', '/v1/admin/orders')
@section('after', 'Order Detail')

@section('main')
    <div class="order-detail">
        <div class="container">
            <div class="list-view">
                <span class="title">Order #{{ $order_id }}</span>
                <div class="group">
                    <div class="search-data">
                        <img src="{{ asset('search.svg') }}">
                        <input type="text" placeholder="Search order detail" onkeydown="search(event, {{ $order_id }})" class="search-item"
                            id="search" value="{{ request('search') }}" autocomplete="off">
                    </div>
                </div>
            </div>
            <table class="data-table">
                <thead>
                    <th style="width: 160px"><img src="{{ asset('sort-table.svg') }}" class="sort-table"></th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Sub Total</th>
                </thead>
                <tbody>
                    @foreach ($orderDetails as $orderDetail)
                        <tr class="data-row">
                            <td class="data-image">
                                <div class="data image">
                                    <img src="{{ asset('storage/' . $orderDetail->product->image) }}">
                                </div>
                            </td>
                            <td>
                                <div class="data">
                                    {{ $orderDetail->product->product }}
                                </div>
                            </td>
                            <td>
                                <div class="data">
                                    {{ number_format($orderDetail->product->price, 0, ',', '.') }} IDR
                                </div>
                            </td>
                            <td>
                                <div class="data">
                                    {{ $orderDetail->quantity }}
                                </div>
                            </td>
                            <td>
                                <div class="data">
                                    {{ number_format($orderDetail->quantity * $orderDetail->product->price, 0, ',', '.') }}
                                    IDR
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .order-detail {
            height: calc(100vh - 72px);
            padding-left: 48px;
            padding-top: 64px;
            padding-right: 64px;
            padding-bottom: 90px;
        }

        .order-detail .container {
            width: 100%;
            height: 100%;
            background-color: white;
            border: 1px solid #e9e9eb;
            border-radius: 8px;
        }

        .list-view {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-left: 48px;
            padding-right: 40px;
            margin-block: 24px;
            height: 40px;
        }

        .list-view .title {
            color: #0e1422;
            font-weight: 500;
            font-size: 18px;
            line-height: auto;
        }

        .list-view .group {
            display: flex;
            column-gap: 16px;
            height: 100%;
            align-items: center;
        }

        .list-view .group .btn-add {
            cursor: pointer;
            width: 124px;
            height: calc(100% - 2px);
            border: none;
            outline: none;
            padding: 12px 20px;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            column-gap: 6px;
            background-color: #0e1422;
            color: #fff;
            font-weight: 500;
            font-size: 14px;
        }

        .btn-add span {
            position: relative;
            bottom: 1px;
        }

        .search-data {
            width: 242px;
            height: 100%;
            border: 1px solid #e6e7e8;
            display: flex;
            border-radius: 6px;
            column-gap: 8px;
            padding: 10px 15px;
        }

        .search-data .search-item {
            border: none;
            outline: none;
            width: 100%;
            height: 100%;
            font-size: 14px;
            color: #878a92;
            font-weight: 500;
            line-height: 175%;
            display: flex;
            align-items: center;
            transition: all 0.15s linear;
        }

        .search-data .search-item:focus {
            color: #0e1422;
        }

        .data-table {
            width: 100%;
            margin-top: 24px;
            border-collapse: collapse;
        }

        .data-table thead {
            width: 100%;
            height: 44px;
        }

        .data-table th {
            color: #5c5f6a;
            font-weight: 500;
            font-size: 14px;
            line-height: 175%;
            border-top: 1px solid #e6e7e8;
            border-bottom: 1px solid #e6e7e8;
            text-align: center;
        }

        .sort-table {
            margin-top: 5px;
        }

        .data-table tbody {
            width: 100%;
            margin-top: 32px;
        }

        .data-row {
            height: 80px;
            width: 100%;
        }

        .data-row:not(:last-child) {
            border-bottom: 1px solid #e6e7e8;
        }

        .data {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #5c5f6a;
            font-weight: 500;
            line-height: 175%;
            font-size: 14px;
        }

        .data-image {
            width: 100%;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .data.image {
            width: 48px;
            height: 48px;
            background-color: #f6f6f6;
            border-radius: 4px;
        }

        .data.image img {
            width: 32px;
            height: 46px;
        }

        .complete button {
            border: none;
            background-color: transparent;
            width: fit-content;
            outline: none;
            cursor: pointer;
        }

        .data.action {
            column-gap: 12px;
        }
    </style>
@endpush

@push('scripts')
    <script>
        function search(event, orderId) {
            if (event.key === "Enter") {
                window.location.href = "?order_id=" + encodeURIComponent(orderId) +
                    "&search=" + encodeURIComponent(event.target.value);
            }
        }
    </script>
@endpush
