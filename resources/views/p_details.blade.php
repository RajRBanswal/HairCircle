@extends('nav2')

@section('content')
<div class="container">
	<div class="container px-1 px-md-5 px-lg-1 px-xl-5 py-2 mx-auto">
    <div class="row mb-4 px-3 mt-2">
            @if(session()->has('message'))
                <div class="alert alert-success" id="myElem">
                    {{ session()->get('message') }}
                </div>
            @endif
    </div>
 		<div class="card">
 			<div class="card-header pques">
 				<center><h4>Customer Profile</h4></center>
 			</div>
 			<div class="card-body">
 				<div class="container">
          @foreach($pdatas as $p_data)
          <div class="col-lg-12 col-12">
            <div class="row mt-2">
              <div class="form-group col-md-6 col-12">
                <div class="form-group">
                  <span class="h-text">Name :</span>
                  <label>{{$p_data->name}}</label>
                </div>
              </div>
              <div class="form-group col-md-6 col-12 mt-2">
                <div class="form-group">
                  <label class="h-text">Gender :</label>
                  <label>{{ $p_data->gender}}</label>
                </div>
              </div>
            </div>
            <div class="row mt-2">
              <div class="form-group col-md-6 col-12">
                <div class="form-group">
                  <span class="h-text">Date Of Birth :</span>
                  <label>{{$p_data->date_of_birth}}</label>
                </div>
              </div>
              <div class="form-group col-md-6 col-12 mt-2">
                <div class="form-group">
                  <label class="h-text">Marital Status :</label>
                  <label>{{ $p_data->marital_status}}</label>
                </div>
              </div>
            </div>
            <div class="row mt-2">
              <div class="form-group col-md-6 col-12">
                <div class="form-group">
                  <span class="h-text">Religion :</span>
                  <label>{{$p_data->religion}}</label>
                </div>
              </div>
              <div class="form-group col-md-6 col-12 mt-2">
                <div class="form-group">
                  <label class="h-text">Medicin Preference :</label>
                  <label>{{ $p_data->medicin_pref}}</label>
                </div>
              </div>
            </div>
            <div class="row mt-2">
              <div class="form-group col-md-6 col-12">
                <div class="form-group">
                  <span class="h-text">Profession :</span>
                  <label>{{$p_data->profession}}</label>
                </div>
              </div>
              <div class="form-group col-md-6 col-12 mt-2">
                <div class="form-group">
                  <label class="h-text">Weight in Kg :</label>
                  <label>{{ $p_data->weight_in_kg}}</label>
                </div>
              </div>
            </div>
            <div class="row mt-2">
              <div class="form-group col-md-6 col-12">
                <div class="form-group">
                  <span class="h-text">Height In Cm :</span>
                  <label>{{$p_data->height_in_cm}}</label>
                </div>
              </div>
              <div class="form-group col-md-6 col-12 mt-2">
                <div class="form-group">
                  <label class="h-text">Address :</label>
                  <label>{{ $p_data->address}}</label>
                </div>
              </div>
            </div>
            <div class="row mt-2">
              <div class="form-group col-md-6 col-12">
                <div class="form-group">
                  <span class="h-text">Mobile No. :</span>
                  <label>{{$p_data->mobile_no}}</label>
                </div>
              </div>
              <div class="form-group col-md-6 col-12 mt-2">
                <div class="form-group">
                  <label class="h-text">Email :</label>
                  <label>{{ $p_data->email}}</label>
                </div>
              </div>
            </div>
            <div class="row mt-2">
              <div class="form-group col-md-6 col-12">
                <span class="h-text">Sponsor Link :</span>
              </div>
            </div>
             <div class="row mt-1">
              <div class="form-group col-md-6 col-12">
                <div class="form-group ">
                  <p style="color:blue;">{{url('sponsor_link',$p_data->id.'/'.$p_data->patients_id)}}</p>
                </div>
                <div class="form-group col-12 mt-1">

                        <a href="whatsapp://send?text={{url('sponsor_link',$p_data->id.'/'.$p_data->patients_id)}}" class="btn btn-primary mt-1" data-action="share/whatsapp/share" target="_blank" id="whtapp"><i class="bi bi-whatsapp">Send via Whatsapp</i></a>  
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{url('sponsor_link',$p_data->id.'/'.$p_data->patients_id)}}" target="_blank" class="btn btn-primary mt-1"><i class="bi bi-facebook">Share on Facebook</i>  </a>
                      </div>
              </div>
            </div>
          </div>
          

          
              <!--   <table class="table table-borderless">
			            <tbody>
			            <tr>
                    <
			              <td >Name</td> <td>{{$p_data->name}}</td>
			              <td >Gender</td><td>{{ $p_data->gender}}</td>
			            </tr>
			            <tr>
			              <td>Date Of Birth</td><td>{{$p_data->date_of_birth}}</td>
			              <td>Marital Status</td><td>{{ $p_data->marital_status}}</td>
			            </tr>
			            <tr>
			              <td>Religion</td> <td>{{$p_data->religion}}</td>
			              <td>Medicin Preference</td><td>{{ $p_data->medicin_pref}}</td>
			            </tr>
			            <tr>
			              <td>Profession</td><td>{{$p_data->profession}}</td>
			              <td>Weight in Kg</td><td>{{ $p_data->weight_in_kg}}</td>
			            </tr>
			            <tr>
			              <td>Height In Cm</td> <td>{{$p_data->height_in_cm}}</td>
			              <td>Address</td><td>{{ $p_data->address }}, {{$p_data->city }}, {{ $p_data->pincode}}</td>
			            </tr>
			            <tr>
			              <td>Mobile No.</td> <td>{{$p_data->mobile_no}}</td>
			              <td>Email</td><td>{{ $p_data->email}}</td>
			            </tr>
			             <tr>
			              <td>Sponsor Link</td>          
			            </tr>
			            </tbody>
			          </table> -->
			       <!--     <div class="row">
			           		<div class="form-group col-12">
			           			<label><a href="">{{url('sponsor_link',$p_data->id.'/'.$p_data->patients_id)}}</a></label>
			           		</div>
			           		<div class="form-group col-12">
			           			<a href="whatsapp://send?text={{url('sponsor_link',$p_data->id.'/'.$p_data->patients_id)}}" class="btn btn-primary" data-action="share/whatsapp/share" target="_blank"><i class="bi bi-whatsapp">Send via Whatsapp</i></a>  
			             		<a href="https://www.facebook.com/sharer/sharer.php?u={{url('sponsor_link',$p_data->id.'/'.$p_data->patients_id)}}" target="_blank" class="btn btn-primary"><i class="bi bi-facebook">Share on Facebook</i>  </a>
			           		</div>

			           </div> --> 
			           <!-- <div class=""> -->
			           		<!-- <td colspan="4"><center><button type="submit" class="btn bg-info form-group" style="color:white; width: 100px;">Edit</button></center></td> -->
			           <!-- </div> -->
                 @endforeach
          </div>

<br>
<div class="row mb-4">
  <center><input type="submit" class="btn btn-primary" id="btnn" name="btnn" value="Are You Serious About Your Hair" onclick="myFunction();"></center>
</div>
<div class="row" id="freeques" style="display: none;">
    <div class="col-lg-12 col-12">
       <table class="tabel table-striped table-bordered" style="padding:10px;">
        <thead class="thead-dark">
          <tr>
            
            <th class="col-md-8">Questions</th>
            <th class="col-md-4">Answers</th>
          </tr>
        </thead>
        <tbody>
          @if($freeques)
          @foreach($freeques as $freeques1)
          <tr>
            <td>{{ $freeques1->fquestions1 }}</td><td>{{ $freeques1->fanswers1 }} </td>
          </tr>
           <tr>
            <td>{{ $freeques1->fquestions2 }}</td><td>{{ $freeques1->fanswers2 }} </td>
          </tr>
           <tr>
            <td>{{ $freeques1->fquestions3 }}</td><td>{{ $freeques1->fanswers3 }} </td>
          </tr>
           <tr>
            <td>{{ $freeques1->fquestions4 }}</td><td>{{ $freeques1->fanswers4 }} </td>
          </tr>
           <tr>
            <td>{{ $freeques1->fquestions5 }}</td><td>{{ $freeques1->fanswers5 }} </td>
          </tr>
           <tr>
            <td>{{ $freeques1->fquestions6 }}</td><td>{{ $freeques1->fanswers6 }} </td>
          </tr>
           <tr>
            <td>{{ $freeques1->fquestions7 }}</td><td>{{ $freeques1->fanswers7 }} </td>
          </tr>
           <tr>
            <td>{{ $freeques1->fquestions8 }}</td><td>{{ $freeques1->fanswers8 }} </td>
          </tr>
           <tr>
            <td>{{ $freeques1->fquestions9 }}</td><td>{{ $freeques1->fanswers9 }} </td>
          </tr>
           <tr>
            <td>{{ $freeques1->fquestions10 }}</td><td>{{ $freeques1->fanswers10 }} </td>
          </tr>

          @endforeach
          @endif
        </tbody>
      </table>
    </div>
</div>

 				</div>
 			</div>
 		</div>
	<!-- </div> -->
    <div class="sticky-container bounceInUp" data-aos="zoom-in" data-aos-delay="100">
      <ul class="sticky">
        <li>
          <p><a href="{{url('/pquestion1')}}" style="color: #fff;" >Analysis My Hair Health</a></p>
        </li>
      </ul>
    </div>
</div>
	
	     <!-- ======= Footer ======= -->
  <footer id="footer">
  <div class="container">
    <div class="footer-top bg-light">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact">
            <h3>Hair Circle<span>.</span></h3>
            <p>
              Address<br>
              <strong>Phone:</strong> +91 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li> -->
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Hair Circle</span></strong>. All Rights Reserved 2021
      </div>
      <div class="credits">
        Developed by <a href="https://www.ewebdigital.com">eWeb Digital</a>
      </div>
    </div>
  </footer><!-- End Footer -->


<style type="text/css">
	.h-text{
		/*color: #fff;*/
    font-weight: bold;
	}
  .pques{
    color: #fff;
  }
  #whtapp{
    background-color: #25D366;
    border-color: #075E54;
  }
</style>
<script type="text/javascript">

    function freeQuestion() {
    var abcd = document.querySelector('input[name = "btnn"]:clicked');
    if (abcd != null) { //Test if something was checked
        $('#freeques').show(); //Alert the value of the checked.
    } else {
        $('#freeques').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}
function myFunction() {
  var x = document.getElementById("freeques");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

        

</script>
<script type="text/javascript">
  $("#myElem").show();
    setTimeout(function() {
        $("#myElem").hide(); 
    }, 5000);
</script>
<!-- <script type="text/javascript" src="{{asset('assets/js/hidemessage.js')}}"></script> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
@endsection