@extends('frontend.user.layouts.master')
@section('stock')
active
@endsection

@section('head')
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

@endsection
@section('content')
    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title">Add A New Item</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="form-group col-xs-8">
                    <label for="ItemName">Item Name</label>
                    <input type="email" class="form-control" id="ItemName" placeholder="Enter Item Name">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-xs-1">
                    <label>Quantity</label>
                    <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
@endsection