@extends('desing.sidebar')

@section('content')

<link rel="stylesheet" href="./css/app.css">
<script src="{{ asset('/main/main.js') }}"></script>

<div>
    <h2>Task Image
    </h2>
</div>

<hr>
<div class="m-5">
    @foreach($open as $img)
    
    <img src="{{ asset('/storage/' . $img->task_img) }}"  alt="" style="height:800px;width:800px;">
    @endforeach
    </div>
    <div class="mt-5">
    <a href="/admin_task/{{ $img->user_id }}" type="button" class="btn btn-danger btn-lg">Back</a>
</div>
@endsection