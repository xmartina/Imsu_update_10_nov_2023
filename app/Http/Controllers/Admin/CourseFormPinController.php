<?php

// CourseFormPinController.php

namespace App\Http\Controllers\Admin;

use App\Models\CourseFormPin;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Models\Student;
//use App\Http\Controllers\Admin;

class CourseFormPinController extends Controller
{
    public function index(): View
    {
        $title = "List Pin Page";
        $pins = CourseFormPin::with('createdAdmin')->get();

//        foreach ($pins as $pin) {
//            // Manually retrieve user for debugging
//            $user = UserController::find($pin->created_admin_id);
//
//            // Log or print a message for debugging
//            if ($user === null) {
//                \Log::error("User not found for CourseFormPin with ID: {$pin->id}, created_admin_id: {$pin->created_admin_id}");
//            }
//        }


        return view('admin.course-form-pin.index', compact('pins', 'title'));
    }
}
