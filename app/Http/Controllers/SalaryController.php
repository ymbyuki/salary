<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Salary;
use App\Models\User;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salary = new Salary;
        $data = $salary->getYearAllSalary(); //今年度全データ
        $month = $salary->totalThisMonthCost(); //今月合計金額
        $total = $salary->totalCost(); //今年度合計金額
        $year = date('Y');
        return view('index', compact('data', 'month', 'total', 'year'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth()->id();
        return view('record', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request;
        $validatedData = $data->validate([
            'money' => ['numeric'],
        ]);
        $item = new \App\Models\Salary;
        $item->user_id = Auth()->id();
        $item->bank = $data->bank;
        $item->date = $data->date;
        $item->workplace = $data->workplace;
        $item->money = $data->money;
        $item->save();
        $request->session()->regenerateToken(); //セッションを再定義
        return view('check', compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // $id = $request->id;
        // $salary=Salary::where('id', $id)->get();
        $data = $request;
        $salary = new Salary;
        $content = $salary->getSalary($data->id);
        return view('content', compact('content'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        if( empty($request->id) ){
            return redirect('index');
        }
        $id = $request->id;
        $salaryContent = new Salary;
        $data = $salaryContent->getSalary($id);
        return view('update', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $request;
        $validatedData = $data->validate([
            'money' => ['numeric'],
        ]);
        Salary::where('id', $request->id)->update([
            'date' => $request->date,
            'bank' => $request->bank,
            'workplace' => $request->workplace,
            'money' => $request->money,
        ]);
        $request->session()->regenerateToken(); //セッションを再定義
        return view('check', compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id = $request->id;
        Salary::find($id)->delete();
        return redirect('index');
    }
}
