@extends('layouts.adminMaster')

@section('content')
<div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">

                    <div class="col-lg-12 col-md-6 col-12">
                      <div class="card">
                        <div class="card-header">
                          <h4>Kurslar ko'rish</h4>
                          <a href="{{ route('admin.category.index') }}" class="btn btn-primary me-auto">Back</a>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Id</th><td>{{ $category->id }}</td>
                                </tr>
                                <tr>
                                    <th>Name</th><td>{{ $category->name }}</td>
                                </tr>
                                <tr>
                                    <th>Image</th><td>{{ $category->image }}</td>
                                </tr>
                                <tr>
                                    <th>Slug</th><td>{{ $category->slug }}</td>
                                </tr>
                                <tr>
                                    <th>Created_at</th><td>{{ $category->created_at }}</td>
                                </tr>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
         </section>
</div>

@endsection
    