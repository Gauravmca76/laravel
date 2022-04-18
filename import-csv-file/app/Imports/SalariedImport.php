<?php

namespace App\Imports;

use App\Salaried;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SalariedImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Salaried([  
            'firstname'     => $row['firstname'],  
            'lastname'    => $row['lastname'],   
            'mobile' => $row['mobile'],
            'alter_mobile' => $row['alter_mobile'],
            'dob' => $row['dob'],
            'age' => $row['age'],
            'm_income' => $row['m_income'],
            'a_income' => $row['a_income'],
            'gender' => $row['gender'],
            'married_status' => $row['married_status'],
            'city' => $row['city'],
            'state' => $row['state'],
            'circle' => $row['circle'],
            'msc_code' => $row['msc_code'],
            'operator' => $row['operator'],
            'occupation' => $row['occupation'],
            'email_id' => $row['email_id'],
            'pincode' => $row['pincode'],
            'location' => $row['location'],
            'exp' => $row['exp'],
            'desgination' => $row['designation'],
            'company_name' => $row['company_name'],
            'company_type' => $row['company_type'],
            'education' => $row['education'],
            'source' => $row['source'],
        ]);  
    }
}
