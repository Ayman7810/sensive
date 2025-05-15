@extends('theme.layout')

@section('title','register')
@section('index-active','active')

@section('contact')
 
<main class="site-main">
    @include('theme.partials.hero' ,['title' => 'Register'])
      <!-- ================ contact section start ================= -->
  <section class="section-margin--small section-margin">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <form action="{{ route('register') }}" class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            @csrf
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <input class="form-control border" name="name"  type="text" placeholder="Enter your name" value="{{ old('name') }}">
                  @error('name')
                    <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <input class="form-control border" name="email" id="email" type="email" placeholder="Enter email address" value="{{ old('email') }}">
                  @error('email')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <input class="form-control border" name="password"  type="password" placeholder="Enter your password">
                  @error('password')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <input class="form-control border" name="password_confirmation" type="password" placeholder="Enter your password confirmation">
                  @error('password_confirmation')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>
              </div>
            </div>
            <div class="form-group text-center text-md-right mt-3">
              <button type="submit" class="button button--active button-contactForm">Register</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
	<!-- ================ contact section end ================= -->
  
</main>

@endsection

