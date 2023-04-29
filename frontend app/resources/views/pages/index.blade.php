@extends('layouts.homepage')

@section('header')
<section class="bgimage">
  <div class="container-fluid">
        <h7 class='text-center text-light display-3 d-none d-sm-block'>School of Computing and Information Technology</h7>
        <h1 class='text-center text-light display-5 d-block d-sm-none'>School of Computing and Information Technology</h1>
        <p class='text-center text-light'>Catering the educational needs of gifted rural youth</p>
        <p class='text-center'><a href="{{env('APP_BACKEND')}}/login" class="btn btn-outline-light btn-xlarge" target="_blank" style='width:250px;background-color: rgba(105, 14, 7, 0.8)'>Apply Now »</a></p>
    </div>
</section>
@endsection

@section('notifications')
    <div class='card bg-dark text-light' >
        <div class='card-header' style='background-color: rgba(105, 14, 7, 0.8)'>
            <h5 class='text-center'> SCIT Programmes</h5>
        </div>
        <div class='card-body bg-light'>
            <div class='list-group'>
            <marquee behavior="scroll" direction="up" scrolldelay="350" scrollamount="4">
                    @if(count($programmes)>0)
                      @foreach ($programmes as $programme)
                      <li class="list-group-item">
                        <a href="/programmes/{{$programme->id}}">{{$programme->name}}</a>
                       <!-- <small class='mr-auto text-danger'>{{$programme->created_at}}</small>-->
                      </li>
                      @endforeach
                    @else
                      <a href="#!">No information</a>
                    @endif
            </marquee>
            </div>
        </div>
        <div class='card-footer' style='background-color: rgba(105, 14, 7, 0.8)'>
        <a href='{{env('APP_BACKEND')}}' class='btn btn-outline-light' target='_blank'>Apply Now »</a>
        </div>
    </div>
    <br/>
    <div class='card bg-dark text-light' >
        <div class='card-header' style='background-color: rgba(105, 14, 7, 0.8)'>
            <h5 class='text-center'> Current Activities</h5>
        </div>
        <div class='card-body bg-light'>
            <div class='list-group'>
                <marquee behavior="scroll" direction="up" scrolldelay="500" scrollamount="8">
                    @if(count($tenders)>0)
                        @foreach ($tenders as $tender)
                            <li class="list-group-item">
                                <a href="/tenders/{{$tender->id}}">{{$tender->name}}</a>
                                <small class='mr-auto text-danger'>{{$tender->created_at}}</small>
                            </li>
                        @endforeach
                    @else
                        <a href="#!">No current activities</a>
                    @endif
                </marquee>
            </div>
        </div>
        <div class='card-footer' style='background-color: rgba(105, 14, 7, 0.8)'>
            <a href='/tenders' class='btn btn-outline-light'>More »</a>
        </div>
    </div>
@endsection

@section('administration')
<div class='card-deck'>
    <div class="card">
        <img class="card-img-top" src="/images/director.jpg" alt="SCIT Director">
        <div class="card-body bg-dark text-light">
            <h4 class="card-title">Director</h4>
            <p class="card-text">Prof. Dennis</p>
            <a href="#" class="btn btn-outline-light">See Profile »</a>
        </div>
    </div>


        <div class='card bg-dark text-light' >
            <div class='card-header' style='background-color: rgba(105, 14, 7, 0.8)'>
                <h5 class='text-center'> The Director's Message</h5>
            </div>
            <div class='card-body bg-light'>
                <div class='list-group'>
                    <marquee behavior="scroll" direction="up" scrolldelay="300" scrollamount="4">

                            <a href="#!">It is my pleasure to welcome all of you to the School of Computing and Information Technology (SCIT). At SCIT, we are dedicated to quality teaching, learning, research, innovation and community service. We’ve and will continue to play a key role in nation building by molding our student population through ICT. We commit to continue attracting quality staff and students who are able to compete at the highest level locally, regionally and globally. Thank you.</a>

                    </marquee>
                </div>
            </div>
            <div class='card-footer' style='background-color: rgba(105, 14, 7, 0.8)'>
                <a href='#!' class='btn btn-outline-light'>More »</a>
            </div>

    </div>

</div>
@endsection

@section('footer')

<footer class="page-footer font-small pt-4 text-light" style='background-color: rgba(105, 14, 7, 0.8); text-decoration:none;'>

  <div class="container-fluid d-none d-sm-block">


    <div class="row">


      <div class="col-md-6">


        <h5 class="text-uppercase">SCIT</h5>
        <p>Catering the educational needs of Kenyan youths</p>
        <p>{{date('Y')}}</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-6">

        <!-- Links -->
        <h5 class="text-uppercase bg-warning text-dark">Quick Links</h5>

        <ul class="list-unstyled">
          <li>
            <a class='text-white' href="#!">Contact Us</a>
          </li>
          <li>
            <a class='text-white' href="#!">About SCIT</a>
          </li>
        </ul>

      </div>

    </div>

  </div>

  <div class="footer-copyright text-center py-3 bg-dark text-light">©{{date('Y')}} Copyright:
    <a href="/">SCIT</a>
  </div>

</footer>
@endsection
