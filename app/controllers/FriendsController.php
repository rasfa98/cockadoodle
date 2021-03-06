<?php

class FriendsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /friends
	 *
	 * @return Response
	 */
	public function index()
	{
        $mygames = Game::with('first_player', 'second_player', 'game_rounds')->where('first_player_id', '=', Auth::id())->orWhere('second_player_id', '=', Auth::id())->orderBy('updated_at', 'desc')->get();
        //$mygames = GameRound::with('receiver', 'drawer', 'game')->where('receiver_id', '=', Auth::id())->orWhere('drawer_id', '=', Auth::id())->distinct('game_id')->orderBy('doodle_id')->get();

        return View::make('friendslist')->withMygames($mygames);
	}

    public function search()
    {
        $query = Input::get('query');
        if (strlen($query) > 1) {

            $users = User::where('username', 'LIKE', '%' . $query . '%')->where('id', '!=', Auth::id())
                //->orWhere('email', 'LIKE', '%' . $query . '%')
                ->take(5)->get();

            return View::make('friendssearch')->withMatches($users);
        }
    }
}