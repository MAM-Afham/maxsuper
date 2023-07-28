
@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card p-3">
                <div class="card-header">
                <h3>Add Products
                    <a href="{{ url('admin/products')}}" class="btn btn-danger btn-sm float-end">Back</a>
                </h3>
                </div>
                <div class="card-body">
                    <form action="admin/products" method="post" enctype="multipart/form-data">
                        @csrf
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                            Home
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="seotags-tab" data-bs-toggle="tab" data-bs-target="#seotags-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                            SEO Tags
                           </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="details-tab" data-bs-toggle="tab" data-bs-target="#details-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">
                            Details
                           </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="image-tab" data-bs-toggle="tab" data-bs-target="#image-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">
                             Product  Images
                             </button>
                          </li>

                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade border-p-3 show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                            <div class="mb-3 mt-4">
                                <label for="Category">Category</label>
                                <select name="category_id" id="" class="form-control">
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                               </select>

                            </div>
                            <div class="mb-3">
                                <label for="">Product Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Product Slug</label>
                                <input type="text" name="slug" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label >Select Category</label>
                                <select name="brand" id="" class="form-control">
                                @foreach ($brands as $brand)
                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                                @endforeach
                               </select>

                            </div>
                            <div class="mb-3">
                                <label for="">Small Description</label>
                                <textarea name="small_description" id="" rows="4" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="">Description</label>
                                <textarea name="description" id="" rows="4" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="tab-pane fade border-p-3" id="seotags-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                            <div class="mb-3 mt-3">
                                <label for="">Meta  Title</label>
                                <input type="text" name="meta_title" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Meta Description</label>
                                <textarea name="meta_description" id="" rows="4" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="">Meta Keyword</label>
                                <textarea name="meta_keyword" id="" rows="4" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="tab-pane fade border-p-3" id="details-tab-pane" role="tabpanel" aria-labelledby="details-tab" tabindex="0">
                            <div class="row mt-3">
                                <div class="col-md-4 ">
                                    <div class="mb-3">
                                    <label for="">Original Price</label>
                                    <input type="text" name="original_price" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                    <label for="">Selling Price</label>
                                    <input type="text" name="selling_price" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                    <label for="">Quantity </label>
                                    <input type="number" name="quantity" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                    <label for="">Trending</label>
                                    <input type="checkbox" name="trending" style="width: 50px;height:50px;" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                    <label for="">Status</label>
                                    <input type="checkbox" name="status" style="width: 50px;height:50px;" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade border-p-3" id="image-tab-pane" role="tabpanel" aria-labelledby="image-tab" tabindex="0">
                            <div class="row mt-3">
                                <div class="col-md-4 ">
                                    <div class="mb-3">
                                    <label for="">Images</label>
                                    <input type="file" multiple name="image" class="form-control">
                                    </div>
                                </div>


                                </div>
                            </div>
                        </div>

                      </div>
                      <div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
