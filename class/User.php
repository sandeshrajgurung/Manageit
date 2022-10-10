<?php

class User
{
    // database connection and table name
    private $conn;
    private $table_name = "user";

    // object properties
    public $id;
    public $firstName;
    public $lastName;
    public $gender;
    public $contactNumber;
    public $currentAddress;
    public $permanentAddress;
    public $email;
    public $dateOfBirth;
    public $status;
    public $memberSince;
    public $createdAt;
    public $updatedAt;

    // constructor with $db as database connection
    public function __construct($db)
    {
        $this->conn = $db;
    }

    // create product
    function createUser()
    {
        // query to insert record
        $query = "INSERT INTO " . $this->table_name . "
                SET
                    first_name=:firstName,
                    last_name=:lastName,
                    gender=:gender,
                    contact_number=:contactNumber,
                    current_address=:currentAddress,
                    permanent_address=:permanentAddress,
                    email=:email,
                    date_of_birth=:dateOfBirth,
                    status=:status,
                    member_since=:memberSince,
                    created_at=:createdAt,
                    updated_at=:updatedAt";

        // prepare query
        $stmt = $this->conn->prepare($query);

        // sanitize
        $this->firstName = htmlspecialchars(strip_tags($this->firstName));
        $this->lastName = htmlspecialchars(strip_tags($this->lastName));
        $this->gender = htmlspecialchars(strip_tags($this->gender));
        $this->contactNumber = htmlspecialchars(strip_tags($this->contactNumber));
        $this->currentAddress = htmlspecialchars(strip_tags($this->currentAddress));
        $this->permanentAddress = htmlspecialchars(strip_tags($this->permanentAddress));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->dateOfBirth = htmlspecialchars(strip_tags($this->dateOfBirth));
        $this->status = htmlspecialchars(strip_tags($this->status));
        $this->memberSince = htmlspecialchars(strip_tags($this->memberSince));
        $this->createdAt = htmlspecialchars(strip_tags($this->createdAt));
        $this->updatedAt = htmlspecialchars(strip_tags($this->updatedAt));

        // bind values
        $stmt->bindParam(":firstName", $this->firstName);
        $stmt->bindParam(":lastName", $this->lastName);
        $stmt->bindParam(":gender", $this->gender);
        $stmt->bindParam(":contactNumber", $this->contactNumber);
        $stmt->bindParam(":currentAddress", $this->currentAddress);
        $stmt->bindParam(":permanentAddress", $this->permanentAddress);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":dateOfBirth", $this->dateOfBirth);
        $stmt->bindParam(":status", $this->status);
        $stmt->bindParam(":memberSince", $this->memberSince);
        $stmt->bindParam(":createdAt", $this->createdAt);
        $stmt->bindParam(":updatedAt", $this->updatedAt);

        // execute query
        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    // get all users
    function getUsers()
    {
        $sqlQuery = "SELECT * FROM " . $this->table_name . "";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->execute();
        return $stmt;
    }

    public function updateUser()
    {
        $sqlQuery = "UPDATE " . $this->table_name . "
                SET
                first_name=:firstName,
                last_name=:lastName,
                gender=:gender,
                contact_number=:contactNumber,
                current_address=:currentAddress,
                permanent_address=:permanentAddress,
                email=:email,
                date_of_birth=:dateOfBirth,
                status=:status,
                member_since=:memberSince,
                updated_at=:updatedAt
                WHERE
                    id=:id";

        $stmt = $this->conn->prepare($sqlQuery);

        // sanitize
        $this->id = htmlspecialchars(strip_tags($this->id));
        $this->firstName = htmlspecialchars(strip_tags($this->firstName));
        $this->lastName = htmlspecialchars(strip_tags($this->lastName));
        $this->gender = htmlspecialchars(strip_tags($this->gender));
        $this->contactNumber = htmlspecialchars(strip_tags($this->contactNumber));
        $this->currentAddress = htmlspecialchars(strip_tags($this->currentAddress));
        $this->permanentAddress = htmlspecialchars(strip_tags($this->permanentAddress));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->dateOfBirth = htmlspecialchars(strip_tags($this->dateOfBirth));
        $this->status = htmlspecialchars(strip_tags($this->status));
        $this->memberSince = htmlspecialchars(strip_tags($this->memberSince));
        $this->updatedAt = htmlspecialchars(strip_tags($this->updatedAt));

        // bind values
        $stmt->bindParam(":id", $this->id);
        $stmt->bindParam(":firstName", $this->firstName);
        $stmt->bindParam(":lastName", $this->lastName);
        $stmt->bindParam(":gender", $this->gender);
        $stmt->bindParam(":contactNumber", $this->contactNumber);
        $stmt->bindParam(":currentAddress", $this->currentAddress);
        $stmt->bindParam(":permanentAddress", $this->permanentAddress);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":dateOfBirth", $this->dateOfBirth);
        $stmt->bindParam(":status", $this->status);
        $stmt->bindParam(":memberSince", $this->memberSince);
        $stmt->bindParam(":updatedAt", $this->updatedAt);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // delete users
    function deleteUser()
    {
        $sqlQuery = "DELETE FROM " . $this->table_name . " WHERE id=:id";
        $stmt = $this->conn->prepare($sqlQuery);

        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(":id", $this->id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
