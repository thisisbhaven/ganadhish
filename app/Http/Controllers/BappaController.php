<?php

namespace App\Http\Controllers;

use App\Bappa;
use App\User;
use App\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BappaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->owns_home or auth()->user()->owns_public)
        {
            $bappas = Bappa::where('user_id', auth()->id())->get();

            return view('bappa.index', compact('bappas'));
        }
        else
        {
            return redirect('bappa/register');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bappa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bappa = Bappa::create([
            'user_id' => auth()->id(),
            'name' => request('name'),
            'competition' => request('competition'),
            'email' => auth()->user()->email,
            'address' => request('address'),
            'pincode' => request('pincode'),
            'person' => request('person'),
            'mobile' => request('mobile')
        ]);

        if ($bappa->competition == 'public')
        {
            User::where('id', auth()->id())->update(['owns_public' => true]);
        }
        else
        {
            User::where('id', auth()->id())->update(['owns_home' => true]);
        }

        return redirect('bappa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bappa  $bappa
     * @return \Illuminate\Http\Response
     */
    public function show(Bappa $bappa)
    {
        if (auth()->user()->id == $bappa->user_id or auth()->user()->is_admin)
        {
            $votes = Vote::where('bappa_id', $bappa->id)->get()->sortByDesc('created_at');
            $no = $votes->count();
            return view('bappa.show', compact('bappa', 'votes', 'no'));
        }
        else
        {
            if ($bappa->status == "Approved")
            {
                return view('bappa.public', compact('bappa'));
            }
            else
            {
                return redirect('home');
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bappa  $bappa
     * @return \Illuminate\Http\Response
     */
    public function edit(Bappa $bappa)
    {
        if (auth()->user()->id == $bappa->user_id)
        {
            return view('bappa.edit', compact('bappa'));
        }
        else
        {
            return redirect('bappa');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bappa  $bappa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bappa $bappa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bappa  $bappa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bappa $bappa)
    {
        //
    }
}
