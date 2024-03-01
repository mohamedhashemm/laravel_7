@extends('layouts.app')
@include('includes.navbar')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                <h2 class="text-center bg-success p-3 text-light rounded w-50 mx-auto mt-3 ">Edit Category</h2>
                <form onsubmit="return validate()" method="POST" enctype="multipart/form-data" action="{{route('category.update')}}">
                    @csrf
                    <input type="hidden" name="old_id" value="{{$category->id}}">
                    <div class="form-group">
                        <h3 id="errorMessage" class="mb-3 text-center text-danger"></h3>
                        <label>Image</label>
                        <input type="file" value="55555" class="form-control" id="id" name="cate_image">
                    </div>
                    @error('cate_image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label>ID</label>
                        <input type="text" value="{{$category->id}}" class="form-control" id="id" name="id">
                    </div>
                    @error('id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label>Title_en</label>
                        <input type="text" value="{{$category->title_en}}" class="form-control" name="title_en">
                    </div>
                    @error('title_en')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label>Title_ar</label>
                        <input type="text" value="{{$category->title_ar}}" class="form-control" name="title_ar">
                    </div>
                    @error('title_ar')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label>Description_en</label>
                        <input type="text" value="{{$category->description_en}}" id="pass" class="form-control" name="description_en">
                    </div>
                    @error('description_en')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label>Description_ar</label>
                        <input type="text" value="{{$category->description_ar}}" id="pass" class="form-control" name="description_ar">
                    </div>
                    @error('description_ar')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label>Parent_id</label>
                        <select class="form-control" name="parent_id">
                            <option selected value="{{$category->id}}">{{$category->id}} - {{ $category->title_en }}</option>
                            <Option value="0">Main Category</Option>
                            @foreach ($allcate as $item)
                            @if ($item->id == $category->id)
                                @continue
                            @endif
                                <Option value="{{ $item->id }}">{{ $item->id }} - {{ $item->title_en }}</Option>
                            @endforeach
                        </select>
                    </div>
                    @error('parent_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <button type="submit" class="btn btn-success btn-block mb-5 mt-5" name="submit-new-user">Submit Edit Category</button>
                </form>
            </div>
        </div>
    </div>
@endsection

