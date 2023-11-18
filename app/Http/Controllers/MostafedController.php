<?php

use Maatwebsite\Excel\Excel;
namespace App\Http\Controllers;
use App\Models\mostafed;
use App\Exports\moExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MostafedController extends Controller
{
    public function create_mo(){
        return view('mostafed.create_mo');

    }
    public function index_mo(Request $request){
        if($request->has('search')){
            $mostafeds = mostafed::where('Beneficiary','LIKE','%'.$request->search.'%')->Paginate(10);

        }else{
            $mostafeds = mostafed::Paginate(10);

        }
        return view('mostafed.index_mo')->with('mostafeds', $mostafeds);

    }

    public function edit($id){
        $mostafeds = mostafed::find($id);
        return view('mostafed.edit_mo')->with('mostafeds', $mostafeds);
    }
    public function update(Request $request , $id){
        $mostafed = mostafed::find($id);
        $mostafed->update($request->all());
        return redirect()->route('mostafed.index_mo');     
           Toastr::success('Post added successfully ','Success');

    }
    public function show($id){
        $mostafed = mostafed::find($id);
        return view('mostafed.show_mo')->with('mostafeds', $mostafed);
    }
    public function store(Request $request) {
        $mostafed = mostafed::create($request->all());
                 return redirect()->back();

    }
    public function Search(Request $request)
    {
      if(empty($request))
      {

       $mostafeds=mostafed::paginate(2);
        return view('mostafed.index_mo',compact('mostafeds'));

      }else{

         $mostafeds=mostafed::where('Beneficiary','like','%'.$request->search.'%')->paginate(2);
         $mostafeds->appends($request->all());
        return view('mostafed.index_mo',compact('mostafeds'));

      }
     
    }

    
 

    public function destroy($id)
    {
        mostafed::destroy($id);
        return redirect()->back();
    }

    
    public function exportpdf(){
        $data = Employee::all();

        view()->share('data', $data);
        $pdf = PDF::loadview('datapegawai-pdf');
        return $pdf->download('data.pdf');
    }

    public function exportmo() 
    {
       return Excel::download(new moExport, 'المستفيدين.بلدية الفهود.xlsx');
    }

    public function import(Request $request){
        Excel::import(new ImportUser, $request->file('file')->store('files'));
        return redirect()->back();
    }
    public function importView(Request $request){
        return view('importFile');
    }
    
}
