
@if (\Request::is('/'))  
  <header class="masthead" style="background-image: url('images/home-bg.jpg')">
@elseif(\Request::is('about'))
  <header class="masthead" style="background-image: url('images/about-bg.jpg')">      
@elseif(\Request::is('contact'))
  <header class="masthead" style="background-image: url('images/contact-bg.jpg')">
@elseif(\Request::is('post'))
  <header class="masthead" style="background-image: url('images/post-bg.jpg')">
@endif
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Clean Blog</h1>
            <span class="subheading">A Blog Theme by Start Bootstrap</span>
          </div>
        </div>
      </div>
    </div>
</header>