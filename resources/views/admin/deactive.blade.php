@extends('admin.desing.sidebar')

@section('content')

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="{{ asset('/main/main.js') }}"></script>
<link type="text/css" rel="stylesheet" href="{{ asset('/css/main.css') }}">
<div class="card m-2 p-2">
    <div class="row mt-3">
        <div class="form-group col-lg-6 col-12">
            <h2 class="ml-3">Details of Employee</h2>
        </div>
        <div class="form-group col-lg-6 col-12" style="font-size:15px">
            <div class="row">
                <div class="col-md-6 col-6 "> <p class=" mx-1 py-2 text-center">Total Vendors : <strong >{{count($total)}}</strong> </p></div>
                
                <div class="col-md-6 col-6"><p class=" mx-1 py-2 text-center">Today's joining vendors : <strong>{{count($today)}}</strong></p></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6"></div>
        <div class="form-group col-md-6 col-12">
            <div class="search">
                <input class="search-input form-control" type="text" id="search-input" onkeyup="search();" placeholder="Search Here">
            </div>
        </div>
    </div>
    <div class="pagina container table-responsive">
            <table class="table table-hover mt-3" style="font-size: 15px;">
                <thead>
                    <tr>
                       
                        <th scope="col">Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Address</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody id="table">
                    @foreach($employees as $emp)
                    <tr id="tr">
                        <td>{{ $emp->name }}</td>
                        <td>{{ $emp->gender }}</td>
                        <td>{{ $emp->address }}, {{$emp->city}},{{$emp->pincode}}</td>
                        <td>{{ $emp->mobile_no }}</td>
                        <td>{{ $emp->created_at }}</td>
                        <td>
                            <div class="row rrb">
                                
                                <a href="{{url('/employee/open',$emp->id)}}" class="btn1 btn btn-outline-primary form-group" type="button" id="">Open</a>
                                
                                
                                <a href="{{url('/active/edit',$emp->id)}}" class="btn1 btn btn-outline-success form-group" type="button" id="">Edit</a>
                                
                                <!--<a href="/members/delete/{{$emp->id}}" class="col-md-3 mx-1  btn btn-outline-danger mt-1 " type="button" id="">Delete</a>-->
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>     
        </div>   
</div>   
     

<style type="text/css">
.search input{
    font-size: 15px;
    border:solid 1px #DAA520;
}
.text-center{
    border:solid 1px #DAA520;
}
 .rrb .btn1:hover{
                  background-color: #000;
                  color: #fff;
                }
                .rrb .btn1{
                  color: #000;
                  border-color: #DAA520;
                  width:70px;
                }
</style>

<script type="text/javascript">
function search(){ 
    $("#search-input").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#table tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
}
</script>

@endsection