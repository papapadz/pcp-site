@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'register', 'title' => __('PCP Ilocos Abra')])

@section('content')
<div class="container" style="height: auto;">
  <div class="row align-items-center">
    <div class="col-12 ml-auto mr-auto">
      <form class="form" method="POST" action="{{ route('register') }}">
        @csrf

        <div class="card card-login card-hidden mb-3">
          <div class="card-header card-header-primary text-center">
            <h4 class="card-title"><strong>{{ __('Register') }}</strong></h4>
          </div>
          <div class="card-body ">
            <div class="row">
              <div class="col-md-5 ml-auto">
                
                <div class="bmd-form-group{{ $errors->has('member_id') ? ' has-danger' : '' }} mt-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                          <i class="material-icons">menu</i>
                      </span>
                    </div>
                    <input maxlength="10" type="text" name="member_id" class="form-control" placeholder="{{ __('Member ID (Leave blank if you have no Member ID)') }}" value="{{ old('member_id') }}" >
                  </div>
                  @if ($errors->has('member_id'))
                    <div id="member-id-error" class="error text-danger pl-3" for="member_id" style="display: block;">
                      <strong>{{ $errors->first('member_id') }}</strong>
                    </div>
                  @endif
                </div>
                <div class="bmd-form-group{{ $errors->has('first_name') ? ' has-danger' : '' }} mt-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                          <i class="material-icons">edit</i>
                      </span>
                    </div>
                    <input type="text" name="first_name" class="form-control" placeholder="{{ __('First Name') }}" value="{{ old('first_name') }}" required>
                  </div>
                  @if ($errors->has('first_name'))
                    <div id="first-name-error" class="error text-danger pl-3" for="first_name" style="display: block;">
                      <strong>{{ $errors->first('first_name') }}</strong>
                    </div>
                  @endif
                </div>
                <div class="bmd-form-group{{ $errors->has('middle_name') ? ' has-danger' : '' }} mt-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                          <i class="material-icons">dashboard</i>
                      </span>
                    </div>
                    <input type="text" name="middle_name" class="form-control" placeholder="{{ __('Middle Name') }}" value="{{ old('middle_name') }}" >
                  </div>
                  @if ($errors->has('middle_name'))
                    <div id="middle-name-error" class="error text-danger pl-3" for="middle_name" style="display: block;">
                      <strong>{{ $errors->first('middle_name') }}</strong>
                    </div>
                  @endif
                </div>
                <div class="bmd-form-group{{ $errors->has('last_name') ? ' has-danger' : '' }} mt-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                          <i class="material-icons">school</i>
                      </span>
                    </div>
                    <input type="text" name="last_name" class="form-control" placeholder="{{ __('Last Name') }}" value="{{ old('last_name') }}" required>
                  </div>
                  @if ($errors->has('last_name'))
                    <div id="last-name-error" class="error text-danger pl-3" for="last_name" style="display: block;">
                      <strong>{{ $errors->first('last_name') }}</strong>
                    </div>
                  @endif
                </div>
                <div class="bmd-form-group{{ $errors->has('mobile_number') ? ' has-danger' : '' }} mt-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                          <i class="material-icons">book</i>
                      </span>
                    </div>
                    <input type="text" name="mobile_number" class="form-control" placeholder="{{ __('Mobile Number') }}" value="{{ old('mobile_number') }}" required>
                  </div>
                  @if ($errors->has('mobile_number'))
                    <div id="mobile-number-error" class="error text-danger pl-3" for="mobile_number" style="display: block;">
                      <strong>{{ $errors->first('mobile_number') }}</strong>
                    </div>
                  @endif
                </div>

              </div>
  
              <div class="col-md-5 mr-auto">
                  <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }} mt-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">email</i>
                        </span>
                      </div>
                      <input type="email" name="email" class="form-control" placeholder="{{ __('Email Address') }}" value="{{ old('email') }}" required>
                    </div>
                    @if ($errors->has('email'))
                      <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                        <strong>{{ $errors->first('email') }}</strong>
                      </div>
                    @endif
                  </div>
                  <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">lock_outline</i>
                        </span>
                      </div>
                      <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Password must be at least 8 characters') }}" required>
                    </div>
                    @if ($errors->has('password'))
                      <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                        <strong>{{ $errors->first('password') }}</strong>
                      </div>
                    @endif
                  </div>
                  <div class="bmd-form-group{{ $errors->has('password_confirmation') ? ' has-danger' : '' }} mt-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">lock_outline</i>
                        </span>
                      </div>
                      <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="{{ __('Confirm Password') }}" required>
                    </div>
                    @if ($errors->has('password_confirmation'))
                      <div id="password_confirmation-error" class="error text-danger pl-3" for="password_confirmation" style="display: block;">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                      </div>
                    @endif
                  </div>
                  <div class="form-check mr-auto ml-3 mt-3">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" id="policy" name="policy" {{ old('policy', 1) ? 'checked' : '' }} >
                      <span class="form-check-sign">
                        <span class="check"></span>
                      </span>
                      {{ __('I agree with the ') }} <a target="_blank" href="{{ url('docs/Privacy-Policy.pdf') }}">{{ __('Privacy Policy') }}</a>
                    </label>
                  </div>
              </div>
            </div>
          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-primary btn-round">{{ __('Create account') }}</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
