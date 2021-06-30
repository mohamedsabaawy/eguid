@extends('layouts.hotel')
{{--@section('title','All Hotels')--}}

@section('content')
    <div class="container">

        <div class="col-sm card">
            <form class="form-group" action="{{route('menu.update',$menu->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label class="form-group"> Food name</label>
                    <input type='text' name="name" class="form-control" value="{{$menu->name}}">

                </div>

                <div class="form-group">
                    <label class="form-group"> Food details</label>
                    <textarea name="details" class="form-control">{{$menu->details}}</textarea>

                </div>
                <div class="form-group">
                    <label class="form-group"> Food price</label>
                    <input type='number' name="price" class="form-control" value="{{$menu->price}}">
                </div>

                <div class="form-group">
                    <label class="form-group"> Food cover</label>
                    <img width="100px" src="{{asset(STORAGE.$menu->cover)}}">
                    <input type='file' name="cover" class="form-control" >

                </div>
                <div class="form-group">
                    <button class="btn btn-primary form-control">update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
