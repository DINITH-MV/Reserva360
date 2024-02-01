<?php
function usernameExists($conn, $username){
            $sql = "SELECT * FROM admin WHERE user_name = ?;";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                header('location: ../php/signup.php?error =stmtfailed');
                exit();
            }
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
    
            $resultData = mysqli_stmt_get_result($stmt);
    
            if($row = mysqli_fetch_assoc($resultData)){
                mysqli_stmt_close($stmt);
                return $row;
            }
            else{
                mysqli_stmt_close($stmt);
                $result = false;
                return $result;
            }           
        }

function emailExists($conn, $aEmail){
            $sql = "SELECT * FROM admin WHERE email = ?;";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                header('location: ../php/signup.php?error =stmtfailed');
                exit();
            }
            mysqli_stmt_bind_param($stmt, "s", $aEmail);
            mysqli_stmt_execute($stmt);
    
            $resultData = mysqli_stmt_get_result($stmt);
    
            if($row = mysqli_fetch_assoc($resultData)){
                mysqli_stmt_close($stmt);
                return $row;
            }
            else{
                mysqli_stmt_close($stmt);
                $result = false;
                return $result;
            }           
        }       
?>