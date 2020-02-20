@extends('layouts/master')
@section('title','Area Add')
@section('subHeader')
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
   <div class="kt-container  kt-container--fluid ">
      <div class="kt-subheader__main">
         <h3 class="kt-subheader__title">
            Area                       
         </h3>
         <span class="kt-subheader__separator kt-subheader__separator--v"></span>
         <div class="kt-subheader__group" id="kt_subheader_search">
            <span class="kt-subheader__desc" id="kt_subheader_total">
            Add Area   
            </span>
         </div>
      </div>
   </div>
</div>
@endsection
@section('content')
<div class="row">
   <div class="col-md-12">
      <!--begin::Portlet-->
      <div class="kt-portlet">
         <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
               <h3 class="kt-portlet__head-title">
                  Add New Area   
               </h3>
            </div>
         </div>
         <!--begin::Form-->
         <form class="kt-form">
            <div class="kt-portlet__body">
               <div class="form-group row">
                  <div class="col-lg-6">
                     <label>Area Name:</label>
                     <input type="email" class="form-control" placeholder="Enter Area name">
                     <span class="form-text text-muted">Please enter area name</span>
                  </div>
                  <div class="col-lg-6">
                     <label class="">Constructor of Area:</label>
                     <select class="form-control" id="">
                        <option disabled="" selected="">Select Area Constructor</option>
                        <option>Jamil</option>
                        <option>Sarmad</option>
                        <option>Moubeen</option>
                        <option>Mani</option>
                        <option>Rimsha</option>
                     </select>
                     <span class="form-text text-muted">Please select area constructor</span>
                  </div>
               </div>
            </div>
            <div class="kt-portlet__foot">
               <div class="kt-form__actions">
                  <div class="row">
                     <div class="col-lg-12 text-center">
                        <button type="reset" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                     </div>
                  </div>
               </div>
            </div>
         </form>
         <!--end::Form-->
      </div>
      <!--end::Portlet-->
   </div>
</div>
@endsection