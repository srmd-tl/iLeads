@extends('layouts/master')
@section('title','User')
@push('css')
<link href="{{asset('css/wizard-4.css')}}" rel="stylesheet" type="text/css" />
@endpush
@section('subHeader')

<div class="kt-subheader   kt-grid__item" id="kt_subheader">
                     <div class="kt-container  kt-container--fluid ">
                        <div class="kt-subheader__main">
                           <h3 class="kt-subheader__title">
                              New User
                           </h3>
                           <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                           <div class="kt-subheader__group" id="kt_subheader_search">
                              <span class="kt-subheader__desc" id="kt_subheader_total">
                              Enter user details and submit                                    </span>
                           </div>
                        </div>
                        <div class="kt-subheader__toolbar">
                           <a href="dashboard.php" class="btn btn-default btn-bold">
                           Back                </a>
                           <div class="">
                              <button type="button" class="btn btn-brand btn-bold">
                              Submit
                            </button>


                           </div>
                        </div>
                     </div>
                  </div>
@endsection
@section('content')
<div class="kt-wizard-v4" id="kt_user_add_user" data-ktwizard-state="step-first">
   <!--begin: Form Wizard Nav -->
   <div class="kt-wizard-v4__nav">
      <div class="kt-wizard-v4__nav-items nav">
         <!--doc: Replace A tag with SPAN tag to disable the step link click -->
         <div class="kt-wizard-v4__nav-item nav-item" data-ktwizard-type="step" data-ktwizard-state="current">
            <div class="kt-wizard-v4__nav-body">
               <div class="kt-wizard-v4__nav-number">
                  1
               </div>
               <div class="kt-wizard-v4__nav-label">
                  <div class="kt-wizard-v4__nav-label-title">
                     Profile
                  </div>
                  <div class="kt-wizard-v4__nav-label-desc">
                     User's Personal Information
                  </div>
               </div>
            </div>
         </div>
       
      </div>
   </div>
   <!--end: Form Wizard Nav -->
   <div class="kt-portlet">
      <div class="kt-portlet__body kt-portlet__body--fit">
         <div class="kt-grid">
            <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">
               <!--begin: Form Wizard Form-->
               <form class="kt-form" id="kt_user_add_form" method="POST" action="{{route('user.update',$user->id)}}">
                  @csrf
                  @method('PUT')
                  <!--begin: Form Wizard Step 1-->
                  <div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
                     <div class="kt-heading kt-heading--md">User's Profile Details:</div>
                     <div class="kt-section kt-section--first">
                        <div class="kt-wizard-v4__form">
                           <div class="row">
                              <div class="col-xl-12">
                                 <div class="kt-section__body">
                  
                                    <div class="form-group row">
                                       <label class="col-xl-3 col-lg-3 col-form-label">Name</label>
                                       <div class="col-lg-9 col-xl-9">
                                          <input class="form-control" type="text" value="{{$user->name}}" name="name">
                                       </div>
                                    </div>
                                    <div class="form-group row">
                                       <label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
                                       <div class="col-lg-9 col-xl-9">
                                          <div class="input-group">
                                             <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                             <input type="text" class="form-control" value="{{$user->email}}" placeholder="Email" aria-describedby="basic-addon1" name="email">
                                          </div>
                                          <span class="form-text text-muted">Email will not be publicly displayed. <a href="#" class="kt-link">Learn more</a>.</span>
                                       </div>
                                    </div>
                                    <div class="form-group row">
                                       <label class="col-xl-3 col-lg-3 col-form-label">Old Password</label>
                                       <div class="col-lg-9 col-xl-9">
                                          <div class="input-group">
                                             <div class="input-group-prepend"><span class="input-group-text"><i class="la la-key"></i></span></div>
                                             <input type="password" class="form-control" placeholder="Old Password" aria-describedby="basic-addon1" name="old_password">
                                          </div>
                                          <span class="form-text text-muted">Email will not be publicly displayed. <a href="#" class="kt-link">Learn more</a>.</span>
                                       </div>
                                    </div>
                                      <div class="form-group row">
                                       <label class="col-xl-3 col-lg-3 col-form-label">New Password</label>
                                       <div class="col-lg-9 col-xl-9">
                                          <div class="input-group">
                                             <div class="input-group-prepend"><span class="input-group-text"><i class="la la-key"></i></span></div>
                                             <input type="pasword" class="form-control" placeholder="New Password" aria-describedby="basic-addon1" name="password">
                                          </div>
                                          <span class="form-text text-muted">Email will not be publicly displayed. <a href="#" class="kt-link">Learn more</a>.</span>
                                       </div>
                                    </div>
                                    <div class="form-group row">
                                       <label class="col-xl-3 col-lg-3 col-form-label">Business Name</label>
                                       <div class="col-lg-9 col-xl-9">
                                          <input class="form-control" type="text" value="{{$user->business_name}}" name="business_name">
                                          <span class="form-text text-muted">If you want your invoices addressed to a company. Leave blank to use your full name.</span>
                                       </div>
                                    </div>
                                    <div class="form-group row">
                                       <label class="col-xl-3 col-lg-3 col-form-label">Contact Phone</label>
                                       <div class="col-lg-9 col-xl-9">
                                          <div class="input-group">
                                             <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                             <input type="text" class="form-control" value="{{$user->phone}}" placeholder="Phone" aria-describedby="basic-addon1" name="phone">
                                          </div>
                                          <span class="form-text text-muted">We'll never share your email with anyone else.</span>
                                       </div>
                                    </div>
          
                                    <div class="form-group form-group-last row">
                                       <label class="col-xl-3 col-lg-3 col-form-label">Business Site</label>
                                       <div class="col-lg-9 col-xl-9">
                                          <div class="input-group">
                                             <input type="text" class="form-control" placeholder="Business Site" value="{{$user->business_site}}" name="business_site">
                                             <div class="input-group-append"><span class="input-group-text">.com</span></div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--end: Form Wizard Step 1-->
             
                  <!--begin: Form Actions -->
                  <div class="kt-form__actions">
                     <div class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
                        Previous
                     </div>
                     <div class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit">
                        Submit
                     </div>
                     <div class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next">
                        Next Step
                     </div>
                  </div>
                  <!--end: Form Actions -->
               </form>
               <!--end: Form Wizard Form-->
            </div>
         </div>
      </div>
   </div>
</div>
@push('js')
      <script src="{{asset('js/add-user.js')}}" type="text/javascript"></script>

@endpush
@endsection

