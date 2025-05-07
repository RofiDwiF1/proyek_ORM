<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Hitung total data
        $totalEmployees = Employee::count();
        $companiesCount = Company::count();
        $skillsCount = Skill::count();
        
        // Hitung rata-rata karyawan per perusahaan
        $avgEmployeesPerCompany = $companiesCount > 0 ? round($totalEmployees / $companiesCount, 1) : 0;
        
        // Data untuk chart posisi karyawan
        $positions = Employee::select('name', DB::raw('count(*) as count'))
        ->groupBy('name')
        ->orderBy('count', 'desc')
        ->get();
    
        $positionLabels = $positions->pluck('name');
        $positionData = $positions->pluck('count');
        
        
        // Data untuk chart skills
        $skills = Skill::withCount('employees')
            ->orderBy('employees_count', 'desc')
            ->limit(5)
            ->get();
        
        $skillsLabels = $skills->pluck('name')->toArray();
        $skillsData = $skills->pluck('employees_count')->toArray();
        
        // Ambil data companies untuk ditampilkan
        $companies = Company::withCount('employees')->get();
        $topSkills = Skill::withCount('employees')
                         ->orderBy('employees_count', 'desc')
                         ->take(5)
                         ->get();
        
        return view('dashboard.index', compact(
            'totalEmployees',
            'companiesCount',
            'skillsCount',
            'avgEmployeesPerCompany',
            'positionLabels',
            'positionData',
            'skillsLabels',
            'skillsData',
            'companies',
            'topSkills'
        ));
    }
}
