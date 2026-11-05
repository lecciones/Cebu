
<?php

require_once __DIR__ . '/knowledge.php';

$destinations = loadDestinationKnowledge();

echo "<h1>Smart Tourist Navigator - Knowledge Test</h1>";

echo "<p>Total destinations loaded: "
    . count($destinations)
    . "</p>";

$results = searchDestinations("waterfalls");

echo "<h2>Search Results: Waterfalls in Cebu</h2>";

foreach ($results as $destination) {

    echo "<div style='
        padding:15px;
        margin:10px 0;
        border:1px solid #ccc;
        border-radius:8px;
    '>";

    echo "<h3>" . htmlspecialchars($destination['name']) . "</h3>";

    echo "<p>Location: "
        . htmlspecialchars($destination['location'] ?? 'Not provided')
        . "</p>";

    echo "<p>Relevance Score: "
        . htmlspecialchars((string)$destination['_score'])
        . "</p>";

    echo "</div>";
}

?>
