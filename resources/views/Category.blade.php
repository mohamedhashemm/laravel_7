@extends('layouts.app')
@section('content')
    @include('includes.navbar')
    <h2 class="alert alert-primary text-center mt-3 w-50 m-auto">{{ __('language.CATEGORIES') }}</h2>
    <div class="container mt-3 text-center">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4>{{ __('language.CATEGORIES') }} <span class="badge badge-danger">{{ $ahmed->count() }}</span>
                        </h4>
                        <a href="{{ route('category.create') }}" class="btn btn-success">{{__( 'language.ADD_NEW_CATEGORY')}}</a>
                    </div>
                    {{-- session category --}}
                    {{-- @if (session('success'))
                        <h4 class="alert alert-success text-center mt-2">{{ session('success') }}</h4>
                    @endif
                    @if (session('warning'))
                        <h4 class="alert alert-warning text-center mt-2">{{ session('warning') }}</h4>
                    @endif
                    @if (session('danger'))
                        <h4 class="alert alert-danger text-center mt-2">{{ session('danger') }}</h4>
                    @endif --}}
                    <table class="table table-dark">
                        @if ($ahmed->count() > 0)
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">{{ __('language.TITLE') }}</th>
                                    <th scope="col">{{ __('language.DESCRIPTION') }}</th>
                                    <th scope="col">{{ __('language.PARENT') }}</th>
                                    <th scope="col">{{ __('language.CREATED') }}</th>
                                    <th scope="col">{{ __('language.OPERATION') }}</th>


                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($ahmed as $x)
                                    <tr>
                                        <th scope="row">
                                            <img style="width: 90px;padding-top: 1%;"
                                                src="{{ asset('categories/image/' . $x->cate_image) }}" alt="no img">
                                        </th>
                                        <th scope="row" style="padding-top: 5%">{{ $x->id }}</th>
                                        <td scope="row" style="padding-top: 5%">{{ $x->title }}</td>
                                        <td scope="col" style="padding-top: 5%">{{ $x->description }}</td>
                                        <td scope="row" style="padding-top: 5%">{{ $x->parent_id }}</td>
                                        <td scope="row" style="padding-top: 5%">{{ $x->created_at }}</td>
                                        <td scope="row" style="padding-top: 4%">
                                            <a href="{{ route('category.show', $x->id) }}" class="btn btn-success mb-1">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="{{ route('category.edit', $x->id) }}" class="btn btn-warning mb-1">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <a href="{{ route('category.delete', $x->id) }}" class="btn btn-danger">
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
        @endsection
