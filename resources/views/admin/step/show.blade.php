@extends('layouts.adminMaster')

@section('content')
<div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-12 col-md-6 col-12">
                      <div class="card">
                        <div class="card-header">
                          <h4>Savol javob ko'rish</h4>
                          <a href="{{ route('admin.step.index') }}" class="btn btn-primary me-auto">Back</a>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Id</th><td>{{ $step->id }}</td>
                                </tr>
                                <tr>
                                    <th>Title</th><td>{{ $step->title}}</td>
                                </tr>
                                <tr>
                                    <th>Content</th><td>{{ $step->content}}</td>
                                </tr>
                                <tr>
                                    <th>Image</th><td><img src="{{asset('set/img/'. $step->image)}}" alt=""></td>
                                </tr>
                                <tr>
                                    <th>Created at</th><td>{{ $step->created_at}}</td>
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
    