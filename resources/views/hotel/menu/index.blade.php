@extends('layouts.hotel')
@section('title','menu')

@section('content')
    <div class="container">
<a class="btn btn-primary" href="{{route('menu.create')}}"> add new food</a>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card-header">{{ Auth('hotel')->user()->name }} foods</div>

                    <div class="card-body">
                        <div style="position: relative; height: 100%; width: 100%;">
                            <div class="">

                            </div>
                            <div class="row">
                                @foreach($menus as $menu)
                                    <div class="card card-header m-2 {{$menu->client_id ? 'border border-danger' :''}}" >
                                        <p>{{$menu->name}}</p>
                                        <p>price : {{$menu->price}}</p>
                                        <p class="{{$menu->client_id ? 'badge badge-danger' : ''}}">{{$menu->client_id ? 'reserved' : ''}}</p>
                                        <a href="{{route('menu.edit',$menu->id)}}" class="btn btn-outline-warning m-auto"><i class="fa fa-edit"></i></a>
                                        <form class="m-auto" method="post" action="{{route('menu.destroy',$menu->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-outline-dark"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        {{--                    @endif--}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
