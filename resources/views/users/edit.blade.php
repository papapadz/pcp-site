@extends('layouts.app', ['activePage' => 'user-management', 'titlePage' => __('User Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('user.update', $user) }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('put')

            <div class="card ">
              <div class="card-header card-header-primary">
              <h4 class="card-title">{{ __('Member: ') }} {{ $user->member->member_id }}</h4>
                <p class="card-category">
                  @if($user->email_verified_at!=null)
                  You are editing this user
                  @else
                  This user is awaiting confirmation
                  @endif
                </p>
              </div>
              <div class="card-body ">
                @if ($user->email_verified_at==null)
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-danger">
                        <span><strong>Note:</strong> This user is awaiting for your confirmation. Before confirming, verify the details indicated and click 'Confirm' for them to be able to join the event.</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('user.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="member_id">{{ __('Member ID') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control{{ $errors->has('member_id') ? ' is-invalid' : '' }}" name="member_id" id="input-member_id-confirmation" type="text" placeholder="{{ __('Member ID') }}" value="{{ old('member_id', $user->member->member_id) }}" required="true" aria-required="true"/>
                      @if ($errors->has('member_id'))
                        <span id="member_id-error" class="error text-danger" for="input-member_id-confirmation">{{ $errors->first('member_id') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="last_name">{{ __('Last Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" id="input-last_name-confirmation" type="text" placeholder="{{ __('Last Name') }}" value="{{ old('last_name', $user->member->last_name) }}" required="true" aria-required="true"/>
                      @if ($errors->has('last_name'))
                        <span id="last_name-error" class="error text-danger" for="input-last_name-confirmation">{{ $errors->first('last_name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="first_name">{{ __('First Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" id="input-first_name-confirmation" type="text" placeholder="{{ __('First Name') }}" value="{{ old('first_name', $user->member->first_name) }}" required="true" aria-required="true"/>
                      @if ($errors->has('first_name'))
                        <span id="first_name-error" class="error text-danger" for="input-first_name-confirmation">{{ $errors->first('first_name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="middle_name">{{ __('Middle Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control{{ $errors->has('middle_name') ? ' is-invalid' : '' }}" name="middle_name" id="input-middle_name-confirmation" type="text" placeholder="{{ __('Middle Name') }}" value="{{ old('middle_name', $user->member->middle_name) }}" aria-required="true"/>
                      @if ($errors->has('middle_name'))
                        <span id="middle_name-error" class="error text-danger" for="input-middle_name-confirmation">{{ $errors->first('middle_name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="input-email" type="email" placeholder="{{ __('Email') }}" value="{{ old('email', $user->email) }}" required />
                      @if ($errors->has('email'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Mobile Number') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('mobile_number') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('mobile_number') ? ' is-invalid' : '' }}" name="mobile_number" id="input-mobile_number" type="text" placeholder="{{ __('Mobile Number') }}" value="{{ old('mobile_number', $user->member->mobile_number) }}" required />
                      @if ($errors->has('mobile_number'))
                        <span id="mobile_number-error" class="error text-danger" for="input-mobile_number">{{ $errors->first('mobile_number') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('PRC ID') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('prc') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('prc') ? ' is-invalid' : '' }}" name="prc" id="input-prc" type="text" placeholder="{{ __('PRC ID') }}" value="{{ old('prc', $user->member->prc) }}" />
                      @if ($errors->has('prc'))
                        <span id="prc-error" class="error text-danger" for="input-prc">{{ $errors->first('prc') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                {{-- <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Category') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('category') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" name="category" id="input-category" type="text" placeholder="{{ __('PRC ID') }}" value="{{ old('category', $user->member->category) }}" />
                      @if ($errors->has('category'))
                        <span id="category-error" class="error text-danger" for="input-category">{{ $errors->first('category') }}</span>
                      @endif
                    </div>
                  </div>
                </div> --}}
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Category') }}</label>
                  <div class="col-sm-7">
                    <select name="category" class="form-control">
                      <option @if($user->member->category=="Life Member") selected @endif value="Life Member">Life Member</option>
                      <option @if($user->member->category=="Regular Fellow") selected @endif value="Regular Fellow">Regular Fellow</option>
                      <option @if($user->member->category=="Diplomate") selected @endif value="Diplomate">Diplomate</option>
                      <option @if($user->member->category=="Member") selected @endif value="Member">Member</option>
                      <option @if($user->member->category=="Participant") selected @endif value="Participant">Participant</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Role') }}</label>
                  <div class="col-sm-7">
                    <select id="role" name="role" class="form-control">
                      <option selected value=1>Guest</option>
                      <option value=2>Speaker</option>
                      <option value=3>Admin</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Lecture') }}</label>
                  <div class="col-sm-7">
                    <select name="speaker" class="form-control">
                      <option selected>N/A</option>
                      @foreach($schedules as $schedule)
                        <option value={{ $schedule->speaker_id }}>{{ $schedule->title }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Remarks') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('remarks') ? ' has-danger' : '' }}">
                      <textarea class="form-control{{ $errors->has('remarks') ? ' is-invalid' : '' }}" name="remarks" id="input-remarks" placeholder="{{ __('Remarks') }}" >{{ old('prc', $user->member->remarks) }}</textarea>
                      @if ($errors->has('remarks'))
                        <span id="remarks-error" class="error text-danger" for="input-remarks">{{ $errors->first('remarks') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                @if($user->email_verified_at!=null)
                <hr>
                <i>***Please don't enter any password if you are not updating the user's current password</i>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password">{{ __(' Password') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" input type="password" name="password" id="input-password" placeholder="{{ __('Password') }}" />
                      @if ($errors->has('password'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('password') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{ __('Confirm Password') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="password_confirmation" id="input-password-confirmation" type="password" placeholder="{{ __('Confirm Password') }}" />
                    </div>
                  </div>
                </div>
                @endif
              </div>
              <div class="card-footer ml-auto mr-auto">
                @if($user->email_verified_at!=null)
                  <button type="submit" class="btn btn-success">{{ __('Save') }}</button>
                @else
                  <button type="submit" class="btn btn-success">{{ __('Confirm') }}</button>
                @endif
                
                <a onclick="return confirm('Are you sure you want to delete this user?')" href="{{ route('user.delete',['user_id' => $user->id]) }}" class="btn btn-danger">{{ __('Delete')}}</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection