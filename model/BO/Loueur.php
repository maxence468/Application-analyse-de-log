<?php

namespace BO;

class loueur {

    private int $id;
    private string $nom;
    private int $appelsKO = 0;
    private int $timeouts = 0;

    public function getId(): int {
        return $this->id;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function setNom(string $nom): void {
        $this->nom = $nom;
    }

    public function getAppelsKO(): int {
        return $this->appelsKO;
    }

    public function setAppelsKO(int $appelsKO): void {
        $this->appelsKO = $appelsKO;
    }

    public function getTimeouts(): int {
        return $this->timeouts;
    }

    public function setTimeouts(int $timeouts): void {
        $this->timeouts = $timeouts;
    }

    public function __construct(int $id, string $nom, int $appelsKO, int $timeouts) {
        $this->id = $id;
        $this->nom = $nom;
        $this->appelsKO = $appelsKO;
        $this->timeouts = $timeouts;
    }

    public function __toString(): string {
        return "loueur : " . $this->nom . " (" . $this->id . "), nombre d'appels KO " .
            $this->appelsKO . " et le nombre de timeouts " . $this->timeouts;
    }
}