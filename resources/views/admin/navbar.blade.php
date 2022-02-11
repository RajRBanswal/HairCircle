
   
@extends('layouts.app')




    <nav class="navbar navbar-expand-lg navbar-dark  fixed-top  navbar_bg">
      <!-- <a class="navbar-brand " href="#"><img class="logo" src="img/evergoal.png"></a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar-dark navbar_bg navabar_border" id="navbarCollapse">
            <ul class="navbar-nav  justify-content-end">
            <div id="user_name">    
            <div class="row text-white text-center ">
                  <div class="offset-3"></div>
                    <div class="col-6 mt-2">
                        <li class="nav-item text-center active">
                            <img src="{{ asset('/storage/' . session()->get('avtar')) }}" class="rounded-circle" alt="Cinque Terre" width="50" height="50">
                            </br>
                             <label class="text-white">{{session()->get('user_name')}} </label>
                        </li>
                    </div>
                    </div>
                    <div class="row">
                     <!--<div class="col-8 mt-2  ">
                        <li class="nav-item active">
                           
                            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                           {{ session('status') }}
                        </div>
                          @endif
                        </li>
                    </div>-->
                  </div>
                </div>
                
                <li class="nav-item active " style=" border-bottom:2px solid #e9ecef;;">
                    <a class="nav-link text-white tabs_color text-center navmenu " href="{{url('home')}}" >Home</a>
                </li>
                <!-- All Dwopdown nemu color "tabs_color1" remove --------------------------@tilesh -->
                <!---------- My Team Dropdown  ------------>
                <!--<li class="nav-item dropdown" style=" border-bottom:2px solid #e9ecef;">-->
                <!--    <a class="nav-link dropdown-toggle  text-white  tabs_color text-center navmenu"  id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true"-->
                <!--      aria-expanded="false"><span>Dashboard</span></a>-->
                <!--    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink1">-->
                <!--      <a class="dropdown-item tabs_color1 text-center" href="{{url('/my_direct')}}"><span>My Direct</span></a>-->
                      
                <!--      <a class="dropdown-item navmenu5  tabs_color1 text-center" href="{{url('/my_direct_example')}}"><span>My Example Direct</span></a>-->
                      
                <!--      <a class="dropdown-item text-center" href="{{url('/my_direct_report')}}"><span>My Direct Report</span></a>-->
                <!--    </div>-->
                <!--  </li>-->
                
                
                 <li class="nav-item dropdown" style=" border-bottom:2px solid #e9ecef;;">
                    <a class="nav-link dropdown-toggle text-white tabs_color text-center navmenu " id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false"><span>Dashboard</span></a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink1">
                      <a class="dropdown-item tabs_color1 text-center" href="{{url('/my_direct')}}"><span>My Direct</span></a>
                      <a class="dropdown-item tabs_color1 text-center" href="{{url('/my_direct_report')}}"><span>My Direct Report</span></a>
                    </div>
                  </li>
                
                
                <!---------- My Team Dropdown Close  ------------>
                <!---------- Task Dropdown    ------------>
                <li class="nav-item dropdown" style=" border-bottom:2px solid #e9ecef;;">
                    <a class="nav-link dropdown-toggle text-white tabs_color text-center navmenu " id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false"><span>Task</span></a>
                      
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink1">
                      <a class="dropdown-item tabs_color1 text-center" href="{{url('/task')}}"><span>Task</span></a>
                      <a class="dropdown-item tabs_color1 text-center" href="{{url('/attempted_task')}}"><span>Attempted Task</span></a>
                    </div>
                  </li>
                <!---------- Task Dropdown close   ------------>


                <!---------- Profile Dropdown    ------------>
                <li class="nav-item dropdown" style=" border-bottom:2px solid #e9ecef;;">
                    <a class="nav-link dropdown-toggle text-white tabs_color text-center navmenu " id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false"><span>Profile</span></a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink1">
                        <a class="dropdown-item tabs_color1 text-center" href="{{url('/showprofile')}}"><span>Profile</span></a>
                        <a class="dropdown-item tabs_color1 text-center" href="{{url('/welcome_letter')}}"><span>Welcome Letter</span></a>
                        <!--<a class="dropdown-item tabs_color1 text-center" href="{{url('/view_token')}}"><span>Token Number</span></a>-->
                    </div>
                  </li>
                  <!---------- Profile Dropdown Close  ------------>
                
                <!---------- Document Dropdown    ------------>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white tabs_color text-center " id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false">Document</a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink2">
                      <a class="dropdown-item" href="{{url('/invoice')}}">Invoice</a>
                    </div>
                  </li> -->
                <!---------- Document Dropdown close    ------------>

                <li class="nav-item" style=" border-bottom:2px solid #e9ecef;">
                    <a class="nav-link dropdown-toggle text-white tabs_color text-center navmenu2" href="{{url('/uploadkyc')}}"><span>Upload kyc</span></a>
                </li>

                

                <!---------- Wallet Dropdown  ------------>
                <li class="nav-item dropdown" style=" border-bottom:2px solid #e9ecef;">
                    <a class="nav-link dropdown-toggle text-white tabs_color text-center navmenu " id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false"><span>Wallet</span></a>
                    <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink3">
                      <a class="dropdown-item tabs_color1 text-center" href="{{url('/mywallet')}}"><span>My Wallet</span></a>
                      
                      <a class="dropdown-item  tabs_color1 text-center" href="{{url('/withdraw')}}"><span>Bank Withdrawl</span></a>
                      <a class="dropdown-item tabs_color1 text-center" href="{{url('/withdraw_details')}}"><span>Bank Withdrawl details</span></a>
                    </div>
                  </li>
                <!---------- Wallet Dropdown close ------------>

                   <!---------- Benifits Dropdown  ------------>
                 
                <!---------- Benifits Dropdown close ------------>

                    <!---------- Support Dropdown  ------------>
                   <!-- <li class="nav-item dropdown" style=" border-bottom:2px solid #e9ecef;">
                        <a class="nav-link dropdown-toggle text-white tabs_color text-center navmenu1 " id="navbarDropdownMenuLink5" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="false"><span>Contact Us</span></a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink5">
                          <a class="dropdown-item   tabs_color1 text-center navmenu6" href="{{url('/contact')}}">Contact Us</a>
                         
                        </div>
                      </li>-->
                    <!---------- Support Dropdown close ------------>
             
                <!-- <li class="nav-item">
                    
                    


                                    
                </li> -->
            <!-- Add Lucky Coupon------------------------------------------------- @Tilesh -->
                
                 <li class="nav-item" style=" border-bottom:2px solid #e9ecef;">
                                <a id="" class="nav-link dropdown-toggle text-white tabs_color text-center " href="lucky_coupon" role="button" data-toggle="" aria-haspopup="true" aria-expanded="false" v-pre  >
                                   
                                   <span class="tabs-color tabs_color text-center">Coupon</span>
                                </a>
                                </li>
                

                <li class="nav-item dropdown" style=" border-bottom:2px solid #e9ecef;">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white tabs_color text-center navmenu4" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre  >
                                   
                                   <span class="tabs-color text-center"> Logout</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item tabs_color1 text-center navmenu5" href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            
                            
                              

            </ul>
           
          </div>
        </nav>
	
      

