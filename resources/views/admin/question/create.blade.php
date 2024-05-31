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
                            <h4>Savol javob qo'shish</h4>
                        </div>
                        <div class="card-body">
                            @if ($msg = Session::get("success"))
                                <p class="alert alert-success d-inline">{{ $msg }}</p>
                            @endif
                            <form action="{{ route('admin.question.store') }}" method="POST" >
                                @csrf
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Question</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control @error('question') is-invalid @enderror" name="question">
                                        @error("question") <span class="invalid-feedback">{{$message}}</span>  @enderror
                                    </div>
                                </div>    
                                <div class="form-group row mb-4">
                                    <label class=" text-md-right col-12 col-md-3 col-lg-3">Answer</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea name="answer" class="form-control ckeditor" id="" cols="40" rows="40"></textarea>
                                        @error("answer") <span class="invalid-feedback">{{$message}}</span>  @enderror
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
                                    <button class="btn btn-primary" type="submit">Add Question</button>
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