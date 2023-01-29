<?php

namespace App\Http\Controllers\backend\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
class DashboardController extends Controller
{
    function __construct()
    {
        $this->middleware('admin');
    }

    public function dashboard(){
        $data['title'] =  Config::get('constants.SYSTEM_NAME') . ' || My Dashboard';
        $data['description'] =  Config::get('constants.SYSTEM_NAME') . ' || My Dashboard';
        $data['keywords'] =  Config::get('constants.SYSTEM_NAME') . ' || My Dashboard';
        $data['css'] = array(
            'toastr/toastr.min.css'
        );
        $data['plugincss'] = array(
        );
        $data['pluginjs'] = array(
            'toastr/toastr.min.js',
            'plugins/validate/jquery.validate.min.js',
            'pages/crud/file-upload/image-input.js'
        );
        $data['js'] = array(
            'comman_function.js',
            'ajaxfileupload.js',
            'jquery.form.min.js',
            'dashboard.js',
        );
        $data['funinit'] = array(
            'Dashboard.init()'
        );
        $data['header'] = array(
            'title' => 'My Dashboard',
            'breadcrumb' => array(
                'My Dashboard' => 'My Dashboard',
            )
        );
        return view('backend.pages.dashboard.dashboard', $data);
    }

}
