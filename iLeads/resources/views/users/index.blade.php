@extends('layouts/master')
@section('title', 'All Users')
@push('css')
<link href="{{asset('css/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
@endpush
@section('subHeader')
  <!-- begin:: Subheader -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
 <div class="kt-container  kt-container--fluid ">
    <div class="kt-subheader__main">
       <h3 class="kt-subheader__title">
          Users                           
       </h3>
       <span class="kt-subheader__separator kt-subheader__separator--v"></span>
       <div class="kt-subheader__group" id="kt_subheader_search">
          <span class="kt-subheader__desc" id="kt_subheader_total">
          All Users                                </span>
       </div>
    </div>
    <div class="kt-subheader__toolbar">
       <a href="" class="">
       </a>
       <a href="{{route('user.create')}}" class="btn btn-label-brand btn-bold">
       Add User                    </a>
    </div>
 </div>
</div>
@endsection
@section('content')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
   <div class="kt-portlet kt-portlet--mobile">
      <div class="kt-portlet__body">
      {{$dataTable->table()}}
    </div>
  </div>
</div>

@endsection
@push('js')
     {{$dataTable->scripts()}}
@endpush