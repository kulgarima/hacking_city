<?php

function logged_in() {
    if(isset($_SESSION['user_id'])) {
        return true;
    } else {
        return false;
    }
}

function userExists($user_id) {
   
    global $connect;
 
    $sql = "SELECT * FROM login WHERE given_id = '$user_id'";
    $query = $connect->query($sql);
    if($query->num_rows == 1) {
        return true;
    } else {
        return false;
    }
 
    $connect->close();
    // close the database connection
}
 
function login($name, $password, $user_id) {
    global $connect;
    $userdata = userdata($user_id);
 
    if($userdata) {
        $sql = " SELECT * FROM login WHERE name = '$name' AND password = '$password' AND given_id='$user_id'";
        $query = $connect->query($sql);
 
        if($query->num_rows == 1) {
            return true;
        } else {
            return false;
        }
    }
 
    $connect->close();
}
 
function userdata($user_id) {
    global $connect;
    $sql = "SELECT * FROM login WHERE given_id = '$user_id'";
    $query = $connect->query($sql);
    $result = $query->fetch_assoc();
    if($query->num_rows == 1) {
        return $result;
    } else {
        return false;
    }
     
    $connect->close();
 
}

function not_logged_in() {
    if(isset($_SESSION['user_id']) === FALSE) {
        return true;
    } else {
        return false;
    }
}

function get_student_data($user_id)
{
    global $connect;
    $sql = "SELECT * FROM student WHERE given_id= '$user_id'";
    $query = $connect->query($sql);
    $result = $query->fetch_assoc();
    return $result;

    $connect->close();

}
function get_teacher_data($user_id) {
    global $connect;

    $sql = "SELECT * FROM teacher WHERE given_id='$user_id'";
    $query = $connect->query($sql);
    $result = $query->fetch_assoc();
    return $result;
 
    $connect->close();
}


function logout() {
    if(logged_in() === TRUE){
        session_unset();
 
        session_destroy();
 
        header('location: index.php');
    }
}

function users_exists_by_id($id, $username) {
    global $connect;
 
    $sql = "SELECT * FROM users WHERE username = '$username' AND id != $id";
    $query = $connect->query($sql);
    if($query->num_rows >= 1) {
        return true;
    } else {
        return false;
    }
 
    $connect->close();
}
 
function updateInfo($id) {
    global $connect;
 
    $username = $_POST['username'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
 
    $sql = "UPDATE users SET username = '$username', first_name = '$fname', last_name = '$lname', contact = '$contact', address = '$address' WHERE id = $id";
    $query = $connect->query($sql);
    if($query === TRUE) {
        return true;
    } else {
        return false;
    }
}



?>