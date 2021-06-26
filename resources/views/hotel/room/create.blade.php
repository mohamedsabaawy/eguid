@extends('layouts.hotel')
@section('title',(auth('hotel')->user()->restaurant == null ? 'create room' : 'create table'))

@section('content')
    <div class="container">

        <div class="col-sm card">
            <form class="form-group" action="{{route('room.store')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label class="form-group"> {{auth('hotel')->user()->restaurant == null ? 'Room' : 'Table'}} Number</label>
                    <input type='number' value="{{old('name')}}" name="name" class="form-control @error('name') is-invalid @enderror">

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror

                </div>

                <div class="form-group">
                    <label class="form-group"> number Of rooms </label>
                    <input type='number' value="{{old('number')}}" name="number" class="form-control @error('number') is-invalid @enderror">
                    @error('number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-group"> Price</label>
                    <input type='number' value="{{old('price')}}" name="price" class="form-control @error('price') is-invalid @enderror">
                    @error('price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-group"> {{auth('hotel')->user()->restaurant == null ? 'Room' : 'Table'}} Type</label>
                    <select class="form-control @error('price') is-invalid @enderror" name="type_id">
                        <option></option>
                        @foreach($types as $type)
                            <option value="{{$type->id}}">{{$type->name}}</option>
                        @endforeach
                    </select>

                    @error('type_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror

                </div>

                <div class="form-group">
                    <button class="btn btn-primary form-control">add</button>
                </div>
            </form>
        </div>
    </div>
@endsection
