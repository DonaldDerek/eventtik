<?php

class edb {

    public function authenticate($email, $password) {
        $email = mysql_real_escape_string($email);
        $email = strtolower($email);

        $password = mysql_real_escape_string($password);

        $password = sha1($password);
        
        $query = "SELECT * FROM users WHERE email='$email'";
        $result = mysql_query($query);

        while ($row = mysql_fetch_object($result)) {
            $vpassword = $row->password;
        }

        if ($password == $vpassword) {
            return true;
        }
        else
            return false;
    }
    
    public function getUserByEmail($email) {
        $query = "SELECT * FROM users WHERE email='$email'";
        $result = mysql_query($query);
        $data = array();
        while ($row = mysql_fetch_object($result)) {
            $data[] = $row;
        }
        return $data;
    }
    
    public function getEvents() {
        $query = "SELECT * FROM events";
        $result = mysql_query($query);
        $data = array();
        while ($row = mysql_fetch_object($result)) {
            $data[] = $row;
        }
        return $data;
    }

    public function getEventsByID($id) {
        $query = "SELECT * FROM events WHERE id='$id'";
        $result = mysql_query($query);
        $data = array();
        while ($row = mysql_fetch_object($result)) {
            $data[] = $row;
        }
        return $data;
    }
    
    public function insertUser($email, $full_name, $password) {

        $email = mysql_real_escape_string($email);
        $full_name = mysql_real_escape_string($full_name);
        $password = mysql_real_escape_string($password);
        $password = sha1($password);
        $query = "INSERT INTO users (email,fullname,password) VALUES ('$email','$full_name','$password')";
        mysql_query($query);

        return mysql_insert_id();
    }
    
    public function reservation($user_id, $event_id, $data) {

        $query = "INSERT INTO reservation (user_id,event_id,reservation) VALUES ('$user_id','$event_id','$data')";
        mysql_query($query);
    
        return $data;
    }
    
    public function getBooked($event_id) {
        $query = "SELECT reservation FROM reservation WHERE event_id='$event_id'";
        $result = mysql_query($query);
        $data = array();
        while ($row = mysql_fetch_object($result)) {
            $data[] = $row;
        }
        return $data;
    }
  
    public function getUserEvents($user_id){
        $query = "SELECT event_id FROM reservation WHERE user_id='$user_id'";
        $result = mysql_query($query);
        $data = array();
        while ($row = mysql_fetch_object($result)) {
            $data[] = $row;
        }
        return $data;
    }

    public function insertEvent($name, $location, $theater, $type, $img, $description, $date) {


        $name = mysql_real_escape_string($name);
        $location = mysql_real_escape_string($location);
        $type = mysql_real_escape_string($type);
        $description = mysql_real_escape_string($description);
        $date = mysql_real_escape_string($date);


        $query = "INSERT INTO events (name, location, theater, type, img, description, date) VALUES ('$name','$location','$theater','$type','$img','$description','$date')";
        mysql_query($query);

        return mysql_insert_id();
    }

    public function register($user_id, $event_id, $seats) {

        $user_id = mysql_real_escape_string($user_id);
        $event_id = mysql_real_escape_string($event_id);

        //TODO: get seats json parse into array

        $query = "INSERT INTO registrations (user_id,event_id,seats_id) VALUES ('$user_id','$event_id','$seats')";
        mysql_query($query);

        return mysql_insert_id();
    }

    public function generateSeat($event_id, $price, $number, $type) {

        $event_id = mysql_real_escape_string($event_id);
        $price = mysql_real_escape_string($price);
        $number = mysql_real_escape_string($number);
        $type = mysql_real_escape_string($type);


        $query = "INSERT INTO seats (event_id,price,number,type) VALUES ('$event_id','$price','$number','$type')";
        mysql_query($query);

        return mysql_insert_id();
    }

}

?>