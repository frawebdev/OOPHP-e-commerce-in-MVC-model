<?php

class Controller{
    public function linksController(){
        if(isset($_GET['action'])){
            $links = $_GET['action'];
        }

    $response = Pages::linksModel($links);

    return $response;

    }

    public function registrationController(){
        if(isset($_POST['submit'])){
            $data = array(
                'name' => $_POST['username'],
                'email' => $_POST['email'],
                'pwd' => $_POST['pwd']
            );

            $response = Data::registrationModel($data, 'registration');

            if($response == true){
                echo 'ok';
            } else {
                echo 'no';
            }

        }


    }


}