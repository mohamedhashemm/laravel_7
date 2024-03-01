@extends('layouts.app')
@include('includes.navbar')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10 m-auto">
                <table class="table table-dark">
                    <thead class="text-center">

                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">ID</th>
                            <th scope="col">{{__('language.TITLE')}}</th>
                            <th scope="col">{{__('language.DESCRIPTION')}}</th>
                            <th scope="col">{{__('language.PRICE')}}</th>
                            <th scope="col">{{__('language.QUANTITY')}}</th>
                            <th scope="col">{{__('language.CREATED')}}</th>
                            <th scope="col">{{__('language.OPERATION')}}</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        {{-- @foreach ($children as $x) --}}
                        <tr>
                            <th scope="row">
                                <img style="width: 70px" src="{{asset('products/image/'.$product->cate_image)}}" alt="no img">
                            </th>
                            <th scope="row">{{$product->id}}</th>
                            <td scope="row">{{$product->title_en}}</td>
                            <td scope="row">{{$product->description_en}}</td>
                            <td scope="row">{{$product->price}}</td>
                            <td scope="row">{{$product->quantity}}</td>
                            <td scope="row">{{$product->created_at}}</td>
                            <td scope="row">
                                <a href="{{route('product')}}" class="btn btn-success">
                                    Back
                                </a>
                            </td>
                        </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
