@extends('layouts.adminMaster')

@section('content')
<div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">

                    <div class="col-lg-12 col-md-6 col-12">
                      <div class="card">
                        <div class="card-header">
                          <h4>Modul ko'rish</h4>
                          <a href="{{ route('admin.modul.index') }}" class="btn btn-primary me-auto">Back</a>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Id</th><td>{{ $modul->id }}</td>
                                </tr>
                                <tr>
                                    <th>Number</th><td>{{ $modul->number}}</td>
                                </tr>
                                <tr>
                                    <th>Title</th><td>{{ $modul->title}}</td>
                                </tr>
                                <tr>
                                    <th>Description</th><td>{{ $modul->description}}</td>
                                </tr>
                                <tr>
                                    <th>Body</th><td>{{ $modul->body}}</td>
                                </tr>
                                <tr>
                                    <th>Image</th><td>{{ $modul->image }}</td>
                                </tr>
                                <tr>
                                    <th>Created_at</th><td>{{ $modul->created_at }}</td>
                                </tr>
                                <tr>
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
    