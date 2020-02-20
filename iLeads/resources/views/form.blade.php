@extends('layouts.master')
@section('content')
 
<section class="content">
    
    
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    
                    
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                          

                        </form>
                        <br>
                        <h2><strong>Bordered</strong> Table <small>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</small> </h2>
                      
                                   <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="POST>
            
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search Product" aria-label="Search" aria-describedby="basic-addon2" name="search">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

                           
                    </div>
                    <br>
                    <div class="body table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Company</th>
                                    <th>Price</th>
                                    <th>Delete</th>
                                    <th>Update</th>
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                            	
                                <tr>
                                    <td>id</td>
                                    <td>name</td>
                                    <td>company</td>
                                    <td>price</td>
                                    <td>
                                        <a href="">Delete</a>
                                    </td>
                                    <td><a href="#">Update</a></td>
                                    
                                </tr>

                         
                            </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Bordered Table --> 
        <!-- Hover Rows -->
       
                    
      
    
</section>
@endsection