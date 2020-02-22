<!DOCTYPE html>
<html lang="en" >
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8"/>
      @yield('meta')
      <title>iLeads Software |@yield('title')</title>
      <!--*************************************************
             begin:: header files
      ************************************************* -->
       @include('commonFiles/header')
      <!--*************************************************
              end:: header files
      ************************************************* -->
   </head>
   <!-- end::Head -->
   <!-- begin::Body -->
   <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading"  >
      <!-- begin:: Page -->
      <!-- begin:: Header Mobile -->
      <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed " >
         <div class="kt-header-mobile__logo">
            <a href="{{asset('index-2.html')}}">
            <img alt="Logo" src="{{asset('images/logo.png')}}" width="160" />
            </a>
         </div>
         <div class="kt-header-mobile__toolbar">
            <button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
            
            <button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
         </div>
      </div>
      <!-- end:: Header Mobile -->  
      <div class="kt-grid kt-grid--hor kt-grid--root">
         <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
            <!--*************************************************
             begin:: sidebar
            ************************************************* -->
            @include('commonFiles/sidebar')
            <!--*************************************************
             end:: sidebar
             ************************************************* -->
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
               <!--*************************************************
                  begin:: topbar
               ************************************************* -->
               @include('commonFiles/topbar')               <!--*************************************************
                  end:: topbar
               ************************************************* -->
               <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                @yield('subHeader')


             

                  
                  <!--*************************************************
                      *************************************************
                      *************************************************
                          begin:: Content
                      *************************************************
                      *************************************************
                      *************************************************-->
                  <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                  	     @yield('content')

                  </div>
                  <!--*************************************************
                      *************************************************
                      *************************************************
                          end:: Content
                      *************************************************
                      *************************************************
                      *************************************************-->         
               </div>
           
            </div>
         </div>
      </div>
      <!-- end:: Page -->

    <!--*************************************************
       begin:: Footer
    ************************************************* -->
    @include('commonFiles/footer')
    <!--*************************************************
       end:: Footer
    ************************************************* -->
   </body>
   <!-- end::Body -->
</html>