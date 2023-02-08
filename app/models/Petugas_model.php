<?php
class Petugas_model
{

    private $table = "petugas";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function gettAllPetugas()
    {
        $this->db->query("SELECT * FROM" . $this->table);
        return $this->db->resultAll();
    }

    public function getPetugasByUsername($username)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE username=:username");
        $this->db->bind("username", $username);
        $this->db->execute();
        return $this->db->resultSingle();
    }

    public function authPetugasByUsername($data)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE username=:username AND password=:password");
        $this->db->bind("username", $data["username"]);
        $this->db->bind("password", $data["password"]);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
