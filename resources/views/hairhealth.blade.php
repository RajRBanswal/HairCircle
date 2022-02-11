@extends('sidebar')

@section('content')
<div class="container">
      <div class="row mb-4 mt-4" id="freeques" >
        <nav class="navbar navbar-expand-lg navbar-light">
           <!--  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav"> -->
              <ul class="navbar-nav">
                <li class="nav-item active mr-2">
                  <h4><a class="nav-link" href="#" onclick="get_Ques_Dates();">Dates</a></h4>
                </li>
              <!--   <li class="nav-item mr-2">
                  <h4><a class="nav-link" href="#" onclick="get_Diagnosis();">Diagnosis</a></h4>
                </li>
                <li class="nav-item mr-2">
                  <h4><a class="nav-link" href="#" onclick="get_Treatment();">Treatments & DoctorAdvice</a></h4>
                </li> -->
                <!-- <li class="nav-item mr-2">
                  <h4><a class="nav-link" href="#">Kit Status</a></h4>
                </li> -->
              </ul>
            <!-- </div> -->
          </nav>
          <div class="container">
            <div id="hideDiv">
              @if ($message = Session::get('flash'))  
                <div class="alert alert-info">  
                  {{ $message }}
                </div>
              @endif
            </div>
            
              <!-- <div class="card ">  -->
                <div class="row">
                  <div class="form-group col-md-3 col-12 ques">
                    <h4 class="mt-3 ml-3">Past Visits</h4>                      
                    <div class="row rrb ml-2">
                      @foreach($q_data as $q_datas)
                        <input type="submit" name="submit" value="{{ $q_datas->date }}" class="btn btn-outline-primary btn2 " onclick="get_Ques(this.value);get_Image(this.value);get_Treatment(this.value);"><br>
                      @endforeach
                    </div>
                  </div>
                  <div class="form-group col-md-9 col-12 p-4">
                      <div class="row mb-2" id="headings">
                        <h4>KIT</h4>
                      </div>
                      <div class=" card form-group col-md-12 col-12 p-4" id="image">

                        <table class="table table-striped table-responsive table-dark " style="width:100%">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">Image</th>
                              <th scope="col">Diagnosis</th>
                              <th scope="col">Buy Product</th>
                            </tr>
                          </thead>
                          <tbody id="rrbs">
                          </tbody>
                        </table>
                      </div>
                      <div class="card form-group col-md-12 col-12" id="treatments" >
                        <h4 class="mt-3 ml-3">Doctor Advice</h4>                   
                          <div class="row" id="treatmentss">
                            
                          </div>
                      </div>
                      <div class="card p-2 form-group col-md-12 col-12" id="question122">
                          <h4 class="mt-3 ml-3">Questionnaire</h4> 
                        <table class="table table-striped table-responsive table-dark table-hover table-active">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">Questions</th>
                              <th scope="col">Answers</th>
                            <!--   <th scope="col">Types</th>
                              <th scope="col">Frequency / Result / Quantity</th>
                              <th scope="col">Reason / Duration </th> -->
                              <!-- <th scope="col">Date </th> -->
                            </tr>
                          </thead>
                          <tbody id="srbrrb">
                          </tbody>
                        </table>
                      </div>
                      
                  </div>
                  
                  <div class="form-group col-md-12 col-12" id="diagnosis_date" >
                    <form method="post" action="{{url('/set_schedule')}}" >
                    @csrf
                      <h4 class="mt-3 ml-3">Diagnosis Time Schedule</h4>                      
                      <div class="row">
                        <div class="form-group col-lg-6 col-md-6 col-12">
                          <span>Select Date</span>
                          <input type="date" id="date" name="date" class="form-control">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-12">
                          <span>Select Time Shift</span>
                           <select class="custom-select" id="shift" name="shift">
                              <option selected>Select Shift</option>
                              <option value="Morning">Morning</option>
                              <option value="Afternoon">Afternoon</option>
                              <option value="Eveninig">Eveninig</option>
                              <option value="Night">Night</option>
                            </select>
                        </div>
                      </div>
                      <div class="row">  
                        <div class="form-group col-lg-6 col-md-6 col-12">
                          <span>Select Time</span>
                          <input type="time" id="time" name="time" class="form-control">
                        </div>
                      </div>
                      <div class="row rrb">
                        <div class="form-group col-lg-6 col-md-6 col-12">
                          <input type="submit" name="submit" value="Submit" class="btn btn-outline-primary btn2">
                        </div>
                      </div>
                    </form>
                  </div>
                  
              </div>
            </div>
          </div>
                
      </div>
    <div id="mybutton" class="abc">
         <!--<button class="feedback">Feedback</button>-->
         <a href="{{url('/pquestion1')}}" class="feedback btn ">Go Through Questions For Further<br> Evaluation of Hair Health</a>
    </div>
      
    </div>
    <style type="text/css">
     /*   th{

          padding: 5px;
          margin: 5px;
        }
        .tabel{
          margin-right: 10px;
        }*/
        .feedback {
         background-color: transparent;
          color:#DAA520;
          font-weight: bold;
          padding: 10px 20px;
          border-radius: 50px;
          border:solid 2px;
          border-color: #000;
          font-size:12px;
        }
                    
        #mybutton {
          position: fixed;
          bottom: 50px;
          right: 10px;
        }
         #mybutton:hover {
          background-color: #DAA520;
          color:#000;
          border-radius: 50px;                   
        }
        .feedback:hover {
          border-style:none;
        }
        .rrb .btn1:hover{
          background-color: #fff;
          color: #000;
        }
        .rrb .btn1{
          color: #fff;
          border-color: #DAA520;
          width:100px;
          margin: 10px;

        }
        .rrb .btn2{
          color: #000;
          border-color: #DAA520;
          width:200px;
          margin: 10px;

        }
          .rrb .btn2:hover{
          background-color: #fff;
          color: #000;
        }
        #dates, #image,#question122,#headings{
          display: none;
        }
        #diagnosis_date{
          display: none;
        }
        #treatments{
          display: none;
        }
        .feedback{
  animation: color-change 3s infinite;
}

@keyframes color-change {
  0% { color: #fff; }
  50% { color: goldenrod; }
  100% { color: black; }
}
</style>
<script type="text/javascript">
  setTimeout(function() {
   $('#hideDiv').fadeOut('fast');
 }, 3000); 
</script>
    <script type="text/javascript">
      function get_Ques_Dates(){
        $(document).ready(function(){
          $('#dates').show();
          $('#diagnosis_date').hide();
          $('#treatments').hide();
        });
      } 
      function get_Diagnosis(){
        $(document).ready(function(){
          $('#diagnosis_date').show();
          $('#treatments').hide();
          $('#dates').hide();
        });
      }  
      function get_Treatment(){
        $(document).ready(function(){
          $('#diagnosis_date').hide();
          $('#treatments').show();
          $('#dates').hide();
        });
      }  
    </script>
    <script type="text/javascript">
    function get_Ques(name){  
      var c = 1;
        $(document).ready(function(){
                if(name){
                  $.ajax({
                        type: 'get',
                        url: 'get_Questions/'+name,
                        dataType: 'json',
                        success: function(data){
                          // console.log(data);
                          $('#srbrrb').empty();
                            $.each(data, function(key, modelName){
                                $('#question122').show();
                                 $('#srbrrb').append('<tr>').append('<td>'+modelName.questions+'</td>').append('<td>'+modelName.answers+'</td>')
                                 // if (modelName.type == null && modelName.freq_res_qua == null && modelName.reas_dura == null){
                                 //    append('<td>'+ +'</td>').append('<td>'+ +'</td>').append('<td>'+ +'</td></tr>');
                                 //  }else{
                                 //    append('<td>'+modelName.type+'</td>').append('<td style="width:150px;">'+modelName.freq_res_qua+'</td>').append('<td style="width:150px;">'+modelName.reas_dura+'</td></tr>');
                                 //  }   
                            });    
                        }
                    });
                }
        });
    }
    function get_Treatment(name){  
      var c = 1;
        $(document).ready(function(){
                if(name){
                  $.ajax({
                        type: 'get',
                        url: 'get_Treatments/'+name,
                        dataType: 'json',
                        success: function(data){
                          // console.log(data);
                          $('#treatmentss').empty();
                            $.each(data, function(key, modelName){
                              $('#treatments').show();
                                $('#treatmentss').append('<div class="form-group col-md-6 col-12 col-lg-6"><label>Appointment Date</label>  :  <label><b>'+modelName.date+'</b></label><br><label>Time</label>  :  <label><b>'+modelName.fromtime+'</b> To <b>'+modelName.totime+'</b></label><br><label>Doctor Name</label>  :  <label><b>'+modelName.doctor_name+'</b></label><br><label>Doctor Suggestion</label>  :  <label><b>'+modelName.suggestion+'</b></label><br><label>KIT</label>  :  <label><b>'+modelName.kit+'</b></label><br><label>Advice Date</label>  :  <label><b>'+modelName.update_date+'</b></label><br></div><div class="form-group col-md-6 col-12 col-lg-6"><img src="'+modelName.image+'" width="150" height="150"></div>'); 
                            });    
                        }
                    });
                }
        });
    }
    function get_Image(name){   
      var c = 1;
        $(document).ready(function(){
                if(name){
                  $.ajax({
                        type: 'get',
                        url: 'get_Image/'+name,
                        dataType: 'json',
                        success: function(data){
                          // console.log(data);
                          $('#rrbs').empty();
                            $.each(data, function(key, modelName){
                            $('#image').show();
                            $('#headings').show();
                            $('#rrbs').append('<tr>').append('<td><img src='+modelName.image+' style="width:150px; height:100px; padding: 10px;"/></td>').append('<td>'+modelName.product_name+'</td>').append('<td class="rrb"><a href='+"{{url('/buy_product')}}/"+modelName.id+' type="submit" name="submit" class="btn btn-outline-warning ml-2 mr-2 mt-2 btn1"> Buy KIT</a></td></tr>');
                            // <a href='+"{{url('/del_product')}}/"+modelName.id+' name="submit" class="btn btn-outline-warning ml-1 mr-2 mt-2 btn1"> Delete KIT</a>
                            });
                        }
                    });
                }
        });
    }


 
    </script>
@endsection