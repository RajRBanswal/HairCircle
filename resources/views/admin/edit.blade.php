@extends('desing.sidebar')

@section('content')

<div class="h2">
    Update Details
</div>
<hr>



<div>
@if(Session::get('msg'))
    <div class="alert alert-danger w-50">
        <ul>

            <li class="h4">{{ Session::get('msg') }}</li>

        </ul>
    </div>
    @endif
    <form class="form-group w-50 h5" action="/active/edit/{{$edit->id}}/update" method="post">
        @csrf
        <p class="text-justify"><strong>Personal Detail</strong></p>
        <div class="form-group">
            <label>Sponser Id:</label>
          
            <input type="text" class="form-control card_border" placeholder="Sponser Id" value="{{$edit->sponserid}}"
                name="sponserid" required>
           
        </div>


        <div class="form-group">

            <label>Name(As Per Bank Details)*</label>
            <input type="text" class="form-control card_border" placeholder="Enter Name" value="{{$edit->name}}"
                name="name" required>
            @if($errors->has('name'))
            <div class="error alert alert-danger">{{$errors->first('name')}} </div>
            @endif
        </div>

        <div class="form-group ">
            <label>Mobile No.(Cannot be changed later)*</label>
            <input type="text" class="form-control card_border" placeholder="Enter Number" name="mobile"
                value="{{$edit->mobile}}" required>
            @if($errors->has('mobile'))
            <div class="error alert alert-danger">{{$errors->first('mobile')}} </div>
            @endif
        </div>

        <div class="form-group ">
            <label>Email Id</label>
            <input type="email" class="form-control card_border" placeholder="Enter email id" name="email"
                value="{{$edit->email}}">
            @if($errors->has('email'))
            <div class="error alert alert-danger">{{$errors->first('email')}} </div>
            @endif
        </div>

        <div class="row mt-5">
            <div class="offset-3"></div>
            <div class="col-md-3"><button type="submit"
                    class="btn btn-primary allbtn btn-block text-white card_border mt-1 ">Update</button></div>
            <div class="col-md-3">
            <a href="{{ url()->previous() }}"
                    class="btn btn-danger allbtn btn-block text-white card_border mt-1">Cancel</a></div>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif



    </form>



</div>

 @endsection









<!-- 
<form action="/active/edit/{{$edit->id}}/update" method="post">
    @csrf
    <div class="form-group">
        <input type="text" name="email" value="{{$edit->email}}" class="form-control">
        <button class="btn btn-primary">Update</button>
    </div>
</form> -->