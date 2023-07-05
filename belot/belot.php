<?php

$suits = array('spades', 'hearts', 'diamonds', 'clubs');
$card_values = array('2','3','4','5','6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A');
$deck = array();
$belote_deck = array();

foreach ($suits as $suit) {
    foreach ($card_values as $value) {
        $card = $value . '_of_' . $suit;
        array_push($deck, $card);
    }
}

// Изключване на картите, които не са необходими за играта на белот
foreach ($deck as $card) {
    $value = substr($card, 0, 1);
    if ($value == '7' || $value == '8' || $value == '9' || $value == '10' ||
        $value == 'J' || $value == 'Q' || $value == 'K' || $value == 'A') {
        array_push($belote_deck, $card);
    }
}
foreach ($deck as $card) {
    $value = substr($card, 0, 2);
    if ( $value == '10') {
        array_push($belote_deck, $card);
    }
}
shuffle($belote_deck);

$player1 = array();
$player2 = array();
$player3 = array();
$player4 = array();


for($i = 0; $i < 3; $i++) {
    $player1[] = array_pop($belote_deck);
    $player2[] = array_pop($belote_deck);
    $player3[] = array_pop($belote_deck);
    $player4[] = array_pop($belote_deck);
}

for($i = 0; $i < 2; $i++) {
    $player1[] = array_pop($belote_deck);
    $player2[] = array_pop($belote_deck);
    $player3[] = array_pop($belote_deck);
    $player4[] = array_pop($belote_deck);
}

for($i = 0; $i < 3; $i++) {
    $player1[] = array_pop($belote_deck);
    $player2[] = array_pop($belote_deck);
    $player3[] = array_pop($belote_deck);
    $player4[] = array_pop($belote_deck);
}



echo "Player 1: " . implode(", ", $player1) . "\n";
echo "Player 2: " . implode(", ", $player2) . "\n";
echo "Player 3: " . implode(", ", $player3) . "\n";
echo "Player 4: " . implode(", ", $player4) . "\n";

function has_tertzi($cards) {
    $card_counts = array_count_values($cards);
    $triplet_cards = array_filter($card_counts, function($count) {
        return $count >= 3;
    });

    return !empty($triplet_cards);
}


// Check if any of the players have a "tertzi"
if (has_tertzi($player1)) {
    echo "Player 1 has a tertzi!\n";
} else {
    echo "Player 1 doesn't have a tertzi.\n";
}

if (has_tertzi($player2)) {
    echo "Player 2 has a tertzi! \n";
} else {
    echo "Player 2 doesn't have a tertzi.\n";
}
if (has_tertzi($player3)) {
    echo "Player 3 has a tertzi!\n";
} else {
    echo "Player 3 doesn't have a tertzi.\n";
}
if (has_tertzi($player4)) {
    echo "Player 4 has a tertzi!\n";
} else {
    echo "Player 4 doesn't have a tertzi.\n";
}

	?>
