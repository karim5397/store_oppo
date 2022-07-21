<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Requests\service\ServiceRequest;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        $services = Service::where(function ($q) use ($request) {
            return $q->when($request->search, function ($query)  use ($request) {
                return $query->where('title_en', 'like', '%' . $request->search . '%')
                    ->orWhere('title_ar', 'like', '%'  . $request->search . '%')
                    ->orWhere('icon', 'like', '%'  . $request->search . '%');

            });
        })->whereNotNull('id')->Paginate(5);
        return view('admin.services.index' , compact('services'));
    }


    public function create()
    {
        return view('admin.services.create');
    }


    public function store(ServiceRequest $request)
    {
        service::create($request->validated());
        return redirect()->route('services.index')->with('message' , 'Service Created Successfully');
    }


    public function edit(Service $service)
    {
        $service=Service::find($service->id);
        return view('admin.services.edit' , compact('service'));
    }

    public function update(ServiceRequest $request ,Service $service )
    {
            $service=Service::find($service->id)->update($request->validated());
            return redirect()->route('services.index')->with('message' , 'The Service Is Updated Successfully');

    }

    public function destroy($id)
    {
        Service::findOrFail($id)->delete();
        return redirect()->route('services.index')->with('message' , 'The service Is Deleted Successfully');
    }
}
