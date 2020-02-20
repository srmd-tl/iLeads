@extends('layouts/master')
@section('title','Prospect Add')
@section('subHeader')
<!-- begin:: Subheader -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
   <div class="kt-container  kt-container--fluid ">
      <div class="kt-subheader__main">
         <h3 class="kt-subheader__title">
            Prospect                       
         </h3>
         <span class="kt-subheader__separator kt-subheader__separator--v"></span>
         <div class="kt-subheader__group" id="kt_subheader_search">
            <span class="kt-subheader__desc" id="kt_subheader_total">
            Add Prospect   
            </span>
         </div>
      </div>
   </div>
</div>
@endsection
@section('content')
<div class="row">
   <div class="col-lg-12">
      <!--begin::Portlet-->
      <div class="kt-portlet">
         <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
               <h3 class="kt-portlet__head-title">
                  Add New Prospect
               </h3>
            </div>
         </div>
         <!--begin::Form-->
         <form class="kt-form kt-form--label-right">
            <div class="kt-portlet__body">
               <div class="form-group row">
                  <div class="col-lg-6">
                     <label>First Name:</label>
                     <input type="text" class="form-control" placeholder="Enter first name">
                     <span class="form-text text-muted">Please enter your first name</span>
                  </div>
                  <div class="col-lg-6">
                     <label>Last Name:</label>
                     <input type="text" class="form-control" placeholder="Enter last name">
                     <span class="form-text text-muted">Please enter your last name</span>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-lg-6">
                     <label>Address:</label>
                     <div class="kt-input-icon">
                        <input type="text" class="form-control" placeholder="Enter your address">
                        <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-map-marker"></i></span></span>
                     </div>
                     <span class="form-text text-muted">Please enter your address</span>
                  </div>
                  <div class="col-lg-6">
                     <label class="">Street:</label>
                     <div class="kt-input-icon">
                        <input type="text" class="form-control" placeholder="Enter your street">
                        <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-bookmark-o"></i></span></span>
                     </div>
                     <span class="form-text text-muted">Please enter your street</span>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-lg-6">
                     <label>City:</label>
                     <div class="kt-input-icon">
                        <input type="text" class="form-control" placeholder="Enter your city">
                        <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-map-pin"></i></span></span>
                     </div>
                     <span class="form-text text-muted">Please enter your city</span>
                  </div>
                  <div class="col-lg-6">
                     <label class="">State:</label>
                     <div class="kt-input-icon">
                        <input type="text" class="form-control" placeholder="Enter your state">
                        <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-map-signs"></i></span></span>
                     </div>
                     <span class="form-text text-muted">Please enter your state</span>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-lg-6">
                     <label>Zip:</label>
                     <div class="kt-input-icon">
                        <input type="text" class="form-control" placeholder="Enter your zip code">
                        <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-map-o"></i></span></span>
                     </div>
                     <span class="form-text text-muted">Please enter your zip</span>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-lg-6">
                     <label>Have you experienced high winds in your area?</label>
                     <div class="kt-radio-inline">
                        <label class="kt-radio kt-radio--solid">
                        <input type="radio" name="highWinds" checked="" value="2">Yes
                        <span></span>
                        </label>
                        <label class="kt-radio kt-radio--solid">
                        <input type="radio" name="highWinds" value="2"> No
                        <span></span>
                        </label>
                     </div>
                     <span class="form-text text-muted">Please select one of them</span>
                  </div>
                  <div class="col-lg-6">
                     <label>Do you have leaks or damage to the inside or outside of your home?</label>
                     <div class="kt-radio-inline">
                        <label class="kt-radio kt-radio--solid">
                        <input type="radio" name="leaks" checked="" value="2">Yes
                        <span></span>
                        </label>
                        <label class="kt-radio kt-radio--solid">
                        <input type="radio" name="leaks" value="2"> No
                        <span></span>
                        </label>
                     </div>
                     <span class="form-text text-muted">Please select one of them</span>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-lg-6">
                     <label>How old is your roof?</label>
                     <div class="kt-radio-inline">
                        <label class="kt-radio kt-radio--solid">
                        <input type="radio" name="olf" checked="" value="2">1 Year
                        <span></span>
                        </label>
                        <label class="kt-radio kt-radio--solid">
                        <input type="radio" name="olf" value="2"> 2 Years
                        <span></span>
                        </label>
                     </div>
                     <span class="form-text text-muted">Please select one of them</span>
                  </div>
                  <div class="col-lg-6">
                     <label>Are you currently missing any shingles on your roof?</label>
                     <div class="kt-radio-inline">
                        <label class="kt-radio kt-radio--solid">
                        <input type="radio" name="shingles" checked="" value="2">Yes
                        <span></span>
                        </label>
                        <label class="kt-radio kt-radio--solid">
                        <input type="radio" name="shingles" value="2"> No
                        <span></span>
                        </label>
                     </div>
                     <span class="form-text text-muted">Please select one of them</span>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-lg-6">
                     <label>Have you had any recent repairs to your roof?</label>
                     <div class="kt-radio-inline">
                        <label class="kt-radio kt-radio--solid">
                        <input type="radio" name="recentRepairs" checked="" value="2">Yes
                        <span></span>
                        </label>
                        <label class="kt-radio kt-radio--solid">
                        <input type="radio" name="recentRepairs" value="2"> No
                        <span></span>
                        </label>
                     </div>
                     <span class="form-text text-muted">Please select one of them</span>
                  </div>
                  <div class="col-lg-6">
                     <label>What is the best day and time to schedule your FREE roof inspection?</label>
                     <div class="kt-radio-inline">
                        <label class="kt-radio kt-radio--solid">
                        <input type="radio" name="bestTime" checked="" value="2">AM
                        <span></span>
                        </label>
                        <label class="kt-radio kt-radio--solid">
                        <input type="radio" name="bestTime" value="2"> PM
                        <span></span>
                        </label>
                     </div>
                     <span class="form-text text-muted">Please select one of them</span>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-lg-12">
                     <label for="">Enter Prospects Notes:</label>
                     <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                     <span class="form-text text-muted">Please enter prospects notes</span>
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