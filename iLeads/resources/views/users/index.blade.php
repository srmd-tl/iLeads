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
          All Users22                                </span>
       </div>
    </div>
    <div class="kt-subheader__toolbar">
       <a href="" class="">
       </a>
       <a href="addUser.php" class="btn btn-label-brand btn-bold">
       Add User                    </a>
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
                                       <th>Customer Name</th>
                                       <th>Country</th>
                                       <th>City</th>

                                       <th>Address</th>
                                       <th>Status</th>
                                       <th>Actions</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>1</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>China</td>
                                       <td>Tieba</td>
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Success</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                          <i class="la la-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>2</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>Indonesia</td>
                                       <td>Cihaur</td>
                                       
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Success</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                          <i class="la la-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>3</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>Argentina</td>
                                       <td>Puerto Iguazú</td>
                                       
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">Pending</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                          <i class="la la-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>4</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>Indonesia</td>
                                       <td>Talok</td>
                                       
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">Pending</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                          <i class="la la-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>5</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>Austria</td>
                                       <td>Sankt Andrä-Höch</td>
                                       
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">Pending</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                          <i class="la la-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>6</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>China</td>
                                       <td>Rongkou</td>
                                       
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Danger</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                          <i class="la la-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>7</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>China</td>
                                       <td>Baiguo</td>
                                       
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">Pending</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                          <i class="la la-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>8</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>Croatia</td>
                                       <td>Vinica</td>
                                       
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Success</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                          <i class="la la-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>9</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>Colombia</td>
                                       <td>San Carlos</td>
                                       
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Danger</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                          <i class="la la-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>10</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>Thailand</td>
                                       <td>Maha Sarakham</td>
                                       
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Danger</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                          <i class="la la-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>11</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>Brazil</td>
                                       <td>Canguaretama</td>
                                       
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Danger</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                          <i class="la la-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>12</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>China</td>
                                       <td>Jiamachi</td>
                                       
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Danger</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                          <i class="la la-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>13</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>China</td>
                                       <td>Qiaole</td>
                                       
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Success</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                          <i class="la la-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>14</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>Portugal</td>
                                       <td>Burgau</td>
                                       
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Success</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                          <i class="la la-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>15</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>Portugal</td>
                                       <td>Bacelo</td>
                                       
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Success</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                          <i class="la la-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>16</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>South Africa</td>
                                       <td>Pongola</td>
                                       
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Success</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                          <i class="la la-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>17</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>Russia</td>
                                       <td>Novokizhinginsk</td>
                                       
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Success</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                          <i class="la la-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>18</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>Brazil</td>
                                       <td>Conceição das 
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Success</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                          <i class="la la-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>19</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>Ukraine</td>
                                       <td>Yasinya</td>
                                       
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Success</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                          <i class="la la-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>20</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>Indonesia</td>
                                       <td>Kembang</td>
                                       
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Success</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                          <i class="la la-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>21</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>Mongolia</td>
                                       <td>Sharga</td>
                                       
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Success</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                          <i class="la la-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>22</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>China</td>
                                       <td>Guxi</td>
                                       
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Success</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                          <i class="la la-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>23</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>Portugal</td>
                                       <td>Viso</td>
                                       
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Success</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                          <i class="la la-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>24</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>Japan</td>
                                       <td>Minato</td>
                                       
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Success</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                          <i class="la la-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>25</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>Indonesia</td>
                                       <td>Merdeka</td>
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Danger</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                          <i class="la la-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>26</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>China</td>
                                       <td>Jianggao</td>
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Danger</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                          <i class="la la-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>27</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>Germany</td>
                                       <td>Erfurt</td>
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Danger</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                          <i class="la la-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>28</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>Australia</td>
                                       <td>Eastern Suburbs Mc</td>
                                       
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Danger</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                          <i class="la la-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>29</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>Ethiopia</td>
                                       <td>Kombolcha</td>
                                       
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Success</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                          <i class="la la-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>30</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>Portugal</td>
                                       <td>Arrifes</td>
                                       
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Success</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                          <i class="la la-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>31</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>Philippines</td>
                                       <td>Talisay</td>
                                       
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Success</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                          <i class="la la-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>32</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>Libya</td>
                                       <td>Zuwārah</td>
                                       
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Success</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                          <i class="la la-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>33</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>China</td>
                                       <td>Zhangcun</td>
                                       
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Success</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                          <i class="la la-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>34</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>Morocco</td>
                                       <td>Temara</td>
                                       
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Success</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                          <i class="la la-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>35</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>Paraguay</td>
                                       <td>Los Cedrales<
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Success</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                          <i class="la la-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>36</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>Philippines</td>
                                       <td>Dologon</td>
                                       
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Success</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                          <i class="la la-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>37</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>Tanzania</td>
                                       <td>Nanganga</td>
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Success</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                          <i class="la la-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>38</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>Indonesia</td>
                                       <td>Pule</td>
                                       
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Success</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                          <i class="la la-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>39</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>Palestinian Territory</td>
                                       <td>Za‘tarah</td>
                                       
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">Pending</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                          <i class="la la-edit"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>40</td>
                                       <td>
                                         Sarmad Sohail
                                       </td>
                                       <td>Philippines</td>
                                       <td>Esperanza</td>
                                       
                                       <td>
                                         3 Goodland Terrace 
                                       </td>
                                       <td><span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">Success</span></td>
                                       <td nowrap>
                                          <span class="dropdown">
                                             <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                                             <i class="la la-ellipsis-h"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="loginUser.php"><i class="la-sign-in la"></i> Login to Account</a>
                                                <a class="dropdown-item" href="viewUser.php"><i class="la la-eye"></i> View Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Delete User</a>
                                             </div>
                                          </span>
                                          <a href="editUser.php" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
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
<!--begin::Page Scripts(used by this page) -->
<script src="{{asset('js/datatables.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('js/basic.js')}}" type="text/javascript"></script>
 <!--end::Page Scripts -->
@endpush