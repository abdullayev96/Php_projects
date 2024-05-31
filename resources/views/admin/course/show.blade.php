@extends('layouts.adminMaster')

@section('content')
<div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-12 col-md-6 col-12">
                      <div class="card">
                        <div class="card-header">
                          <h4>Bog'lanish ko'rish</h4>
                          <a href="{{ route('admin.course.index') }}" class="btn btn-primary me-auto">Back</a>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Id</th><td>{{ $course->id }}</td>
                                </tr>
                                <tr>
                                    <th>Course Name</th><td>{{ $course->course_name }}</td>
                                </tr>
                                <tr>
                                    <th>Course Time</th><td>{{ $course->course_time}}</td>
                                </tr>
                                <tr>
                                    <th>Course Practice</th><td>{{ $course->course_practice}}</td>
                                </tr>
                                <tr>
                                    <th>Course Bonus</th><td>{{ $course->course_bonus}}</td>
                                </tr>
                                <tr>
                                    <th>Course Image</th><td>{{ $course->course_image}}</td>
                                </tr>
                                <tr>
                                    <th>Category_id</th><td>{{ $course->category_id}}</td>
                                </tr>
                                <tr>
                                    <th>Created_at</th><td>{{ $course->created_at}}</td>
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
    