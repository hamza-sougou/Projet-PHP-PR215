
<?php
class Database
{
    public $host   = 'localhost';
    public $user   = 'root';
    public $pass   = '';
    public $dbname = 'e_commerce';

    public $link;
    public $error;

    public function __construct()
    {
        $this->connectDB();
    }

    private function connectDB()
    {
        $this->link = new mysqli(
            $this->host,
            $this->user,
            $this->pass,
            $this->dbname
        );
        if (!$this->link) {
            $this->error = "echec" . $this->link->connect_error;
            return false;
        }
    }

    public function afficher($query)
    {
        $result = $this->link->query($query) or
        die($this->link->error . __LINE__);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function inserer($query)
    {
        $insert_row = $this->link->query($query) or
        die($this->link->error . __LINE__);
        if ($insert_row) {
            return $insert_row;
        } else {
            return false;
        }
    }

    public function update($query)
    {
        $update_row = $this->link->query($query) or
        die($this->link->error . __LINE__);
        if ($update_row) {
            return $update_row;
        } else {
            return false;
        }
    }

    public function supprimer($query)
    {
        $delete_row = $this->link->query($query) or
        die($this->link->error . __LINE__);
        if ($delete_row) {
            return $delete_row;
        } else {
            return false;
        }
    }
}
