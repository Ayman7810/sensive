@extends('theme.layout')

@section('title','Create Blog')
@section('index-active','active')

@section('contact')
 
<main class="site-main">
    @include('theme.partials.hero' ,['title' => 'Create Blog'])
      <!-- ================ contact section start ================= -->
  <section class="section-margin--small section-margin">
    <div class="container">
      <div class="row">
        <div class="col-12">
          @if (session('status-create-blog'))
          <span style="color: red">{{ session('status-create-blog') }}</span>
          @endif
          <form action="{{ route('blogs.store') }}" class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control border" name="name"  type="text" placeholder="Enter titel blog" value="{{ old('name') }}">
                  @error('name')
                    <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <input class="form-control border" name="image"  type="file"  value="{{ old('image') }}">
                  @error('image')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <select class="form-control border" name="category_id">
                    <option value="">select category</option>
                    @if (count($categories) > 0)
                      @foreach ($categories as $e)
                      <option value="{{ $e->id }}">{{ $e->name }}</option>
                      @endforeach
                    @endif
                  </select>
                  @error('category_id')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <textarea class="w-100 border" name="desc" placeholder="Enter your description" rows="5">
                    {{ old('desc') }}
                  </textarea>
                  @error('desc')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>
              </div>
            </div>
            <div class="form-group text-center text-md-right mt-3">
              <button type="submit" class="button button--active button-contactForm">Create Blog</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
	<!-- ================ contact section end ================= -->
  
</main>

@endsection

