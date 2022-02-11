<!-- Vens Id Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('vens_id', 'Vens Id:') !!}
    {!! Form::textarea('vens_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', 'Gender:') !!}
    {!! Form::text('gender', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Shop Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('shop_name', 'Shop Name:') !!}
    {!! Form::text('shop_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Shop License Field -->
<div class="form-group col-sm-6">
    {!! Form::label('shop_license', 'Shop License:') !!}
    {!! Form::text('shop_license', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- City Field -->
<div class="form-group col-sm-6">
    {!! Form::label('city', 'City:') !!}
    {!! Form::text('city', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Pincode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pincode', 'Pincode:') !!}
    {!! Form::number('pincode', null, ['class' => 'form-control']) !!}
</div>

<!-- Mobile No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mobile_no', 'Mobile No:') !!}
    {!! Form::text('mobile_no', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- C Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('c_password', 'C Password:') !!}
    {!! Form::text('c_password', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Reffered By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reffered_by', 'Reffered By:') !!}
    {!! Form::number('reffered_by', null, ['class' => 'form-control']) !!}
</div>

<!-- No Of Refs Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_of_refs', 'No Of Refs:') !!}
    {!! Form::number('no_of_refs', null, ['class' => 'form-control']) !!}
</div>

<!-- Ref Level Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ref_level_id', 'Ref Level Id:') !!}
    {!! Form::number('ref_level_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Role Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('role_id', 'Role Id:') !!}
    {!! Form::number('role_id', null, ['class' => 'form-control']) !!}
</div>