<?php
class User {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function createUser($name, $surname, $email, $tesseraCode) {
        $insertQuery = "INSERT INTO users (nome, cognome, email, codice_tessera) VALUES (:nome, :cognome, :email, :codice_tessera)";
        $insertStmt = $this->pdo->prepare($insertQuery);
        $insertStmt->bindParam(':nome', $name);
        $insertStmt->bindParam(':cognome', $surname);
        $insertStmt->bindParam(':email', $email);
        $insertStmt->bindParam(':codice_tessera', $tesseraCode);

        return $insertStmt->execute();
    }
}