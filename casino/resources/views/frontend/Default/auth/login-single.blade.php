@extends('frontend.Default.layouts.base-layout')

@section('page-title', $title)
@section('body', $body)

@section('content')
  <div id="login-box">
    <div id="login-render-01" class="render-container d-none d-lg-block">
      <div class="render-box">
        <picture>
          <source srcset="/frontend/Moon88/img/renders/render-01.webp" type="image/webp">
          <img src="/frontend/Moon88/img/renders/render-01.png" alt="" />
        </picture>
      </div>
    </div>
    <div id="login-render-02" class="render-container d-none d-lg-block">
      <div class="render-box">
        <picture>
          <source srcset="/frontend/Moon88/img/renders/render-02.webp" type="image/webp">
          <img src="/frontend/Moon88/img/renders/render-02.png" alt="" />
        </picture>
      </div>
    </div>
    <div id="login-render-03" class="render-container d-none d-lg-block">
      <div class="render-box">
        <picture>
          <source srcset="/frontend/Moon88/img/renders/render-03.webp" type="image/webp">
          <img src="/frontend/Moon88/img/renders/render-03.png" alt="" />
        </picture>
      </div>
    </div>
    <div id="login-inner-box">
        <img id="login-img" src="/frontend/Moon88/img/logo2.png" alt="Logo">
      @include('backend.partials.messages')
      <form name="form" method="post" class="form-validation" action="<?= route('frontend.auth.login.post') ?>">
        <input type="hidden" value="<?= csrf_token() ?>" name="_token">
        <div class="text-danger wrapper text-center" ng-show="authError"></div>
        <div class="input-group mb-3">
          <label class="input-group-text" for="username">@lang('app.email_or_username')</label>
          <input type="text" class="form-control" name="username" id="username" placeholder="@lang('app.email_or_username')">
        </div>
        <div class="input-group mb-3">
          <label class="input-group-text" for="password">@lang('app.password')</label>
          <input type="password" class="form-control" name="password" id="password" placeholder="@lang('app.password')">
        </div>
        <div class="d-grid gap-2 mb-3">
          <button type="submit" class="btn btn-login btn-lg btn-primary btn-block">@lang('app.log_in')</button>
        </div>
        <div class="text-center">
          <span style="margin-top: 5px;"><a href="{{url('password/remind')}}" >Forgot password</a> | <a href="{{url('register')}}" >Not registered yet</a></span>
        </div>
      </form>
    </div>

    <div id="login-render-04" class="render-container d-none d-lg-block">
      <div class="render-box">
        <picture>
          <source srcset="/frontend/Moon88/img/renders/render-04.webp" type="image/webp">
          <img src="/frontend/Moon88/img/renders/render-04.png" alt="" />
        </picture>
      </div>
    </div>
  </div>
@stop

@section('scripts')
  {!! JsValidator::formRequest('VanguardLTE\Http\Requests\Auth\LoginRequest', '#login-form') !!}
@stop
