<?php

class Config
{

    public $connection = null;

    // this function is called everytime this class is instantiated		
    public function __construct()
    {

        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $db = 'tour';
        $conn = mysqli_connect($servername, $username, $password, $db);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $this->connection = $conn;

    }

    public function getUserName()
    {

        $userName = "";

        if (isset($_SESSION['status']) && $_SESSION['status'] == 'loggedin') {

            $email = $_SESSION['user_email'];
            $sql = "SELECT FirstName FROM user WHERE Email='" . $email . "'";
            $fname = mysqli_query($this->connection, $sql);
            while ($row = $fname->fetch_assoc()) {

                $userName = $row['FirstName'];

            }
        }

        return $userName;

    }

    // Select a row/s in a Database Table
    public function Select()
    {
    }

    // Update a row/s in a Database Table
    public function Update()
    {
    }

    // Remove a row/s in a Database Table
    public function Remove()
    {
    }

    // execute statement
    private function executeStatement()
    {
    }
}
?>