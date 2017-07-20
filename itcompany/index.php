<?php
require_once 'classes/ITcompany.php';
require_once 'models/Candidate.php';
require_once 'models/Team.php';

function d($t){echo "<xmp>".print_r($t, 1)."</xmp>";}
function _d($t){d($t);die;}

$c1 = new Candidate('Yoba1', 500, 'QC');
$c2 = new Candidate('Yoba2', 500, 'QC');
$c3 = new Candidate('Yoba3', 500, 'QC');
$c4 = new Candidate('Batya1', 600, 'Dev');
$c5 = new Candidate('Batya2', 600, 'Dev');
$c6 = new Candidate('Batya3', 600, 'Dev');
$c7 = new Candidate('Batya4', 600, 'Dev');
$c8 = new Candidate('Batya5', 600, 'Dev');
$c9 = new Candidate('Peka', 700, 'PM');

$arr = [];
$candidates = [];

array_push($arr, $c1);
array_push($arr, $c2);
array_push($candidates, $c3);
array_push($arr, $c4);
array_push($arr, $c5);
array_push($candidates, $c6);
array_push($candidates, $c7);
array_push($candidates, $c8);
array_push($arr, $c9);

$team1 = [new Team('ololo', 'YobaBlog', $arr)];

$it = new ITcompany($candidates, $team1);

d($it);

$it->hire($team1[0]);

_d($it);