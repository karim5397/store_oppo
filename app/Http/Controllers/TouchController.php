<?php

namespace App\Http\Controllers;

use App\Models\Touch;
use App\Exports\TouchExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class TouchController extends Controller
{
    public function index(Request $request)
    {
        $touchs = Touch::where(function ($q) use ($request) {
            return $q->when($request->search, function ($query)  use ($request) {
                return $query->where('name', 'like', '%' . $request->search . '%')
                    ->orWhere('phone', 'like', '%'  . $request->search . '%')
                    ->orWhere('message', 'like', '%'  . $request->search . '%')
                    ->orWhere('email', 'like', '%'  . $request->search . '%');
            });
        })->whereNotNull('id')->latest()->Paginate(5);
        return view('admin.touchs.index',compact('touchs'));
    }
    public function destroy(Touch $touch)
    {
        $touch->delete();
        return redirect()->back()->with('message' , 'The Touch Deleted Successfully');
    }
    public function export()
    {
        return Excel::download(new TouchExport, 'touch.xlsx');

        // return Excel::download(new TouchExport, 'touch.xlsx');
        // return back();
    }
}
