<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [];

    /**
     * Constructor.
     */
    protected $main_url = "dashboard";
    protected $login_url = "auth/login";
    protected $latest_url = "";

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.
        $this->user_model = new \App\Models\LocationUserModel();
        $this->user_token_model = new \App\Models\LocationUserTokenModel();
        $this->session = \Config\Services::session();
    }

    protected function checkAuth()
    {
        $uri = uri_string();
        $user_session = session("user");
        if ($user_session){
            if ($uri == "auth/login" || $uri == "auth/login_password_recover" || $uri == "auth/login_password_reset"){
                return base_url($this->main_url);
            }
        }else{
            if ($uri != "auth/login" && $uri != "auth/login_password_recover" && $uri != "auth/login_password_reset"){
                return base_url($this->login_url);
            }
        }
        return false;
    } 

}
