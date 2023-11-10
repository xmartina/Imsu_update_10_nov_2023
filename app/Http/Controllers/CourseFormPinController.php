<?php

namespace App\Http\Controllers;
  // app/Http/Controllers/CourseFormPinController.php

    use App\Models\CourseFormPin;
    use App\User;
    use App\Models\Student;
    use Illuminate\Http\Request;

class CourseFormPinController extends Controller
{
    public function index()
    {
        $pins = CourseFormPin::all();
        return view('admin.course-form-pin.index', compact('pins'));
    }

}
