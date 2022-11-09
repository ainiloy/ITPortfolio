<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactModel;
use App\Models\CourseModel;
use App\Models\ProjectsModel;
use App\Models\ReviewModel;
use App\Models\ServicesModel;
use App\Models\VisitorModel;

class AdminController extends Controller
{
    function adminIndex(){
            $TotalContact= ContactModel::count();
            $TotalCourse=CourseModel::count();
            $TotalProject=ProjectsModel::count();
            $TotalReview=ReviewModel::count();
            $TotalService=ServicesModel::count();
            $TotalVisitor=VisitorModel::count();

             return view('Admin.Admin',[
                 'TotalContact'=>$TotalContact,
                 'TotalCourse'=>$TotalCourse,
                 'TotalProject' =>$TotalProject,
                 'TotalReview'=>$TotalReview,
                 'TotalService'=>$TotalService,
                 'TotalVisitor' =>$TotalVisitor
             ]);
         }

     }

