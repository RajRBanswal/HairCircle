@extends('desing.sidebar')

@section('content')

<link rel="stylesheet" href="./css/app.css">
<script src="{{ asset('/main/main.js') }}"></script>

<div>
    <h2>Upload Images
    </h2>
</div>

<hr>
<div>
@if(Session::has('img'))
    <div class="alert alert-danger w-50">
        <ul>

            <li>{{ Session::get('img') }}</li>

        </ul>
    </div>
    @endif
</div>
<div>

    <form method="post" action="{{ url('/save_slideshow_image') }}" enctype='multipart/form-data'>
        @csrf
        <label for="" class="control-label h3">New Image</label>
        <div class="row">
            <div class="col-6">
                <input type="file" name="slideshow" class="form-control" style="font-size: 15px;" placeholder="Upload Image" required>
            </div>
            <div class="col">
                <button type="submit" name="upload" id="upload" class="btn btn-info btn-lg p-2">Upload Image</button>
            </div>
        </div>
    </form>
    <p class="text-danger">Please Fixed Size Uploade Images [1320x550]</p>
</div>

<div>
    <table class="table table-hover mt-5" style="font-size: 15px;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Delete</th>


            </tr>
        </thead>
        <tbody>
        @php
        $i=1;
        @endphp
        @foreach($Slideshow as $img)
            <tr>   
                <td scope="col">@php echo $i++  @endphp</td>

                <td><img src="{{ asset('/storage/' . $img->image) }}"  alt="" style="height:100px;width:200px;"></td>
                <td>
                    <!-- Add delete button code -->
                    
                    <a href="/del_img/{{$img->id}}" type="submit" class="btn btn-danger">Delete Image</button> 
                                    
                </td>
            </tr>

        @endforeach

  

        
        </tbody>
    </table>
</div>
@endsection