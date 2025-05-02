@extends('layouts.admin')

@section('title', 'Customers')
@section('before', 'Admin')
@section('after', 'Customers')

@section('main')
    <div class="customers">
        <div class="container">
            <div class="list-view">
                <span class="title">Customers</span>
                <div class="group">
                    <div class="search-data">
                        <img src="{{ asset('search.svg') }}">
                        <input type="text" onkeydown="search(event)" placeholder="Search customers" class="search-item" id="search-orders"
                            value="{{ request('search') }}" autocomplete="off">
                    </div>
                </div>
            </div>
            <table class="data-table">
                <thead>
                    <th style="width: 150px"><img src="{{ asset('sort-table.svg') }}" class="sort-table"></th>
                    <th>Name</th>
                    <th style="width: 350px">Email</th>
                    <th style="width: 280px">Role</th>
                    <th style="width: 380px">Created At</th>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                        <tr class="data-row">
                            <td>
                                <div class="data">
                                    {{ $loop->iteration }}
                                </div>
                            </td>
                            <td>
                                <div class="data">
                                    {{ $customer->name }}
                                </div>
                            </td>
                            <td>
                                <div class="data">
                                    {{ $customer->email }}
                                </div>
                            </td>
                            <td>
                                <div class="data" style="text-transform: capitalize">
                                    {{ $customer->role }}
                                </div>
                            </td>
                            <td>
                                <div class="data" style="text-transform: capitalize">
                                    {{ \Carbon\Carbon::parse($customer->created_at)->format('d M Y, H:i') }} WIB
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
        .customers {
            height: calc(100vh - 72px);
            padding-left: 48px;
            padding-top: 64px;
            padding-right: 64px;
            padding-bottom: 90px;
        }

        .customers .container {
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
    </style>
@endpush

@push('scripts')
    <script type="text/javascript">
        function search(event) {
            if (event.key === "Enter") {
                window.location.href = "?search=" + encodeURIComponent(event.target.value);
            }
        }
    </script>
