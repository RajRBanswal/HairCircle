@extends('admin.desing.sidebar')

@section('content')
<link rel="stylesheet" href="{{asset('public/css/style.css')}}">
<link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
<script src="main/main.js"></script>
<script src="{{asset('js/jquery.js')}}"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">





<div class="card m-3 p-2">
        <h2 class="ml-2 mt-3">Add Diagnosis</h2>
    @if(Session::has('message'))
    <div class="alert alert-danger w-50">
        <ul>

            <li>{{ Session::get('message') }}</li>

        </ul>
    </div>
    @endif
    @foreach($diagno as $dia)
    <form  action="{{url('/update_diagnosis',$dia->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container mt-3">
              <div class="row">
                <div class="form-group col-lg-6 col-12">
                    <label>Select Type</label>
                    <input type="text" name="diagnotype" value="{{$dia->type}}" class="form-control" readonly>
                </div>
                <div class="form-group col-lg-6 col-12">
                    <label>Add Diagnosis</label>
                    <input type="text" name="diagno" value="{{$dia->diagnosis}}" class="form-control">
                </div>              
              </div>
              <div class="row">
                <div class="form-group col-lg-6 col-12">
                    <label>Select Kit</label>
                    <select class="form-select form-control" name="kit" aria-label="Default select example">
                        @foreach($product as $prod)
                        <option value="{{$prod->id}}">{{$prod->product_name}}</option>
                        @endforeach
                    </select>
                    <input type="hidden" value="{{$dia->product_name}}" name="kit1">
                    <input type="hidden" value="{{$dia->price}}" name="price1">
                </div> 
                <div class="form-group col-lg-6 col-12">
                    <label>Add Suggestion</label>
                    <input type="text" name="sugge" value="{{$dia->suggetion}}" class="form-control">
                </div>
              </div>
 
            <br>
            <div class="row rrb">
                <div class="form-group col-12 col-lg-12">
                    <button type="submit" class="btn btn-outline-primary btn1">Update</button>
                </div>
            </div>

       
        </div>
 
        <style type="text/css">
        .form-control{
            font-size: 15px;
            size: 15px;
        }
        label{
            font-size: 15px;
        }
        .submit{
             font-size: 15px;
            size: 15px;
        }

                .rrb .btn1:hover{
                  background-color: #000;
                  color: #fff;
                }
                .rrb .btn1{
                  color: #000;
                  border-color: #DAA520;
                }
    </style>
    </form>
    @endforeach
     @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

</div>

@endsection