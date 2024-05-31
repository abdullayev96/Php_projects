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
                            <form action="{{ route('admin.contact.update',$contact->id) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">FirstName</label>
                                    <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control @error('firstname') is-invalid @enderror" value="{{$contact->firstname}}" name="firstname">
                                    @error("firstname") <span class="invalid-feedback">{{$message}}</span>  @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">LastName</label>
                                    <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control @error('lastname') is-invalid @enderror" value="{{$contact->lastname}}" name="lastname">
                                    @error("lastname") <span class="invalid-feedback">{{$message}}</span>  @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Phone</label>
                                    <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" value="{{$contact->phone}}" name="phone">
                                    @error("phone") <span class="invalid-feedback">{{$message}}</span>  @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kurslar</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select name="category_id" id="" class="form-control">
                                            <option value="">Kursni tanlang</option>
                                            @foreach($categorys as $category)
                                                <option {{ $contact->category_id == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
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