@extends('layouts.admin')
@section('title', $viewData['title'])

@section('sectioncss')
<style>
  .cke_notifications_area {
    display: none !important;
  }
</style>
@endsection

@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-12 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title mb-0">Data Website Terkait</h2>
                @include('flash::message')
                @if (session('errors'))
                <br>
                <div class="alert alert-danger">
                  <button type="button" class="close pull-right" data-dismiss="alert">&times;</button>
                  <ul>
                      @foreach($errors as $error)
                      <li>{{$error}}</li>
                      @endforeach
                  </ul>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="content-body">
    <!-- Data list view starts -->
    <section id="basic-datatable">
        <div class="row">
            <div class="col-12">
                @if (session()->has('success'))
                <div class="alert alert-success">
                  {{ session('success') }}
                </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <a data-toggle="modal" data-target="#create-modal" class="btn btn-outline-primary" ><i class='feather icon-plus'></i> Tambah Data</a>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                <table class="table table-striped datatable">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nama</th>
                                            <th>Url Link</th>
                                            <th>Ditambahkan Pada</th>
                                            <th>Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($viewData["data"] as $value)
                                            <tr>
                                                <td>{{ $value->id }}</td>
                                                <td>{{ $value->title }}</td>
                                                <td>{{ $value->link }}</td>
                                                <td>{{ date('d/m/Y', strtotime($value->created_at)) }}</td>             
                                                
                                                <td>
                                                    <a id="update-btn-{{$value->id}}" class="btn btn-info btn-sm">
                                                      <i class="fas fa-pencil-square fa-sm"></i>
                                                    </a>
                                                    <a id="delete-btn-{{$value->id}}" class="btn btn-danger btn-sm">
                                                      <i class="fas fa-trash fa-sm"></i>
                                                    </a>
            
                                                    <form id="delete-form-{{$value->id}}" action="{{ route('admin.footer.websiteterkait.destroy', $value->id)}}" method="post">
                                                      @csrf
                                                      @method('delete')
                                                    </form>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Data list view end -->

        <div class="modal fade" id="create-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Website Terkait</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" action="{{ route('admin.footer.websiteterkait.store')}}">
                    @csrf
          
                  <div class="form-group">
                    <label for="title" class="col-form-label">Nama:</label>
                    <input id="title" class="form-control" type="text" name="title" required>
                  </div>
                  <div class="form-group">
                    <label for="link" class="col-form-label">Url Link:</label>
                    <input id="link" class="form-control" type="text" name="link" required>
                  </div>

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
              <div class="modal-footer">
                
              </div>
            </div>
          </div>
        </div>

    @foreach ($viewData["data"] as $value)
        <div class="modal fade" id="update-modal-{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Website Terkait #{{$value->id}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" action="{{ route('admin.footer.websiteterkait.update', $value->id)}}">
                    @csrf
                    @method('patch')
            
                  <div class="form-group">
                    <label for="title" class="col-form-label">Nama:</label>
                    <input id="title" class="form-control" type="text" name="title" value="{{$value->title}}" required>
                  </div>
                  <div class="form-group">
                    <label for="link" class="col-form-label">Url Link:</label>
                    <input id="link" class="form-control" type="text" name="link" value="{{$value->link}}" required>
                  </div>

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
              <div class="modal-footer">
                
              </div>
            </div>
          </div>
        </div>
    @endforeach

</div>
@endsection

@section('js')

    @foreach ($viewData["data"] as $value)
    <script>
        $("#delete-btn-{{$value->id}}").on('click', function (e) {
            e.preventDefault();
            Swal.fire({
                title: 'Delete Website terkait',
                text: "Are You Sure Want Delete This Data, Website {{$value->title}} ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes!'
            }).then((result) => {
                if(result.value) {
                    $("#delete-form-{{$value->id}}").submit();
                }
            }
        )
            ;
        });

        $("#update-btn-{{$value->id}}").on('click', function (e) {
            $('#update-modal-{{$value->id}}').modal('show');
        });
    </script>
    @endforeach

    <script>
        $('.datatable').DataTable();
    </script>

    <script src="//cdn.ckeditor.com/4.22.0/standard/ckeditor.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
           $('.ckeditor').ckeditor();
        });
    </script>
@endsection