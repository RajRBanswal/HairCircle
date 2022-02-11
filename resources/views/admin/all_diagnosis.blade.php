@extends('admin.desing.sidebar')

@section('content')
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="{{ asset('/main/main.js') }}"></script>
<link type="text/css" rel="stylesheet" href="{{ asset('/css/main.css') }}">
<div class="card m-3 p-2">    
            <h2 class="ml-3">Diagnosis List</h2>
        <div class="row mt-3 rrb">
            <div class="form-group col-md-6 col-12">
                <a href="{{url('/add_diagnosis')}}" class="btn btn-outline-primary btn1" type="submit" id="confirmo" >Add Diagnosis</a>
            </div>
            <!--<div class="form-group col-md-6 col-12">-->
            <!--    <div class="search">-->
            <!--        <input class="search-input form-control" type="text" onkeyup="search();" id="search-input" placeholder="Search Here">-->
            <!--    </div>-->
            <!--</div>-->
        </div>
        <div id="hideDiv">
             @if(Session::has('message'))
                <div class="alert alert-info texts" id="success">
                        {{ Session::get('message') }}
                </div>
            @endif
        </div>
       <div class="container table-full-width table-responsive" id="">
            <table id="example" class="table table-striped mt-3" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">Diagnosis Type</th>
                        <th scope="col">Diagnosis</th>
                        <th scope="col">Kit</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody id="table">
                    @foreach($dia as $diagno)
                    <tr id="tr">
                       <!--  -->
                        <td>{{ $diagno->type }}</td>
                        <td>{{ $diagno->diagnosis }}</td>
                        <td>{{ $diagno->product_name }}</td>
                        <td>{{ $diagno->price }}</td>
                        <td>
                            <div class="row rrb">
                                <a href="{{url('/diagno/edit',$diagno->id)}}" class="btn1 btn btn-outline-success form-group " type="button" id="">Edit</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>
<style type="text/css">
    .btn1{
    font-size: 15px;
}
              .search input{
                    font-size: 15px;
                    border:solid 1px #DAA520;
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

<script type="text/javascript">
function search(){  
    $("#search-input").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#table tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
}

            setTimeout(function() {
                $("#hideDiv").fadeOut('fast'); 
            }, 5000);
</script>


    @endsection