@extends('layouts.header')

@section('content')
  <title>Player</title>


  <!-- WIDGET MEDIA WRAP -->
  <div id="popup-watch-video" class="widget-media-wrap popup-display popup-wrap">
    <!-- BUTTON CLOSE -->
    <div class="button-close violet popup-watch-video-trigger">
      <!-- CROSS ICON -->
      <svg class="cross-icon small">
        <use xlink:href="#svg-cross-small"></use>
      </svg>
      <!-- /CROSS ICON -->
    </div>
    <!-- /BUTTON CLOSE -->

    <!-- WIDGET MEDIA R -->
    <div class="widget-media-r">
      <iframe src="https://player.twitch.tv/?autoplay=false&muted=true&t=03h15m50s&video=v417077870" allowfullscreen></iframe>
    </div>
    <!-- /WIDGET MEDIA R -->
  </div>
  <!-- /WIDGET MEDIA WRAP -->

  <!-- SEARCH POPUP -->
  <div class="search-popup">
    <!-- CROSS ICON -->
    <svg class="cross-icon big close-button search-popup-close">
      <use xlink:href="#svg-cross-big"></use>
    </svg>
    <!-- /CROSS ICON -->

    <form method="GET" class="search-popup-form">
      <input type="text" id="search" class="input-line" name="search" placeholder="What are you looking for...?">
    </form>
    <p class="search-popup-text">Write what you are looking for and press enter to begin your search!</p>
  </div>
  <!-- /SEARCH POPUP -->

  <!-- INVENTORY BAG PREVIEW -->
  <div class="inventory-bag-preview">
    <!-- INVENTORY CLOSE BUTTON -->
    <svg class="inventory-close-button cross-icon big">
      <use xlink:href="#svg-cross-big"></use>
    </svg>
    <!-- /INVENTORY CLOSE BUTTON -->
    <p class="items-in-inventory"><span class="quantity">8</span> items in inventory</p>
    <div class="line-separator"></div>

    <!-- INVENTORY ITEMS PREVIEW -->
    <div class="inventory-items-preview">
      <!-- INVENTORY ITEM PREVIEW -->
      <div class="inventory-item-preview">
        <!-- PRODUCT PREVIEW -->
        <div class="product-preview small">
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

          <!-- REMOVE -->
          <div class="bubble-ornament small red remove">
            <!-- CROSS ICON -->
            <svg class="cross-cb-icon small">
              <use xlink:href="#svg-cross-cb-small"></use>
            </svg>
            <!-- /CROSS ICON -->
          </div>
          <!-- /REMOVE -->

          <!-- TAG QUANTITY -->
          <div class="tag-quantity">
            <p class="tag-quantity-text">x <span class="value">2</span></p>
          </div>
          <!-- TAG QUANTITY -->

          <!-- PRODUCT PREVIEW TITLE -->
          <a href="product-page.html" class="product-preview-title">New Funtendo 3XSD - black</a>
          <!-- PRODUCT PREVIEW INFO -->
          <div class="product-preview-info">
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
            <p class="product-preview-price current"><span class="currency">$</span>199.00</p>
          </div>
          <!-- /PRODUCT PRICE WRAP -->
        </div>
        <!-- /PRODUCT PREVIEW -->
      </div>
      <!-- /INVENTORY ITEM PREVIEW -->

      <!-- INVENTORY ITEM PREVIEW -->
      <div class="inventory-item-preview">
        <!-- PRODUCT PREVIEW -->
        <div class="product-preview small">
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

          <!-- REMOVE -->
          <div class="bubble-ornament small red remove">
            <!-- CROSS ICON -->
            <svg class="cross-cb-icon small">
              <use xlink:href="#svg-cross-cb-small"></use>
            </svg>
            <!-- /CROSS ICON -->
          </div>
          <!-- /REMOVE -->

          <!-- TAG QUANTITY -->
          <div class="tag-quantity">
            <p class="tag-quantity-text">x <span class="value">1</span></p>
          </div>
          <!-- TAG QUANTITY -->

          <!-- PRODUCT PREVIEW TITLE -->
          <a href="product-page.html" class="product-preview-title">Crimson red joystick</a>
          <!-- PRODUCT PREVIEW INFO -->
          <div class="product-preview-info">
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
            <p class="product-preview-price current"><span class="currency">$</span>32.50</p>
          </div>
          <!-- /PRODUCT PRICE WRAP -->
        </div>
        <!-- /PRODUCT PREVIEW -->
      </div>
      <!-- /INVENTORY ITEM PREVIEW -->

      <!-- INVENTORY ITEM PREVIEW -->
      <div class="inventory-item-preview">
        <!-- PRODUCT PREVIEW -->
        <div class="product-preview small">
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

          <!-- REMOVE -->
          <div class="bubble-ornament small red remove">
            <!-- CROSS ICON -->
            <svg class="cross-cb-icon small">
              <use xlink:href="#svg-cross-cb-small"></use>
            </svg>
            <!-- /CROSS ICON -->
          </div>
          <!-- /REMOVE -->

          <!-- TAG QUANTITY -->
          <div class="tag-quantity">
            <p class="tag-quantity-text">x <span class="value">4</span></p>
          </div>
          <!-- TAG QUANTITY -->

          <!-- PRODUCT PREVIEW TITLE -->
          <a href="product-page.html" class="product-preview-title">Carbon black joystick</a>
          <!-- PRODUCT PREVIEW INFO -->
          <div class="product-preview-info">
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
            <p class="product-preview-price current"><span class="currency">$</span>55.00</p>
          </div>
          <!-- /PRODUCT PRICE WRAP -->
        </div>
        <!-- /PRODUCT PREVIEW -->
      </div>
      <!-- /INVENTORY ITEM PREVIEW -->

      <!-- INVENTORY ITEM PREVIEW -->
      <div class="inventory-item-preview">
        <!-- PRODUCT PREVIEW -->
        <div class="product-preview small">
          <!-- PRODUCT PREVIEW IMG WRAP -->
          <div class="product-preview-img-wrap">
            <!-- PRODUCT PREVIEW IMG -->
            <a href="product-page.html">
              <figure class="product-preview-img liquid">
                <img src="img/products/14.jpg" alt="product-14">
              </figure>
            </a>
            <!-- /PRODUCT PREVIEW IMG -->
          </div>
          <!-- /PRODUCT PREVIEW IMG WRAP -->

          <!-- REMOVE -->
          <div class="bubble-ornament small red remove">
            <!-- CROSS ICON -->
            <svg class="cross-cb-icon small">
              <use xlink:href="#svg-cross-cb-small"></use>
            </svg>
            <!-- /CROSS ICON -->
          </div>
          <!-- /REMOVE -->

          <!-- TAG QUANTITY -->
          <div class="tag-quantity">
            <p class="tag-quantity-text">x <span class="value">1</span></p>
          </div>
          <!-- TAG QUANTITY -->

          <!-- PRODUCT PREVIEW TITLE -->
          <a href="product-page.html" class="product-preview-title">Magimons black framed print</a>
          <!-- PRODUCT PREVIEW INFO -->
          <div class="product-preview-info">
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
            <p class="product-preview-price current"><span class="currency">$</span>20.00</p>
          </div>
          <!-- /PRODUCT PRICE WRAP -->
        </div>
        <!-- /PRODUCT PREVIEW -->
      </div>
      <!-- /INVENTORY ITEM PREVIEW -->

      <!-- INVENTORY ITEM PREVIEW -->
      <div class="inventory-item-preview empty">
        <!-- INVENTORY ICON -->
        <svg class="inventory-icon">
          <use xlink:href="#svg-inventory-light"></use>
        </svg>
        <!-- /INVENTORY ICON -->
      </div>
      <!-- /INVENTORY ITEM PREVIEW -->

      <!-- INVENTORY ITEM PREVIEW -->
      <div class="inventory-item-preview empty">
        <!-- INVENTORY ICON -->
        <svg class="inventory-icon">
          <use xlink:href="#svg-inventory-light"></use>
        </svg>
        <!-- /INVENTORY ICON -->
      </div>
      <!-- /INVENTORY ITEM PREVIEW -->

      <!-- INVENTORY ITEM PREVIEW -->
      <div class="inventory-item-preview empty">
        <!-- INVENTORY ICON -->
        <svg class="inventory-icon">
          <use xlink:href="#svg-inventory-light"></use>
        </svg>
        <!-- /INVENTORY ICON -->
      </div>
      <!-- /INVENTORY ITEM PREVIEW -->

      <!-- INVENTORY ITEM PREVIEW -->
      <div class="inventory-item-preview empty">
        <!-- INVENTORY ICON -->
        <svg class="inventory-icon">
          <use xlink:href="#svg-inventory-light"></use>
        </svg>
        <!-- /INVENTORY ICON -->
      </div>
      <!-- /INVENTORY ITEM PREVIEW -->

      <!-- INVENTORY ITEM PREVIEW -->
      <div class="inventory-item-preview empty">
        <!-- INVENTORY ICON -->
        <svg class="inventory-icon">
          <use xlink:href="#svg-inventory-light"></use>
        </svg>
        <!-- /INVENTORY ICON -->
      </div>
      <!-- /INVENTORY ITEM PREVIEW -->

      <!-- INVENTORY ITEM PREVIEW -->
      <div class="inventory-item-preview empty">
        <!-- INVENTORY ICON -->
        <svg class="inventory-icon">
          <use xlink:href="#svg-inventory-light"></use>
        </svg>
        <!-- /INVENTORY ICON -->
      </div>
      <!-- /INVENTORY ITEM PREVIEW -->

      <!-- INVENTORY ITEM PREVIEW -->
      <div class="inventory-item-preview empty">
        <!-- INVENTORY ICON -->
        <svg class="inventory-icon">
          <use xlink:href="#svg-inventory-light"></use>
        </svg>
        <!-- /INVENTORY ICON -->
      </div>
      <!-- /INVENTORY ITEM PREVIEW -->

      <!-- INVENTORY ITEM PREVIEW -->
      <div class="inventory-item-preview empty">
        <!-- INVENTORY ICON -->
        <svg class="inventory-icon">
          <use xlink:href="#svg-inventory-light"></use>
        </svg>
        <!-- /INVENTORY ICON -->
      </div>
      <!-- /INVENTORY ITEM PREVIEW -->
    </div>
    <!-- /INVENTORY ITEMS PREVIEW -->

    <div class="line-separator"></div>
    <p class="inventory-subtotal"><span class="subtotal-text">Inventory subtotal:</span> <span class="subtotal-value"><span class="currency">$</span><span class="value">670.50</span></span></p>
    <div class="line-separator"></div>
    <!-- INVENTORY ACTIONS -->
    <div class="inventory-actions">
      <a href="inventory-bag.html" class="button full blue">Go to the inventory bag</a>
      <a href="checkout.html" class="button full violet">Proceed to checkout</a>
    </div>
    <!-- /INVENTORY ACTIONS -->
  </div>
  <!-- /INVENTORY BAG PREVIEW -->

  <!-- MOBILE MENU WRAP -->
  <div class="mobile-menu-wrap">
    <!-- CROSS ICON -->
    <svg class="cross-icon big mobile-menu-close">
      <use xlink:href="#svg-cross-big"></use>
    </svg>
    <!-- /CROSS ICON -->

    <!-- SEARCH POPUP OPEN -->
    <svg class="search-popup-open search-icon">
      <use xlink:href="#svg-search"></use>
    </svg>
    <!-- /SEARCH POPUP OPEN -->

    <!-- LOGO IMG -->
    <figure class="logo-img">
      <img src="img/brand/logo.png" alt="Logo">
    </figure>
    <!-- /LOGO IMG -->

    <!-- MOBILE MENU -->
    <ul class="mobile-menu">
      <!-- MOBILE MENU ITEM -->
      <li class="mobile-menu-item">
        <a href="index.html" class="mobile-menu-item-link">Home</a>
      </li>
      <!-- /MOBILE MENU ITEM -->

      <!-- MOBILE MENU ITEM -->
      <li class="mobile-menu-item">
        <p class="mobile-menu-item-link pd-dropdown-handler">eSports</p>
        <!-- ARROW ICON -->
        <svg class="arrow-icon medium">
          <use xlink:href="#svg-arrow-medium"></use>
        </svg>
        <!-- /ARROW ICON -->

        <!-- MOBILE DROPDOWN -->
        <ul class="mobile-dropdown pd-dropdown">
          <!-- MOBILE DROPDOWN ITEM -->
          <li class="mobile-dropdown-item">
            <p class="mobile-dropdown-item-link pd-dropdown-handler">Main Pages</p>
            <!-- ARROW ICON -->
            <svg class="arrow-icon medium">
              <use xlink:href="#svg-arrow-medium"></use>
            </svg>
            <!-- /ARROW ICON -->

            <!-- MOBILE DROPDOWN -->
            <ul class="mobile-dropdown pd-dropdown">
              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="esports-home.html" class="mobile-dropdown-item-link">eSports Home</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="esports-news.html" class="mobile-dropdown-item-link">eSports News</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="esports-post.html" class="mobile-dropdown-item-link">eSports Post Page</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="esports-tournament.html" class="mobile-dropdown-item-link">Tournament Page</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->
            </ul>
            <!-- /MOBILE DROPDOWN -->
          </li>
          <!-- /MOBILE DROPDOWN ITEM -->

          <!-- MOBILE DROPDOWN ITEM -->
          <li class="mobile-dropdown-item">
            <p class="mobile-dropdown-item-link pd-dropdown-handler">Match Overviews</p>
            <!-- ARROW ICON -->
            <svg class="arrow-icon medium">
              <use xlink:href="#svg-arrow-medium"></use>
            </svg>
            <!-- /ARROW ICON -->

            <!-- MOBILE DROPDOWN -->
            <ul class="mobile-dropdown pd-dropdown">
              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="esports-match-overview-v1.html" class="mobile-dropdown-item-link">Match Overview V1</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="esports-match-overview-v2.html" class="mobile-dropdown-item-link">Match Overview V2</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="esports-match-overview-v3.html" class="mobile-dropdown-item-link">Match Overview V3</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="esports-match-overview-v4.html" class="mobile-dropdown-item-link">Match Overview V4</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->
            </ul>
            <!-- /MOBILE DROPDOWN -->
          </li>
          <!-- /MOBILE DROPDOWN ITEM -->

          <!-- MOBILE DROPDOWN ITEM -->
          <li class="mobile-dropdown-item">
            <p class="mobile-dropdown-item-link pd-dropdown-handler">Teams &amp; Players</p>
            <!-- ARROW ICON -->
            <svg class="arrow-icon medium">
              <use xlink:href="#svg-arrow-medium"></use>
            </svg>
            <!-- /ARROW ICON -->

            <!-- MOBILE DROPDOWN -->
            <ul class="mobile-dropdown pd-dropdown">
              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="esports-team.html" class="mobile-dropdown-item-link">eSports Team Page</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="esports-player.html" class="mobile-dropdown-item-link">eSports Player Page</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="esports-streamers.html" class="mobile-dropdown-item-link">Streamers Page</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="esports-calendar.html" class="mobile-dropdown-item-link">Scores with Calendar</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->
            </ul>
            <!-- /MOBILE DROPDOWN -->
          </li>
          <!-- /MOBILE DROPDOWN ITEM -->

          <!-- MOBILE DROPDOWN ITEM -->
          <li class="mobile-dropdown-item">
            <p class="mobile-dropdown-item-link pd-dropdown-handler">eSports Widgets</p>
            <!-- ARROW ICON -->
            <svg class="arrow-icon medium">
              <use xlink:href="#svg-arrow-medium"></use>
            </svg>
            <!-- /ARROW ICON -->

            <!-- MOBILE DROPDOWN -->
            <ul class="mobile-dropdown pd-dropdown">
              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="esports-widgets-v1.html" class="mobile-dropdown-item-link">Widgets Page 01</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="esports-widgets-v2.html" class="mobile-dropdown-item-link">Widgets Page 02</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="esports-widgets-v3.html" class="mobile-dropdown-item-link">Widgets Page 03</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->
            </ul>
            <!-- /MOBILE DROPDOWN -->
          </li>
          <!-- /MOBILE DROPDOWN ITEM -->
        </ul>
        <!-- /MOBILE DROPDOWN -->
      </li>
      <!-- /MOBILE MENU ITEM -->

      <!-- MOBILE MENU ITEM -->
      <li class="mobile-menu-item">
        <a href="news-v1.html" class="mobile-menu-item-link">News</a>
      </li>
      <!-- /MOBILE MENU ITEM -->

      <!-- MOBILE MENU ITEM -->
      <li class="mobile-menu-item">
        <a href="news-v2.html" class="mobile-menu-item-link">Reviews</a>
      </li>
      <!-- /MOBILE MENU ITEM -->

      <!-- MOBILE MENU ITEM -->
      <li class="mobile-menu-item">
        <p class="mobile-menu-item-link pd-dropdown-handler">Features</p>
        <!-- ARROW ICON -->
        <svg class="arrow-icon medium">
          <use xlink:href="#svg-arrow-medium"></use>
        </svg>
        <!-- /ARROW ICON -->

        <!-- MOBILE DROPDOWN -->
        <ul class="mobile-dropdown pd-dropdown">
          <!-- MOBILE DROPDOWN ITEM -->
          <li class="mobile-dropdown-item">
            <p class="mobile-dropdown-item-link pd-dropdown-handler">Pixel Main Features</p>
            <!-- ARROW ICON -->
            <svg class="arrow-icon medium">
              <use xlink:href="#svg-arrow-medium"></use>
            </svg>
            <!-- /ARROW ICON -->

            <!-- MOBILE DROPDOWN -->
            <ul class="mobile-dropdown pd-dropdown">
              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="index.html" class="mobile-dropdown-item-link">Main Homepage</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="home-v2.html" class="mobile-dropdown-item-link">Homepage V2</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="home-v3.html" class="mobile-dropdown-item-link">Homepage V3</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="news-v1.html" class="mobile-dropdown-item-link">News Page V1</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="news-v2.html" class="mobile-dropdown-item-link">News Page V2</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="news-v3.html" class="mobile-dropdown-item-link">News Page V3</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="news-v4.html" class="mobile-dropdown-item-link">News Page V4</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="post-v1.html" class="mobile-dropdown-item-link">Post Page V1</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="post-v2.html" class="mobile-dropdown-item-link">Post Page V2</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="post-v3.html" class="mobile-dropdown-item-link">Post Page V3</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="post-v4.html" class="mobile-dropdown-item-link">Post Page V4</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="browse-videos.html" class="mobile-dropdown-item-link">Browse Videos</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="post-video.html" class="mobile-dropdown-item-link">Video Post Page</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="search-results.html" class="mobile-dropdown-item-link">Search Results</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="calendar.html" class="mobile-dropdown-item-link">Events Calendar</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="event.html" class="mobile-dropdown-item-link">Open Event</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="404.html" class="mobile-dropdown-item-link">404 Error Page</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="shortcodes.html" class="mobile-dropdown-item-link">Shortcodes</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="menu-dropdowns.html" class="mobile-dropdown-item-link">Menu &amp; Dropdowns</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="headers-dividers.html" class="mobile-dropdown-item-link">Headers &amp; Dividers</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="pixel-popups.html" class="mobile-dropdown-item-link">Pixel Popups</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->
            </ul>
            <!-- /MOBILE DROPDOWN -->
          </li>
          <!-- /MOBILE DROPDOWN ITEM -->

          <!-- MOBILE DROPDOWN ITEM -->
          <li class="mobile-dropdown-item">
            <p class="mobile-dropdown-item-link pd-dropdown-handler">Account &amp; Company</p>
            <!-- ARROW ICON -->
            <svg class="arrow-icon medium">
              <use xlink:href="#svg-arrow-medium"></use>
            </svg>
            <!-- /ARROW ICON -->

            <!-- MOBILE DROPDOWN -->
            <ul class="mobile-dropdown pd-dropdown">
              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="login-register.html" class="mobile-dropdown-item-link">Login &amp; Register</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="login-register-popups.html" class="mobile-dropdown-item-link">Login &amp; Register Popups</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="account-settings.html" class="mobile-dropdown-item-link">Account Settings</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="orders-history.html" class="mobile-dropdown-item-link">Account Orders</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="faq.html" class="mobile-dropdown-item-link">FAQs Page</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="contact.html" class="mobile-dropdown-item-link">Contact Page</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="sponsors.html" class="mobile-dropdown-item-link">Sponsors Page</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->
            </ul>
            <!-- /MOBILE DROPDOWN -->
          </li>
          <!-- /MOBILE DROPDOWN ITEM -->

          <!-- MOBILE DROPDOWN ITEM -->
          <li class="mobile-dropdown-item">
            <p class="mobile-dropdown-item-link pd-dropdown-handler">Pixel Forums</p>
            <!-- ARROW ICON -->
            <svg class="arrow-icon medium">
              <use xlink:href="#svg-arrow-medium"></use>
            </svg>
            <!-- /ARROW ICON -->

            <!-- MOBILE DROPDOWN -->
            <ul class="mobile-dropdown pd-dropdown">
              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="forum.html" class="mobile-dropdown-item-link">Main Page</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="forum-categories.html" class="mobile-dropdown-item-link">Category Page</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="topic.html" class="mobile-dropdown-item-link">Main Topic</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="forum-badges.html" class="mobile-dropdown-item-link">Badges Big &amp; Small</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="profile-summary.html" class="mobile-dropdown-item-link">Profile Summary</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="profile-activity.html" class="mobile-dropdown-item-link">Profile Activity</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="profile-notifications.html" class="mobile-dropdown-item-link">Profile Notifications</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="profile-messages.html" class="mobile-dropdown-item-link">Profile Messages</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="profile-badges.html" class="mobile-dropdown-item-link">Profile Badges</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="profile-settings.html" class="mobile-dropdown-item-link">Profile Settings</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="forum-search-results.html" class="mobile-dropdown-item-link">Forum Results</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->
            </ul>
            <!-- /MOBILE DROPDOWN -->
          </li>
          <!-- /MOBILE DROPDOWN ITEM -->
        </ul>
        <!-- /MOBILE DROPDOWN -->
      </li>
      <!-- /MOBILE MENU ITEM -->

      <!-- MOBILE MENU ITEM -->
      <li class="mobile-menu-item">
        <p class="mobile-menu-item-link pd-dropdown-handler">Shop</p>
        <!-- ARROW ICON -->
        <svg class="arrow-icon medium">
          <use xlink:href="#svg-arrow-medium"></use>
        </svg>
        <!-- /ARROW ICON -->

        <!-- MOBILE DROPDOWN -->
        <ul class="mobile-dropdown pd-dropdown">
          <!-- MOBILE DROPDOWN ITEM -->
          <li class="mobile-dropdown-item">
            <p class="mobile-dropdown-item-link pd-dropdown-handler">New Releases</p>
            <!-- ARROW ICON -->
            <svg class="arrow-icon medium">
              <use xlink:href="#svg-arrow-medium"></use>
            </svg>
            <!-- /ARROW ICON -->

            <!-- MOBILE DROPDOWN -->
            <ul class="mobile-dropdown pd-dropdown">
              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="shop-v1-grid.html" class="mobile-dropdown-item-link">Shop 3 Columns Grid</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="shop-v1-list.html" class="mobile-dropdown-item-link">Shop 3 Columns List</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="shop-v2.html" class="mobile-dropdown-item-link">Shop 4 Columns</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="product-page.html" class="mobile-dropdown-item-link">Product Description</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="product-page.html" class="mobile-dropdown-item-link">Product Reviews</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="product-page.html" class="mobile-dropdown-item-link">Product Specifications</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="inventory-bag.html" class="mobile-dropdown-item-link">Inventory Bag (Cart)</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="checkout.html" class="mobile-dropdown-item-link">Checkout Page</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="order-confirmation.html" class="mobile-dropdown-item-link">Order Confirmation</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="wishlist.html" class="mobile-dropdown-item-link">Wishlist</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="product-compare.html" class="mobile-dropdown-item-link">Product Compare</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->
            </ul>
            <!-- /MOBILE DROPDOWN -->
          </li>
          <!-- /MOBILE DROPDOWN ITEM -->

          <!-- MOBILE DROPDOWN ITEM -->
          <li class="mobile-dropdown-item">
            <p class="mobile-dropdown-item-link pd-dropdown-handler">Shop Features</p>
            <!-- ARROW ICON -->
            <svg class="arrow-icon medium">
              <use xlink:href="#svg-arrow-medium"></use>
            </svg>
            <!-- /ARROW ICON -->

            <!-- MOBILE DROPDOWN -->
            <ul class="mobile-dropdown pd-dropdown">
              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="shop-v1-grid.html" class="mobile-dropdown-item-link">Shop 3 Columns Grid</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="shop-v1-list.html" class="mobile-dropdown-item-link">Shop 3 Columns List</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="shop-v2.html" class="mobile-dropdown-item-link">Shop 4 Columns</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="product-page.html" class="mobile-dropdown-item-link">Product Description</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="product-page.html" class="mobile-dropdown-item-link">Product Reviews</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="product-page.html" class="mobile-dropdown-item-link">Product Specifications</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="inventory-bag.html" class="mobile-dropdown-item-link">Inventory Bag (Cart)</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="checkout.html" class="mobile-dropdown-item-link">Checkout Page</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="order-confirmation.html" class="mobile-dropdown-item-link">Order Confirmation</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="wishlist.html" class="mobile-dropdown-item-link">Wishlist</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="product-compare.html" class="mobile-dropdown-item-link">Product Compare</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->
            </ul>
            <!-- /MOBILE DROPDOWN -->
          </li>
          <!-- /MOBILE DROPDOWN ITEM -->

          <!-- MOBILE DROPDOWN ITEM -->
          <li class="mobile-dropdown-item">
            <p class="mobile-dropdown-item-link pd-dropdown-handler">Powerstation</p>
            <!-- ARROW ICON -->
            <svg class="arrow-icon medium">
              <use xlink:href="#svg-arrow-medium"></use>
            </svg>
            <!-- /ARROW ICON -->

            <!-- MOBILE DROPDOWN -->
            <ul class="mobile-dropdown pd-dropdown">
              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="shop-v1-grid.html" class="mobile-dropdown-item-link">Shop 3 Columns Grid</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="shop-v1-list.html" class="mobile-dropdown-item-link">Shop 3 Columns List</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="shop-v2.html" class="mobile-dropdown-item-link">Shop 4 Columns</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="product-page.html" class="mobile-dropdown-item-link">Product Description</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="product-page.html" class="mobile-dropdown-item-link">Product Reviews</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="product-page.html" class="mobile-dropdown-item-link">Product Specifications</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="inventory-bag.html" class="mobile-dropdown-item-link">Inventory Bag (Cart)</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="checkout.html" class="mobile-dropdown-item-link">Checkout Page</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="order-confirmation.html" class="mobile-dropdown-item-link">Order Confirmation</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="wishlist.html" class="mobile-dropdown-item-link">Wishlist</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="product-compare.html" class="mobile-dropdown-item-link">Product Compare</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->
            </ul>
            <!-- /MOBILE DROPDOWN -->
          </li>
          <!-- /MOBILE DROPDOWN ITEM -->

          <!-- MOBILE DROPDOWN ITEM -->
          <li class="mobile-dropdown-item">
            <p class="mobile-dropdown-item-link pd-dropdown-handler">X-Rock</p>
            <!-- ARROW ICON -->
            <svg class="arrow-icon medium">
              <use xlink:href="#svg-arrow-medium"></use>
            </svg>
            <!-- /ARROW ICON -->

            <!-- MOBILE DROPDOWN -->
            <ul class="mobile-dropdown pd-dropdown">
              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="shop-v1-grid.html" class="mobile-dropdown-item-link">Shop 3 Columns Grid</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="shop-v1-list.html" class="mobile-dropdown-item-link">Shop 3 Columns List</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="shop-v2.html" class="mobile-dropdown-item-link">Shop 4 Columns</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="product-page.html" class="mobile-dropdown-item-link">Product Description</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="product-page.html" class="mobile-dropdown-item-link">Product Reviews</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="product-page.html" class="mobile-dropdown-item-link">Product Specifications</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="inventory-bag.html" class="mobile-dropdown-item-link">Inventory Bag (Cart)</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="checkout.html" class="mobile-dropdown-item-link">Checkout Page</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="order-confirmation.html" class="mobile-dropdown-item-link">Order Confirmation</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="wishlist.html" class="mobile-dropdown-item-link">Wishlist</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="product-compare.html" class="mobile-dropdown-item-link">Product Compare</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->
            </ul>
            <!-- /MOBILE DROPDOWN -->
          </li>
          <!-- /MOBILE DROPDOWN ITEM -->

          <!-- MOBILE DROPDOWN ITEM -->
          <li class="mobile-dropdown-item">
            <p class="mobile-dropdown-item-link pd-dropdown-handler">Funtendo</p>
            <!-- ARROW ICON -->
            <svg class="arrow-icon medium">
              <use xlink:href="#svg-arrow-medium"></use>
            </svg>
            <!-- /ARROW ICON -->

            <!-- MOBILE DROPDOWN -->
            <ul class="mobile-dropdown pd-dropdown">
              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="shop-v1-grid.html" class="mobile-dropdown-item-link">Shop 3 Columns Grid</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="shop-v1-list.html" class="mobile-dropdown-item-link">Shop 3 Columns List</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="shop-v2.html" class="mobile-dropdown-item-link">Shop 4 Columns</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="product-page.html" class="mobile-dropdown-item-link">Product Description</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="product-page.html" class="mobile-dropdown-item-link">Product Reviews</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="product-page.html" class="mobile-dropdown-item-link">Product Specifications</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="inventory-bag.html" class="mobile-dropdown-item-link">Inventory Bag (Cart)</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="checkout.html" class="mobile-dropdown-item-link">Checkout Page</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="order-confirmation.html" class="mobile-dropdown-item-link">Order Confirmation</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="wishlist.html" class="mobile-dropdown-item-link">Wishlist</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="product-compare.html" class="mobile-dropdown-item-link">Product Compare</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->
            </ul>
            <!-- /MOBILE DROPDOWN -->
          </li>
          <!-- /MOBILE DROPDOWN ITEM -->
        </ul>
        <!-- /MOBILE DROPDOWN -->
      </li>
      <!-- /MOBILE MENU ITEM -->

      <!-- MOBILE MENU ITEM -->
      <li class="mobile-menu-item">
        <p class="mobile-menu-item-link pd-dropdown-handler">
            <img class="widget-option-img user-avatar micro" src="img/users/05.jpg" alt="avatar-01">
            James_Spiegel
        </p>
        <!-- ARROW ICON -->
        <svg class="arrow-icon medium">
          <use xlink:href="#svg-arrow-medium"></use>
        </svg>
        <!-- /ARROW ICON -->

        <!-- MOBILE DROPDOWN -->
        <ul class="mobile-dropdown pd-dropdown">
          <!-- MOBILE DROPDOWN ITEM -->
          <li class="mobile-dropdown-item">
            <p class="mobile-dropdown-item-link pd-dropdown-handler">Main Account</p>
            <!-- ARROW ICON -->
            <svg class="arrow-icon medium">
              <use xlink:href="#svg-arrow-medium"></use>
            </svg>
            <!-- /ARROW ICON -->

            <!-- MOBILE DROPDOWN -->
            <ul class="mobile-dropdown pd-dropdown">
              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="account-settings.html" class="mobile-dropdown-item-link">Account Settings</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="#" class="mobile-dropdown-item-link">Shipping Details</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="#" class="mobile-dropdown-item-link">Billing Details</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="orders-history.html" class="mobile-dropdown-item-link">Orders History</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->
            </ul>
            <!-- /MOBILE DROPDOWN -->
          </li>
          <!-- /MOBILE DROPDOWN ITEM -->

          <!-- MOBILE DROPDOWN ITEM -->
          <li class="mobile-dropdown-item">
            <p class="mobile-dropdown-item-link pd-dropdown-handler">Pixel Forums</p>
            <!-- ARROW ICON -->
            <svg class="arrow-icon medium">
              <use xlink:href="#svg-arrow-medium"></use>
            </svg>
            <!-- /ARROW ICON -->

            <!-- MOBILE DROPDOWN -->
            <ul class="mobile-dropdown pd-dropdown">
              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="profile-summary.html" class="mobile-dropdown-item-link">Summary</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="profile-activity.html" class="mobile-dropdown-item-link">Activity</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="profile-notifications.html" class="mobile-dropdown-item-link">Notifications</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="profile-messages.html" class="mobile-dropdown-item-link">Messages</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="profile-badges.html" class="mobile-dropdown-item-link">Profile Badges</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="profile-settings.html" class="mobile-dropdown-item-link">Settings</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->
            </ul>
            <!-- /MOBILE DROPDOWN -->
          </li>
          <!-- /MOBILE DROPDOWN ITEM -->
        </ul>
        <!-- /MOBILE DROPDOWN -->
      </li>
      <!-- /MOBILE MENU ITEM -->

      <!-- MOBILE MENU ITEM -->
      <li class="mobile-menu-item">
        <a href="wishlist.html" class="mobile-menu-item-link">Wishlist (<span class="quantity">5</span>)</a>
      </li>
      <!-- /MOBILE MENU ITEM -->

      <!-- MOBILE MENU ITEM -->
      <li class="mobile-menu-item">
        <a href="product-compare.html" class="mobile-menu-item-link">Compare (<span class="quantity">4</span>)</a>
      </li>
      <!-- /MOBILE MENU ITEM -->
    </ul>
    <!-- /MOBILE MENU -->
  </div>
  <!-- /MOBILE MENU WRAP -->

  <!-- HEADER WRAP -->
  <div class="header-wrap">
    <!-- HEADER -->
    <div class="header grid-limit">
      <!-- WIDGET SELECTABLES -->
      <div class="widget-selectables">
        <!-- WIDGET OPTIONS WRAP -->
        <div class="widget-options-wrap">
          <!-- CURRENT OPTION -->
          <div id="lang-dropdown-trigger" class="current-option">
             <!-- CURRENT OPTION VALUE -->
            <div id="lang-dropdown-option-value" class="current-option-value">
              <img class="widget-option-img" src="img/flags/flag-us.png" alt="flag-us">
              <p class="widget-option-text">English</p>
            </div>
            <!-- /CURRENT OPTION VALUE -->

            <!-- ARROW ICON -->
            <svg class="arrow-icon">
              <use xlink:href="#svg-arrow"></use>
            </svg>
            <!-- /ARROW ICON -->
          </div>
          <!-- /CURRENT OPTION -->

          <!-- WIDGET OPTIONS -->
          <div id="lang-dropdown" class="widget-options small">
            <!-- WIDGET OPTION -->
            <div class="widget-option">
              <img class="widget-option-img" src="img/flags/flag-us.png" alt="flag-us">
              <p class="widget-option-text">English</p>
            </div>
            <!-- /WIDGET OPTION -->

            <!-- WIDGET OPTION -->
            <div class="widget-option">
              <img class="widget-option-img" src="img/flags/flag-es.png" alt="flag-es">
              <p class="widget-option-text">Spanish</p>
            </div>
            <!-- /WIDGET OPTION -->

            <!-- WIDGET OPTION -->
            <div class="widget-option">
              <img class="widget-option-img" src="img/flags/flag-fr.png" alt="flag-fr">
              <p class="widget-option-text">French</p>
            </div>
            <!-- /WIDGET OPTION -->

            <!-- WIDGET OPTION -->
            <div class="widget-option">
              <img class="widget-option-img" src="img/flags/flag-jp.png" alt="flag-jp">
              <p class="widget-option-text">Japanese</p>
            </div>
            <!-- /WIDGET OPTION -->
          </div>
          <!-- /WIDGET OPTIONS -->
        </div>
        <!-- /WIDGET OPTIONS WRAP -->

        <!-- WIDGET OPTIONS WRAP -->
        <div class="widget-options-wrap">
          <!-- CURRENT OPTION -->
          <div id="curr-dropdown-trigger" class="current-option">
            <p class="widget-option-text currency-text-info">Currency:</p>
            <!-- CURRENT OPTION VALUE -->
            <div id="curr-dropdown-option-value" class="current-option-value highlighted">
              <p class="widget-option-text">U$D</p>
            </div>
            <!-- /CURRENT OPTION VALUE -->

            <!-- ARROW ICON -->
            <svg class="arrow-icon">
              <use xlink:href="#svg-arrow"></use>
            </svg>
            <!-- /ARROW ICON -->
          </div>
          <!-- /CURRENT OPTION -->

          <!-- WIDGET OPTIONS -->
          <div id="curr-dropdown" class="widget-options small short">
            <!-- WIDGET OPTION -->
            <div class="widget-option">
              <p class="widget-option-text">U$D</p>
            </div>
            <!-- /WIDGET OPTION -->

            <!-- WIDGET OPTION -->
            <div class="widget-option">
              <p class="widget-option-text">Euros</p>
            </div>
            <!-- /WIDGET OPTION -->

            <!-- WIDGET OPTION -->
            <div class="widget-option">
              <p class="widget-option-text">Pesos</p>
            </div>
            <!-- /WIDGET OPTION -->
          </div>
          <!-- /WIDGET OPTIONS -->
        </div>
        <!-- /WIDGET OPTIONS WRAP -->
      </div>
      <!-- /WIDGET SELECTABLES -->

      <!-- WIDGET SELECTABLES -->
      <div class="widget-selectables">
        <!-- WIDGET OPTIONS WRAP -->
        <div class="widget-options-wrap">
          <!-- CURRENT OPTION -->
          <div id="account-dropdown-trigger" class="current-option">
            <!-- CURRENT OPTION VALUE -->
            <div class="current-option-value">
              <img class="widget-option-img user-avatar micro" src="img/users/05.jpg" alt="avatar-01">
              <p class="widget-option-text">James_Spiegel</p>
            </div>
            <!-- /CURRENT OPTION VALUE -->

            <!-- ARROW ICON -->
            <svg class="arrow-icon">
              <use xlink:href="#svg-arrow"></use>
            </svg>
            <!-- /ARROW ICON -->
          </div>
          <!-- /CURRENT OPTION -->

          <!-- WIDGET OPTIONS -->
          <div id="account-dropdown" class="widget-options short linkable">
            <!-- WIDGET OPTION HEADING -->
            <div class="widget-option-heading blue">
              <p class="widget-option-text">Main Account</p>
            </div>
            <!-- /WIDGET OPTION HEADING -->

            <!-- WIDGET OPTION -->
            <a href="account-settings.html" class="widget-option">
              <p class="widget-option-text">Account Settings</p>
            </a>
            <!-- /WIDGET OPTION -->

            <!-- WIDGET OPTION -->
            <a href="#" class="widget-option">
              <p class="widget-option-text">Shipping Details</p>
            </a>
            <!-- /WIDGET OPTION -->

            <!-- WIDGET OPTION -->
            <a href="#" class="widget-option">
              <p class="widget-option-text">Billing Details</p>
            </a>
            <!-- /WIDGET OPTION -->

            <!-- WIDGET OPTION -->
            <a href="orders-history.html" class="widget-option">
              <p class="widget-option-text">Orders History</p>
            </a>
            <!-- /WIDGET OPTION -->

            <!-- WIDGET OPTION HEADING -->
            <div class="widget-option-heading red">
              <p class="widget-option-text">Pixel Forums</p>
            </div>
            <!-- /WIDGET OPTION HEADING -->

            <!-- WIDGET OPTION -->
            <a href="profile-summary.html" class="widget-option">
              <p class="widget-option-text">Summary</p>
            </a>
            <!-- /WIDGET OPTION -->

            <!-- WIDGET OPTION -->
            <a href="profile-activity.html" class="widget-option">
              <p class="widget-option-text">Activity</p>
            </a>
            <!-- /WIDGET OPTION -->

            <!-- WIDGET OPTION -->
            <a href="profile-notifications.html" class="widget-option">
              <p class="widget-option-text">Notifications</p>
            </a>
            <!-- /WIDGET OPTION -->

            <!-- WIDGET OPTION -->
            <a href="profile-messages.html" class="widget-option">
              <p class="widget-option-text">Messages</p>
            </a>
            <!-- /WIDGET OPTION -->

            <!-- WIDGET OPTION -->
            <a href="profile-badges.html" class="widget-option">
              <p class="widget-option-text">Profile Badges</p>
            </a>
            <!-- /WIDGET OPTION -->

            <!-- WIDGET OPTION -->
            <a href="profile-settings.html" class="widget-option">
              <p class="widget-option-text">Settings</p>
            </a>
            <!-- /WIDGET OPTION -->
          </div>
          <!-- /WIDGET OPTIONS -->
        </div>
        <!-- /WIDGET OPTIONS WRAP -->

        <!-- WIDGET OPTIONS WRAP -->
        <div class="widget-options-wrap">
          <!-- CURRENT OPTION -->
          <a href="wishlist.html">
          <div class="current-option">
            <!-- CURRENT OPTION VALUE -->
            <div class="current-option-value">
              <i class="icon-heart widget-option-icon"></i>
              <p class="widget-option-text">Wishlist <span class="quantity">(5)</span></p>
            </div>
            <!-- /CURRENT OPTION VALUE -->
          </div>
          </a>
          <!-- /CURRENT OPTION -->
        </div>
        <!-- /WIDGET OPTIONS WRAP -->
        
        <!-- WIDGET OPTIONS WRAP -->
        <div class="widget-options-wrap">
          <!-- CURRENT OPTION -->
          <a href="product-compare.html">
          <div class="current-option">
            <!-- CURRENT OPTION VALUE -->
            <div class="current-option-value">
              <i class="icon-tag widget-option-icon"></i>
              <p class="widget-option-text">Compare <span class="quantity">(2)</span></p>
            </div>
            <!-- /CURRENT OPTION VALUE -->
          </div>
          </a>
          <!-- /CURRENT OPTION -->
        </div>
        <!-- /WIDGET OPTIONS WRAP -->

        <!-- BUTTON -->
        <a href="#" class="button tiny red log-button">
            Logout
            <!-- BUTTON ORNAMENT -->
            <div class="button-ornament">
              <!-- ARROW ICON -->
              <svg class="arrow-icon">
                <use xlink:href="#svg-arrow"></use>
              </svg>
              <!-- /ARROW ICON -->
            </div>
            <!-- /BUTTON ORNAMENT -->
          </a>
          <!-- /BUTTON -->
      </div>
      <!-- /WIDGET SELECTABLES -->
    </div>
    <!-- /HEADER -->
  </div>
  <!-- /HEADER WRAP -->

  <!-- NAVIGATION WRAP -->
  <nav class="navigation-wrap">
    <!-- NAVIGATION -->
    <div class="navigation grid-limit">
      <!-- LOGO -->
      <div class="logo">
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

      <!-- INVENTORY BUTTON -->
      <div class="inventory-button">
        <!-- INVENTORY ICON -->
        <svg class="inventory-icon">
          <use xlink:href="#svg-inventory"></use>
        </svg>
        <!-- /INVENTORY ICON -->

        <!-- INVENTORY ITEM QUANTITY WRAP -->
        <div class="inventory-item-quantity-wrap">
          <p class="inventory-item-quantity">2</p>
        </div>
        <!-- /INVENTORY ITEM QUANTITY WRAP -->
      </div>
      <!-- /INVENTORY BUTTON -->

      <!-- SEARCH BUTTON -->
      <div class="search-button search-popup-open">
        <!-- SEARCH ICON -->
        <svg class="search-icon">
          <use xlink:href="#svg-search"></use>
        </svg>
        <!-- /SEARCH ICON -->
      </div>
      <!-- /SEARCH BUTTON -->

      <!-- MAIN MENU -->
      <ul class="main-menu">
        <!-- MAIN MENU ITEM -->
        <li class="main-menu-item">
          <a href="index.html" class="main-menu-item-link">Home</a>
        </li>
        <!-- /MAIN MENU ITEM -->

        <!-- MAIN MENU ITEM -->
        <li class="main-menu-item">
          <a href="esports-home.html" class="main-menu-item-link">
            eSports
            <!-- SVG ARROW -->
            <svg class="arrow-icon">
              <use xlink:href="#svg-arrow"></use>
            </svg>
            <!-- /SVG ARROW -->
          </a>

          <!-- SUBMENU -->
          <ul class="submenu">
            <!-- SUBMENU ITEM -->
            <li class="submenu-item grid-limit">
              <!-- LINK SECTIONS WRAP -->
              <div class="link-sections-wrap">
                <!-- LINK SECTIONS -->
                <div class="link-sections">
                  <!-- LINK SECTION -->
                  <div class="link-section">
                    <!-- SECTION TITLE WRAP -->
                    <div class="section-title-wrap violet">
                      <h2 class="section-title small">Main Pages</h2>
                      <div class="section-title-separator"></div>
                    </div>
                    <!-- /SECTION TITLE WRAP -->

                    <!-- LINK LIST -->
                    <ul class="link-list medium">
                      <!-- LINK LIST ITEM -->
                      <li class="link-list-item">
                        <a href="esports-home.html">eSports Home</a>
                      </li>
                      <!-- /LINK LIST ITEM -->

                      <!-- LINK LIST ITEM -->
                      <li class="link-list-item">
                        <a href="esports-news.html">eSports News</a>
                      </li>
                      <!-- /LINK LIST ITEM -->

                      <!-- LINK LIST ITEM -->
                      <li class="link-list-item">
                        <a href="esports-post.html">eSports Post Page</a>
                      </li>
                      <!-- /LINK LIST ITEM -->

                      <!-- LINK LIST ITEM -->
                      <li class="link-list-item">
                        <a href="esports-tournament.html">Tournament Page</a>
                      </li>
                      <!-- /LINK LIST ITEM -->
                    </ul>
                    <!-- /LINK LIST -->
                  </div>
                  <!-- /LINK SECTION -->

                  <!-- LINK SECTION -->
                  <div class="link-section">
                    <!-- SECTION TITLE WRAP -->
                    <div class="section-title-wrap violet">
                      <h2 class="section-title small">Match Overviews</h2>
                      <div class="section-title-separator"></div>
                    </div>
                    <!-- /SECTION TITLE WRAP -->

                    <!-- LINK LIST -->
                    <ul class="link-list medium">
                      <!-- LINK LIST ITEM -->
                      <li class="link-list-item">
                        <a href="esports-match-overview-v1.html">Match Overview V1</a>
                      </li>
                      <!-- /LINK LIST ITEM -->

                      <!-- LINK LIST ITEM -->
                      <li class="link-list-item">
                        <a href="esports-match-overview-v2.html">Match Overview V2</a>
                      </li>
                      <!-- /LINK LIST ITEM -->

                      <!-- LINK LIST ITEM -->
                      <li class="link-list-item">
                        <a href="esports-match-overview-v3.html">Match Overview V3</a>
                      </li>
                      <!-- /LINK LIST ITEM -->

                      <!-- LINK LIST ITEM -->
                      <li class="link-list-item">
                        <a href="esports-match-overview-v4.html">Match Overview V4</a>
                      </li>
                      <!-- /LINK LIST ITEM -->
                    </ul>
                    <!-- /LINK LIST -->
                  </div>
                  <!-- /LINK SECTION -->

                  <!-- LINK SECTION -->
                  <div class="link-section">
                    <!-- SECTION TITLE WRAP -->
                    <div class="section-title-wrap violet">
                      <h2 class="section-title small">Teams &amp; Players</h2>
                      <div class="section-title-separator"></div>
                    </div>
                    <!-- /SECTION TITLE WRAP -->

                    <!-- LINK LIST -->
                    <ul class="link-list medium">
                      <!-- LINK LIST ITEM -->
                      <li class="link-list-item">
                        <a href="esports-team.html">eSports Team Page</a>
                      </li>
                      <!-- /LINK LIST ITEM -->

                      <!-- LINK LIST ITEM -->
                      <li class="link-list-item">
                        <a href="esports-player.html">eSports Player Page</a>
                      </li>
                      <!-- /LINK LIST ITEM -->

                      <!-- LINK LIST ITEM -->
                      <li class="link-list-item">
                        <a href="esports-streamers.html">Streamers Page</a>
                      </li>
                      <!-- /LINK LIST ITEM -->

                      <!-- LINK LIST ITEM -->
                      <li class="link-list-item">
                        <a href="esports-calendar.html">Scores with Calendar</a>
                      </li>
                      <!-- /LINK LIST ITEM -->
                    </ul>
                    <!-- /LINK LIST -->
                  </div>
                  <!-- /LINK SECTION -->
                </div>
                <!-- /LINK SECTIONS -->

                <!-- LINK SECTIONS -->
                <div class="link-sections">
                  <!-- LINK SECTION -->
                  <div class="link-section">
                    <!-- SECTION TITLE WRAP -->
                    <div class="section-title-wrap violet">
                      <h2 class="section-title small">Esports Widgets</h2>
                      <div class="section-title-separator"></div>
                    </div>
                    <!-- /SECTION TITLE WRAP -->

                    <!-- LINK LIST -->
                    <ul class="link-list medium">
                      <!-- LINK LIST ITEM -->
                      <li class="link-list-item">
                        <a href="esports-widgets-v1.html">Widgets Page 01</a>
                      </li>
                      <!-- /LINK LIST ITEM -->
                    </ul>
                    <!-- /LINK LIST -->

                    <!-- LINK LIST -->
                    <ul class="link-list medium">
                      <!-- LINK LIST ITEM -->
                      <li class="link-list-item">
                        <a href="esports-widgets-v2.html">Widgets Page 02</a>
                      </li>
                      <!-- /LINK LIST ITEM -->
                    </ul>
                    <!-- /LINK LIST -->

                    <!-- LINK LIST -->
                    <ul class="link-list medium">
                      <!-- LINK LIST ITEM -->
                      <li class="link-list-item">
                        <a href="esports-widgets-v3.html">Widgets Page 03</a>
                      </li>
                      <!-- /LINK LIST ITEM -->
                    </ul>
                    <!-- /LINK LIST -->
                  </div>
                  <!-- /LINK SECTION -->
                </div>
                <!-- /LINK SECTIONS -->

                <!-- LINK SECTIONS -->
                <div class="link-sections">
                  <!-- LINK SECTION -->
                  <div class="link-section full">
                    <!-- SECTION TITLE WRAP -->
                    <div class="section-title-wrap violet">
                      <h2 class="section-title small">Pixel Streamers</h2>
                      <div class="section-title-separator"></div>
                    </div>
                    <!-- /SECTION TITLE WRAP -->

                    <!-- STREAMER AVATARS -->
                    <div class="streamer-avatars">
                      <!-- STREAMER AVATAR -->
                      <div class="streamer-avatar">
                        <a href="esports-streamers.html">
                        <!-- PP HEXAGON -->
                        <div class="pp-hexagon">
                          <!-- HEXAGON ICON -->
                          <svg class="hexagon-icon hexagon-border">
                            <use xlink:href="#svg-hexagon"></use>
                          </svg>
                          <!-- /HEXAGON ICON -->

                          <!-- HEXAGON ICON -->
                          <svg class="hexagon-icon hexagon-fill">
                            <use xlink:href="#svg-hexagon"></use>
                          </svg>
                          <!-- /HEXAGON ICON -->
                        </div>
                        <!-- /PP HEXAGON -->

                        <!-- STREAMER AVATAR IMG WRAP -->
                        <div class="streamer-avatar-img-wrap">
                          <!-- STREAMER AVATAR IMG -->
                          <img class="streamer-avatar-img" src="img/streamers/streamer-hex-01.png" alt="st-avatar-01">
                        </div>
                        <!-- /STREAMER AVATAR IMG WRAP -->
                        </a>
                      </div>
                      <!-- /STREAMER AVATAR -->

                      <!-- STREAMER AVATAR -->
                      <div class="streamer-avatar">
                        <a href="esports-streamers.html">
                        <!-- PP HEXAGON -->
                        <div class="pp-hexagon">
                          <!-- HEXAGON ICON -->
                          <svg class="hexagon-icon hexagon-border">
                            <use xlink:href="#svg-hexagon"></use>
                          </svg>
                          <!-- /HEXAGON ICON -->

                          <!-- HEXAGON ICON -->
                          <svg class="hexagon-icon hexagon-fill">
                            <use xlink:href="#svg-hexagon"></use>
                          </svg>
                          <!-- /HEXAGON ICON -->
                        </div>
                        <!-- /PP HEXAGON -->

                        <!-- STREAMER AVATAR IMG WRAP -->
                        <div class="streamer-avatar-img-wrap">
                          <!-- STREAMER AVATAR IMG -->
                          <img class="streamer-avatar-img" src="img/streamers/streamer-hex-02.png" alt="st-avatar-02">
                        </div>
                        <!-- /STREAMER AVATAR IMG WRAP -->
                        </a>
                      </div>
                      <!-- /STREAMER AVATAR -->

                      <!-- STREAMER AVATAR -->
                      <div class="streamer-avatar">
                        <a href="esports-streamers.html">
                        <!-- PP HEXAGON -->
                        <div class="pp-hexagon">
                          <!-- HEXAGON ICON -->
                          <svg class="hexagon-icon hexagon-border">
                            <use xlink:href="#svg-hexagon"></use>
                          </svg>
                          <!-- /HEXAGON ICON -->

                          <!-- HEXAGON ICON -->
                          <svg class="hexagon-icon hexagon-fill">
                            <use xlink:href="#svg-hexagon"></use>
                          </svg>
                          <!-- /HEXAGON ICON -->
                        </div>
                        <!-- /PP HEXAGON -->

                        <!-- STREAMER AVATAR IMG WRAP -->
                        <div class="streamer-avatar-img-wrap">
                          <!-- STREAMER AVATAR IMG -->
                          <img class="streamer-avatar-img" src="img/streamers/streamer-hex-03.png" alt="st-avatar-03">
                        </div>
                        <!-- /STREAMER AVATAR IMG WRAP -->
                        </a>
                      </div>
                      <!-- /STREAMER AVATAR -->

                      <!-- STREAMER AVATAR -->
                      <div class="streamer-avatar">
                        <a href="esports-streamers.html">
                        <!-- PP HEXAGON -->
                        <div class="pp-hexagon">
                          <!-- HEXAGON ICON -->
                          <svg class="hexagon-icon hexagon-border">
                            <use xlink:href="#svg-hexagon"></use>
                          </svg>
                          <!-- /HEXAGON ICON -->

                          <!-- HEXAGON ICON -->
                          <svg class="hexagon-icon hexagon-fill">
                            <use xlink:href="#svg-hexagon"></use>
                          </svg>
                          <!-- /HEXAGON ICON -->
                        </div>
                        <!-- /PP HEXAGON -->

                        <!-- STREAMER AVATAR IMG WRAP -->
                        <div class="streamer-avatar-img-wrap">
                          <!-- STREAMER AVATAR IMG -->
                          <img class="streamer-avatar-img" src="img/streamers/streamer-hex-04.png" alt="st-avatar-04">
                        </div>
                        <!-- /STREAMER AVATAR IMG WRAP -->
                        </a>
                      </div>
                      <!-- /STREAMER AVATAR -->

                      <!-- STREAMER AVATAR -->
                      <div class="streamer-avatar">
                        <a href="esports-streamers.html">
                        <!-- PP HEXAGON -->
                        <div class="pp-hexagon">
                          <!-- HEXAGON ICON -->
                          <svg class="hexagon-icon hexagon-border">
                            <use xlink:href="#svg-hexagon"></use>
                          </svg>
                          <!-- /HEXAGON ICON -->

                          <!-- HEXAGON ICON -->
                          <svg class="hexagon-icon hexagon-fill">
                            <use xlink:href="#svg-hexagon"></use>
                          </svg>
                          <!-- /HEXAGON ICON -->
                        </div>
                        <!-- /PP HEXAGON -->

                        <!-- STREAMER AVATAR IMG WRAP -->
                        <div class="streamer-avatar-img-wrap">
                          <!-- STREAMER AVATAR IMG -->
                          <img class="streamer-avatar-img" src="img/streamers/streamer-hex-05.png" alt="st-avatar-05">
                        </div>
                        <!-- /STREAMER AVATAR IMG WRAP -->
                        </a>
                      </div>
                      <!-- /STREAMER AVATAR -->
                    </div>
                    <!-- /STREAMER AVATARS -->
                  </div>
                  <!-- /LINK SECTION -->
                </div>
                <!-- /LINK SECTIONS -->
              </div>
              <!-- /LINK SECTIONS WRAP -->

              <!-- LINK SECTIONS WRAP -->
              <div class="link-sections-wrap">
                <!-- LINK SECTIONS -->
                <div class="link-sections">
                  <!-- LINK SECTION -->
                  <div class="link-section">
                    <!-- SECTION TITLE WRAP -->
                    <div class="section-title-wrap violet">
                      <h2 class="section-title small">Featured Match</h2>
                      <div class="section-title-separator"></div>
                    </div>
                    <!-- /SECTION TITLE WRAP -->

                    <!-- WIDGET MATCH BOX -->
                    <div class="widget-match-box">
                      <!-- WIDGET TITLE WRAP -->
                      <div class="widget-title-wrap">
                        <h6 class="widget-title">Xenowatch league finals</h6>
                        <p class="widget-text">August 28th, 2018</p>
                      </div>
                      <!-- /WIDGET TITLE WRAP -->

                      <!-- WIDGET TEAM VS -->
                      <div class="widget-team-vs">
                        <!-- WIDGET TEAM VS ITEM -->
                        <div class="widget-team-vs-item">
                          <!-- TEAM INFO WRAP -->
                          <div class="team-info-wrap medium">
                            <!-- TEAM LOGO -->
                            <img class="team-logo" src="img/teams/logos/01.png" alt="logo-01">
                            <!-- /TEAM LOGO -->

                            <!-- TEAM INFO -->
                            <div class="team-info">
                              <!-- TEAM NAME -->
                              <p class="team-name">The Lone Wolves</p>
                              <!-- /TEAM NAME -->

                              <!-- TEAM COUNTRY -->
                              <p class="team-country">United States</p>
                              <!-- /TEAM COUNTRY -->
                            </div>
                            <!-- /TEAM INFO -->
                          </div>
                          <!-- /TEAM INFO WRAP -->

                          <!-- TEAM SCORE -->
                          <p class="team-score">12</p>
                          <!-- /TEAM SCORE -->
                        </div>
                        <!-- /WIDGET TEAM VS ITEM -->

                        <!-- WIDGET TEAM VS ITEM -->
                        <div class="widget-team-vs-item">
                          <!-- TEAM INFO WRAP -->
                          <div class="team-info-wrap medium">
                            <!-- TEAM LOGO -->
                            <img class="team-logo" src="img/teams/logos/02.png" alt="logo-02">
                            <!-- /TEAM LOGO -->

                            <!-- TEAM INFO -->
                            <div class="team-info">
                              <!-- TEAM NAME -->
                              <p class="team-name">Raging Rhinos</p>
                              <!-- /TEAM NAME -->

                              <!-- TEAM COUNTRY -->
                              <p class="team-country">South Africa</p>
                              <!-- /TEAM COUNTRY -->
                            </div>
                            <!-- /TEAM INFO -->
                          </div>
                          <!-- /TEAM INFO WRAP -->

                          <!-- TEAM SCORE -->
                          <p class="team-score">10</p>
                          <!-- /TEAM SCORE -->
                        </div>
                        <!-- /WIDGET TEAM VS ITEM -->
                      </div>
                      <!-- /WIDGET TEAM VS -->
                    </div>
                    <!-- /WIDGET MATCH BOX -->

                    <!-- WIDGET MATCH BOX -->
                    <div class="widget-match-box">
                      <!-- WIDGET TITLE WRAP -->
                      <div class="widget-title-wrap">
                        <!-- WIDGET TITLE -->
                        <h6 class="widget-title">Match Stats</h6>
                        <!-- /WIDGET TITLE -->

                        <!-- STATS REFERENCE -->
                        <div class="stats-reference">
                          <!-- STAT REFERENCE -->
                          <div class="stat-reference blue">
                            <!-- STAT REFERENCE TEXT -->
                            <p class="stat-reference-text">TLW</p>
                            <!-- /STAT REFERENCE TEXT -->
                          </div>
                          <!-- /STAT REFERENCE -->

                          <!-- STAT REFERENCE -->
                          <div class="stat-reference yellow">
                            <!-- STAT REFERENCE TEXT -->
                            <p class="stat-reference-text">RRH</p>
                            <!-- /STAT REFERENCE TEXT -->
                          </div>
                          <!-- /STAT REFERENCE -->
                        </div>
                        <!-- /STATS REFERENCE -->
                      </div>
                      <!-- /WIDGET TITLE WRAP -->

                      <!-- WIDGET TEAM STATS -->
                      <div class="widget-team-stats">
                        <!-- PROGRESS STAT WRAP -->
                        <div class="progress-stat-wrap">
                          <!-- BAR PROGRESS INFO -->
                          <p class="bar-progress-info">Total Kills</p>
                          <!-- PROGRESS BAR WRAP -->
                          <div id="mn-pg-1" class="progress-bar-wrap">
                            <div class="bar-progress-wrap left">
                              <p id="tlw-kills-stat" class="bar-progress-text"></p>
                            </div>
                            <div class="bar-progress-wrap right">
                              <p id="rrh-kills-stat" class="bar-progress-text"></p>
                            </div>
                          </div>
                          <!-- /PROGRESS BAR WRAP -->
                        </div>
                        <!-- /PROGRESS STAT WRAP -->

                        <!-- PROGRESS STAT WRAP -->
                        <div class="progress-stat-wrap">
                          <!-- BAR PROGRESS INFO -->
                          <p class="bar-progress-info">Total Deaths</p>
                          <!-- PROGRESS BAR WRAP -->
                          <div id="mn-pg-2" class="progress-bar-wrap">
                            <div class="bar-progress-wrap left">
                              <p id="tlw-deaths-stat" class="bar-progress-text"></p>
                            </div>
                            <div class="bar-progress-wrap right">
                              <p id="rrh-deaths-stat" class="bar-progress-text"></p>
                            </div>
                          </div>
                          <!-- /PROGRESS BAR WRAP -->
                        </div>
                        <!-- /PROGRESS STAT WRAP -->

                        <!-- PROGRESS STAT WRAP -->
                        <div class="progress-stat-wrap">
                          <!-- BAR PROGRESS INFO -->
                          <p class="bar-progress-info">Total Assists</p>
                          <!-- PROGRESS BAR WRAP -->
                          <div id="mn-pg-3" class="progress-bar-wrap">
                            <div class="bar-progress-wrap left">
                              <p id="tlw-assists-stat" class="bar-progress-text"></p>
                            </div>
                            <div class="bar-progress-wrap right">
                              <p id="rrh-assists-stat" class="bar-progress-text"></p>
                            </div>
                          </div>
                          <!-- /PROGRESS BAR WRAP -->
                        </div>
                        <!-- /PROGRESS STAT WRAP -->
                      </div>
                      <!-- /WIDGET TEAM STATS -->
                    </div>
                    <!-- /WIDGET MATCH BOX -->
                  </div>
                  <!-- /LINK SECTION -->
                </div>
                <!-- /LINK SECTIONS -->
              </div>
              <!-- /LINK SECTIONS WRAP -->

              <!-- LINK SECTIONS WRAP -->
              <div class="link-sections-wrap">
                <!-- LINK SECTIONS -->
                <div class="link-sections">
                  <!-- LINK SECTION -->
                  <div class="link-section">
                    <!-- SECTION TITLE WRAP -->
                    <div class="section-title-wrap violet">
                      <h2 class="section-title small">Featured Articles</h2>
                      <div class="section-title-separator"></div>
                    </div>
                    <!-- /SECTION TITLE WRAP -->

                    <!-- POST PREVIEW SHOWCASE -->
                    <div class="post-preview-showcase grid-1col gutter-small">
                      <!-- POST PREVIEW -->
                      <div class="post-preview tiny e-sport">
                        <!-- POST PREVIEW IMG WRAP -->
                        <a href="esports-post.html">
                          <div class="post-preview-img-wrap">
                            <!-- POST PREVIEW IMG -->
                            <figure class="post-preview-img liquid">
                              <img src="img/posts/36.jpg" alt="post-36">
                            </figure>
                            <!-- /POST PREVIEW IMG -->
                          </div>
                        </a>
                        <!-- /POST PREVIEW IMG WRAP -->
                  
                        <!-- POST PREVIEW TITLE -->
                        <a href="esports-post.html" class="post-preview-title">Gwen Parker is leading her team to the semifinals</a>
                        <!-- POST AUTHOR INFO -->
                        <div class="post-author-info-wrap">
                          <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Dexter</a><span class="separator">|</span>Dec 15th, 2018</p>
                        </div>
                        <!-- /POST AUTHOR INFO -->
                      </div>
                      <!-- /POST PREVIEW -->

                      <!-- POST PREVIEW -->
                      <div class="post-preview tiny e-sport">
                        <!-- POST PREVIEW IMG WRAP -->
                        <a href="esports-post.html">
                          <div class="post-preview-img-wrap">
                            <!-- POST PREVIEW IMG -->
                            <figure class="post-preview-img liquid">
                              <img src="img/posts/38.jpg" alt="post-38">
                            </figure>
                            <!-- /POST PREVIEW IMG -->
                          </div>
                        </a>
                        <!-- /POST PREVIEW IMG WRAP -->
                  
                        <!-- POST PREVIEW TITLE -->
                        <a href="esports-post.html" class="post-preview-title">Pro Soccer 2018 world league kicked off today!</a>
                        <!-- POST AUTHOR INFO -->
                        <div class="post-author-info-wrap">
                          <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Faye V.</a><span class="separator">|</span>Dec 15th, 2018</p>
                        </div>
                        <!-- /POST AUTHOR INFO -->
                      </div>
                      <!-- /POST PREVIEW -->

                      <!-- POST PREVIEW -->
                      <div class="post-preview tiny e-sport">
                        <!-- POST PREVIEW IMG WRAP -->
                        <a href="esports-post.html">
                          <div class="post-preview-img-wrap">
                            <!-- POST PREVIEW IMG -->
                            <figure class="post-preview-img liquid">
                              <img src="img/posts/37.jpg" alt="post-37">
                            </figure>
                            <!-- /POST PREVIEW IMG -->
                          </div>
                        </a>
                        <!-- /POST PREVIEW IMG WRAP -->
                  
                        <!-- POST PREVIEW TITLE -->
                        <a href="esports-post.html" class="post-preview-title">Last night the wolves beat the rhinos 12-10</a>
                        <!-- POST AUTHOR INFO -->
                        <div class="post-author-info-wrap">
                          <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Faye V.</a><span class="separator">|</span>Dec 15th, 2018</p>
                        </div>
                        <!-- /POST AUTHOR INFO -->
                      </div>
                      <!-- /POST PREVIEW -->

                      <!-- POST PREVIEW -->
                      <div class="post-preview tiny e-sport">
                        <!-- POST PREVIEW IMG WRAP -->
                        <a href="esports-post.html">
                          <div class="post-preview-img-wrap">
                            <!-- POST PREVIEW IMG -->
                            <figure class="post-preview-img liquid">
                              <img src="img/posts/39.jpg" alt="post-39">
                            </figure>
                            <!-- /POST PREVIEW IMG -->
                          </div>
                        </a>
                        <!-- /POST PREVIEW IMG WRAP -->
                  
                        <!-- POST PREVIEW TITLE -->
                        <a href="esports-post.html" class="post-preview-title">We had an interview with the great Emily Danniels</a>
                        <!-- POST AUTHOR INFO -->
                        <div class="post-author-info-wrap">
                          <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Vellatrix</a><span class="separator">|</span>Dec 15th, 2018</p>
                        </div>
                        <!-- /POST AUTHOR INFO -->
                      </div>
                      <!-- /POST PREVIEW -->

                      <!-- POST PREVIEW -->
                      <div class="post-preview tiny e-sport">
                        <!-- POST PREVIEW IMG WRAP -->
                        <a href="esports-post.html">
                          <div class="post-preview-img-wrap">
                            <!-- POST PREVIEW IMG -->
                            <figure class="post-preview-img liquid">
                              <img src="img/posts/40.jpg" alt="post-40">
                            </figure>
                            <!-- /POST PREVIEW IMG -->
                          </div>
                        </a>
                        <!-- /POST PREVIEW IMG WRAP -->
                  
                        <!-- POST PREVIEW TITLE -->
                        <a href="esports-post.html" class="post-preview-title">The Siberian Tigers arrived at New York for the finals</a>
                        <!-- POST AUTHOR INFO -->
                        <div class="post-author-info-wrap">
                          <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Vellatrix</a><span class="separator">|</span>Dec 15th, 2018</p>
                        </div>
                        <!-- /POST AUTHOR INFO -->
                      </div>
                      <!-- /POST PREVIEW -->
                    </div>
                    <!-- /POST PREVIEW SHOWCASE -->
                  </div>
                  <!-- /LINK SECTION -->
                </div>
                <!-- /LINK SECTIONS -->
              </div>
              <!-- /LINK SECTIONS WRAP -->
            </li>
            <!-- /SUBMENU ITEM -->
          </ul>
          <!-- /SUBMENU -->
        </li>
        <!-- /MAIN MENU ITEM -->

        <!-- MAIN MENU ITEM -->
        <li class="main-menu-item">
          <a href="news-v1.html" class="main-menu-item-link">News</a>
        </li>
        <!-- /MAIN MENU ITEM -->

        <!-- MAIN MENU ITEM -->
        <li class="main-menu-item">
          <a href="news-v2.html" class="main-menu-item-link">Reviews</a>
        </li>
        <!-- /MAIN MENU ITEM -->

        <!-- MAIN MENU ITEM -->
        <li class="main-menu-item">
          <a href="#" class="main-menu-item-link">
            Features
            <!-- SVG ARROW -->
            <svg class="arrow-icon">
              <use xlink:href="#svg-arrow"></use>
            </svg>
            <!-- /SVG ARROW -->
          </a>

          <!-- SUBMENU -->
          <ul class="submenu void">
            <!-- SUBMENU ITEM -->
            <li class="submenu-item padded">
              <!-- LINK SECTIONS -->
              <div class="link-sections">
                <!-- LINK SECTION -->
                <div class="link-section">
                  <!-- SECTION TITLE WRAP -->
                  <div class="section-title-wrap blue">
                    <h2 class="section-title small">Pixel Main Features</h2>
                    <div class="section-title-separator"></div>
                  </div>
                  <!-- /SECTION TITLE WRAP -->

                  <!-- LINK LIST -->
                  <ul class="link-list">
                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="index.html">Main Homepage</a>
                    </li>
                    <!-- /LINK LIST ITEM -->

                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="home-v2.html">Homepage V2</a>
                    </li>
                    <!-- /LINK LIST ITEM -->

                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="home-v3.html">Homepage V3</a>
                    </li>
                    <!-- /LINK LIST ITEM -->

                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="news-v1.html">News Page V1</a>
                    </li>
                    <!-- /LINK LIST ITEM -->

                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="news-v2.html">News Page V2</a>
                    </li>
                    <!-- /LINK LIST ITEM -->

                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="news-v3.html">News Page V3</a>
                    </li>
                    <!-- /LINK LIST ITEM -->

                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="news-v4.html">News Page V4</a>
                    </li>
                    <!-- /LINK LIST ITEM -->
                  </ul>
                  <!-- /LINK LIST -->

                  <!-- LINK LIST -->
                  <ul class="link-list">
                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="post-v1.html">Post Page V1</a>
                    </li>
                    <!-- /LINK LIST ITEM -->

                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="post-v2.html">Post Page V2</a>
                    </li>
                    <!-- /LINK LIST ITEM -->

                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="post-v3.html">Post Page V3</a>
                    </li>
                    <!-- /LINK LIST ITEM -->

                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="post-v4.html">Post Page V4</a>
                    </li>
                    <!-- /LINK LIST ITEM -->

                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="browse-videos.html">Browse Videos</a>
                    </li>
                    <!-- /LINK LIST ITEM -->

                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="post-video.html">Video Post Page</a>
                    </li>
                    <!-- /LINK LIST ITEM -->

                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="search-results.html">Search Results</a>
                    </li>
                    <!-- /LINK LIST ITEM -->
                  </ul>
                  <!-- /LINK LIST -->

                  <!-- LINK LIST -->
                  <ul class="link-list">
                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="calendar.html">Events Calendar</a>
                    </li>
                    <!-- /LINK LIST ITEM -->

                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="event.html">Open Event</a>
                    </li>
                    <!-- /LINK LIST ITEM -->

                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="404.html">404 Error Page</a>
                    </li>
                    <!-- /LINK LIST ITEM -->

                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="shortcodes.html">Shortcodes</a>
                    </li>
                    <!-- /LINK LIST ITEM -->

                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="menu-dropdowns.html">Menu &amp; Dropdowns</a>
                    </li>
                    <!-- /LINK LIST ITEM -->

                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="headers-dividers.html">Headers &amp; Dividers</a>
                    </li>
                    <!-- /LINK LIST ITEM -->

                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="pixel-popups.html">Pixel Popups</a>
                    </li>
                    <!-- /LINK LIST ITEM -->
                  </ul>
                  <!-- /LINK LIST -->
                </div>
                <!-- /LINK SECTION -->

                <!-- LINK SECTION -->
                <div class="link-section">
                  <!-- SECTION TITLE WRAP -->
                  <div class="section-title-wrap blue">
                    <h2 class="section-title small">Account &amp; Company</h2>
                    <div class="section-title-separator"></div>
                  </div>
                  <!-- /SECTION TITLE WRAP -->

                  <!-- LINK LIST -->
                  <ul class="link-list">
                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="login-register.html">Login &amp; Register</a>
                    </li>
                    <!-- /LINK LIST ITEM -->

                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="login-register-popups.html">Login &amp; Register Popups</a>
                    </li>
                    <!-- /LINK LIST ITEM -->

                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="account-settings.html">Account Settings</a>
                    </li>
                    <!-- /LINK LIST ITEM -->

                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="orders-history.html">Account Orders</a>
                    </li>
                    <!-- /LINK LIST ITEM -->

                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="faq.html">FAQs Page</a>
                    </li>
                    <!-- /LINK LIST ITEM -->

                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="contact.html">Contact Page</a>
                    </li>
                    <!-- /LINK LIST ITEM -->

                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="sponsors.html">Sponsors Page</a>
                    </li>
                    <!-- /LINK LIST ITEM -->
                  </ul>
                  <!-- /LINK LIST -->
                </div>
                <!-- /LINK SECTION -->

                <!-- LINK SECTION -->
                <div class="link-section">
                  <!-- SECTION TITLE WRAP -->
                  <div class="section-title-wrap red">
                    <h2 class="section-title small">Pixel Forums</h2>
                    <div class="section-title-separator"></div>
                  </div>
                  <!-- /SECTION TITLE WRAP -->

                  <!-- LINK LIST -->
                  <ul class="link-list">
                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="forum.html">Main Page</a>
                    </li>
                    <!-- /LINK LIST ITEM -->

                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="forum-categories.html">Category Page</a>
                    </li>
                    <!-- /LINK LIST ITEM -->

                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="topic.html">Main Topic</a>
                    </li>
                    <!-- /LINK LIST ITEM -->

                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="forum-badges.html">Badges Big &amp; Small</a>
                    </li>
                    <!-- /LINK LIST ITEM -->

                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="profile-summary.html">Profile Summary</a>
                    </li>
                    <!-- /LINK LIST ITEM -->

                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="profile-activity.html">Profile Activity</a>
                    </li>
                    <!-- /LINK LIST ITEM -->

                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="profile-notifications.html">Profile Notifications</a>
                    </li>
                    <!-- /LINK LIST ITEM -->
                  </ul>
                  <!-- /LINK LIST -->

                  <!-- LINK LIST -->
                  <ul class="link-list">
                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="profile-messages.html">Profile Messages</a>
                    </li>
                    <!-- /LINK LIST ITEM -->

                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="profile-badges.html">Profile Badges</a>
                    </li>
                    <!-- /LINK LIST ITEM -->

                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="profile-settings.html">Profile Settings</a>
                    </li>
                    <!-- /LINK LIST ITEM -->

                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="forum-search-results.html">Forum Results</a>
                    </li>
                    <!-- /LINK LIST ITEM -->
                  </ul>
                  <!-- /LINK LIST -->
                </div>
                <!-- /LINK SECTION -->
              </div>
              <!-- /LINK SECTIONS -->

              <!-- LINE SEPARATOR -->
              <div class="line-separator"></div>

              <!-- NEWS ITEMS PREVIEW -->
              <div class="news-items-preview">
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
                  <a href="news-v1.html" class="tag-ornament">Gaming News</a>
                  <!-- /TAG ORNAMENT -->
            
                  <!-- POST PREVIEW TITLE -->
                  <a href="post-v1.html" class="post-preview-title">New "Rizen" game is gonna be released in summer 2019</a>
                  <!-- POST AUTHOR INFO -->
                  <div class="post-author-info-wrap">
                    <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Vellatrix</a><span class="separator">|</span>December 15th, 2018</p>
                  </div>
                  <!-- /POST AUTHOR INFO -->
                  <!-- POST PREVIEW TEXT -->
                  <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur bere adipisicing elit, sed do eiusmod por lorem incididunt ut labore.</p>
                </div>
                <!-- /POST PREVIEW -->

                <!-- POST PREVIEW -->
                <div class="post-preview game-review">
                  <!-- POST PREVIEW IMG WRAP -->
                  <a href="post-v2.html">
                    <div class="post-preview-img-wrap">
                      <!-- POST PREVIEW IMG -->
                      <figure class="post-preview-img liquid">
                        <img src="img/posts/08.jpg" alt="post-08">
                      </figure>
                      <!-- /POST PREVIEW IMG -->

                      <!-- REVIEW RATING -->
                      <div class="review-rating">
                        <div id="menu-rate-08-1" class="arc small"></div>
                      </div>
                      <!-- /REVIEW RATING -->
                    </div>
                  </a>
                  <!-- /POST PREVIEW IMG WRAP -->
            
                  <!-- TAG ORNAMENT -->
                  <a href="news-v2.html" class="tag-ornament">Game Reviews</a>
                  <!-- /TAG ORNAMENT -->
            
                  <!-- POST PREVIEW TITLE -->
                  <a href="post-v2.html" class="post-preview-title">The new mecha cyborg game is breaking barriers</a>
                  <!-- POST AUTHOR INFO -->
                  <div class="post-author-info-wrap">
                    <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Vellatrix</a><span class="separator">|</span>December 15th, 2018</p>
                  </div>
                  <!-- /POST AUTHOR INFO -->
                  <!-- POST PREVIEW TEXT -->
                  <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur bere adipisicing elit, sed do eiusmod por lorem incididunt ut labore.</p>
                </div>
                <!-- /POST PREVIEW -->

                <!-- POST PREVIEW -->
                <div class="post-preview e-sport">
                  <!-- POST PREVIEW IMG WRAP -->
                  <a href="esports-post.html">
                    <div class="post-preview-img-wrap">
                      <!-- POST PREVIEW IMG -->
                      <figure class="post-preview-img liquid">
                        <img src="img/posts/38.jpg" alt="post-38">
                      </figure>
                      <!-- /POST PREVIEW IMG -->
                    </div>
                  </a>
                  <!-- /POST PREVIEW IMG WRAP -->
            
                  <!-- TAG ORNAMENT -->
                  <a href="esports-news.html" class="tag-ornament">Esports</a>
                  <!-- /TAG ORNAMENT -->
            
                  <!-- POST PREVIEW TITLE -->
                  <a href="esports-post.html" class="post-preview-title">Pro Soccer 2017 world league kicked off today!</a>
                  <!-- POST AUTHOR INFO -->
                  <div class="post-author-info-wrap">
                    <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Faye V.</a><span class="separator">|</span>December 15th, 2018</p>
                  </div>
                  <!-- /POST AUTHOR INFO -->
                  <!-- POST PREVIEW TEXT -->
                  <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur bere adipisicing elit, sed do eiusmod por lorem incididunt ut labore.</p>
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
                  <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur bere adipisicing elit, sed do eiusmod por lorem incididunt ut labore.</p>
                </div>
                <!-- /POST PREVIEW -->
              </div>
              <!-- /NEWS ITEMS PREVIEW -->
            </li>
            <!-- /SUBMENU ITEM -->
          </ul>
          <!-- /SUBMENU -->
        </li>
        <!-- /MAIN MENU ITEM -->

        <!-- MAIN MENU ITEM -->
        <li class="main-menu-item">
          <a href="shop-v1-grid.html" class="main-menu-item-link">
            Shop
          <!-- SVG ARROW -->
          <svg class="arrow-icon">
            <use xlink:href="#svg-arrow"></use>
          </svg>
          <!-- /SVG ARROW -->
          </a>

          <!-- SUBMENU -->
          <ul class="submenu void">
            <!-- SUBMENU ITEM -->
            <li class="submenu-item v2">
              <!-- SUBMENU ITEM SLIDER -->
              <div id="submenu-slider-1" class="submenu-slider">
                <!-- DROPDOWN LIST -->
                <ul class="dropdown-list submenu-slider-options">
                  <!-- DROPDOWN LIST ITEM -->
                  <li class="dropdown-list-item">
                    <p class="dropdown-list-item-link">New Releases</p>
                    <!-- ARROW ICON -->
                    <svg class="arrow-icon medium">
                      <use xlink:href="#svg-arrow-medium"></use>
                    </svg>
                    <!-- /ARROW ICON -->
                  </li>
                  <!-- /DROPDOWN LIST ITEM -->

                  <!-- DROPDOWN LIST ITEM -->
                  <li class="dropdown-list-item">
                    <p class="dropdown-list-item-link">Shop Features</p>
                    <!-- ARROW ICON -->
                    <svg class="arrow-icon medium">
                      <use xlink:href="#svg-arrow-medium"></use>
                    </svg>
                    <!-- /ARROW ICON -->
                  </li>
                  <!-- /DROPDOWN LIST ITEM -->

                  <!-- DROPDOWN LIST ITEM -->
                  <li class="dropdown-list-item">
                    <p class="dropdown-list-item-link">Powerstation</p>
                    <!-- ARROW ICON -->
                    <svg class="arrow-icon medium">
                      <use xlink:href="#svg-arrow-medium"></use>
                    </svg>
                    <!-- /ARROW ICON -->
                  </li>
                  <!-- /DROPDOWN LIST ITEM -->

                  <!-- DROPDOWN LIST ITEM -->
                  <li class="dropdown-list-item">
                    <p class="dropdown-list-item-link">Funtendo</p>
                    <!-- ARROW ICON -->
                    <svg class="arrow-icon medium">
                      <use xlink:href="#svg-arrow-medium"></use>
                    </svg>
                    <!-- /ARROW ICON -->
                  </li>
                  <!-- /DROPDOWN LIST ITEM -->

                  <!-- DROPDOWN LIST ITEM -->
                  <li class="dropdown-list-item">
                    <p class="dropdown-list-item-link">X-Rock</p>
                    <!-- ARROW ICON -->
                    <svg class="arrow-icon medium">
                      <use xlink:href="#svg-arrow-medium"></use>
                    </svg>
                    <!-- /ARROW ICON -->
                  </li>
                  <!-- /DROPDOWN LIST ITEM -->

                  <!-- DROPDOWN LIST ITEM -->
                  <li class="dropdown-list-item">
                    <p class="dropdown-list-item-link">Clothing &amp; Hats</p>
                    <!-- ARROW ICON -->
                    <svg class="arrow-icon medium">
                      <use xlink:href="#svg-arrow-medium"></use>
                    </svg>
                    <!-- /ARROW ICON -->
                  </li>
                  <!-- /DROPDOWN LIST ITEM -->

                  <!-- DROPDOWN LIST ITEM -->
                  <li class="dropdown-list-item">
                    <p class="dropdown-list-item-link">Merchandise</p>
                    <!-- ARROW ICON -->
                    <svg class="arrow-icon medium">
                      <use xlink:href="#svg-arrow-medium"></use>
                    </svg>
                    <!-- /ARROW ICON -->
                  </li>
                  <!-- /DROPDOWN LIST ITEM -->
                </ul>
                <!-- /DROPDOWN LIST -->

                <!-- SUBMENU SLIDER ITEMS WRAP -->
                <div class="submenu-slider-items-wrap">
                  <!-- SUBMENU SLIDER ITEMS -->
                  <div class="submenu-slider-items">
                    <!-- SUBMENU SLIDER ITEM -->
                    <div class="submenu-slider-item submenu-slider-item-1">
                      <!-- PRODUCT PREVIEW -->
                      <div class="product-preview short">
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

                        <!-- ADD TO BAG -->
                        <div class="button small violet add-to-bag">Add to bag</div>
                      </div>
                      <!-- /PRODUCT PREVIEW -->

                      <!-- LINK SECTIONS -->
                      <div class="link-sections">
                        <!-- LINK SECTION -->
                        <div class="link-section">
                          <!-- SECTION TITLE WRAP -->
                          <div class="section-title-wrap violet">
                            <h2 class="section-title small">New Releases</h2>
                            <div class="section-title-separator"></div>
                          </div>
                          <!-- /SECTION TITLE WRAP -->

                          <!-- LINK LIST -->
                          <ul class="link-list">
                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="shop-v1-grid.html">Shop 3 Columns Grid</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="shop-v1-list.html">Shop 3 Columns List</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="shop-v2.html">Shop 4 Columns</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="product-page.html">Product Description</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="product-page.html">Product Reviews</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="product-page.html">Product Specifications</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="inventory-bag.html">Inventory Bag (Cart)</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="checkout.html">Checkout Page</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="order-confirmation.html">Order Confirmation</a>
                            </li>
                            <!-- /LINK LIST ITEM -->
                          </ul>
                          <!-- /LINK LIST -->

                          <!-- LINK LIST -->
                          <ul class="link-list">
                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="wishlist.html">Wishlist</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="product-compare.html">Product Compare</a>
                            </li>
                            <!-- /LINK LIST ITEM -->
                          </ul>
                          <!-- /LINK LIST -->
                        </div>
                        <!-- /LINK SECTION -->
                      </div>
                      <!-- /LINK SECTIONS -->
                    </div>
                    <!-- /SUBMENU SLIDER ITEM -->

                    <!-- SUBMENU SLIDER ITEM -->
                    <div class="submenu-slider-item submenu-slider-item-2">
                      <!-- PRODUCT PREVIEW -->
                      <div class="product-preview short">
                        <!-- PRODUCT PREVIEW IMG WRAP -->
                        <div class="product-preview-img-wrap">
                          <!-- PRODUCT PREVIEW IMG -->
                          <a href="product-page.html">
                            <figure class="product-preview-img liquid">
                              <img src="img/products/11.jpg" alt="product-11">
                            </figure>
                          </a>
                          <!-- /PRODUCT PREVIEW IMG -->
                        </div>
                        <!-- /PRODUCT PREVIEW IMG WRAP -->

                        <!-- PRODUCT PREVIEW TITLE -->
                        <a href="product-page.html" class="product-preview-title">Diamond men's black...</a>
                        <!-- PRODUCT PREVIEW INFO -->
                        <div class="product-preview-info">
                          <!-- PRODUCT PREVIEW CATEGORY -->
                          <a href="shop-v1-grid.html" class="product-preview-category">Clothing &amp; Hats</a>
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
                          <p class="product-preview-price current"><span class="currency">$</span>16.00</p>
                        </div>
                        <!-- /PRODUCT PRICE WRAP -->

                        <!-- ADD TO BAG -->
                        <div class="button small violet add-to-bag">Add to bag</div>
                      </div>
                      <!-- /PRODUCT PREVIEW -->

                      <!-- LINK SECTIONS -->
                      <div class="link-sections">
                        <!-- LINK SECTION -->
                        <div class="link-section">
                          <!-- SECTION TITLE WRAP -->
                          <div class="section-title-wrap violet">
                            <h2 class="section-title small">Shop Features</h2>
                            <div class="section-title-separator"></div>
                          </div>
                          <!-- /SECTION TITLE WRAP -->

                          <!-- LINK LIST -->
                          <ul class="link-list">
                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="shop-v1-grid.html">Shop 3 Columns Grid</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="shop-v1-list.html">Shop 3 Columns List</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="shop-v2.html">Shop 4 Columns</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="product-page.html">Product Description</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="product-page.html">Product Reviews</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="product-page.html">Product Specifications</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="inventory-bag.html">Inventory Bag (Cart)</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="checkout.html">Checkout Page</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="order-confirmation.html">Order Confirmation</a>
                            </li>
                            <!-- /LINK LIST ITEM -->
                          </ul>
                          <!-- /LINK LIST -->

                          <!-- LINK LIST -->
                          <ul class="link-list">
                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="wishlist.html">Wishlist</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="product-compare.html">Product Compare</a>
                            </li>
                            <!-- /LINK LIST ITEM -->
                          </ul>
                          <!-- /LINK LIST -->
                        </div>
                        <!-- /LINK SECTION -->
                      </div>
                      <!-- /LINK SECTIONS -->
                    </div>
                    <!-- /SUBMENU SLIDER ITEM -->

                    <!-- SUBMENU SLIDER ITEM -->
                    <div class="submenu-slider-item submenu-slider-item-3">
                      <!-- PRODUCT PREVIEW -->
                      <div class="product-preview short">
                        <!-- PRODUCT PREVIEW IMG WRAP -->
                        <div class="product-preview-img-wrap">
                          <!-- PRODUCT PREVIEW IMG -->
                          <a href="product-page.html">
                            <figure class="product-preview-img liquid">
                              <img src="img/products/09.jpg" alt="product-09">
                            </figure>
                          </a>
                          <!-- /PRODUCT PREVIEW IMG -->
                        </div>
                        <!-- /PRODUCT PREVIEW IMG WRAP -->

                        <!-- PRODUCT PREVIEW TITLE -->
                        <a href="product-page.html" class="product-preview-title">Galaxy Adventure RX...</a>
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
                          <p class="product-preview-price current"><span class="currency">$</span>59.99</p>
                        </div>
                        <!-- /PRODUCT PRICE WRAP -->

                        <!-- ADD TO BAG -->
                        <div class="button small violet add-to-bag">Add to bag</div>
                      </div>
                      <!-- /PRODUCT PREVIEW -->

                      <!-- LINK SECTIONS -->
                      <div class="link-sections">
                        <!-- LINK SECTION -->
                        <div class="link-section">
                          <!-- SECTION TITLE WRAP -->
                          <div class="section-title-wrap violet">
                            <h2 class="section-title small">Powerstation</h2>
                            <div class="section-title-separator"></div>
                          </div>
                          <!-- /SECTION TITLE WRAP -->

                          <!-- LINK LIST -->
                          <ul class="link-list">
                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="shop-v1-grid.html">Shop 3 Columns Grid</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="shop-v1-list.html">Shop 3 Columns List</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="shop-v2.html">Shop 4 Columns</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="product-page.html">Product Description</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="product-page.html">Product Reviews</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="product-page.html">Product Specifications</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="inventory-bag.html">Inventory Bag (Cart)</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="checkout.html">Checkout Page</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="order-confirmation.html">Order Confirmation</a>
                            </li>
                            <!-- /LINK LIST ITEM -->
                          </ul>
                          <!-- /LINK LIST -->

                          <!-- LINK LIST -->
                          <ul class="link-list">
                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="wishlist.html">Wishlist</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="product-compare.html">Product Compare</a>
                            </li>
                            <!-- /LINK LIST ITEM -->
                          </ul>
                          <!-- /LINK LIST -->
                        </div>
                        <!-- /LINK SECTION -->
                      </div>
                      <!-- /LINK SECTIONS -->
                    </div>
                    <!-- /SUBMENU SLIDER ITEM -->

                    <!-- SUBMENU SLIDER ITEM -->
                    <div class="submenu-slider-item submenu-slider-item-4">
                      <!-- PRODUCT PREVIEW -->
                      <div class="product-preview short">
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
                          <p class="product-preview-price current"><span class="currency">$</span>59.99</p>
                        </div>
                        <!-- /PRODUCT PRICE WRAP -->

                        <!-- ADD TO BAG -->
                        <div class="button small violet add-to-bag">Add to bag</div>
                      </div>
                      <!-- /PRODUCT PREVIEW -->

                      <!-- LINK SECTIONS -->
                      <div class="link-sections">
                        <!-- LINK SECTION -->
                        <div class="link-section">
                          <!-- SECTION TITLE WRAP -->
                          <div class="section-title-wrap violet">
                            <h2 class="section-title small">Funtendo</h2>
                            <div class="section-title-separator"></div>
                          </div>
                          <!-- /SECTION TITLE WRAP -->

                          <!-- LINK LIST -->
                          <ul class="link-list">
                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="shop-v1-grid.html">Shop 3 Columns Grid</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="shop-v1-list.html">Shop 3 Columns List</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="shop-v2.html">Shop 4 Columns</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="product-page.html">Product Description</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="product-page.html">Product Reviews</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="product-page.html">Product Specifications</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="inventory-bag.html">Inventory Bag (Cart)</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="checkout.html">Checkout Page</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="order-confirmation.html">Order Confirmation</a>
                            </li>
                            <!-- /LINK LIST ITEM -->
                          </ul>
                          <!-- /LINK LIST -->

                          <!-- LINK LIST -->
                          <ul class="link-list">
                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="wishlist.html">Wishlist</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="product-compare.html">Product Compare</a>
                            </li>
                            <!-- /LINK LIST ITEM -->
                          </ul>
                          <!-- /LINK LIST -->
                        </div>
                        <!-- /LINK SECTION -->
                      </div>
                      <!-- /LINK SECTIONS -->
                    </div>
                    <!-- /SUBMENU SLIDER ITEM -->

                    <!-- SUBMENU SLIDER ITEM -->
                    <div class="submenu-slider-item submenu-slider-item-5">
                      <!-- PRODUCT PREVIEW -->
                      <div class="product-preview short">
                        <!-- PRODUCT PREVIEW IMG WRAP -->
                        <div class="product-preview-img-wrap">
                          <!-- PRODUCT PREVIEW IMG -->
                          <a href="product-page.html">
                            <figure class="product-preview-img liquid">
                              <img src="img/products/07.jpg" alt="product-07">
                            </figure>
                          </a>
                          <!-- /PRODUCT PREVIEW IMG -->
                        </div>
                        <!-- /PRODUCT PREVIEW IMG WRAP -->

                        <!-- PRODUCT PREVIEW TITLE -->
                        <a href="product-page.html" class="product-preview-title">XRock One Bundle + Cam</a>
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
                          <p class="product-preview-price current"><span class="currency">$</span>399.00</p>
                        </div>
                        <!-- /PRODUCT PRICE WRAP -->

                        <!-- ADD TO BAG -->
                        <div class="button small violet add-to-bag">Add to bag</div>
                      </div>
                      <!-- /PRODUCT PREVIEW -->

                      <!-- LINK SECTIONS -->
                      <div class="link-sections">
                        <!-- LINK SECTION -->
                        <div class="link-section">
                          <!-- SECTION TITLE WRAP -->
                          <div class="section-title-wrap violet">
                            <h2 class="section-title small">X-Rock</h2>
                            <div class="section-title-separator"></div>
                          </div>
                          <!-- /SECTION TITLE WRAP -->

                          <!-- LINK LIST -->
                          <ul class="link-list">
                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="shop-v1-grid.html">Shop 3 Columns Grid</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="shop-v1-list.html">Shop 3 Columns List</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="shop-v2.html">Shop 4 Columns</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="product-page.html">Product Description</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="product-page.html">Product Reviews</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="product-page.html">Product Specifications</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="inventory-bag.html">Inventory Bag (Cart)</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="checkout.html">Checkout Page</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="order-confirmation.html">Order Confirmation</a>
                            </li>
                            <!-- /LINK LIST ITEM -->
                          </ul>
                          <!-- /LINK LIST -->

                          <!-- LINK LIST -->
                          <ul class="link-list">
                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="wishlist.html">Wishlist</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="product-compare.html">Product Compare</a>
                            </li>
                            <!-- /LINK LIST ITEM -->
                          </ul>
                          <!-- /LINK LIST -->
                        </div>
                        <!-- /LINK SECTION -->
                      </div>
                      <!-- /LINK SECTIONS -->
                    </div>
                    <!-- /SUBMENU SLIDER ITEM -->

                    <!-- SUBMENU SLIDER ITEM -->
                    <div class="submenu-slider-item submenu-slider-item-6">
                      <!-- PRODUCT PREVIEW -->
                      <div class="product-preview short">
                        <!-- PRODUCT PREVIEW IMG WRAP -->
                        <div class="product-preview-img-wrap">
                          <!-- PRODUCT PREVIEW IMG -->
                          <a href="product-page.html">
                            <figure class="product-preview-img liquid">
                              <img src="img/products/12.jpg" alt="product-12">
                            </figure>
                          </a>
                          <!-- /PRODUCT PREVIEW IMG -->
                        </div>
                        <!-- /PRODUCT PREVIEW IMG WRAP -->

                        <!-- PRODUCT PREVIEW TITLE -->
                        <a href="product-page.html" class="product-preview-title">Diamond men's white...</a>
                        <!-- PRODUCT PREVIEW INFO -->
                        <div class="product-preview-info">
                          <!-- PRODUCT PREVIEW CATEGORY -->
                          <a href="shop-v1-grid.html" class="product-preview-category">Clothing &amp; Hats</a>
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
                          <p class="product-preview-price current"><span class="currency">$</span>16.00</p>
                        </div>
                        <!-- /PRODUCT PRICE WRAP -->

                        <!-- ADD TO BAG -->
                        <div class="button small violet add-to-bag">Add to bag</div>
                      </div>
                      <!-- /PRODUCT PREVIEW -->

                      <!-- LINK SECTIONS -->
                      <div class="link-sections">
                        <!-- LINK SECTION -->
                        <div class="link-section">
                          <!-- SECTION TITLE WRAP -->
                          <div class="section-title-wrap violet">
                            <h2 class="section-title small">Clothing &amp; Hats</h2>
                            <div class="section-title-separator"></div>
                          </div>
                          <!-- /SECTION TITLE WRAP -->

                          <!-- LINK LIST -->
                          <ul class="link-list">
                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="shop-v1-grid.html">Shop 3 Columns Grid</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="shop-v1-list.html">Shop 3 Columns List</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="shop-v2.html">Shop 4 Columns</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="product-page.html">Product Description</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="product-page.html">Product Reviews</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="product-page.html">Product Specifications</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="inventory-bag.html">Inventory Bag (Cart)</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="checkout.html">Checkout Page</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="order-confirmation.html">Order Confirmation</a>
                            </li>
                            <!-- /LINK LIST ITEM -->
                          </ul>
                          <!-- /LINK LIST -->

                          <!-- LINK LIST -->
                          <ul class="link-list">
                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="wishlist.html">Wishlist</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="product-compare.html">Product Compare</a>
                            </li>
                            <!-- /LINK LIST ITEM -->
                          </ul>
                          <!-- /LINK LIST -->
                        </div>
                        <!-- /LINK SECTION -->
                      </div>
                      <!-- /LINK SECTIONS -->
                    </div>
                    <!-- /SUBMENU SLIDER ITEM -->

                    <!-- SUBMENU SLIDER ITEM -->
                    <div class="submenu-slider-item submenu-slider-item-7">
                      <!-- PRODUCT PREVIEW -->
                      <div class="product-preview short">
                        <!-- PRODUCT PREVIEW IMG WRAP -->
                        <div class="product-preview-img-wrap">
                          <!-- PRODUCT PREVIEW IMG -->
                          <a href="product-page.html">
                            <figure class="product-preview-img liquid">
                              <img src="img/products/13.jpg" alt="product-13">
                            </figure>
                          </a>
                          <!-- /PRODUCT PREVIEW IMG -->
                        </div>
                        <!-- /PRODUCT PREVIEW IMG WRAP -->

                        <!-- PRODUCT PREVIEW TITLE -->
                        <a href="product-page.html" class="product-preview-title">Diamond white enamel...</a>
                        <!-- PRODUCT PREVIEW INFO -->
                        <div class="product-preview-info">
                          <!-- PRODUCT PREVIEW CATEGORY -->
                          <a href="shop-v1-grid.html" class="product-preview-category">Merchandise</a>
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
                          <p class="product-preview-price current"><span class="currency">$</span>10.99</p>
                        </div>
                        <!-- /PRODUCT PRICE WRAP -->

                        <!-- ADD TO BAG -->
                        <div class="button small violet add-to-bag">Add to bag</div>
                      </div>
                      <!-- /PRODUCT PREVIEW -->

                      <!-- LINK SECTIONS -->
                      <div class="link-sections">
                        <!-- LINK SECTION -->
                        <div class="link-section">
                          <!-- SECTION TITLE WRAP -->
                          <div class="section-title-wrap violet">
                            <h2 class="section-title small">Merchandise</h2>
                            <div class="section-title-separator"></div>
                          </div>
                          <!-- /SECTION TITLE WRAP -->

                          <!-- LINK LIST -->
                          <ul class="link-list">
                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="shop-v1-grid.html">Shop 3 Columns Grid</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="shop-v1-list.html">Shop 3 Columns List</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="shop-v2.html">Shop 4 Columns</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="product-page.html">Product Description</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="product-page.html">Product Reviews</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="product-page.html">Product Specifications</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="inventory-bag.html">Inventory Bag (Cart)</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="checkout.html">Checkout Page</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="order-confirmation.html">Order Confirmation</a>
                            </li>
                            <!-- /LINK LIST ITEM -->
                          </ul>
                          <!-- /LINK LIST -->

                          <!-- LINK LIST -->
                          <ul class="link-list">
                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="wishlist.html">Wishlist</a>
                            </li>
                            <!-- /LINK LIST ITEM -->

                            <!-- LINK LIST ITEM -->
                            <li class="link-list-item">
                              <a href="product-compare.html">Product Compare</a>
                            </li>
                            <!-- /LINK LIST ITEM -->
                          </ul>
                          <!-- /LINK LIST -->
                        </div>
                        <!-- /LINK SECTION -->
                      </div>
                      <!-- /LINK SECTIONS -->
                    </div>
                    <!-- /SUBMENU SLIDER ITEM -->
                  </div>
                  <!-- /SUBMENU SLIDER ITEMS -->
                </div>
                <!-- SUBMENU SLIDER ITEMS WRAP -->
              </div>
              <!-- /SUBMENU ITEM SLIDER -->
            </li>
            <!-- /SUBMENU ITEM -->
          </ul>
          <!-- /SUBMENU -->
        </li>
        <!-- /MAIN MENU ITEM -->
      </ul>
      <!-- /MAIN MENU -->
    </div>
    <!-- NAVIGATION -->
  </nav>
  <!-- /NAVIGATION WRAP -->

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
        <img class="live-news-widget-icon" src="img/icons/live-news-icon.png" alt="live-news-icon">
        <p class="live-news-widget-title">Live News</p>
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

  <!-- CAROUSEL MATCH RESULT WRAP -->
  <div id="ew1-cmrf-controls" class="carousel-match-result-wrap full">
    <!-- MATCH SELECTOR -->
    <div class="match-selector">
      <!-- DROPDOWN SIMPLE WRAP -->
      <div class="dropdown-simple-wrap">
        <!-- DP CURRENT OPTION -->
        <div id="ew1-match-selector-dropdown-trigger" class="dp-current-option">
          <!-- DP CURRENT OPTION VALUE -->
          <div id="ew1-match-selector-dropdown-option-value" class="dp-current-option-value">
            <p class="dp-option-text">League of Heroes<br>Tournament 18'</p>
          </div>
          <!-- /DP CURRENT OPTION VALUE -->

          <!-- ARROW ICON -->
          <svg class="arrow-icon">
            <use xlink:href="#svg-arrow"></use>
          </svg>
          <!-- /ARROW ICON -->
        </div>
        <!-- /DP CURRENT OPTION -->

        <!-- DP OPTIONS -->
        <div id="ew1-match-selector-dropdown" class="dp-options">
          <!-- DP OPTION -->
          <div class="dp-option">
            <p class="dp-option-text">League of Heroes<br>Tournament 18'</p>
          </div>
          <!-- /DP OPTION -->

          <!-- DP OPTION -->
          <div class="dp-option">
            <p class="dp-option-text">Striker GO<br>League Finals 18'</p>
          </div>
          <!-- /DP OPTION -->

          <!-- DP OPTION -->
          <div class="dp-option">
            <p class="dp-option-text">Heroestone<br>League 18'</p>
          </div>
          <!-- /DP OPTION -->

          <!-- DP OPTION -->
          <div class="dp-option">
            <p class="dp-option-text">Xenowatch<br>Tournament 18'</p>
          </div>
          <!-- /DP OPTION -->
        </div>
        <!-- /DP OPTIONS -->
      </div>
      <!-- /DROPDOWN SIMPLE WRAP -->

      <!-- CONTROL PREVIOUS -->
      <div class="control-previous">
        <!-- ARROW ICON -->
        <svg class="arrow-icon medium">
          <use xlink:href="#svg-arrow-medium"></use>
        </svg>
        <!-- /ARROW ICON -->
      </div>
      <!-- /CONTROL PREVIOUS -->
    </div>
    <!-- /MATCH SELECTOR -->

    <!-- CAROUSEL MATCH RESULT -->
    <div id="ew1-cmrf-slider" class="carousel-match-result">
      <!-- CAROUSEL MATCH RESULT ITEMS -->
      <div class="carousel-match-result-items">
        <!-- CAROUSEL MATCH RESULT ITEM -->
        <div class="carousel-match-result-item">
          <!-- WIDGET MATCH RESULT -->
          <div class="widget-match-result hoverable">
            <!-- WIDGET MATCH RESULT ITEM -->
            <div class="widget-match-result-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap">
                <!-- TEAM LOGO -->
                <img class="team-logo small" src="img/teams/logos/01.png" alt="logo-01">
                <!-- /TEAM LOGO -->
      
                <!-- TEAM INFO -->
                <div class="team-info">
                  <!-- TEAM NAME -->
                  <p class="team-name">TLW</p>
                  <!-- /TEAM NAME -->
      
                  <!-- TEAM COUNTRY -->
                  <p class="team-country">USA</p>
                  <!-- /TEAM COUNTRY -->
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->
      
              <!-- MATCH SCORE -->
              <p class="match-score">2</p>
              <!-- /MATCH SCORE -->
      
              <!-- MATCH DATETIME -->
              <p class="match-datetime">Final</p>
              <!-- /MATCH DATETIME -->
            </div>
            <!-- /WIDGET MATCH RESULT ITEM -->
      
            <!-- WIDGET MATCH RESULT ITEM -->
            <div class="widget-match-result-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap">
                <!-- TEAM LOGO -->
                <img class="team-logo small" src="img/teams/logos/02.png" alt="logo-02">
                <!-- /TEAM LOGO -->
      
                <!-- TEAM INFO -->
                <div class="team-info">
                  <!-- TEAM NAME -->
                  <p class="team-name">RRH</p>
                  <!-- /TEAM NAME -->
      
                  <!-- TEAM COUNTRY -->
                  <p class="team-country">SOA</p>
                  <!-- /TEAM COUNTRY -->
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->
      
              <!-- MATCH SCORE -->
              <p class="match-score">4</p>
              <!-- /MATCH SCORE -->
      
              <!-- MATCH DATETIME -->
              <p class="match-datetime light">04/13</p>
              <!-- /MATCH DATETIME -->
            </div>
            <!-- /WIDGET MATCH RESULT ITEM -->

            <!-- WIDGET MATCH RESULT ACTIONS -->
            <div class="widget-match-result-actions">
              <a href="esports-match-overview-v1.html" class="widget-match-result-action">
                <!-- BARS ICON -->
                <svg class="bars-icon">
                  <use xlink:href="#svg-bars"></use>
                </svg>
                <!-- /BARS ICON -->
                Stats
              </a>
              <p class="widget-match-result-action popup-watch-video-trigger">
                <!-- PLAY BUTTON ICON -->
                <svg class="play-button-icon tiny">
                  <use xlink:href="#svg-play"></use>
                </svg>
                <!-- /PLAY BUTTON ICON -->
                Replay
              </p>
            </div>
            <!-- /WIDGET MATCH RESULT ACTIONS -->
          </div>
          <!-- /WIDGET MATCH RESULT -->
        </div>
        <!-- /CAROUSEL MATCH RESULT ITEM -->

        <!-- CAROUSEL MATCH RESULT ITEM -->
        <div class="carousel-match-result-item">
          <!-- WIDGET MATCH RESULT -->
          <div class="widget-match-result">
            <!-- WIDGET MATCH RESULT ITEM -->
            <div class="widget-match-result-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap">
                <!-- TEAM LOGO -->
                <img class="team-logo small" src="img/teams/logos/03.png" alt="logo-03">
                <!-- /TEAM LOGO -->
      
                <!-- TEAM INFO -->
                <div class="team-info">
                  <!-- TEAM NAME -->
                  <p class="team-name">LTR</p>
                  <!-- /TEAM NAME -->
      
                  <!-- TEAM COUNTRY -->
                  <p class="team-country">SPA</p>
                  <!-- /TEAM COUNTRY -->
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->
      
              <!-- MATCH SCORE -->
              <p class="match-score">2</p>
              <!-- /MATCH SCORE -->
      
              <!-- MATCH DATETIME -->
              <p class="match-datetime live">Live</p>
              <!-- /MATCH DATETIME -->
            </div>
            <!-- /WIDGET MATCH RESULT ITEM -->
      
            <!-- WIDGET MATCH RESULT ITEM -->
            <div class="widget-match-result-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap">
                <!-- TEAM LOGO -->
                <img class="team-logo small" src="img/teams/logos/04.png" alt="logo-04">
                <!-- /TEAM LOGO -->
      
                <!-- TEAM INFO -->
                <div class="team-info">
                  <!-- TEAM NAME -->
                  <p class="team-name">SBT</p>
                  <!-- /TEAM NAME -->
      
                  <!-- TEAM COUNTRY -->
                  <p class="team-country">RUS</p>
                  <!-- /TEAM COUNTRY -->
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->
      
              <!-- MATCH SCORE -->
              <p class="match-score">0</p>
              <!-- /MATCH SCORE -->
      
              <!-- MATCH DATETIME -->
              <p class="match-datetime">25:46</p>
              <!-- /MATCH DATETIME -->
            </div>
            <!-- /WIDGET MATCH RESULT ITEM -->
          </div>
          <!-- /WIDGET MATCH RESULT -->
        </div>
        <!-- /CAROUSEL MATCH RESULT ITEM -->

        <!-- CAROUSEL MATCH RESULT ITEM -->
        <div class="carousel-match-result-item">
          <!-- WIDGET MATCH RESULT -->
          <div class="widget-match-result hoverable">
            <!-- WIDGET MATCH RESULT ITEM -->
            <div class="widget-match-result-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap">
                <!-- TEAM LOGO -->
                <img class="team-logo small" src="img/teams/logos/02.png" alt="logo-02">
                <!-- /TEAM LOGO -->
      
                <!-- TEAM INFO -->
                <div class="team-info">
                  <!-- TEAM NAME -->
                  <p class="team-name">RRH</p>
                  <!-- /TEAM NAME -->
      
                  <!-- TEAM COUNTRY -->
                  <p class="team-country">SOA</p>
                  <!-- /TEAM COUNTRY -->
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->
      
              <!-- MATCH SCORE -->
              <p class="match-score">3</p>
              <!-- /MATCH SCORE -->
      
              <!-- MATCH DATETIME -->
              <p class="match-datetime">Final</p>
              <!-- /MATCH DATETIME -->
            </div>
            <!-- /WIDGET MATCH RESULT ITEM -->
      
            <!-- WIDGET MATCH RESULT ITEM -->
            <div class="widget-match-result-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap">
                <!-- TEAM LOGO -->
                <img class="team-logo small" src="img/teams/logos/05.png" alt="logo-05">
                <!-- /TEAM LOGO -->
      
                <!-- TEAM INFO -->
                <div class="team-info">
                  <!-- TEAM NAME -->
                  <p class="team-name">CPK</p>
                  <!-- /TEAM NAME -->
      
                  <!-- TEAM COUNTRY -->
                  <p class="team-country">JAP</p>
                  <!-- /TEAM COUNTRY -->
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->
      
              <!-- MATCH SCORE -->
              <p class="match-score">2</p>
              <!-- /MATCH SCORE -->
      
              <!-- MATCH DATETIME -->
              <p class="match-datetime light">04/14</p>
              <!-- /MATCH DATETIME -->
            </div>
            <!-- /WIDGET MATCH RESULT ITEM -->

            <!-- WIDGET MATCH RESULT ACTIONS -->
            <div class="widget-match-result-actions">
              <a href="esports-match-overview-v1.html" class="widget-match-result-action">
                <!-- BARS ICON -->
                <svg class="bars-icon">
                  <use xlink:href="#svg-bars"></use>
                </svg>
                <!-- /BARS ICON -->
                Stats
              </a>
              <p class="widget-match-result-action popup-watch-video-trigger">
                <!-- PLAY BUTTON ICON -->
                <svg class="play-button-icon tiny">
                  <use xlink:href="#svg-play"></use>
                </svg>
                <!-- /PLAY BUTTON ICON -->
                Replay
              </p>
            </div>
            <!-- /WIDGET MATCH RESULT ACTIONS -->
          </div>
          <!-- /WIDGET MATCH RESULT -->
        </div>
        <!-- /CAROUSEL MATCH RESULT ITEM -->

        <!-- CAROUSEL MATCH RESULT ITEM -->
        <div class="carousel-match-result-item">
          <!-- WIDGET MATCH RESULT -->
          <div class="widget-match-result">
            <!-- WIDGET MATCH RESULT ITEM -->
            <div class="widget-match-result-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap">
                <!-- TEAM LOGO -->
                <img class="team-logo small" src="img/teams/logos/03.png" alt="logo-03">
                <!-- /TEAM LOGO -->
      
                <!-- TEAM INFO -->
                <div class="team-info">
                  <!-- TEAM NAME -->
                  <p class="team-name">LTR</p>
                  <!-- /TEAM NAME -->
      
                  <!-- TEAM COUNTRY -->
                  <p class="team-country">SPA</p>
                  <!-- /TEAM COUNTRY -->
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->
      
              <!-- MATCH SCORE -->
              <p class="match-score">-</p>
              <!-- /MATCH SCORE -->
      
              <!-- MATCH DATETIME -->
              <p class="match-datetime">06/24</p>
              <!-- /MATCH DATETIME -->
            </div>
            <!-- /WIDGET MATCH RESULT ITEM -->
      
            <!-- WIDGET MATCH RESULT ITEM -->
            <div class="widget-match-result-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap">
                <!-- TEAM LOGO -->
                <img class="team-logo small" src="img/teams/logos/01.png" alt="logo-01">
                <!-- /TEAM LOGO -->
      
                <!-- TEAM INFO -->
                <div class="team-info">
                  <!-- TEAM NAME -->
                  <p class="team-name">TLW</p>
                  <!-- /TEAM NAME -->
      
                  <!-- TEAM COUNTRY -->
                  <p class="team-country">USA</p>
                  <!-- /TEAM COUNTRY -->
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->
      
              <!-- MATCH SCORE -->
              <p class="match-score">-</p>
              <!-- /MATCH SCORE -->
      
              <!-- MATCH DATETIME -->
              <p class="match-datetime light">10PM</p>
              <!-- /MATCH DATETIME -->
            </div>
            <!-- /WIDGET MATCH RESULT ITEM -->
          </div>
          <!-- /WIDGET MATCH RESULT -->
        </div>
        <!-- /CAROUSEL MATCH RESULT ITEM -->

        <!-- CAROUSEL MATCH RESULT ITEM -->
        <div class="carousel-match-result-item">
          <!-- WIDGET MATCH RESULT -->
          <div class="widget-match-result">
            <!-- WIDGET MATCH RESULT ITEM -->
            <div class="widget-match-result-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap">
                <!-- TEAM LOGO -->
                <img class="team-logo small" src="img/teams/logos/04.png" alt="logo-04">
                <!-- /TEAM LOGO -->
      
                <!-- TEAM INFO -->
                <div class="team-info">
                  <!-- TEAM NAME -->
                  <p class="team-name">SBT</p>
                  <!-- /TEAM NAME -->
      
                  <!-- TEAM COUNTRY -->
                  <p class="team-country">RUS</p>
                  <!-- /TEAM COUNTRY -->
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->
      
              <!-- MATCH SCORE -->
              <p class="match-score">-</p>
              <!-- /MATCH SCORE -->
      
              <!-- MATCH DATETIME -->
              <p class="match-datetime">06/25</p>
              <!-- /MATCH DATETIME -->
            </div>
            <!-- /WIDGET MATCH RESULT ITEM -->
      
            <!-- WIDGET MATCH RESULT ITEM -->
            <div class="widget-match-result-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap">
                <!-- TEAM LOGO -->
                <img class="team-logo small" src="img/teams/logos/02.png" alt="logo-02">
                <!-- /TEAM LOGO -->
      
                <!-- TEAM INFO -->
                <div class="team-info">
                  <!-- TEAM NAME -->
                  <p class="team-name">RRH</p>
                  <!-- /TEAM NAME -->
      
                  <!-- TEAM COUNTRY -->
                  <p class="team-country">SOA</p>
                  <!-- /TEAM COUNTRY -->
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->
      
              <!-- MATCH SCORE -->
              <p class="match-score">-</p>
              <!-- /MATCH SCORE -->
      
              <!-- MATCH DATETIME -->
              <p class="match-datetime light">9PM</p>
              <!-- /MATCH DATETIME -->
            </div>
            <!-- /WIDGET MATCH RESULT ITEM -->
          </div>
          <!-- /WIDGET MATCH RESULT -->
        </div>
        <!-- /CAROUSEL MATCH RESULT ITEM -->

        <!-- CAROUSEL MATCH RESULT ITEM -->
        <div class="carousel-match-result-item">
          <!-- WIDGET MATCH RESULT -->
          <div class="widget-match-result">
            <!-- WIDGET MATCH RESULT ITEM -->
            <div class="widget-match-result-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap">
                <!-- TEAM LOGO -->
                <img class="team-logo small" src="img/teams/logos/05.png" alt="logo-05">
                <!-- /TEAM LOGO -->
      
                <!-- TEAM INFO -->
                <div class="team-info">
                  <!-- TEAM NAME -->
                  <p class="team-name">CPK</p>
                  <!-- /TEAM NAME -->
      
                  <!-- TEAM COUNTRY -->
                  <p class="team-country">JAP</p>
                  <!-- /TEAM COUNTRY -->
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->
      
              <!-- MATCH SCORE -->
              <p class="match-score">-</p>
              <!-- /MATCH SCORE -->
      
              <!-- MATCH DATETIME -->
              <p class="match-datetime">06/25</p>
              <!-- /MATCH DATETIME -->
            </div>
            <!-- /WIDGET MATCH RESULT ITEM -->
      
            <!-- WIDGET MATCH RESULT ITEM -->
            <div class="widget-match-result-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap">
                <!-- TEAM LOGO -->
                <img class="team-logo small" src="img/teams/logos/01.png" alt="logo-01">
                <!-- /TEAM LOGO -->
      
                <!-- TEAM INFO -->
                <div class="team-info">
                  <!-- TEAM NAME -->
                  <p class="team-name">TLW</p>
                  <!-- /TEAM NAME -->
      
                  <!-- TEAM COUNTRY -->
                  <p class="team-country">USA</p>
                  <!-- /TEAM COUNTRY -->
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->
      
              <!-- MATCH SCORE -->
              <p class="match-score">-</p>
              <!-- /MATCH SCORE -->
      
              <!-- MATCH DATETIME -->
              <p class="match-datetime">8PM</p>
              <!-- /MATCH DATETIME -->
            </div>
            <!-- /WIDGET MATCH RESULT ITEM -->
          </div>
          <!-- /WIDGET MATCH RESULT -->
        </div>
        <!-- /CAROUSEL MATCH RESULT ITEM -->

        <!-- CAROUSEL MATCH RESULT ITEM -->
        <div class="carousel-match-result-item">
          <!-- WIDGET MATCH RESULT -->
          <div class="widget-match-result">
            <!-- WIDGET MATCH RESULT ITEM -->
            <div class="widget-match-result-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap">
                <!-- TEAM LOGO -->
                <img class="team-logo small" src="img/teams/logos/03.png" alt="logo-03">
                <!-- /TEAM LOGO -->
      
                <!-- TEAM INFO -->
                <div class="team-info">
                  <!-- TEAM NAME -->
                  <p class="team-name">LTR</p>
                  <!-- /TEAM NAME -->
      
                  <!-- TEAM COUNTRY -->
                  <p class="team-country">SPA</p>
                  <!-- /TEAM COUNTRY -->
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->
      
              <!-- MATCH SCORE -->
              <p class="match-score">-</p>
              <!-- /MATCH SCORE -->
      
              <!-- MATCH DATETIME -->
              <p class="match-datetime">06/26</p>
              <!-- /MATCH DATETIME -->
            </div>
            <!-- /WIDGET MATCH RESULT ITEM -->
      
            <!-- WIDGET MATCH RESULT ITEM -->
            <div class="widget-match-result-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap">
                <!-- TEAM LOGO -->
                <img class="team-logo small" src="img/teams/logos/02.png" alt="logo-02">
                <!-- /TEAM LOGO -->
      
                <!-- TEAM INFO -->
                <div class="team-info">
                  <!-- TEAM NAME -->
                  <p class="team-name">RRH</p>
                  <!-- /TEAM NAME -->
      
                  <!-- TEAM COUNTRY -->
                  <p class="team-country">SOA</p>
                  <!-- /TEAM COUNTRY -->
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->
      
              <!-- MATCH SCORE -->
              <p class="match-score">-</p>
              <!-- /MATCH SCORE -->
      
              <!-- MATCH DATETIME -->
              <p class="match-datetime">10PM</p>
              <!-- /MATCH DATETIME -->
            </div>
            <!-- /WIDGET MATCH RESULT ITEM -->
          </div>
          <!-- /WIDGET MATCH RESULT -->
        </div>
        <!-- /CAROUSEL MATCH RESULT ITEM -->

        <!-- CAROUSEL MATCH RESULT ITEM -->
        <div class="carousel-match-result-item">
          <!-- WIDGET MATCH RESULT -->
          <div class="widget-match-result">
            <!-- WIDGET MATCH RESULT ITEM -->
            <div class="widget-match-result-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap">
                <!-- TEAM LOGO -->
                <img class="team-logo small" src="img/teams/logos/01.png" alt="logo-01">
                <!-- /TEAM LOGO -->
      
                <!-- TEAM INFO -->
                <div class="team-info">
                  <!-- TEAM NAME -->
                  <p class="team-name">TLW</p>
                  <!-- /TEAM NAME -->
      
                  <!-- TEAM COUNTRY -->
                  <p class="team-country">USA</p>
                  <!-- /TEAM COUNTRY -->
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->
      
              <!-- MATCH SCORE -->
              <p class="match-score">-</p>
              <!-- /MATCH SCORE -->
      
              <!-- MATCH DATETIME -->
              <p class="match-datetime">06/27</p>
              <!-- /MATCH DATETIME -->
            </div>
            <!-- /WIDGET MATCH RESULT ITEM -->
      
            <!-- WIDGET MATCH RESULT ITEM -->
            <div class="widget-match-result-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap">
                <!-- TEAM LOGO -->
                <img class="team-logo small" src="img/teams/logos/02.png" alt="logo-02">
                <!-- /TEAM LOGO -->
      
                <!-- TEAM INFO -->
                <div class="team-info">
                  <!-- TEAM NAME -->
                  <p class="team-name">RRH</p>
                  <!-- /TEAM NAME -->
      
                  <!-- TEAM COUNTRY -->
                  <p class="team-country">SOA</p>
                  <!-- /TEAM COUNTRY -->
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->
      
              <!-- MATCH SCORE -->
              <p class="match-score">-</p>
              <!-- /MATCH SCORE -->
      
              <!-- MATCH DATETIME -->
              <p class="match-datetime">10PM</p>
              <!-- /MATCH DATETIME -->
            </div>
            <!-- /WIDGET MATCH RESULT ITEM -->
          </div>
          <!-- /WIDGET MATCH RESULT -->
        </div>
        <!-- /CAROUSEL MATCH RESULT ITEM -->

        <!-- CAROUSEL MATCH RESULT ITEM -->
        <div class="carousel-match-result-item">
          <!-- WIDGET MATCH RESULT -->
          <div class="widget-match-result">
            <!-- WIDGET MATCH RESULT ITEM -->
            <div class="widget-match-result-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap">
                <!-- TEAM LOGO -->
                <img class="team-logo small" src="img/teams/logos/04.png" alt="logo-04">
                <!-- /TEAM LOGO -->
      
                <!-- TEAM INFO -->
                <div class="team-info">
                  <!-- TEAM NAME -->
                  <p class="team-name">SBT</p>
                  <!-- /TEAM NAME -->
      
                  <!-- TEAM COUNTRY -->
                  <p class="team-country">RUS</p>
                  <!-- /TEAM COUNTRY -->
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->
      
              <!-- MATCH SCORE -->
              <p class="match-score">-</p>
              <!-- /MATCH SCORE -->
      
              <!-- MATCH DATETIME -->
              <p class="match-datetime">06/28</p>
              <!-- /MATCH DATETIME -->
            </div>
            <!-- /WIDGET MATCH RESULT ITEM -->
      
            <!-- WIDGET MATCH RESULT ITEM -->
            <div class="widget-match-result-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap">
                <!-- TEAM LOGO -->
                <img class="team-logo small" src="img/teams/logos/05.png" alt="logo-05">
                <!-- /TEAM LOGO -->
      
                <!-- TEAM INFO -->
                <div class="team-info">
                  <!-- TEAM NAME -->
                  <p class="team-name">CPK</p>
                  <!-- /TEAM NAME -->
      
                  <!-- TEAM COUNTRY -->
                  <p class="team-country">JAP</p>
                  <!-- /TEAM COUNTRY -->
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->
      
              <!-- MATCH SCORE -->
              <p class="match-score">-</p>
              <!-- /MATCH SCORE -->
      
              <!-- MATCH DATETIME -->
              <p class="match-datetime">8PM</p>
              <!-- /MATCH DATETIME -->
            </div>
            <!-- /WIDGET MATCH RESULT ITEM -->
          </div>
          <!-- /WIDGET MATCH RESULT -->
        </div>
        <!-- /CAROUSEL MATCH RESULT ITEM -->
      </div>
      <!-- /CAROUSEL MATCH RESULT ITEMS -->
    </div>
    <!-- /CAROUSEL MATCH RESULT -->

    <!-- CONTROL NEXT -->
    <div class="control-next">
      <!-- ARROW ICON -->
      <svg class="arrow-icon medium">
        <use xlink:href="#svg-arrow-medium"></use>
      </svg>
      <!-- /ARROW ICON -->
    </div>
    <!-- /CONTROL NEXT -->
  </div>
  <!-- /CAROUSEL MATCH RESULT WRAP -->

  <!-- LAYOUT CONTENT FULL -->
  <div class="layout-content-full v2 grid-limit layout-item gutter-big">
    <!-- WIDGET ITEM -->
    <div class="widget-item">
      <!-- SECTION TITLE WRAP -->
      <div class="section-title-wrap violet">
        <h2 class="section-title medium">Player Overview</h2>
        <div class="section-title-separator"></div>
      </div>
      <!-- /SECTION TITLE WRAP -->

      <!-- WIDGET PLAYER OVERVIEW -->
      <div class="widget-player-overview">
        <!-- PLAYER OVERVIEW -->
        <div class="player-overview">
          <!-- PLAYER OVERVIEW IMG WRAP -->
          <div class="player-overview-img-wrap">
            <!-- PLAYER OVERVIEW IMG -->
            <img class="player-overview-img" src="img/teams/player-photo.png" alt="player-photo">
            <!-- /PLAYER OVERVIEW IMG -->
          </div>
          <!-- /PLAYER OVERVIEW IMG WRAP -->
  
          <!-- OVERVIEW INFO WRAP -->
          <div class="overview-info-wrap">
            <!-- OVERVIEW INFO -->
            <div class="overview-info">
              <!-- OVERVIEW INFO ITEM -->
              <div class="overview-info-item">
                <!-- OVERVIEW INFO ITEM TITLE -->
                <p class="overview-info-item-title">Nickname</p>
                <!-- /OVERVIEW INFO ITEM TITLE -->
  
                <!-- OVERVIEW INFO ITEM TEXT -->
                <p class="overview-info-item-text">{{$ign}}</p>
                <!-- /OVERVIEW INFO ITEM TEXT -->
              </div>
              <!-- /OVERVIEW INFO ITEM -->
  
              <!-- OVERVIEW INFO ITEM -->
              <div class="overview-info-item">
                <!-- OVERVIEW INFO ITEM TITLE -->
                <p class="overview-info-item-title">Team</p>
                <!-- /OVERVIEW INFO ITEM TITLE -->
  
                <!-- OVERVIEW INFO ITEM TEXT -->
                <p class="overview-info-item-text centered">
                  <!-- TEAM LOGO -->
                  <img class="team-logo" src="img/teams/logos/01.png" alt="logo-01">
                  <!-- /TEAM LOGO -->
                  The Lone Wolves
                </p>
                <!-- /OVERVIEW INFO ITEM TEXT -->
              </div>
              <!-- /OVERVIEW INFO ITEM -->
  
              <!-- OVERVIEW INFO ITEM -->
              <div class="overview-info-item">
                <!-- OVERVIEW INFO ITEM TITLE -->
                <p class="overview-info-item-title">Real Name</p>
                <!-- /OVERVIEW INFO ITEM TITLE -->
  
                <!-- OVERVIEW INFO ITEM TEXT -->
                <p class="overview-info-item-text">{{$real_name}}</p>
                <!-- /OVERVIEW INFO ITEM TEXT -->
              </div>
              <!-- /OVERVIEW INFO ITEM -->
            </div>
            <!-- /OVERVIEW INFO -->
  
            <!-- OVERVIEW INFO -->
            <div class="overview-info">
              <!-- OVERVIEW INFO ITEM -->
              <div class="overview-info-item">
                <!-- OVERVIEW INFO ITEM TITLE -->
                <p class="overview-info-item-title">Games Played</p>
                <!-- /OVERVIEW INFO ITEM TITLE -->
  
                <!-- OVERVIEW INFO ITEM TEXT -->
                <p class="overview-info-item-text">94 games</p>
                <!-- /OVERVIEW INFO ITEM TEXT -->
              </div>
              <!-- /OVERVIEW INFO ITEM -->
  
              <!-- OVERVIEW INFO ITEM -->
              <div class="overview-info-item">
                <!-- OVERVIEW INFO ITEM TITLE -->
                <p class="overview-info-item-title">Games Won</p>
                <!-- /OVERVIEW INFO ITEM TITLE -->
  
                <!-- OVERVIEW INFO ITEM TEXT -->
                <p class="overview-info-item-text">82 Victories</p>
                <!-- /OVERVIEW INFO ITEM TEXT -->
              </div>
              <!-- /OVERVIEW INFO ITEM -->
  
              <!-- OVERVIEW INFO ITEM -->
              <div class="overview-info-item">
                <!-- OVERVIEW INFO ITEM TITLE -->
                <p class="overview-info-item-title">Games Lost</p>
                <!-- /OVERVIEW INFO ITEM TITLE -->
  
                <!-- OVERVIEW INFO ITEM TEXT -->
                <p class="overview-info-item-text">12 Losses</p>
                <!-- /OVERVIEW INFO ITEM TEXT -->
              </div>
              <!-- /OVERVIEW INFO ITEM -->
            </div>
            <!-- /OVERVIEW INFO -->
  
            <!-- OVERVIEW INFO -->
            <div class="overview-info">
              <!-- OVERVIEW INFO ITEM -->
              <div class="overview-info-item">
                <!-- OVERVIEW INFO ITEM TITLE -->
                <p class="overview-info-item-title">Tournaments</p>
                <!-- /OVERVIEW INFO ITEM TITLE -->
  
                <!-- OVERVIEW INFO ITEM TEXT -->
                <p class="overview-info-item-text">24</p>
                <!-- /OVERVIEW INFO ITEM TEXT -->
              </div>
              <!-- /OVERVIEW INFO ITEM -->
  
              <!-- OVERVIEW INFO ITEM -->
              <div class="overview-info-item">
                <!-- OVERVIEW INFO ITEM TITLE -->
                <p class="overview-info-item-title">MVP's Awarded</p>
                <!-- /OVERVIEW INFO ITEM TITLE -->
  
                <!-- OVERVIEW INFO ITEM TEXT -->
                <p class="overview-info-item-text">37</p>
                <!-- /OVERVIEW INFO ITEM TEXT -->
              </div>
              <!-- /OVERVIEW INFO ITEM -->
  
              <!-- OVERVIEW INFO ITEM -->
              <div class="overview-info-item">
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
                  <a href="#" class="bubble-ornament twitch">
                    <!-- TWITCH ICON -->
                    <svg class="twitch-icon">
                      <use xlink:href="#svg-twitch"></use>
                    </svg>
                    <!-- /TWITCH ICON -->
                  </a>
                  <!-- /BUBBLE ORNAMENT -->
                </div>
                <!-- /SOCIAL LINKS -->
              </div>
              <!-- /OVERVIEW INFO ITEM -->
            </div>
            <!-- /OVERVIEW INFO -->
  
            <!-- STATS INFO -->
            <div class="stats-info">
              <!-- STATS INFO ITEM -->
              <div class="stats-info-item">
                <!-- STATS INFO ITEM VALUE -->
                <p class="stats-info-item-value">78.43<span class="percent">%</span></p>
                <!-- /STATS INFO ITEM VALUE -->
    
                <!-- STATS INFO ITEM DESCRIPTION -->
                <div class="stats-info-item-description">
                  <!-- STATS INFO ITEM DESCRIPTION TITLE -->
                  <p class="stats-info-item-description-title">Win Rate</p>
                  <!-- /STATS INFO ITEM DESCRIPTION TITLE -->
    
                  <!-- STATS INFO ITEM DESCRIPTION TEXT -->
                  <p class="stats-info-item-description-text">Competitive</p>
                  <!-- /STATS INFO ITEM DESCRIPTION TEXT -->
                </div>
                <!-- /STATS INFO ITEM DESCRIPTION -->
              </div>
              <!-- /STATS INFO ITEM -->
    
              <!-- STATS INFO ITEM -->
              <div class="stats-info-item">
                <!-- STATS INFO ITEM VALUE -->
                <p class="stats-info-item-value"><span class="highlight">90</span> / <span class="highlight">30</span> / <span class="highlight">6</span></p>
                <!-- /STATS INFO ITEM VALUE -->
    
                <!-- STATS INFO ITEM DESCRIPTION -->
                <div class="stats-info-item-description">
                  <!-- STATS INFO ITEM DESCRIPTION TITLE -->
                  <p class="stats-info-item-description-title">Record</p>
                  <!-- /STATS INFO ITEM DESCRIPTION TITLE -->
    
                  <!-- STATS INFO ITEM DESCRIPTION TEXT -->
                  <p class="stats-info-item-description-text">Won/Lost/Draw</p>
                  <!-- /STATS INFO ITEM DESCRIPTION TEXT -->
                </div>
                <!-- /STATS INFO ITEM DESCRIPTION -->
              </div>
              <!-- /STATS INFO ITEM -->
    
              <!-- STATS INFO ITEM -->
              <div class="stats-info-item">
                <!-- STATS INFO ITEM VALUE -->
                <p class="stats-info-item-value">4790</p>
                <!-- /STATS INFO ITEM VALUE -->
    
                <!-- STATS INFO ITEM DESCRIPTION -->
                <div class="stats-info-item-description">
                  <!-- STATS INFO ITEM DESCRIPTION TITLE -->
                  <p class="stats-info-item-description-title">Skill Rating</p>
                  <!-- /STATS INFO ITEM DESCRIPTION TITLE -->
    
                  <!-- STATS INFO ITEM DESCRIPTION TEXT -->
                  <p class="stats-info-item-description-text">Competitive</p>
                  <!-- /STATS INFO ITEM DESCRIPTION TEXT -->
                </div>
                <!-- /STATS INFO ITEM DESCRIPTION -->
              </div>
              <!-- /STATS INFO ITEM -->
            </div>
            <!-- /STATS INFO -->
          </div>
          <!-- /OVERVIEW INFO WRAP -->
        </div>
        <!-- /PLAYER OVERVIEW -->
      </div>
      <!-- /WIDGET PLAYER OVERVIEW -->
    </div>
    <!-- /WIDGET ITEM -->

    <!-- WIDGET ITEM -->
    <div class="widget-item">
      <!-- SECTION TITLE WRAP -->
      <div class="section-title-wrap violet">
        <h2 class="section-title medium">Player Roles Stats</h2>
        <div class="section-title-separator"></div>
      </div>
      <!-- /SECTION TITLE WRAP -->

      <!-- GRID 4 COL -->
      <div class="grid-4col centered grid-limit gutter-big" style="margin-bottom: 40px;">
        <!-- WIDGET COMBINED STAT -->
        <div class="widget-combined-stat">
          <!-- ARC RATE WRAP -->
          <div class="arc-rate-wrap">
            <!-- ARC RATE -->
            <div id="ew3-arc-rate-01" class="arc rate negative"></div>
            <!-- /ARC RATE -->
    
            <!-- BULLET ICON -->
            <svg class="arc-rate-icon bullet-icon big">
              <use xlink:href="#svg-bullet-big"></use>
            </svg>
            <!-- /BULLET ICON -->
    
            <!-- ARC RATE STAT -->
            <p class="arc-rate-stat">Offense</p>
            <!-- /ARC RATE STAT -->
    
            <!-- ARC RATE INFO -->
            <p class="arc-rate-info">Games Played</p>
            <!-- /ARC RATE INFO -->
          </div>
          <!-- /ARC RATE WRAP -->
    
          <!-- PROGRESS BAR -->
          <div id="ew3-pgb-large-01" class="progress-bar large">
            <p class="progress-bar-text"><span id="ew3-pgb-large-01-text" class="pg-text"></span> Win Rate</p>
          </div>
          <!-- /PROGRESS BAR -->
        </div>
        <!-- /WIDGET COMBINED STAT -->
    
        <!-- WIDGET COMBINED STAT -->
        <div class="widget-combined-stat">
          <!-- ARC RATE WRAP -->
          <div class="arc-rate-wrap">
            <!-- ARC RATE -->
            <div id="ew3-arc-rate-02" class="arc rate negative"></div>
            <!-- /ARC RATE -->
    
            <!-- TOWER ICON -->
            <svg class="arc-rate-icon tower-icon big">
              <use xlink:href="#svg-tower-big"></use>
            </svg>
            <!-- /TOWER ICON -->
    
            <!-- ARC RATE STAT -->
            <p class="arc-rate-stat">Defense</p>
            <!-- /ARC RATE STAT -->
    
            <!-- ARC RATE INFO -->
            <p class="arc-rate-info">Games Played</p>
            <!-- /ARC RATE INFO -->
          </div>
          <!-- /ARC RATE WRAP -->
    
          <!-- PROGRESS BAR -->
          <div id="ew3-pgb-large-02" class="progress-bar large">
            <p class="progress-bar-text"><span id="ew3-pgb-large-02-text" class="pg-text"></span> Win Rate</p>
          </div>
          <!-- /PROGRESS BAR -->
        </div>
        <!-- /WIDGET COMBINED STAT -->
    
        <!-- WIDGET COMBINED STAT -->
        <div class="widget-combined-stat">
          <!-- ARC RATE WRAP -->
          <div class="arc-rate-wrap">
            <!-- ARC RATE -->
            <div id="ew3-arc-rate-03" class="arc rate negative"></div>
            <!-- /ARC RATE -->
    
            <!-- SHIELD ICON -->
            <svg class="arc-rate-icon shield-icon big">
              <use xlink:href="#svg-shield-big"></use>
            </svg>
            <!-- /SHIELD ICON -->
    
            <!-- ARC RATE STAT -->
            <p class="arc-rate-stat">Tank</p>
            <!-- /ARC RATE STAT -->
    
            <!-- ARC RATE INFO -->
            <p class="arc-rate-info">Games Played</p>
            <!-- /ARC RATE INFO -->
          </div>
          <!-- /ARC RATE WRAP -->
    
          <!-- PROGRESS BAR -->
          <div id="ew3-pgb-large-03" class="progress-bar large">
            <p class="progress-bar-text"><span id="ew3-pgb-large-03-text" class="pg-text"></span> Win Rate</p>
          </div>
          <!-- /PROGRESS BAR -->
        </div>
        <!-- /WIDGET COMBINED STAT -->
    
        <!-- WIDGET COMBINED STAT -->
        <div class="widget-combined-stat">
          <!-- ARC RATE WRAP -->
          <div class="arc-rate-wrap">
            <!-- ARC RATE -->
            <div id="ew3-arc-rate-04" class="arc rate negative"></div>
            <!-- /ARC RATE -->
    
            <!-- PLUS ICON -->
            <svg class="arc-rate-icon plus-icon big">
              <use xlink:href="#svg-plus-big"></use>
            </svg>
            <!-- /PLUS ICON -->
    
            <!-- ARC RATE STAT -->
            <p class="arc-rate-stat">Support</p>
            <!-- /ARC RATE STAT -->
    
            <!-- ARC RATE INFO -->
            <p class="arc-rate-info">Games Played</p>
            <!-- /ARC RATE INFO -->
          </div>
          <!-- /ARC RATE WRAP -->
    
          <!-- PROGRESS BAR -->
          <div id="ew3-pgb-large-04" class="progress-bar large">
            <p class="progress-bar-text"><span id="ew3-pgb-large-04-text" class="pg-text"></span> Win Rate</p>
          </div>
          <!-- /PROGRESS BAR -->
        </div>
        <!-- /WIDGET COMBINED STAT -->
      </div>
      <!-- /GRID 4 COL -->
    </div>
    <!-- /WIDGET ITEM -->
  </div>
  <!-- /LAYOUT CONTENT FULL -->

  <!-- LAYOUT CONTENT 1 -->
  <div class="layout-content-1 layout-item-3-1 grid-limit no-padding-bottom">
    <!-- LAYOUT BODY -->
    <div class="layout-body layout-item gutter-big">
      <!-- WIDGET ITEM -->
      <div class="widget-item">
        <!-- SECTION TITLE WRAP -->
        <div class="section-title-wrap violet small-space">
          <h2 class="section-title medium">Career Stats</h2>
          <div class="section-title-separator"></div>
        </div>
        <!-- /SECTION TITLE WRAP -->

        <!-- WIDGET MATCH BOX -->
        <div class="widget-match-box">
          <!-- WIDGET SIMPLE STATS -->
          <div class="widget-simple-stats v2">
            <!-- WIDGET SIMPLE STAT -->
            <div class="widget-simple-stat half">
              <!-- WIDGET SIMPLE STAT HEADER -->
              <div class="widget-simple-stat-header">
                <p class="widget-simple-stat-header-title">This Year</p>
              </div>
              <!-- /WIDGET SIMPLE STAT HEADER -->
    
              <!-- WIDGET SIMPLE STAT ROWS -->
              <div class="widget-simple-stat-rows">
                <!-- WIDGET SIMPLE STAT ROW -->
                <div class="widget-simple-stat-row">
                  <!-- WIDGET SIMPLE STAT TITLE -->
                  <p class="widget-simple-stat-title">Games Played</p>
                  <!-- /WIDGET SIMPLE STAT TITLE -->
    
                  <!-- WIDGET SIMPLE STAT VALUE -->
                  <p class="widget-simple-stat-value">8</p>
                  <!-- /WIDGET SIMPLE STAT VALUE -->
                </div>
                <!-- /WIDGET SIMPLE STAT ROW -->
    
                <!-- WIDGET SIMPLE STAT ROW -->
                <div class="widget-simple-stat-row">
                  <!-- WIDGET SIMPLE STAT TITLE -->
                  <p class="widget-simple-stat-title">Games Won</p>
                  <!-- /WIDGET SIMPLE STAT TITLE -->
    
                  <!-- WIDGET SIMPLE STAT VALUE -->
                  <p class="widget-simple-stat-value">7</p>
                  <!-- /WIDGET SIMPLE STAT VALUE -->
                </div>
                <!-- /WIDGET SIMPLE STAT ROW -->
    
                <!-- WIDGET SIMPLE STAT ROW -->
                <div class="widget-simple-stat-row">
                  <!-- WIDGET SIMPLE STAT TITLE -->
                  <p class="widget-simple-stat-title">Games Lost</p>
                  <!-- /WIDGET SIMPLE STAT TITLE -->
    
                  <!-- WIDGET SIMPLE STAT VALUE -->
                  <p class="widget-simple-stat-value">1</p>
                  <!-- /WIDGET SIMPLE STAT VALUE -->
                </div>
                <!-- /WIDGET SIMPLE STAT ROW -->
    
                <!-- WIDGET SIMPLE STAT ROW -->
                <div class="widget-simple-stat-row">
                  <!-- WIDGET SIMPLE STAT TITLE -->
                  <p class="widget-simple-stat-title">Win Rate</p>
                  <!-- /WIDGET SIMPLE STAT TITLE -->
    
                  <!-- WIDGET SIMPLE STAT VALUE -->
                  <p class="widget-simple-stat-value">92.6%</p>
                  <!-- /WIDGET SIMPLE STAT VALUE -->
                </div>
                <!-- /WIDGET SIMPLE STAT ROW -->
    
                <!-- WIDGET SIMPLE STAT ROW -->
                <div class="widget-simple-stat-row">
                  <!-- WIDGET SIMPLE STAT TITLE -->
                  <p class="widget-simple-stat-title">Damage Inflicted</p>
                  <!-- /WIDGET SIMPLE STAT TITLE -->
    
                  <!-- WIDGET SIMPLE STAT VALUE -->
                  <p class="widget-simple-stat-value">42.546</p>
                  <!-- /WIDGET SIMPLE STAT VALUE -->
                </div>
                <!-- /WIDGET SIMPLE STAT ROW -->
    
                <!-- WIDGET SIMPLE STAT ROW -->
                <div class="widget-simple-stat-row">
                  <!-- WIDGET SIMPLE STAT TITLE -->
                  <p class="widget-simple-stat-title">Damage Received</p>
                  <!-- /WIDGET SIMPLE STAT TITLE -->
    
                  <!-- WIDGET SIMPLE STAT VALUE -->
                  <p class="widget-simple-stat-value">31.369</p>
                  <!-- /WIDGET SIMPLE STAT VALUE -->
                </div>
                <!-- /WIDGET SIMPLE STAT ROW -->
    
                <!-- WIDGET SIMPLE STAT ROW -->
                <div class="widget-simple-stat-row">
                  <!-- WIDGET SIMPLE STAT TITLE -->
                  <p class="widget-simple-stat-title">Game MVP's</p>
                  <!-- /WIDGET SIMPLE STAT TITLE -->
    
                  <!-- WIDGET SIMPLE STAT VALUE -->
                  <p class="widget-simple-stat-value">1</p>
                  <!-- /WIDGET SIMPLE STAT VALUE -->
                </div>
                <!-- /WIDGET SIMPLE STAT ROW -->
    
                <!-- WIDGET SIMPLE STAT ROW -->
                <div class="widget-simple-stat-row">
                  <!-- WIDGET SIMPLE STAT TITLE -->
                  <p class="widget-simple-stat-title">Most Played Hero</p>
                  <!-- /WIDGET SIMPLE STAT TITLE -->
    
                  <!-- TEAM INFO WRAP -->
                  <div class="team-info-wrap small inverted">
                    <!-- HEXAGON -->
                    <div class="hexagon hexagon-wrap small red">
                      <!-- HEXAGON IN1 -->
                      <div class="hexagon-in1">
                        <!-- HEXAGON IN2 -->
                        <div class="hexagon-in2 hexagon-wrap">
                          <!-- HEXAGON -->
                          <div class="hexagon inner-hexagon">
                            <!-- HEXAGON IN1 -->
                            <div class="hexagon-in1">
                              <!-- HEXAGON IN2 -->
                              <div class="hexagon-in2 hexagon-area liquid">
                                <img src="img/characters/05.png" alt="character-05">
                              </div>
                              <!-- HEXAGON IN2 -->
                            </div>
                            <!-- /HEXAGON IN1 -->
                          </div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- HEXAGON IN2 -->
                      </div>
                      <!-- /HEXAGON IN1 -->
                    </div>
                    <!-- /HEXAGON -->
                    
                    <!-- TEAM INFO -->
                    <div class="team-info">
                      <p class="team-name">Galium</p>
                    </div>
                    <!-- /TEAM INFO -->
                  </div>
                  <!-- /TEAM INFO WRAP -->
                </div>
                <!-- /WIDGET SIMPLE STAT ROW -->
              </div>
              <!-- /WIDGET SIMPLE STAT ROWS -->
            </div>
            <!-- /WIDGET SIMPLE STAT -->
    
            <!-- WIDGET SIMPLE STAT -->
            <div class="widget-simple-stat half">
              <!-- WIDGET SIMPLE STAT HEADER -->
              <div class="widget-simple-stat-header">
                <p class="widget-simple-stat-header-title">Lifetime</p>
              </div>
              <!-- /WIDGET SIMPLE STAT HEADER -->
    
              <!-- WIDGET SIMPLE STAT ROWS -->
              <div class="widget-simple-stat-rows">
                <!-- WIDGET SIMPLE STAT ROW -->
                <div class="widget-simple-stat-row">
                  <!-- WIDGET SIMPLE STAT TITLE -->
                  <p class="widget-simple-stat-title">Games Played</p>
                  <!-- /WIDGET SIMPLE STAT TITLE -->
    
                  <!-- WIDGET SIMPLE STAT VALUE -->
                  <p class="widget-simple-stat-value">94</p>
                  <!-- /WIDGET SIMPLE STAT VALUE -->
                </div>
                <!-- /WIDGET SIMPLE STAT ROW -->
    
                <!-- WIDGET SIMPLE STAT ROW -->
                <div class="widget-simple-stat-row">
                  <!-- WIDGET SIMPLE STAT TITLE -->
                  <p class="widget-simple-stat-title">Games Won</p>
                  <!-- /WIDGET SIMPLE STAT TITLE -->
    
                  <!-- WIDGET SIMPLE STAT VALUE -->
                  <p class="widget-simple-stat-value">82</p>
                  <!-- /WIDGET SIMPLE STAT VALUE -->
                </div>
                <!-- /WIDGET SIMPLE STAT ROW -->
    
                <!-- WIDGET SIMPLE STAT ROW -->
                <div class="widget-simple-stat-row">
                  <!-- WIDGET SIMPLE STAT TITLE -->
                  <p class="widget-simple-stat-title">Games Lost</p>
                  <!-- /WIDGET SIMPLE STAT TITLE -->
    
                  <!-- WIDGET SIMPLE STAT VALUE -->
                  <p class="widget-simple-stat-value">12</p>
                  <!-- /WIDGET SIMPLE STAT VALUE -->
                </div>
                <!-- /WIDGET SIMPLE STAT ROW -->
    
                <!-- WIDGET SIMPLE STAT ROW -->
                <div class="widget-simple-stat-row">
                  <!-- WIDGET SIMPLE STAT TITLE -->
                  <p class="widget-simple-stat-title">Win Rate</p>
                  <!-- /WIDGET SIMPLE STAT TITLE -->
    
                  <!-- WIDGET SIMPLE STAT VALUE -->
                  <p class="widget-simple-stat-value">78.43%</p>
                  <!-- /WIDGET SIMPLE STAT VALUE -->
                </div>
                <!-- /WIDGET SIMPLE STAT ROW -->
    
                <!-- WIDGET SIMPLE STAT ROW -->
                <div class="widget-simple-stat-row">
                  <!-- WIDGET SIMPLE STAT TITLE -->
                  <p class="widget-simple-stat-title">Damage Inflicted</p>
                  <!-- /WIDGET SIMPLE STAT TITLE -->
    
                  <!-- WIDGET SIMPLE STAT VALUE -->
                  <p class="widget-simple-stat-value">195.670</p>
                  <!-- /WIDGET SIMPLE STAT VALUE -->
                </div>
                <!-- /WIDGET SIMPLE STAT ROW -->
    
                <!-- WIDGET SIMPLE STAT ROW -->
                <div class="widget-simple-stat-row">
                  <!-- WIDGET SIMPLE STAT TITLE -->
                  <p class="widget-simple-stat-title">Damage Received</p>
                  <!-- /WIDGET SIMPLE STAT TITLE -->
    
                  <!-- WIDGET SIMPLE STAT VALUE -->
                  <p class="widget-simple-stat-value">160.448</p>
                  <!-- /WIDGET SIMPLE STAT VALUE -->
                </div>
                <!-- /WIDGET SIMPLE STAT ROW -->
    
                <!-- WIDGET SIMPLE STAT ROW -->
                <div class="widget-simple-stat-row">
                  <!-- WIDGET SIMPLE STAT TITLE -->
                  <p class="widget-simple-stat-title">Game MVP's</p>
                  <!-- /WIDGET SIMPLE STAT TITLE -->
    
                  <!-- WIDGET SIMPLE STAT VALUE -->
                  <p class="widget-simple-stat-value">37</p>
                  <!-- /WIDGET SIMPLE STAT VALUE -->
                </div>
                <!-- /WIDGET SIMPLE STAT ROW -->
    
                <!-- WIDGET SIMPLE STAT ROW -->
                <div class="widget-simple-stat-row">
                  <!-- WIDGET SIMPLE STAT TITLE -->
                  <p class="widget-simple-stat-title">Most Played Hero</p>
                  <!-- /WIDGET SIMPLE STAT TITLE -->
    
                  <!-- TEAM INFO WRAP -->
                  <div class="team-info-wrap small inverted">
                    <!-- HEXAGON -->
                    <div class="hexagon hexagon-wrap small cyan">
                      <!-- HEXAGON IN1 -->
                      <div class="hexagon-in1">
                        <!-- HEXAGON IN2 -->
                        <div class="hexagon-in2 hexagon-wrap">
                          <!-- HEXAGON -->
                          <div class="hexagon inner-hexagon">
                            <!-- HEXAGON IN1 -->
                            <div class="hexagon-in1">
                              <!-- HEXAGON IN2 -->
                              <div class="hexagon-in2 hexagon-area liquid">
                                <img src="img/characters/11.png" alt="character-11">
                              </div>
                              <!-- HEXAGON IN2 -->
                            </div>
                            <!-- /HEXAGON IN1 -->
                          </div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- HEXAGON IN2 -->
                      </div>
                      <!-- /HEXAGON IN1 -->
                    </div>
                    <!-- /HEXAGON -->
                    
                    <!-- TEAM INFO -->
                    <div class="team-info">
                      <p class="team-name">Luria</p>
                    </div>
                    <!-- /TEAM INFO -->
                  </div>
                  <!-- /TEAM INFO WRAP -->
                </div>
                <!-- /WIDGET SIMPLE STAT ROW -->
              </div>
              <!-- /WIDGET SIMPLE STAT ROWS -->
            </div>
            <!-- /WIDGET SIMPLE STAT -->
          </div>
          <!-- /WIDGET SIMPLE STATS -->
        </div>
        <!-- /WIDGET MATCH BOX -->
      </div>
      <!-- /WIDGET ITEM -->

      <!-- WIDGET ITEM -->
      <div class="widget-item">
        <!-- SECTION TITLE WRAP -->
        <div class="section-title-wrap violet">
          <h2 class="section-title medium">Most Played Heroes</h2>
          <div class="section-title-separator"></div>
        </div>
        <!-- /SECTION TITLE WRAP -->

        <!-- TABLE -->
        <div class="table lineups most-played">
          <!-- TABLE ROW HEADER -->
          <div class="table-row-header big bordered colored">
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item left">
              <p class="table-row-header-title">Hero / Role</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
  
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">Time Played</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
  
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">Record</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
  
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">Medals</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
  
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">Win Rate</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
  
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">On Fire</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
  
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">Healing</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
          </div>
          <!-- /TABLE ROW HEADER -->
  
          <!-- TABLE ROWS -->
          <div class="table-rows no-color">
            <!-- TABLE ROW -->
            <div class="table-row big">
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- TEAM INFO WRAP -->
                <div class="team-info-wrap medium">
                  <!-- HEXAGON -->
                  <div class="hexagon hexagon-wrap cyan">
                    <!-- HEXAGON IN1 -->
                    <div class="hexagon-in1">
                      <!-- HEXAGON IN2 -->
                      <div class="hexagon-in2 hexagon-wrap">
                        <!-- HEXAGON -->
                        <div class="hexagon inner-hexagon">
                          <!-- HEXAGON IN1 -->
                          <div class="hexagon-in1">
                            <!-- HEXAGON IN2 -->
                            <div class="hexagon-in2 hexagon-area liquid">
                              <img src="img/characters/11.png" alt="character-11">
                            </div>
                            <!-- HEXAGON IN2 -->
                          </div>
                          <!-- /HEXAGON IN1 -->
                        </div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- HEXAGON IN2 -->
                    </div>
                    <!-- /HEXAGON IN1 -->
                  </div>
                  <!-- /HEXAGON -->
                  
                  <!-- TEAM INFO -->
                  <div class="team-info">
                    <p class="team-name">Luria</p>
                    <p class="team-country">Support</p>
                  </div>
                  <!-- /TEAM INFO -->
                </div>
                <!-- /TEAM INFO WRAP -->
              </div>
              <!-- /TABLE ROW ITEM -->
              
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bolder">09:00:00</p>
              </div>
              <!-- /TABLE ROW ITEM -->
  
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bolder"><span class="highlight">33</span> / <span class="highlight">8</span> / <span class="highlight">2</span></p>
              </div>
              <!-- /TABLE ROW ITEM -->
  
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bolder">3.17</p>
              </div>
              <!-- /TABLE ROW ITEM -->
  
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item ew2-lineups-tooltip" data-title="2.65">
                <p class="table-text bolder">
                  <!-- PLUS ICON -->
                  <svg class="plus-icon rate-up">
                    <use xlink:href="#svg-plus-big"></use>
                  </svg>
                  <!-- /PLUS ICON -->
                  63.33%
                </p>
              </div>
              <!-- /TABLE ROW ITEM -->
  
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bolder">18.04%</p>
              </div>
              <!-- /TABLE ROW ITEM -->
  
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bolder">15.662</p>
              </div>
              <!-- /TABLE ROW ITEM -->
            </div>
            <!-- /TABLE ROW -->
          </div>
          <!-- /TABLE ROWS -->
        </div>
        <!-- /TABLE -->
  
        <!-- TABLE -->
        <div class="table lineups most-played">
          <!-- TABLE ROW HEADER -->
          <div class="table-row-header big bordered colored">
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item left">
              <p class="table-row-header-title">Hero / Role</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
  
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">Time Played</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
  
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">Record</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
  
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">Medals</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
  
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">Win Rate</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
  
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">On Fire</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
  
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">Damage</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
          </div>
          <!-- /TABLE ROW HEADER -->
  
          <!-- TABLE ROWS -->
          <div class="table-rows no-color">
            <!-- TABLE ROW -->
            <div class="table-row big">
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- TEAM INFO WRAP -->
                <div class="team-info-wrap medium">
                  <!-- HEXAGON -->
                  <div class="hexagon hexagon-wrap red">
                    <!-- HEXAGON IN1 -->
                    <div class="hexagon-in1">
                      <!-- HEXAGON IN2 -->
                      <div class="hexagon-in2 hexagon-wrap">
                        <!-- HEXAGON -->
                        <div class="hexagon inner-hexagon">
                          <!-- HEXAGON IN1 -->
                          <div class="hexagon-in1">
                            <!-- HEXAGON IN2 -->
                            <div class="hexagon-in2 hexagon-area liquid">
                              <img src="img/characters/05.png" alt="character-05">
                            </div>
                            <!-- HEXAGON IN2 -->
                          </div>
                          <!-- /HEXAGON IN1 -->
                        </div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- HEXAGON IN2 -->
                    </div>
                    <!-- /HEXAGON IN1 -->
                  </div>
                  <!-- /HEXAGON -->
                  
                  <!-- TEAM INFO -->
                  <div class="team-info">
                    <p class="team-name">Galium</p>
                    <p class="team-country">Offense</p>
                  </div>
                  <!-- /TEAM INFO -->
                </div>
                <!-- /TEAM INFO WRAP -->
              </div>
              <!-- /TABLE ROW ITEM -->
              
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bolder">07:23:00</p>
              </div>
              <!-- /TABLE ROW ITEM -->
  
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bolder"><span class="highlight">30</span> / <span class="highlight">6</span></p>
              </div>
              <!-- /TABLE ROW ITEM -->
  
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bolder">3.08</p>
              </div>
              <!-- /TABLE ROW ITEM -->
  
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bolder">85.50%</p>
              </div>
              <!-- /TABLE ROW ITEM -->
  
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bolder">22.90%</p>
              </div>
              <!-- /TABLE ROW ITEM -->
  
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bolder">14.307</p>
              </div>
              <!-- /TABLE ROW ITEM -->
            </div>
            <!-- /TABLE ROW -->
          </div>
          <!-- /TABLE ROWS -->
        </div>
        <!-- /TABLE -->

        <!-- TABLE -->
        <div class="table lineups most-played">
          <!-- TABLE ROW HEADER -->
          <div class="table-row-header big bordered colored">
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item left">
              <p class="table-row-header-title">Hero / Role</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
  
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">Time Played</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
  
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">Record</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
  
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">Medals</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
  
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">Win Rate</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
  
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">On Fire</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
  
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">Healing</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
          </div>
          <!-- /TABLE ROW HEADER -->
  
          <!-- TABLE ROWS -->
          <div class="table-rows no-color">
            <!-- TABLE ROW -->
            <div class="table-row big">
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- TEAM INFO WRAP -->
                <div class="team-info-wrap medium">
                  <!-- HEXAGON -->
                  <div class="hexagon hexagon-wrap cyan">
                    <!-- HEXAGON IN1 -->
                    <div class="hexagon-in1">
                      <!-- HEXAGON IN2 -->
                      <div class="hexagon-in2 hexagon-wrap">
                        <!-- HEXAGON -->
                        <div class="hexagon inner-hexagon">
                          <!-- HEXAGON IN1 -->
                          <div class="hexagon-in1">
                            <!-- HEXAGON IN2 -->
                            <div class="hexagon-in2 hexagon-area liquid">
                              <img src="img/characters/12.png" alt="character-12">
                            </div>
                            <!-- HEXAGON IN2 -->
                          </div>
                          <!-- /HEXAGON IN1 -->
                        </div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- HEXAGON IN2 -->
                    </div>
                    <!-- /HEXAGON IN1 -->
                  </div>
                  <!-- /HEXAGON -->
                  
                  <!-- TEAM INFO -->
                  <div class="team-info">
                    <p class="team-name">Duvida</p>
                    <p class="team-country">Support</p>
                  </div>
                  <!-- /TEAM INFO -->
                </div>
                <!-- /TEAM INFO WRAP -->
              </div>
              <!-- /TABLE ROW ITEM -->
              
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bolder">04:06:00</p>
              </div>
              <!-- /TABLE ROW ITEM -->
  
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bolder"><span class="highlight">15</span> / <span class="highlight">5</span> / <span class="highlight">1</span></p>
              </div>
              <!-- /TABLE ROW ITEM -->
  
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bolder">3.53</p>
              </div>
              <!-- /TABLE ROW ITEM -->

              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bolder">42.20%</p>
              </div>
              <!-- /TABLE ROW ITEM -->
  
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item ew2-lineups-tooltip" data-title="2.50">
                <p class="table-text bolder">
                  <!-- MINUS CC ICON -->
                  <svg class="minus-cc-icon rate-down">
                    <use xlink:href="#svg-minus-cc"></use>
                  </svg>
                  <!-- /MINUS CC ICON -->
                  20.03%
                </p>
              </div>
              <!-- /TABLE ROW ITEM -->
  
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bolder">17.799</p>
              </div>
              <!-- /TABLE ROW ITEM -->
            </div>
            <!-- /TABLE ROW -->
          </div>
          <!-- /TABLE ROWS -->
        </div>
        <!-- /TABLE -->

        <!-- TABLE -->
        <div class="table lineups most-played">
          <!-- TABLE ROW HEADER -->
          <div class="table-row-header big bordered colored">
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item left">
              <p class="table-row-header-title">Hero / Role</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
  
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">Time Played</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
  
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">Record</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
  
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">Medals</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
  
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">Win Rate</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
  
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">On Fire</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
  
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">Damage</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
          </div>
          <!-- /TABLE ROW HEADER -->
  
          <!-- TABLE ROWS -->
          <div class="table-rows no-color">
            <!-- TABLE ROW -->
            <div class="table-row big">
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- TEAM INFO WRAP -->
                <div class="team-info-wrap medium">
                  <!-- HEXAGON -->
                  <div class="hexagon hexagon-wrap blue">
                    <!-- HEXAGON IN1 -->
                    <div class="hexagon-in1">
                      <!-- HEXAGON IN2 -->
                      <div class="hexagon-in2 hexagon-wrap">
                        <!-- HEXAGON -->
                        <div class="hexagon inner-hexagon">
                          <!-- HEXAGON IN1 -->
                          <div class="hexagon-in1">
                            <!-- HEXAGON IN2 -->
                            <div class="hexagon-in2 hexagon-area liquid">
                              <img src="img/characters/07.png" alt="character-07">
                            </div>
                            <!-- HEXAGON IN2 -->
                          </div>
                          <!-- /HEXAGON IN1 -->
                        </div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- HEXAGON IN2 -->
                    </div>
                    <!-- /HEXAGON IN1 -->
                  </div>
                  <!-- /HEXAGON -->
                  
                  <!-- TEAM INFO -->
                  <div class="team-info">
                    <p class="team-name">Rekson</p>
                    <p class="team-country">Defense</p>
                  </div>
                  <!-- /TEAM INFO -->
                </div>
                <!-- /TEAM INFO WRAP -->
              </div>
              <!-- /TABLE ROW ITEM -->
              
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bolder">00:58:00</p>
              </div>
              <!-- /TABLE ROW ITEM -->
  
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bolder"><span class="highlight">6</span> / <span class="highlight">2</span></p>
              </div>
              <!-- /TABLE ROW ITEM -->
  
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bolder">2.86</p>
              </div>
              <!-- /TABLE ROW ITEM -->
  
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bolder">79.71%</p>
              </div>
              <!-- /TABLE ROW ITEM -->
  
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bolder">21.56%</p>
              </div>
              <!-- /TABLE ROW ITEM -->
  
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bolder">12.422</p>
              </div>
              <!-- /TABLE ROW ITEM -->
            </div>
            <!-- /TABLE ROW -->
          </div>
          <!-- /TABLE ROWS -->
        </div>
        <!-- /TABLE -->

        <!-- TABLE -->
        <div class="table lineups most-played">
          <!-- TABLE ROW HEADER -->
          <div class="table-row-header big bordered colored">
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item left">
              <p class="table-row-header-title">Hero / Role</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
  
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">Time Played</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
  
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">Record</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
  
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">Medals</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
  
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">Win Rate</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
  
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">On Fire</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
  
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">Damage</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
          </div>
          <!-- /TABLE ROW HEADER -->
  
          <!-- TABLE ROWS -->
          <div class="table-rows no-color">
            <!-- TABLE ROW -->
            <div class="table-row big">
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- TEAM INFO WRAP -->
                <div class="team-info-wrap medium">
                  <!-- HEXAGON -->
                  <div class="hexagon hexagon-wrap violet">
                    <!-- HEXAGON IN1 -->
                    <div class="hexagon-in1">
                      <!-- HEXAGON IN2 -->
                      <div class="hexagon-in2 hexagon-wrap">
                        <!-- HEXAGON -->
                        <div class="hexagon inner-hexagon">
                          <!-- HEXAGON IN1 -->
                          <div class="hexagon-in1">
                            <!-- HEXAGON IN2 -->
                            <div class="hexagon-in2 hexagon-area liquid">
                              <img src="img/characters/04.png" alt="character-04">
                            </div>
                            <!-- HEXAGON IN2 -->
                          </div>
                          <!-- /HEXAGON IN1 -->
                        </div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- HEXAGON IN2 -->
                    </div>
                    <!-- /HEXAGON IN1 -->
                  </div>
                  <!-- /HEXAGON -->
                  
                  <!-- TEAM INFO -->
                  <div class="team-info">
                    <p class="team-name">Vanstus</p>
                    <p class="team-country">Tank</p>
                  </div>
                  <!-- /TEAM INFO -->
                </div>
                <!-- /TEAM INFO WRAP -->
              </div>
              <!-- /TABLE ROW ITEM -->
              
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bolder">00:42:00</p>
              </div>
              <!-- /TABLE ROW ITEM -->
  
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bolder"><span class="highlight">1</span> / <span class="highlight">0</span></p>
              </div>
              <!-- /TABLE ROW ITEM -->
  
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bolder">3.00</p>
              </div>
              <!-- /TABLE ROW ITEM -->
  
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bolder">92.58%</p>
              </div>
              <!-- /TABLE ROW ITEM -->
  
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bolder">48.05%</p>
              </div>
              <!-- /TABLE ROW ITEM -->
  
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bolder">15.765</p>
              </div>
              <!-- /TABLE ROW ITEM -->
            </div>
            <!-- /TABLE ROW -->
          </div>
          <!-- /TABLE ROWS -->
        </div>
        <!-- /TABLE -->
      </div>
      <!-- /WIDGET ITEM -->

      <!-- WIDGET ITEM -->
      <div class="widget-item">
        <!-- SECTION TITLE WRAP -->
        <div class="section-title-wrap violet small-space">
          <h2 class="section-title medium">Records &amp; Awards</h2>
          <div class="section-title-separator"></div>
        </div>
        <!-- /SECTION TITLE WRAP -->

        <!-- TABLE -->
        <div class="table records">
          <!-- TABLE ROW HEADER -->
          <div class="table-row-header">
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item left">
              <p class="table-row-header-title">Record/Award</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
    
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item left">
              <p class="table-row-header-title">Description</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
    
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item left">
              <p class="table-row-header-title">Date Awarded</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
          </div>
          <!-- /TABLE ROW HEADER -->
    
          <!-- TABLE ROWS -->
          <div class="table-rows">
            <!-- TABLE ROW -->
            <div class="table-row">
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- FEATURED INFO -->
                <div class="featured-info">
                  <!-- FEATURED INFO IMG -->
                  <img class="featured-info-img" src="img/icons/flag-record-icon.png" alt="record-img">
                  <!-- /FEATURED INFO IMG -->
    
                  <!-- FEATURED INFO IMG -->
                  <p class="featured-info-text">Most damage inflicted</p>
                  <!-- /FEATURED INFO IMG -->
                </div>
                <!-- /FEATURED INFO -->
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item left">
                <!-- FEATURED INFO -->
                <div class="featured-info small">
                  <!-- HEXAGON -->
                  <div class="featured-info-img hexagon hexagon-wrap small light">
                    <!-- HEXAGON IN1 -->
                    <div class="hexagon-in1">
                      <!-- HEXAGON IN2 -->
                      <div class="hexagon-in2 hexagon-wrap">
                        <!-- HEXAGON -->
                        <div class="hexagon inner-hexagon">
                          <!-- HEXAGON IN1 -->
                          <div class="hexagon-in1">
                            <!-- HEXAGON IN2 -->
                            <div class="hexagon-in2 hexagon-area liquid">
                              <img src="img/characters/05.png" alt="character-05">
                            </div>
                            <!-- HEXAGON IN2 -->
                          </div>
                          <!-- /HEXAGON IN1 -->
                        </div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- HEXAGON IN2 -->
                    </div>
                    <!-- /HEXAGON IN1 -->
                  </div>
                  <!-- /HEXAGON -->
    
                  <!-- FEATURED INFO IMG -->
                  <p class="featured-info-text">Inflicted 98.256 of damage in a single game. Hero: Galium</p>
                  <!-- /FEATURED INFO IMG -->
                </div>
                <!-- /FEATURED INFO -->
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item left">
                <p class="table-text bold">March 2019</p>
              </div>
              <!-- /TABLE ROW ITEM -->
            </div>
            <!-- /TABLE ROW -->
    
            <!-- TABLE ROW -->
            <div class="table-row">
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- FEATURED INFO -->
                <div class="featured-info">
                  <!-- FEATURED INFO IMG -->
                  <img class="featured-info-img" src="img/icons/cup-award-icon.png" alt="award-img">
                  <!-- /FEATURED INFO IMG -->
    
                  <!-- FEATURED INFO IMG -->
                  <p class="featured-info-text">Player of the year 2018</p>
                  <!-- /FEATURED INFO IMG -->
                </div>
                <!-- /FEATURED INFO -->
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item left">
                <p class="table-text bold">Awarded by the Xenowatch League organizers</p>
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item left">
                <p class="table-text bold">November 2018</p>
              </div>
              <!-- /TABLE ROW ITEM -->
            </div>
            <!-- /TABLE ROW -->

            <!-- TABLE ROW -->
            <div class="table-row">
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- FEATURED INFO -->
                <div class="featured-info">
                  <!-- FEATURED INFO IMG -->
                  <img class="featured-info-img" src="img/icons/flag-record-icon.png" alt="record-img">
                  <!-- /FEATURED INFO IMG -->
    
                  <!-- FEATURED INFO IMG -->
                  <p class="featured-info-text">Fastest kill in league</p>
                  <!-- /FEATURED INFO IMG -->
                </div>
                <!-- /FEATURED INFO -->
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item left">
                <!-- FEATURED INFO -->
                <div class="featured-info small">
                  <!-- HEXAGON -->
                  <div class="featured-info-img hexagon hexagon-wrap small light">
                    <!-- HEXAGON IN1 -->
                    <div class="hexagon-in1">
                      <!-- HEXAGON IN2 -->
                      <div class="hexagon-in2 hexagon-wrap">
                        <!-- HEXAGON -->
                        <div class="hexagon inner-hexagon">
                          <!-- HEXAGON IN1 -->
                          <div class="hexagon-in1">
                            <!-- HEXAGON IN2 -->
                            <div class="hexagon-in2 hexagon-area liquid">
                              <img src="img/characters/04.png" alt="character-04">
                            </div>
                            <!-- HEXAGON IN2 -->
                          </div>
                          <!-- /HEXAGON IN1 -->
                        </div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- HEXAGON IN2 -->
                    </div>
                    <!-- /HEXAGON IN1 -->
                  </div>
                  <!-- /HEXAGON -->
    
                  <!-- FEATURED INFO IMG -->
                  <p class="featured-info-text">Killed an opponent 0.23 secs after the start. Hero: Vanstus</p>
                  <!-- /FEATURED INFO IMG -->
                </div>
                <!-- /FEATURED INFO -->
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item left">
                <p class="table-text bold">August 2018</p>
              </div>
              <!-- /TABLE ROW ITEM -->
            </div>
            <!-- /TABLE ROW -->

            <!-- TABLE ROW -->
            <div class="table-row">
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- FEATURED INFO -->
                <div class="featured-info">
                  <!-- FEATURED INFO IMG -->
                  <img class="featured-info-img" src="img/icons/flag-record-icon.png" alt="record-img">
                  <!-- /FEATURED INFO IMG -->
    
                  <!-- FEATURED INFO IMG -->
                  <p class="featured-info-text">Highest healing in world cup</p>
                  <!-- /FEATURED INFO IMG -->
                </div>
                <!-- /FEATURED INFO -->
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item left">
                <!-- FEATURED INFO -->
                <div class="featured-info small">
                  <!-- HEXAGON -->
                  <div class="featured-info-img hexagon hexagon-wrap small light">
                    <!-- HEXAGON IN1 -->
                    <div class="hexagon-in1">
                      <!-- HEXAGON IN2 -->
                      <div class="hexagon-in2 hexagon-wrap">
                        <!-- HEXAGON -->
                        <div class="hexagon inner-hexagon">
                          <!-- HEXAGON IN1 -->
                          <div class="hexagon-in1">
                            <!-- HEXAGON IN2 -->
                            <div class="hexagon-in2 hexagon-area liquid">
                              <img src="img/characters/10.png" alt="character-10">
                            </div>
                            <!-- HEXAGON IN2 -->
                          </div>
                          <!-- /HEXAGON IN1 -->
                        </div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- HEXAGON IN2 -->
                    </div>
                    <!-- /HEXAGON IN1 -->
                  </div>
                  <!-- /HEXAGON -->
    
                  <!-- FEATURED INFO IMG -->
                  <p class="featured-info-text">42.125 healing done in a single game. Hero: Magina</p>
                  <!-- /FEATURED INFO IMG -->
                </div>
                <!-- /FEATURED INFO -->
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item left">
                <p class="table-text bold">February 2018</p>
              </div>
              <!-- /TABLE ROW ITEM -->
            </div>
            <!-- /TABLE ROW -->

            <!-- TABLE ROW -->
            <div class="table-row">
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- FEATURED INFO -->
                <div class="featured-info">
                  <!-- FEATURED INFO IMG -->
                  <img class="featured-info-img" src="img/icons/cup-award-icon.png" alt="award-img">
                  <!-- /FEATURED INFO IMG -->
    
                  <!-- FEATURED INFO IMG -->
                  <p class="featured-info-text">Player of the year 2014</p>
                  <!-- /FEATURED INFO IMG -->
                </div>
                <!-- /FEATURED INFO -->
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item left">
                <p class="table-text bold">Awarded by the Xenowatch Tournament founders</p>
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item left">
                <p class="table-text bold">October 2014</p>
              </div>
              <!-- /TABLE ROW ITEM -->
            </div>
            <!-- /TABLE ROW -->

            <!-- TABLE ROW -->
            <div class="table-row">
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- FEATURED INFO -->
                <div class="featured-info">
                  <!-- FEATURED INFO IMG -->
                  <img class="featured-info-img" src="img/icons/flag-record-icon.png" alt="record-img">
                  <!-- /FEATURED INFO IMG -->
    
                  <!-- FEATURED INFO IMG -->
                  <p class="featured-info-text">Highest eliminations</p>
                  <!-- /FEATURED INFO IMG -->
                </div>
                <!-- /FEATURED INFO -->
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item left">
                <!-- FEATURED INFO -->
                <div class="featured-info small">
                  <!-- HEXAGON -->
                  <div class="featured-info-img hexagon hexagon-wrap small light">
                    <!-- HEXAGON IN1 -->
                    <div class="hexagon-in1">
                      <!-- HEXAGON IN2 -->
                      <div class="hexagon-in2 hexagon-wrap">
                        <!-- HEXAGON -->
                        <div class="hexagon inner-hexagon">
                          <!-- HEXAGON IN1 -->
                          <div class="hexagon-in1">
                            <!-- HEXAGON IN2 -->
                            <div class="hexagon-in2 hexagon-area liquid">
                              <img src="img/characters/05.png" alt="character-05">
                            </div>
                            <!-- HEXAGON IN2 -->
                          </div>
                          <!-- /HEXAGON IN1 -->
                        </div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- HEXAGON IN2 -->
                    </div>
                    <!-- /HEXAGON IN1 -->
                  </div>
                  <!-- /HEXAGON -->
    
                  <!-- FEATURED INFO IMG -->
                  <p class="featured-info-text">43 eliminations in a single life. Hero: Galium</p>
                  <!-- /FEATURED INFO IMG -->
                </div>
                <!-- /FEATURED INFO -->
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item left">
                <p class="table-text bold">June 2014</p>
              </div>
              <!-- /TABLE ROW ITEM -->
            </div>
            <!-- /TABLE ROW -->
          </div>
          <!-- /TABLE ROWS -->
        </div>
        <!-- /TABLE -->
      </div>
      <!-- /WIDGET ITEM -->
    </div>
    <!-- /LAYOUT BODY -->

    <!-- LAYOUT SIDEBAR -->
    <div class="layout-sidebar layout-item gutter-medium">
      <!-- WIDGET SIDEBAR -->
      <div class="widget-sidebar">
        <!-- SECTION TITLE WRAP -->
        <div class="section-title-wrap violet small-space">
          <h2 class="section-title medium">Latest Match</h2>
          <div class="section-title-separator"></div>
        </div>
        <!-- /SECTION TITLE WRAP -->

        <!-- WIDGET MATCH BOX -->
        <div class="widget-match-box">
          <!-- WIDGET TITLE WRAP -->
          <div class="widget-title-wrap">
            <h6 class="widget-title">Xenowatch league finals</h6>
            <p class="widget-text">August 28th, 2018</p>
          </div>
          <!-- /WIDGET TITLE WRAP -->

          <!-- WIDGET TEAM VS -->
          <div class="widget-team-vs">
            <!-- WIDGET TEAM VS ITEM -->
            <div class="widget-team-vs-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap medium">
                <!-- TEAM LOGO -->
                <img class="team-logo" src="img/teams/logos/01.png" alt="logo-01">
                <!-- /TEAM LOGO -->

                <!-- TEAM INFO -->
                <div class="team-info">
                  <!-- TEAM NAME -->
                  <p class="team-name">The Lone Wolves</p>
                  <!-- /TEAM NAME -->

                  <!-- TEAM COUNTRY -->
                  <p class="team-country">United States</p>
                  <!-- /TEAM COUNTRY -->
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->

              <!-- TEAM SCORE -->
              <p class="team-score">12</p>
              <!-- /TEAM SCORE -->
            </div>
            <!-- /WIDGET TEAM VS ITEM -->

            <!-- WIDGET TEAM VS ITEM -->
            <div class="widget-team-vs-item">
              <!-- TEAM INFO WRAP -->
              <div class="team-info-wrap medium">
                <!-- TEAM LOGO -->
                <img class="team-logo" src="img/teams/logos/02.png" alt="logo-02">
                <!-- /TEAM LOGO -->

                <!-- TEAM INFO -->
                <div class="team-info">
                  <!-- TEAM NAME -->
                  <p class="team-name">Raging Rhinos</p>
                  <!-- /TEAM NAME -->

                  <!-- TEAM COUNTRY -->
                  <p class="team-country">South Africa</p>
                  <!-- /TEAM COUNTRY -->
                </div>
                <!-- /TEAM INFO -->
              </div>
              <!-- /TEAM INFO WRAP -->

              <!-- TEAM SCORE -->
              <p class="team-score">10</p>
              <!-- /TEAM SCORE -->
            </div>
            <!-- /WIDGET TEAM VS ITEM -->
          </div>
          <!-- /WIDGET TEAM VS -->
        </div>
        <!-- /WIDGET MATCH BOX -->

        <!-- WIDGET MATCH BOX -->
        <div class="widget-match-box">
          <!-- WIDGET SIMPLE STATS -->
          <div class="widget-simple-stats v2 small">
            <!-- WIDGET SIMPLE STAT -->
            <div class="widget-simple-stat">
              <!-- WIDGET SIMPLE STAT HEADER -->
              <div class="widget-simple-stat-header">
                <p class="widget-simple-stat-header-title">Davikinger90 Stats</p>
              </div>
              <!-- /WIDGET SIMPLE STAT HEADER -->
    
              <!-- WIDGET SIMPLE STAT ROWS -->
              <div class="widget-simple-stat-rows">
                <!-- WIDGET SIMPLE STAT ROW -->
                <div class="widget-simple-stat-row">
                  <!-- WIDGET SIMPLE STAT TITLE -->
                  <p class="widget-simple-stat-title">Damage Inflicted</p>
                  <!-- /WIDGET SIMPLE STAT TITLE -->
    
                  <!-- WIDGET SIMPLE STAT VALUE -->
                  <p class="widget-simple-stat-value">56.364</p>
                  <!-- /WIDGET SIMPLE STAT VALUE -->
                </div>
                <!-- /WIDGET SIMPLE STAT ROW -->
    
                <!-- WIDGET SIMPLE STAT ROW -->
                <div class="widget-simple-stat-row">
                  <!-- WIDGET SIMPLE STAT TITLE -->
                  <p class="widget-simple-stat-title">Damage Received</p>
                  <!-- /WIDGET SIMPLE STAT TITLE -->
    
                  <!-- WIDGET SIMPLE STAT VALUE -->
                  <p class="widget-simple-stat-value">38.204</p>
                  <!-- /WIDGET SIMPLE STAT VALUE -->
                </div>
                <!-- /WIDGET SIMPLE STAT ROW -->
    
                <!-- WIDGET SIMPLE STAT ROW -->
                <div class="widget-simple-stat-row">
                  <!-- WIDGET SIMPLE STAT TITLE -->
                  <p class="widget-simple-stat-title">Eliminations</p>
                  <!-- /WIDGET SIMPLE STAT TITLE -->
    
                  <!-- WIDGET SIMPLE STAT VALUE -->
                  <p class="widget-simple-stat-value">47</p>
                  <!-- /WIDGET SIMPLE STAT VALUE -->
                </div>
                <!-- /WIDGET SIMPLE STAT ROW -->
    
                <!-- WIDGET SIMPLE STAT ROW -->
                <div class="widget-simple-stat-row">
                  <!-- WIDGET SIMPLE STAT TITLE -->
                  <p class="widget-simple-stat-title">Deaths</p>
                  <!-- /WIDGET SIMPLE STAT TITLE -->
    
                  <!-- WIDGET SIMPLE STAT VALUE -->
                  <p class="widget-simple-stat-value">9</p>
                  <!-- /WIDGET SIMPLE STAT VALUE -->
                </div>
                <!-- /WIDGET SIMPLE STAT ROW -->
    
                <!-- WIDGET SIMPLE STAT ROW -->
                <div class="widget-simple-stat-row">
                  <!-- WIDGET SIMPLE STAT TITLE -->
                  <p class="widget-simple-stat-title">Team Damage</p>
                  <!-- /WIDGET SIMPLE STAT TITLE -->
    
                  <!-- WIDGET SIMPLE STAT VALUE -->
                  <p class="widget-simple-stat-value">43%</p>
                  <!-- /WIDGET SIMPLE STAT VALUE -->
                </div>
                <!-- /WIDGET SIMPLE STAT ROW -->
    
                <!-- WIDGET SIMPLE STAT ROW -->
                <div class="widget-simple-stat-row">
                  <!-- WIDGET SIMPLE STAT TITLE -->
                  <p class="widget-simple-stat-title">Most Played Hero</p>
                  <!-- /WIDGET SIMPLE STAT TITLE -->
    
                  <!-- TEAM INFO WRAP -->
                  <div class="team-info-wrap small inverted">
                    <!-- HEXAGON -->
                    <div class="hexagon hexagon-wrap small light">
                      <!-- HEXAGON IN1 -->
                      <div class="hexagon-in1">
                        <!-- HEXAGON IN2 -->
                        <div class="hexagon-in2 hexagon-wrap">
                          <!-- HEXAGON -->
                          <div class="hexagon inner-hexagon">
                            <!-- HEXAGON IN1 -->
                            <div class="hexagon-in1">
                              <!-- HEXAGON IN2 -->
                              <div class="hexagon-in2 hexagon-area liquid">
                                <img src="img/characters/05.png" alt="character-05">
                              </div>
                              <!-- HEXAGON IN2 -->
                            </div>
                            <!-- /HEXAGON IN1 -->
                          </div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- HEXAGON IN2 -->
                      </div>
                      <!-- /HEXAGON IN1 -->
                    </div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /TEAM INFO WRAP -->
                </div>
                <!-- /WIDGET SIMPLE STAT ROW -->
              </div>
              <!-- /WIDGET SIMPLE STAT ROWS -->
            </div>
            <!-- /WIDGET SIMPLE STAT -->
          </div>
          <!-- /WIDGET SIMPLE STATS -->
        </div>
        <!-- /WIDGET MATCH BOX -->
      </div>
      <!-- /WIDGET SIDEBAR -->

      <!-- WIDGET SIDEBAR -->
      <div class="widget-sidebar">
        <!-- SECTION TITLE WRAP -->
        <div class="section-title-wrap violet">
          <h2 class="section-title medium">Medals Awarded</h2>
          <div class="section-title-separator"></div>
        </div>
        <!-- /SECTION TITLE WRAP -->

        <!-- WIDGET MEDALS -->
        <div class="widget-medals multiple-items">
          <!-- WIDGET MEDALS IMG -->
          <img class="widget-medals-img" src="img/teams/awards/medal-all.png" alt="medal-all">
          <!-- /WIDGET MEDALS IMG -->
  
          <!-- WIDGET MEDALS INFO -->
          <div class="widget-medals-info">
            <!-- WIDGET MEDALS TITLE -->
            <p class="widget-medals-title">447</p>
            <!-- /WIDGET MEDALS TITLE -->
  
            <!-- WIDGET MEDALS TEXT -->
            <p class="widget-medals-text">Total medals</p>
            <!-- /WIDGET MEDALS TEXT -->
          </div>
          <!-- /WIDGET MEDALS INFO -->
  
          <!-- WIDGET MEDALS INFO -->
          <div class="widget-medals-info">
            <!-- WIDGET MEDALS TITLE -->
            <p class="widget-medals-title">3.15</p>
            <!-- /WIDGET MEDALS TITLE -->
  
            <!-- WIDGET MEDALS TEXT -->
            <p class="widget-medals-text">Average</p>
            <!-- /WIDGET MEDALS TEXT -->
          </div>
          <!-- /WIDGET MEDALS INFO -->
        </div>
        <!-- /WIDGET MEDALS -->
  
        <!-- WIDGET MEDALS -->
        <div class="widget-medals">
          <!-- MEDAL LIST -->
          <div class="medal-list">
            <!-- MEDAL LIST ITEM -->
            <div class="medal-list-item">
              <!-- MEDAL LIST ITEM IMG -->
              <img class="medal-list-item-img" src="img/teams/awards/medal-gold-big.png" alt="medal-gold">
              <!-- /MEDAL LIST ITEM IMG -->
  
              <!-- MEDAL LIST ITEM INFO -->
              <div class="medal-list-item-info">
                <!-- MEDAL LIST ITEM TITLE -->
                <p class="medal-list-item-title">228</p>
                <!-- /MEDAL LIST ITEM TITLE -->
  
                <!-- MEDAL LIST ITEM TEXT -->
                <p class="medal-list-item-text">1.61 avg</p>
                <!-- /MEDAL LIST ITEM TEXT -->
              </div>
              <!-- /MEDAL LIST ITEM INFO -->
            </div>
            <!-- /MEDAL LIST ITEM -->
  
            <!-- MEDAL LIST ITEM -->
            <div class="medal-list-item">
              <!-- MEDAL LIST ITEM IMG -->
              <img class="medal-list-item-img" src="img/teams/awards/medal-silver-big.png" alt="medal-silver">
              <!-- /MEDAL LIST ITEM IMG -->
  
              <!-- MEDAL LIST ITEM INFO -->
              <div class="medal-list-item-info">
                <!-- MEDAL LIST ITEM TITLE -->
                <p class="medal-list-item-title">115</p>
                <!-- /MEDAL LIST ITEM TITLE -->
  
                <!-- MEDAL LIST ITEM TEXT -->
                <p class="medal-list-item-text">0.81 avg</p>
                <!-- /MEDAL LIST ITEM TEXT -->
              </div>
              <!-- /MEDAL LIST ITEM INFO -->
            </div>
            <!-- /MEDAL LIST ITEM -->
  
            <!-- MEDAL LIST ITEM -->
            <div class="medal-list-item">
              <!-- MEDAL LIST ITEM IMG -->
              <img class="medal-list-item-img" src="img/teams/awards/medal-bronze-big.png" alt="medal-bronze">
              <!-- /MEDAL LIST ITEM IMG -->
  
              <!-- MEDAL LIST ITEM INFO -->
              <div class="medal-list-item-info">
                <!-- MEDAL LIST ITEM TITLE -->
                <p class="medal-list-item-title">104</p>
                <!-- /MEDAL LIST ITEM TITLE -->
  
                <!-- MEDAL LIST ITEM TEXT -->
                <p class="medal-list-item-text">0.73 avg</p>
                <!-- /MEDAL LIST ITEM TEXT -->
              </div>
              <!-- /MEDAL LIST ITEM INFO -->
            </div>
            <!-- /MEDAL LIST ITEM -->
          </div>
          <!-- /MEDAL LIST -->
        </div>
        <!-- /WIDGET MEDALS -->
      </div>
      <!-- /WIDGET SIDEBAR -->

      <!-- WIDGET SIDEBAR -->
      <div class="widget-sidebar">
        <!-- SECTION TITLE WRAP -->
        <div class="section-title-wrap violet">
          <h2 class="section-title medium">Team Bio</h2>
          <div class="section-title-separator"></div>
        </div>
        <!-- /SECTION TITLE WRAP -->

        <!-- BIO ITEMS -->
        <div class="bio-items">
          <!-- BIO ITEM -->
          <div class="bio-item">
            <!-- BIO ITEM TITLE -->
            <p class="bio-item-title">Founding The Lone Wolves</p>
            <!-- /BIO ITEM TITLE -->

            <!-- BIO ITEM TEXT -->
            <p class="bio-item-text">Lorem ipsum dolor sit amet, consectetur bere adipisicing elit, sed do eiusmod tempor lorem incididunt ut labore et dolore magna. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo en der lorem ipsum dolorem.</p>
            <!-- /BIO ITEM TEXT -->
          </div>
          <!-- /BIO ITEM -->
        </div>
        <!-- /BIO ITEMS -->
      </div>
      <!-- /WIDGET SIDEBAR -->

      <!-- WIDGET SIDEBAR -->
      <div class="widget-sidebar">
        <!-- SECTION TITLE WRAP -->
        <div class="section-title-wrap violet small-space">
          <h2 class="section-title medium">Heroes Win Rate</h2>
          <div class="section-title-separator"></div>
        </div>
        <!-- /SECTION TITLE WRAP -->

        <!-- TABLE -->
        <div class="table champion-rates">
          <!-- TABLE ROW HEADER -->
          <div class="table-row-header">
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item left">
              <p class="table-row-header-title">Hero/Role</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
    
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item">
              <p class="table-row-header-title">Win Rate</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
          </div>
          <!-- /TABLE ROW HEADER -->
    
          <!-- TABLE ROWS -->
          <div class="table-rows no-color">
            <!-- TABLE ROW -->
            <div class="table-row">
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- TEAM INFO WRAP -->
                <div class="team-info-wrap">
                  <!-- HEXAGON -->
                  <div class="hexagon hexagon-wrap small violet">
                    <!-- HEXAGON IN1 -->
                    <div class="hexagon-in1">
                      <!-- HEXAGON IN2 -->
                      <div class="hexagon-in2 hexagon-wrap">
                        <!-- HEXAGON -->
                        <div class="hexagon inner-hexagon">
                          <!-- HEXAGON IN1 -->
                          <div class="hexagon-in1">
                            <!-- HEXAGON IN2 -->
                            <div class="hexagon-in2 hexagon-area liquid">
                              <img src="img/characters/04.png" alt="character-04">
                            </div>
                            <!-- HEXAGON IN2 -->
                          </div>
                          <!-- /HEXAGON IN1 -->
                        </div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- HEXAGON IN2 -->
                    </div>
                    <!-- /HEXAGON IN1 -->
                  </div>
                  <!-- /HEXAGON -->
                  
                  <!-- TEAM INFO -->
                  <div class="team-info">
                    <p class="team-name">Vanstus</p>
                    <p class="team-country">TANK</p>
                  </div>
                  <!-- /TEAM INFO -->
                </div>
                <!-- /TEAM INFO WRAP -->
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- PROGRESS BAR -->
                <div id="t-cr-pgb-01" class="progress-bar link-left"></div>
                <!-- /PROGRESS BAR -->
              </div>
              <!-- /TABLE ROW ITEM -->
            </div>
            <!-- /TABLE ROW -->
    
            <!-- TABLE ROW -->
            <div class="table-row">
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- TEAM INFO WRAP -->
                <div class="team-info-wrap">
                  <!-- HEXAGON -->
                  <div class="hexagon hexagon-wrap small red">
                    <!-- HEXAGON IN1 -->
                    <div class="hexagon-in1">
                      <!-- HEXAGON IN2 -->
                      <div class="hexagon-in2 hexagon-wrap">
                        <!-- HEXAGON -->
                        <div class="hexagon inner-hexagon">
                          <!-- HEXAGON IN1 -->
                          <div class="hexagon-in1">
                            <!-- HEXAGON IN2 -->
                            <div class="hexagon-in2 hexagon-area liquid">
                              <img src="img/characters/05.png" alt="character-05">
                            </div>
                            <!-- HEXAGON IN2 -->
                          </div>
                          <!-- /HEXAGON IN1 -->
                        </div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- HEXAGON IN2 -->
                    </div>
                    <!-- /HEXAGON IN1 -->
                  </div>
                  <!-- /HEXAGON -->
                  
                  <!-- TEAM INFO -->
                  <div class="team-info">
                    <p class="team-name">Galium</p>
                    <p class="team-country">OFFENSE</p>
                  </div>
                  <!-- /TEAM INFO -->
                </div>
                <!-- /TEAM INFO WRAP -->
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- PROGRESS BAR -->
                <div id="t-cr-pgb-02" class="progress-bar link-left"></div>
                <!-- /PROGRESS BAR -->
              </div>
              <!-- /TABLE ROW ITEM -->
            </div>
            <!-- /TABLE ROW -->
    
            <!-- TABLE ROW -->
            <div class="table-row">
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- TEAM INFO WRAP -->
                <div class="team-info-wrap">
                  <!-- HEXAGON -->
                  <div class="hexagon hexagon-wrap small blue">
                    <!-- HEXAGON IN1 -->
                    <div class="hexagon-in1">
                      <!-- HEXAGON IN2 -->
                      <div class="hexagon-in2 hexagon-wrap">
                        <!-- HEXAGON -->
                        <div class="hexagon inner-hexagon">
                          <!-- HEXAGON IN1 -->
                          <div class="hexagon-in1">
                            <!-- HEXAGON IN2 -->
                            <div class="hexagon-in2 hexagon-area liquid">
                              <img src="img/characters/07.png" alt="character-07">
                            </div>
                            <!-- HEXAGON IN2 -->
                          </div>
                          <!-- /HEXAGON IN1 -->
                        </div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- HEXAGON IN2 -->
                    </div>
                    <!-- /HEXAGON IN1 -->
                  </div>
                  <!-- /HEXAGON -->
                  
                  <!-- TEAM INFO -->
                  <div class="team-info">
                    <p class="team-name">Rekson</p>
                    <p class="team-country">DEFENSE</p>
                  </div>
                  <!-- /TEAM INFO -->
                </div>
                <!-- /TEAM INFO WRAP -->
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- PROGRESS BAR -->
                <div id="t-cr-pgb-03" class="progress-bar link-left"></div>
                <!-- /PROGRESS BAR -->
              </div>
              <!-- /TABLE ROW ITEM -->
            </div>
            <!-- /TABLE ROW -->
    
            <!-- TABLE ROW -->
            <div class="table-row">
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- TEAM INFO WRAP -->
                <div class="team-info-wrap">
                  <!-- HEXAGON -->
                  <div class="hexagon hexagon-wrap small cyan">
                    <!-- HEXAGON IN1 -->
                    <div class="hexagon-in1">
                      <!-- HEXAGON IN2 -->
                      <div class="hexagon-in2 hexagon-wrap">
                        <!-- HEXAGON -->
                        <div class="hexagon inner-hexagon">
                          <!-- HEXAGON IN1 -->
                          <div class="hexagon-in1">
                            <!-- HEXAGON IN2 -->
                            <div class="hexagon-in2 hexagon-area liquid">
                              <img src="img/characters/10.png" alt="character-10">
                            </div>
                            <!-- HEXAGON IN2 -->
                          </div>
                          <!-- /HEXAGON IN1 -->
                        </div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- HEXAGON IN2 -->
                    </div>
                    <!-- /HEXAGON IN1 -->
                  </div>
                  <!-- /HEXAGON -->
                  
                  <!-- TEAM INFO -->
                  <div class="team-info">
                    <p class="team-name">Magina</p>
                    <p class="team-country">SUPPORT</p>
                  </div>
                  <!-- /TEAM INFO -->
                </div>
                <!-- /TEAM INFO WRAP -->
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- PROGRESS BAR -->
                <div id="t-cr-pgb-04" class="progress-bar link-left"></div>
                <!-- /PROGRESS BAR -->
              </div>
              <!-- /TABLE ROW ITEM -->
            </div>
            <!-- /TABLE ROW -->
    
            <!-- TABLE ROW -->
            <div class="table-row">
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- TEAM INFO WRAP -->
                <div class="team-info-wrap">
                  <!-- HEXAGON -->
                  <div class="hexagon hexagon-wrap small cyan">
                    <!-- HEXAGON IN1 -->
                    <div class="hexagon-in1">
                      <!-- HEXAGON IN2 -->
                      <div class="hexagon-in2 hexagon-wrap">
                        <!-- HEXAGON -->
                        <div class="hexagon inner-hexagon">
                          <!-- HEXAGON IN1 -->
                          <div class="hexagon-in1">
                            <!-- HEXAGON IN2 -->
                            <div class="hexagon-in2 hexagon-area liquid">
                              <img src="img/characters/12.png" alt="character-12">
                            </div>
                            <!-- HEXAGON IN2 -->
                          </div>
                          <!-- /HEXAGON IN1 -->
                        </div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- HEXAGON IN2 -->
                    </div>
                    <!-- /HEXAGON IN1 -->
                  </div>
                  <!-- /HEXAGON -->
                  
                  <!-- TEAM INFO -->
                  <div class="team-info">
                    <p class="team-name">Duvida</p>
                    <p class="team-country">SUPPORT</p>
                  </div>
                  <!-- /TEAM INFO -->
                </div>
                <!-- /TEAM INFO WRAP -->
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <!-- PROGRESS BAR -->
                <div id="t-cr-pgb-05" class="progress-bar link-left"></div>
                <!-- /PROGRESS BAR -->
              </div>
              <!-- /TABLE ROW ITEM -->
            </div>
            <!-- /TABLE ROW -->
          </div>
          <!-- /TABLE ROWS -->
        </div>
        <!-- /TABLE -->
      </div>
      <!-- /WIDGET SIDEBAR -->
    </div>
    <!-- /LAYOUT SIDEBAR -->
  </div>
  <!-- LAYOUT CONTENT 1 -->

  <!-- LAYOUT CONTENT FULL -->
  <div class="layout-content-full grid-limit layout-item gutter-big">
    <!-- WIDGET ITEM -->
    <div class="widget-item">
      <!-- SECTION TITLE WRAP -->
      <div class="section-title-wrap violet small-space">
        <h2 class="section-title medium">Monthly Single Bar Infographic</h2>
        <div class="section-title-separator"></div>
      </div>
      <!-- /SECTION TITLE WRAP -->

      <!-- WIDGET TITLE WRAP -->
      <div class="widget-title-wrap">
          <!-- WIDGET TITLE ITEM -->
          <div class="widget-title-item">
            <!-- DROPDOWN SIMPLE WRAP -->
            <div class="dropdown-simple-wrap">
              <!-- DP CURRENT OPTION -->
              <div id="bsi-dropdown-01-trigger" class="dp-current-option">
                <!-- DP CURRENT OPTION VALUE -->
                <div id="bsi-dropdown-01-option-value" class="dp-current-option-value">
                  <p class="dp-option-text">January 2018</p>
                </div>
                <!-- /DP CURRENT OPTION VALUE -->

                <!-- ARROW ICON -->
                <svg class="arrow-icon">
                  <use xlink:href="#svg-arrow"></use>
                </svg>
                <!-- /ARROW ICON -->
              </div>
              <!-- /DP CURRENT OPTION -->

              <!-- DP OPTIONS -->
              <div id="bsi-dropdown-01" class="dp-options small">
                <!-- DP OPTION -->
                <div class="dp-option">
                  <p class="dp-option-text">January 2018</p>
                </div>
                <!-- /DP OPTION -->

                <!-- DP OPTION -->
                <div class="dp-option">
                  <p class="dp-option-text">February 2018</p>
                </div>
                <!-- /DP OPTION -->
              </div>
              <!-- /DP OPTIONS -->
            </div>
            <!-- /DROPDOWN SIMPLE WRAP -->
          </div>
          <!-- /WIDGET TITLE ITEM -->

          <!-- STATS REFERENCE -->
          <div class="stats-reference">
            <!-- STAT REFERENCE -->
            <div class="stat-reference violet">
              <!-- STAT REFERENCE TEXT -->
              <p class="stat-reference-text">Davikinger90 new twitch subscribers</p>
              <!-- /STAT REFERENCE TEXT -->
            </div>
            <!-- /STAT REFERENCE -->
          </div>
          <!-- /STATS REFERENCE -->
        </div>
        <!-- /WIDGET TITLE WRAP -->

        <!-- CHART WRAP -->
        <div class="chart-wrap grid3-1col">
          <!-- CHART BARS -->
          <canvas class="chart-bars-single"></canvas>
          <!-- /CHART BARS -->
        </div>
        <!-- /CHART WRAP -->
    </div>
    <!-- /WIDGET ITEM -->
  </div>
  <!-- /LAYOUT CONTENT FULL -->

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
