<?php

namespace App\Http\Controllers;

use App\User;
use App\Member;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Mail\MyMail;
use App\Schedule;
use App\Speaker;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        return view('users.index', ['users' => $model->join('members','users.member_id','members.member_id')->orderBy('email_verified_at')->orderBy('last_name')->paginate(15)]);
    }

    /**
     * Show the form for creating a new user
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created user in storage
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @param  \App\User  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserRequest $request, User $model)
    {
        $model->create($request->merge(['password' => Hash::make($request->get('password'))])->all());

        return redirect()->route('user.index')->withStatus(__('User successfully created.'));
    }

    /**
     * Show the form for editing the specified user
     *
     * @param  \App\User  $user
     * @return \Illuminate\View\View
     */
    public function edit(User $user)
    {
        $schedules = Schedule::join('media','media.schedule_id','=','schedules.id')->where('type',1)->get();
        
        return view('users.edit', compact('user','schedules'));
    }

    /**
     * Update the specified user in storage
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UserRequest $request, User  $user)
    {
        
        if($user->email_verified_at==null) {
            $user->update([
                'email_verified_at' => Carbon::now()->toDateTimeString(),
                'role' => $request->role
            ]);

            if($request->role==2)
                Speaker::where('id',$request->speaker)->update(['member_id' => $request->member_id]);

            \Mail::to($user->email)->send(new MyMail());
        }

        $user->member->update([
            'member_id' => $request->member_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'middle_name' => $request->middle_name,
            'mobile_number' => $request->mobile_number,
            'prc' => $request->prc,
            'category' => $request->category,
            'remarks' => $request->remarks,
        ]);
        $hasPassword = $request->get('password');
        $user->update(
            $request->merge(['password' => Hash::make($request->get('password'))])
                ->except([$hasPassword ? '' : 'password']
        ));

        return redirect()->route('user.index')->withStatus(__('User successfully updated.'));
    }

    /**
     * Remove the specified user from storage
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($user_id)
    {
        $user = User::find($user_id);
        $user->member->update(['status' => 0]);
        $user->delete();
    
        return redirect()->route('user.index')->withStatus(__('User successfully deleted.'));
    }
}
