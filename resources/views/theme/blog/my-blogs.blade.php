@extends('theme.layout')

@section('title','Create Blog')
@section('index-active','active')

@section('contact')
 
<main class="site-main">
    @include('theme.partials.hero' ,['title' => 'Create Blog'])
      <!-- ================ contact section start ================= -->
  <section class="section-margin--small section-margin">
    <div class="container">
      @if (session('status'))
      <span class="text-danger">{{ session('status') }}</span>
      @endif
      <div class="row">
        <div class="col-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">title</th>
                <th scope="col">action</th>
                
              </tr>
            </thead>
            <tbody>
              @if (count($blogs) > 0)
                @foreach ($blogs  as $blog )
                  
                <tr>
                  <th class="w-75"><a href="{{ route('blogs.show',['blog'=> $blog]) }}" target="_blank" rel="noopener noreferrer">{{ $blog->name }}</a></th>
                  <td >
                    <a href="{{ route('blogs.edit',['blog'=>$blog]) }}"  class="btn btn-primary">Edit</a>
                    <form action="{{ route('blogs.destroy',['blog' => $blog]) }}" method="post" class="d-inline">
                      @csrf
                      @method('delete')
                      <a href=""  class="btn btn-danger " 
                      onclick="event.preventDefault();
                     this.closest('form').submit();">Delete</a>
                    </form>
                  </td>
                </tr>
                @endforeach
              @endif
              
              @if (count($blogs) > 0)
              {{ $blogs->render('pagination::bootstrap-4') }}
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
	<!-- ================ contact section end ================= -->
  
</main>

@endsection

