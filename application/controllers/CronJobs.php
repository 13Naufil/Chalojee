<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CronJobs extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->library("common");
        $this->load->model("notifications");
        $this->common->username = WSDL_USERNAME;
        $this->common->password = WSDL_PASSWORD;
    }

    public function index()
    {

    }

    public function CityWiseNotification()
    {
        $data = $this->common->CityWiseNotification();
        $response = $data[0]['CityWiseNotificationResponse'];
        if($response['Status']['StatusCode'] == 1)
        {
            foreach ($response['CityWiseNotifications']['CityWiseNotification'] as $notification)
            {
                $attr = $notification['@attributes'];
                $check = $this->notifications->check($attr['CityCode']);
                print_r($check);

                if($check == 1)
                {
                    $this->notifications->update($attr,$attr['CityCode']);
                }
                else
                {
                    $this->notifications->add($attr);
                }
            }
        }
    }



}
