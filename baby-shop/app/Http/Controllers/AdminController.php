<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Request\Category_Taxonomy_Request;
use App\Category_Taxonomy;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**show_admin */
    public function show_admin(){
        return view('bb-admin.index');
    }


    /**show_add_edit_delete_all_post */
    

}
