<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Computer;
class ComputeresController extends Controller
{

    // private static function GetData()
    // {
    //     return [
    //         ['id' => 1, 'name' => 'LG', 'origin' => 'koria'],
    //         ['id' => 2, 'name' => 'Dell', 'origin' => 'usa'],
    //         ['id' => 3, 'name' => 'SamSung', 'origin' => 'koria'],
    //     ];
    // }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('computers.index', [
            /**من داخل كلاس الموديل هجيب كل المعلومات */
            'computers' => Computer::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('computers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Computer-Name'=>'required',
            'Computer-Origian'=>'required',
            'Computer-Price'=>['required','integer']

        ]);
        /** تحزين المعلومات عن طريث الموديل فى الداتابيز*/
        $computer =new Computer();
        $computer -> name =strip_tags( $request->input('Computer-Name'));
        $computer -> origin = strip_tags($request->input('Computer-Origian'));
        $computer -> price =strip_tags( $request->input('Computer-Price'));

        $computer->save();
        /**بعد تحزين المعلومات هنروح للصفحه الى بتعرض */
        return redirect()->route('computers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $computer)
    {
        /* ده فاريبل بنخزن فيه الداتا عشان نعرضها*/
        // $computers = self::GetData();
        /**ده عشان نسحب الداتا من الموديل و لو مش موجود تدينا ايرور */
        $index = Computer::findOrFail($computer);
        /* ده فاريبل بنبحث عن طريقه عن id جوا*/
        // $index = array_search($computer, array_column($computers, 'id'));
        /* ده عشان لو اتحطت اى دى غلط يدينى ايرور*/
        // if($index===false){
        //     abort(404);
        // }
        return view('computers.show', [
            'computers' => $index
        ]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($computer)
    {
        $index = Computer::findOrFail($computer);
        return view('computers.edit', ['computer' => $index]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $computer)
    {
        // Validation
        $request->validate([
            'Computer-Name' => 'required',
            'Computer-Origian' => 'required',
            'Computer-Price' => ['required', 'integer']
        ]);

        // Find the existing computer record
        $Up_Date = Computer::findOrFail($computer);

        // Update the attributes with the new data
        $Up_Date->name = strip_tags($request->input('Computer-Name'));
        $Up_Date->origin = strip_tags($request->input('Computer-Origian'));
        $Up_Date->price = strip_tags($request->input('Computer-Price'));

        // Save the changes to the database
        $Up_Date->save();

        // Redirect to the show page for the updated computer
        return redirect()->route('computers.show', $computer);
    }


        /**
         * Remove the specified resource from storage.
         */
        public function destroy(string $computer)
        {
            $To_delete = Computer::findOrFail($computer);
            $To_delete->delete();
            return redirect()->route('computers.index');
        }

    }
