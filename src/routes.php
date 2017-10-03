<?php
$routes = [
    'metadata',
    'getAccessToken',
    'refreshToken',
    'revokeAccessToken',
    'getBookshelfList',
    'getBookshelf',
    'getVolume',
    'getVolumeBySearchQuery',
    'getBookshelvesVolumes',
    'addVolumeToBookshelf',
    'deleteAllVolumesFromBookshelf',
    'getMyBookshelf',
    'getMyBookshelfList',
    'moveVolume',
    'removeVolumeFromBookshelves',
    'getMyBookShelvesVolumesList'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

