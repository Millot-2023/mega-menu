<?php
header('Content-Type: application/json');

ini_set('display_errors', 0);
error_reporting(E_ALL);

$file = 'creations.json';

// Si le fichier n'existe pas ou est vide, on l'initialise
if (!file_exists($file) || filesize($file) === 0) {
    file_put_contents($file, json_encode([]));
}

$input = file_get_contents('php://input');
$data = json_decode($input, true);

$jsonContent = file_get_contents($file);
$creations = json_decode($jsonContent, true);

if (!is_array($creations)) { 
    $creations = []; 
}

// ==========================================================================
// ACTION 1 : SUPPRESSION D'UNE CRÉATION
// ==========================================================================
if (isset($data['action']) && $data['action'] === 'delete') {
    if (!isset($data['id'])) {
        echo json_encode(['success' => false, 'message' => 'ID manquant pour la suppression']);
        exit;
    }

    $id = trim($data['id']);
    $newCreations = [];

    foreach ($creations as $creation) {
        if (isset($creation['id']) && trim($creation['id']) != $id) {
            $newCreations[] = $creation;
        }
    }

    if (file_put_contents($file, json_encode($newCreations, JSON_PRETTY_PRINT))) {
        echo json_encode(['success' => true, 'creations' => $newCreations]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Erreur d\'écriture dans le fichier JSON']);
    }
    exit;
}

// ==========================================================================
// ACTION 2 : ENREGISTREMENT OU MODIFICATION
// ==========================================================================
if (!$data || !isset($data['pixels']) || !isset($data['size'])) {
    echo json_encode(['success' => false, 'message' => 'Données reçues invalides']);
    exit;
}

// Récupération et nettoyage du nom
$name = isset($data['name']) ? trim($data['name']) : 'Sans titre';
if ($name === '') {
    $name = 'Sans titre';
}

if (isset($data['id']) && $data['id'] !== '') {
    $id = trim($data['id']);
    $found = false;
    foreach ($creations as &$creation) {
        if (isset($creation['id']) && trim($creation['id']) == $id) {
            $creation['name'] = $name; // On met à jour le nom
            $creation['pixels'] = $data['pixels'];
            $creation['size'] = $data['size'];
            $creation['date'] = date('Y-m-d H:i:s');
            $found = true;
            break;
        }
    }
    if (!$found) {
        $creations[] = [
            'id' => $id,
            'name' => $name,
            'size' => $data['size'],
            'pixels' => $data['pixels'],
            'date' => date('Y-m-d H:i:s')
        ];
    }
} else {
    // Nouvelle création
    $newCreation = [
        'id' => uniqid('art_'),
        'name' => $name, // On enregistre le nom
        'size' => $data['size'],
        'pixels' => $data['pixels'],
        'date' => date('Y-m-d H:i:s')
    ];
    $creations[] = $newCreation;
}

if (file_put_contents($file, json_encode($creations, JSON_PRETTY_PRINT))) {
    echo json_encode(['success' => true, 'creations' => $creations, 'id' => isset($data['id']) && $data['id'] !== '' ? $data['id'] : $newCreation['id']]);
} else {
    echo json_encode(['success' => false, 'message' => 'Erreur lors de l\'écriture du fichier']);
}