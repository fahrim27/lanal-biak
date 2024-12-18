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
      <form method="POST" enctype="multipart/form-data" action="{{route('admin.beranda.tugas-pokok.store')}}" style="margin-right: 20px; font-size: 25px;">
         @csrf
         <div class="form-group">
            <label for="image" class="form_label">Title</label>
            <input type="text" name="title" class="form-control" placeholder="enter slider title" value="{{ old('name') }}" required />
         </div>
         <div class="form-group">
            <label for="description" class="form_label">Descriptions</label>
            <textarea class="ckeditor form-control" name="description" required></textarea>
         </div>
         
         <div class="form-group">
            <label for="image" class="form_label">Image</label>
            <input type="file" name="image" class="form-control" required />
         </div>
         <button type="submit" class="btn btn-success float-right ml-1">Submit</button>
         <a href="{{route('admin.beranda.home-sliders.index')}}" class="btn btn-secondary float-right">Back</a>
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