@extends('layouts.adminMaster')

@section('content')

<div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Step o'zgartirish</h4>
                        </div>
                            <form action="{{ route('admin.step.update',$step->id) }}" method="POST" >
                                @method('PUT')
                                @csrf
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                    <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{$step->title}}" name="title">
                                    @error("title") <span class="invalid-feedback">{{$message}}</span>  @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                                    <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control @error('content') is-invalid @enderror" value="{{$step->content}}" name="content">
                                    @error("content") <span class="invalid-feedback">{{$message}}</span>  @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                                    <div class="col-sm-12 col-md-7">
                                    <input type="file" class="form-control @error('image') is-invalid @enderror" value="{{$step->image}}" name="image">
                                    @error("image") <span class="invalid-feedback">{{$message}}</span>  @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kurslar</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select name="category_id" id="" class="form-control">
                                            <option value="">Kursni tanlang</option>
                                            @foreach($categorys as $category)
                                                <option {{ $step->category_id == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary" type="submit">Step o'zgartirish</button>
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