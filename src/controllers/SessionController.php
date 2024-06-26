<?php


require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../models/Band.php';
require_once __DIR__.'/../repository/UserRepository.php';
require_once __DIR__.'/../repository/BandRepository.php';
require_once __DIR__.'/../exceptions/NoMatchingRecordException.php';
session_start();
class SessionController extends AppController
{

    protected function createSession(User $user){
        session_start();
        if(isset($_SESSION['auth'])){
            session_destroy();
            session_start();
        }
        $_SESSION['auth']=true;
        $_SESSION['useremail']=$user->getEmail();
        $_SESSION['username']=$user->getUsername();
        $_SESSION['role']=$user->getRole();
    }

    protected function requiredSession(){
        session_start();
        if(!isset( $_SESSION['auth'])){
            $this->changeHeader('login');
            die();
        }
    }

    protected function getUserSession(){
        $userRepository = new UserRepository();
        try {
            $user = $userRepository->getUser( $_SESSION['useremail']);
        }
        catch(NoMatchingRecordException $e) {
            session_destroy();
            $this->changeHeader('login');
            die();
        }
        return ["user" => $user];
    }

    protected function createSessionBand(Band $band){
        session_start();
        if(isset( $_SESSION['auth'])){
            session_destroy();
            session_start();
        }
        $_SESSION['auth']=true;
        $_SESSION['useremail']=$band->getEmail();
        $_SESSION['username']=$band->getUsername();
        $_SESSION['role']=3;

    }

    protected function getBandSession(){
        $bandRepository = new BandRepository();
        try {
            $band = $bandRepository->getBand($_SESSION['useremail']);
        }
        catch(NoMatchingRecordException $e) {
            session_destroy();
            $this->changeHeader('login');
            die();
        }
        return ["band" => $band];
    }

}