
@extends('desing.sidebar')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{ asset('/main/main.js') }}"></script>

<link type="text/css" rel="stylesheet" href="{{ asset('/css/main.css') }}">

<div class="h1">
    Genealogy View
    <hr>
</div>

<div class="container">

    <div class="body genealogy-body genealogy-scroll">
        <div class="genealogy-tree">
            @php $no=''; @endphp
            
          
            <ul>
            @foreach($users as $root)
            @if($root->id == $root_user_id)
                <li>
                    
                      
                    <a href="javascript:void(0);">
                        <div class="member-view-box">
                            <div class="member-image">
                                <img src="/img/avatar.jpeg" class="rounded-circle" alt="Member">
                                <div class="member-details">
                                    <h3>{{ $root->name }}</h3>
                                    <h3>Id: {{ $root->id }}</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                    @php $no = $root->id @endphp

                
                    @endif

                   

                    @if($root->sponserid == $no)
                    <ul class="active">

                        @foreach($users as $root1)

                        @if($root1->sponserid == $no)
                        @php $b_id = $root1->id; @endphp


                        <li>

                            <a href="javascript:void(0);">
                                <div class="member-view-box">
                                    <div class="member-image">
                                        <img src="/img/avatar.jpeg" class="rounded-circle" alt="Member">
                                        <div class="member-details">
                                            <h5>{{ $root1->name }}</h5>
                                            <h5>Id: {{ $root1->id }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- Level 2 --------------------------------------------------------------------------------------- -->
                            <ul>
                                @foreach($users as $root3)
                                @if($root3->sponserid == $b_id)
                                @php $c_id = $root3->id; @endphp
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="member-view-box">
                                            <div class="member-image">
                                                <img src="/img/avatar.jpeg" class="rounded-circle" alt="Member">
                                                <div class="member-details">
                                                    <h5>{{ $root3->name }}</h5>
                                                    <h5>Id: {{ $root3->id }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- Level 3 Users ----------------------------------------------------------------------- -->
                                    <ul>
                                        @foreach($users as $root4)
                                        @if($root4->sponserid == $c_id)
                                        @php $d_id = $root4->id; @endphp

                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="member-view-box">
                                                    <div class="member-image">
                                                        <img src="/img/avatar.jpeg" class="rounded-circle" alt="Member">
                                                        <div class="member-details">
                                                            <h5>{{ $root4->name }}</h5>
                                                            <h5>Id: {{ $root4->id }}</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                            <!-- Level 4 Users ----------------------------------------------------------------------- -->
                                            <ul>
                                                @foreach($users as $root5)
                                                @if($root5->sponserid == $d_id)
                                                @php $e_id = $root5->id; @endphp

                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="member-view-box">
                                                            <div class="member-image">
                                                                <img src="/img/avatar.jpeg" class="rounded-circle"
                                                                    alt="Member">
                                                                <div class="member-details">
                                                                    <h5>{{ $root5->name }}</h5>
                                                                    <h5>Id: {{ $root5->id }}</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>

                                                    <!-- Level 5 Users ----------------------------------------------------------------------- -->
                                                    <ul>
                                                        @foreach($users as $root6)
                                                        @if($root6->sponserid == $e_id)
                                                        @php $f_id = $root6->id; @endphp

                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <div class="member-view-box">
                                                                    <div class="member-image">
                                                                        <img src="/img/avatar.jpeg"
                                                                            class="rounded-circle" alt="Member">
                                                                        <div class="member-details">
                                                                            <h5>{{ $root6->name }}</h5>
                                                                            <h5>Id: {{ $root6->id }}</h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>

                                                            <!-- Level 6 Users ----------------------------------------------------------------------- -->
                                                            <ul>
                                                                @foreach($users as $root7)
                                                                @if($root7->sponserid == $f_id)
                                                                @php $g_id = $root7->id; @endphp

                                                                <li>
                                                                    <a href="javascript:void(0);">
                                                                        <div class="member-view-box">
                                                                            <div class="member-image">
                                                                                <img src="/img/avatar.jpeg"
                                                                                    class="rounded-circle" alt="Member">
                                                                                <div class="member-details">
                                                                                    <h5>{{ $root7->name }}</h5>
                                                                                    <h5>Id: {{ $root7->id }}</h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a>

                                                                    <!-- Level 7 Users ----------------------------------------------------------------------- -->
                                                                    <ul>
                                                                        @foreach($users as $root8)
                                                                        @if($root8->sponserid == $g_id)
                                                                        @php $h_id = $root8->id; @endphp

                                                                        <li>
                                                                            <a href="javascript:void(0);">
                                                                                <div class="member-view-box">
                                                                                    <div class="member-image">
                                                                                        <img src="/img/avatar.jpeg"
                                                                                            class="rounded-circle"
                                                                                            alt="Member">
                                                                                        <div class="member-details">
                                                                                            <h5>{{ $root8->name }}</h5>
                                                                                            <h5>Id: {{ $root8->id }}</h5>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a>



                                                                        </li>
                                                                        @endif
                                                                        @endforeach
                                                                    </ul>

                                                                </li>
                                                                @endif
                                                                @endforeach
                                                            </ul>

                                                        </li>
                                                        @endif
                                                        @endforeach
                                                    </ul>


                                                </li>
                                                @endif
                                                @endforeach
                                            </ul>

                                        </li>
                                        @endif
                                        @endforeach
                                    </ul>


                                </li>
                                @endif
                                @endforeach
                            </ul>



                        </li>
                        @endif

                        @endforeach
                    </ul>
                  
                    @empty(!$no)
                        @break
                    @endempty
                    @endif
                    @endforeach
                </li>
               
            </ul>
           
                    
           
        </div>
    </div>
<div class="pt-5">
         <a href="{{ url()->previous() }}" class="btn btn-danger btn-lg" name="" type="submit">Back</a>
</div>
</div>



@endsection