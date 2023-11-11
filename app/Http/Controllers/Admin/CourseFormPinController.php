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
        return view('admin.course-form-pin.index', compact('pins', 'title'));
    }
}
