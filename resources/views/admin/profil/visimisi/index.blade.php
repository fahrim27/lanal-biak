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
                <h2 class="content-header-title mb-0">Data Visi Misi</h2>
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
                        @if(count($viewData["data"]) < 1)
                        <a data-toggle="modal" data-target="#create-modal" class="btn btn-outline-primary" ><i class='feather icon-plus'></i> Tambah Data</a>
                        @endif
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                <table class="table table-striped datatable">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Kalimat</th>
                                            <th>Ditambahkan Pada</th>
                                            <th>Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($viewData["data"] as $value)
                                            <tr>
                                                <td>{{ $value->id }}</td>
                                                <td>{!! \Illuminate\Support\Str::limit($value->text, 100) !!}</td>
                                                <td>{{ date('d/m/Y', strtotime($value->created_at)) }}</td>             
                                                
                                                <td>
                                                    <a id="show-btn-{{$value->id}}" class="btn btn-info btn-sm">
                                                      <i class="fas fa-eye fa-sm"></i>
                                                    </a>
                                                    <a id="update-btn-{{$value->id}}" class="btn btn-info btn-sm">
                                                      <i class="fas fa-pencil-square fa-sm"></i>
                                                    </a>
                                                    <a id="delete-btn-{{$value->id}}" class="btn btn-danger btn-sm">
                                                      <i class="fas fa-trash fa-sm"></i>
                                                    </a>
            
                                                    <form id="delete-form-{{$value->id}}" action="{{ route('admin.profil.visimisi.destroy', $value->id)}}" method="post">
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
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Visi Misi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" action="{{ route('admin.profil.visimisi.store')}}">
                    @csrf
            
                  <div class="form-group">
                    <label for="text" class="col-form-label">Kalimat:</label>
                    <textarea class="ckeditor form-control" id="text" name="text" rows="5" required></textarea>
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
        <div class="modal fade" id="show-modal-{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Visi Misi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
            
                  <div class="card">
                    <div class="card-body">
                        <h5 class="">{!! $value->text !!}</h5>
                    </div>
                  </div>

                <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Close</button>
              </div>
              <div class="modal-footer">
                
              </div>
            </div>
          </div>
        </div>
    @endforeach

    @foreach ($viewData["data"] as $value)
        <div class="modal fade" id="update-modal-{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Visi Misi #{{$value->id}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" action="{{ route('admin.profil.visimisi.update', $value->id)}}">
                    @csrf
                    @method('patch')
            
                  <div class="form-group">
                    <label for="text" class="col-form-label">Kalimat:</label>
                    <textarea class="ckeditor form-control" id="text" name="text" rows="5" required>{{$value->text}}</textarea>
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
                title: 'Delete Visi Misi',
                text: "Are You Sure Want Delete This Data ?",
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
        $("#show-btn-{{$value->id}}").on('click', function (e) {
            $('#show-modal-{{$value->id}}').modal('show');
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