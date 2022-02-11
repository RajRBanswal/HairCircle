@extends('desing.sidebar')

@section('content')

<link rel="stylesheet" href="./css/app.css">
<script src="{{ asset('/main/main.js') }}"></script>

<div>
    <h2>Search Members</spam>
    </h2>
</div>
<hr>

<div>
@if(Session::get('msg'))
    <div class="alert alert-danger w-50">
        <ul>

            <li class="h4">{{ Session::get('msg') }}</li>

        </ul>
    </div>
    @endif
    

<div class="row"> 
@foreach($search_data as $member)


    <div class="col-lg-3 col-md-3 col-sm-6 ">

        <div class="card mt-3  pb-5">
        @if($member->status == 'active')
            <div class="text-primary">
                <spn class="pull-right px-3 pt-2" style='font-size:15px;'>&#10004;</span>
            </div>
            @endif
            <div class="cerd-body p-3 text-center">
                <img src="/img/avatar.jpeg" class="rounded-circle" style="border: 2px solid black;" alt="Cinque Terre"
                    width="100" height="100">
                <div class="mt-1">
                    <h1>{{ $member->name }}</h1>
                </div>

                <div class="mt-1">
                    <h4>{{ $member->mobile }}</h4>
                </div>
                <div class="mt-1 text-primary">
                    <h4>{{ $member->email }}</h4>
                </div>
                <div>
                    <!-- on Click Button id= Mybtn -->
                    <a href="/active/open/{{$member->id}}" class="btn btn-primary mt-1 " type="button" id="">Open</a>
                    <a href="/active/edit/{{$member->id}}" class="btn btn-success mt-1 " type="button" id="">Edit</a>
                    <a href="/active/delete/{{$member->id}}" class="btn btn-danger mt-1 " type="button" id="">Deleted</a>

                </div>
            </div>
        </div>
    </div>
                
                @endforeach
 </div>

        

    </div>

    <div>

    </div>




    @endsection