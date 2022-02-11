@extends('admin.desing.sidebar2')


@section('content')

        <div class="card m-3" >
            <div class="row mt-3 rrb">
                <div class="form-group col-lg-6 col-md-6 col-12">
                    <h2 class="ml-3">Product List</h2> 
                </div>
                <div class="form-group col-lg-6 col-md-6 col-12">
                    <div class="row">
                        <div class="form-group col-lg-6 col-md-6 col-12">
                            <div class="search">
                                <input class="search-input form-control search" type="text" onkeyup="search();" id="search-input" placeholder="Search Here">
                            </div>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-12">
                            <div id="reportrange" class="pull-left" style="background: #fff; cursor: pointer; padding: 7px; border: 1px solid #DAA520; width:100%">
                                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
                                <span></span> <b class="caret"></b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="form-group col-md-8"></div>
                <div class="form-group col-md-4 col-12">
                    <div class="search p-2">
                        <input class="search-input form-control" type="text" id="search-input" onkeyup="search();" placeholder="Search Here">
                    </div>
                </div>
            </div> -->
            <div id="hideDiv">
              @if ($message = Session::get('alert'))  
                <div class="alert alert-info">  
                  <ul>
                          {{ $message }}
                  </ul>
                </div>
              @endif
            </div>

        <div class="container table-full-width table-responsive" id="">
            <table id="example" class="table table-striped" id="current_order" style="width:100%">
                <thead>
                    <tr>
                        <th class="order">Product Name</th>
                        <th class="order">Expiry Date</th>
                        <th class="order">Batch No.</th>
                        <th class="order">Price</th>
                        <th class="order">Remaining</th>
                        <th class="order">Action</th>
                    </tr>
                        
                </thead>
       
               <tbody id="table1">
                   
               </tbody>
            </table> 
        </div>
    </div>
</div>
    </div>
<style type="text/css">
 /*   .texts{
        font-size: 20px;
         width: 30px;
    }
    .textx{
        width: 100px;
        font-size: 20px;
    }
    .table{
        font-size: 15px;
        font-weight: bold;
    }*/
    #myElem{
      font-size: 15px;  
    }
    .search-input{
        border:solid 1px #DAA520 ;
    }
    .rrb .btn1:hover{
                  background-color: #000;
                  color: #fff;
                }
                .rrb .btn1{
                  color: #000;
                  border-color: #DAA520;
                  /*width:105px;*/
                 margin: 10px;
                }
                #all_ordr1{
                    display:none;
                }
</style>
<script type="text/javascript">
    function all_order(){
        $(document).ready(function(){
            $('#all_ordr1').show();
            $('#current_order').hide();
            
        });
    }
</script>
<script type="text/javascript">
    setTimeout(function() {
        $('#hideDiv').fadeOut('fast');
    }, 3000); 

    
    function search(){
    $("#search-input").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#table1 tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
}
</script>
<script type='text/javascript'>
        $(document).ready(function(){

            $('input[name="sale"]').on('change',function(){
                var sale=$(this).val();
                alert(sale);

                if(sale){
                    $.ajax({
                        type: 'get',
                        url: 'update_quntitys/'+sale,
                        dataType: 'json',
                        success: function(data){
                            
                            // $('input[name="price"]').empty();
                            $.each(data, function(key,value){
                                $('input[name="abc"]').val(value);
                                alert("Data Updated Successfully");
                            });
                        }
                    });
                }
            });
        });

   </script>
   <script type="text/javascript">
    function Search_date(start, end){
        $(document).ready(function(){
          var sdate = moment(start).format('YYYY-MM-DD');
          var ldate = moment(end).format('YYYY-MM-DD');

            $.ajax({
               method:"get",
               url:'all_prdct/'+sdate+'/'+ldate,
               dataType:"json",
               success:function(data)
               {
                  console.log(data);
                   $('#table1').empty();
                    $.each(data, function(key,value){
                        // $('#table').hide();
                        // if (value.status == 1) {
                            $('#table1').append('<tr><td>'+value.product_name+'</td><td>'+value.expiry_date+'</td><td>'+value.batch_no+'</td><td>'+value.price+'</td><td>'+value.remaining_q+'</td><td class="rrb"><a href='+"{{url('/product_details')}}/"+value.id+' class="btn btn-outline-primary btn1 mr-1 mt-1">View</a></td></tr>');
                        // }
                    });

               }
            });
        });
    }
</script>

<script type="text/javascript">
   function get_new_vndor(start, end){}
</script>
@endsection