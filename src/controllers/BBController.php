<?php

require_once 'SessionController.php';
require_once __DIR__.'/../repository/BandRepository.php';
require_once __DIR__.'/../repository/UserRepository.php';
require_once __DIR__.'/../exceptions/NoMatchingRecordException.php';
require_once __DIR__.'/../exceptions/WorngParamertException.php';
class BBController extends SessionController
{

    private $bandRepository;

    public function __construct()
    {
        parent::__construct();
        $this->bandRepository = new BandRepository();
    }

    public function bandProfile(){
        $this->requiredSession();
        if(isset($_GET['id'])){
            $id=$_GET['id'];

            if(is_integer($id)){
                $this->changeHeader('logout');
            }
                try{
                    $band=$this->bandRepository->getBandById($id);
                }catch (NoMatchingRecordException | WorngParamertException $e ){
                    $this->changeHeader('logout');
                }
                return $this->render('bandProfile',['band'=>$band]);

            }

         $this->changeHeader('logout');
    }

    public function delete(){
        $this->requiredSession();

        if (isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            if(!$this->bandRepository->ifExists($id)){
                return $this->changeHeader('homepage');
            }
            $this->bandRepository->delete($id);
            return $this->changeHeader('homePage');
        }

        return $this->changeHeader('login');

    }

    public function like(){
        $this->requiredSession();
        if(isset($_REQUEST['id'])){
            $id=$_REQUEST['id'];
            if(!$this->bandRepository->ifExists($id)){
                return $this->changeHeader('homepage');
            }
            $this->bandRepository->like($id);
        }
        return $this->changeHeader('login');

    }
}