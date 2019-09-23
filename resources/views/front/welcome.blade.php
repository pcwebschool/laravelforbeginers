@extends('layouts.app')

<!-- Content -->
@section('content')
  <!-- Main Content -->
  <div class="row">
    <div class="col-lg-10 col-md-12 mx-auto">
      <div class="row">
        <div class="col-md-4"><img class="posthumbnail" src="images/about-bg.jpg" alt="post_image"></div>
        <div class="col-md-8">
            <div class="post-preview">
              <a href="/post">
                <h2 class="post-title">
                  Man must explore, and this is exploration at its greatest
                </h2>
                <h3 class="post-subtitle">
                  Problems look mighty small from 150 miles up
                </h3>
              </a>
              <p class="post-meta">Posted by
                <a href="#">Start Bootstrap</a>
                on September 24, 2019</p>
            </div>
        </div>
      </div>
      <hr>
      <div class="row">
          <div class="col-md-4"><img class="posthumbnail" src="images/post-sample-image.jpg" alt="post_image"></div>
          <div class="col-md-8">
              <div class="post-preview">
                <a href="post.html">
                  <h2 class="post-title">
                    Man must explore, and this is exploration at its greatest
                  </h2>
                  <h3 class="post-subtitle">
                    Problems look mighty small from 150 miles up
                  </h3>
                </a>
                <p class="post-meta">Posted by
                  <a href="#">Start Bootstrap</a>
                  on September 24, 2019</p>
              </div>
          </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-4"><img class="posthumbnail" src="images/contact-bg.jpg" alt="post_image"></div>
            <div class="col-md-8">
                <div class="post-preview">
                  <a href="post.html">
                    <h2 class="post-title">
                      Man must explore, and this is exploration at its greatest
                    </h2>
                    <h3 class="post-subtitle">
                      Problems look mighty small from 150 miles up
                    </h3>
                  </a>
                  <p class="post-meta">Posted by
                    <a href="#">Start Bootstrap</a>
                    on September 24, 2019</p>
                </div>
            </div>
          </div>
          <hr>
          <div class="row">
              <div class="col-md-4"><img class="posthumbnail" src="images/home-bg.jpg" alt="post_image"></div>
              <div class="col-md-8">
                  <div class="post-preview">
                    <a href="post.html">
                      <h2 class="post-title">
                        Man must explore, and this is exploration at its greatest
                      </h2>
                      <h3 class="post-subtitle">
                        Problems look mighty small from 150 miles up
                      </h3>
                    </a>
                    <p class="post-meta">Posted by
                      <a href="#">Start Bootstrap</a>
                      on September 24, 2019</p>
                  </div>
              </div>
            </div>
            <hr>
      <!-- Pager -->
      <div class="clearfix">
        <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
      </div>
    </div>
  </div>

@endsection