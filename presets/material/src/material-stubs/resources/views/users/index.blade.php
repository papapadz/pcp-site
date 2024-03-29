@extends('layouts.app', ['activePage' => 'user-management', 'titlePage' => __('User Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title ">{{ __('Total Registered Attendees:') }} {{ $users->total( )}}</h4>
                <p class="card-category"> {{ __('Awaiting Confirmations: ') }} <b>{{ $users->where('email_verified_at','=',null)->count() }}</b></p>
              
              </div>
              <div class="card-body">
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                {{-- <div class="row">
                  <div class="col-12 text-right">
                    <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary">{{ __('Add user') }}</a>
                  </div>
                </div> --}}
                <div class="table-responsive">
                  <table class="table">
                    {{ $users->links() }} 
                    <thead class=" text-primary">
                      <th>
                        {{ __('Member ID') }}
                    </th>
                      <th>
                          {{ __('Name') }}
                      </th>
                      <th>
                        {{ __('Contact No.') }}
                    </th>
                      <th>
                        {{ __('Email') }}
                      </th>
                      <th>
                        {{ __('Status') }}
                      </th>
                      <th class="text-right">
                        {{ __('Actions') }}
                      </th>
                    </thead>
                    <tbody>
                      @foreach($users as $user)
                        <tr>
                          <td>
                            {{ $user->member->member_id }}
                          </td>
                          <td>
                            {{ $user->member->last_name }}, {{ $user->member->first_name }} {{ $user->member->middle_name }}
                          </td>
                          <td>
                            {{ $user->member->mobile_number }}
                          </td>
                          <td>
                            {{ $user->email }}
                          </td>
                          <td>
                            @if($user->email_verified_at!=null)
                            <span class="text-success"><i class="material-icons">check_circle</i> Confirmed!</span>
                            @else
                              <span class="text-danger"><i class="material-icons">hourglass_empty</i> For confirmation...</span>
                            @endif
                          </td>
                          <td class="td-actions text-right">
                            @if ($user->id != auth()->id())
                              <form action="{{ route('user.destroy', $user) }}" method="post">
                                  @csrf
                                  @method('delete')
                              
                                  <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('user.edit', $user) }}" data-original-title="" title="">
                                    Open <i class="material-icons">send</i>
                                    <div class="ripple-container"></div>
                                  </a>
                                  {{-- <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('{{ __("Are you sure you want to delete this user?") }}') ? this.parentElement.submit() : ''">
                                    <i class="material-icons">close</i>
                                    <div class="ripple-container"></div>
                                  </button> --}}
                                  {{-- <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('{{ __("Are you sure you want to delete this user?") }}') ? this.parentElement.submit() : ''">
                                      <i class="material-icons">close</i>
                                      <div class="ripple-container"></div>
                                  </button> --}}
                              </form>
                            @else
                            <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('user.edit', $user) }}" data-original-title="" title="">
                              Open <i class="material-icons">send</i>
                              <div class="ripple-container"></div>
                            </a>
                            @endif
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {{ $users->links() }}
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection