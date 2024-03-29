<?php

namespace App\Http\Controllers\Api\v1;

use App\Course;
use App\Http\Requests\CourseRequest;
use App\Http\Resources\v1\Course as CourseResource;
use App\Http\Resources\v1\CourseCollection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::paginate(2);
//        return response()->json($courses);
//        return new CourseResource($courses);
        return new CourseCollection($courses);
    }

    public function single(Course $course)
    {
//        throw new CourseIsPrivateException();
        return new CourseResource($course);
    }

    public function store(CourseRequest $request)
    {
//method 3
//CourseRequest

//method 2
//        $this->validate($request,[
//            'title' => 'required|unique:courses|max:255',
//            'body' => 'required'
//        ]);

//method 1
//        $validator = Validator::make($request->all(), [
//            'title' => 'required|unique:courses|max:255',
//            'body' => 'required'
//        ]);
//
//        if ($validator->fails()) {
//            return response([
//                'data' => $validator->errors(),
//                'status' => 'error'
//            ], Response::HTTP_UNPROCESSABLE_ENTITY);
//        }

        return \response([
            'data' => [],
            'status' => 'success'
        ], 200);

    }

}
