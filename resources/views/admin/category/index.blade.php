@extends('layouts.adminMaster')

@section('content')
<div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">

                    <div class="col-lg-12 col-md-6 col-12">
                      <div class="card">
                        <div class="card-header">
                          <h4>Kurslar</h4>
                          <a href="{{ route('admin.category.create') }}" class="btn btn-success">Create</a>
                          <a href="{{ route('admin.category.export') }}" class="btn btn-warning">Export</a>
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
                                <th>Name</th>
                                <th>Image</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>Read</th>
                              </tr>

                            @foreach($categorys as $category)
                                <tr>
                                  <td>{{ $loop->iteration }}</td>
                                  <td>{{ $category->name }}</td>
                                  <td><img class="img-fluid" src="{{asset('set/img/'.$category->image)}}" alt="image" width="80"></td>
                                  <td><a href="{{ route('admin.category.edit',$category->id) }}" class="btn btn-warning">Edit</a></td>
                                  <td>
                                    <form action="{{ route('admin.category.destroy',$category->id) }}" method="POST">
                                      @method('DELETE')
                                      @csrf
                                      <input type="submit" onclick = "return confirm('Ma\'lumot o\'chirilsinmi?')" value="Delete" class="btn btn-danger">
                                    </form>
                                  </td>
                                  <td>
                                  <a href="{{ route('admin.category.show',$category->id) }}">
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
