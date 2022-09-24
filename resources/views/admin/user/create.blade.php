@extends('adminTheme.default')


@section('content')
<div class="content-wrapper">
	<section class="content-header">
    	<div class="container-fluid">
	      	<div class="row">
	        	<div class="col-sm-6">
	          		<h1 class="text-dark">User Create</h1>
	        	</div>
		        <div class="col-sm-6">
		          	<a href="{{ route('admin.user.index') }}" class="btn-sm btn btn-primary btn-flat mb-10 float-right" data-toggle="tooltip" data-placement="top" data-original-title="Back"><i class="fa fa-arrow-left"></i> </a>
		        </div>
	      	</div>
      	</div>
    </section>  	
	<section class="content">
		<div class="container-fluid">
	      	<div class="row">
	      		<div class="col-sm-12">
	      			<div class="card">
			            <div class="card-body">
			               	{!! Form::open(array('route' => 'admin.user.store','method'=>'POST','files'=>'true')) !!}
			              		@include('admin.user.form')
			                {!! Form::close() !!}
			            </div>
		            </div>
	      		</div>
	      	</div>
      	</div>
    </section>
</div>
@endsection