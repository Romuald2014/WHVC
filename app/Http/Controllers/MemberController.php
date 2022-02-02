<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Member;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function index()
    {
/*        if (Auth::guest()) return redirect('/');

        else {*/

            $user = Auth::user();

            if (Member::where('e_mail', '=', $user->email)->exists())
            {
                $member = Member::where('e_mail', '=', $user->email)->firstOrFail();
                $team = Team::find($member->team_id);
                $event = Event::where('status', 'Active')
                    ->orderBy('start')
                    ->take(10)
                    ->get();

                return view('home',compact('member', 'team', 'event'));

            } else {
                return view('non-member');
            }
        //}
    }
}
