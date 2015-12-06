<!-- resources/views/items/create.blade.php -->

@extends('layouts.items')

@section('content')

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')
        <!-- New Item Form -->
        <form action="/items" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <!-- Item Description -->
            <div class="form-group">
                <label for="item-desc" class="col-sm-3 control-label">Item</label>
                <div class="col-sm-6">
                    <input type="text" name="description" id="item-desc" class="form-control">
                </div>
            </div>
            <!-- Item Quantity -->
            <div class="form-group">
                <label for="item-qty" class="col-sm-3 control-label">Quantity</label>
                <div class="col-sm-6">
                    <input type="text" name="quantity" id="item-qty" class="form-control">
                </div>
            </div>
            <!-- Item Price -->
            <div class="form-group">
                <label for="item-price" class="col-sm-3 control-label">Price</label>
                <div class="col-sm-6">
                    <input type="text" name="price" id="item-price" class="form-control">
                </div>
            </div>

            <!-- Add Item Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Item
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection