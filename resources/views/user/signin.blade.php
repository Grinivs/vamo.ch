@extends('layouts/layoutindex')

@section('content')
<section class="container padding-top-3x">
  <h3 class="text-center mb-30">Login / Registrieren</h3><br>
  <div class="container padding-bottom-3x mb-2">
    <div class="row">
      <div class="col-md-6">
        @if(count($errors) > 0)
          <div class="alert alert-danger">
            @foreach($errors->all() as $error)
              <p>{{ $error }}</p>
            @endforeach
          </div>
          @endif
          <form class="login-box" method="post" action="{{ route('user.signin') }}">
            <h4 class="margin-bottom-1x">Login</h4>
            <div class="form-group input-group">
              <input class="form-control" type="text" id="email" name="email" placeholder="Email" required>
              <span class="input-group-addon">
                <i class="icon-mail"></i>
              </span>
            </div>
            <div class="form-group input-group">
              <input class="form-control" type="password" id="password" name="password" placeholder="Passwort" required>
              <span class="input-group-addon">
                <i class="icon-lock"></i>
              </span>
            </div>
            <div class="d-flex flex-wrap justify-content-between padding-bottom-1x">
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" id="remember_me" checked>
                <label class="custom-control-label" for="remember_me">Remember me</label>
              </div><a class="navi-link" href="account-password-recovery.html">Passwort vergessen?</a>
            </div>
            <div class="text-center text-sm-right">
              <button class="btn btn-primary margin-bottom-none" type="submit">Login</button>
              {{ csrf_field() }}
            </div>
          </form>
          </div>
          <div class="col-md-6">
            <div class="padding-top-3x hidden-md-up"></div>
              <h3 class="margin-bottom-1x">Kein Account? Registrieren</h3>
              <p>Die Registrierung dauert weniger als 1 Minute, erspart dir aber bei zukünftigen Bestellungen viel Zeit.</p>
              <form class="row" method="post">
                <div class="col-12 text-left ">
                  <button class="btn btn-primary margin-bottom-none" type="submit">Registrieren</button>
                </div>
              </form><br><br>
              <h3 class="margin-bottom-1x">Als Gast fortfahren</h3>
              <p>Ich möchte keinen Account erstellen und immer wieder meine Daten eingeben</p>
              <form class="row" method="post">
                <div class="col-12 text-left ">
                  <button class="btn btn-primary margin-bottom-none" type="submit" href="">Als Gest fortfahren</button>
                </div>
              </form>
      </div>
    </div>
  </div>
</section>
@endsection
