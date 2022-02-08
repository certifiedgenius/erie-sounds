<?php

require('./bootstrap/init.php');

use App\Models\Account;
use App\Models\User;
use App\Models\Track;

if (empty($_GET['id'])) {
	die("No access for you!");
}

// get the user // Artist
$user_id = $_GET['id'];
$user = User::find($user_id);

// get user's accounts // Albums
$tracks = Track::where('user_id', $user_id)->get();
$accounts = Account::where('id', $user_id)->get();

// render content
require(ROOT_PATH . '/views/track.view.php');