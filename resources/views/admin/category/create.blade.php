@extends('layouts.adminMaster')

@section('content')

<div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Kurslar qo'shish</h4>
                        </div>
                        <div class="card-body">
                            @if ($msg = Session::get("success"))
                                <p class="alert alert-success d-inline">{{ $msg }}</p>
                            @endif
                            <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                                    <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                                    @error("name") <span class="invalid-feedback">{{$message}}</span>  @enderror
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
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary" type="submit">Add Category</button>
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