<?php

namespace App\Http\Controllers;

use App\Tracer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class TracerController extends Controller
{
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'identity' => 'required|string',
            
        ]);

        if ($validator->fails()) {
            return response('Identity not defined.',403);
        }

        $tracer = new Tracer();
        $tracer->identity = $request->identity;
        $tracer->ip = $request->ip();
        $tracer->save();
        return response('Ok',200); 
    }
}
