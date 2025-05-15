@extends('theme.layout')

@section('title','login')
@section('index-active','active')

@section('contact')
 
<main class="site-main">
    @include('theme.partials.hero' ,['title' => 'login'])

   <!-- ================ contact section start ================= -->
   <section class="section-margin--small section-margin">
    <div class="container">
      <div class="row">
        <div class="col-6 mx-auto">
          <form action="{{ route('login') }}" class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            @csrf
            <div class="form-group">
              <input class="form-control border" name="email" value="{{ old('email') }}" type="email" placeholder="Enter email address">
              @error('email')
                <span style="color: red">{{ $message }}</span>
              @enderror
            </div>
            <div class="form-group">
              <input class="form-control border" name="password"  type="password" placeholder="Enter your password">
              @error('password')
              <span style="color: red">{{ $message }}</span>
            @enderror
            </div>
            <div class="form-group text-center text-md-right mt-3">
              <button type="submit" class="button button--active button-contactForm">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
	<!-- ================ contact section end ================= -->

</main>

@endsection

