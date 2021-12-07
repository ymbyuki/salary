<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;


class Salary extends Model
{
    use HasFactory;
    use softdeletes;

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //今年の全データ
    public function getYearAllSalary() {
        $year = date('Y');
        $auth=auth()->user()->id;
        $user=Salary::where('user_id', $auth)
                    ->whereYear('date', $year)
                    ->orderBy('date', 'desc')
                    ->get();
        return $user;
    }

    //今月の全データ
    public function getThisMonthSalary() {
        $year = date('Y');
        $month = date('n');
        $auth=auth()->user()->id;
        $user=Salary::where('user_id', $auth)
                    ->whereYear('date' , $year)
                    ->whereMonth('date' , $month)
                    ->get();
        return $user;
    }

    //個別詳細
    public function getSalary($id) {
        $salary=Salary::where('id', $id)->first();
        return $salary;
    }

    //今年の合計
    public function totalCost() {
        $total = $this->getYearAllSalary();
        $total_cost = 0;
        foreach ($total as $item){
            $total_cost += $item['money'];
        }
        return $total_cost;
    }

    
    //今月の合計
    public function totalThisMonthCost() {
        $total = $this->getThisMonthSalary();
        $total_cost = 0;
        foreach ($total as $item){
            $total_cost += $item['money'];
        }
        return $total_cost;
    }

    //全データ取得
    public function getAllSalary() {
        $auth=auth()->user()->id;
        $user=Salary::where('user_id', $auth)
                    ->orderBy('date', 'desc')
                    ->get();
        return $user;
    }

}