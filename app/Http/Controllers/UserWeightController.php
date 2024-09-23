<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserWeight;
use Illuminate\Support\Facades\Auth;

class UserWeightController extends Controller
{
    public function index()
    {
        $weights = Auth::user()->weights;

        return view('user_weights.index', compact('weights'));
    }
}
