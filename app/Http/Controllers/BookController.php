<?php
use Webpatser\Uuid\Uuid;

use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

namespace App\Http\Controllers;
use App\Models\books;
use Illuminate\Http\Request;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexB()
    { 
        $books = books::all();
        return view('books.indexB');
    }

    public function createB()
    {
        return view('books.createB');
    }
    public function store(Request $request)
    {
        // التأكد من أن الطلب يمتلك بالفعل ملف
   if ($request->hasFile('image')) {
      
    // التحقق من الملف صورة بلاحقة ملف صورة
    $request->validate([
       'image' => 'mimes:jpeg,bmp,png' 
    ]);

    // images في مجلد app/storage/public تخزين الملف محليا في مجلد 
    $request->image->store('images', 'public');

 }

 return back(); 
    }}