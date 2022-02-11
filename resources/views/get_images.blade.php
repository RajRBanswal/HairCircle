@extends('sidebar')

@section('content')
<div class="container mt-2 mb-5">
    <div class="card p-3">
		<!--<nav class="navbar navbar-expand-lg navbar-light">-->
  <!--          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">-->
  <!--            <span class="navbar-toggler-icon"></span>-->
  <!--          </button>-->
  <!--          <div class="collapse navbar-collapse" id="navbarNav">-->
  <!--            <ul class="navbar-nav">-->
  <!--              <li class="nav-item active mr-2">-->
  <!--                <h4><a class="nav-link" href="#" onclick="get_Images();">Upload Images</a></h4>-->
  <!--              </li>-->
  <!--              <li class="nav-item  mr-2">-->
  <!--                <h4><a class="nav-link" href="#" onclick="get_Compare();">Campare</a></h4>-->
  <!--              </li>-->
                
               <!--  <li class="nav-item mr-2">
  <!--                <h4><a class="nav-link" href="#" onclick="">Treatments & DoctorAdvice</a></h4>-->
  <!--              </li> -->
                <!-- <li class="nav-item mr-2">
  <!--                <h4><a class="nav-link" href="#">Kit Status</a></h4>-->
  <!--              </li> -->
  <!--            </ul>-->
  <!--          </div>-->
  <!--        </nav>-->
          
          <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="image-tab" data-bs-toggle="tab" data-bs-target="#image" type="button" role="tab" aria-controls="image" aria-selected="true">Images</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="compaire-tab" data-bs-toggle="tab" data-bs-target="#compaire" type="button" role="tab" aria-controls="compaire" aria-selected="false">Profile</button>
              </li>
          </ul>
          <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="image" role="tabpanel" aria-labelledby="image-tab">
                    <div id="images">
        				<div class="row">
        					<h3 class="mt-3 ml-3">Images</h3>
        				</div>
        				<div class="card-body">
        					<form method="post" action="{{url('/cust_images')}}" enctype="multipart/form-data">
        						@csrf
        						<div class="row">
        							<div class="form-group col-lg-6 col-md-6 col-12">
        								<span>Top Side Image</span><span style="color:red">*</span>
        								<input type="file" class="form-control" name="image" id="top_side">
        							</div>
        							<div class="form-group col-lg-6 col-md-6 col-12">
        								<span>Right Side Image</span><span style="color:red">*</span>
        								<input type="file" class="form-control" name="image2" id="right_side">
        							</div>
        						</div>
        						<div class="row">
        							<div class="form-group col-lg-6 col-md-6 col-12">
        								<span>Left Side Image</span><span style="color:red">*</span>
        								<input type="file" class="form-control" name="image3" id="left_side">
        							</div>
        							<div class="form-group col-lg-6 col-md-6 col-12">
        								<span>Back Side Image</span><span style="color:red">*</span>
        								<input type="file" class="form-control" name="image4" id="back_side">
        							</div>
        						</div>
        						<div class="row">
        							<div class="form-group rrb">
        								<center><button type="submit" class="btn btn-outline-primary btn1">Submit</button></center>
        							</div>
        						</div>
        					</form>
        				</div>
        			</div>
              
              </div>
              <div class="tab-pane fade" id="compaire" role="tabpanel" aria-labelledby="compaire-tab">
                  <div id="compare"> 
					<div class="row">
						<h3 class="mt-3 ml-3">Compare Two(2) Images</h3>
					</div>
					<form method="post" action="">
					<div class="card-body">
						<div class="row">
							<!-- <div class="form-group col-lg-12 col-md-12 col-12"> -->
								<span>Select Image</span>
								@foreach($get_images as $custImage)
								<div class="form-group col-md-3 col-lg-3 col-12">
									<input type="radio" class="custom-control-input" name="Image" id="custImage" value="{{($custImage->top_image)}}"> <img src="{{asset('/custom_image/')}}/{{($custImage->top_image)}}" width="200" height="200">
								</div>
								<div class="form-group col-md-3 col-lg-3 col-12">
									<input type="radio" class="custom-control-input" name="Image" id="custImage" value="{{($custImage->right_image)}}"> <img src="{{asset('/custom_image/')}}/{{($custImage->right_image)}}" width="200" height="200">
								</div>
								<div class="form-group col-md-3 col-lg-3 col-12">
									<input type="radio" class="custom-control-input" name="Image" id="custImage" value="{{($custImage->left_image)}}"> <img src="{{asset('/custom_image/')}}/{{($custImage->left_image)}}" width="200" height="200">
								</div>
								<div class="form-group col-md-3 col-lg-3 col-12">
									<input type="radio" class="custom-control-input" name="Image" id="custImage" value="{{($custImage->back_image)}}"> <img src="{{asset('/custom_image/')}}/{{($custImage->back_image)}}" width="200" height="200">
								</div>
								
								
								
								

								@endforeach
							<!-- </div> -->
							<!-- <div class="form-group col-lg-6 col-md-6 col-12">
								<span>Select Letest Image</span><span style="color:red">*</span>
								<input type="file" class="form-control" name="s_image" id="s_image">
							</div> -->
						</div>
					</div>
				</div>
              </div>
            </div>
	<!--<div class="card m-3">-->
		
					
			<!-- </div> -->
	<!--	</div>		-->
			<style type="text/css">
                .rrb .btn1:hover{
                  background-color: #000;
                  color: #fff;
                }
                .rrb .btn1{
                  color: #000;
                  border-color: #DAA520;
                }
                /*#compare{*/
                /*	display: none;*/
                /*}*/
                #navbarNav .nav-item:active{
                    /*background-color:#000;*/
                    color:green;
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
            </style>
    </div>
</div>
<script type="text/javascript">
	function get_Images(){
        $(document).ready(function(){
          $('#images').show();
          $('#compare').hide();
          // $('#treatments').hide();
        });
      }
      function get_Compare(){
      	$(document).ready(function(){
          $('#images').hide();
          $('#compare').show();
          // $('#treatments').hide();
        });
      }
</script>
@endsection