<?php
class UserAction
{
    /**
     * Данный класс будет отвечать за перенаправление 
     * Конроллер крч
     */
    public static function signIn(): string
    {
        /**
         * Авторизация, необходимо передать в POST['action'] = "signin"
         */
        if(UserLogic::isAuthorized()){
            header("Location: http://". $_SERVER['SERVER_NAME'] . "?success=1");
            die();
        }
        if (empty($_POST)) {
            return "";
        }
        if ($_POST["action"] != "signin") {
            return "";
        }
        $error = UserLogic::signIn($_POST["login"], $_POST["password"]);
        if(!empty($error)){
            return $error;
        }
        header("Location: http://". $_SERVER['SERVER_NAME'] . "?success=1");
        die();
    }
    public static function signUp() : array
    {
        if(UserLogic::isAuthorized()){
            header("Location: http://". $_SERVER['SERVER_NAME'] . "?success=1");
            die();
        }
        /**
         * Регистрация необходимо передать в POST['action'] = "signup"
         */
        if (empty($_POST)) {
            return [];
        }
        if ($_POST["action"] != "signup") {
            return [];
        }
        $errors = UserLogic::signUp(
            $_POST["login"],
            $_POST["name"],
            $_POST["password1"],
            $_POST["password2"],
            $_POST["gender"],
            $_POST["interes"],
            $_POST["birthday"],
            $_POST["vk"],
            $_POST["blood"],
            $_POST["factor"]
        );
        
        if (!($errors)) {
            header("Location: http://". $_SERVER['SERVER_NAME'] . "?success=1");
            die();
        }
        return $errors;
    }
    public static function signOut() : string
    {
        UserLogic::signOut();
        header("Location: http://". $_SERVER['SERVER_NAME'] . "?success=1");
        die();
        
    }
}
