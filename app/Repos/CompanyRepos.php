<?php

namespace App\Repos;
use App\Models\Company;

class CompanyRepos{
    public function pluck(){
          // return Company::orderBy("name")->pluck("name",'id');
        $data      = [];
        $comapnies = Company::orderBy("name")->get();
        foreach ($comapnies as $company) {
            $data[$company->id] = $company->name . " (". $company->contacts()->count() . ")";
        }
        return $data;
    }
}