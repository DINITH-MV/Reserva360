<?php
function loginDataExistsUser($conn, $username, $password)
{
    $sql = "SELECT * FROM users WHERE username = ? AND password = ?;";

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../php/login.php?error=stmtfailed');
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        mysqli_stmt_close($stmt);
        return $row;
    } else {
        $result = false;
        mysqli_stmt_close($stmt);
        return $result;
    }
}

function loginDataExistsAdmin($conn, $username, $password)
{
    $sql1 = "SELECT * FROM admin WHERE user_name = ? AND password = ?;";

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql1)) {
        header('location: ../php/login.php?error=stmtfailed');
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        mysqli_stmt_close($stmt);
        return $row;
    } else {
        $result = false;
        mysqli_stmt_close($stmt);
        return $result;
    }
}

function login($conn, $username, $password)
{
    $loginDataExistsUser = loginDataExistsUser($conn, $username, $password);
    $loginDataExistsAdmin = loginDataExistsAdmin($conn, $username, $password);

    if ($loginDataExistsUser === false) {
        if (!$loginDataExistsAdmin === false) {
            $pwdHashed1 = $loginDataExistsAdmin["password"];
            $checkPassword1 = password_verify($password, $pwdHashed1);
            if (!$checkPassword1 == true) {
                session_start();
                $_SESSION['AdminID'] = $loginDataExistsAdmin['ID'];
                $_SESSION['Ausername'] = $loginDataExistsAdmin['user_name'];
                $_SESSION['AfirstName'] = $loginDataExistsAdmin['firstname'];
                $_SESSION['AlastName'] = $loginDataExistsAdmin['lastname'];
                $_SESSION['Aemail'] = $loginDataExistsAdmin['email'];
                $_SESSION['AmobileNumber'] = $loginDataExistsAdmin['mobileNumber'];
                header('location: http://localhost/Reserva360/AdminAccount/PHP/overview.php');
                exit();
            }
        } else {
            header('location: ../php/login.php?error=Incorrect username or password');
            exit();
        }
    }

    $pwdHashed = $loginDataExistsUser["password"];
    $checkPassword = password_verify($password, $pwdHashed);

    if ($checkPassword == 0) {
         if (!$checkPassword == true) {
            session_start();
            $_SESSION['userID'] = $loginDataExistsUser['userID'];
            $_SESSION['username'] = $loginDataExistsUser['username'];
            $_SESSION['firstName'] = $loginDataExistsUser['fname'];
            $_SESSION['lastName'] = $loginDataExistsUser['lname'];
            $_SESSION['email'] = $loginDataExistsUser['email'];
            $_SESSION['mobileNumber'] = $loginDataExistsUser['pnumber'];
            header('location: http://localhost/Reserva360/Hotel/PHP/Hotel.php');
            exit();
        } else {
             header('location: ../php/login.php?error=Incorect username or password');        
            exit();
        }
    }
}
