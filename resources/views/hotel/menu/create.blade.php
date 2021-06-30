@extends('layouts.hotel')
@section('title',auth('hotel')->user()->restaurant == null ? 'create room type' : 'create table type')

@section('content')
    <div class="container">

        <div class="col-sm card">
            <form class="form-group" action="{{route('menu.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="form-group"> Food name</label>
                    <input type='text' name="name" class="form-control">

                </div>

                <div class="form-group">
                    <label class="form-group"> Food details</label>
                    <textarea name="details" class="form-control"></textarea>

                </div>

                <div class="form-group">
                    <label class="form-group"> Food price</label>
                    <input type='number' name="price" class="form-control">

                </div>

                <div class="form-group">
                    <label class="form-group"> Food cover</label>
                    <input type='file' name="cover" class="form-control">

                </div>
                <div class="form-group">
                    <button class="btn btn-primary form-control">add</button>
                </div>
            </form>
        </div>
    </div>
@endsection
