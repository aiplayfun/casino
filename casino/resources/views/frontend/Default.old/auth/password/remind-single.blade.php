<html lang="en" class="">

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="https://netbo.gapi.lol/css/v1/login/animate.css" type="text/css">
  <link rel="stylesheet" href="https://netbo.gapi.lol/css/v1/login/font-awesome.css" type="text/css">
  <link rel="stylesheet" href="https://netbo.gapi.lol/css/v1/login/simple-line-icons.css" type="text/css">
  <link rel="stylesheet" href="https://netbo.gapi.lol/css/v1/login/font.css" type="text/css">
  <link rel="stylesheet" href="https://netbo.gapi.lol/css/v1/login/app.css" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    html {
      background-color: #f0f3f4
    }

    body {
      font-family: source sans pro,helvetica neue,Helvetica,Arial,sans-serif;
      font-size: 14px;
      -webkit-font-smoothing: antialiased;
      line-height: 1.42857143;
      color: #58666e;
      background-color: transparent
    }
    #login-page {
      min-height: 100vh;
    }
    #side-content {
      min-height: 100vh;
    }
    #side-bg {
      min-height: 100vh;
      background-image:url('/frontend/Default/img/login-bg.jpg');
      background-size: cover;
      background-repeat: no-repeat;
    }
  </style>
</head>

<body>
  <div id="login-page" class="container-fluid">
    <div class="row">
      <div class="col-12 col-lg-6">
        <div id="side-content" class="row justify-content-center align-items-center">
          <div class="col-12 col-lg-6">
            <h1 class="display-4 text-center">Forget Password</h1>
            <div class="m-b-lg">
              @include('backend.partials.messages')
              <form name="form" method="post" class="form-validation" action="<?= route('frontend.password.remind.post') ?>">
                <input type="hidden" value="<?= csrf_token() ?>" name="_token">
                <div class="text-danger wrapper text-center" ng-show="authError"></div>
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="@lang('app.email')">
                  <label class="form-label" for="email">@lang('app.email')</label>
                </div>
                <div class="d-grid gap-2 mb-3">
                  <button type="submit" class="btn btn-lg btn-primary btn-block">@lang('app.log_in')</button>
                </div>
                <div class="text-center">
                  <span style="margin-top: 5px;"><a href="{{url('login')}}" >Back to Login</a></span>
                </div>
              </form>
            </div>
            <div class="text-center">
              <p>
                <small class="text-center">Haodilao <br>&copy; 2024</small>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div id="side-bg" class="d-none d-lg-block col-lg-6">
        &nbsp;
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

@section('scripts')
  {!! JsValidator::formRequest('VanguardLTE\Http\Requests\Auth\LoginRequest', '#login-form') !!}
@stop
