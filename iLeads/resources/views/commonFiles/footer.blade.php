  <!-- begin::Scrolltop -->
      <div id="kt_scrolltop" class="kt-scrolltop">
         <i class="fa fa-arrow-up"></i>
      </div>
      <!-- end::Scrolltop -->



      <!-- begin::Global Config(global config for global JS sciprts) -->
      <script>
         var KTAppOptions = {
         "colors": {
         "state": {
         "brand": "#5d78ff",
         "dark": "#282a3c",
         "light": "#ffffff",
         "primary": "#5867dd",
         "success": "#34bfa3",
         "info": "#36a3f7",
         "warning": "#ffb822",
         "danger": "#fd3995"
         },
         "base": {
         "label": [
             "#c5cbe3",
             "#a1a8c3",
             "#3d4465",
             "#3e4466"
         ],
         "shape": [
             "#f0f3ff",
             "#d9dffa",
             "#afb4d4",
             "#646c9a"
         ]
         }
         }
         };
      </script>
      <!-- end::Global Config -->
      <!--begin::Global Theme Bundle(used by all pages) -->
      <script src="{{asset('js/plugins.bundle.js')}}" type="text/javascript"></script>
      <script src="{{asset('js/scripts.bundle.js')}}" type="text/javascript"></script>
      <!--end::Global Theme Bundle -->
      <script>
        $("#addMoreQuestion").on("click",function () {
         if($("#writeQuestion").val() != "")
         {
            console.log($("#writeQuestion").val());
            $("#moreQuestionDiv").append('<div class="col-lg-6"> <label class="text-left editText" >'+$("#writeQuestion").val()+'<a title="Delete" class="btn ml-4 btn-sm delBtn btn-danger btn-icon btn-icon-md"><i class="la la-trash"></i></a> <a title="Edit" class="btn editBtn btn-sm btn-primary btn-icon btn-icon-md"><i class="la la-edit"></i></a></label> <div class="kt-radio-inline"> <label class="kt-radio kt-radio--solid"> <input type="radio" name="'+$("#writeQuestion").val()+'" checked="" value="2">Yes <span></span> </label> <label class="kt-radio kt-radio--solid"> <input type="radio" name="'+$("#writeQuestion").val()+'" value="2"> No <span></span> </label> </div><span class="form-text text-muted">Please select one of them</span> </div>');
            $("#writeQuestion").val("");
         }
        });
        $("body").on("click",".delBtn",function(){
          $(this).parents(".col-lg-6").remove();
        });
        $("body").on("click",".editBtn",function(){
          $("#writeQuestion").val($(this).parent().text());
           $("#writeQuestion").focus();
         $(this).parents(".col-lg-6").remove();
        });
      </script>

      
      @stack('js')