@extends('theme.layout')

@section('title', 'Blog details')
@section('category-active', 'active')

@section('contact')

    <main class="site-main">
        @include('theme.partials.hero', ['title' => $blog->name])
        <!--================ Start Blog Post Area =================-->
        <section class="blog-post-area section-margin">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="main_blog_details">
                            <img class="img-fluid" src='{{ asset("storage/blogs/$blog->image") }}' alt="">
                            <a href="#">
                                <h4>{{ $blog->name }}
                            </a>
                            <div class="user_details">
                                <div class="float-right mt-sm-0 mt-3">
                                    <div class="media">
                                        <div class="media-body">
                                            <h5>{{ $blog->user->name }}</h5>
                                            <p>{{ $blog->created_at->format(' d M Y') }}</p>
                                        </div>
                                        <div class="d-flex">
                                            <img width="42" height="42" src="{{ asset('assets') }}/img/avatar.png"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>{{ $blog->desc }}</p>
                        </div>

                        @if (count($blog->comments) > 0)
                            
                        <div class="comments-area">
                            <h4>0{{ count($blog->comments) }} Comments</h4>
                            @foreach ($blog->comments as $comment)
                                
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="{{ asset('assets') }}/img/avatar.png" width="50px">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">{{ $comment->name }}</a></h5>
                                            <p class="date">{{ $comment->created_at->format('d M Y') }} </p>
                                            <p class="comment">
                                               {{ $comment->message }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                        @endif

                        <div class="comment-form">
                            <h4>Leave a Reply</h4>

                            @if (session('stutasComment'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Holy guacamole!</strong> {{ session('stutasComment') }}

                              </div>
                            @endif
                            <form action="{{ route('comment.store') }}" method="POST">
                                @csrf
                                <input type="hidden" class="form-control"  value="{{ $blog->id  }}" 
                                name="blog_id"
                                 >
                                <div class="form-group form-inline">
                                    <div class="form-group col-lg-6 col-md-6 name">
                                        <input type="text" class="form-control" name="name" placeholder="Enter Name"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'" value="{{ old('name') }}"
                                           >
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 email">
                                        <input type="email" class="form-control" name="email"
                                            placeholder="Enter email address" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter email address'" value="{{ old('email') }}">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'"
                                        value="{{ old('subject') }}">
                                    @error('subject')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                               
                                <div class="form-group">
                                    <textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Messege'" required="">{{ old('name') }}

                          </textarea>
                                    @error('message')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <a class="button submit_btn"
                                    onclick="event.preventDefault();
                     this.closest('form').submit();">Post
                                    Comment</a>
                            </form>
                        </div>
                    </div>

                    @include('theme.partials.siddbar')
                </div>
        </section>
        <!--================ End Blog Post Area =================-->

    </main>

@endsection
