<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Add after namespace declaration
use App\Models\Media;

class MediaLibraryController extends Controller
{
    /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware(['auth', 'verified']);
  }

  /**
   * Get Media Library page
   * @return View
   */
   public function mediaLibrary(Request $request){
    $user_obj = auth()->user();
    // $media_obj = $user_obj->media->all();
    // dd($media_obj);
    return view('medialibrary', ['user_obj' => $user_obj
        // ,'media_obj' => $media_obj 
        ]);
  }
}
