@extends('layouts/master')
@push('css')
<link href="{{asset('css/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
@endpush
@section('title','Prospetss')
@section('subHeader')
<!-- begin:: Subheader -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
   <div class="kt-container  kt-container--fluid ">
      <div class="kt-subheader__main">
         <h3 class="kt-subheader__title">
            Prospectss                           
         </h3>
         <span class="kt-subheader__separator kt-subheader__separator--v"></span>
         <div class="kt-subheader__group" id="kt_subheader_search">
            <span class="kt-subheader__desc" id="kt_subheader_total">
            All Prospects                                 </span>
         </div>
      </div>
      <div class="kt-subheader__toolbar">
         <a href="" class="">
         </a>
         <a href="{{route('prospects.create')}}" class="btn btn-label-brand btn-bold">
         Add Prospect                 </a>
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
                  <th>Full Name</th>
                  <th>Phone #</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Actions</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>1</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a  data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-edit"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>2</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a  data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-edit"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>3</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a  data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-edit"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>4</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a  data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-edit"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>5</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a  data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-edit"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>6</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a  data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-edit"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>7</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a  data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-edit"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>8</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a  data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-edit"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>9</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a  data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-edit"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>10</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a  data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-edit"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>11</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a  data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-edit"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>12</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a  data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-edit"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>13</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a  data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-edit"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>14</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a  data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-edit"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>15</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a  data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-edit"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>16</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a  data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-edit"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>17</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a  data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-edit"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>18</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a  data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-edit"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>19</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a  data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-edit"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>20</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a  data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-edit"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>21</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a  data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-edit"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>22</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a  data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-edit"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>23</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a  data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-edit"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>24</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a  data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-edit"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>25</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a  data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-edit"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>26</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a  data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-edit"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>27</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a  data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-edit"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>28</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a  data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-edit"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>29</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a  data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-edit"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>30</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a  data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-edit"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>31</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a  data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-edit"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>32</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a  data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-edit"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>33</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a  data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-edit"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>34</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a  data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-edit"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>35</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a  data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-edit"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>36</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a  data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-edit"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>37</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a  data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-edit"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>38</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a  data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-edit"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>39</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a  data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-edit"></i>
                     </a>
                  </td>
               </tr>
               <tr>
                  <td>40</td>
                  <td>
                     Moubeen Awan
                  </td>
                  <td>
                     0312-5221414
                  </td>
                  <td>
                     Sarmad_Sohail@gmail.com
                  </td>
                  <td>
                     3 Goodland Terrace 
                  </td>
                  <td nowrap>
                     <span class="dropdown">
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="viewProspect.php"><i class="la la-eye"></i> View Details</a>
                           <a data-toggle="modal" data-target="#deletePopuop" class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete Prospect</a>
                        </div>
                     </span>
                     <a href="editProspect.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                     <i class="la la-edit"></i>
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