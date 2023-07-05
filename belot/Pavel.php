<?php
$deck = range(0, 51);
print_r($deck);

$belote_cards = array_filter($deck, fn($card_index) => $card_index % 13 >= 5);
print_r($belote_cards);

shuffle($belote_cards);
print_r($belote_cards);

$players = [[], [], [], []];
foreach ([3, 2, 3] as $hand){
    foreach ($players as $player_index => $player_cards){
        $player_cards = array_slice($belote_cards, -$hand);
        $players[$player_index] = array_merge($players[$player_index], $player_cards);
    }
}

print_r($players);
print_r($belote_cards);


foreach($players as $player_index => $player_cards) {
    $cards_str = implode(", ",array_map("buildCard", $player_cards));
    echo "
    Player $player_index
    Cards: $cards_str
    ";
}

function buildCard($card_index) {
    $card_values = ['7', '8', '9' ,'10' ,'J' ,'Q' ,'K', 'A'];
    $card_symbols = [' спатия', ' каро' , ' купа' ,' пика'];

    $card_value_index = $card_index % 13 - 5;
    $card_symbol_index = floor($card_index / 13);

    return$card_values[$card_value_index] . $card_symbols[$card_symbol_index];
}