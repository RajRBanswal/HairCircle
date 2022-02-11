@extends('nav2')

@section('content')
<section class="faq-section results_table">
<div class="container ">

<div class="card">
    <div class="card-header" id="free-que">
        <h3>Are You Serious About Your Hair Health</h3>
    </div>
    <form method="post" action="{{ url('/question') }}" class="basicform" enctype="multipart/form-data">
     @csrf
      <div class="card-body">
        <div class="row">
             <div class="form-group col-md-6 col-12">
                <label>Full Name</label>
                <input type="text" name="name" id="name11" class="form-control required" required>
                <span style="display:none" id="name1">Please Enter Your Name</span>
             </div>
             <div class="form-group col-md-6 col-12">
                 <label>Mobile</label>
                <input type="text" name="mobile" id="mobile11" class="form-control required" required>
                <span style="display:none" id="mobile2">Please Enter Your Mobile Number</span>
             </div>
        </div>
    </div>
    <hr>
    <div class="container mt-1 p-4">
        <!-- Start First Question -->
      <div class="card">
        <div class="card-body" id="faqHeading-1" onclick="queAns()">
            <div class="row">
                <div class="form-group col-md-8 col-12">
                    <h5 name="question1" class="faq-title">
                        <span class="badge bg-dark"> 1. </span>  <label>My hair is Sensitive?</label>
                        <input type="text" name="faqHeading-1" value="My hair is Sensitive?" style="display:none;">
                        <span class="float-right" id="check"><img src="img/tick.png"></span>
                    </h5>

                </div>
                    <div class="form-group col-md-4 col-12 d-flex">
                    <!-- <div class="card-body "> -->
                        <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
                            <input type="radio" id="always" name="answer1" class="custom-control-input" value="Always" onclick="queAns()">
                            <label class="custom-control-label" for="always">Always</label>
                        </div> 
                        <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
                            <input type="radio" id="never1" name="answer1" class="custom-control-input" value="Never" onclick="queAns()">
                            <label class="custom-control-label" for="never1">Never</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
                            <input type="radio" id="sometimes1" name="answer1" class="custom-control-input" value="Sometimes" onclick="queAns()">
                            <label class="custom-control-label" for="sometimes1">Sometimes</label>
                        </div>                        
                    </div>
            </div>
        </div>
      </div>
    <!-- End First Question -->
    <br>
    <!-- Start Second Question -->
      <div class="card">
        <div class="card-body" id="faqHeading-2">
            <div class="row">
                <div class="form-group col-md-8 col-12">
                    <h5 name="question1" class="faq-title">
                        <span class="badge bg-dark"> 2. </span>  <label> My Scalp Itches/Hurts ?</label>
                        <input type="text" name="faqHeading-2" value="My Scalp Itches/Hurts ?" style="display:none;">
                        <span class="float-right" id="check1"><img src="img/tick.png"></span>
                    </h5>
                    
                </div>
                <div class="form-group col-md-4 col-12 d-flex">
                    <!-- <div class="card-body "> -->
                        <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
                            <input type="radio" id="always2" name="answer2" class="custom-control-input" value="Always" onclick="queAns1()">
                            <label class="custom-control-label" for="always2">Always</label>
                        </div> 
                        <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
                            <input type="radio" id="never2" name="answer2" class="custom-control-input" value="Never" onclick="queAns1()">
                            <label class="custom-control-label" for="never2">Never</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
                            <input type="radio" id="sometimes2" name="answer2" class="custom-control-input" value="Sometimes" onclick="queAns1()">
                            <label class="custom-control-label" for="sometimes2">Sometimes</label>
                        </div>
                                                
                    </div>
            </div>
        </div>
      </div>
    <!-- End Second Question -->
    <br>
    <!-- Start Third Question -->
      <div class="card">
        <div class="card-body" id="faqHeading-3">
            <div class="row">
                <div class="form-group col-md-8 col-12 d-flex justify-content-between">
                    <h5 name="question1" class="faq-title">
                        <span class="badge bg-dark"> 3. </span> <span> Everyone in My Family have Good Hair then Why Only I am Getting Bald ?</span>
                        <input type="text" name="faqHeading-3" value="Everyone in My Family have Good Hair then Why Only I am Getting Bald ?" style="display:none;">
                        <span class="float-right" id="check2"><img src="img/tick.png"></span>
                    </h5>
                    
                </div>
                <div class="form-group col-md-4 col-12 d-flex">
                    <!-- <div class="card-body "> -->
                        <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
                            <input type="radio" id="always3" name="answer3" class="custom-control-input" value="Always" onclick="queAns2()">
                            <label class="custom-control-label" for="always3">Always</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
                            <input type="radio" id="never3" name="answer3" class="custom-control-input" value="Never" onclick="queAns2()">
                            <label class="custom-control-label" for="never3">Never</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
                            <input type="radio" id="sometimes3" name="answer3" class="custom-control-input" value="Sometimes" onclick="queAns2()">
                            <label class="custom-control-label" for="sometimes3">Sometimes</label>
                        </div>
                                                 
                    </div>
            </div>
        </div>
      </div>
    <!-- End Third Question -->
    <br>
    <!-- Start Four Question -->
      <div class="card">
        <div class="card-body" id="faqHeading-4">
            <div class="row">
                <div class="form-group col-md-8 col-12 d-flex">
                    <h5 name="question1" class="faq-title ">
                        <span class="badge bg-dark"> 4. </span> <label> I am Afraid that My Loss of Hair Could Worsen ?</label>
                        <input type="text" name="faqHeading-4" value="I am Afraid that My Loss of Hair Could Worsen ?" style="display:none;">
                        <span class="float-right" id="check3"><img src="img/tick.png"></span>
                    </h5>
                    
                </div>
                <div class="form-group col-md-4 col-12 d-flex">
                    <!-- <div class="card-body "> -->
                        <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
                            <input type="radio" id="always4" name="answer4" class="custom-control-input" value="Always" onclick="queAns3()">
                            <label class="custom-control-label" for="always4">Always</label>
                        </div> 
                        <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
                            <input type="radio" id="never4" name="answer4" class="custom-control-input" value="Never" onclick="queAns3()">
                            <label class="custom-control-label" for="never4">Never</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
                            <input type="radio" id="sometimes4" name="answer4" class="custom-control-input" value="Sometimes" onclick="queAns3()">
                            <label class="custom-control-label" for="sometimes4">Sometimes</label>
                        </div>
                                                
                    </div>
            </div>
        </div>
      </div>
    <!-- End Four Question -->
    <br>
    <!-- Start Five Question -->
      <div class="card">
        <div class="card-body" id="faqHeading-5">
            <div class="row">
                <div class="form-group col-md-8 col-12 d-flex">
                    <h5 name="question1" class="faq-title ">
                        <span class="badge bg-dark"> 5. </span> <label> I See Every Morning/Evening in the Mirror Whether My Hair is Lost ?</label>
                        <input type="text" name="faqHeading-5" value="I See Every Morning/Evening in the Mirror Whether My Hair is Lost ?" style="display:none;">
                        <span class="float-right" id="check4"><img src="img/tick.png"></span>
                    </h5>
                    
                </div>
                <div class="form-group col-md-4 col-12 d-flex">
                    <!-- <div class="card-body "> -->
                        <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
                            <input type="radio" id="always5" name="answer5" class="custom-control-input" value="Always" onclick="queAns4()">
                            <label class="custom-control-label" for="always5">Always</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
                            <input type="radio" id="never5" name="answer5" class="custom-control-input" value="Never" onclick="queAns4()">
                            <label class="custom-control-label" for="never5">Never</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
                            <input type="radio" id="sometimes5" name="answer5" class="custom-control-input" value="Sometimes" onclick="queAns4()">
                            <label class="custom-control-label" for="sometimes5">Sometimes</label>
                        </div>
                                                 
                    </div>
            </div>
        </div>
      </div>
    <!-- End Five Question -->
    <br>
    <!-- Start Six Question -->
      <div class="card">
        <div class="card-body" id="faqHeading-6">
            <div class="row">
                <div class="form-group col-md-8 col-12 d-flex">
                    <h5 name="question1" class="faq-title ">
                        <span class="badge bg-dark"> 6. </span> <label> I Worry Sometimes About the Fact That I Look Old With My Hair Loss ?</label>
                        <input type="text" name="faqHeading-6" value="I Worry Sometimes About the Fact That I Look Old With My Hair Loss ?" style="display:none;">
                        <span class="float-right" id="check5"><img src="img/tick.png"></span>
                    </h5>
                    
                </div>
                <div class="form-group col-md-4 col-12 d-flex">
                    <!-- <div class="card-body "> -->
                        <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
                            <input type="radio" id="always6" name="answer6" class="custom-control-input" value="Always" onclick="queAns5()">
                            <label class="custom-control-label" for="always6">Always</label>
                        </div>  
                        <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
                            <input type="radio" id="never6" name="answer6" class="custom-control-input" value="Never" onclick="queAns5()">
                            <label class="custom-control-label" for="never6">Never</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
                            <input type="radio" id="sometimes6" name="answer6" class="custom-control-input" value="Sometimes" onclick="queAns5()">
                            <label class="custom-control-label" for="sometimes6">Sometimes</label>
                        </div>
                                               
                    </div>
            </div>
        </div>
      </div>
    <!-- End Six Question -->
    <br>
    <!-- Start Seven Question -->
      <div class="card">
        <div class="card-body" id="faqHeading-7">
            <div class="row">
                <div class="form-group col-md-8 col-12 d-flex">
                    <h5 name="question1" class="faq-title ">
                        <span class="badge bg-dark"> 7 </span> <span> People Talk Behind My Back About My Loss of Hair/This Appearance of My Hair ?</span>
                        <input type="text" name="faqHeading-7" value="People Talk Behind My Back About My Loss of Hair/This Appearance of My Hair ?" style="display:none;">
                        <span class="float-right" id="check6"><img src="img/tick.png"></span>
                    </h5>
                    
                </div>
                <div class="form-group col-md-4 col-12 d-flex">
                    <!-- <div class="card-body "> -->
                        <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
                            <input type="radio" id="always7" name="answer7" class="custom-control-input" value="Always" onclick="queAns6()">
                            <label class="custom-control-label" for="always7">Always</label>
                        </div> 
                        <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
                            <input type="radio" id="never7" name="answer7" class="custom-control-input" value="Never" onclick="queAns6()">
                            <label class="custom-control-label" for="never7">Never</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
                            <input type="radio" id="sometimes7" name="answer7" class="custom-control-input" value="Sometimes" onclick="queAns6()">
                            <label class="custom-control-label" for="sometimes7">Sometimes</label>
                        </div>
                                                
                    </div>
            </div>
        </div>
      </div>
    <!-- End Seven Question -->
    <br>
    <!-- Start Eight Question -->
      <div class="card">
        <div class="card-body" id="faqHeading-8">
            <div class="row">
                <div class="form-group col-md-8 col-12 d-flex">
                    <h5 name="question1" class="faq-title ">
                        <span class="badge bg-dark"> 8. </span> <span> I Feel Embarrassed By My Hair Condition, So I Avoid Photos on Social Media and in Public Gatherings ?</span>
                        <input type="text" name="faqHeading-8" value="I Feel Embarrassed By My Hair Condition, So I Avoid Photos on Social Media and in Public Gatherings ?" style="display:none;">
                        <span class="float-right" id="check7"><img src="img/tick.png"></span>
                    </h5>
                    
                </div>
                <div class="form-group col-md-4 col-12 d-flex">
                    <!-- <div class="card-body "> -->
                        <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
                            <input type="radio" id="always8" name="answer8" class="custom-control-input" value="Always" onclick="queAns7()">
                            <label class="custom-control-label" for="always8">Always</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
                            <input type="radio" id="never8" name="answer8" class="custom-control-input" value="Never" onclick="queAns7()">
                            <label class="custom-control-label" for="never8">Never</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
                            <input type="radio" id="sometimes8" name="answer8" class="custom-control-input" value="Sometimes" onclick="queAns7()">
                            <label class="custom-control-label" for="sometimes8">Sometimes</label>
                        </div>
                                                 
                    </div>
            </div>
        </div>
      </div>
    <!-- End Eight Question -->
    <br>
    <!-- Start Nine Question -->
      <div class="card">
        <div class="card-body" id="faqHeading-9">
            <div class="row">
                <div class="form-group col-md-8 col-12 d-flex">
                    <h5 name="question1" class="faq-title ">
                        <span class="badge bg-dark"> 9. </span> <span> My Loss of Hair is Problem For My Loved Ones(Parents, Spouse, Girlfriend), Marriage, Career Growth and Opportunities ?</span>
                        <input type="text" name="faqHeading-9" value="My Loss of Hair is Problem For My Loved Ones(Parents, Spouse, Girlfriend), Marriage, Career Growth and Opportunities ?" style="display:none;">
                        <span class="float-right" id="check6"><img src="img/tick.png"></span>
                    </h5>
                    
                </div>
                <div class="form-group col-md-4 col-12 d-flex">
                    <!-- <div class="card-body "> -->
                        <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
                            <input type="radio" id="always9" name="answer9" class="custom-control-input" value="Always" onclick="queAns8()">
                            <label class="custom-control-label" for="always9">Always</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
                            <input type="radio" id="never9" name="answer9" class="custom-control-input" value="Never" onclick="queAns8()">
                            <label class="custom-control-label" for="never9">Never</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
                            <input type="radio" id="sometimes9" name="answer9" class="custom-control-input" value="Sometimes" onclick="queAns8()">
                            <label class="custom-control-label" for="sometimes9">Sometimes</label>
                        </div>
                                                 
                    </div>
            </div>
        </div>
      </div>
    <!-- End Nine Question -->
    <br>
    <!-- Start Ten Question -->
      <div class="card">
        <div class="card-body" id="faqHeading-10">
            <div class="row">
                <div class="form-group col-md-8 col-12 d-flex">
                    <h5 name="question1" class="faq-title ">
                        <span class="badge bg-dark"> 10. </span> <span> I Was Not Taken Seriously at All by My Doctor With Regard to My Hair Problem and I Will Not Get My Lost Hairs Back Again ?</span>
                        <input type="text" name="faqHeading-10" value="I Was Not Taken Seriously at All by My Doctor With Regard to My Hair Problem and I Will Not Get My Lost Hairs Back Again ?" style="display:none;">
                        <span class="float-right" id="check6"><img src="img/tick.png"></span>
                    </h5>
                    
                </div>
                <div class="form-group col-md-4 col-12 d-flex">
                    <!-- <div class="card-body "> -->
                        <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
                            <input type="radio" id="always10" name="answer10" class="custom-control-input" value="Always" onclick="queAns9()">
                            <label class="custom-control-label" for="always10">Always</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
                            <input type="radio" id="never10" name="answer10" class="custom-control-input" value="Never" onclick="queAns9()">
                            <label class="custom-control-label" for="never10">Never</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
                            <input type="radio" id="sometimes10" name="answer10" class="custom-control-input" value="Sometimes" onclick="queAns9()">
                            <label class="custom-control-label" for="sometimes10">Sometimes</label>
                        </div>
                                                 
                    </div>
            </div>
        </div>
      </div>
    <!-- End Ten Question -->
    </div> 
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <a href=""></a>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            You Need Further Evaluation of Your Hair Health, Please Sign up Some Treatment
          </div>
          <div class="modal-footer rrb">
            <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-outline-primary btn1">Save</button>
          </div>
        </div>
      </div>
    </div>
    </form>
    <div class="form-group rrb mb-5">
        <center><button type="button" onclick="validate();abcd_data();" class="btn btn-outline-primary btn1">Submit</button></center>
    </div>
    
    
</div>

</div>
</section>
<style>
    #free-que{
  background: #DAA520;;
  color: #fff;
  text-align: center;
}
    .rrb .btn1:hover{
      background-color: #000;
      color: #fff;
    }
    .rrb .btn1{
      color: #000;
      border-color: #DAA520;
    }
.custom-control-input{
  border:2px solid white;
  box-shadow:0 0 0 1px #000;
  appearance:none;
  border-radius:50%;
  width: 1.15em;
  height: 1.15em;
  background-color:#fff;
  transition:all ease-in 0.0s;

}
.custom-control-input:checked{
  background-color:#DAA520;
}
    #check{display: none;}
    #check1{display: none;}    
    #check2{display: none;}    
    #check3{display: none;}    
    #check4{display: none;}    
    #check5{display: none;}    
    #check6{display: none;}    
    #check7{display: none;}    
    #check8{display: none;}    
    #check9{display: none;}
</style>
<script type="text/javascript">
  function queAns() {
     var checked_ans = document.querySelector('input[name = "answer1"]:checked');
           if(checked_ans != null){  //Test if something was checked
              $('#check').show();  //Alert the value of the checked.
            } 
            else {
                $('#check').hide();
               
            } 
}
function queAns1() {
     var checked_ans = document.querySelector('input[name = "answer2"]:checked');
           if(checked_ans != null){  //Test if something was checked
              $('#check1').show();  //Alert the value of the checked.
            } 
            else {
                $('#check1').hide();
            } 
}
function queAns2() {
     var checked_ans = document.querySelector('input[name = "answer3"]:checked');
           if(checked_ans != null){  //Test if something was checked
              $('#check2').show();  //Alert the value of the checked.
            } 
            else {
                $('#check2').hide();.
            } 
}
function queAns3() {
     var checked_ans = document.querySelector('input[name = "answer4"]:checked');
           if(checked_ans != null){  //Test if something was checked
              $('#check3').show();  //Alert the value of the checked.
            } 
            else {
                $('#check3').hide();
            } 
}
function queAns4() {
     var checked_ans = document.querySelector('input[name = "answer5"]:checked');
           if(checked_ans != null){  //Test if something was checked
              $('#check4').show();  //Alert the value of the checked.
            } 
            else {
                $('#check4').hide();
            } 
}

function queAns5() {
     var checked_ans = document.querySelector('input[name = "answer6"]:checked');
           if(checked_ans != null){  //Test if something was checked
              $('#check5').show();  //Alert the value of the checked.
            } 
            else {
                $('#check5').hide();
            } 
}

function queAns6() {
     var checked_ans = document.querySelector('input[name = "answer7"]:checked');
           if(checked_ans != null){  //Test if something was checked
              $('#check6').show();  //Alert the value of the checked.
            } 
            else {
                $('#check6').hide();
            } 
}

function queAns7() {
     var checked_ans = document.querySelector('input[name = "answer8"]:checked');
           if(checked_ans != null){  //Test if something was checked
              $('#check7').show();  //Alert the value of the checked.
            } 
            else {
                $('#check7').hide();
            } 
}


function queAns8() {
     var checked_ans = document.querySelector('input[name = "answer9"]:checked');
           if(checked_ans != null){  //Test if something was checked
              $('#check8').show();  //Alert the value of the checked.
            } 
            else {
                $('#check8').hide();
            } 
}


function queAns9() {
     var checked_ans = document.querySelector('input[name = "answer10"]:checked');
           if(checked_ans != null){  //Test if something was checked
              $('#check9').show();  //Alert the value of the checked.
            } 
            else {
                $('#check9').hide();
            } 
}
</script>

<script>
function validate(){
    $(document).ready(function(){
        alert('hiiiiiiiii');
        // var name11 = document.getElementById('name11').value;
        var n = document.getElementById("name11").value;
       alert(n);
       var . = document.getElementById("mobile11").value;
        if(n != "" || m != ""){
           document.getElementById("name1").show();
           document.getElementById("mobile1").show();
        } 
    });
}
    function abcd_data(){
      var temp = 0;
 
      var c_ans1 = document.querySelector('input[name = "answer1"]:checked').value;
      var c_ans2 = document.querySelector('input[name = "answer2"]:checked').value;
      var c_ans3 = document.querySelector('input[name = "answer3"]:checked').value;
      var c_ans4 = document.querySelector('input[name = "answer4"]:checked').value;
      var c_ans5 = document.querySelector('input[name = "answer5"]:checked').value;
      var c_ans6 = document.querySelector('input[name = "answer6"]:checked').value;
      var c_ans7 = document.querySelector('input[name = "answer7"]:checked').value;
      var c_ans8 = document.querySelector('input[name = "answer8"]:checked').value;
      var c_ans9 = document.querySelector('input[name = "answer9"]:checked').value;
      var c_ans10 = document.querySelector('input[name = "answer10"]:checked').value;
  
      if(c_ans1== 'Always'){temp++ ;}
      if(c_ans2== 'Always'){temp++ ;}
      if(c_ans3== 'Always'){temp++ ;}
      if(c_ans4== 'Always'){temp++ ;}
      if(c_ans5== 'Always'){temp++ ;}
      if(c_ans6== 'Always'){temp++ ;}
      if(c_ans7== 'Always'){temp++ ;}
      if(c_ans8== 'Always'){temp++ ;}
      if(c_ans9== 'Always'){temp++ ;}
      if(c_ans10== 'Always'){temp++ ;}

    if(temp >=3){
        // $('#exampleModal').modal('show');
        setTimeout(function() {
            $('#exampleModal').modal('show');
            // window.location = "{{url('/login')}}"; 
        }, 2000);    
         // $('#exampleModal').modal('show') 
         
        // alert('Please Login and Take Some Treatment'); 
    }else{
         alert('Everthing is Fine');
        window.location = "{{url('/')}}";
       
    }
 
}
</script>
@endsection
