<?php





$poke = null;
$pokemonId = 1;
$url = "https://pokeapi.co/api/v2/pokemon-species/" . $pokemonId;
$response = file_get_contents($url);

$data = json_decode($response, true);

foreach ($data['names'] as $name) {
    if ($name['language']['name'] == 'ja') {
        $poke = $name['name'];
        echo  $poke;
    }
}

?>
