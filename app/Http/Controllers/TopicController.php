<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Models\Topic;
use App\Models\Thread;
use App\Models\User;
use App\Models\Reply;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topics = Topic::all();
        return View('topics.index', ['topics' => $topics]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return View('topics.create', ['users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Auth::
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            // 'user_id' => 'required|numeric',
            'thread_id' => 'required'
        ]);

        $topic = $request->all();

        if (Auth::check()) { 
            $topic['user_id'] = Auth::id();
            $users = Auth::name();
            //$names = Auth::name();
            // $id = Auth::id();
            //return $user->topics;
    
            $topic = Topic::create($topic); 
           //return $user->topics;
            return redirect()->route('topics.index')->with('topics', $user->topics);
        }else{
            return "niet ingelogd";
        }
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $topic = Topic::where('id', $id)->with('replies')->with('replies.user')->first();
        return view('topics.topic_id', compact('topic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
