@extends('layouts/admin')
@section('title')
{{$viewData["title"]}}
@endsection
@section('sectioncss')
<link href="{{ asset('/css/create.css') }}" rel="stylesheet" />
<style>
  .cke_notifications_area {
    display: none !important;
  }
</style>
@endsection
@section('content')
<div class="card" id="card-admin" style="margin-right: 2%; width: 100%; size: 100px; font-size: 25px;">
   <div class="card-header">{{$viewData["title"]}}</div>
   <div class="card-body">
      @if (session('status'))
      <div class="alert alert-success">
         {{ session('status') }}
      </div>
      @endif
      @if($errors->any())
      <ul id="error_list">
         @foreach($errors->all() as $error)
         <li class="error">{{ $error }}</li>
         @endforeach
      </ul>
      @endif
      <form method="POST" enctype="multipart/form-data" action="{{route('admin.profil.pejabat.update', $viewData["data"]->id)}}" style="margin-right: 20px; font-size: 25px;">
         @csrf
         @method('put')
         <div class="form-group">
            <label for="nama" class="form_label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="" value="{{$viewData["data"]->nama}}" required />
         </div>
         <div class="form-group">
            <label for="jabatan" class="form_label">Jabatan</label>
            <input type="text" name="jabatan" class="form-control" placeholder="" value="{{$viewData["data"]->jabatan}}" required />
         </div>

         <div class="form-group">
            <label for="image" class="form_label">Image <a href="{{url('storage/images/profil/pejabat/'.$viewData["data"]->image)}}" target="__blank"><i class="fa fa-info-circle"></i></a></label>
            <input type="file" name="image2" class="form-control" />
         </div>

         <div class="form-group">
            <label for="profil" class="form_label">Profile Singkat</label>
            <textarea class="ckeditor form-control" name="profil" required>{{$viewData["data"]->profil}}</textarea>
         </div>

         <button type="submit" class="btn btn-success float-right ml-1">Submit</button>
         <a href="{{route('admin.profil.pejabat.index')}}" class="btn btn-secondary float-right">Back</a>
      </form>
   </div>
</div>
@endsection

@section('js')
<script src="//cdn.ckeditor.com/4.22.0/standard/ckeditor.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>
@endsection