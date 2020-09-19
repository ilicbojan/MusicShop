@extends('layouts.app')

@section('content')
<h3 class="mb-3">Contact</h3>
<div class="row mb-4">
  <div class="col-4">
    <div class="card border-0 shadow h-100">
      <div class="card-header bg-dark text-white">
        <h5 class="m-0">Muzio Belgrade</h5>
      </div>
      <div class="card-body bg-white">
        <div class="card-text">Retail Store</div>
        <div class="card-text">Cara Dusana 31</div>
        <div class="card-text"><a href="#">064/65-98-642</a></div>
        <div class="card-text"><a href="#">011/4562-841</a></div>
        <div class="card-text">10:00 - 18:00</div>
        <div class="card-text"><a href="#">muziobg@muzio.com</a></div>
      </div>
    </div>
  </div>
  <div class="col-4">
    <div class="card border-0 shadow h-100">
      <div class="card-header bg-dark text-white">
        <h5 class="m-0">Muzio Novi Sad</h5>
      </div>
      <div class="card-body bg-white">
        <div class="card-text">Retail Store</div>
        <div class="card-text">Makedonska 12</div>
        <div class="card-text"><a href="#">069/52-46-123</a></div>
        <div class="card-text"><a href="#">011/6521-874</a></div>
        <div class="card-text">09:00 - 17:00</div>
        <div class="card-text"><a href="#">muzions@muzio.com</a></div>
      </div>
    </div>
  </div>
  <div class="col-4">
    <div class="card border-0 shadow h-100">
      <div class="card-header bg-dark text-white">
        <h5 class="m-0">Muzio Nis</h5>
      </div>
      <div class="card-body bg-white">
        <div class="card-text">Retail Store</div>
        <div class="card-text">Visnjicka 158</div>
        <div class="card-text"><a href="#">065/45-85-751</a></div>
        <div class="card-text"><a href="#">011/4126-751</a></div>
        <div class="card-text">10:00 - 16:00</div>
        <div class="card-text"><a href="#">muzioni@muzio.com</a></div>
      </div>
    </div>
  </div>
</div>

<h4 class="my-3">Follow Us</h4>
<div class="row px-3 social-links mb-4" style="height: 100px">
  <div class="col-4 p-0">
    <a href="https://www.facebook.com" target="_blank"
      class="social social-facebook d-flex justify-content-center align-items-center">
      <div>Facebook</div>
    </a>
  </div>
  <div class="col-4 p-0 text-center">
    <a href="https://www.instagram.com" target="_blank"
      class="social social-instagram d-flex justify-content-center align-items-center">
      <div>Instagram</div>
    </a>
  </div>
  <div class="col-4 p-0 text-center">
    <a href="https://www.twitter.com" target="_blank"
      class="social social-twitter d-flex justify-content-center align-items-center">
      <div>Twitter</div>
    </a>
  </div>
</div>

<h4>Find Us</h4>
<div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
  <iframe src="https://maps.google.com/maps?q=belgrade&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
    style="border:0; height: 100%; width: 100%" allowfullscreen></iframe>
</div>

@endsection