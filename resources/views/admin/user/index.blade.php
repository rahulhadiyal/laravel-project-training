@extends($adminTheme)


@section('content')
<div class="content-wrapper">
	<section class="content p-4">  
	    <div class='row'>
	        <div class='tests-table col-12 m-0'>
	        	<div class="row">
	        		<div class="col-md-12">
			            <div class='row'>
			            	<div class="col-md-6 table-hading mb-3 p-0">
			            		<h1 class="m-0 p-0">Users Data Table</h1>
			            	</div>
			            	<div class="col-md-6 add-user mb-3 p-0">
			            		<a href="{{ route('admin.user.create') }}" class="btn btn-primary float-right mt-2"><i class="fas fa-plus"></i></a>
			            	</div>
			            </div>
			            <div class="row">
			                <div class='col-md-12 m-0 p-0'>
			                    <table class="table table-bordered text-center m-0 w-100 data-table">
			                        <thead style="background: #0069D9; color: #fff;">
			                            <th class="col-md-1">ID</th>
			                            <th class="col-md-1">Name</th>
			                            <th class="col-md-2">Email</th>
			                            <th class="col-md-3">Image</th>
			                            <th class="col-md-1">User</th>
			                            <th class="col-md-2">Action</th>
			                        </thead>
			                        <tbody>
			                        </tbody>
			                    </table>
			                </div>
	        			</div>
		            </div>
	        	</div>
	        </div>
	    </div>
	</section>
</div>
@endsection
