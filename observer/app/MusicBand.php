<?php

namespace App;

class MusicBand 
{
    private array $observers = [];

    // Hors exercice mais notable:
    // Promotion du constructeur: https://www.php.net/manual/fr/language.oop5.decon.php#language.oop5.decon.constructor.promotion
    public function __construct(
        private string $name,
        private array $concerts = []
    ) {}

    public function addNewConcertDate(string $date, string $location): void
    {
        $concert = [
            'date' => $date,
            'location' => $location
        ];
        $this->concerts[] = $concert;
        $this->notify('new_concert', $concert);
    }

    public function attach(Observer $observer): void 
    {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer): void 
    {
        $this->observers = array_filter(
            $this->observers,
            fn($o) => $o !== $observer
        );
    }

    private function notify(string $event, $data): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($event, $data);
        }
    }
}