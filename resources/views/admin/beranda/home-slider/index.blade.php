@extends('layouts.admin')
@section('title', $viewData['title'])

@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-12 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title mb-0">Home/ Beranda Sliders Data</h2>
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
                        <a class="btn btn-outline-primary" href="{{route('admin.beranda.home-sliders.create')}}"><i class='feather icon-plus'></i> Tambah Data</a>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                <table class="table table-striped datatable">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>First Line</th>
                                            <th>Second Line</th>
                                            <th>Ditambahkan Pada</th>
                                            <th>Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($viewData["data"] as $value)
                                            <tr>
                                                <td>
                                                    <a href="{{url('storage/images/beranda/sliders/'.$value->image)}}" target="__blank"><img src="{{url('storage/images/beranda/sliders/'.$value->image)}}" class="img-thumbnail" alt="{{ $value->image }}" style="max-height: 50px;"></a>
                                                </td>
                                                <td title="{{$value->title}}">{{ \Illuminate\Support\Str::limit($value->title, 30) }}</td>
                                                <td title="{{$value->first}}">{{\Illuminate\Support\Str::limit($value->first, 30) }}</td>
                                                <td title="{{$value->second}}">{{\Illuminate\Support\Str::limit($value->second, 30) }}</td>
                                                <td>{{ date('d/m/Y', strtotime($value->created_at)) }}</td>
                                                
                                                <td>
                                                  <div class="btn-container">
                                                    <a href="{{route('admin.beranda.home-sliders.edit', $value->id)}}" class="btn btn-warning btn-sm">
                                                      <i class="fas fa-edit fa-sm"></i>
                                                    </a>
                                                    <a id="delete-btn-{{$value->id}}" class="btn btn-danger btn-sm">
                                                      <i class="fas fa-trash fa-sm"></i>
                                                    </a>
            
                                                    <form id="delete-form-{{$value->id}}" action="{{route('admin.beranda.home-sliders.destroy', $value->id)}}" method="post">
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

    <div class="modal fade action-modal" id="xlarge" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true"></div>

</div>
@endsection

@section('js')
    @foreach ($viewData["data"] as $value)
    <script>
    
        $("#delete-btn-{{$value->id}}").on('click', function (e) {
            e.preventDefault();
            Swal.fire({
                title: 'Delete Home Slider',
                text: "Are You Sure Want Delete This Data, Home Slider {{ $value->title }} ?",
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
    
    </script>
    @endforeach
    <script>
        $('.datatable').DataTable();
    </script>
@endsection