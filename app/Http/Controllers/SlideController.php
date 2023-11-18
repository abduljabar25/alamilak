<?php
use App\Exports\SlideExport;
namespace App\Http\Controllers;
use App\Models\slide;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\SlideExport;

class SlideController extends Controller
{
    public function create_sl(){
        return view('slide.create_sl');

    }
   
    public function index_sl(Request $request){
        if($request->has('search')){
            $slides = slide::where('name','LIKE','%'.$request->search.'%')->Paginate(10);

        }else{
            $slides = slide::Paginate(10);

        }
        return view('slide.index_sl')->with('slides', $slides);
    }
       

    public function edit($id){
        $slides = slide::find($id);
        return view('slide.edit_sl')->with('slides', $slides);
    }
    public function show($id)
    { 
        $slide = slide::find($id);
        return view('slide.show_sl')->with('slides', $slide);
    }
    public function order($id)
    { 
        $slide = slide::find($id);
        return view('slide.order')->with('slides', $slide);
    }
    public function store_sl(Request $request){
        $slide = slide::create($request->all());
        return redirect()->route('index_sl')->with(['message' => 'اضافة عنصر جديد']); 

    }
    
    public function update(Request $request , $id){
        $slide = slide::find($id);
        $slide->update($request->all());
        return redirect()->route('index_sl')->with(['message' => 'تم تحديث العنصر بنجاح']);  

    }
    public function destroy($id)
    {
        
        slide::destroy($id);
        return redirect()->back()->with(['message' => 'تم حذف العنصر بنجاح']); 
    }
    public function generate ($id)
    {
        $slide = slide::findOrFail($id);
        $slide = QrCode::size(400)->generate($slide->name);
        return view('slide.show_sl',compact('slide'));
    }
    public function export() 
{
   return Excel::download(new SlideExport, 'الشرائح.بلدية الفهود.xlsx');
}

    
}
