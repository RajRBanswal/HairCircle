@extends('admin.desing.sidebar2')


@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{ asset('/main/main.js') }}"></script>

<link type="text/css" rel="stylesheet" href="{{ asset('/css/main.css') }}">



<div class="container ">
    <div class="card m-3">
            <h3 class="ml-3 mt-3">Genealogy View</h3>

        <div class="card-body genealogy-body genealogy-scroll">
            <div class="genealogy-tree">
                @php $no=''; @endphp
                
              
                <ul>
                @foreach($users as $root)
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
</div>



@endsection