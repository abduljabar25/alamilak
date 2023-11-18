<?php

namespace App\Http\Controllers;
use App\Models\property;
use App\Exports\proExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function create(){
        return view('property.create');

    }
   
    public function index(Request $request){
        if($request->has('search')){
            $propertys = property::where('numpro','LIKE','%'.$request->search.'%')->Paginate(10);

        }else{
            $propertys = property::Paginate(10);

        }
        return view('property.index')->with('propertys', $propertys);
        
    }

    public function edit($id){
        $property = property::find($id);
        return view('property.edit',compact('property'));
    }
    public function show($id)
    {
        $property = property::find($id);
        return view('property.show')->with('propertys', $property);
    }
    
    public function store(Request $request){
        $property = property::create($request->all());
        return redirect()->route('property.index') ->with(['message' => 'تم اضافة عنصر جديد']);

    }

    public function update(Request $request , $id){
        $property = property::find($id);
        $property->update($request->all());
        return redirect()->route('property.index')->with(['message' => 'تم تحديث العنصر بنجاح']);
    }
    public function destroy($id)
    {
        property::destroy($id);
        
        return redirect()->route('property.index')->with(['message' => 'تم حذف العنصر بنجاح']); 
    }
    public function exportpro() 
    {
       return Excel::download(new proExport, 'الاملاك المؤجرة.بلدية الفهود.xlsx');
    }
    public function generate ($id)
    {
        $property = property::findOrFail($id);
        $property = QrCode::size(400)->generate($property->numpro);
        return view('property.show',compact('property'));
    }
}
