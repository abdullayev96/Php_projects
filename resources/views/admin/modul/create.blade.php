@extends('layouts.adminMaster')

@section('content')

      <!-- Main Content -->
      <div class="main-content">
      <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Modul qo'shish</h4>
                        </div>
                        <div class="card-body">
                            @if ($msg = Session::get("success"))
                                <p class="alert alert-success d-inline">{{ $msg }}</p>
                            @endif
                            <form action="{{ route('admin.modul.store') }}" method="POST" >
                                @csrf
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Number</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control @error('number') is-invalid @enderror" name="number">
                                        @error("number") <span class="invalid-feedback">{{$message}}</span>  @enderror
                                    </div>
                                </div>    
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title">
                                        @error("title") <span class="invalid-feedback">{{$message}}</span>  @enderror
                                    </div>
                                </div> 
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control @error('description') is-invalid @enderror" name="description">
                                        @error("description") <span class="invalid-feedback">{{$message}}</span>  @enderror
                                    </div>
                                </div> 
                                <div class="form-group row mb-4">
                                    <label class=" text-md-right col-12 col-md-3 col-lg-3">Body</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea name="body" class="form-control ckeditor" id="" cols="40" rows="40"></textarea>
                                        @error("body") <span class="invalid-feedback">{{$message}}</span>  @enderror
                                    </div>
                                </div>   
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                                        @error("image") <span class="invalid-feedback">{{$message}}</span>  @enderror
                                    </div>
                                </div> 
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select name="category_id" id="" class="form-control @error('category_id') is-invalid @enderror">
                                            <option value="">Select Category</option>

                                            @foreach($categorys as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        @error("category_id") <span class="invalid-feedback">{{$message}}</span>  @enderror

                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary" type="submit">Add modul</button>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section> 
      </div>

@endsection