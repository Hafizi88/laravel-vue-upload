<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ProductsImport;
class UploadController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function upload(Request $request)
    {
        $file = $request->file('file');
        Excel::import(new ProductsImport, $file);
        return response()->json([
            'result' => true
        ], 200);
    }


}
