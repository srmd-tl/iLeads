@if(session('success'))
<div class="alert alert-success fade show" role="alert">
    <div class="alert-icon"><i class="flaticon-warning"></i></div>
    <div class="alert-text">{{session('success')}}</div>
    <div class="alert-close">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="la la-close"></i></span>
        </button>
    </div>
</div>
@endif

@if ($errors->any())
<div class="row"> 
	<div class="col-md-12">
	  @foreach ($errors->all() as $error)
	  <div class="alert alert-danger" role="alert">
	    {{$error}}
		</div>
	  @endforeach
	</div>
</div>
@endif
