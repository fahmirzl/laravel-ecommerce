@extends('layouts.admin')

@section('title', 'Edit Product')
@section('before', 'Products')
@section('before_link', './')
@section('after', 'Edit Product')

@section('main')
    <div class="products">
        <div class="container">
            <div class="list-view">
                <span class="title">Edit Product</span>
            </div>
            <form action="{{ route('update_products', $product->id) }}" class="input-form" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="left-section">
                    <div class="input-control">
                        <label for="product">Product</label>
                        <input type="text" id="product" name="product" value="{{ $product->product }}">
                        @if ($errors->has('product'))
                            <small class="error">{{ $errors->first('product') }}</small>
                        @endif
                    </div>
                    <div class="input-control">
                        <label for="price">Price</label>
                        <input type="text" id="price" name="price" value="{{ $product->price }}">
                        @if ($errors->has('price'))
                            <small class="error">{{ $errors->first('price') }}</small>
                        @endif
                    </div>
                    <div class="input-control">
                        <label for="stock">Stock</label>
                        <input type="text" id="stock" name="stock" value="{{ $product->stock }}">
                        @if ($errors->has('stock'))
                            <small class="error">{{ $errors->first('stock') }}</small>
                        @endif
                    </div>
                    <div class="input-control">
                        <label for="category">Category</label>
                        <input type="text" id="category" name="category" value="{{ $product->category_id }}">
                        @if ($errors->has('category'))
                            <small class="error">{{ $errors->first('category') }}</small>
                        @endif
                    </div>
                </div>
                <div class="right-section">
                    <div class="input-control">
                        <label for="product">Image</label>
                        <input type="file" class="file-input" name="image" value="{{ $product->image }}">
                        @if ($errors->has('image'))
                            <small class="error">{{ $errors->first('image') }}</small>
                        @endif
                    </div>
                </div>
                <button class="btn-add" type="submit"><span>Save Product</span></button>
            </form>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .products {
            height: calc(100vh - 72px);
            padding-left: 48px;
            padding-top: 64px;
            padding-right: 64px;
            padding-bottom: 90px;
        }

        .products .container {
            width: 100%;
            height: 100%;
            background-color: white;
            border: 1px solid #e9e9eb;
            border-radius: 8px;
            position: relative;
        }

        .list-view {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-left: 48px;
            padding-right: 40px;
            height: calc(40px + 24px + 24px);
            border-bottom: 1px solid #e9e9eb;
        }

        .list-view .title {
            color: #0e1422;
            font-weight: 500;
            font-size: 18px;
            line-height: auto;
        }

        .input-form {
            width: 100%;
            display: flex;
            padding-left: 48px;
            height: 200px;
            margin-top: 38px;
            gap: 74px;
        }

        .input-form .left-section {
            display: flex;
            flex-direction: column;
            row-gap: 16px;
        }

        .input-control {
            display: flex;
            flex-direction: column;
            width: 320px;
            gap: 8px;
        }

        .input-control label {
            width: 100%;
            color: #474b57;
            font-size: 14px;
            font-weight: 500;
            line-height: 175%;
            margin-left: 1.5px;
        }

        .input-control input[type="text"] {
            height: 45px;
            border: none;
            outline: none;
            width: 100%;
            display: flex;
            column-gap: 8px;
            padding: 10px 15px;
            border-radius: 6px;
            border: 1px solid #e6e7e8;
            font-weight: 500;
            font-size: 14px;
            line-height: 175%;
            color: #0e1422;
        }

        #product {
            justify-content: start;
            align-items: flex-start;
            height: 120px;
            overflow-y: auto;
        }

        .btn-add {
            position: absolute;
            bottom: 32px;
            right: 40px;
            width: 138px;
            height: 44px;
            padding: 12px 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            column-gap: 6px;
            border-radius: 4px;
            background-color: #0e1422;
            border: none;
            outline: none;
            cursor: pointer;
        }

        .btn-add span {
            color: white;
            font-weight: 500;
            font-size: 14px;
            line-height: 175%;
        }

        .file-input {
            appearance: none;
            -webkit-appearance: none;
            padding: 10px 14px;
            border: 1px solid #e6e7e8;
            border-radius: 6px;
            color: #474b57;
            font-size: 14px;
            cursor: pointer;
        }

        .file-input::file-selector-button {
            padding: 6px 12px;
            margin-right: 10px;
            border: none;
            border-radius: 12px;
            color: #474b57;
            font-weight: 500;
            cursor: pointer;
        }

        .error {
            color: #be1313;
            margin-top: 5px;
        }
    </style>
@endpush
