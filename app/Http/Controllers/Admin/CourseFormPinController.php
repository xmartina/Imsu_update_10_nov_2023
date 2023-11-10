<?php

namespace App\Http\Controllers\Admin;
  // app/Http/Controllers/CourseFormPinController.php

    use App\Models\CourseFormPin;
    use App\Http\Controllers\Controller;
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
