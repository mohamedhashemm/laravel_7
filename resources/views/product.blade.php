@extends('layouts.app')
@section('content')
    @include('includes.navbar')
    <h2 class="alert alert-primary text-center mt-3 w-50 m-auto">{{ __('language.PRODUCTS') }}</h2>
    <div class="container mt-3 text-center">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4>{{ __('language.PRODUCTS') }} <span class="badge badge-danger">{{ $mohamed->count() }}</span>
                        </h4>
                        <a href="{{ route('product.create') }}" class="btn btn-success">{{__('language.ADD_NEW_PRODUCT')}}</a>
                    </div>
                    {{-- session product --}}

                    {{-- add product  --}}
                    @if (session('success_product'))
                        <h4 class="alert alert-success text-center mt-2">{{ session('success_product') }}</h4>
                    @endif
                    {{-- edit product --}}
                    @if (session('warning_product'))
                        <h4 class="alert alert-warning text-center mt-2">{{ session('warning_product') }}</h4>
                    @endif
                    {{-- delete product  --}}
                    @if (session('danger_product'))
                        <h4 class="alert alert-danger text-center mt-2">{{ session('danger_product') }}</h4>
                    @endif

                    <table class="table table-dark">
                        @if ($mohamed->count() > 0)
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">{{ __('language.TITLE') }}</th>
                                    <th scope="col">{{ __('language.DESCRIPTION') }}</th>
                                    <th scope="col">{{ __('language.PRICE') }}</th>
                                    <th scope="col">{{ __('language.QUANTITY') }}</th>
                                    <th scope="col">{{ __('language.CREATED') }}</th>
                                    <th scope="col">{{ __('language.OPERATION') }}</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($mohamed as $x)
                                    <tr>
                                        <th scope="row">
                                            <img style="width: 90px;padding-top: 4%"
                                                src="{{ asset('products/image/' . $x->cate_image) }}" alt="no img">
                                        </th>
                                        <th scope="row" style="padding-top: 3%">{{ $x->id }}</th>
                                        <td scope="row" style="padding-top: 3%">{{ $x->title }}</td>
                                        <td scope="row" style="padding-top: 3%">{{ $x->description }}</td>
                                        <td scope="row" style="padding-top: 3%">{{ $x->price }}</td>
                                        <td scope="row" style="padding-top: 3%">{{ $x->quantity }}</td>
                                        <td scope="row" style="padding-top: 3%">{{ $x->created_at }}</td>
                                        <td scope="row" style="padding-top: 2%">
                                            <a href="{{ route('product.show', $x->id) }}" class="btn btn-success mb-1">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="{{ route('product.edit', $x->id) }}" class="btn btn-warning mb-1 ">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <a href="{{ route('product.delete', $x->id) }}" class="btn btn-danger">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </td>

                                    </tr>
                                @endforeach
                            @else
                                <h2 class="alert alert-info text-center m-3 mx-auto w-75"> {{ __('language.NODATA') }}</h2>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
