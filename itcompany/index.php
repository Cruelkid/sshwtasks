<?php
require_once 'classes/ITcompany.php';
require_once 'models/Candidate.php';
require_once 'models/Team.php';
require_once 'models/Dev.php';
require_once 'models/QC.php';
require_once 'models/PM.php';

function d($t){echo "<xmp>".print_r($t, 1)."</xmp>";}
function _d($t){d($t);die;}


$arr = [];
$candidates = [];
$team1 = new Team('ololo', 'YobaBlog', $arr);
$team2 = new Team('qwerty', 'asdfgh', $arr);

$c1 = new QC('Yoba1', 500, 'QC', $team1);
$c2 = new QC('Yoba2', 500, 'QC', $team1);
$c3 = new Candidate('Yoba3', 500, 'QC');
$c4 = new Dev('Batya1', 600, 'Dev', $team1);
$c5 = new Dev('Batya2', 600, 'Dev', $team1);
$c6 = new Candidate('Batya3', 600, 'Dev');
$c7 = new Candidate('Batya4', 600, 'Dev');
$c8 = new Candidate('Batya5', 600, 'Dev');
$c9 = new PM('Peka', 700, 'PM', $team1);

// _d($team1->teamMembers);

array_push($team1->teamMembers, $c1);
array_push($team1->teamMembers, $c2);
array_push($candidates, $c3);
array_push($team1->teamMembers, $c4);
array_push($team1->teamMembers, $c5);
array_push($candidates, $c6);
array_push($candidates, $c7);
array_push($candidates, $c8);
array_push($team1->teamMembers, $c9);
$it = new ITcompany($candidates, [$team1, $team2]);

// d($it);

$it->hire($team1);

$it->gotFun();

// d(count($it->teams[0]->teamMembers));

// _d($it);