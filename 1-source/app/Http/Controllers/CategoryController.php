<?php 
namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;

class CategoryController extends Controller
{
    public  function getCompanies($id){

        $obj = new Company();
        $companies = $obj->where('category_id', 'like', $id)->paginate(50);
        
        $companies->appends(['id' => $id]); 

        return view('companyType',['companies' => $companies]) ;
    }
}