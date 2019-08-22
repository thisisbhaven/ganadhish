<?php

namespace App\Http\Controllers;

use App\Bappa;
use App\User;
use App\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->voted_public and auth()->user()->voted_home)
        {
            $myBappa = Vote::where('user_id', auth()->id())->first();
            $bappa = Bappa::where('id', $myBappa->bappa_id)->first();

            return view('vote.index', compact('bappa'));
        }
        else
        {
            return redirect('vote/register');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $myHomeBappa = null;
        $myPublicBappa = null;

        if (auth()->user()->voted_home)
        {
            $myHomeVote = Vote::where('user_id', auth()->id())->first();
            $myHomeBappa = Bappa::where('id', $myHomeVote->bappa_id)->first();
        }
        if (auth()->user()->voted_public)
            {
                $myPublicVote = Vote::where('user_id', auth()->id())->first();
                $myPublicBappa = Bappa::where('id', $myPublicVote->bappa_id)->first();
            }

        return view('vote.create', compact('myHomeBappa', 'myPublicBappa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Bappa $bappa)
    {
        if ($bappa->competition == 'home')
        {
            if ($bappa->status == "Approved")
            {
                $vote = Vote::create([
                    'bappa_id' => $bappa->id,
                    'user_id' => auth()->id()
                ]);

                Bappa::where('id', $bappa->id )->increment('votes');

                User::where('id', auth()->id())->update(['voted_home' => true]);

                return redirect('vote');
            }
        }
        else
        {
            if ($bappa->status == "Approved")
            {
                $vote = Vote::create([
                    'bappa_id' => $bappa->id,
                    'user_id' => auth()->id()
                ]);

                Bappa::where('id', $bappa->id )->increment('votes');

                User::where('id', auth()->id())->update(['voted_home' => true]);

                return redirect('vote');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function show(Vote $vote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function edit(Vote $vote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vote $vote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vote $vote)
    {
        //
    }

    public function check(Request $request)
    {
        $code = request('code');

        if (Bappa::where('id', $code)->first()->status == 'Approved' or (auth()->user()->voted_public and Bappa::where('id', $code)->first()->competition == 'public') or (auth()->user()->voted_home and Bappa::where('id', $code)->first()->competition == 'home'))
        {
            return redirect('vote');
        }
        else
        {
            $bappa = Bappa::where('id', $code)->first();

            if ($bappa->exists() and $bappa->first()->status == "Approved")
            {
                return view('vote.check', compact('bappa'));
            }
            else
            {
                return redirect('vote/invalid');
            }
        }

        $bappa = Bappa::where('id', request('code'))->first();

        $exists = false;
        if (Bappa::where('id', request('code'))->exists()) {
            $exists = true;
        }
        return view('vote.check', compact('exists', 'bappa'));
    }

    public function invalid()
    {
        return view('vote.invalid');
    }
}
