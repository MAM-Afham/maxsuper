@extends('layouts.admin')
@section('content')
<div class="row">

<div class="col-md-12 ">
    <div class="card">
        <div class="card-header">
            <h3>
               Edit Category
                <a href="{{url('admin/category')}}" class="btn btn-primary text-white btn-sm float-end">Back</a>
            </h3>
        </div>
        <div class="card-body">
            <form action="{{url('admin/category'.$category->id)}}" method="POST" enctype="multipart/form-data">
            <div class="row">
         @csrf
         @method('PUT')
                <div class="col-md-6 mb-3 ">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $category->name}}">
                    @error('name')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class=" col-md-6 mb-3 ">
                    <label for="">Slug</label>
                    <input type="text" name="slug" class="form-control" value="{{ $category->slug}}">
                    @error('slug')
                    <small class="text-danger">{{$message}}</small>
                @enderror
                </div>
                <div class="col-md-12 mb-3 ">
                    <label for="">Description</label>

                    <textarea name="description"  rows="3" class="form-control" >{{ $category->name}}</textarea>
                    @error('description')
                    <small class="text-danger">{{$message}}</small>
                @enderror
                </div>
                <div class=" col-md-6 mb-3 ">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control">
                    <img src="{{asset('uploads/category/'.$category->image)}}" alt="" width="60px" height="60px">
                    @error('image')
                    <small class="text-danger">{{$message}}</small>
                @enderror
                </div>
                <div class=" col-md-6 mb-3 ">
                    <label for="">Status</label>
                    <input type="checkbox" name="status" class="form-check-input" {{$category->status == 1 ?'hidden':''}}>
                    @error('status')
                    <small class="text-danger">{{$message}}</small>
                @enderror
                </div>
                <div class=" col-md-6 mb-3 ">
                    <h4>SEO Tags</h4>
                </div>
                <div class=" col-md-12 mb-3 ">
                    <label for="">Meta Title</label>
                    <input type="text" name="meta_title" class="form-control" value="{{$category->meta_title}}">
                    @error('meta_title')
                    <small class="text-danger">{{$message}}</small>
                @enderror
                </div>
                <div class=" col-md-12 mb-3 ">
                    <label for="">Meta Keyword</label>
                    <input type="text" name="meta_keyword" class="form-control" value="{{$category->meta_keyword}}">
                    @error('meta_keyword')
                    <small class="text-danger">{{$message}}</small>
                @enderror
                </div>
                <div class="col-md-12 mb-3 ">
                    <label for="">Meta Description</label>

                    <textarea name="meta_description"  rows="3" class="form-control">{{ $category->description}}</textarea>
                    @error('meta_description')
                    <small class="text-danger">{{$message}}</small>
                @enderror
                </div>

                <div class="col-md-12 mb-3 ">


                    <button type="submit" class="btn btn-primary text-white float-end">Update</button>
                </div>



            </form>

        </div>
    </div>
</div>
</div>
@endsection
