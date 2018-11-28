@extends('template-custom.template-home')
@section("title")
      Babyshop - Website thời trang trẻ em
@endsection
@section("main")
      <section class="slider-banner">
            <div class="container">
                  <div class="row">

                  </div>
            </div>
      </section>
      <section class="box-post new-post">
            <div class="container">
                  <div class="row">
                        <div class="box-title">
                              <h2>Tin tức - Khuyến mại</h2>
                        </div>
                  
                        @foreach($post as $p)
                              <div class="col-md-3">
                                    <a href="{{ route('post-content',$p->slug) }}">
                                          <div class="box-new">
                                                <div class="box-avatar">
                                                      <img src="{{ url('gallery/images_posts/',$p->images) }}" alt="{{ $p->title }}">
                                                </div>
                                                <div class="box-content">
                                                      <h3><a href="{{ route('post-content',$p->slug) }}">{{ $p->title }}</a></h3>
                                                      <p class="excerpt">{{ $p->excerpt }}</p>
                                                </div>
                                          </div>
                                    </a>
                              </div>
                        @endforeach
                  </div>
            </div>

      </section>
@endsection