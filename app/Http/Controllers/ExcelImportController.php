<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\User;
class ExcelImportController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function showForm()
    {
       return view('import');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import(Request $request) 
    {
        $validatedData = $request->validate([
           'file' => 'required',
        ]);
        Excel::import(new UsersImport,$request->file('file'));
           
        return redirect('import')->with('status', 'File has been imported');
    }
   
}