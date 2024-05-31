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
                          <a href="{{ route('admin.contact.index') }}" class="btn btn-primary me-auto">Back</a>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Id</th><td>{{ $contact->id }}</td>
                                </tr>
                                <tr>
                                    <th>Firstname</th><td>{{ $contact->firstname }}</td>
                                </tr>
                                <tr>
                                    <th>Lastname</th><td>{{ $contact->lastname}}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th><td>{{ $contact->phone}}</td>
                                </tr>
                                <tr>
                                    <th>Category_id</th><td>{{ $contact->category_id}}</td>
                                </tr>
                                <tr>
                                    <th>Created_at</th><td>{{ $contact->created_at}}</td>
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
    