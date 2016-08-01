<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use App\Code;
use App\Http\Requests;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    public function form()
    {
        return view('form');
    }

    public function home()
    {
        return view('home');
    }

    public static function homes()
    {

        $request = new Request();

        $username = Flight::request()->data->username;
        $username2 = Flight::request()->data->username2;

        try {
            $user = $request->getUser($username);
            $User = new user(json_decode($user));

            $events = $request->getEvents($username);
            $eventos = new events(json_decode($events));

            $user_repo = $request->getRepos($username);
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

            $user2 = $request->getUser($username2);
            $User2 = new user(json_decode($user2));

            $events2 = $request->getEvents($username2);
            $eventos2 = new events(json_decode($events2));

            $user_repo2 = $request->getRepos($username2);
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
            return view('form.html', ['error' => true]);
            $error = true;
        }

        if (!$error) {
            return view('home.html', [
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

    public function view($id)
    {
        $code = Code::find($id);
        dd($code);
    }
}
