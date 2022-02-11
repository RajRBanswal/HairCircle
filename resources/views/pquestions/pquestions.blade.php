@extends('sidebar')
<script src="{{asset('/assets/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('/assets/css/bootstrap-datepicker.css')}}"></script>
@section('content')

<div class="container card mt-5 mb-5 m-2">
    <div class="row">
        @if(session()->has('message'))
            <div class="alert alert-success" id="success">
                {{ session()->get('message') }}
            </div>
        @endif
        </div>
		
			<center><h3 class="mt-3">Evaluate My Hair Health</h3></center>

		<div class="container mt-3 mb-3 p-2" >
			<nav>
				<div class="nav nav-tabs" id="tab-pills" role="tablist" >
				    <button class="nav-link active" id="nav-chiefcomplaints-tab cc" data-bs-toggle="tab" data-bs-target="#chiefcomplaints" type="button" role="tab" aria-controls="nav-chiefcomplaints" aria-selected="false" >Chief Complaints </button>
				    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#history" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">History</button>
				    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#fhistory" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Family History</button>
				    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#ihistory" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Investigation History</button>
				</div>
				<!-- <div class="float-right">{{session('user.id')}}</div> -->
			</nav>
			<form method="post" action="{{  url('/answer_fques') }}" class="basicform" enctype="multipart/form-data"> 
    					@csrf
 <div class="tab-content">
    <div class="tab-pane fade show active" id="chiefcomplaints" role="tabpanel" aria-labelledby="nav-chiefcomplaints-tab">
 				  
        <!-- Start First Question -->
          <div class="card">
            <div class="card-header pques">
                <h6>Chief Complaints</h6>
            </div>
            <div class="card-body" id="question1">
                <div class="row">
                    <div class="form-group col-md-8 col-12">
                        <h5 name="question1" class="faq-title">
                            <span class="badge bg-dark"> Q </span><span> Hair Loss ? /</span>  <small style="color:red;">Hairs Falling But Not Growing</small>
                            <input type="text" name="question1" value="Hair Loss ?" style="display:none;">
                            <span class="float-right" id="check"><img src="img/tick.png"></span>
                        </h5>
                    </div>
                    	<div class="form-group col-md-4 col-12 d-flex ">
                            <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
                                <input type="radio" id="yes1" name="answer1" class="custom-control-input " value="Yes" onclick="abcdfg();"/>&nbsp;&nbsp;
                                <label for="yes">  Yes </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
                                <input type="radio" id="no" name="answer1" class="custom-control-input" value="No" onclick="abcdfg();"/>&nbsp;&nbsp;
                                <label for="no">  No </label>
                            </div>                       
                        </div>
                </div>
            </div>
          </div>
        <!-- End First Question -->
        <br>
        <!-- Start second Question -->
          <div class="card">
            <div class="card-body" id="question2">
                <div class="row">
                    <div class="form-group col-lg-8 col-12">
                        <h5 name="question2" class="faq-title">
                            <span class="badge bg-dark"> Q </span><span> Hair Shedding ? /</span><small style="color:red;">Hairs Falling Approximately More Than 100 Every Day</small>
                            <input type="text" name="question2" value="Hair Shedding ? " style="display:none;">
                            <span class="float-right" id="check1"><img src="img/tick.png"></span>
                        </h5>
                    </div>
                    	<div class="form-group col-lg-4 col-12 d-flex">
                            <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                                <input type="radio" id="yes" name="answer2" class="custom-control-input" value="Yes" onclick="queAns1();">&nbsp;&nbsp;
                                <label class="custom-control-label" for="yes">  Yes </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                                <input type="radio" id="no" name="answer2" class="custom-control-input" value="No" onclick="queAns1();">&nbsp;&nbsp;
                                <label class="custom-control-label" for="no">  No </label>
                            </div>                       
                        </div>
                </div>
            </div>
          </div>
        <!-- End second Question -->
         <br>
        <!-- Start third Question -->
          <div class="card">
            <div class="card-body" id="question3">
                <div class="row">
                    <div class="form-group col-lg-8 col-12">
                        <h5 name="question3" class="faq-title">
                            <span class="badge bg-dark"> Q </span><span> Dandruff ? /</span>
                            <input type="text" name="question3" value="Dandruff ?" style="display:none;">
                            <span class="float-right" id="check2"><img src="img/tick.png"></span>
                        </h5>
                    </div>
                    	<div class="form-group col-lg-4 col-12 d-flex" >
                            <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                                <input type="radio" id="yes" name="answer3" class="custom-control-input" value="Yes" onclick="queAns2();">&nbsp;&nbsp;
                                <label class="custom-control-label" for="yes">  Yes </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                                <input type="radio" id="no" name="answer3" class="custom-control-input" value="No" onclick="queAns2();">&nbsp;&nbsp;
                                <label class="custom-control-label" for="no">  No </label>
                            </div>                       
                        </div>
                </div>
            </div>
          </div>
        <!-- End third Question -->
        <br>
        <!-- Start four Question -->
          <div class="card">
            <div class="card-body" id="question4">
                <div class="row">
                    <div class="form-group col-lg-8 col-12">
                        <h5 name="question4" class="faq-title">
                            <span class="badge bg-dark"> Q </span><span> Baldness ?  /</span>
                            <input type="text" name="question4" value="Baldness ? " style="display:none;">
                            <span class="float-right" id="check3"><img src="img/tick.png"></span>
                        </h5>
                    </div>
                    	<div class="form-group col-lg-4 col-12 d-flex">
                            <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                                <input type="radio" id="yes" name="answer4" class="custom-control-input" value="Yes" onclick="queAns3();">&nbsp;&nbsp;
                                <label class="custom-control-label" for="yes">  Yes </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                                <input type="radio" id="no" name="answer4" class="custom-control-input" value="No" onclick="queAns3();">&nbsp;&nbsp;
                                <label class="custom-control-label" for="no">  No </label>
                            </div>                       
                        </div>
                </div>
            </div>
          </div>
        <!-- End four Question -->
        <br>
        <!-- Start five Question -->
          <div class="card">
            <div class="card-body" id="question5">
                <div class="row">
                    <div class="form-group col-lg-8 col-12">
                        <h5 name="question5" class="faq-title">
                            <span class="badge bg-dark"> Q </span><span> Excessive Hairs ? /</span><small style="color:red;">Excessive Body Hair and Facial Hairs, Hirsutism</small>
                            <input type="text" name="question5" value="Excessive Hairs ?" style="display:none;">
                            <span class="float-right" id="check4"><img src="img/tick.png"></span>
                        </h5>
                    </div>
                    	<div class="form-group col-lg-4 col-12 d-flex">
                            <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                                <input type="radio" id="yes" name="answer5" class="custom-control-input" value="Yes" onclick="queAns4();">&nbsp;&nbsp;
                                <label class="custom-control-label" for="yes">  Yes </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                                <input type="radio" id="no" name="answer5" class="custom-control-input" value="No" onclick="queAns4();">&nbsp;&nbsp;
                                <label class="custom-control-label" for="no">  No </label>
                            </div>                       
                        </div>
                </div>
            </div>
          </div>
        <!-- End five Question -->
        <br>
        <!-- Start six Question -->
          <div class="card">
            <div class="card-body" id="question6">
                <div class="row">
                    <div class="form-group col-lg-8 col-12">
                        <h5 name="question6" class="faq-title">
                            <span class="badge bg-dark"> Q </span><span> Damaged Hairs/Split Ends ?</span>
                            <input type="text" name="question6" value="Damaged Hairs/Split Ends ?" style="display:none;">
                            <span class="float-right" id="check5"><img src="img/tick.png"></span>
                        </h5>
                    </div>
                    	<div class="form-group col-lg-4 col-12 d-flex">
                            <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                                <input type="radio" id="yes" name="answer6" class="custom-control-input" value="Yes" onclick="queAns5();">&nbsp;&nbsp;
                                <label class="custom-control-label" for="yes">  Yes </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                                <input type="radio" id="no" name="answer6" class="custom-control-input" value="No" onclick="queAns5();">&nbsp;&nbsp;
                                <label class="custom-control-label" for="no">  No </label>
                            </div>                       
                        </div>
                </div>
            </div>
          </div>
        <!-- End six Question -->
        <br>
        <!-- Start seventh Question -->
          <div class="card">
            <div class="card-body" id="question7">
                <div class="row">
                    <div class="form-group col-lg-8 col-12">
                        <h5 name="question7" class="faq-title">
                            <span class="badge bg-dark"> Q </span><span> Greying of Hairs?</span>
                            <input type="text" name="question7" value="Greying of Hairs ?" style="display:none;">
                            <span class="float-right" id="check6"><img src="img/tick.png"></span>
                        </h5>
                    </div>
                    	<div class="form-group col-lg-4 col-12 d-flex">
                            <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                                <input type="radio" id="yes" name="answer7" class="custom-control-input" value="Yes" onclick="queAns6();">&nbsp;&nbsp;
                                <label class="custom-control-label" for="yes">  Yes </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                                <input type="radio" id="no" name="answer7" class="custom-control-input" value="No" onclick="queAns6();">&nbsp;&nbsp;
                                <label class="custom-control-label" for="no">  No </label>
                            </div>                       
                        </div>
                </div>
            </div>
          </div>
        <!-- End seventh Question -->
        <br>
        <!-- Start eight Question -->
          <div class="card">
          	<div class="card-header pques">
          		<h6>Duration</h6>
          	</div>
            <div class="card-body" id="question8">
                <div class="row">
                    <div class="form-group col-lg-8 col-12">
                        <h5 name="question8" class="faq-title">
                            <span class="badge bg-dark"> Q </span><span> < 6 Weeks</span>
                            <input type="text" name="question8" value="< 6 Weeks" style="display:none;">
                            <span class="float-right" id="check7"><img src="img/tick.png"></span>
                        </h5>
                    </div>
                    	<div class="form-group col-lg-4 col-12 d-flex">
                            <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                                <input type="radio" id="yes" name="answer8" class="custom-control-input" value="Yes" onclick="queAns7();">&nbsp;&nbsp;
                                <label class="custom-control-label" for="yes">  Yes </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                                <input type="radio" id="no" name="answer8" class="custom-control-input" value="No" onclick="queAns7();">&nbsp;&nbsp;
                                <label class="custom-control-label" for="no">  No </label>
                            </div>                       
                        </div>
                </div>
            </div>
          </div>
        <!-- End eight Question -->
         <br>
        <!-- Start nine Question -->
          <div class="card">
            <div class="card-body" id="question9">
                <div class="row">
                    <div class="form-group col-lg-8 col-12">
                        <h5 name="question9" class="faq-title">
                            <span class="badge bg-dark"> Q </span><span> > 6 weeks </span>
                            <input type="text" name="question9" value="> 6 Weeks" style="display:none;">
                            <span class="float-right" id="check8"><img src="img/tick.png"></span>
                        </h5>
                    </div>
                    	<div class="form-group col-lg-4 col-12 d-flex">
                            <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                                <input type="radio" id="yes" name="answer9" class="custom-control-input" value="Yes" onclick="queAns8();">&nbsp;&nbsp;
                                <label class="custom-control-label" for="yes">  Yes </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                                <input type="radio" id="no" name="answer9" class="custom-control-input" value="No" onclick="queAns8();">&nbsp;&nbsp;
                                <label class="custom-control-label" for="no">  No </label>
                            </div>                       
                        </div>
                </div>
            </div>
          </div>
        <!-- End nine Question -->
        <br>
        <!-- Start ten Question -->
          <div class="card">
          	<div class="card-header pques">
          		<h6>Pattern</h6>
          	</div>
            <div class="card-body" id="question10">
                <div class="row">
                    <div class="form-group col-lg-8 col-12">
                        <h5 name="question10" class="faq-title">
                            <span class="badge bg-dark"> Q </span><span> Abrupt /</span><small style="color:red;">Pattern[onset]</small>
                            <input type="text" name="question10" value="Abrupt" style="display:none;">
                            <span class="float-right" id="check9"><img src="img/tick.png"></span>
                        </h5>
                    </div>
                    	<div class="form-group col-lg-4 col-12 d-flex">
                            <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                                <input type="radio" id="yes" name="answer10" class="custom-control-input" value="Yes" onclick="queAns9();">&nbsp;&nbsp;
                                <label class="custom-control-label" for="yes">  Yes </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                                <input type="radio" id="no" name="answer10" class="custom-control-input" value="No" onclick="queAns9();">&nbsp;&nbsp;
                                <label class="custom-control-label" for="no">  No </label>
                            </div>                       
                        </div>
                </div>
            </div>
          </div>
        <!-- End ten Question -->
        <br>
        <!-- Start eleven Question -->
          <div class="card">
            <div class="card-body" id="question11">
                <div class="row">
                    <div class="form-group col-lg-8 col-12">
                        <h5 name="question11" class="faq-title">
                            <span class="badge bg-dark"> Q </span><span> Gradual / </span><small style="color:red;">Pattern[onset]</small>
                            <input type="text" name="question11" value="Gradual" style="display:none;">
                            <span class="float-right" id="check10"><img src="img/tick.png"></span>
                        </h5>
                    </div>
                    	<div class="form-group col-lg-4 col-12 d-flex">
                            <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                                <input type="radio" id="yes" name="answer11" class="custom-control-input" value="Yes" onclick="queAns10();">&nbsp;&nbsp;
                                <label class="custom-control-label" for="yes">  Yes </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                                <input type="radio" id="no" name="answer11" class="custom-control-input" value="No" onclick="queAns10();">&nbsp;&nbsp;
                                <label class="custom-control-label" for="no">  No </label>
                            </div>                       
                        </div>
                </div>
            </div>
          </div>
        <!-- End eleven Question -->
        <br>
        <!-- Start twelve Question -->
          <div class="card">
            <div class="card-body" id="question12">
                <div class="row">
                    <div class="form-group col-lg-8 col-12">
                        <h5 name="question12" class="faq-title">
                            <span class="badge bg-dark"> Q </span><span> Localised /</span><small style="color:red;">Hairs Falling From a Particular Area Such as Vertex, Angle/Temporal/Beared, Moustache,Eyebrows etc. </small><span style="color:#000;">Pattern[Area]</span>
                            <input type="text" name="question12" value="Localised" style="display:none;">
                            <span class="float-right" id="check11"><img src="img/tick.png"></span>
                        </h5>
                    </div>
                    	<div class="form-group col-lg-4 col-12 d-flex">
                            <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                                <input type="radio" id="yes" name="answer12" class="custom-control-input" value="Yes" onclick="queAns11();">&nbsp;&nbsp;
                                <label class="custom-control-label" for="yes">  Yes </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                                <input type="radio" id="no" name="answer12" class="custom-control-input" value="No" onclick="queAns11();">&nbsp;&nbsp;
                                <label class="custom-control-label" for="no">  No </label>
                            </div>                       
                        </div>
                </div>
            </div>
          </div>
        <!-- End twelve Question -->
        <br>
        <!-- Start thirteen Question -->
          <div class="card">
            <div class="card-body" id="question13">
                <div class="row">
                    <div class="form-group col-lg-8 col-13">
                        <h5 name="question13" class="faq-title">
                            <span class="badge bg-dark"> Q </span><span> Diffuse /</span><small style="color:red;">Hairs Falling From All Over the Scalp, Almost All Area is Involved/Cant Point a Specific Area </small><span style="color:#000;">Pattern[Area]</span>
                            <input type="text" name="question13" value="Diffuse" style="display:none;">
                            <span class="float-right" id="check12"><img src="img/tick.png"></span>
                        </h5>
                    </div>
                    	<div class="form-group col-lg-4 col-12 d-flex">
                            <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                                <input type="radio" id="yes" name="answer13" class="custom-control-input" value="Yes" onclick="queAns12();">&nbsp;&nbsp;
                                <label class="custom-control-label" for="yes">  Yes </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                                <input type="radio" id="no" name="answer13" class="custom-control-input" value="No" onclick="queAns12();">&nbsp;&nbsp;
                                <label class="custom-control-label" for="no">  No </label>
                            </div>                       
                        </div>
                </div>
            </div>
          </div>
        <!-- End therteen Question -->
         <br>
        <!-- Start fourteen Question -->
          <div class="card">
          	<div class="card-header pques">
          		<h6>Associated Symptom</h6>
          	</div>
            <div class="card-body" id="question14">
                <div class="row">
                    <div class="form-group col-lg-8 col-13">
                        <h5 name="question14" class="faq-title">
                            <span class="badge bg-dark"> Q </span><span> Hairs Do Not Come After Pulling</span>
                            <input type="text" name="question14" value="Hairs Do Not Come After Pulling" style="display:none;">
                            <span class="float-right" id="check13"><img src="img/tick.png"></span>
                        </h5>
                    </div>
                    	<div class="form-group col-lg-4 col-12 d-flex">
                            <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                                <input type="radio" id="yes" name="answer14" class="custom-control-input" value="Yes" onclick="queAns13();">&nbsp;&nbsp;
                                <label class="custom-control-label" for="yes">  Yes </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                                <input type="radio" id="no" name="answer14" class="custom-control-input" value="No" onclick="queAns13();">&nbsp;&nbsp;
                                <label class="custom-control-label" for="no">  No </label>
                            </div>                       
                        </div>
                </div>
            </div>
          </div>
        <!-- End fourteen Question -->
        <br>
        <!-- Start fifteen Question -->
          <div class="card">
            <div class="card-body" id="question15">
                <div class="row">
                    <div class="form-group col-lg-8 col-13">
                        <h5 name="question15" class="faq-title">
                            <span class="badge bg-dark"> Q </span><span> Small Pits Seen on Nail Plate</span>
                            <input type="text" name="question15" value="Small Pits Seen on Nail Plate" style="display:none;">
                            <span class="float-right" id="check14"><img src="img/tick.png"></span>
                        </h5>
                    </div>
                    	<div class="form-group col-lg-4 col-12 d-flex">
                            <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                                <input type="radio" id="yes" name="answer15" class="custom-control-input" value="Yes" onclick="queAns14();">&nbsp;&nbsp;
                                <label class="custom-control-label" for="yes">  Yes </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                                <input type="radio" id="no" name="answer15" class="custom-control-input" value="No" onclick="queAns14();">&nbsp;&nbsp;
                                <label class="custom-control-label" for="no">  No </label>
                            </div>                       
                        </div>
                </div>
            </div>
          </div>
        <!-- End fifteen Question -->
         <br>
        <!-- Start sixteen Question -->
          <div class="card">
            <div class="card-body" id="question16">
                <div class="row">
                    <div class="form-group col-lg-8 col-13">
                        <h5 name="question16" class="faq-title">
                            <span class="badge bg-dark"> Q </span><span> Itching</span>
                            <input type="text" name="question16" value="Itching" style="display:none;">
                            <span class="float-right" id="check15"><img src="img/tick.png"></span>
                        </h5>
                    </div>
                    	<div class="form-group col-lg-4 col-12 d-flex">
                            <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                                <input type="radio" id="yes" name="answer16" class="custom-control-input" value="Yes" onclick="queAns15();">&nbsp;&nbsp;
                                <label class="custom-control-label" for="yes">  Yes </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                                <input type="radio" id="no" name="answer16" class="custom-control-input" value="No" onclick="queAns15();">&nbsp;&nbsp;
                                <label class="custom-control-label" for="no">  No </label>
                            </div>                       
                        </div>
                </div>
            </div>
          </div>
        <!-- End sixteen Question -->
        <br>
        <!-- Start seventeen Question -->
          <div class="card">
            <div class="card-body" id="question17">
                <div class="row">
                    <div class="form-group col-lg-8 col-13">
                        <h5 name="question17" class="faq-title">
                            <span class="badge bg-dark"> Q </span><span> Pain</span>
                            <input type="text" name="question17" value="Pain" style="display:none;">
                            <span class="float-right" id="check16"><img src="img/tick.png"></span>
                        </h5>
                    </div>
                    	<div class="form-group col-lg-4 col-12 d-flex">
                            <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                                <input type="radio" id="yes" name="answer17" class="custom-control-input" value="Yes" onclick="queAns16();">&nbsp;&nbsp;
                                <label class="custom-control-label" for="yes">  Yes </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                                <input type="radio" id="no" name="answer17" class="custom-control-input" value="No" onclick="queAns16();">&nbsp;&nbsp;
                                <label class="custom-control-label" for="no">  No </label>
                            </div>                       
                        </div>
                </div>
            </div>
          </div>
        <!-- End seventeen Question -->
         <br>
        <!-- Start eightteen Question -->
          <div class="card">
            <div class="card-body" id="question18">
                <div class="row">
                    <div class="form-group col-lg-8 col-13">
                        <h5 name="question18" class="faq-title">
                            <span class="badge bg-dark"> Q </span><span> Burning</span>
                            <input type="text" name="question18" value="Burning" style="display:none;">
                            <span class="float-right" id="check17"><img src="img/tick.png"></span>
                        </h5>
                    </div>
                    	<div class="form-group col-lg-4 col-12 d-flex">
                            <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                                <input type="radio" id="yes" name="answer18" class="custom-control-input" value="Yes" onclick="queAns17();">&nbsp;&nbsp;
                                <label class="custom-control-label" for="yes">  Yes </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                                <input type="radio" id="no" name="answer18" class="custom-control-input" value="No" onclick="queAns17();">&nbsp;&nbsp;
                                <label class="custom-control-label" for="no">  No </label>
                            </div>                       
                        </div>
                </div>
            </div>
          </div>
        <!-- End eightteen Question -->
        <div class="row mt-5">
            <nav id="pagi">
                <div class="nav justify-content-center" id="tab-pills" role="tablist">
                    <button class="page-link acitve bg-dark text-white" id="nav-chiefcomplaints-tab" data-bs-toggle="tab" data-bs-target="#chiefcomplaints" type="button" role="tab" aria-controls="nav-chiefcomplaints" aria-selected="false">1</button>
                    <button class="page-link " id="nav-history-tab" data-bs-toggle="tab" data-bs-target="#history" type="button" role="tab" aria-controls="nav-history" aria-selected="false">2</button>
                    <button class="page-link " id="nav-fhistory-tab" data-bs-toggle="tab" data-bs-target="#fhistory" type="button" role="tab" aria-controls="nav-fhistory" aria-selected="false">3</button>
                    <button class="page-link " id="nav-ihistory-tab" data-bs-toggle="tab" data-bs-target="#ihistory" type="button" role="tab" aria-controls="nav-ihistory" aria-selected="false">4</button>
                </div>
            </nav>
        </div>
    </div>
	
    <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="nav-history-tab">
	<!-- Start First Question -->
      <div class="card">
      	<div class="card-header pques">
      		<h6>Treatment History</h6>
      	</div>
        <div class="card-body" id="question19">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question19" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Have you Taken Any Treatment in the Past for Same Issue ?</span>
                        <input type="text" name="question19" value="Have you Taken Any Treatment in the Past for Same Issue " style="display:none;">
                        <span class="float-right" id="check18"><img src="img/tick.png"></span>
                    </h5>
                </div>
                	<div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes" name="answer19" class="custom-control-input" value="Yes" onclick="queAns18(); extraQA1();" >&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer19" class="custom-control-input" value="No" onclick="queAns18(); extraQA2();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
                    <div id="yes-form" class="yes-form" style="display:none; padding-right: 10px;" >
                        <select class="form-select form-control" name="treattype[]" aria-label="Default select example">
                            <option selected>  Select Type  </option>
                            <option value="Allopathic">Allopathic</option>
                            <option value="Ayurvedic">Ayurvedic</option>
                            <option value="Homeopathic">Homeopathic</option>
                            <option value="Other">Other</option>
                        </select>
                        <br>
                        <select class="form-select form-control" name="result[]" aria-label="Default select example">
                            <option selected>  Select Result </option>
                            <option value="Responded">Responded</option>
                            <option value="Not Responded">Not Responded</option>
                        </select>
                        <br>
                        <input type="text" name="reason" class="form-control" placeholder="Reason for Stopping Treatment">
                    </div>
            </div>
        </div>
      </div>
    <!-- End First Question -->
    <br>
    <!-- Start second Question -->
      <div class="card">
        <div class="card-header pques">
            <h6>Medical History</h6>
        </div>
        <div class="card-body" id="question20">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question20" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Are you Suffering From Any Other Illness ?</span>
                        <input type="text" name="question20" value="Are you Suffering From Any Other Illness ? " style="display:none;">
                        <span class="float-right" id="check19"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer20" class="custom-control-input" value="Yes" onclick="queAns19(); queAns19_1();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer20" class="custom-control-input" value="No" onclick="queAns19(); queAns19_2();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>

                      <div id="yes-illness" class="yes-illness" style="display:none; padding-right: 10px;" >
                         <input type="text" name="historytype" class="form-control" placeholder="Enter Type"><br>
                         <select class="form-select form-control" name="takingtreat[]" aria-label="Default select example">
                            <option selected>  Select Result </option>
                            <option value="Allopathy">Allopathy</option>
                            <option value="Ayurvedic">Ayurvedic</option>
                            <option value="Homeopathy">Homeopathy</option>
                         </select>
                         <br>
                            <input type="text" name="reason" class="form-control" placeholder="Enter is it Under Control/Cured">
                      </div>
            </div>
        </div>
      </div>
    <!-- End second Question -->
    <br>
    <!-- Start third Question -->
      <div class="card">
        <div class="card-header pques">
            <h6>Surgical History</h6>
        </div>
        <div class="card-body" id="question21">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question21" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Have you Undergone any Surgery/Procedure in  the past ?</span>
                        <input type="text" name="question21" value="Have you Undergone any Surgery/Procedure in  the past ? " style="display:none;">
                        <span class="float-right" id="check20"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer21" class="custom-control-input" value="Yes" onclick="queAns20(); queAns20_1();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer21" class="custom-control-input" value="No" onclick="queAns20(); queAns20_2();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>

                    <div id="yes-surgery" class="yes-surgery" style="display:none; padding-right: 10px;" >
                        <input type="text" name="surgerytype" class="form-control" placeholder="Enter Type"><br>
                               
                        <input type="text" name="sdonetreat" class="form-control" placeholder="when it was done"><br>
                                
                        <input type="text" name="sreason" class="form-control" placeholder="Reason for surgery">
                    </div>
            </div>
        </div>
      </div>
    <!-- End third Question -->
    <br>
    <!-- Start four Question -->
      <div class="card">
        <div class="card-header pques">
            <h6>Drug History</h6>
        </div>
        <div class="card-body" id="question22">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question22" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Are you Taking any Medicine or Supplement Regularly ?</span>
                        <input type="text" name="question22" value="Are you Taking any Medicine or Supplement Regularly ? " style="display:none;">
                        <span class="float-right" id="check21"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer22" class="custom-control-input" value="Yes" onclick="queAns21(); queAns21_1();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer22" class="custom-control-input" value="No" onclick="queAns21(); queAns21_2();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>

                        <div id="yes-predoc" class="yes-predoc" style="display:none; padding-right: 10px;" >
                            <input type="text" name="predoctype" class="form-control" placeholder="Enter Type"><br>
                               
                            <input type="text" name="predoctreat" class="form-control" placeholder="Is it prescribed by doctor"><br>
                            <select class="form-select form-control" name="predocreason[]" aria-label="Default select example">
                                <option selected>  Select Frequency </option>
                                <option value="Daily">Daily</option>
                                <option value="Weekly">Weekly</option>
                                <option value="Monthly">Monthly</option>
                            </select>
                        </div>
            </div>
        </div>
      </div>
    <!-- End four Question -->
    <br>
    <!-- Start five Question -->
      <div class="card">
        <div class="card-header pques">
            <h6>Physical Activity/Exercise</h6>
        </div>
        <div class="card-body" id="question23">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question23" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Do you Exercise Regularly ?</span>
                        <input type="text" name="question23" value="Do you Exercise Regularly ? " style="display:none;">
                        <span class="float-right" id="check22"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer23" class="custom-control-input" value="Yes" onclick="queAns22(); queAns22_1();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer23" class="custom-control-input" value="No" onclick="queAns22(); queAns22_2();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>

                    <div id="yes-exercise" class="yes-exercise" style="display:none; padding-right: 10px;" >
                        <select  id="multi-select-demo" class="form-select form-control" name="exercisetype[]" aria-label="Default select example" placeholder="Select Type" multiple>
                            <option value="Aerobic">Aerobic</option>
                            <option value="Endurance">Endurance</option>
                            <option value="Strength">Strength</option>
                            <option value="Yoga">Yoga</option>
                            <option value="Cardio">Cardio</option>
                            <option value="Walking">Walking</option>
                            <option value="Running">Running</option>
                            <option value="Cycling">Cycling</option>
                        </select>
                        <br>
                        <input type="text" name="exFrequency" class="form-control" placeholder="Enter Frequency"><br>
                                
                        <input type="text" name="month" class="form-control" placeholder="Duration in Months">
                    </div>
            </div>
        </div>
      </div>
    <!-- End five Question -->
    <br>
    <!-- Start six Question -->
      <div class="card">
        <div class="card-body" id="question24">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question24" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Does your Job Require Continuous Sitting ?</span>
                        <input type="text" name="question24" value="Does your Job Require Continuous Sitting ? " style="display:none;">
                        <span class="float-right" id="check23"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer24" class="custom-control-input" value="Yes" onclick="queAns23();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer24" class="custom-control-input" value="No" onclick="queAns23();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div>
    <!-- End six Question -->
    <br>
    <!-- Start seven Question -->
      <div class="card">
        <div class="card-body" id="question25">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question25" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Does your Job Involve Shift Duties/Odd Timings ?</span>
                        <input type="text" name="question25" value="Does your Job Involve Shift Duties/Odd Timings ? " style="display:none;">
                        <span class="float-right" id="check24"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer25" class="custom-control-input" value="Yes" onclick="queAns24();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer25" class="custom-control-input" value="No" onclick="queAns24();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div>
    <!-- End seven Question -->
    <br>
    <!-- Start eight Question -->
      <div class="card">
        <div class="card-body" id="question26">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question26" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Do you Smoke ?</span>
                        <input type="text" name="question26" value="Do you Smoke ? " style="display:none;">
                        <span class="float-right" id="check25"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer26" class="custom-control-input" value="Yes" onclick="queAns25(); queAns25_1();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer26" class="custom-control-input" value="No" onclick="queAns25(); queAns25_2();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>

                    <div id="yes-smoke" class="yes-smoke" style="display:none; padding-right: 10px;" >
                        <select class="form-select form-control" name="smoketype[]" aria-label="Default select example">
                            <option selected>  Select Type </option>
                            <option value="Cigarette">Cigarette</option>
                            <option value="Cigar">Cigar</option>
                            <option value="Hookah">Hookah</option>
                            <option value="Bidi">Bidi</option>
                        </select>
                        <br>                               
                        <input type="text" name="quantity" class="form-control" placeholder="Quantity-packets-per-day"><br>
                                
                        <input type="text" name="duratioyear" class="form-control" placeholder="Duration in Years">
                    </div>
            </div>
        </div>
      </div>
    <!-- End eight Question -->
    <br>
    <!-- Start nine Question -->
      <div class="card">
        <div class="card-body" id="question27">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question27" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Do you Chew Tobacco in Any Form ?</span>
                        <input type="text" name="question27" value="Do you Chew Tobacco in Any Form ? " style="display:none;">
                        <span class="float-right" id="check26"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer27" class="custom-control-input" value="Yes" onclick="queAns26(); queAns26_1();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer27" class="custom-control-input" value="No" onclick="queAns26(); queAns26_2();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>

                    <div id="yes-tobacco" class="yes-tobacco" style="display:none; padding-right: 10px;" >
                        <select class="form-select form-control" name="tbktype[]" aria-label="Default select example">
                            <option selected>  Select Type </option>
                            <option value="Zarda">Zarda</option>
                            <option value="Khaini">Khaini</option>
                            <option value="Raw">Raw</option>
                            <option value="Flavoured">Flavoured</option>
                        </select>
                        <br>
                        <input type="text" name="quantity" class="form-control" placeholder="Quantity-packets-per-day"><br>
                                
                         <input type="text" name="duratioyear" class="form-control" placeholder="Duration in Years">
                    </div>
            </div>
        </div>
      </div>
    <!-- End nine Question -->
    <br>
    <!-- Start ten Question -->
      <div class="card">
        <div class="card-body" id="question28">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question28" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Do you Consume Alcohol ?</span>
                        <input type="text" name="question28" value="Do you Donsume Alcohol ? " style="display:none;">
                        <span class="float-right" id="check27"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer28" class="custom-control-input" value="Yes" onclick="queAns27(); queAns27_1();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer28" class="custom-control-input" value="No" onclick="queAns27(); queAns27_2();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>

                    <div id="yes-alcohol" class="yes-alcohol" style="display:none; padding-right: 10px;" >
                        <select class="form-select form-control" name="alctype[]" aria-label="Default select example">
                            <option selected>  Select Type </option>
                            <option value="Beer">Beer</option>
                            <option value="Vodka">Vodka</option>
                            <option value="Whiskey">Whiskey</option>
                            <option value="Wine">Wine</option>
                            <option value="Rum">Rum</option>
                            <option value="Breezer">Breezer</option>
                        </select>
                        <br>
                        <input type="text" name="quantity" class="form-control" placeholder="Quantity-packets-per-day"><br>
                                
                        <input type="text" name="duratioyear" class="form-control" placeholder="Duration in Years">
                    </div>
            </div>
        </div>
      </div>
    <!-- End ten Question -->
    <br>
    <!-- Start eleven Question -->
      <div class="card">
        <div class="card-header pques">
            <h6>Eating Pattern/Habits</h6>
        </div>
        <div class="card-body" id="question29">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question29" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> According to you is your Diet Healthy and Balanced ?</span>
                        <input type="text" name="question29" value="According to you is your Diet Healthy and Balanced ? " style="display:none;">
                        <span class="float-right" id="check28"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer29" class="custom-control-input" value="Yes" onclick="queAns28();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer29" class="custom-control-input" value="No" onclick="queAns28();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div>
    <!-- End eleven Question -->
    <br>
    <!-- Start twelve Question -->
      <div class="card">
        <div class="card-body" id="question30">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question30" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Do you Think you Consume Appropriate Quantity and Quality of Proteins ?</span>
                        <input type="text" name="question30" value="Do you Think you Consume Appropriate Quantity and Quality of Proteins ? " style="display:none;">
                        <span class="float-right" id="check29"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer30" class="custom-control-input" value="Yes" onclick="queAns29(); queAns29_1();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer30" class="custom-control-input" value="No" onclick="queAns29(); queAns29_2();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
                    <div id="yes-protein" class="yes-protein" style="display:none; padding-right: 10px;" >
                        <select class="form-select form-control" name="prosource[]" aria-label="Default select example">
                            <option selected>  Select Source </option>
                            <option value="Pulses">Pulses</option>
                            <option value="Eggs">Eggs</option>
                            <option value="Animal Protein">Animal Protein</option>
                            <option value="Supplements">Supplements</option>
                        </select>
                        <br>
                        <input type="text" name="proquantity" class="form-control" placeholder="Quantity">          
                    </div>
            </div>
        </div>
      </div>
    <!-- End twelve Question -->
    <br>
    <!-- Start therteen Question -->
      <div class="card">
        <div class="card-body" id="question31">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question31" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Do you Think you Consume Appropriate Quantity and Quality of EFA/W3 ?</span>
                        <input type="text" name="question31" value="Do you Think you Consume Appropriate Quantity and Quality of EFA/W3 ? " style="display:none;">
                        <span class="float-right" id="check30"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer31" class="custom-control-input" value="Yes" onclick="queAns30(); queAns30_1();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer31" class="custom-control-input" value="No" onclick="queAns30(); queAns30_2();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
                    <div id="yes-efa" class="yes-efa" style="display:none; padding-right: 10px;" >
                        <select class="form-select form-control" name="efasource[]" aria-label="Default select example">
                            <option selected>  Select Source </option>
                            <option value="Edible Oil">Edible Oil</option>
                            <option value="Seed Mix">Seed Mix</option>
                            <option value="Nuts">Nuts</option>
                            <option value="Fish Oil Capsule">Fish Oil Capsule</option>
                            <option value="Cod Liver Capasules">Cod Liver Capasules</option>
                        </select>
                        <br>
                        <input type="text" name="efsquantity" class="form-control" placeholder="Quantity">
                    </div>
            </div>
        </div>
      </div>
    <!-- End therteen Question -->
    <br>
    <!-- Start fourteen Question -->
      <div class="card">
        <div class="card-body" id="question32">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question32" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Fruits,Sprouts and Salad Consumption ?</span>
                        <input type="text" name="question32" value="Fruits,Sprouts and Salad Consumption ? " style="display:none;">
                        <span class="float-right" id="check31"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer32" class="custom-control-input" value="Yes" onclick="queAns31(); queAns31_1();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer32" class="custom-control-input" value="No" onclick="queAns31(); queAns31_2();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
                    <div id="yes-fruits" class="yes-fruits" style="display:none; padding-right: 10px;" >
                        <select class="form-select form-control" name="frusource[]" aria-label="Default select example">
                            <option selected>  Select Source </option>
                            <option value="Fruit">Fruit</option>
                            <option value="Salad">Salad</option>
                            <option value="Sproute">Sproute</option>
                        </select>
                        <br>
                        <input type="text" name="fruquantity" class="form-control" placeholder="Quantity">
                    </div>
            </div>
        </div>
      </div>
    <!-- End fourteen Question -->
    <br>
    <!-- Start fifteen Question -->
      <div class="card">
        <div class="card-body" id="question33">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question33" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> How Frequently you Consume Junk Food ?</span>
                        <input type="text" name="question33" value="How Frequently you Consume Junk Food ? " style="display:none;">
                        <span class="float-right" id="check33"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer33" class="custom-control-input" value="Yes" onclick="queAns33(); queAns33_1();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer33" class="custom-control-input" value="No" onclick="queAns33(); queAns33_2();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
                    <div id="yes-food" class="yes-food" style="display:none; padding-right: 10px;" >
                        <select class="form-select form-control" name="foodtype[]" aria-label="Default select example">
                            <option selected>  Select Type </option>
                            <option value="Bakery">Bakery</option>
                            <option value="Deep Fried">Deep Fried</option>
                            <option value="Noodles">Noodles</option>
                        </select>
                        <br>
                        <select class="form-select form-control" name="foodfrequency[]" aria-label="Default select example">
                            <option selected>  Select Type </option>
                            <option value="Daily">Daily</option>
                            <option value="Weekly">Weekly</option>
                            <option value="Fortnightly">Fortnightly</option>
                        </select>
                        <br>
                        <input type="text" name="foodquantity" class="form-control" placeholder="Approximate Quantity">
                    </div>
            </div>
        </div>
      </div>
    <!-- End fifteen Question -->
    <br>
    <!-- Start sixteen Question -->
      <div class="card">
        <div class="card-body" id="question34">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question34" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Consumption of Milk and Milk Products ?</span>
                        <input type="text" name="question34" value="Consumption of Milk and Milk Products ? " style="display:none;">
                        <span class="float-right" id="check34"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer34" class="custom-control-input" value="Yes" onclick="queAns34(); queAns34_1();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer34" class="custom-control-input" value="No" onclick="queAns34(); queAns34_2();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
                    <div id="yes-milk" class="yes-milk" style="display:none; padding-right: 10px;" >
                        <select class="form-select form-control" name="milktype[]" aria-label="Default select example">
                            <option selected>  Select Type </option>
                            <option value="Cow">Cow</option>
                            <option value="Boffallo">Boffallo</option>
                            <option value="Camel">Camel</option>
                            <option value="Full Cream">Full Cream</option>
                            <option value="Boffallo">Boffallo</option>
                            <option value="Goat">Goat</option>
                        </select>
                        <br>
                        <input type="text" name="milkfrequency" class="form-control" placeholder="Frequency"><br>
                        <input type="text" name="milkquantity" class="form-control" placeholder="Approximate Quantity-----ml/day">
                    </div>
            </div>
        </div>
      </div>
    <!-- End sixteen Question -->
    <br>
    <!-- Start seventeen Question -->
      <div class="card">
        <div class="card-body" id="question35">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question35" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Consumption of Cold Drinks,Canned Fruit Juices ?</span>
                        <input type="text" name="question35" value="Consumption of Cold Drinks,Canned Fruit Juices ? " style="display:none;">
                        <span class="float-right" id="check35"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer35" class="custom-control-input" value="Yes" onclick="queAns35(); queAns35_1();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer35" class="custom-control-input" value="No" onclick="queAns35(); queAns35_2();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
                    <div id="yes-juice" class="yes-juice" style="display:none; padding-right: 10px;" >
                        <input type="text" name="juitype" class="form-control" placeholder="Type"><br>      
                        <input type="text" name="juifrequency" class="form-control" placeholder="Frequency"><br>
                        <input type="text" name="juiquantity" class="form-control" placeholder="Approximate Quantity-----ml/day">
                    </div>
            </div>
        </div>
      </div>
    <!-- End seventeen Question -->
    <br>
    <!-- Start eightteen Question -->
      <div class="card">
        <div class="card-header pques">
            <h6>Weight History</h6>
        </div>
        <div class="card-body" id="question36">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question36" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Have you Lost Weight Recently ?</span>
                        <input type="text" name="question36" value="Have you Lost Weight Recently ? " style="display:none;">
                        <span class="float-right" id="check36"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer36" class="custom-control-input" value="Yes" onclick="queAns36(); queAns36_1();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer36" class="custom-control-input" value="No" onclick="queAns36(); queAns36_2();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
                    <div id="yes-lostw" class="yes-lost" style="display:none; padding-right: 10px;" >
                        <input type="text" name="lostwho" class="form-control" placeholder="Who/How"><br>
                        <input type="text" name="lostquantity" class="form-control" placeholder="Quantity in Kg">
                        <br>
                        <input type="text" name="lostduration" class="form-control" placeholder="Duration in Months">
                    </div>
            </div>
        </div>
      </div>
    <!-- End eightteen Question -->
    <br>
    <!-- Start nineteen Question -->
      <div class="card">
        <div class="card-body" id="question37">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question37" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Have you Gained Weight Recently ?</span>
                        <input type="text" name="question37" value="Have you Gained Weight Recently ? " style="display:none;">
                        <span class="float-right" id="check37"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer37" class="custom-control-input" value="Yes" onclick="queAns37(); queAns37_1();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer37" class="custom-control-input" value="No" onclick="queAns37(); queAns37_2();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
                    <div id="yes-gainw" class="yes-gain" style="display:none; padding-right: 10px;" >
                        <input type="text" name="gainwho" class="form-control" placeholder="Who/How"><br>     
                        <input type="text" name="gainquantity" class="form-control" placeholder="Quantity in Kg"><br>
                        <input type="text" name="gainduration" class="form-control" placeholder="Duration in Months">
                    </div>
            </div>
        </div>
      </div>
    <!-- End eightteen Question -->
    <br>
    <!-- Start nineteen Question -->
      <!-- <div class="card">
        <div class="card-body" id="question38">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question38" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Do you have Difficulty in Losing Weight ?</span>
                        <input type="text" name="question38" value="Do you have Difficulty in Losing Weight ? " style="display:none;">
                        <span class="float-right" id="check38"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer38" class="custom-control-input" value="Yes">
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer38" class="custom-control-input" value="No">
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div> -->
    <!-- End nineteen Question -->
    <br>
    <!-- Start twenty Question -->
      <div class="card">
        <div class="card-header pques">
            <h6>Psychosocial History</h6>
        </div>
        <div class="card-body" id="question39">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question39" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Does your Looks Makes you Anxious/Depressive ?</span>
                        <input type="text" name="question39" value="Does your Looks Makes you Anxious/Depressive ? " style="display:none;">
                        <span class="float-right" id="check39"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer39" class="custom-control-input" value="Yes" onclick="queAns39();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer39" class="custom-control-input" value="No" onclick="queAns39();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div>
    <!-- End twenty Question -->
    <br>
    <!-- Start twentyone Question -->
      <div class="card">
        <div class="card-body" id="question40">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question40" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Do you Avoid Interacting with People ?</span>
                        <input type="text" name="question40" value="Do you Avoid Interacting with People ? " style="display:none;">
                        <span class="float-right" id="check40"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer40" class="custom-control-input" value="Yes" onclick="queAns40();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer40" class="custom-control-input" value="No" onclick="queAns40();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div>
    <!-- End twentyone Question -->
    <br>
    <!-- Start twentytwo Question -->
      <div class="card">
        <div class="card-body" id="question41">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question41" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Have you Suffered from any Psychological Trauma in Recent Past ?</span>
                        <input type="text" name="question41" value="Have you Suffered from any Psychological Trauma in Recent Past ? " style="display:none;">
                        <span class="float-right" id="check41"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer41" class="custom-control-input" value="Yes" onclick="queAns41();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer41" class="custom-control-input" value="No" onclick="queAns41();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div>
    <!-- End twentytwo Question -->
    <br>
    <!-- Start twentythree Question -->
      <div class="card">
        <div class="card-body" id="question42">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question42" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Do you have Habit of Playing with your Hairs ?</span>
                        <input type="text" name="question42" value="Do you have Habit of Playing with your Hairs ? " style="display:none;">
                        <span class="float-right" id="check42"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer42" class="custom-control-input" value="Yes" onclick="queAns42();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer42" class="custom-control-input" value="No" onclick="queAns42();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div>
    <!-- End twentythree Question -->
    <br>
    <!-- Start twentyfour Question -->
      <div class="card">
        <div class="card-body" id="question43">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question43" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Do you Express your Emotions/Anger ?</span>
                        <input type="text" name="question43" value="Do you Express your Emotions/Anger ? " style="display:none;">
                        <span class="float-right" id="check43"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer43" class="custom-control-input" value="Yes" onclick="queAns43();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer43" class="custom-control-input" value="No" onclick="queAns43();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div>
    <!-- End twentyfour Question -->
    <br>
    <!-- Start twentyfive Question -->
      <div class="card">
        <div class="card-header pques">
            <h6>Hair Cosmetics History</h6>
        </div>
        <div class="card-body" id="question44">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question44" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> do you use cap/turban ?</span>
                        <input type="text" name="question44" value="do you use cap/turban ? " style="display:none;">
                        <span class="float-right" id="check44"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer44" class="custom-control-input" value="Yes" onclick="queAns44();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer44" class="custom-control-input" value="No" onclick="queAns44();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div>
    <!-- End twentyfive Question -->
    <br>
    <!-- Start twentysix Question -->
      <div class="card">
        <div class="card-body" id="question45">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question45" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Do you Wear Tight Pony Tail ?</span>
                        <input type="text" name="question45" value="Do you Wear Tight Pony Tail ? " style="display:none;">
                        <span class="float-right" id="check45"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer45" class="custom-control-input" value="Yes" onclick="queAns45();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer45" class="custom-control-input" value="No" onclick="queAns45();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div>
    <!-- End twentysix Question -->
    <br>
    <!-- Start twentyseven Question -->
      <div class="card">
        <div class="card-body" id="question46">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question46" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Do you use any Hair Extensions ?</span>
                        <input type="text" name="question46" value="Do you use any Hair Extensions ? " style="display:none;">
                        <span class="float-right" id="check46"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer46" class="custom-control-input" value="Yes" onclick="queAns46();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer46" class="custom-control-input" value="No" onclick="queAns46();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div>
    <!-- End twentyseven Question -->
    <br>
    <!-- Start twentyeight Question -->
      <div class="card">
        <div class="card-body" id="question47">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question47" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Do you Regularly Do Hair Treatment such as Starightning ?</span>
                        <input type="text" name="question47" value="Do you Regularly Do Hair Treatment such as Starightning ? " style="display:none;">
                        <span class="float-right" id="check47"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer47" class="custom-control-input" value="Yes" onclick="queAns47();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer47" class="custom-control-input" value="No" onclick="queAns47();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div>
    <!-- End twentyeight Question -->
    <br>
    <!-- Start twentynine Question -->
      <div class="card">
        <div class="card-body" id="question48">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question48" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Do you Oil Your Hairs ?</span>
                        <input type="text" name="question48" value="Do you Oil Your Hairs ? " style="display:none;">
                        <span class="float-right" id="check48"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer48" class="custom-control-input" value="Yes" onclick="queAns48();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer48" class="custom-control-input" value="No" onclick="queAns48();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div>
    <!-- End twentynine Question -->
    <br>
    <!-- Start therty Question -->
      <div class="card">
        <div class="card-body" id="question49">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question49" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Do you Wash Your Hairs Daily ?</span>
                        <input type="text" name="question49" value="Do you Wash Your Hairs Daily ? " style="display:none;">
                        <span class="float-right" id="check49"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer49" class="custom-control-input" value="Yes" onclick="queAns49();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer49" class="custom-control-input" value="No" onclick="queAns49();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div>
    <!-- End therty Question -->
    <br>
    <!-- Start thertyone Question -->
      <div class="card">
        <div class="card-body" id="question50">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question50" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Do you Use Conditioner Regularly ?</span>
                        <input type="text" name="question50" value="Do you Use Conditioner Regularly ? " style="display:none;">
                        <span class="float-right" id="check50"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer50" class="custom-control-input" value="Yes" onclick="queAns50();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer50" class="custom-control-input" value="No" onclick="queAns50();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div>
    <!-- End thertyone Question -->
    <br>
    <!-- Start thertytwo Question -->
      <div class="card">
        <div class="card-body" id="question51">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question51" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Do you use Shampoo Regularly ?</span>
                        <input type="text" name="question51" value="Do you use Shampoo Regularly ? " style="display:none;">
                        <span class="float-right" id="check51"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer51" class="custom-control-input" value="Yes" onclick="queAns51(); queAns51_1();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer51" class="custom-control-input" value="No" onclick="queAns51(); queAns51_2();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
                    <div id="yes-shampoo" class="yes-shampoo" style="display:none; padding-right: 10px;" >
                        <input type="text" name="stype" class="form-control" placeholder="Type"><br>
                        <input type="text" name="sfrequency" class="form-control" placeholder="Frequency">
                    </div>
            </div>
        </div>
      </div>
    <!-- End thertytwo Question -->
    <br>
    <!-- Start thertythree Question -->
      <div class="card">
        <div class="card-body" id="question52">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question52" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Do you use Hair Styling Products ?</span>
                        <input type="text" name="question52" value="Do you use Hair Styling Products ? " style="display:none;">
                        <span class="float-right" id="check52"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer52" class="custom-control-input" value="Yes" onclick="queAns52();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer52" class="custom-control-input" value="No" onclick="queAns52();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div>
    <!-- End thertythree Question -->
    <br>
    <!-- Start thertyfour Question -->
      <div class="card">
        <div class="card-body" id="question53">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question53" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Do you Colour Your Hairs ?</span>
                        <input type="text" name="question53" value="Do you Colour Your Hairs ? " style="display:none;">
                        <span class="float-right" id="check53"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer53" class="custom-control-input" value="Yes" onclick="queAns53();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer53" class="custom-control-input" value="No" onclick="queAns53();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div>
    <!-- End thertyfour Question -->
    <br>
    <!-- Start thertyfive Question -->
      <div class="card">
        <div class="card-header pques"> 
            <h6>Menstrual History</h6>
        </div>
        <div class="card-body" id="question54">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question54" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Are you Having Your Menses Regularly ?</span>
                        <input type="text" name="question54" value="Are you Having Your Menses Regularly ? " style="display:none;">
                        <span class="float-right" id="check54"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer54" class="custom-control-input" value="Yes" onclick="queAns54();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer54" class="custom-control-input" value="No" onclick="queAns54();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div>
    <!-- End thertyfive Question -->
    <br>
    <!-- Start thertysix Question -->
      <div class="card">
        <div class="card-body" id="question55">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question55" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Have you Reached Menopause ?</span>
                        <input type="text" name="question55" value="Have you Reached Menopause Regularly ? " style="display:none;">
                        <span class="float-right" id="check55"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer55" class="custom-control-input" value="Yes" onclick="queAns55();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer55" class="custom-control-input" value="No" onclick="queAns55();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div>
    <!-- End thertysix Question -->
    <br>
    <!-- Start thertyseven Question -->
      <div class="card">
        <div class="card-body" id="question56">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question56" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> How is Your Flow During Menses ?</span>
                        <input type="text" name="question56" value="How is Your Flow During Menses ? " style="display:none;">
                        <span class="float-right" id="check56"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer56" class="custom-control-input" value="Yes" onclick="queAns56();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer56" class="custom-control-input" value="No" onclick="queAns56();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div>
    <!-- End thertyseven Question -->
    <br>
    <!-- Start thertyeight Question -->
      <div class="card">
        <div class="card-body" id="question57">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question57" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Are you Taking Any Birth Control Pill ?</span>
                        <input type="text" name="question57" value="Are you Taking Any Birth Control Pill ? " style="display:none;">
                        <span class="float-right" id="check57"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer57" class="custom-control-input" value="Yes" onclick="queAns57();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer57" class="custom-control-input" value="No" onclick="queAns57();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div>
    <!-- End thertyeight Question -->
    <br>
    <!-- Start thertynine Question -->
      <div class="card">
        <div class="card-body" id="question58">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question58" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Are you Taking Any Birth Control Pill ?</span>
                        <input type="text" name="question58" value="Are you Taking Any Birth Control Pill ? " style="display:none;">
                        <span class="float-right" id="check58"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer58" class="custom-control-input" value="Yes" onclick="queAns58();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer58" class="custom-control-input" value="No" onclick="queAns58();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div>
    <!-- End thertynine Question -->
    <br>
    <!-- Start fouty Question -->
      <div class="card">
        <div class="card-body" id="question59">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question59" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Are you Pregnant/Planning Pregnancy ?</span>
                        <input type="text" name="question59" value="Are you Pregnant/Planning Pregnancy ? " style="display:none;">
                        <span class="float-right" id="check59"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer59" class="custom-control-input" value="Yes" onclick="queAns59();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer59" class="custom-control-input" value="No" onclick="queAns59();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div>
    <!-- End fourty Question -->
    <br>
    <!-- Start foutyone Question -->
      <div class="card">
        <div class="card-body" id="question60">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question60" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Are you a Nursing Mother ?</span>
                        <input type="text" name="question60" value="Are you a Nursing Mother ? " style="display:none;">
                        <span class="float-right" id="check60"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer60" class="custom-control-input" value="Yes" onclick="queAns60();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer60" class="custom-control-input" value="No" onclick="queAns60();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div>
    <!-- End fourtyone Question -->
    <br>
    <!-- Start foutyone Question -->
      <div class="card">
        <div class="card-body" id="question61">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question61" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Have you Delivered a Baby in Last 6 Months ?</span>
                        <input type="text" name="question61" value="Are you a Nursing Mother ? " style="display:none;">
                        <span class="float-right" id="check61"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer61" class="custom-control-input" value="Yes" onclick="queAns61();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer61" class="custom-control-input" value="No" onclick="queAns61();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div>
    <!-- End fourtyone Question -->
    <br>
	
	    <div class="row mt-5">
            <nav id="pagi">
                <div class="nav justify-content-center" id="tab-pills" role="tablist">
                    <button class="page-link " id="nav-chiefcomplaints-tab" data-bs-toggle="tab" data-bs-target="#chiefcomplaints" type="button" role="tab" aria-controls="nav-chiefcomplaints" aria-selected="false">1</button>
                    <button class="page-link acitve bg-dark text-white" id="nav-history-tab" data-bs-toggle="tab" data-bs-target="#history" type="button" role="tab" aria-controls="nav-history" aria-selected="false">2</button>
                    <button class="page-link " id="nav-fhistory-tab" data-bs-toggle="tab" data-bs-target="#fhistory" type="button" role="tab" aria-controls="nav-fhistory" aria-selected="false">3</button>
                    <button class="page-link " id="nav-ihistory-tab" data-bs-toggle="tab" data-bs-target="#ihistory" type="button" role="tab" aria-controls="nav-ihistory" aria-selected="false">4</button>
                </div>
            </nav>
        </div>
	</div>
	<div class="tab-pane fade" id="fhistory" role="tabpanel" aria-labelledby="nav-contact-tab">
    
    <!-- Start one Question -->
      <div class="card">
        <div class="card-header pques">
            <h6>Family History [ Specific to Hair Fall ]</h6>
        </div>
        <div class="card-body" id="question62">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question62" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Does Anyone of your Parents have Hairfall/Baldness ?</span>
                        <input type="text" name="question62" value="Does Anyone of your Parents have Hairfall/Baldness ? " style="display:none;">
                        <span class="float-right" id="check62"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer62" class="custom-control-input" value="Yes" onclick="queAns62();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer62" class="custom-control-input" value="No" onclick="queAns62();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div>
    <!-- End one Question -->
    <br>
    <!-- Start two Question -->
      <div class="card">
        <div class="card-body" id="question63">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question63" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Does Anyone of your Sibling have Hairfall/Baldness ?</span>
                        <input type="text" name="question63" value="Does Anyone of your Sibling have Hairfall/Baldness ? " style="display:none;">
                        <span class="float-right" id="check63"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer63" class="custom-control-input" value="Yes" onclick="queAns63();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer63" class="custom-control-input" value="No" onclick="queAns63();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div>
    <!-- End two Question -->
    <br>
    <!-- Start three Question -->
      <div class="card">
        <div class="card-body" id="question64">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question64" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Does Anyone of your Paternal/Maternal Uncle/Aunt have Hairfall/Baldness ?</span>
                        <input type="text" name="question64" value="Does Anyone of your Paternal/Maternal Uncle/Aunt have Hairfall/Baldness ? " style="display:none;">
                        <span class="float-right" id="check64"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer64" class="custom-control-input" value="Yes" onclick="queAns64();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer64" class="custom-control-input" value="No" onclick="queAns64();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div>
    <!-- End three Question -->
    <br>
    <!-- Start four Question -->
      <div class="card">
        <div class="card-header pques">
            <h6>Family History [General]</h6>
        </div>
        <div class="card-body" id="question65">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question65" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Do you have Family History of ?</span>
                        <input type="text" name="question65" value="Do you have Family History of ? " style="display:none;">
                        <span class="float-right" id="check65"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer65" class="custom-control-input" value="Yes" onclick="queAns65();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer65" class="custom-control-input" value="No" onclick="queAns65();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div>
    <!-- End four Question -->
    <br>
    <!-- Start five Question -->
      <div class="card">
        <div class="card-body" id="question66">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question66" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Diabetes ?</span>
                        <input type="text" name="question66" value="Diabetes ?" style="display:none;">
                        <span class="float-right" id="check66"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer66" class="custom-control-input" value="Yes" onclick="queAns66();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer66" class="custom-control-input" value="No" onclick="queAns66();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div>
    <!-- End five Question -->
    <br>
    <!-- Start six Question -->
      <div class="card">
        <div class="card-body" id="question67">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question67" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Hypertension/Blood Pressure ?</span>
                        <input type="text" name="question67" value="Hypertension/Blood Pressure ?" style="display:none;">
                        <span class="float-right" id="check67"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer67" class="custom-control-input" value="Yes" onclick="queAns67();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer67" class="custom-control-input" value="No" onclick="queAns67();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div>
    <!-- End six Question -->
    <br>
    <!-- Start seven Question -->
      <div class="card">
        <div class="card-body" id="question68">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question68" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Thyroid Issues ?</span>
                        <input type="text" name="question68" value="Thyroid Issues ?" style="display:none;">
                        <span class="float-right" id="check68"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer68" class="custom-control-input" value="Yes" onclick="queAns68();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer68" class="custom-control-input" value="No" onclick="queAns68();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div>
    <!-- End seven Question -->
    <br>
    <!-- Start eight Question -->
      <div class="card">
        <div class="card-body" id="question69">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question69" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> PCOD ?</span>
                        <input type="text" name="question69" value="PCOD ?" style="display:none;">
                        <span class="float-right" id="check69"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer69" class="custom-control-input" value="Yes" onclick="queAns69();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer69" class="custom-control-input" value="No" onclick="queAns69();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div>
    <!-- End eight Question -->
    <br>
    <!-- Start nine Question -->
      <div class="card">
        <div class="card-body" id="question70">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question70" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Rheumatoid Artheitis ?</span>
                        <input type="text" name="question70" value="Rheumatoid Artheitis ?" style="display:none;">
                        <span class="float-right" id="check70"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer70" class="custom-control-input" value="Yes" onclick="queAns70();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer70" class="custom-control-input" value="No" onclick="queAns70();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div>
    <!-- End nine Question -->
    <br>
    <!-- Start ten Question -->
      <div class="card">
        <div class="card-body" id="question71">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question71" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> SLE ?</span>
                        <input type="text" name="question71" value="SLE ?" style="display:none;">
                        <span class="float-right" id="check71"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer71" class="custom-control-input" value="Yes" onclick="queAns71();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer71" class="custom-control-input" value="No" onclick="queAns71();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div>
    <!-- End ten Question -->
    <br>
    <!-- Start eleven Question -->
      <div class="card">
        <div class="card-body" id="question72">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question72" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> PSoriasis ?</span>
                        <input type="text" name="question72" value="PSoriasis ?" style="display:none;">
                        <span class="float-right" id="check72"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer72" class="custom-control-input" value="Yes" onclick="queAns72();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer72" class="custom-control-input" value="No" onclick="queAns72();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div>
    <!-- End eleven Question -->
    <br>
    <!-- Start twelve Question -->
      <!--<div class="card">-->
      <!--  <div class="card-body" id="question73">-->
      <!--      <div class="row">-->
      <!--          <div class="form-group col-lg-8 col-12">-->
      <!--              <h5 name="question73" class="faq-title">-->
      <!--                  <span class="badge bg-dark"> Q </span><span> PSoriasis ?</span>-->
      <!--                  <input type="text" name="question73" value="PSoriasis ?" style="display:none;">-->
      <!--                  <span class="float-right" id="check73"><img src="img/tick.png"></span>-->
      <!--              </h5>-->
      <!--          </div>-->
      <!--              <div class="form-group col-lg-4 col-12 d-flex">-->
      <!--                  <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">-->
      <!--                      <input type="radio" id="yes_btn" name="answer73" class="custom-control-input" value="Yes" onclick="queAns73();">-->
      <!--                      <label class="custom-control-label" for="yes">  Yes </label>-->
      <!--                  </div>-->
      <!--                  <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">-->
      <!--                      <input type="radio" id="no" name="answer73" class="custom-control-input" value="No" onclick="queAns73();">-->
      <!--                      <label class="custom-control-label" for="no">  No </label>-->
      <!--                  </div>                       -->
      <!--              </div>-->
      <!--      </div>-->
      <!--  </div>-->
      <!--</div>-->
    <!-- End twelve Question -->
    <!--<br>-->
    <!-- Start therteen Question -->
      <div class="card">
        <div class="card-body" id="question74">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question74" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Psychiatric Ilness ?</span>
                        <input type="text" name="question74" value="Psychiatric Ilness ?" style="display:none;">
                        <span class="float-right" id="check74"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer74" class="custom-control-input" value="Yes" onclick="queAns74();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer74" class="custom-control-input" value="No" onclick="queAns74();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div>
    <!-- End therteen Question -->
    <br>
    <!-- Start fourteen Question -->
      <div class="card">
        <div class="card-body" id="question75">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question75" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Any Other Autoimmune Condition ?</span>
                        <input type="text" name="question75" value="Any Other Autoimmune Condition ?" style="display:none;">
                        <span class="float-right" id="check75"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer75" class="custom-control-input" value="Yes" onclick="queAns75();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer75" class="custom-control-input" value="No" onclick="queAns75();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div>
    <!-- End fourteen Question -->
    <br>
    
        <div class="row mt-5">
            <nav id="pagi">
                <div class="nav justify-content-center" id="tab-pills" role="tablist">
                    <button class="page-link " id="nav-chiefcomplaints-tab" data-bs-toggle="tab" data-bs-target="#chiefcomplaints" type="button" role="tab" aria-controls="nav-chiefcomplaints" aria-selected="false">1</button>
                    <button class="page-link" id="nav-history-tab" data-bs-toggle="tab" data-bs-target="#history" type="button" role="tab" aria-controls="nav-history" aria-selected="false">2</button>
                    <button class="page-link acitve bg-dark text-white" id="nav-fhistory-tab" data-bs-toggle="tab" data-bs-target="#fhistory" type="button" role="tab" aria-controls="nav-fhistory" aria-selected="false">3</button>
                    <button class="page-link " id="nav-ihistory-tab" data-bs-toggle="tab" data-bs-target="#ihistory" type="button" role="tab" aria-controls="nav-ihistory" aria-selected="false">4</button>
                </div>
            </nav>
        </div>
    </div>
<div class="tab-pane fade" id="ihistory" role="tabpanel" aria-labelledby="nav-contact-tab">
    <!-- Start one Question -->
      <div class="card">
        <div class="card-header pques">
            <h6>Investigation History</h6>
        </div>
        <div class="card-body" id="question76">
            <div class="row">
                <div class="form-group col-lg-8 col-12">
                    <h5 name="question76" class="faq-title">
                        <span class="badge bg-dark"> Q </span><span> Have you Done any Blood Investigation in Recent 2 Months ?</span>
                        <input type="text" name="question76" value="Have you Done any Blood Investigation in Recent 2 Months ?" style="display:none;">
                        <span class="float-right" id="check76"><img src="img/tick.png"></span>
                    </h5>
                </div>
                    <div class="form-group col-lg-4 col-12 d-flex">
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="yes_btn" name="answer76" class="custom-control-input" value="Yes" onclick="queAns76();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="yes">  Yes </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline col-lg-4 col-4">
                            <input type="radio" id="no" name="answer76" class="custom-control-input" value="No" onclick="queAns76();">&nbsp;&nbsp;
                            <label class="custom-control-label" for="no">  No </label>
                        </div>                       
                    </div>
            </div>
        </div>
      </div>
    <!-- End one Question -->
    <br>
    <!-- Start one Question -->
   <div class="card">
        <div class="card-header pques">
            <h6>Pictorial History</h6>
        </div>
        <div class="card-body" id="question77">
            <div class="row">
                        <div class="form-group col-lg-3 col-md-4 col-12">
                            <div class="thumbnail custom-control custom-radio image-checkbox aga">
                                <input type="radio" class="custom-control-input" id="img-id1" name="customRadioInline76"  onclick="queAns_aga();" value="image11" />
                                <label class="custom-control-label" for="img-id1">
                                    <a href="{{ URL::to('/img/diagnosis/aga1.jpg') }}" target="_blank"></a>
                                    <span class="badge"><i class="fa"></i><img src="{{ URL::to('/img/diagnosis/aga1.jpg') }}" class="img-size"  alt="Nature" style="width:200px; height:200px;" name="image" data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG"/></span>
                                    <input type="text" name="image11" value="{{ URL::to('/img/diagnosis/aga1.jpg') }}"  style="display: none; " data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" />
                                    <input name="hair" value="aga" style="display:none;"/>
                                </label>
                                <div class="caption">
                                    <!-- <h5 class="text-center text-success">AGA-1</h5> -->
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-3 col-md-4 col-12">
                            <div class="thumbnail custom-control custom-radio image-checkbox aga" >
                                <input type="radio" class="custom-control-input" id="img-id2" name="customRadioInline76" onclick="queAns_aga();" value="image1">
                                <label class="custom-control-label" for="img-id2">
                                <a href="{{ URL::to('/img/diagnosis/aga2.jpg') }}" target="_blank"></a>
                                <span class="badge"><i class="fa"></i><img src="{{ URL::to('/img/diagnosis/aga2.jpg') }}" class="img-size"  alt="Nature" style="width:200px; height:200px;" name="image" data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG"></span>
                   
                                <input type="text" name="image1" value="{{ URL::to('/img/diagnosis/aga2.jpg') }}"  style=" display: none; " data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" >
                                <input name="hair1" value="aga" style="display:none;">
                                </label>
                   
                                <div class="caption">
                                    <!-- <h5 class="text-center text-success">AGA-2</h5> -->
                                </div>
                            </div>                    
                        </div>
                        <div class="form-group col-lg-3 col-md-4 col-12">
                            <div class="thumbnail custom-control custom-radio image-checkbox aga">
                                <input type="radio" class="custom-control-input" id="img-id3" name="customRadioInline76" onclick="queAns_aga();" value="image2">
                                <label class="custom-control-label" for="img-id3">
                                <a href="{{ URL::to('/img/diagnosis/aga3.jpg') }}" target="_blank"></a>
                                <span class="badge"><i class="fa"></i><img src="{{ URL::to('/img/diagnosis/aga3.jpg') }}" class="img-size"  alt="Nature" style="width:200px; height:200px;"></span>
                   
                                <input type="text" name="image2" value="{{ URL::to('/img/diagnosis/aga3.jpg') }}"  style="display: none; " data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" >
                                <input name="hair2" value="aga" style="display:none;">
                                </label>
                   
                                <div class="caption">
                                    <!-- <h5 class="text-center text-success">AGA-3</h5> -->
                                </div>
                            </div>                     
                        </div>
                        <div class="form-group col-lg-3 col-md-4 col-12" >
                            <div class="thumbnail custom-control custom-radio image-checkbox aga">
                                <input type="radio" class="custom-control-input" id="img-id4" name="customRadioInline76"  onclick="queAns_aga();" value="image3">
                                <label class="custom-control-label" for="img-id4">
                                    <a href="{{ URL::to('/img/diagnosis/aga4.jpg') }}" target="_blank"></a>
                                    <span class="badge"><i class="fa"></i><img src="{{ URL::to('/img/diagnosis/aga4.jpg') }}" class="img-size"  alt="Nature" style="width:200px; height:200px;"></span>
                   
                                    <input type="text" name="image3" value="{{ URL::to('/img/diagnosis/aga4.jpg') }}"  style="display: none; " data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" >
                                    <input name="hair3" value="aga" style="display:none;">
                                </label>
                    

                                <div class="caption">
                                    <!-- <h5 class="text-center text-success">AGA-4</h5> -->
                                </div>
                            </div>                   
                        </div>
                        <div class="form-group col-lg-3 col-md-4 col-12">
                            <div class="thumbnail custom-control custom-radio image-checkbox aga">
                                <input type="radio" class="custom-control-input" id="img-id5" name="customRadioInline76" onclick="queAns_aga()" value="image4">
                                <label class="custom-control-label" for="img-id5">
                                    <a href="{{ URL::to('/img/diagnosis/aga5.jpg') }}" target="_blank"></a>
                                    <span class="badge"><i class="fas"></i><img src="{{ URL::to('/img/diagnosis/aga5.jpg') }}" class="img-size"  alt="Nature" style="width:200px; height:200px;"></span>
                                    <input type="text" name="image4" value="{{ URL::to('/img/diagnosis/aga5.jpg') }}"  style="display: none; " data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" >
                                    <input name="hair4" value="aga" style="display:none;">
                                </label>
                    
                                <div class="caption">
                                    <!-- <h5 class="text-center text-success">AGA-5</h5> -->
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-3 col-md-4 col-12">
                            <div class="thumbnail custom-control custom-radio image-checkbox aga">
                                <input type="radio" class="custom-control-input" id="img-id6" name="customRadioInline76"  onclick="queAns_aga()" value="image5">
                                <label class="custom-control-label" for="img-id6">
                                    <a href="{{ URL::to('/img/diagnosis/aga6.jpg') }}" target="_blank"></a>
                                    <span class="badge"><i class="fas"></i><img src="{{ URL::to('/img/diagnosis/aga6.jpg') }}" class="img-size"  alt="Nature" style="width:200px; height:200px;"></span>
                                    <input type="text" name="image5" value="{{ URL::to('/img/diagnosis/aga6.jpg') }}"  style="display: none; " data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" >
                                    <input name="hair5" value="aga" style="display:none;">
                                </label>
                    
                                <div class="caption">
                                    <!-- <h5 class="text-center text-success">AGA-6</h5> -->
                                </div>
                            </div>                  
                        </div>
                    </div>
            <br>
            <div class="row">
                        <div class="form-group col-lg-3 col-md-4 col-12">
                           <div class="thumbnail custom-control custom-radio image-checkbox ca">
                               <input type="radio" class="custom-control-input" id="img-id7"   name="customRadioInline82" onclick="queAns_ca()" value="ca2">
                                <label class="custom-control-label" for="img-id7">
                                    <a href="{{ URL::to('/asset/image/ca1.jpg') }}" target="_blank"></a>
                                    <span class="badge"><i class="fa"></i><img src="{{ URL::to('/asset/image/ca1.jpg') }}" class="img-size"  alt="Nature" style="width:200px; height:200px;" name="image6" data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG"></span>
                   
                                    <input type="text" name="ca1" value="{{ URL::to('/asset/image/ca1.jpg') }}"  style="display: none; " data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" >
                                    <input name="ca1_s" value="ca" style="display:none;">
                                </label>
                   
                                <div class="caption">
                                    <!-- <h5 class="text-center text-success">CA-1</h5> -->
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-3 col-md-4 col-12" >
                            <div class="thumbnail custom-control custom-radio image-checkbox ca" >
                                <input type="radio" class="custom-control-input" id="img-id8"   name="customRadioInline82" onclick="queAns_ca()" value="ca2">
                                <label class="custom-control-label" for="img-id8">
                                    <a href="{{ URL::to('/asset/image/ca2.jpg') }}" target="_blank"></a>
                                    <span class="badge"><i class="fa"></i><img src="{{ URL::to('/asset/image/ca2.jpg') }}" class="img-size"  alt="Nature" style="width:200px; height:200px;" name="image7" data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG"></span>
                   
                                    <input type="text" name="ca2" value="{{ URL::to('/asset/image/ca2.jpg') }}"  style="display: none; " data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" >
                                    <input name="ca2_s" value="ca" style="display:none;">
                                </label>
                   
                                <div class="caption">
                                    <!-- <h5 class="text-center text-success">CA-2</h5> -->
                                </div>
                            </div>
                        </div>
                    </div>
            <br>
            <div class="row">
                        <div class="form-group col-lg-3 col-md-4 col-12" >
                            <div class="thumbnail custom-control custom-radio image-checkbox ttm">
                                <input type="radio" class="custom-control-input" id="img-id9" name="customRadioInline84" onclick="queAns_ttm()" value="ttm1">
                                <label class="custom-control-label" for="img-id9">
                                    <a href="{{ URL::to('/asset/image/ttm 1.jpg') }}" target="_blank"></a>
                                    <span class="badge"><i class="fa"></i><img src="{{ URL::to('/asset/image/ttm 1.jpg') }}" class="img-size"  alt="Nature" style="width:200px; height:200px;" name="image8" data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG"></span>
                                    <input type="text" name="ttm1" value="{{ URL::to('/asset/image/ttm 1.jpg') }}"  style="display: none; " data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" >
                                    <input name="ttm1_s" value="ttm" style="display:none;">
                                </label>
                                <div class="caption">
                                    <!-- <h5 class="text-center text-success">TTM-1</h5> -->
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-3 col-md-4 col-12" >
                            <div class="thumbnail custom-control custom-radio image-checkbox ttm" >
                                <input type="radio" class="custom-control-input" id="img-id10" name="customRadioInline84" onclick="queAns_ttm()" value="ttm2">
                                <label class="custom-control-label" for="img-id10">
                                    <a href="{{ URL::to('/asset/image/ttm2.jpg') }}" target="_blank"></a>
                                    <span class="badge"><i class="fa"></i><img src="{{ URL::to('/asset/image/ttm2.jpg') }}" class="img-size"  alt="Nature" style="width:200px; height:200px;" name="image9" data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG"></span>
                   
                                    <input type="text" name="ttm2" value="{{ URL::to('/asset/image/ttm2.jpg') }}"  style="display: none; " data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" >
                                    <input name="ttm2_s" value="ttm" style="display:none;">
                                </label>
                   
                                <div class="caption">
                                    <!-- <h5 class="text-center text-success">TTM-2</h5> -->
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-3 col-md-4 col-12" >
                            <div class="thumbnail custom-control custom-radio image-checkbox ttm" >
                                <input type="radio" class="custom-control-input" id="img-id11" name="customRadioInline84" onclick="queAns_ttm()" value="ttm3">
                                <label class="custom-control-label" for="img-id11">
                                    <a href="{{ URL::to('/asset/image/ttm3.jpg') }}" target="_blank"></a>
                                    <span class="badge"><i class="fa"></i><img src="{{ URL::to('/asset/image/ttm3.jpg') }}" class="img-size"  alt="Nature" style="width:200px; height:200px;" name="image10" data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG"></span>
                                    <input type="text" name="ttm3" value="{{ URL::to('/asset/image/ttm3.jpg') }}"  style="display: none; " data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" >
                                    <input name="ttm3_s" value="ttm" style="display:none;">
                                </label>
                   
                                <div class="caption">
                                    <!-- <h5 class="text-center text-success">TTM-3</h5> -->
                                </div>
                            </div>
                        </div>
                    </div>
            <div class="row">
                        <div class="form-group col-lg-3 col-md-4 col-12 type_te1" >
                            <div class="thumbnail custom-control custom-radio image-checkbox " >
                                <input type="radio" class="custom-control-input" id="img-id12" name="customRadioInline86" onclick="queAns_te1()" value="te1">
                                <label class="custom-control-label" for="img-id12">
                                    <a href="{{ URL::to('/img/diagnosis/te1.jpg') }}" target="_blank"></a>
                                    <span class="badge"><i class="fa"></i><img src="{{ URL::to('/img/diagnosis/te1.jpg') }}" class="img-size"  alt="Nature" style="width:200px; height:200px;" name="image11" data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG"></span>
                                    <input type="text" name="te1" value="{{ URL::to('/img/diagnosis/te1.jpg') }}"  style="display: none; " data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" >
                                    <input name="te1_s" value="te" style="display:none;">
                                </label>
                   
                                <div class="caption">
                                    <!-- <h5 class="text-center text-success">TE-1</h5> -->
                                </div>
                            </div>
                        </div>
                    </div>
            <div class="row">
                        <div class="form-group col-lg-3 col-md-4 col-12 type_aa1" >
                            <div class="thumbnail custom-control custom-radio image-checkbox " >
                                <input type="radio" class="custom-control-input" id="img-id13" name="customRadioInline87" onclick="queAns_aa()" value="aa1">
                                <label class="custom-control-label" for="img-id13">
                                    <a href="{{ URL::to('/img/diagnosis/aa1.jpg') }}" target="_blank"></a>
                                    <span class="badge"><i class="fa"></i><img src="{{ URL::to('/img/diagnosis/aa1.jpg') }}" class="img-size"  alt="Nature" style="width:200px; height:200px;" name="image11" data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG"></span>
                                    <input type="text" name="aa1" value="{{ URL::to('/img/diagnosis/aa1.jpg') }}"  style="display: none; " data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" >
                                    <input name="aa1_s" value="te" style="display:none;">
                                </label>
                   
                                <div class="caption">
                                    <!-- <h5 class="text-center text-success">AA-1</h5> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    
            <div id="images">
                <div class="row">
                    <h3 class="mt-3 ml-3">Upload Images</h3>
                </div>
                <div class="card-body">
                        <div class="row">
                            <div class="form-group col-lg-6 col-md-6 col-12">
                                <img src="{{asset('asset/image/top_side.png')}}" width="100" height="100">
                                <label>Top Side</label>
                                <input type="file" class="form-control" name="image" id="top_side">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-12">
                                <img src="{{asset('asset/image/right_side.png')}}" width="100" height="100"><label>Right Side</label>
                                <input type="file" class="form-control" name="image2" id="right_side">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6 col-md-6 col-12">
                                <img src="{{asset('asset/image/left_side.png')}}" width="100" height="100"><label>Left Side</label>
                                <input type="file" class="form-control" name="image3" id="left_side">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-12">
                                <img src="{{asset('asset/image/back_side.png')}}" width="100" height="100"><label>Back Side</label>
                                <input type="file" class="form-control" name="image4" id="back_side">
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
                <div class="row">
                    <div class="form-group col-md-12 col-12 float-right rrb">
                        <center><a onclick="Confirm_saved();" class="btn btn-outline-primary btn1"> Submit</a></center>
                    </div>
                </div>
            </div> 
            <!-- End one Question -->
            <br>      
        
        <div class="row mt-5">
            <nav id="pagi">
                <div class="nav justify-content-center" id="tab-pills" role="tablist">
                    <button class="page-link " id="nav-chiefcomplaints-tab" data-bs-toggle="tab" data-bs-target="#chiefcomplaints" type="button" role="tab" aria-controls="nav-chiefcomplaints" aria-selected="false">1</button>
                    <button class="page-link" id="nav-history-tab" data-bs-toggle="tab" data-bs-target="#history" type="button" role="tab" aria-controls="nav-history" aria-selected="false">2</button>
                    <button class="page-link" id="nav-fhistory-tab" data-bs-toggle="tab" data-bs-target="#fhistory" type="button" role="tab" aria-controls="nav-fhistory" aria-selected="false">3</button>
                    <button class="page-link acitve bg-dark text-white" id="nav-ihistory-tab" data-bs-toggle="tab" data-bs-target="#ihistory" type="button" role="tab" aria-controls="nav-ihistory" aria-selected="false">4</button>
                </div>
            </nav>
        </div>
        </div>
        
        
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Choose Time Slot</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                
                       <div class="form-group">
                          <span>Select Date</span>
                          <input type="date" id="date" name="date" class="form-control" onchange="select_date()">
                           <!--<input id="datepicker" class="form-control" name="date" onclick="select_date()"> -->
                            @foreach($time as $ti)
                                <input type="hidden" class="form-control date" name="sel_dates" id="sel_dates" value="{{$ti->dates}}">
                            @endforeach
                        </div>
                        <div class="form-group">
                          <span>Select Time Shift</span>
                           <select class="custom-select" id="shift" name="shift" onchange="select_time_slot(this.value);">
                            </select>
                        </div>  
                        <div class="form-group">
                          <span>Select Time</span>
                          <select class="form-select" id="theTime" name="fromtime" readonly>
                              
                          </select>
                          <select class="form-select mt-1" id="toTime" name="totime" readonly>
                              
                          </select>
                          <!-- <input type="checkbox" id="time" name="time" class="form-control"> -->
                        </div>
              </div>
              <div class="modal-footer rrb">
                <button type="submit" class="btn btn-outline-primary btn1">Save</button>
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <label>Are You Sure to Save All Questions <small>Please click on Yes Button</small></label>
                            <h4>Or</h4>
                <label>If You Want's to Change Question  <small>Please click on No Button</small></label>

              </div>
              <div class="modal-footer rrb">
                <button type="button" class="btn btn-outline-primary btn1" data-bs-dismiss="modal" onclick="Choose_Time_Slot();">  Yes </button>
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">  No </button>
              </div>
            </div>
          </div>
        </div>  

</form>
        <!-- <div class="row mt-5">-->
        <!--    <nav id="pagi">-->
        <!--        <div class="nav justify-content-center" id="tab-pills" role="tablist">-->
        <!--            <button class="page-link acitve" id="nav-chiefcomplaints-tab" data-bs-toggle="tab" data-bs-target="#chiefcomplaints" type="button" role="tab" aria-controls="nav-chiefcomplaints" aria-selected="false">1</button>-->
        <!--            <button class="page-link" id="nav-history-tab" data-bs-toggle="tab" data-bs-target="#history" type="button" role="tab" aria-controls="nav-history" aria-selected="false">2</button>-->
        <!--            <button class="page-link" id="nav-fhistory-tab" data-bs-toggle="tab" data-bs-target="#fhistory" type="button" role="tab" aria-controls="nav-fhistory" aria-selected="false">3</button>-->
        <!--            <button class="page-link" id="nav-ihistory-tab" data-bs-toggle="tab" data-bs-target="#ihistory" type="button" role="tab" aria-controls="nav-ihistory" aria-selected="false">4</button>-->
        <!--        </div>-->
        <!--    </nav>-->
        <!--</div>-->
			</div>
		</div>
	</div>
</div>
<style>
	.pques{
		background: #DAA520;
		color: #fff;
	}
	.nav button:hover{
		background: #DAA520;
        color: #fff;
	} 
  /*  .btn{
        background-color: #000;
    }*/
    .nav button{
        color: #000;
    }
      .rrb .btn1{
          color: #000;
          border-color: #DAA520;
          width:200px;
          margin: 10px;

        }
          .rrb .btn1:hover{
          background-color: #000;
          color: #fff;
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
    margin-top: 3px;

    
    }
    .custom-control-input:checked{
      background-color:#DAA520;
    }
  /*  .nav nav-.active{
          background: #000;
          color: white;
    }*/
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
    #check10{display: none;}
    #check11{display: none;}
    #check12{display: none;}    
    #check13{display: none;}    
    #check14{display: none;}    
    #check15{display: none;}    
    #check16{display: none;}    
    #check17{display: none;}    
    #check18{display: none;}    
    #check19{display: none;}    
    #check20{display: none;}
    #check21{display: none;}
    #check22{display: none;}    
    #check23{display: none;}    
    #check24{display: none;}    
    #check25{display: none;}    
    #check26{display: none;}    
    #check27{display: none;}    
    #check28{display: none;}    
    #check29{display: none;}    
    #check30{display: none;}
    #check31{display: none;}
    #check32{display: none;}    
    #check33{display: none;}    
    #check34{display: none;}    
    #check35{display: none;}    
    #check36{display: none;}    
    #check37{display: none;}    
    #check38{display: none;}    
    #check39{display: none;}    
    #check40{display: none;}
    #check41{display: none;}
    #check42{display: none;}    
    #check43{display: none;}    
    #check44{display: none;}    
    #check45{display: none;}    
    #check46{display: none;}    
    #check47{display: none;}    
    #check48{display: none;}    
    #check49{display: none;}    
    #check50{display: none;}
    #check51{display: none;}
    #check52{display: none;}    
    #check53{display: none;}    
    #check54{display: none;}    
    #check55{display: none;}    
    #check56{display: none;}    
    #check57{display: none;}    
    #check58{display: none;}    
    #check59{display: none;}    
    #check60{display: none;}
    #check61{display: none;}
    #check62{display: none;}    
    #check63{display: none;}    
    #check64{display: none;}    
    #check65{display: none;}    
    #check66{display: none;}    
    #check67{display: none;}    
    #check68{display: none;}    
    #check69{display: none;}    
    #check70{display: none;}
    #check71{display: none;}
    #check72{display: none;}    
    #check73{display: none;}    
    #check74{display: none;}    
    #check75{display: none;} 
    #check76{display: none;}  




 button.active {
        background-color: #000;
        color: #fff;
    }
    </style>
    
<script>
$(document).ready(function(){
  $("#tab-pills button").click(function(){
    $(this).tab('show');
  });
  $('#tab-pills button').on('shown.bs.tab', function(event){
    // var x = $(event.target).text();         // active tab
    var y = $(event.relatedTarget).val();  // previous tab
    $("#pagi button").change(x);
    $("#pagi button").change(y);
  });
});
</script>
        <script>
        $("#success").ready(function(){
            setTimeout(function() { $("#success").hide(); }, 3000);
        });

        function Confirm_saved(){
            // setTimeout(function() {
                $('#exampleModal1').modal('show');
            // });  
        }

       function Choose_Time_Slot(){
 
            alert("Our Hair Specialist(Trichologist) will Call You, Please Choose Time Slot to Share your Insights");
            // setTimeout(function() {
                $('#exampleModal').modal('show');
            // });    s

        }    
    $(document).ready(function() {
    var date = new Date();

    var day = date.getDate();
    var month = date.getMonth() + 1;
    var year = date.getFullYear();

    if (month < 10) month = "0" + month;
    if (day < 10) day = "0" + day;

    var today = year + "-" + month + "-" + day;       
    $("#date").attr("value", today);
});  


  
      let radios = document.getElementsByTagName('input');
      for(i = 0; i < radios.length; i++) {
        radios[i].onclick = function(e) {
          if(e.ctrlKey) {
            this.checked = false;
          }
        }
      }
</script>
<script type="text/javascript">
    // function get_date() {
        var datsss = document.getElementById('sel_dates').value;
        // alert(ldate);
        var demo11 = datsss.split(",");
        var ldate = JSON.stringify(demo11);
        var datesForDisable = ldate.split(",");
        // alert(datesForDisable);
        // var datesForDisable = ["2022-02-14","2019-09-15","2019-09-16"]

        $("#datepicker").datepicker({
            format: 'dd-mm-yyyy',
            autoclose: true,
            weekStart: 1,
            calendarWeeks: true,
            todayHighlight: true,
            beforeShowDay: function (currentDate) {
                var dayNr = currentDate.getDay();
                var dateNr = moment(currentDate.getDate()).format("DD-MM-YYYY");
                if (datesForDisable.length > 0) {
                     for (var i = 0; i < datesForDisable.length; i++) {                        
                       if (moment(currentDate).unix()==moment(datesForDisable[i],'YYYY-MM-DD').unix()){
                                return false;
                           }
                        }
                    }
                    return true;
                }
        });
    // }

</script>
<script type="text/javascript">
    $('.date').datepicker({
  multidate: true,
    format: 'yyyy-mm-dd'
});

</script>
<script type="text/javascript">
    function select_date() {
        var date = document.getElementById('date').value;
        var datearray = date.split("-");
        var sdate = datearray[2] + '-' + datearray[1] + '-' + datearray[0];
        $.ajax({
               method:"get",
               url:'select_date/'+sdate,
               dataType:"json",
               success:function(data)
               {
                console.log(data);
                if(data != ""){
                    $('#theTime').empty();
                    $('#theTime').empty();
                    $('#shift').empty();
                    $('#shift').append('<option>Select Time Slot</option>' );
                    $.each(data, function(index, value) {
                        $('#shift').append('<option value="'+value.time_slot+'">'+value.time_slot+'</option>');
                    });
                }else{
                       alert("Date Not Available?  Please Choose Other Date");
                       $('#theTime').empty();
                       $('#toTime').empty();
                       $('#shift').empty();
                    }
                }
            });
    }

    function select_time_slot(name) {
        var date = document.getElementById('date').value;
        var datearray = date.split("-");
        var sdate = datearray[2] + '-' + datearray[1] + '-' + datearray[0];
        $.ajax({
               method:"get",
               url:'get_time_slot/'+name+'/'+sdate,
               dataType:"json",
               success:function(data)
               {
                   $('#toTime').empty();
                    $('#theTime').empty();
                    $.each(data, function(index, value) {
                        // var arr = value.time.split(',');
                        // for(var i = 0; i<arr.length;i++){
                            $('#theTime').append('<option value="'+value.fromtime+'">'+value.fromtime+'</option>' );
                            $('#toTime').append('<option value="'+value.totime+'">'+value.totime+'</option>' );
                        // }
                        
                    });
                }
            });

    }
</script>
<script type="text/javascript" src="{{asset('assets/js/pquestions.js')}}"></script>
    <!-- <script type="text/javascript">
    var element = document.getElementsByClassName("nav")[0];
    element.addEventListener("click", myFunction);
    function myFunction(e) {
      if (document.querySelector('#tab-pills button.active') !== null) {
        document.querySelector('#tab-pills button.active').classList.remove('active');
      }
      e.target.className = "active";
    }
    </script> --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@endsection
