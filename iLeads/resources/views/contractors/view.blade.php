@extends('layouts/master')
@section('title','Contractor')
@section('subHeader')
<!-- begin:: Subheader -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
   <div class="kt-container  kt-container--fluid ">
      <div class="kt-subheader__main">
         <h3 class="kt-subheader__title">
            Contractor                       
         </h3>
         <span class="kt-subheader__separator kt-subheader__separator--v"></span>
         <div class="kt-subheader__group" id="kt_subheader_search">
            <span class="kt-subheader__desc" id="kt_subheader_total">
            Edit Contractor   
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
                  Edit A Contractor   
               </h3>
            </div>
         </div>
         <!--begin::Form-->
         <form class="kt-form" method="POST" action="{{route('contractors.update',$contractor->id)}}">
            @csrf
            @method('PUT')
            <div class="kt-portlet__body">
               <div class="form-group row">
                  <div class="col-lg-6">
                     <label>Contractor's Company Name:</label>
                     <input type="text" class="form-control" placeholder="Enter Contractor Company Name" name="company_name" value="{{$contractor->company_name}}">
                     <span class="form-text text-muted">Please enter Contractor Company Name</span>
                  </div>
                  <div class="col-lg-6">
                     <label class="">Contactor's Mobile Phone:</label>
                     <input type="number" class="form-control" placeholder="Enter Contractor Mobile Phone" name="mobile_phone" value="{{$contractor->mobile_phone}}">
                     <span class="form-text text-muted">Please enter Contactor's Mobile Phone</span>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-lg-6">
                     <label>Contractor's Email:</label>
                     <input type="email" class="form-control" placeholder="Enter Contractor Email" name="email" value="{{$contractor->email}}">
                     <span class="form-text text-muted">Please enter Contractor Email</span>
                  </div>
                  <div class="col-lg-6">
                     <label class="">Contactor's Address:</label>
                     <input type="text" class="form-control" placeholder="Enter Contractor Address" name="address" value="{{$contractor->address}}">
                     <span class="form-text text-muted">Please enter Contactor's Address</span>
                  </div>
               </div>
                <div class="form-group row">
                <div class="form-group validated col-lg-6">
                 <label class="form-control-label" for="inputWarning1">Assign Areas:</label>
                    <select name="areas[]" class="form-control" aria-invalid="false" required="" multiple="">
                        @forelse($areas as $area)
                        <option value="{{$area->id}}" {{in_array($area->id, $contractorAreas)?"selected":null}}
                                   
                           >{{$area->name}}</option>
                        @empty
                        <p>No, Area Found</p>
                        @endforelse                                        
                     </select>
                  @error('company_name')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

            </div>
            </div>
            <div class="kt-portlet__foot">
               <div class="kt-form__actions">
                  <div class="row">
                     <div class="col-lg-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
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
