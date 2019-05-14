@extends ('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

  <body >
    <div id="admin" class="">


    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    @section('content2')


        
          <li>
            <a class='animated-arrow' data-toggle="modal" href='#myModal'>
              <span class='the-arrow -left'>
                <span class='shaft'></span>
              </span>
              <span class='main'>
                <span class='text' style="font-size:12px;">
                Add Doctors
                </span>
              </span>
            </a>
          </li>
          <li>
            <a class='animated-arrow' href='{{url('admin/doctors_data')}}'>
              <span class='the-arrow -left'>
                <span class='shaft'></span>
              </span>
              <span class='main'>
                <span class='text' style="font-size:12px;">
            <strong>Doctors Data</strong>
                </span>
                </span>
              </span>
            </a>
          </li>


            <li>
              <a class='animated-arrow' href='{{url('admin/jadwal')}}'>
                <span class='the-arrow -left'>
                  <span class='shaft'></span>
                </span>
                <span class='main'>
                  <span class='text' style="font-size:12px;">
              Schedule Data
                  </span>
                  </span>
                </span>
              </a>
            </li>

        </ul>
    @endsection

    @section('navbar')
    <ul class="nav nav-tabs">
      <li class="nav-item" style="font-size:12px;">
        <a  class="nav-link active" href="{{url('/home')}}">Darshboard</a>
      </li>
    <li class="nav-item" style="font-size:12px;">
      <a style="color:white;"  class="nav-link " href="{{url('admin/patientreport')}}">Patient Report</a>
    </li>

    <li class="nav-item"  style="font-size:12px; ">
      <a style="color:white;" class="nav-link" href="{{url('admin/drugreport')}}">Drug Report</a>
    </li>
    <li class="nav-item" style="font-size:12px;">
        <a  style="color:white;" class="nav-link"  href="{{url('admin/salesreport')}}">Sales Report</a>
    </li>
  </ul>
    @endsection

@section('isi')


<div class="row">
  @if(session('sukses'))
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{session('sukses')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
  @endif


  <div class="wrapper">
      <div class="container" style="height:100%">
          <article class="part card-details">
              <h1>
                  Add Doctors Schedule
              </h1>
              <form method="POST" action="/dokter/{{$data->id}}/addschedule" enctype="multipart/form-data" >
                <hr>
                @csrf
                  <div class="group card-name">
                      <label for="name" style="color:white;">{{'Doctor ID'}}</label>
                        <input class="form-control" type="text" name="id_dokter" value="{{$data->id}}" style="height:20px;">
                  </div>

                  <div class="group card-name">
                      <label for="jam" style="color:white;">{{'Monday'}}</label>
                        <input class="form-control" type="text" name="monday" style="height:20px;" >
                  </div>
                  <div class="group card-name">
                      <label for="jam" style="color:white;">{{'Tuesday'}}</label>
                        <input class="form-control" type="text" name="tuesday" style="height:20px;" >
                  </div>
                  <div class="group card-name">
                      <label for="jam" style="color:white;">{{'Wednesday'}}</label>
                        <input class="form-control" type="text" name="wednesday" style="height:20px;" >
                  </div>
                  <div class="group card-name">
                      <label for="jam" style="color:white;">{{'Thursday'}}</label>
                        <input class="form-control" type="text" name="thursday" style="height:20px;" >
                  </div>
                  <div class="group card-name">
                      <label for="jam" style="color:white;">{{'Friday'}}</label>
                        <input class="form-control" type="text" name="friday" style="height:20px;" >
                  </div>
                  <div class="group card-name">
                      <label for="jam" style="color:white;">{{'Saturday'}}</label>
                        <input class="form-control" type="text" name="saturday" style="height:20px;" >
                  </div>


                  <button type="submit" class="btn btn-secondary">
                      {{ __('Add Schedule') }}
                  </button>

              </form>
          </article>
          <div class="part bg" style="background-image:url({{asset('storage/'.$data->avatar)}})">
          </div>
      </div>
  </div>
</div>
<!------endmodal---->

@endsection
  </body>
</html>
@endsection
