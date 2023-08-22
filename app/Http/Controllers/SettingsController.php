<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    function settingPage($settingName)
    {
        if($settingName == 'users'){
            $componentName = "user-table";
        }elseif($settingName == 'permission'){
            $componentName = "permission-table";
        }elseif($settingName == 'address'){
            $componentName = "address-table";
        }elseif($settingName == 'plans'){
            $componentName = "price-plans-table";
        }elseif($settingName == 'funds'){
            $componentName = "funds-table";
        }else{
            return redirect('/setting/users');
        }
        return view('app.setting.index',compact('componentName'));
    }
}
