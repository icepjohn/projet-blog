<?php
    renderView(
        'accueil', 
        [
            'pagetTitle' => "Bienvenue sur mon blog",
            'now' => date('l jS \of F Y h:i:s A')
        ]
    );
?>