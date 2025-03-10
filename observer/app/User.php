<?php

namespace App;

class User implements Observer
{
    // Hors exercice mais notable:
    // Promotion du constructeur: https://www.php.net/manual/fr/language.oop5.decon.php#language.oop5.decon.constructor.promotion
    public function __construct(
        private string $name,
        private bool $notified = false
    ) {}

    public function isNotified(): bool
    {
        return $this->notified;
    }

    public function update(string $event, $data): void
    {
        if ($event === 'new_concert') {
            $this->notified = true;
            // Vous pouvez ajouter plus de logique ici, par exemple envoyer un email, etc.
            echo "User {$this->name} notified of new concert: " . json_encode($data) . PHP_EOL;
        }
    }
}