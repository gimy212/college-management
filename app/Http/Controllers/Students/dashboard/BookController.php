<?php

namespace App\Http\Controllers\Students\dashboard;
use App\Repository\LibraryRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Library;
class BookController extends Controller
{
   
    

    public function index()
    {
        $library=Library::all();
        return view('Pages.Students.dashboard.library',compact('library'));
    }

   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
    public function downloadAttachment($filename)
    {
        return $this->library->download($filename);
    }
}
