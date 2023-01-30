<?php

namespace App\Http\Controllers\backend\event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use App\Models\Eventdemo;
use App\Event\DemoEvent;
class EventController extends Controller
{
    function __construct()
    {
        $this->middleware('admin');
    }

    public function eventdemo(){
        $data['title'] =  Config::get('constants.SYSTEM_NAME') . ' || Event Demo';
        $data['description'] =  Config::get('constants.SYSTEM_NAME') . ' || Event Demo';
        $data['keywords'] =  Config::get('constants.SYSTEM_NAME') . ' || Event Demo';
        $data['css'] = array(
            'toastr/toastr.min.css'
        );
        $data['plugincss'] = array(
            'global/plugins/datatables/datatables.min.css',
            'global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css'
        );
        $data['pluginjs'] = array(
            'js/toastr/toastr.min.js',
            'js/plugins/validate/jquery.validate.min.js',
            'global/scripts/datatable.js',
            'global/plugins/datatables/datatables.min.js',
            'global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js'
        );
        $data['js'] = array(
            'comman_function.js',
            'ajaxfileupload.js',
            'jquery.form.min.js',
            'eventdemo.js',
        );
        $data['funinit'] = array(
            'Eventdemo.init()'
        );
        $data['header'] = array(
            'title' => 'Event Demo',
            'breadcrumb' => array(
                'My Dashboard' => route('my-dashboard'),
                'Event Demo' => 'Event Demo',
            )
        );
        return view('backend.pages.eventdemo.list', $data);
    }

    public function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function ajaxcall(Request $request){
        $action = $request->input('action');
        switch ($action) {
            case 'getdatatable':
                $objEventdemo = new Eventdemo();
                $list = $objEventdemo->getdatatable();

                echo json_encode($list);
                break;

            case 'add-new-event':
                event (new DemoEvent($this->generateRandomString(15)));

                $return['status'] = 'success';
                $return['message'] = 'Event Demo successfully added.';
                $return['jscode'] = '$("#loader").hide();';
                $return['redirect'] = route('event-demo');

                echo json_encode($return);
                exit;

        }
    }
}
