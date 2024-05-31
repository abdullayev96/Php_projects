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
                            <h4>Kurs qo'shish</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.course.store') }}" method="POST">
                                @csrf
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Course Name</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control @error('course_name') is-invalid @enderror" name="course_name">
                                        @error("course_name") <span class="invalid-feedback">{{$message}}</span>  @enderror
                                    </div>
                                </div>    
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Course Time</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control @error('course_time') is-invalid @enderror" name="course_time">
                                        @error("course_time") <span class="invalid-feedback">{{$message}}</span>  @enderror
                                    </div>
                                </div> 
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Course Practice</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control @error('course_practice') is-invalid @enderror" name="course_practice">
                                        @error("course_practice") <span class="invalid-feedback">{{$message}}</span>  @enderror
                                    </div>
                                </div> 
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Course Bonus</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control @error('course_bonus') is-invalid @enderror" name="course_bonus">
                                        @error("course_bonus") <span class="invalid-feedback">{{$message}}</span>  @enderror
                                    </div>
                                </div> 
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Course Image</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="file" class="form-control @error('course_image') is-invalid @enderror" name="course_image">
                                        @error("course_image") <span class="invalid-feedback">{{$message}}</span>  @enderror
                                    </div>
                                </div> 
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kurslar</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select name="category_id" id="" class="form-control @error('category_id') is-invalid @enderror">
                                            <option value="">Kursni tanlang</option>

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
                                    <button class="btn btn-primary" type="submit">Kursni qo'shish</button>
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