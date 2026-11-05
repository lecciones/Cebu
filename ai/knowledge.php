
<?php

/**
 * Smart Tourist Navigator
 * Centralized Destination Knowledge Loader
 */

function loadDestinationKnowledge()
{
    $file = __DIR__ . '/destination-knowledge.json';

    if (!file_exists($file)) {
        return [];
    }

    $json = file_get_contents($file);

    if ($json === false) {
        return [];
    }

    $data = json_decode($json, true);

    if (!is_array($data) || !isset($data['destinations'])) {
        return [];
    }

    return $data['destinations'];
}


/**
 * Search destinations using keywords.
 */
function searchDestinations($query, $limit = 5)
{
    $destinations = loadDestinationKnowledge();

    if (empty($destinations) || trim($query) === '') {
        return [];
    }

    $keywords = preg_split(
        '/\s+/',
        strtolower(trim($query))
    );

    $results = [];

    foreach ($destinations as $destination) {

        $searchText = strtolower(
            ($destination['name'] ?? '') . ' ' .
            ($destination['category'] ?? '') . ' ' .
            ($destination['location'] ?? '') . ' ' .
            ($destination['highlight'] ?? '') . ' ' .
            ($destination['experience'] ?? '') . ' ' .
            ($destination['travel_style'] ?? '') . ' ' .
            ($destination['description'] ?? '') . ' ' .
            implode(' ', $destination['overview'] ?? []) . ' ' .
            implode(' ', $destination['activities'] ?? []) . ' ' .
            implode(' ', array_column(
                $destination['transportation'] ?? [],
                'details'
            ))
        );

        $score = 0;

        foreach ($keywords as $keyword) {

            if (strlen($keyword) < 2) {
                continue;
            }

            if (stripos($destination['name'] ?? '', $keyword) !== false) {
                $score += 5;
            } elseif (stripos($searchText, $keyword) !== false) {
                $score += 1;
            }
        }

        if ($score > 0) {
            $destination['_score'] = $score;
            $results[] = $destination;
        }
    }

    // Highest relevance first
    usort($results, function ($a, $b) {
        return $b['_score'] <=> $a['_score'];
    });

    // Limit results
    return array_slice($results, 0, $limit);
}

?>
