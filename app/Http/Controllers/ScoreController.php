<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Events;
use App\Http\Repos;
use App\Http\User;
use App\Score;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ranking');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $request = request();

        $username =$request->input('username');
        $username2 = $request->input('username2');

        try {
            $requests = new Requests();
            $user = $requests->getUser($username);
            $User = new User(json_decode($user));

            $events = $requests->getEvents($username);
            $eventos = new events(json_decode($events));

            $user_repo = $requests->getRepos($username);
            $User_repo = new repos(json_decode($user_repo));

            $finalScore=(0.4*$eventos->showEventsScore())+
            (0.4*$User_repo->showStars())+(0.2*$User->getUserfollowers());

            $new = Score::whereUsername($User->getUserlogin())->first();
            if ($new) {
                $new->score = $finalScore;
                $new->save();
            } else {
                Score::create([
                    'username' => $User->getUserlogin(),
                    'name' => $User->getUsername(),
                    'score' => $finalScore
                ]);
            }

            $user2 = $requests->getUser($username2);
            $User2 = new user(json_decode($user2));

            $events2 = $requests->getEvents($username2);
            $eventos2 = new events(json_decode($events2));

            $user_repo2 = $requests->getRepos($username2);
            $User_repo2 = new repos(json_decode($user_repo2));

            $finalScore2=(0.4*$eventos2->showEventsScore())+
            (0.4*$User_repo2->showStars())+(0.2*$User2->getUserfollowers());

            $new = Score::whereUsername($User2->getUserlogin())->first();
            if ($new) {
                $new->score = $finalScore2;
                $new->save();
            } else {
                Score::create([
                    'username' => $User2->getUserlogin(),
                    'name' => $User2->getUsername(),
                    'score'    => $finalScore2
                ]);
            }


            $error = false;
        } catch (Exception $e) {
            return view('form', ['error' => true]);
            $error = true;
        }

        if (!$error) {
            return view('score', [
                'user1' => $User,
                'user2' => $User2,
                'events' => $eventos,
                'events2' => $eventos2,
                'repo' => $User_repo,
                'repo2' => $User_repo2,
                'finalScore1' => $finalScore,
                'finalScore2' => $finalScore2
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
