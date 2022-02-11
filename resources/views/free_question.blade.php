@extends('sidebar')

@section('content')
<div class="container p-3">

 <div class="row" id="freeques">
    <div class="col-lg-12 col-12">
       <table class="tabel table-striped table-bordered table-responsive" style="padding:10px;">
        <thead class="thead-dark">
          <tr>
            
            <th class="col-md-6">Questions</th>
            <th class="col-md-3">Answers</th>
            <th class="col-md-3">Date</th>
          </tr>
        </thead>
        <tbody>
          @if($ques)
          @foreach($ques as $freeques1)
          <tr>
            <td>{{ $freeques1->fquestions1 }}</td><td>{{ $freeques1->fanswers1 }} </td><td>{{ $freeques1->created_at }}</td>
          </tr>
           <tr>
            <td>{{ $freeques1->fquestions2 }}</td><td>{{ $freeques1->fanswers2 }} </td><td>{{ $freeques1->created_at }}</td>
          </tr>
           <tr>
            <td>{{ $freeques1->fquestions3 }}</td><td>{{ $freeques1->fanswers3 }} </td><td>{{ $freeques1->created_at }}</td>
          </tr>
           <tr>
            <td>{{ $freeques1->fquestions4 }}</td><td>{{ $freeques1->fanswers4 }} </td><td>{{ $freeques1->created_at }}</td>
          </tr>
           <tr>
            <td>{{ $freeques1->fquestions5 }}</td><td>{{ $freeques1->fanswers5 }} </td><td>{{ $freeques1->created_at }}</td>
          </tr>
           <tr>
            <td>{{ $freeques1->fquestions6 }}</td><td>{{ $freeques1->fanswers6 }} </td><td>{{ $freeques1->created_at }}</td>
          </tr>
           <tr>
            <td>{{ $freeques1->fquestions7 }}</td><td>{{ $freeques1->fanswers7 }} </td><td>{{ $freeques1->created_at }}</td>
          </tr>
           <tr>
            <td>{{ $freeques1->fquestions8 }}</td><td>{{ $freeques1->fanswers8 }} </td><td>{{ $freeques1->created_at }}</td>
          </tr>
           <tr>
            <td>{{ $freeques1->fquestions9 }}</td><td>{{ $freeques1->fanswers9 }} </td><td>{{ $freeques1->created_at }}</td>
          </tr>
           <tr>
            <td>{{ $freeques1->fquestions10 }}</td><td>{{ $freeques1->fanswers10 }} </td><td>{{ $freeques1->created_at }}</td>
            
          </tr>

          @endforeach
          @endif
        </tbody>
      </table>
  
       <div id="mybutton">
             <!--<button class="feedback">Feedback</button>-->
             <a href="{{url('/pquestion1')}}" class="feedback btn ">Analyse My<br>Hair Health</a>
        </div>
      </div>  
</div>
    <style type="text/css">
      th{
        text-align: center;
      }
      td{
        text-align: center;
      }
      .tabel{
        margin-right: 10px;
      }
      .feedback {
                     background-color: transparent;
                      color:#DAA520;
                      font-weight: bold;
                      padding: 10px 20px;
                      border-radius: 4px;
                      border:solid 2px;
                      border-color: #000;
                    }
                    
                    #mybutton {
                      position: fixed;
                      bottom: 50px;
                      right: 10px;
                    }
                     #mybutton:hover {
                      background-color: #DAA520;
                      color:#000;
                     
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
    </style>
    
    @endsection