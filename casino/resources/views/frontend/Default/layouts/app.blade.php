<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs ----------------------------------------------->
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, height=device-height"/>

  <!-- Page HTML Meta -------------------------------------------------------->
  <title>@yield('page-title') - {{ config('app_name') }}</title>
  <meta name="description" content="@yield('description')">
  <meta name="keywords" content="@yield('keywords')" />
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Open Graph Meta -------------------------------------------------------->
  <meta property="og:type" content="website" />
  <meta property="og:title" content="@yield('page-title') - {{ settings('app_name') }}" />
  <meta property="og:description" content="@yield('description')" />
  <meta property="og:url" content="{{ url('') }}">
  <meta property="og:image" content="/frontend/Moon88/img/og-img.png"/>
  <meta property="og:image:width" content="1200"/>
  <meta property="og:image:height" content="630"/>

  <!-- Twitter Card Meta -------------------------------------------------------->
  <meta name="twitter:card" content="summary_large_image" />
  <meta property="twitter:domain" content="{{ url('') }}">
  <meta property="twitter:url" content="{{ parse_url(url(''), PHP_URL_HOST) }}">
  <meta name="twitter:title" content="@yield('page-title') - {{ settings('app_name') }}"/>
  <meta name="twitter:description" content="@yield('description')"/>
  <meta name="twitter:image" content="/frontend/Moon88/img/og-img.png"/>

  <!-- Favicon Meta -------------------------------------------------------->
  <?php /* favicon disabled for now
  <link rel="apple-touch-icon" sizes="120x120" href="/frontend/Moon88/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/frontend/Moon88/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/frontend/Moon88/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="/frontend/Moon88/img/favicon/site.webmanifest">
  <link rel="mask-icon" href="/frontend/Moon88/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="/frontend/Moon88/img/favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="/frontend/Moon88/img/favicon/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  */ ?>



  <!-- Stylesheets ---------------------------------------------------->
  <link rel="stylesheet" href="/frontend/Moon88/css/styles.css" type="text/css" charset="utf-8">
</head>
<body>
  <div id="loader-box">
    <div class="render-container">
      <div class="render-box">
        <picture>
          <source srcset="/frontend/Moon88/img/renders/loading.webp" type="image/webp">
          <img src="/frontend/Moon88/img/renders/loading.png" alt="" />
        </picture>
      </div>
    </div>
    <div class="loader"></div>
    <div id="loading-text">Settings things up...</div>
  </div>
  @php
      if(Auth::check() && auth()->user()->email == 'demo01@gmail.com'){
          \Auth::logout();
          echo "<script>location.reload()</script>";
      }
      if(Auth::check()){
          $currency = auth()->user()->present()->shop ? auth()->user()->present()->shop->currency : '';
      } else{
          $currency = '';
      }
  @endphp
  <main id="main-content-box">
    <nav id="main-nav" class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
      <div class="container-fluid">
        <a id="main-nav-logo" class="navbar-brand" href="#">
          <picture>
            <source srcset="/frontend/Moon88/img/logo.webp" type="image/webp">
            <img src="/frontend/Moon88/img/logo.png" alt="" />
          </picture>
        </a>
        <div class="jackpot-block d-none d-sm-flex d-lg-none">
          <div class="jackpot-box jc-grand">
            <span class="jackpot-title">{{$jpgs[0]->name}}</span>
            <span class="jackpot-value">${{$jpgs[0]->balance*100}}</span>
          </div>
          <div class="jackpot-box jc-major">
            <span class="jackpot-title">{{$jpgs[1]->name}}</span>
            <span class="jackpot-value">${{$jpgs[1]->balance*100}}</span>
          </div>
          <div class="jackpot-box jc-minor">
            <span class="jackpot-title">{{$jpgs[2]->name}}</span>
            <span class="jackpot-value">${{$jpgs[2]->balance*100}}</span>
          </div>
          <div class="jackpot-box jc-mini">
            <span class="jackpot-title">{{$jpgs[3]->name}}</span>
            <span class="jackpot-value">${{$jpgs[3]->balance*100}}</span>
          </div>
        </div>
        <div class="">
          <button id="btn-maximize" class="navbar-toggler" type="button">
            <i class="fa-solid fa-maximize">&#8203;</i>
          </button>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbar-jackpots" aria-controls="navbar-jackpots" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-circle-chevron-left">&#8203;</i>
          </button>
        </div>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="navbar-jackpots" aria-labelledby="navbar-label">
          <div class="offcanvas-header">
            <div class="offcanvas-title" id="navbar-label">
              <picture>
                <source srcset="/frontend/Moon88/img/logo.webp" type="image/webp">
                <img src="/frontend/Moon88/img/logo.png" alt="" />
              </picture>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <div id="nav-promo" class="promo-box mb-3">
              <!-- Slider main container -->
              <div class="promo-swiper swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                  <!-- Slides -->
                  <div class="swiper-slide">
                    <picture>
                      <source srcset="/frontend/Moon88/img/promo/banner.webp" type="image/webp">
                      <img src="/frontend/Moon88/img/promo/banner.png" alt="" />
                    </picture>
                  </div>
                  <div class="swiper-slide">
                    <picture>
                      <source srcset="/frontend/Moon88/img/promo/banner.webp" type="image/webp">
                      <img src="/frontend/Moon88/img/promo/banner.png" alt="" />
                    </picture>
                  </div>
                  <div class="swiper-slide">
                    <picture>
                      <source srcset="/frontend/Moon88/img/promo/banner.webp" type="image/webp">
                      <img src="/frontend/Moon88/img/promo/banner.png" alt="" />
                    </picture>
                  </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar
                <div class="swiper-scrollbar"></div>
                -->
              </div>
            </div>
            <div id="jpb2" class="jackpot-block d-sm-none d-md-flex">
              <div class="jackpot-box jc-grand">
                <span class="jackpot-title">{{$jpgs[0]->name}}</span>
                <span class="jackpot-value">${{$jpgs[0]->balance*100}}</span>
              </div>
              <div class="jackpot-box jc-major">
                <span class="jackpot-title">{{$jpgs[1]->name}}</span>
                <span class="jackpot-value">${{$jpgs[1]->balance*100}}</span>
              </div>
              <div class="jackpot-box jc-minor">
                <span class="jackpot-title">{{$jpgs[2]->name}}</span>
                <span class="jackpot-value">${{$jpgs[2]->balance*100}}</span>
              </div>
              <div class="jackpot-box jc-mini">
                <span class="jackpot-title">{{$jpgs[3]->name}}</span>
                <span class="jackpot-value">${{$jpgs[3]->balance*100}}</span>
              </div>
            </div>
            <form id="locale-block" class="d-flex">
              <select id="locale-select" style="width:100%;">&#8203;</select>
            </form>
          </div>
        </div>
      </div>
    </nav>
    <section id="side-nav">
      <div class="side-nav-box">
        <div class="side-btn side-hot">
          <a class="side-btn-txt" href="{{ route('frontend.game.list.category', 'hot') }}" target="_self">@lang('app.hot_game')</a>
          <div class="side-btn-img">&#8203;</div>
        </div>
      </div>
      <div class="side-nav-box">
        <div class="side-btn side-new">
          <a class="side-btn-txt" href="{{ route('frontend.game.list.category', 'new') }}" target="_self">@lang('app.new')</a>
          <div class="side-btn-img">&#8203;</div>
        </div>
      </div>
      <div class="side-nav-box">
        <div class="side-btn side-slots">
          <a class="side-btn-txt" href="{{ route('frontend.game.list.category', 'slots') }}" target="_self">@lang('app.slots')</a>
          <div class="side-btn-img">&#8203;</div>
        </div>
      </div>
      <div class="side-nav-box">
        <div class="side-btn side-arcade">
          <a class="side-btn-txt" href="{{ route('frontend.game.list.category', 'jackpot') }}" target="_self">@lang('app.arcade')</a>
          <div class="side-btn-img">&#8203;</div>
        </div>
      </div>
      <div class="side-nav-box">
        <div class="side-btn side-roulette">
          <a class="side-btn-txt" href="{{ route('frontend.game.list.category', 'roulette') }}" target="_self">@lang('app.roulette')</a>
          <div class="side-btn-img">&#8203;</div>
        </div>
      </div>
    </section>
    <section id="main-content" class="container-fluid">
      @yield('content')
    </section>
    <section id="bottom-bar" class="fixed-bottom">
      <div class="user-profile d-sm-flex">
        <div id="user-profile-bg">&#8203;</div>
        <span id="toggle-bottombar"><i class="fa-solid fa-circle-chevron-up">&#8203;</i></span>

        <div class="user-avatar-col">
          <div class="user-avatar">
            <picture>
              <source srcset="/frontend/Moon88/img/avatar/placeholder.webp" type="image/webp2">
              <img src="/frontend/Moon88/img/avatar/placeholder.png" alt="" />
            </picture>
          </div>
          <div class="user-buttons">
            @if( isset(auth()->user()->username) )
            <span class="user-btn btn-profile"  data-bs-toggle="modal"  data-bs-target="#balanceModal">Profile</span>
            <a class="user-btn btn-logout" href="{{ route('frontend.auth.logout') }}" target="_self">Logout</a>
            @else
            <span class="user-btn btn-logout" data-bs-toggle="modal"  data-bs-target="#loginModal">Login</span>
            <?php /* {{url('login')}} */ ?>
            @endif
          </div>
        </div>

        <div class="user-profile-in">
          <div class="user-name">
            @if( isset(auth()->user()->username) )
            {{ auth()->user()->username }}
            @else
            Guest#123123
            @endif
          </div>
          <div class="user-numbers user-balance">
            <span class="user-label">Balance</span>
            <span class="user-value">{{ number_format(auth()->user()->balance, 2, '.', '') }} {{ isset($currency) ? $currency : 'MYR' }}</span>
          </div>
          <div class="user-numbers user-winnings">
            <span class="user-label">Winnings</span>
            <span class="user-value">????</span>
          </div>
        </div>

        <div id="user-profile-extra">
          <div id="extra-links">
            <a class="user-links-btn btn-deposit" href="#" target="_self" data-bs-toggle="modal"  data-bs-target="#depositModal">Deposit</a>
            <a class="user-links-btn btn-history" href="#" target="_self" data-bs-toggle="modal"  data-bs-target="#historyModal">History</a>
            <a class="user-links-btn btn-favorites" href="#" target="_self">Favorites</a>
          </div>
          <div id="extra-links-side">
            <a class="user-links-btn btn-hot" href="{{ route('frontend.game.list.category', 'hot') }}" target="_self">@lang('app.hot_game')</a>
            <a class="user-links-btn btn-new" href="{{ route('frontend.game.list.category', 'new') }}" target="_self">@lang('app.new')</a>
            <a class="user-links-btn btn-slots" href="{{ route('frontend.game.list.category', 'slots') }}" target="_self">@lang('app.slots')</a>
            <a class="user-links-btn btn-arcade" href="{{ route('frontend.game.list.category', 'jackpot') }}" target="_self">@lang('app.arcade')</a>
            <a class="user-links-btn btn-roulette" href="{{ route('frontend.game.list.category', 'roulette') }}" target="_self">@lang('app.roulette')</a>
          </div>
        </div>

      </div>

      <?php /*
      <div id="user-links" class="d-none d-lg-flex">
        <a class="user-links-btn btn-deposit" href="#" target="_self" data-bs-toggle="modal"  data-bs-target="#depositModal">Deposit</a>
        <a class="user-links-btn btn-history" href="#" target="_self" data-bs-toggle="modal"  data-bs-target="#historyModal">History</a>
        <a class="user-links-btn btn-favorites" href="#" target="_self">Favorites</a>
      </div>
      */?>

      <div id="btm-promo" class="promo-box">
        <!-- Slider main container -->
        <div class="promo-swiper swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <picture>
                <source srcset="/frontend/Moon88/img/promo/banner.webp" type="image/webp">
                <img src="/frontend/Moon88/img/promo/banner.png" alt="" />
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="/frontend/Moon88/img/promo/banner.webp" type="image/webp">
                <img src="/frontend/Moon88/img/promo/banner.png" alt="" />
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="/frontend/Moon88/img/promo/banner.webp" type="image/webp">
                <img src="/frontend/Moon88/img/promo/banner.png" alt="" />
              </picture>
            </div>
          </div>
          <!-- If we need pagination -->
          <div class="swiper-pagination"></div>

          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

          <!-- If we need scrollbar
          <div class="swiper-scrollbar"></div>
          -->
        </div>
      </div>
    </section>
  </main>

  <!-- Modal -->
  <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" data-bs-theme="dark">
          <div class="modal-title" id="loginModalLabel">
            <picture>
              <source srcset="/frontend/Moon88/img/logo2.webp" type="image/webp2">
              <img src="/frontend/Moon88/img/logo2.png" alt="" />
            </picture>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form data-bs-theme="dark">
            <div class="form-floating mb-3">
              <input type="text" class="form-control rounded-4" id="floatingInput" placeholder="Username" autocomplete="username">
              <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control rounded-4" id="floatingPassword" placeholder="Password" autocomplete="current-password">
              <label for="floatingPassword">Password</label>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary btn-lg rounded-4 modal-button">Login</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="balanceModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="balanceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" data-bs-theme="dark">
          <h2 class="modal-title display-5" id="balanceModalLabel">
            @lang('app.pyour_welcome_ttl') {{ auth()->user()->username }}
          </h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <small>@lang('app.pyour_balance_ttl')</small>
          <div id="balance-table">
            <div class="balance-row">
              <div class="balance-label">@lang('app.pyour_balance')</div>
              <div class="balance-value">
                <span class="balance-amt">{{ number_format(auth()->user()->balance, 2, '.', '') }}</span> {{ isset($currency) ? $currency : 'MYR' }}
              </div>
            </div>
            <div class="balance-row">
              <div class="balance-label">@lang('app.pyour_bonus')</div>
              <div class="balance-value">
                <span class="balance-amt">{{ number_format(auth()->user()->bonus, 2, '.', '') }}</span> {{ isset($currency) ? $currency : 'MYR' }}
              </div>
            </div>
            <div class="balance-row">
              <div class="balance-label">@lang('app.pyour_wager')</div>
              <div class="balance-value">
                <span class="balance-amt">{{ number_format(auth()->user()->wager, 2, '.', '') }}</span> {{ isset($currency) ? $currency : 'MYR' }}
              </div>
            </div>
            @if (isset($refund) &&
              $refund &&
              auth()->user()->present()->count_refund > 0 &&
              auth()->user()->present()->balance <= $refund->min_balance)
            <div class="balance-row">
              <div class="balance-label">@lang('app.pyour_refunds')
              </div>
              <div class="balance-value">
                <span class="balance-amt">{{ number_format(auth()->user()->count_refund, 2, '.', '') }}</span> {{ isset($currency) ? $currency : 'MYR' }}
              </div>
            </div>
            @else
            <div class="balance-row">
              <div class="balance-label">@lang('app.pyour_refunds')
              </div>
              <div class="balance-value">
                <span class="balance-amt">{{ number_format(auth()->user()->count_refund, 2, '.', '') }}</span> {{ isset($currency) ? $currency : 'MYR' }}
              </div>
            </div>
            @endif
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary btn-lg rounded-4 modal-button"  data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="historyModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="historyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" data-bs-theme="dark">
          <h3 class="modal-title" id="historyModalLabel">
            @lang('app.games_date') | <span class="mdl-link" data-bs-toggle="modal"  data-bs-target="#depositModal">@lang('app.deposits_date')</span>
          </h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="table-responsive">
            <table class="table table-striped text-center">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">@lang('app.date')</th>
                  <th scope="col">@lang('app.game')</th>
                  <th scope="col">@lang('app.bet')</th>
                  <th scope="col">@lang('app.win')</th>
                </tr>
              </thead>
              <tbody>
              @if (isset($gamestat) && count($gamestat))
                @foreach ($gamestat as $k=>$stat)
                <tr>
                  <th scope="row">{{ $k+1 }}</th>
                  <td>{{ date('Y-m-d H:i', strtotime($stat->date_time)) }}</td>
                  <td class="text-mdl-blue">
                    <a href="{{ route('frontend.game.go', $stat->game) }}?api_exit=/">
                        {{ $stat->game }}
                    </a>
                  </td>
                  <td>{{ $stat->bet }}</td>
                  <td>{{ $stat->win }}</td>
                </tr>
                  @endforeach
                @else
                  <tr><td colspan="6">@lang('app.no_data')</td></tr>
                @endif
              </tbody>
            </table>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary btn-lg rounded-4 modal-button"  data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="depositModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="depositModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" data-bs-theme="dark">
          <h3 class="modal-title" id="depositModalLabel">
            <span class="mdl-link" data-bs-toggle="modal"  data-bs-target="#historyModal">@lang('app.games_date')</span> | @lang('app.deposits_date')
          </h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="table-responsive">
            <table class="table table-striped table-responsive text-center">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">@lang('app.date_date')</th>
                  <th scope="col">@lang('app.transaction_date')</th>
                  <th scope="col">@lang('app.deposits_date')</th>
                  <th scope="col">@lang('app.status_date')</th>
                </tr>
              </thead>
              <tbody>
                 @if (isset($depositlist) && count($depositlist))
                  @foreach ($depositlist as $k=>$row)
                    <tr>
                      <th scope="row">{{ $k+1 }}</th>
                      <td>{{ date('Y-m-d H:i', strtotime($row->created_at)) }}</td>
                      <td>{{ $row->id }}</td>
                      <td>{{ $row->sum }} {{ $row->currency }}</td>
                      <td>{{ $row->status }}</td>
                    </tr>
                  @endforeach
                @else
                  <tr><td colspan="6">@lang('app.no_data')</td></tr>
                @endif
              </tbody>
            </table>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary btn-lg rounded-4 modal-button"  data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <!-- Javascripts ---------------------------------------------------->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="/frontend/Moon88/js/modernizr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script type="text/javascript" src="/frontend/Moon88/js/scripts.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        setTimeout(function(){
          $('#loader-box').fadeOut('slow');
        }, 1000);
      });
    </script>
  </footer>
</body>
</html>