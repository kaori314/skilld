@extends('layouts.header')

@section('content')
  <title>{{$title}}</title>
  @include('layouts.nav')
  

  <!-- MOBILE MENU PULL -->
  <div class="mobile-menu-pull mobile-menu-open">
    <!-- MENU PULL ICON -->
    <svg class="menu-pull-icon">
      <use xlink:href="#svg-menu-pull"></use>
    </svg>
    <!-- /MENU PULL ICON -->
  </div>
  <!-- /MOBILE MENU PULL -->

  <!-- LIVE NEWS WIDGET WRAP -->
  <div class="live-news-widget-wrap">
    <!-- LIVE NEWS WIDGET -->
    <div class="live-news-widget grid-limit">
      <!-- LIVE NEWS WIDGET STAIRS -->
      <div class="live-news-widget-stairs left red">
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
      </div>
      <!-- /LIVE NEWS WIDGET STAIRS -->

      <!-- LIVE NEWS WIDGET STAIRS -->
      <div class="live-news-widget-stairs right blue">
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
      </div>
      <!-- /LIVE NEWS WIDGET STAIRS -->

      <!-- LIVE NEWS WIDGET TITLE WRAP -->
      <div class="live-news-widget-title-wrap">
        
      </div>
      <!-- /LIVE NEWS WIDGET TITLE WRAP -->

      <!-- LIVE NEWS WIDGET TEXT WRAP -->
      <div id="lineslide-wrap1" class="live-news-widget-text-wrap">
        <p class="live-news-widget-text"></p>
      </div>
      <!-- /LIVE NEWS WIDGET TEXT WRAP -->
    </div>
    <!-- /LIVE NEWS WIDGET -->
  </div>
  <!-- /LIVE NEWS WIDGET WRAP -->

  <!-- LAYOUT CONTENT 1 -->
  <div class="layout-content-1 layout-item-3-1 grid-limit">
    <!-- LAYOUT BODY -->
    <div class="layout-body">
      <!-- LAYOUT ITEM -->
      <div class="layout-item gutter-big">
        <!-- POST OPEN -->
        <div class="post-open gaming-news">
          <!-- POST OPEN IMG -->
          <figure class="post-open-img liquid">
            <img src="{{asset('img/' . $thumb_url)}}" style="height:100%">
          </figure>
          <!-- /POST OPEN IMG -->

          <!-- POST OPEN CONTENT -->
          <div class="post-open-content">
            <!-- POST OPEN BODY  -->
            <div class="post-open-body">
              <!-- TAG LIST -->
              <div class="tag-list">

              </div>
              <!-- /TAG LIST -->

              <!-- POST OPEN TITLE -->
              <p class="post-open-title">{{$title}}</p>
              <!-- /POST OPEN TITLE -->

              <!-- POST AUTHOR INFO -->
              <div class="post-author-info-wrap">
          
                <p class="post-author-info small light">By <a href="search-results.html" class="post-author">{{$author_name}}</a><span class="separator">|</span>{{$created_at}}<span class="separator">
              </div>
              <!-- /POST AUTHOR INFO -->

              <!-- POST OPEN TEXT -->
              <p class="post-open-text">{{$content}}</p>
              <!-- /POST OPEN TEXT -->

            </div>
            <!-- /POST OPEN BODY -->

            <!-- POST OPEN SIDEBAR -->
            <div class="post-open-sidebar">
              
            </div>
            <!-- /POST OPEN SIDEBAR -->
          </div>
          <!-- /POST OPEN CONTENT -->

         
        </div>
        <!-- /POST OPEN -->

        <!-- WIDGET NEWS -->
        <div class="widget-news">
          <!-- SECTION TITLE WRAP -->
          <div class="section-title-wrap blue">
            <h2 class="section-title medium">Related News</h2>
            <div class="section-title-separator"></div>
          </div>
          <!-- /SECTION TITLE WRAP -->

          <!-- POST PREVIEW SHOWCASE -->
          <div class="post-preview-showcase grid-3col centered">
            <!-- POST PREVIEW -->
            <div class="post-preview gaming-news">
              <!-- POST PREVIEW IMG WRAP -->
              <a href="post-v1.html">
                <div class="post-preview-img-wrap">
                  <!-- POST PREVIEW IMG -->
                  <figure class="post-preview-img liquid">
                    <img src="img/posts/09.jpg" alt="post-09">
                  </figure>
                  <!-- /POST PREVIEW IMG -->
                </div>
              </a>
              <!-- /POST PREVIEW IMG WRAP -->
  
              <!-- TAG ORNAMENT -->
              <a href="news-v1.html" class="tag-ornament">Gaming news</a>
              <!-- /TAG ORNAMENT -->
  
              <!-- POST PREVIEW TITLE -->
              <a href="post-v1.html" class="post-preview-title">New "Rizen" game is gonna be released in summer 2019</a>
              <!-- POST AUTHOR INFO -->
              <div class="post-author-info-wrap">
                <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Vellatrix</a><span class="separator">|</span>December 15th, 2018</p>
              </div>
              <!-- /POST AUTHOR INFO -->
              <!-- POST PREVIEW TEXT -->
              <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur bere adipisicing elit, sed do eiusmod tempor lorem incididunt ut labore et dolore magna.</p>
            </div>
            <!-- /POST PREVIEW -->

            <!-- POST PREVIEW -->
            <div class="post-preview geeky-news">
              <!-- POST PREVIEW IMG WRAP -->
              <a href="post-v4.html">
                <div class="post-preview-img-wrap">
                  <!-- POST PREVIEW IMG -->
                  <figure class="post-preview-img liquid">
                    <img src="img/posts/02.jpg" alt="post-02">
                  </figure>
                  <!-- /POST PREVIEW IMG -->
                </div>
              </a>
              <!-- /POST PREVIEW IMG WRAP -->
  
              <!-- TAG ORNAMENT -->
              <a href="news-v4.html" class="tag-ornament">Geeky news</a>
              <!-- /TAG ORNAMENT -->
  
              <!-- POST PREVIEW TITLE -->
              <a href="post-v4.html" class="post-preview-title">Jessica Tam to star in the new "Charlotte" series</a>
              <!-- POST AUTHOR INFO -->
              <div class="post-author-info-wrap">
                <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Vellatrix</a><span class="separator">|</span>December 15th, 2018</p>
              </div>
              <!-- /POST AUTHOR INFO -->
              <!-- POST PREVIEW TEXT -->
              <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur bere adipisicing elit, sed do eiusmod tempor lorem incididunt ut labore et dolore magna.</p>
            </div>
            <!-- /POST PREVIEW -->

            <!-- POST PREVIEW -->
            <div class="post-preview movie-news">
              <!-- POST PREVIEW IMG WRAP -->
              <a href="post-v3.html">
                <div class="post-preview-img-wrap">
                  <!-- POST PREVIEW IMG -->
                  <figure class="post-preview-img liquid">
                    <img src="img/posts/12.jpg" alt="post-12">
                  </figure>
                  <!-- /POST PREVIEW IMG -->
  
                  <!-- RATING ORNAMENT -->
                  <div class="rating-ornament">
                    <!-- RATING ORNAMENT ITEM -->
                    <div class="rating-ornament-item">
                      <!-- RATING ORNAMENT ICON -->
                      <svg class="rating-ornament-icon">
                        <use xlink:href="#svg-star"></use>
                      </svg>
                    </div>
                    <!-- /RATING ORNAMENT ITEM -->
                  
                    <!-- RATING ORNAMENT ITEM -->
                    <div class="rating-ornament-item">
                      <!-- RATING ORNAMENT ICON -->
                      <svg class="rating-ornament-icon">
                        <use xlink:href="#svg-star"></use>
                      </svg>
                    </div>
                    <!-- /RATING ORNAMENT ITEM -->
                  
                      <!-- RATING ORNAMENT ITEM -->
                    <div class="rating-ornament-item">
                      <!-- RATING ORNAMENT ICON -->
                      <svg class="rating-ornament-icon">
                        <use xlink:href="#svg-star"></use>
                      </svg>
                    </div>
                    <!-- /RATING ORNAMENT ITEM -->
                  
                      <!-- RATING ORNAMENT ITEM -->
                    <div class="rating-ornament-item">
                      <!-- RATING ORNAMENT ICON -->
                      <svg class="rating-ornament-icon empty">
                        <use xlink:href="#svg-star"></use>
                      </svg>
                    </div>
                    <!-- /RATING ORNAMENT ITEM -->
                  
                      <!-- RATING ORNAMENT ITEM -->
                    <div class="rating-ornament-item">
                      <!-- RATING ORNAMENT ICON -->
                      <svg class="rating-ornament-icon empty">
                        <use xlink:href="#svg-star"></use>
                      </svg>
                    </div>
                    <!-- /RATING ORNAMENT ITEM -->
                  </div>
                  <!-- /RATING ORNAMENT -->
                </div>
              </a>
              <!-- /POST PREVIEW IMG WRAP -->
  
              <!-- TAG ORNAMENT -->
              <a href="news-v3.html" class="tag-ornament">Movie news</a>
              <!-- /TAG ORNAMENT -->
  
              <!-- POST PREVIEW TITLE -->
              <a href="post-v3.html" class="post-preview-title">We reviewed the "Guardians of the Universe" movie</a>
              <!-- POST AUTHOR INFO -->
              <div class="post-author-info-wrap">
                <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Faye V.</a><span class="separator">|</span>December 15th, 2018</p>
              </div>
              <!-- /POST AUTHOR INFO -->
              <!-- POST PREVIEW TEXT -->
              <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur bere adipisicing elit, sed do eiusmod tempor lorem incididunt ut labore et dolore magna.</p>
            </div>
            <!-- /POST PREVIEW -->
          </div>
          <!-- /POST PREVIEW SHOWCASE -->
        </div>
        <!-- /WIDGET NEWS -->

       

       
      </div>
      <!-- /LAYOUT ITEM -->

    

    </div>
    <!-- /LAYOUT BODY -->

    <!-- LAYOUT SIDEBAR -->
    <div class="layout-sidebar layout-item gutter-medium">
      <!-- WIDGET SIDEBAR -->
      <div class="widget-sidebar">
        <!-- SECTION TITLE WRAP -->
        <div class="section-title-wrap blue">
          <h2 class="section-title medium">Popular Posts</h2>
          <div class="section-title-separator"></div>
        </div>
        <!-- /SECTION TITLE WRAP -->

        <!-- POST PREVIEW SHOWCASE -->
        <div class="post-preview-showcase grid-1col centered gutter-small">
          <!-- POST PREVIEW -->
          <div class="post-preview tiny gaming-news">
            <!-- POST PREVIEW IMG WRAP -->
            <a href="post-v1.html">
              <div class="post-preview-img-wrap">
                <!-- POST PREVIEW IMG -->
                <figure class="post-preview-img liquid">
                  <img src="{{asset('img/'.$thumb_url)}}">
                </figure>
                <!-- /POST PREVIEW IMG -->
              </div>
            </a>
            <!-- /POST PREVIEW IMG WRAP -->
    
            <!-- POST PREVIEW TITLE -->
            <a href="post-v1.html" class="post-preview-title">{{$title}}</a>
            <!-- POST AUTHOR INFO -->
            <div class="post-author-info-wrap">
              <p class="post-author-info small light">By <a href="search-results.html" class="post-author">{{$author_name}}</a><span class="separator">|</span>{{$created_at}}</p>
            </div>
            <!-- /POST AUTHOR INFO -->
          </div>
          <!-- /POST PREVIEW -->
           <!-- POST PREVIEW -->
          <div class="post-preview tiny gaming-news">
            <!-- POST PREVIEW IMG WRAP -->
            <a href="post-v1.html">
              <div class="post-preview-img-wrap">
                <!-- POST PREVIEW IMG -->
                <figure class="post-preview-img liquid">
                  <img src="{{asset('img/'.$thumb_url)}}">
                </figure>
                <!-- /POST PREVIEW IMG -->
              </div>
            </a>
            <!-- /POST PREVIEW IMG WRAP -->
    
            <!-- POST PREVIEW TITLE -->
            <a href="post-v1.html" class="post-preview-title">{{$title}}</a>
            <!-- POST AUTHOR INFO -->
            <div class="post-author-info-wrap">
              <p class="post-author-info small light">By <a href="search-results.html" class="post-author">{{$author_name}}</a><span class="separator">|</span>{{$created_at}}</p>
            </div>
            <!-- /POST AUTHOR INFO -->
          </div>
          <!-- /POST PREVIEW -->
           <!-- POST PREVIEW -->
          <div class="post-preview tiny gaming-news">
            <!-- POST PREVIEW IMG WRAP -->
            <a href="post-v1.html">
              <div class="post-preview-img-wrap">
                <!-- POST PREVIEW IMG -->
                <figure class="post-preview-img liquid">
                  <img src="{{asset('img/'.$thumb_url)}}">
                </figure>
                <!-- /POST PREVIEW IMG -->
              </div>
            </a>
            <!-- /POST PREVIEW IMG WRAP -->
    
            <!-- POST PREVIEW TITLE -->
            <a href="post-v1.html" class="post-preview-title">{{$title}}</a>
            <!-- POST AUTHOR INFO -->
            <div class="post-author-info-wrap">
              <p class="post-author-info small light">By <a href="search-results.html" class="post-author">{{$author_name}}</a><span class="separator">|</span>{{$created_at}}</p>
            </div>
            <!-- /POST AUTHOR INFO -->
          </div>
          <!-- /POST PREVIEW -->
          
        </div>
        <!-- /POST PREVIEW SHOWCASE -->
      </div>
      <!-- /WIDGET SIDEBAR -->

      <!-- WIDGET SIDEBAR -->
      <div class="widget-sidebar">
        <!-- SECTION TITLE WRAP -->
        <div class="section-title-wrap red">
          <h2 class="section-title medium">Latest Posts</h2>
          <div class="section-title-separator"></div>
        </div>
        <!-- /SECTION TITLE WRAP -->

        <!-- POST PREVIEW SHOWCASE -->
        <div class="post-preview-showcase grid-1col centered gutter-small">
           <!-- POST PREVIEW -->
          <div class="post-preview tiny gaming-news">
            <!-- POST PREVIEW IMG WRAP -->
            <a href="post-v1.html">
              <div class="post-preview-img-wrap">
                <!-- POST PREVIEW IMG -->
                <figure class="post-preview-img liquid">
                  <img src="{{asset('img/'.$thumb_url)}}">
                </figure>
                <!-- /POST PREVIEW IMG -->
              </div>
            </a>
            <!-- /POST PREVIEW IMG WRAP -->
    
            <!-- POST PREVIEW TITLE -->
            <a href="post-v1.html" class="post-preview-title">{{$title}}</a>
            <!-- POST AUTHOR INFO -->
            <div class="post-author-info-wrap">
              <p class="post-author-info small light">By <a href="search-results.html" class="post-author">{{$author_name}}</a><span class="separator">|</span>{{$created_at}}</p>
            </div>
            <!-- /POST AUTHOR INFO -->
          </div>
          <!-- /POST PREVIEW --> <!-- POST PREVIEW -->
          <div class="post-preview tiny gaming-news">
            <!-- POST PREVIEW IMG WRAP -->
            <a href="post-v1.html">
              <div class="post-preview-img-wrap">
                <!-- POST PREVIEW IMG -->
                <figure class="post-preview-img liquid">
                  <img src="{{asset('img/'.$thumb_url)}}">
                </figure>
                <!-- /POST PREVIEW IMG -->
              </div>
            </a>
            <!-- /POST PREVIEW IMG WRAP -->
    
            <!-- POST PREVIEW TITLE -->
            <a href="post-v1.html" class="post-preview-title">{{$title}}</a>
            <!-- POST AUTHOR INFO -->
            <div class="post-author-info-wrap">
              <p class="post-author-info small light">By <a href="search-results.html" class="post-author">{{$author_name}}</a><span class="separator">|</span>{{$created_at}}</p>
            </div>
            <!-- /POST AUTHOR INFO -->
          </div>
          <!-- /POST PREVIEW --> <!-- POST PREVIEW -->
          <div class="post-preview tiny gaming-news">
            <!-- POST PREVIEW IMG WRAP -->
            <a href="post-v1.html">
              <div class="post-preview-img-wrap">
                <!-- POST PREVIEW IMG -->
                <figure class="post-preview-img liquid">
                  <img src="{{asset('img/'.$thumb_url)}}">
                </figure>
                <!-- /POST PREVIEW IMG -->
              </div>
            </a>
            <!-- /POST PREVIEW IMG WRAP -->
    
            <!-- POST PREVIEW TITLE -->
            <a href="post-v1.html" class="post-preview-title">{{$title}}</a>
            <!-- POST AUTHOR INFO -->
            <div class="post-author-info-wrap">
              <p class="post-author-info small light">By <a href="search-results.html" class="post-author">{{$author_name}}</a><span class="separator">|</span>{{$created_at}}</p>
            </div>
            <!-- /POST AUTHOR INFO -->
          </div>
          <!-- /POST PREVIEW -->
        </div>
        <!-- /POST PREVIEW SHOWCASE -->
      </div>
      <!-- /WIDGET SIDEBAR -->

      <!-- WIDGET SIDEBAR -->
      <div class="widget-sidebar">
        <!-- PROMO ADVERT -->
        <div class="promo-advert">
          <a href="#">
            <!-- PROMO ADVERT IMG -->
            <img class="promo-advert-img" src="https://upload.wikimedia.org/wikipedia/commons/2/2a/New_Logo_AD.jpg" alt="promo-ad-1">
            <!-- /PROMO ADVERT IMG -->
          </a>
        </div>
        <!-- /PROMO ADVERT -->
      </div>
      <!-- /WIDGET SIDEBAR -->

      <!-- WIDGET SIDEBAR -->
      <div class="widget-sidebar">
        <!-- SECTION TITLE WRAP -->
        <div class="section-title-wrap cyan">
          <h2 class="section-title medium">Featured Video</h2>
          <div class="section-title-separator"></div>
        </div>
        <!-- /SECTION TITLE WRAP -->

        <!-- POST PREVIEW SHOWCASE -->
        <div class="post-preview-showcase grid-1col centered">
          <!-- POST PREVIEW -->
          <div class="post-preview video">
            <!-- POST PREVIEW IMG WRAP -->
            <a href="post-video.html">
              <div class="post-preview-img-wrap">
                <!-- POST PREVIEW IMG -->
                <figure class="post-preview-img liquid">
                  <img src="img/posts/03.jpg" alt="post-03">
                </figure>
                <!-- /POST PREVIEW IMG -->
      
                <!-- POST PREVIEW OVERLAY -->
                <div class="post-preview-overlay">
                  <!-- PLAY BUTTON -->
                  <div class="play-button">
                    <!-- PLAY BUTTON ICON -->
                    <svg class="play-button-icon">
                      <use xlink:href="#svg-play"></use>
                    </svg>
                    <!-- /PLAY BUTTON ICON -->
                  </div>
                  <!-- /PLAY BUTTON -->
      
                  <!-- POST PREVIEW OVERLAY INFO -->
                  <div class="post-preview-overlay-info">
                    <!-- POST PREVIEW TITLE -->
                    <p class="post-preview-title">"The Sandbenders II" break the bad sequel spell with a...</p>
                    <!-- POST PREVIEW TEXT -->
                    <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                  </div>
                  <!-- /POST PREVIEW OVERLAY INFO -->
                </div>
                <!-- /POST PREVIEW OVERLAY -->
              </div>
            </a>
            <!-- /POST PREVIEW IMG WRAP -->
          </div>
          <!-- /POST PREVIEW -->
        </div>
        <!-- /POST PREVIEW SHOWCASE -->
      </div>
      <!-- /WIDGET SIDEBAR -->


    
      <!-- /WIDGET SIDEBAR -->
    </div>
    <!-- /LAYOUT SIDEBAR -->
  </div>
  <!-- /LAYOUT CONTENT 1 -->

  <!-- FOOTER TOP WRAP -->
  <div class="footer-top-wrap">
    <!-- FOOTER TOP -->
    <div class="footer-top grid-limit">
      <!-- FOOTER TOP BRAND -->
      <div class="footer-top-brand">
        <!-- LOGO -->
        <div class="logo negative">
          <!-- LOGO IMG -->
          <figure class="logo-img">
            <img src="img/brand/logo.png" alt="Logo">
          </figure>
          <!-- /LOGO IMG -->

          <!-- LOGO TEXT -->
          <div class="logo-text">
            <h2 class="logo-title">Pixel<span class="highlight">Diamond</span></h2>
            <p class="logo-info">The Latest Gaming News</p>
          </div>
          <!-- /LOGO TEXT -->
        </div>
        <!-- /LOGO -->

        <!-- SPONSORS SLIDER WRAP -->
        <div class="sponsors-slider-wrap">
          <!-- SPONSORS SLIDER CONTROLS -->
          <div id="footer-sponsor-slider-controls" class="sponsors-slider-controls">
            <div class="sponsors-slider-control control-previous">
              <!-- ARROW ICON -->
              <svg class="arrow-icon medium">
                <use xlink:href="#svg-arrow-medium"></use>
              </svg>
              <!-- /ARROW ICON -->
            </div>
            <div class="sponsors-slider-control control-next">
              <!-- ARROW ICON -->
              <svg class="arrow-icon medium">
                <use xlink:href="#svg-arrow-medium"></use>
              </svg>
              <!-- /ARROW ICON -->
            </div>
          </div>
          <!-- /SPONSORS SLIDER CONTROLS -->

          <!-- SPONSORS SLIDER -->
          <div id="footer-sponsor-slider" class="sponsors-slider">
            <!-- SPONSORS SLIDER ITEMS -->
            <div class="sponsors-slider-items">
              <!-- SPONSORS SLIDER ITEM -->
              <div class="sponsors-slider-item">
                <img class="sponsor-img" src="img/sponsors/sponsor01.png" alt="sponsor01">
              </div>
              <!-- /SPONSORS SLIDER ITEM -->

              <!-- SPONSORS SLIDER ITEM -->
              <div class="sponsors-slider-item">
                <img class="sponsor-img" src="img/sponsors/sponsor02.png" alt="sponsor02">
              </div>
              <!-- /SPONSORS SLIDER ITEM -->

              <!-- SPONSORS SLIDER ITEM -->
              <div class="sponsors-slider-item">
                <img class="sponsor-img" src="img/sponsors/sponsor03.png" alt="sponsor03">
              </div>
              <!-- /SPONSORS SLIDER ITEM -->

              <!-- SPONSORS SLIDER ITEM -->
              <div class="sponsors-slider-item">
                <img class="sponsor-img" src="img/sponsors/sponsor04.png" alt="sponsor04">
              </div>
              <!-- /SPONSORS SLIDER ITEM -->

              <!-- SPONSORS SLIDER ITEM -->
              <div class="sponsors-slider-item">
                <img class="sponsor-img" src="img/sponsors/sponsor05.png" alt="sponsor05">
              </div>
              <!-- /SPONSORS SLIDER ITEM -->

              <!-- SPONSORS SLIDER ITEM -->
              <div class="sponsors-slider-item">
                <img class="sponsor-img" src="img/sponsors/sponsor06.png" alt="sponsor06">
              </div>
              <!-- /SPONSORS SLIDER ITEM -->
            </div>
            <!-- /SPONSORS SLIDER ITEMS -->
          </div>
          <!-- /SPONSORS SLIDER -->
        </div>
        <!-- /SPONSORS SLIDER WRAP -->

        <!-- SOCIAL LINKS -->
        <div class="social-links">
          <!-- BUBBLE ORNAMENT -->
          <a href="#" class="bubble-ornament fb">
            <!-- FACEBOOK ICON -->
            <svg class="facebook-icon">
              <use xlink:href="#svg-facebook"></use>
            </svg>
            <!-- /FACEBOOK ICON -->
          </a>
          <!-- /BUBBLE ORNAMENT -->

          <!-- BUBBLE ORNAMENT -->
          <a href="#" class="bubble-ornament twt">
            <!-- TWITTER ICON -->
            <svg class="twitter-icon">
              <use xlink:href="#svg-twitter"></use>
            </svg>
            <!-- /TWITTER ICON -->
          </a>
          <!-- /BUBBLE ORNAMENT -->

          <!-- BUBBLE ORNAMENT -->
          <a href="#" class="bubble-ornament insta">
            <!-- INSTAGRAM ICON -->
            <svg class="instagram-icon">
              <use xlink:href="#svg-instagram"></use>
            </svg>
            <!-- /INSTAGRAM ICON -->
          </a>
          <!-- /BUBBLE ORNAMENT -->

          <!-- BUBBLE ORNAMENT -->
          <a href="#" class="bubble-ornament twitch">
            <!-- TWITCH ICON -->
            <svg class="twitch-icon">
              <use xlink:href="#svg-twitch"></use>
            </svg>
            <!-- /TWITCH ICON -->
          </a>
          <!-- /BUBBLE ORNAMENT -->

          <!-- BUBBLE ORNAMENT -->
          <a href="#" class="bubble-ornament gplus">
            <!-- GPLUS ICON -->
            <svg class="gplus-icon">
              <use xlink:href="#svg-gplus"></use>
            </svg>
            <!-- /GPLUS ICON -->
          </a>
          <!-- /BUBBLE ORNAMENT -->

          <!-- BUBBLE ORNAMENT -->
          <a href="#" class="bubble-ornament youtube">
            <!-- YOUTUBE ICON -->
            <svg class="youtube-icon">
              <use xlink:href="#svg-youtube"></use>
            </svg>
            <!-- /YOUTUBE ICON -->
          </a>
          <!-- /BUBBLE ORNAMENT -->
        </div>
        <!-- /SOCIAL LINKS -->
      </div>
      <!-- /FOOTER TOP BRAND -->

      <!-- LINE SEPARATOR -->
      <div class="line-separator negative"></div>

      <!-- FOOTER TOP WIDGETS -->
      <div class="footer-top-widgets grid-4col centered gutter-big">
        <!-- FOOTER TOP WIDGET -->
        <div class="footer-top-widget">
          <!-- SECTION TITLE WRAP -->
          <div class="section-title-wrap blue negative">
            <h2 class="section-title">Pixel Diamond</h2>
            <div class="section-title-separator"></div>
          </div>
          <!-- /SECTION TITLE WRAP -->

          <!-- LINK SECTION -->
          <div class="link-section">
            <!-- LINK LIST -->
            <ul class="link-list small v2 negative">
              <!-- LINK LIST ITEM -->
              <li class="link-list-item">
                <a href="index.html">
                  <!-- ARROW ICON -->
                  <svg class="arrow-icon medium">
                    <use xlink:href="#svg-arrow-medium"></use>
                  </svg>
                  <!-- /ARROW ICON -->
                  Home
                </a>
              </li>
              <!-- /LINK LIST ITEM -->

              <!-- LINK LIST ITEM -->
              <li class="link-list-item">
                <a href="home-v2.html">
                  <!-- ARROW ICON -->
                  <svg class="arrow-icon medium">
                    <use xlink:href="#svg-arrow-medium"></use>
                  </svg>
                  <!-- /ARROW ICON -->
                  Home V2
                </a>
              </li>
              <!-- /LINK LIST ITEM -->

              <!-- LINK LIST ITEM -->
              <li class="link-list-item">
                <a href="home-v3.html">
                  <!-- ARROW ICON -->
                  <svg class="arrow-icon medium">
                    <use xlink:href="#svg-arrow-medium"></use>
                  </svg>
                  <!-- /ARROW ICON -->
                  Home V3
                </a>
              </li>
              <!-- /LINK LIST ITEM -->

              <!-- LINK LIST ITEM -->
              <li class="link-list-item">
                <a href="news-v1.html">
                  <!-- ARROW ICON -->
                  <svg class="arrow-icon medium">
                    <use xlink:href="#svg-arrow-medium"></use>
                  </svg>
                  <!-- /ARROW ICON -->
                  News V1
                </a>
              </li>
              <!-- /LINK LIST ITEM -->

              <!-- LINK LIST ITEM -->
              <li class="link-list-item">
                <a href="news-v2.html">
                  <!-- ARROW ICON -->
                  <svg class="arrow-icon medium">
                    <use xlink:href="#svg-arrow-medium"></use>
                  </svg>
                  <!-- /ARROW ICON -->
                  News V2
                </a>
              </li>
              <!-- /LINK LIST ITEM -->

              <!-- LINK LIST ITEM -->
              <li class="link-list-item">
                <a href="news-v3.html">
                  <!-- ARROW ICON -->
                  <svg class="arrow-icon medium">
                    <use xlink:href="#svg-arrow-medium"></use>
                  </svg>
                  <!-- /ARROW ICON -->
                  News V3
                </a>
              </li>
              <!-- /LINK LIST ITEM -->

              <!-- LINK LIST ITEM -->
              <li class="link-list-item">
                <a href="news-v4.html">
                  <!-- ARROW ICON -->
                  <svg class="arrow-icon medium">
                    <use xlink:href="#svg-arrow-medium"></use>
                  </svg>
                  <!-- /ARROW ICON -->
                  News V4
                </a>
              </li>
              <!-- /LINK LIST ITEM -->

              <!-- LINK LIST ITEM -->
              <li class="link-list-item">
                <a href="post-v1.html">
                  <!-- ARROW ICON -->
                  <svg class="arrow-icon medium">
                    <use xlink:href="#svg-arrow-medium"></use>
                  </svg>
                  <!-- /ARROW ICON -->
                  Post Page V1
                </a>
              </li>
              <!-- /LINK LIST ITEM -->

              <!-- LINK LIST ITEM -->
              <li class="link-list-item">
                <a href="post-v2.html">
                  <!-- ARROW ICON -->
                  <svg class="arrow-icon medium">
                    <use xlink:href="#svg-arrow-medium"></use>
                  </svg>
                  <!-- /ARROW ICON -->
                  Post Page V2
                </a>
              </li>
              <!-- /LINK LIST ITEM -->
            </ul>
            <!-- /LINK LIST -->

            <!-- LINK LIST -->
            <ul class="link-list small v2 negative">
              <!-- LINK LIST ITEM -->
              <li class="link-list-item">
                <a href="post-v3.html">
                  <!-- ARROW ICON -->
                  <svg class="arrow-icon medium">
                    <use xlink:href="#svg-arrow-medium"></use>
                  </svg>
                  <!-- /ARROW ICON -->
                  Post Page V3
                </a>
              </li>
              <!-- /LINK LIST ITEM -->

              <!-- LINK LIST ITEM -->
              <li class="link-list-item">
                <a href="post-v4.html">
                  <!-- ARROW ICON -->
                  <svg class="arrow-icon medium">
                    <use xlink:href="#svg-arrow-medium"></use>
                  </svg>
                  <!-- /ARROW ICON -->
                  Post Page V4
                </a>
              </li>
              <!-- /LINK LIST ITEM -->

              <!-- LINK LIST ITEM -->
              <li class="link-list-item">
                <a href="forum.html">
                  <!-- ARROW ICON -->
                  <svg class="arrow-icon medium">
                    <use xlink:href="#svg-arrow-medium"></use>
                  </svg>
                  <!-- /ARROW ICON -->
                  Forums
                </a>
              </li>
              <!-- /LINK LIST ITEM -->

              <!-- LINK LIST ITEM -->
              <li class="link-list-item">
                <a href="shop-v1-grid.html">
                  <!-- ARROW ICON -->
                  <svg class="arrow-icon medium">
                    <use xlink:href="#svg-arrow-medium"></use>
                  </svg>
                  <!-- /ARROW ICON -->
                  Shop Page V1
                </a>
              </li>
              <!-- /LINK LIST ITEM -->

              <!-- LINK LIST ITEM -->
              <li class="link-list-item">
                <a href="shop-v2.html">
                  <!-- ARROW ICON -->
                  <svg class="arrow-icon medium">
                    <use xlink:href="#svg-arrow-medium"></use>
                  </svg>
                  <!-- /ARROW ICON -->
                  Shop Page V2
                </a>
              </li>
              <!-- /LINK LIST ITEM -->

              <!-- LINK LIST ITEM -->
              <li class="link-list-item">
                <a href="product-page.html">
                  <!-- ARROW ICON -->
                  <svg class="arrow-icon medium">
                    <use xlink:href="#svg-arrow-medium"></use>
                  </svg>
                  <!-- /ARROW ICON -->
                  Shop Product
                </a>
              </li>
              <!-- /LINK LIST ITEM -->

              <!-- LINK LIST ITEM -->
              <li class="link-list-item">
                <a href="esports-streamers.html">
                  <!-- ARROW ICON -->
                  <svg class="arrow-icon medium">
                    <use xlink:href="#svg-arrow-medium"></use>
                  </svg>
                  <!-- /ARROW ICON -->
                  Streamers
                </a>
              </li>
              <!-- /LINK LIST ITEM -->

              <!-- LINK LIST ITEM -->
              <li class="link-list-item">
                <a href="esports-home.html">
                  <!-- ARROW ICON -->
                  <svg class="arrow-icon medium">
                    <use xlink:href="#svg-arrow-medium"></use>
                  </svg>
                  <!-- /ARROW ICON -->
                  eSports
                </a>
              </li>
              <!-- /LINK LIST ITEM -->

              <!-- LINK LIST ITEM -->
              <li class="link-list-item">
                <a href="esports-widgets-v1.html">
                  <!-- ARROW ICON -->
                  <svg class="arrow-icon medium">
                    <use xlink:href="#svg-arrow-medium"></use>
                  </svg>
                  <!-- /ARROW ICON -->
                  Widgets
                </a>
              </li>
              <!-- /LINK LIST ITEM -->
            </ul>
            <!-- /LINK LIST -->
          </div>
          <!-- /LINK SECTION -->
        </div>
        <!-- FOOTER TOP WIDGET -->

        <!-- FOOTER TOP WIDGET -->
        <div class="footer-top-widget">
          <!-- SECTION TITLE WRAP -->
          <div class="section-title-wrap red negative">
            <h2 class="section-title">Latest Reviews</h2>
            <div class="section-title-separator"></div>
          </div>
          <!-- /SECTION TITLE WRAP -->

          <!-- POST PREVIEW SHOWCASE -->
          <div class="post-preview-showcase grid-1col gutter-small">
            <!-- POST PREVIEW -->
            <div class="post-preview tiny negative game-review">
              <!-- POST PREVIEW IMG WRAP -->
              <a href="post-v2.html">
                <div class="post-preview-img-wrap">
                  <!-- POST PREVIEW IMG -->
                  <figure class="post-preview-img liquid">
                    <img src="img/posts/16.jpg" alt="post-16">
                  </figure>
                  <!-- /POST PREVIEW IMG -->

                  <!-- REVIEW RATING -->
                  <div class="review-rating">
                    <div id="footer-rate-1" class="arc tiny"></div>
                  </div>
                  <!-- /REVIEW RATING -->
                </div>
              </a>
              <!-- /POST PREVIEW IMG WRAP -->

              <!-- POST PREVIEW TITLE -->
              <a href="post-v2.html" class="post-preview-title">We reviewed the new Magimons game</a>
              <!-- POST AUTHOR INFO -->
              <div class="post-author-info-wrap">
                <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Vellatrix</a><span class="separator">|</span>Dec 15th, 2018</p>
              </div>
              <!-- /POST AUTHOR INFO -->
            </div>
            <!-- /POST PREVIEW -->

            <!-- POST PREVIEW -->
            <div class="post-preview tiny negative game-review">
              <!-- POST PREVIEW IMG WRAP -->
              <a href="post-v2.html">
                <div class="post-preview-img-wrap">
                  <!-- POST PREVIEW IMG -->
                  <figure class="post-preview-img liquid">
                    <img src="img/posts/25.jpg" alt="post-25">
                  </figure>
                  <!-- /POST PREVIEW IMG -->

                  <!-- REVIEW RATING -->
                  <div class="review-rating">
                    <div id="footer-rate-2" class="arc tiny"></div>
                  </div>
                  <!-- /REVIEW RATING -->
                </div>
              </a>
              <!-- /POST PREVIEW IMG WRAP -->

              <!-- POST PREVIEW TITLE -->
              <a href="post-v2.html" class="post-preview-title">"Legend of Kenshii II" is a bit green for now</a>
              <!-- POST AUTHOR INFO -->
              <div class="post-author-info-wrap">
                <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Vellatrix</a><span class="separator">|</span>Dec 15th, 2018</p>
              </div>
              <!-- /POST AUTHOR INFO -->
            </div>
            <!-- /POST PREVIEW -->

            <!-- POST PREVIEW -->
            <div class="post-preview tiny negative game-review">
              <!-- POST PREVIEW IMG WRAP -->
              <a href="post-v2.html">
                <div class="post-preview-img-wrap">
                  <!-- POST PREVIEW IMG -->
                  <figure class="post-preview-img liquid">
                    <img src="img/posts/05.jpg" alt="post-05">
                  </figure>
                  <!-- /POST PREVIEW IMG -->

                  <!-- REVIEW RATING -->
                  <div class="review-rating">
                    <div id="footer-rate-3" class="arc tiny"></div>
                  </div>
                  <!-- /REVIEW RATING -->
                </div>
              </a>
              <!-- /POST PREVIEW IMG WRAP -->

              <!-- POST PREVIEW TITLE -->
              <a href="post-v2.html" class="post-preview-title">We reviewed the new and exciting fantasy game "Olympus"</a>
              <!-- POST AUTHOR INFO -->
              <div class="post-author-info-wrap">
                <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Morgana</a><span class="separator">|</span>Dec 15th, 2018</p>
              </div>
              <!-- /POST AUTHOR INFO -->
            </div>
            <!-- /POST PREVIEW -->
          </div>
          <!-- /POST PREVIEW SHOWCASE -->
        </div>
        <!-- FOOTER TOP WIDGET -->

        <!-- FOOTER TOP WIDGET -->
        <div class="footer-top-widget">
          <!-- SECTION TITLE WRAP -->
          <div class="section-title-wrap blue negative">
            <h2 class="section-title">Latest Posts</h2>
            <div class="section-title-separator"></div>
          </div>
          <!-- /SECTION TITLE WRAP -->

          <!-- POST PREVIEW SHOWCASE -->
          <div class="post-preview-showcase grid-1col gutter-small">
            <!-- POST PREVIEW -->
            <div class="post-preview tiny negative gaming-news">
              <!-- POST PREVIEW IMG WRAP -->
              <a href="post-v1.html">
                <div class="post-preview-img-wrap">
                  <!-- POST PREVIEW IMG -->
                  <figure class="post-preview-img liquid">
                    <img src="img/posts/17.jpg" alt="post-17">
                  </figure>
                  <!-- /POST PREVIEW IMG -->
                </div>
              </a>
              <!-- /POST PREVIEW IMG WRAP -->
      
              <!-- POST PREVIEW TITLE -->
              <a href="post-v1.html" class="post-preview-title">Jazzstar announced that the GTE5 for PC is delayed</a>
              <!-- POST AUTHOR INFO -->
              <div class="post-author-info-wrap">
                <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Dexter</a><span class="separator">|</span>Dec 15th, 2018</p>
              </div>
              <!-- /POST AUTHOR INFO -->
            </div>
            <!-- /POST PREVIEW -->

            <!-- POST PREVIEW -->
            <div class="post-preview tiny negative geeky-news">
              <!-- POST PREVIEW IMG WRAP -->
              <a href="post-v4.html">
                <div class="post-preview-img-wrap">
                  <!-- POST PREVIEW IMG -->
                  <figure class="post-preview-img liquid">
                    <img src="img/posts/02.jpg" alt="post-02">
                  </figure>
                  <!-- /POST PREVIEW IMG -->
                </div>
              </a>
              <!-- /POST PREVIEW IMG WRAP -->
      
              <!-- POST PREVIEW TITLE -->
              <a href="post-v4.html" class="post-preview-title">Jessica Tam to star in the new "Charlotte" series</a>
              <!-- POST AUTHOR INFO -->
              <div class="post-author-info-wrap">
                <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Vellatrix</a><span class="separator">|</span>Dec 15th, 2018</p>
              </div>
              <!-- /POST AUTHOR INFO -->
            </div>
            <!-- /POST PREVIEW -->

            <!-- POST PREVIEW -->
            <div class="post-preview tiny negative gaming-news">
              <!-- POST PREVIEW IMG WRAP -->
              <a href="post-v1.html">
                <div class="post-preview-img-wrap">
                  <!-- POST PREVIEW IMG -->
                  <figure class="post-preview-img liquid">
                    <img src="img/posts/09.jpg" alt="post-09">
                  </figure>
                  <!-- /POST PREVIEW IMG -->
                </div>
              </a>
              <!-- /POST PREVIEW IMG WRAP -->
      
              <!-- POST PREVIEW TITLE -->
              <a href="post-v1.html" class="post-preview-title">New "Rizen" game is gonna be released in summer 2019</a>
              <!-- POST AUTHOR INFO -->
              <div class="post-author-info-wrap">
                <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Dexter</a><span class="separator">|</span>Dec 15th, 2018</p>
              </div>
              <!-- /POST AUTHOR INFO -->
            </div>
            <!-- /POST PREVIEW -->
          </div>
          <!-- POST PREVIEW SHOWCASE -->
        </div>
        <!-- FOOTER TOP WIDGET -->

        <!-- FOOTER TOP WIDGET -->
        <div class="footer-top-widget">
          <!-- SECTION TITLE WRAP -->
          <div class="section-title-wrap blue negative">
            <h2 class="section-title">Popular Posts</h2>
            <div class="section-title-separator"></div>
          </div>
          <!-- /SECTION TITLE WRAP -->

          <!-- POST PREVIEW SHOWCASE -->
          <div class="post-preview-showcase grid-1col gutter-small">
            <!-- POST PREVIEW -->
            <div class="post-preview tiny negative gaming-news">
              <!-- POST PREVIEW IMG WRAP -->
              <a href="post-v1.html">
                <div class="post-preview-img-wrap">
                  <!-- POST PREVIEW IMG -->
                  <figure class="post-preview-img liquid">
                    <img src="img/posts/01.jpg" alt="post-01">
                  </figure>
                  <!-- /POST PREVIEW IMG -->
                </div>
              </a>
              <!-- /POST PREVIEW IMG WRAP -->
      
              <!-- POST PREVIEW TITLE -->
              <a href="post-v1.html" class="post-preview-title">The Clash of Dragons is breaking record sales in USA and Japan</a>
              <!-- POST AUTHOR INFO -->
              <div class="post-author-info-wrap">
                <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Dexter</a><span class="separator">|</span>Dec 15th, 2018</p>
              </div>
              <!-- /POST AUTHOR INFO -->
            </div>
            <!-- /POST PREVIEW -->

            <!-- POST PREVIEW -->
            <div class="post-preview tiny negative game-review">
              <!-- POST PREVIEW IMG WRAP -->
              <a href="post-v2.html">
                <div class="post-preview-img-wrap">
                  <!-- POST PREVIEW IMG -->
                  <figure class="post-preview-img liquid">
                    <img src="img/posts/25.jpg" alt="post-25">
                  </figure>
                  <!-- /POST PREVIEW IMG -->

                  <!-- REVIEW RATING -->
                  <div class="review-rating">
                    <div id="footer-rate-4" class="arc tiny"></div>
                  </div>
                  <!-- /REVIEW RATING -->
                </div>
              </a>
              <!-- /POST PREVIEW IMG WRAP -->

              <!-- POST PREVIEW TITLE -->
              <a href="post-v2.html" class="post-preview-title">"Legend of Kenshii II" is a bit green for now</a>
              <!-- POST AUTHOR INFO -->
              <div class="post-author-info-wrap">
                <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Vellatrix</a><span class="separator">|</span>Dec 15th, 2018</p>
              </div>
              <!-- /POST AUTHOR INFO -->
            </div>
            <!-- /POST PREVIEW -->

            <!-- POST PREVIEW -->
            <div class="post-preview tiny negative movie-news">
              <!-- POST PREVIEW IMG WRAP -->
              <a href="post-v3.html">
                <div class="post-preview-img-wrap">
                  <!-- POST PREVIEW IMG -->
                  <figure class="post-preview-img liquid">
                    <img src="img/posts/12.jpg" alt="post-12">
                  </figure>
                  <!-- /POST PREVIEW IMG -->
        
                  <!-- RATING ORNAMENT -->
                  <div class="rating-ornament">
                    <!-- RATING ORNAMENT ITEM -->
                    <div class="rating-ornament-item">
                      <!-- RATING ORNAMENT ICON -->
                      <svg class="rating-ornament-icon">
                        <use xlink:href="#svg-star"></use>
                      </svg>
                    </div>
                    <!-- /RATING ORNAMENT ITEM -->
                  
                    <!-- RATING ORNAMENT ITEM -->
                    <div class="rating-ornament-item">
                      <!-- RATING ORNAMENT ICON -->
                      <svg class="rating-ornament-icon">
                        <use xlink:href="#svg-star"></use>
                      </svg>
                    </div>
                    <!-- /RATING ORNAMENT ITEM -->
                  
                      <!-- RATING ORNAMENT ITEM -->
                    <div class="rating-ornament-item">
                      <!-- RATING ORNAMENT ICON -->
                      <svg class="rating-ornament-icon">
                        <use xlink:href="#svg-star"></use>
                      </svg>
                    </div>
                    <!-- /RATING ORNAMENT ITEM -->
                  
                      <!-- RATING ORNAMENT ITEM -->
                    <div class="rating-ornament-item">
                      <!-- RATING ORNAMENT ICON -->
                      <svg class="rating-ornament-icon empty">
                        <use xlink:href="#svg-star"></use>
                      </svg>
                    </div>
                    <!-- /RATING ORNAMENT ITEM -->
                  
                      <!-- RATING ORNAMENT ITEM -->
                    <div class="rating-ornament-item">
                      <!-- RATING ORNAMENT ICON -->
                      <svg class="rating-ornament-icon empty">
                        <use xlink:href="#svg-star"></use>
                      </svg>
                    </div>
                    <!-- /RATING ORNAMENT ITEM -->
                  </div>
                  <!-- /RATING ORNAMENT -->
                </div>
              </a>
              <!-- /POST PREVIEW IMG WRAP -->
        
              <!-- POST PREVIEW TITLE -->
              <a href="post-v3.html" class="post-preview-title">We reviewed the "Guardians of the Universe" movie</a>
              <!-- POST AUTHOR INFO -->
              <div class="post-author-info-wrap">
                <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Faye V.</a><span class="separator">|</span>Dec 15th, 2018</p>
              </div>
              <!-- /POST AUTHOR INFO -->
            </div>
            <!-- /POST PREVIEW -->
          </div>
          <!-- /POST PREVIEW SHOWCASE -->
        </div>
        <!-- FOOTER TOP WIDGET -->

        <!-- FOOTER TOP WIDGET -->
        <div class="footer-top-widget">
          <!-- SECTION TITLE WRAP -->
          <div class="section-title-wrap green negative">
            <h2 class="section-title">Contact Info</h2>
            <div class="section-title-separator"></div>
          </div>
          <!-- /SECTION TITLE WRAP -->

          <!-- CONTACT INFO PREVIEW -->
          <div class="contact-info-preview negative">
            <p class="contact-info-preview-text">Lorem ipsum dolor sit amet, consectetur dasede do eiusmod <span class="highlighted">tempor</span> unt ut labore et dolore mag lere adveniam, quis rud citation laboris.</p>
            <!-- CONTACT INFO PREVIEW SIGN -->
            <div class="contact-info-preview-sign">
              <!-- BUBBLE ORNAMENT -->
              <div class="bubble-ornament medium green">
                <i class="icon-bubbles bubbles-icon"></i>
              </div>
              <!-- /BUBBLE ORNAMENT -->
              <p class="contact-info-preview-sign-text">Subscribe to our newsletter!</p>
            </div>
            <!-- CONTACT INFO PREVIEW SIGN -->

            <!-- CONTACT INFO PREVIEW FORM -->
            <form method="GET" class="contact-info-preview-form">
              <!-- FORM ROW -->
              <div class="form-row">
                <!-- FORM ITEM -->
                <div class="form-item">
                  <!-- SUBMIT INPUT -->
                  <div class="submit-input green">
                    <input type="text" id="footer-subscribe-email" name="footer-subscribe-email" placeholder="Enter your email here...">
                    <button class="submit-input-button">
                      <!-- ARROW ICON -->
                      <svg class="arrow-icon medium">
                        <use xlink:href="#svg-arrow-medium"></use>
                      </svg>
                      <!-- /ARROW ICON -->
                    </button>
                  </div>
                  <!-- /SUBMIT INPUT -->
                </div>
                <!-- /FORM ITEM -->
              </div>
              <!-- /FORM ROW -->
            </form>
            <!-- /CONTACT INFO PREVIEW FORM -->

            <!-- CONTACT INFO PREVIEW EMAIL WRAP -->
            <div class="contact-info-preview-email-wrap">
              <i class="email-icon icon-envelope"></i>
              <a href="mailto:info@pixeldiamond.com" class="contact-info-preview-email">info@pixeldiamond.com</a>
            </div>
            <!-- CONTACT INFO PREVIEW EMAIL WRAP -->
          </div>  
          <!-- /CONTACT INFO PREVIEW -->
        </div>
        <!-- FOOTER TOP WIDGET -->

        <!-- FOOTER TOP WIDGET -->
        <div class="footer-top-widget">
          <!-- SECTION TITLE WRAP -->
          <div class="section-title-wrap blue-light negative">
            <h2 class="section-title">Twitter Widget</h2>
            <div class="section-title-separator"></div>
          </div>
          <!-- /SECTION TITLE WRAP -->

          <!-- TWEETS PREVIEW WIDGET -->
          <div class="tweets-preview-widget">
          </div>
          <!-- TWEETS PREVIEW WIDGET -->
        </div>
        <!-- FOOTER TOP WIDGET -->

        <!-- FOOTER TOP WIDGET -->
        <div class="footer-top-widget">
          <!-- SECTION TITLE WRAP -->
          <div class="section-title-wrap violet negative">
            <h2 class="section-title">Latest Products</h2>
            <div class="section-title-separator"></div>
          </div>
          <!-- /SECTION TITLE WRAP -->

          <!-- PRODUCT PREVIEW SHOWCASE -->
          <div class="product-preview-showcase grid-1col gutter-small">
            <!-- PRODUCT PREVIEW -->
            <div class="product-preview tiny negative">
              <!-- PRODUCT PREVIEW IMG WRAP -->
              <div class="product-preview-img-wrap">
                <!-- PRODUCT PREVIEW IMG -->
                <a href="product-page.html">
                  <figure class="product-preview-img liquid">
                    <img src="img/products/01.jpg" alt="product-01">
                  </figure>
                </a>
                <!-- /PRODUCT PREVIEW IMG -->
              </div>
              <!-- /PRODUCT PREVIEW IMG WRAP -->
      
              <!-- PRODUCT PREVIEW TITLE -->
              <a href="product-page.html" class="product-preview-title">New Funtendo 3XSD - Black</a>
              <!-- PRODUCT PREVIEW INFO -->
              <div class="product-preview-info">
                <!-- PRODUCT PREVIEW CATEGORY -->
                <a href="shop-v1-grid.html" class="product-preview-category">Funtendo</a>
                <!-- RATING ORNAMENT -->
                <div class="rating-ornament small void yellow">
                  <!-- RATING ORNAMENT ITEM -->
                  <div class="rating-ornament-item">
                    <!-- RATING ORNAMENT ICON -->
                    <svg class="rating-ornament-icon">
                      <use xlink:href="#svg-star"></use>
                    </svg>
                  </div>
                  <!-- /RATING ORNAMENT ITEM -->
                
                  <!-- RATING ORNAMENT ITEM -->
                  <div class="rating-ornament-item">
                    <!-- RATING ORNAMENT ICON -->
                    <svg class="rating-ornament-icon">
                      <use xlink:href="#svg-star"></use>
                    </svg>
                  </div>
                  <!-- /RATING ORNAMENT ITEM -->
                
                    <!-- RATING ORNAMENT ITEM -->
                  <div class="rating-ornament-item">
                    <!-- RATING ORNAMENT ICON -->
                    <svg class="rating-ornament-icon">
                      <use xlink:href="#svg-star"></use>
                    </svg>
                  </div>
                  <!-- /RATING ORNAMENT ITEM -->
                
                    <!-- RATING ORNAMENT ITEM -->
                  <div class="rating-ornament-item">
                    <!-- RATING ORNAMENT ICON -->
                    <svg class="rating-ornament-icon">
                      <use xlink:href="#svg-star"></use>
                    </svg>
                  </div>
                  <!-- /RATING ORNAMENT ITEM -->
                
                    <!-- RATING ORNAMENT ITEM -->
                  <div class="rating-ornament-item">
                    <!-- RATING ORNAMENT ICON -->
                    <svg class="rating-ornament-icon empty">
                      <use xlink:href="#svg-star"></use>
                    </svg>
                  </div>
                  <!-- /RATING ORNAMENT ITEM -->
                </div>
                <!-- /RATING ORNAMENT -->
              </div>
              <!-- /PRODUCT PREVIEW INFO -->
      
              <!-- PRODUCT PRICE WRAP -->
              <div class="product-price-wrap">
                <p class="product-preview-price current"><span class="currency">$</span>199.00</p>
              </div>
              <!-- /PRODUCT PRICE WRAP -->
            </div>
            <!-- /PRODUCT PREVIEW -->
      
            <!-- PRODUCT PREVIEW -->
            <div class="product-preview tiny negative">
              <!-- PRODUCT PREVIEW IMG WRAP -->
              <div class="product-preview-img-wrap">
                <!-- PRODUCT PREVIEW IMG -->
                <a href="product-page.html">
                  <figure class="product-preview-img liquid">
                    <img src="img/products/04.jpg" alt="product-04">
                  </figure>
                </a>
                <!-- /PRODUCT PREVIEW IMG -->
              </div>
              <!-- /PRODUCT PREVIEW IMG WRAP -->
      
              <!-- PRODUCT PREVIEW TITLE -->
              <a href="product-page.html" class="product-preview-title">Mee U - kawai 8 bundle</a>
              <!-- PRODUCT PREVIEW INFO -->
              <div class="product-preview-info">
                <!-- PRODUCT PREVIEW CATEGORY -->
                <a href="shop-v1-grid.html" class="product-preview-category">Funtendo</a>
                <!-- RATING ORNAMENT -->
                <div class="rating-ornament small void yellow">
                  <!-- RATING ORNAMENT ITEM -->
                  <div class="rating-ornament-item">
                    <!-- RATING ORNAMENT ICON -->
                    <svg class="rating-ornament-icon">
                      <use xlink:href="#svg-star"></use>
                    </svg>
                  </div>
                  <!-- /RATING ORNAMENT ITEM -->
                
                  <!-- RATING ORNAMENT ITEM -->
                  <div class="rating-ornament-item">
                    <!-- RATING ORNAMENT ICON -->
                    <svg class="rating-ornament-icon">
                      <use xlink:href="#svg-star"></use>
                    </svg>
                  </div>
                  <!-- /RATING ORNAMENT ITEM -->
                
                    <!-- RATING ORNAMENT ITEM -->
                  <div class="rating-ornament-item">
                    <!-- RATING ORNAMENT ICON -->
                    <svg class="rating-ornament-icon">
                      <use xlink:href="#svg-star"></use>
                    </svg>
                  </div>
                  <!-- /RATING ORNAMENT ITEM -->
                
                    <!-- RATING ORNAMENT ITEM -->
                  <div class="rating-ornament-item">
                    <!-- RATING ORNAMENT ICON -->
                    <svg class="rating-ornament-icon empty">
                      <use xlink:href="#svg-star"></use>
                    </svg>
                  </div>
                  <!-- /RATING ORNAMENT ITEM -->
                
                    <!-- RATING ORNAMENT ITEM -->
                  <div class="rating-ornament-item">
                    <!-- RATING ORNAMENT ICON -->
                    <svg class="rating-ornament-icon empty">
                      <use xlink:href="#svg-star"></use>
                    </svg>
                  </div>
                  <!-- /RATING ORNAMENT ITEM -->
                </div>
                <!-- /RATING ORNAMENT -->
              </div>
              <!-- /PRODUCT PREVIEW INFO -->
      
              <!-- PRODUCT PRICE WRAP -->
              <div class="product-price-wrap">
                <p class="product-preview-price before"><span class="currency">$</span>310.00</p>
                <p class="product-preview-price current"><span class="currency">$</span>280.00</p>
              </div>
              <!-- /PRODUCT PRICE WRAP -->
            </div>
            <!-- /PRODUCT PREVIEW -->

            <!-- PRODUCT PREVIEW -->
            <div class="product-preview tiny negative">
              <!-- PRODUCT PREVIEW IMG WRAP -->
              <div class="product-preview-img-wrap">
                <!-- PRODUCT PREVIEW IMG -->
                <a href="product-page.html">
                  <figure class="product-preview-img liquid">
                    <img src="img/products/06.jpg" alt="product-06">
                  </figure>
                </a>
                <!-- /PRODUCT PREVIEW IMG -->
              </div>
              <!-- /PRODUCT PREVIEW IMG WRAP -->
      
              <!-- PRODUCT PREVIEW TITLE -->
              <a href="product-page.html" class="product-preview-title">Crimson red joystick</a>
              <!-- PRODUCT PREVIEW INFO -->
              <div class="product-preview-info">
                <!-- PRODUCT PREVIEW CATEGORY -->
                <a href="shop-v1-grid.html" class="product-preview-category">Powerstation</a>
                <!-- RATING ORNAMENT -->
                <div class="rating-ornament small void yellow">
                  <!-- RATING ORNAMENT ITEM -->
                  <div class="rating-ornament-item">
                    <!-- RATING ORNAMENT ICON -->
                    <svg class="rating-ornament-icon">
                      <use xlink:href="#svg-star"></use>
                    </svg>
                  </div>
                  <!-- /RATING ORNAMENT ITEM -->
                
                  <!-- RATING ORNAMENT ITEM -->
                  <div class="rating-ornament-item">
                    <!-- RATING ORNAMENT ICON -->
                    <svg class="rating-ornament-icon">
                      <use xlink:href="#svg-star"></use>
                    </svg>
                  </div>
                  <!-- /RATING ORNAMENT ITEM -->
                
                    <!-- RATING ORNAMENT ITEM -->
                  <div class="rating-ornament-item">
                    <!-- RATING ORNAMENT ICON -->
                    <svg class="rating-ornament-icon">
                      <use xlink:href="#svg-star"></use>
                    </svg>
                  </div>
                  <!-- /RATING ORNAMENT ITEM -->
                
                    <!-- RATING ORNAMENT ITEM -->
                  <div class="rating-ornament-item">
                    <!-- RATING ORNAMENT ICON -->
                    <svg class="rating-ornament-icon">
                      <use xlink:href="#svg-star"></use>
                    </svg>
                  </div>
                  <!-- /RATING ORNAMENT ITEM -->
                
                    <!-- RATING ORNAMENT ITEM -->
                  <div class="rating-ornament-item">
                    <!-- RATING ORNAMENT ICON -->
                    <svg class="rating-ornament-icon">
                      <use xlink:href="#svg-star"></use>
                    </svg>
                  </div>
                  <!-- /RATING ORNAMENT ITEM -->
                </div>
                <!-- /RATING ORNAMENT -->
              </div>
              <!-- /PRODUCT PREVIEW INFO -->
      
              <!-- PRODUCT PRICE WRAP -->
              <div class="product-price-wrap">
                <p class="product-preview-price current"><span class="currency">$</span>32.50</p>
              </div>
              <!-- /PRODUCT PRICE WRAP -->
            </div>
            <!-- /PRODUCT PREVIEW -->
          </div>
          <!-- /PRODUCT PREVIEW SHOWCASE -->
        </div>
        <!-- FOOTER TOP WIDGET -->

        <!-- FOOTER TOP WIDGET -->
        <div class="footer-top-widget">
          <!-- SECTION TITLE WRAP -->
          <div class="section-title-wrap yellow negative">
            <h2 class="section-title">New Item Deals</h2>
            <div class="section-title-separator"></div>
          </div>
          <!-- /SECTION TITLE WRAP -->

          <!-- PRODUCT PREVIEW SHOWCASE -->
          <div class="product-preview-showcase grid-1col gutter-small">
            <!-- PRODUCT PREVIEW -->
            <div class="product-preview tiny negative">
              <!-- PRODUCT PREVIEW IMG WRAP -->
              <div class="product-preview-img-wrap">
                <!-- PRODUCT PREVIEW IMG -->
                <a href="product-page.html">
                  <figure class="product-preview-img liquid">
                    <img src="img/products/05.jpg" alt="product-05">
                  </figure>
                </a>
                <!-- /PRODUCT PREVIEW IMG -->
              </div>
              <!-- /PRODUCT PREVIEW IMG WRAP -->
      
              <!-- PRODUCT PREVIEW TITLE -->
              <a href="product-page.html" class="product-preview-title">Carbon black joystick</a>
              <!-- PRODUCT PREVIEW INFO -->
              <div class="product-preview-info">
                <!-- PRODUCT PREVIEW CATEGORY -->
                <a href="shop-v1-grid.html" class="product-preview-category">XRock One</a>
                <!-- RATING ORNAMENT -->
                <div class="rating-ornament small void yellow">
                  <!-- RATING ORNAMENT ITEM -->
                  <div class="rating-ornament-item">
                    <!-- RATING ORNAMENT ICON -->
                    <svg class="rating-ornament-icon">
                      <use xlink:href="#svg-star"></use>
                    </svg>
                  </div>
                  <!-- /RATING ORNAMENT ITEM -->
                
                  <!-- RATING ORNAMENT ITEM -->
                  <div class="rating-ornament-item">
                    <!-- RATING ORNAMENT ICON -->
                    <svg class="rating-ornament-icon">
                      <use xlink:href="#svg-star"></use>
                    </svg>
                  </div>
                  <!-- /RATING ORNAMENT ITEM -->
                
                    <!-- RATING ORNAMENT ITEM -->
                  <div class="rating-ornament-item">
                    <!-- RATING ORNAMENT ICON -->
                    <svg class="rating-ornament-icon">
                      <use xlink:href="#svg-star"></use>
                    </svg>
                  </div>
                  <!-- /RATING ORNAMENT ITEM -->
                
                    <!-- RATING ORNAMENT ITEM -->
                  <div class="rating-ornament-item">
                    <!-- RATING ORNAMENT ICON -->
                    <svg class="rating-ornament-icon">
                      <use xlink:href="#svg-star"></use>
                    </svg>
                  </div>
                  <!-- /RATING ORNAMENT ITEM -->
                
                    <!-- RATING ORNAMENT ITEM -->
                  <div class="rating-ornament-item">
                    <!-- RATING ORNAMENT ICON -->
                    <svg class="rating-ornament-icon empty">
                      <use xlink:href="#svg-star"></use>
                    </svg>
                  </div>
                  <!-- /RATING ORNAMENT ITEM -->
                </div>
                <!-- /RATING ORNAMENT -->
              </div>
              <!-- /PRODUCT PREVIEW INFO -->
      
              <!-- PRODUCT PRICE WRAP -->
              <div class="product-price-wrap">
                <p class="product-preview-price before"><span class="currency">$</span>60.00</p>
                <p class="product-preview-price current"><span class="currency">$</span>55.00</p>
              </div>
              <!-- /PRODUCT PRICE WRAP -->
            </div>
            <!-- /PRODUCT PREVIEW -->
      
            <!-- PRODUCT PREVIEW -->
            <div class="product-preview tiny negative">
              <!-- PRODUCT PREVIEW IMG WRAP -->
              <div class="product-preview-img-wrap">
                <!-- PRODUCT PREVIEW IMG -->
                <a href="product-page.html">
                  <figure class="product-preview-img liquid">
                    <img src="img/products/03.jpg" alt="product-03">
                  </figure>
                </a>
                <!-- /PRODUCT PREVIEW IMG -->
              </div>
              <!-- /PRODUCT PREVIEW IMG WRAP -->
      
              <!-- PRODUCT PREVIEW TITLE -->
              <a href="product-page.html" class="product-preview-title">Powerstation 4 bundle</a>
              <!-- PRODUCT PREVIEW INFO -->
              <div class="product-preview-info">
                <!-- PRODUCT PREVIEW CATEGORY -->
                <a href="shop-v1-grid.html" class="product-preview-category">Powerstation</a>
                <!-- RATING ORNAMENT -->
                <div class="rating-ornament small void yellow">
                  <!-- RATING ORNAMENT ITEM -->
                  <div class="rating-ornament-item">
                    <!-- RATING ORNAMENT ICON -->
                    <svg class="rating-ornament-icon">
                      <use xlink:href="#svg-star"></use>
                    </svg>
                  </div>
                  <!-- /RATING ORNAMENT ITEM -->
                
                  <!-- RATING ORNAMENT ITEM -->
                  <div class="rating-ornament-item">
                    <!-- RATING ORNAMENT ICON -->
                    <svg class="rating-ornament-icon">
                      <use xlink:href="#svg-star"></use>
                    </svg>
                  </div>
                  <!-- /RATING ORNAMENT ITEM -->
                
                    <!-- RATING ORNAMENT ITEM -->
                  <div class="rating-ornament-item">
                    <!-- RATING ORNAMENT ICON -->
                    <svg class="rating-ornament-icon">
                      <use xlink:href="#svg-star"></use>
                    </svg>
                  </div>
                  <!-- /RATING ORNAMENT ITEM -->
                
                    <!-- RATING ORNAMENT ITEM -->
                  <div class="rating-ornament-item">
                    <!-- RATING ORNAMENT ICON -->
                    <svg class="rating-ornament-icon">
                      <use xlink:href="#svg-star"></use>
                    </svg>
                  </div>
                  <!-- /RATING ORNAMENT ITEM -->
                
                    <!-- RATING ORNAMENT ITEM -->
                  <div class="rating-ornament-item">
                    <!-- RATING ORNAMENT ICON -->
                    <svg class="rating-ornament-icon empty">
                      <use xlink:href="#svg-star"></use>
                    </svg>
                  </div>
                  <!-- /RATING ORNAMENT ITEM -->
                </div>
                <!-- /RATING ORNAMENT -->
              </div>
              <!-- /PRODUCT PREVIEW INFO -->
      
              <!-- PRODUCT PRICE WRAP -->
              <div class="product-price-wrap">
                <p class="product-preview-price current"><span class="currency">$</span>250.00</p>
              </div>
              <!-- /PRODUCT PRICE WRAP -->
            </div>
            <!-- /PRODUCT PREVIEW -->

            <!-- PRODUCT PREVIEW -->
            <div class="product-preview tiny negative">
              <!-- PRODUCT PREVIEW IMG WRAP -->
              <div class="product-preview-img-wrap">
                <!-- PRODUCT PREVIEW IMG -->
                <a href="product-page.html">
                  <figure class="product-preview-img liquid">
                    <img src="img/products/08.jpg" alt="product-08">
                  </figure>
                </a>
                <!-- /PRODUCT PREVIEW IMG -->
              </div>
              <!-- /PRODUCT PREVIEW IMG WRAP -->
      
              <!-- PRODUCT PREVIEW TITLE -->
              <a href="product-page.html" class="product-preview-title">Tales of Odd Dimensions</a>
              <!-- PRODUCT PREVIEW INFO -->
              <div class="product-preview-info">
                <!-- PRODUCT PREVIEW CATEGORY -->
                <a href="shop-v1-grid.html" class="product-preview-category">Funtendo Mee U</a>
                <!-- RATING ORNAMENT -->
                <div class="rating-ornament small void yellow">
                  <!-- RATING ORNAMENT ITEM -->
                  <div class="rating-ornament-item">
                    <!-- RATING ORNAMENT ICON -->
                    <svg class="rating-ornament-icon">
                      <use xlink:href="#svg-star"></use>
                    </svg>
                  </div>
                  <!-- /RATING ORNAMENT ITEM -->
                
                  <!-- RATING ORNAMENT ITEM -->
                  <div class="rating-ornament-item">
                    <!-- RATING ORNAMENT ICON -->
                    <svg class="rating-ornament-icon">
                      <use xlink:href="#svg-star"></use>
                    </svg>
                  </div>
                  <!-- /RATING ORNAMENT ITEM -->
                
                    <!-- RATING ORNAMENT ITEM -->
                  <div class="rating-ornament-item">
                    <!-- RATING ORNAMENT ICON -->
                    <svg class="rating-ornament-icon">
                      <use xlink:href="#svg-star"></use>
                    </svg>
                  </div>
                  <!-- /RATING ORNAMENT ITEM -->
                
                    <!-- RATING ORNAMENT ITEM -->
                  <div class="rating-ornament-item">
                    <!-- RATING ORNAMENT ICON -->
                    <svg class="rating-ornament-icon">
                      <use xlink:href="#svg-star"></use>
                    </svg>
                  </div>
                  <!-- /RATING ORNAMENT ITEM -->
                
                    <!-- RATING ORNAMENT ITEM -->
                  <div class="rating-ornament-item">
                    <!-- RATING ORNAMENT ICON -->
                    <svg class="rating-ornament-icon">
                      <use xlink:href="#svg-star"></use>
                    </svg>
                  </div>
                  <!-- /RATING ORNAMENT ITEM -->
                </div>
                <!-- /RATING ORNAMENT -->
              </div>
              <!-- /PRODUCT PREVIEW INFO -->
      
              <!-- PRODUCT PRICE WRAP -->
              <div class="product-price-wrap">
                <p class="product-preview-price current"><span class="currency">$</span>60.00</p>
              </div>
              <!-- /PRODUCT PRICE WRAP -->
            </div>
            <!-- /PRODUCT PREVIEW -->
          </div>
          <!-- /PRODUCT PREVIEW SHOWCASE -->
        </div>
        <!-- FOOTER TOP WIDGET -->
      </div>
      <!-- /FOOTER TOP WIDGETS -->
    </div>
    <!-- /FOOTER TOP -->
  </div>
  <!-- /FOOTER TOP WRAP -->

  <!-- FOOTER BOTTOM WRAP -->
  <div class="footer-bottom-wrap">
    <!-- FOOTER BOTTOM -->
    <div class="footer-bottom grid-limit">
      <p class="footer-bottom-text"><span class="brand"><span class="highlighted">Pixel Diamond</span> Theme</span><span class="separator">|</span>All Rights Reserved 2018</p>
      <p class="footer-bottom-text"><a href="#">Terms and Conditions</a><span class="separator">|</span><a href="#">Privacy Policy</a></p>
    </div>
    <!-- /FOOTER BOTTOM -->
  </div>
  <!-- /FOOTER BOTTOM WRAP -->

<!-- app bundle -->
<script src="app.bundle.min.js"></script>
</body>
@endsection


@yield('content')
