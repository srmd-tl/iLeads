@extends('layouts/master')
@push('css')
<link href="{{asset('css/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
<style>
   #kt_table_1_length {
   display: none;
   }
</style>
@endpush
@section('title','Areas')
@section('subHeader')
 <!-- begin:: Subheader -->
 <div class="kt-subheader   kt-grid__item" id="kt_subheader">
   <div class="kt-container  kt-container--fluid ">
      <div class="kt-subheader__main">
         <h3 class="kt-subheader__title">
            Areas                           
         </h3>
         <span class="kt-subheader__separator kt-subheader__separator--v"></span>
         <div class="kt-subheader__group" id="kt_subheader_search">
            <span class="kt-subheader__desc" id="kt_subheader_total">
            All Areas                                  </span>
         </div>
      </div>
      <div class="kt-subheader__toolbar">
         <a href="" class="">
         </a>
         <a href="{{route('areas.create')}}" class="btn btn-label-brand btn-bold">
         Add Area                    </a>
      </div>
   </div>
</div>

@endsection
@section('content')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
   <div class="kt-portlet kt-portlet--mobile">
      <div class="kt-portlet__body">
         <!--begin: Datatable -->
         <table class="table table-striped-  table-hover table-checkable" id="kt_table_1">
            <thead>
               <tr>
                  <th>Sr #</th>
                  <th>Name</th>
                  <th>Constructor of Area</th>
                  <th>Actions</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>1</td>
                  <td>
                     boston
                  </td>
                  <td>Sarmad SSG</td>
                  <td nowrap>
                     <a href="editArea.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                     <i class="la la-edit"></i>
                     </a>
                     <a href="" data-toggle="modal" data-target="#deletePopuop" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-trash-o"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>2</td>
                  <td>
                     Massachusetts 
                  </td>
                  <td>Moubeen</td>
                  <td nowrap>
                     <a href="editArea.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                     <i class="la la-edit"></i>
                     </a>
                     <a href="" data-toggle="modal" data-target="#deletePopuop" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-trash-o"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>3</td>
                  <td>
                     New Jersey
                  </td>
                  <td>Mani Yamaha</td>
                  <td nowrap>
                     <a href="editArea.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                     <i class="la la-edit"></i>
                     </a>
                     <a href="" data-toggle="modal" data-target="#deletePopuop" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-trash-o"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>4</td>
                  <td>
                     California
                  </td>
                  <td>Jamil Aunt</td>
                  <td nowrap>
                     <a href="editArea.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                     <i class="la la-edit"></i>
                     </a>
                     <a href="" data-toggle="modal" data-target="#deletePopuop" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-trash-o"></i>
                     </a>
                  </td>
               </tr>
            </tbody>
         </table>
         <!--end: Datatable -->
      </div>
   </div>
</div>
@endsection
@push('js')
 <script src="{{asset('js/datatables.bundle.js')}}" type="text/javascript"></script>
 <script src="{{asset('js/basic.js')}}" type="text/javascript"></script>
 @endpush
