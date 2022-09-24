<div class="box-body">
  	<div class="row">
  		<div class="col-md-6">
  			<div class="form-group">
                <label>Name : </label>
                {!! Form::text('name', old('name'), array('placeholder' => 'Enter Name','class' => 'form-control')) !!}
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>		
  		</div>
  		<div class="col-md-6">
  			<div class="form-group">
                <label>Email : </label>
                {!! Form::text('email', old('email'), array('placeholder' => 'Enter Email','class' => 'form-control')) !!}
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
		    </div>		
  		</div>
  	</div>
  	<div class="row">
  		<div class="col-md-6">
  			<div class="form-group">
                <label>Image : </label>
                {!! Form::file('image', array('class' => 'form-control p-1')) !!}
                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
		    </div>		
  		</div>
  		<div class="col-md-6">
  			<div class="form-group">
                <label>Is_admin :</label><br>
                {!! form::radio('is_admin', '1',true) !!} 
                    <span class="mb-2">Admin</span>
                {!! form::radio('is_admin', '0') !!} Normal User
		    </div>		
  		</div>
  	</div>
</div>
<!-- /.box-body -->
<div class="box-footer text-center">
    <button type="submit" class="btn btn-success btn-flat">Submit</button>
</div>