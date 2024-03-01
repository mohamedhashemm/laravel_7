@extends('layouts.app')
@include('includes.navbar')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                <h2 class="text-center bg-success p-3 text-light rounded w-50 mx-auto mt-3 ">Add New Product</h2>

                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}

                <form {{-- onsubmit="return validate()" --}} method="POST" enctype="multipart/form-data" action="{{ route('product.save') }}">
                    @csrf
                    <div class="form-group">
                        <h3 id="errorMessage" class="mb-3 text-center text-danger"></h3>
                        <label>Image</label>
                        <input type="file" class="form-control" name="cate_image">
                    </div>
                    @error('cate_image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label>ID</label>
                        <input type="text" class="form-control" id="id" name="id">
                    </div>
                    @error('id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label>Title_en</label>
                        <input type="text" class="form-control" name="title_en">
                    </div>
                    @error('title_en')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label>Title_ar</label>
                        <input type="text" class="form-control" name="title_ar">
                    </div>
                    @error('title_ar')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label>Description_en</label>
                        <input type="text" id="pass" class="form-control" name="description_en">
                    </div>
                    @error('description_en')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label>Description_ar</label>
                        <input type="text" id="pass" class="form-control" name="description_ar">
                    </div>
                    @error('description_ar')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" id="pass" class="form-control" name="price">
                    </div>
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="text" id="pass" class="form-control" name="quantity">
                    </div>
                    @error('quantity')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <button type="submit" class="btn btn-success btn-block mb-5" name="submit-new-user">Create New category</button>
                </form>
            </div>
        </div>
    </div>
@endsection
