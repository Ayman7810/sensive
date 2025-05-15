@extends('theme.layout')

@section('title','Edit Blog')
@section('index-active','active')

@section('contact')
 
<main class="site-main">
    @include('theme.partials.hero' ,['title' => $blog->name])
      <!-- ================ contact section start ================= -->
  <section class="section-margin--small section-margin">
    <div class="container">
      <div class="row">
        <div class="col-12">
          @if (session('status-edit-blog'))
          <span style="color: red">{{ session('status-edit-blog') }}</span>
          @endif
          <form action="{{ route('blogs.update',['blog' => $blog]) }}" class="form-contact contact_form"  method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control border" name="name"  type="text" placeholder="Enter titel blog" value="{{ $blog->name  }}">
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
                      <option value="{{ $e->id }}" 
                        @if($e->id==$blog->category_id)
                        selected
                        @endif
                        >{{ $e->name }}</option>
                      @endforeach
                    @endif
                  </select>
                  @error('category_id')
                  <span style="color: red">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <textarea class="w-100 border" name="desc" placeholder="Enter your description" rows="5">
                    {{ $blog->desc }}
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

