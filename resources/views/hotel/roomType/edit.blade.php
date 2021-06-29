@extends('layouts.hotel')
{{--@section('title','All Hotels')--}}

@section('content')
    <div class="container">

        <div class="col-sm card">
            <form class="form-group" action="{{route('type.update',$type->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label class="form-group"> Type name</label>
                    <input type='text' name="name" class="form-control" value="{{$type->name}}">

                </div>

                <div class="form-group">
                    <label class="form-group"> Type details</label>
                    <textarea name="details" class="form-control">{{$type->details}}</textarea>

                </div>

                <div class="form-group">
                    <label class="form-group"> Type cover</label>
                    <img width="100px" src="{{asset(STORAGE.$type->cover)}}">
                    <input type='file' name="cover" class="form-control" >

                </div>
                <div class="form-group">
                    <button class="btn btn-primary form-control">update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
