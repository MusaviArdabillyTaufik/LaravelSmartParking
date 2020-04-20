@extends('layouts.adminmain')

@section('content')
<script type="text/javascript">
  document.title="Dashboard";
  document.getElementById('dashboard').classList.add('active');
</script>
<section class="section">
  
  <div class="section-header">
    <h1>Dashboard</h1>
  </div>

  <!-- @if(auth()->user()->role == "admin")
  	<h4><marquee>Selamat Datang {{auth()->user()->nama_user}}, Di Halaman Admin</marquee></h4>
  @elseif(auth()->user()->role == "staff")
  	<h4><marquee>Selamat Datang {{auth()->user()->nama_user}}, Di Halaman Staff</marquee></h4>
  @endif -->
  <div class="row">
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card card-secondary">
        <div class="card-header">
          <i id="micon" class="fa fa-user-secret" aria-hidden="true"></i>
          <div class="ml-auto">
            <h4>Total Admin</h4>
            <h3>{{ $totaladmin }}</h3>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4">
      <div class="card card-secondary">
        <div class="card-header">
          <i id="micon" class="fa fa-user" aria-hidden="true"></i>
          <div class="ml-auto">
            <h4>Total Patugas</h4>
            <h3>{{ $totalpetugas }}</h3>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4">
      <div class="card card-secondary">
        <div class="card-header">
          <i id="micon" class="fa fa-user-o" aria-hidden="true"></i>
          <div class="ml-auto">
            <h4>Total Mahasiswa</h4>
            <h3>{{ $totalmahasiswa }}</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="clock" style="font-size: 50px; padding-top: 20%;" align="center"></div>
  <div id="shadow" align="center" class="d-none"></div>
		
</section>
@endsection