<?php 

if(isset($_POST['username']) && $_POST['password'])
{
    function validate($userinfo)
    {
        $userinfo = trim($userinfo);
        $userinfo = stripslashes($userinfo);
        $userinfo = htmlspecialchars($userinfo);
        return $userinfo;
    }

    $username = validate($_POST['username']);
    $passowrd = validate($_POST['password']);

    if(empty($username))
    {
        header("Location: indexnew.php?error=Username is required");
        exit();
    }else if(empty($passowrd))
    {
        header("Location: indexnew.php?error=Passowrd is required");
        exit();
    }

}
else{
    header("Location: indexnew.php" );
    exit();
}


?>