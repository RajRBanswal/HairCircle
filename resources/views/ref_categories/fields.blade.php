<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Reward Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reward', 'Reward:') !!}
    {!! Form::text('reward', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Congratulatory Message Field -->
<div class="form-group col-sm-6">
    {!! Form::label('congratulatory_message', 'Congratulatory Message:') !!}
    {!! Form::text('congratulatory_message', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Target No Refferrals Field -->
<div class="form-group col-sm-6">
    {!! Form::label('target_no_refferrals', 'Target No Refferrals:') !!}
    {!! Form::text('target_no_refferrals', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Points Per Refferral Field -->
<div class="form-group col-sm-6">
    {!! Form::label('points_per_refferral', 'Points Per Refferral:') !!}
    {!! Form::text('points_per_refferral', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>