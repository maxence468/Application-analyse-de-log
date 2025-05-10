<?php

namespace BO;

use DateTime;

class loueur {

    private int $id;
    private string $nom;
    private int $appelsKO = 0;
    private int $timeouts = 0;
    private string $motdepasse;

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getDate(): DateTime
    {
        return $this->date;
    }

    public function setDate(DateTime $date): void
    {
        $this->date = $date;
    }

    public function getNumTel(): string
    {
        return $this->numTel;
    }

    public function setNumTel(string $numTel): void
    {
        $this->numTel = $numTel;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getMotdepasse(): string
    {
        return $this->motdepasse;
    }

    public function setMotdepasse(string $motdepasse): void
    {
        $this->motdepasse = $motdepasse;
    }

    public function getPays(): string
    {
        return $this->pays;
    }

    public function setPays(string $pays): void
    {
        $this->pays = $pays;
    }
    private string $pays;
    private string $email;
    private string $numTel;
    private DateTime $date;

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

    public function __construct(int $id, string $nom, int $appelsKO, int $timeouts, string $motdepasse, string $pays, string $email, string $numTel, DateTime $date) {
        $this->id = $id;
        $this->nom = $nom;
        $this->appelsKO = $appelsKO;
        $this->timeouts = $timeouts;
        $this->motdepasse = $motdepasse;
        $this->pays = $pays;
        $this->email = $email;
        $this->numTel= $numTel;
        $this->date= $date;
    }

    public function __toString(): string {
        return "loueur : " . $this->nom . " (" . $this->id . "), nombre d'appels KO " .
            $this->appelsKO . " et le nombre de timeouts " . $this->timeouts;
    }
}