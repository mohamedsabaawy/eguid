@extends('layouts.app')
{{--@section('title','All Cities')--}}

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <img width="100px" src="{{asset(STORAGE.$landmark->cover)}}">
                        <span> {{$landmark->name}}</span>
                        <div class="float-right badge badge-secondary">Photo</div>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <form action="{{route('landmark.upload')}}" method="Post" class="form-group"
                              enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="landmark_id" value="{{$landmark->id}}">
                            <div class="form-group">
                                <div class="form-group">
                                    <label> Upload Photos</label>
                                </div>
                                <input class="form-control" type="file" multiple name="photos[]">
                            </div>
                            <input class="form-control btn btn-primary" type="submit" value="Upload">
                        </form>
                    </div>
                    <div class="row m-auto">
                        @foreach($landmark->Photos as $photo)
                            <div class="card card-header m-2 p-1">
                                <img class="mb-1" width="150px"  src="{{asset(STORAGE.$photo->name)}}">
                                <form class="m-auto" method="post" action="{{route('landmark.delete',$photo->id)}}">
                                    @csrf
{{--                                    @method('DELETE')--}}
                                    <button class="btn btn-outline-dark"><i class="fa fa-trash"></i></button>
                                </form>
                            </div>
                        @endforeach
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
