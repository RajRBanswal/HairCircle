@extends('sidebar')


@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{ asset('/main/main.js') }}"></script>

<link type="text/css" rel="stylesheet" href="{{ asset('/css/main.css') }}">



<div class="container ">
    <div class="card m-3">
        <div class="row">
            <div class="form-group col-lg-8 col-md-6 col-12">
               <h3 class="ml-3 mt-3">Genealogy View</h3>
            </div>
            <div class="form-group col-lg-4 col-md-6 col-12" >
                @foreach($cust as $customer)
                    <h4 class="mt-3 p-3 m-3" style="border:solid 1px;">Total Points : {{$customer->no_of_refs*5}}</h4>
                @endforeach
            </div>
        </div>
           

        <div class="card-body genealogy-body genealogy-scroll">
            <div class="genealogy-tree">
                @php $no=''; @endphp
                
              
                <ul>
                @foreach($all_users as $root)
                    <li>
                        <div>
                            <div>
                                @if($root->ref_name = $root->name)
                                    <img src="{{asset('./docs/')}}/{{$root->image}}" width="100" height="100" style="border-radius:50%;">
                                    <h3>{{ $root->name }}</h3>
                                    <h3>Id: {{ $root->id }}</h3>
                                    <h3>Referral Point: {{ $root->no_of_refs }}</h3>
                                @elseif($root->ref_id1 > 0)
                                    <span>{{ $root->name }}</span>
                                    <h3>Id: {{ $root->id }}</h3>
                                @endif
                            </div>
                        </div>
                        
                        <!-- @if($root->ref_id1 = NULL)  
                            <a href="javascript:void(0);">
                                <div class="member-view-box">
                                    <div class="member-image">
                                        <div class="member-details">
                                            <h3>{{ $root->name }}</h3>
                                            <h3>Id: {{ $root->id }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            @elseif($root->ref_id1 > 0)
                            <a href="javascript:void(0);">
                            <div class="member-view-box">
                                <div class="member-image">
                                    <div class="member-details">
                                        <h3>{{ $root->name }}</h3>
                                        <h3>Id: {{ $root->id }}</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endif -->
                  
                        
                    </li>
                   @endforeach
                </ul>
               
                        
               
            </div>
        </div>
    </div>
<!-- <div class="pt-5">
         <a href="{{ url()->previous() }}" class="btn btn-danger btn-lg" name="" type="submit">Back</a>
</div> -->
<div id="mybutton">
         <!--<button class="feedback">Feedback</button>-->
         <a href="{{url('/pquestion1')}}" class="feedback btn ">Go Through Questions For Further<br> Evaluation of Hair Health</a>
    </div>
</div>
<style>
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
                .feedback{
  animation: color-change 3s infinite;
}

@keyframes color-change {
  0% { color: #fff; }
  50% { color: goldenrod; }
  100% { color: black; }
}
</style>


@endsection