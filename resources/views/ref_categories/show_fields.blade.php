<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $refCategory->name }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $refCategory->description }}</p>
</div>

<!-- Reward Field -->
<div class="col-sm-12">
    {!! Form::label('reward', 'Reward:') !!}
    <p>{{ $refCategory->reward }}</p>
</div>

<!-- Congratulatory Message Field -->
<div class="col-sm-12">
    {!! Form::label('congratulatory_message', 'Congratulatory Message:') !!}
    <p>{{ $refCategory->congratulatory_message }}</p>
</div>

<!-- Target No Refferrals Field -->
<div class="col-sm-12">
    {!! Form::label('target_no_refferrals', 'Target No Refferrals:') !!}
    <p>{{ $refCategory->target_no_refferrals }}</p>
</div>

<!-- Points Per Refferral Field -->
<div class="col-sm-12">
    {!! Form::label('points_per_refferral', 'Points Per Refferral:') !!}
    <p>{{ $refCategory->points_per_refferral }}</p>
</div>

