@extends('layouts.adminMaster')

@section('content')
<div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">

                    <div class="col-lg-12 col-md-6 col-12">
                      <div class="card">
                        <div class="card-header">
                          <h4>Bog'lanish</h4>
                          <a href="{{ route('admin.course.create') }}" class="btn btn-success">Create</a>
                            <a href="{{ route('admin.course.export') }}" class="btn btn-warning">Export</a>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                          @if(Session::has('deleted'))
                            <p class="alert alert-danger">{{ Session::get('deleted') }}</p>
                          @endif
                          @if(Session::has('created'))
                            <p class="alert alert-success">{{ Session::get('created') }}</p>
                          @endif
                          @if(Session::has('updated'))
                            <p class="alert alert-success">{{ Session::get('updated') }}</p>
                          @endif
                            <table class="table table-bordered table-md">
                              <tr>
                                <th>#</th>
                                <th>Course Name</th>
                                <th>Course Time</th>
                                <th>Course Practice</th>
                                <th>Course Bonus</th>
                                <th>Course Image</th>
                                <th>Category_id</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>Read</th>
                              </tr>

                            @foreach($courses as $course)
                                <tr>
                                  <td>{{ $loop->iteration }}</td>
                                  <td>{{ $course->course_name }}</td>
                                  <td>{{ $course->course_time }}</td>
                                  <td>{{ $course->course_practice }}</td>
                                  <td>{{ $course->course_bonus }}</td>
                                  <td> <img src="{{asset('set/img/'. $course->course_image)}}" alt="image" width="50"></td>
                                  <td>{{ $course->category_id }}</td>
                                  <td><a href="{{ route('admin.course.edit',$course->id) }}" class="btn btn-warning">Edit</a></td>
                                  <td>
                                    <form action="{{ route('admin.course.destroy',$course->id) }}" method="POST">
                                      @method('DELETE')
                                      @csrf
                                      <input type="submit" onclick = "return confirm('Ma\'lumot o\'chirilsinmi?')" value="Delete" class="btn btn-danger">
                                    </form>
                                  </td>
                                  <td>
                                  <a href="{{ route('admin.course.show',$course->id) }}">
                                  <i class="fa-solid fa-eye"></i>
                                  </a>
                                  </td>
                                </tr>
                            @endforeach
                            </table>
                          </div>
                        </div>
                        <div class="card-footer text-right">
                          <nav class="d-inline-block">
                          </nav>
                        </div>
                      </div>
                    </div>

                </div>
            </div>
        </section>
</div>



@endsection
