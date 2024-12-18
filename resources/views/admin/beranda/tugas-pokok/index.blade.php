@extends('layouts.admin')
@section('title', $viewData['title'])

@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-12 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title mb-0">Data Tugas Pokok Satuan</h2>
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
                        <a class="btn btn-outline-primary" href="{{route('admin.beranda.tugas-pokok.create')}}"><i class='feather icon-plus'></i> Tambah Data</a>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                <table class="table table-striped datatable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Ditambahkan Pada</th>
                                            <th>Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($viewData["data"] as $value)
                                            <tr>
                                                <td>{{$value->id}}</td>
                                                <td>
                                                    <a href="{{url('storage/images/beranda/tugaspokok/'.$value->image)}}" target="__blank"><img src="{{url('storage/images/beranda/tugaspokok/'.$value->image)}}" class="img-thumbnail" alt="{{ $value->image }}" style="max-height: 50px;"></a>
                                                </td>
                                                <td title="{{$value->title}}">{{ \Illuminate\Support\Str::limit($value->title, 100) }}</td>
                                                <td>{{ date('d/m/Y', strtotime($value->created_at)) }}</td>
                                                
                                                <td>
                                                  <div class="btn-container">
                                                    <a id="show-btn-{{$value->id}}" class="btn btn-info btn-sm">
                                                      <i class="fas fa-eye fa-sm"></i>
                                                    </a>
                                                    <a href="{{route('admin.beranda.tugas-pokok.edit', $value->id)}}" class="btn btn-warning btn-sm">
                                                      <i class="fas fa-edit fa-sm"></i>
                                                    </a>
                                                    <a id="delete-btn-{{$value->id}}" class="btn btn-danger btn-sm">
                                                      <i class="fas fa-trash fa-sm"></i>
                                                    </a>
            
                                                    <form id="delete-form-{{$value->id}}" action="{{route('admin.beranda.tugas-pokok.destroy', $value->id)}}" method="post">
                                                      @csrf
                                                      @method('delete')
                                                    </form>

                                                  </div>
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

    @foreach ($viewData["data"] as $value)
        <div class="modal fade" id="show-modal-{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{$value->title}} Description</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
            
                  <div class="card">
                    <div class="card-body">
                        <h5 class="">{!! $value->description !!}</h5>
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

    <div class="modal fade action-modal" id="xlarge" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true"></div>

</div>
@endsection

@section('js')
    @foreach ($viewData["data"] as $value)
    <script>
    
        $("#delete-btn-{{$value->id}}").on('click', function (e) {
            e.preventDefault();
            Swal.fire({
                title: 'Delete Tugas Pokok',
                text: "Are You Sure Want Delete This Data, Tugas Pokok {{ $value->title }} ?",
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
        
        $("#show-btn-{{$value->id}}").on('click', function (e) {
            $('#show-modal-{{$value->id}}').modal('show');
        });
    </script>
    @endforeach
    <script>
        $('.datatable').DataTable();
    </script>
@endsection