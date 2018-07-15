@extends('layouts/layoutindex')

@section('content')
  <div class="container padding-top-3x">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <h3>Registrierung</h3>
            @if(count($errors) > 0)
              <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                  <p>{{ $error }}</p>
                @endforeach
              </div>
            @endif
            <form  method="POST" action="{{ route('user.signup') }}">
              <div class="form-group">
                <label for="name">Name & Vorname</label>
                <input type="text" id="name" name="name" class="form-control">
              </div>
              <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="text" id="email" name="email" class="form-control">
              </div>
              <div class="form-group">
                <label for="password">Passwort</label>
                <input type="password" id="password" name="password" class="form-control">
              </div>
              
              <button type="submit" class="btn btn-primary">Registrieren</button>
              {{ csrf_field() }}









                        <!--
                            <label for="anrede" class="col-md-4 control-label">Anrede</label>

                            <div class="col-md-6">
                                <input id="anrede" type="text" class="form-control" name="anrede" value="{{ old('anrede') }}" required autofocus>

                                @if ($errors->has('anrede'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('anrede') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('vorname') ? ' has-error' : '' }}">
                            <label for="vorname" class="col-md-4 control-label">Vorname</label>

                            <div class="col-md-6">
                                <input id="vorname" type="text" class="form-control" name="vorname" value="{{ old('vorname') }}" required autofocus>

                                @if ($errors->has('vorname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('vorname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Adresse</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required autofocus>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('address2') ? ' has-error' : '' }}">
                            <label for="address2" class="col-md-4 control-label">Zusätzliche Adresse</label>

                            <div class="col-md-6">
                                <input id="address2" type="text" class="form-control" name="address2" value="{{ old('address2') }}" >

                                @if ($errors->has('address2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('plz') ? ' has-error' : '' }}">
                            <label for="plz" class="col-md-4 control-label">Postleitzahl</label>

                            <div class="col-md-6">
                                <input id="plz" type="text" class="form-control" name="plz" value="{{ old('plz') }}" required autofocus>

                                @if ($errors->has('plz'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('plz') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <label for="city" class="col-md-4 control-label">Ort</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" value="{{ old('city') }}" required autofocus>

                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
