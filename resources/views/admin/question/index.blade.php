@extends('layouts.adminMaster')

@section('content')

      <!-- Main Content -->
      <div class="main-content">
      <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-12 col-md-6 col-12">
                      <div class="card">
                        <div class="card-header">
                          <h4>Savol javob</h4>
                          <a href="{{ route('admin.question.create') }}" class="btn btn-success">Create</a>
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
                                <th>Questions</th>
                                <th>Answers</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>Read</th>
                              </tr>
                            
                            @foreach($questions as $question)
                                <tr>
                                  <td>{{ $loop->iteration }}</td>
                                  <td>{{ $question->question }}</td>
                                  <td>{!! $question->answer !!}</td>
                                  <td><a href="{{ route('admin.question.edit',$question->id) }}" class="btn btn-warning">Edit</a></td>
                                  <td>
                                    <form action="{{ route('admin.question.destroy',$question->id) }}" method="POST">
                                      @method('DELETE')
                                      @csrf
                                      <input type="submit" onclick = "return confirm('Ma\'lumot o\'chirilsinmi?')" value="Delete" class="btn btn-danger">
                                    </form>
                                  </td>
                                  <td>
                                  <a href="{{ route('admin.question.show',$question->id) }}">
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