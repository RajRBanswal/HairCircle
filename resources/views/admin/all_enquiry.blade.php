@extends('admin.desing.sidebar')

@section('content')
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="{{ asset('/main/main.js') }}"></script>
<link type="text/css" rel="stylesheet" href="{{ asset('/css/main.css') }}">
<div class="card m-3 p-2">
    <div class="row mt-3">
        <div class="form-group col-md-6 col-12">
            <h2 class="ml-3">All Enquiry</h2>
        </div>
        <!--<div class="form-group col-md-6 col-12">-->
        <!--    <div class="search">-->
        <!--        <input class="search-input form-control" type="text" id="search-input" onkeyup="search();" placeholder="Search Here">-->
        <!--        </div>-->
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
                       
                        <th scope="col">Name</th></th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Message</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action </th>

                    </tr>
                </thead>
                <tbody id="table">
                    @foreach($enquiry as $getenq)
                    <tr id="tr">
                        <td>{{ $getenq->name }}</td>
                        <td>{{ $getenq->email }}</td>
                        <td>{{ $getenq->mobile_no }}</td>
                        <td>{{ $getenq->subject }}</td>
                        <td>{{ $getenq->message }}</td>
                        <td>{{ $getenq->created_at }}</td>
                        <td class="rrb">
                            <a href="" class="btn1 btn btn-outline-info form-group">View</a>
                            <a href="{{url('/enquiry_del',$getenq->id)}}" class="btn1 btn btn-outline-danger form-group">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          
            
        </div>
        
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
    td{
        font-size: 17px;
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
<script>
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