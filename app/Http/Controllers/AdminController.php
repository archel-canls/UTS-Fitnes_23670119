<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function calendar()
    {
        return view('admin.calendar');
    }

    public function formElements()
    {
        return view('admin.form_elements');
    }

    public function tablePlugins()
    {
        return view('admin.table_plugins');
    }

    public function uiModal()
    {
        return view('admin.ui_modal_notification');
    }

    public function login()
    {
        return view('admin.login');
    }
}