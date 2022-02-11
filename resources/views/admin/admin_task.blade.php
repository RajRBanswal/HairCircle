@extends('admin.desing.sidebar')

@section('content')

<link rel="stylesheet" href="./css/app.css">
<script src="{{ asset('/main/main.js') }}"></script>

<div>
    <h2>Details Of Task</spam>
    </h2>
</div>

<hr>

<table class="table table-hover" style="font-size: 14px">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Date & Time</th>
      <th scope="col">Documents</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  @php
        $i=1;
    @endphp
  @foreach($open as $open)
    <tr>
      <th scope="row">
      @php
    
        echo $i++;
      @endphp
      </th>
      <td>{{ $open->updated_at }}</td>
      <td>
      <div class="row">
      <div class="col-md-4">
      <a href="/admin_task/open_img/{{ $open->id }}" type="submit"><img src="{{ asset('/storage/' . $open->task_img) }}"  alt="open image" style="height:50px;width:50px;"></a>
      </div>
      </div>
      </td>
      @if($open->status == 'approved')
      <td class="text-success">{{ $open->status }}</td>
      @else
      <td class="text-primary">{{ $open->status }}</td>
      @endif
    </tr>
    @endforeach
  </tbody>
</table>

            
      <div class="pt-5">
         <a href="{{ url()->previous() }}" class="btn btn-danger btn-lg" name="" type="submit">Back</a>
</div>

@endsection