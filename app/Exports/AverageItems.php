<?php

namespace App\Exports;

use App\Models\Survey;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Row;

class AverageItems implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     * 
     */

    public function headings(): array
    {
        return [
            'C.Común',
            'Confianza',
            'G.Conflictos',
            'Compromiso',
            'Corresponsabilidad',
            'Oresultados',
            'Orelaciones'
        ];
    }
    
    public function collection()
    {
        $rows = DB::connection()
            ->table('surveys as srv')
            ->selectRaw(
                '(avg(option1) + avg(option5)+ avg(option15)+ avg(option22))/4 Ccomun,
                (avg(option6) + avg(option9)+ avg(option17)+ avg(option23))/4 Confianza,
                (avg(option2) + avg(option10)+ avg(option14)+ avg(option24))/4 Gconflictos,
                (avg(option4) + avg(option11)+ avg(option18)+ avg(option25))/4 Comrpomiso,
                (avg(option3) + avg(option16)+ avg(option20)+ avg(option26))/4 Corresponsabilidad,
                (avg(option8) + avg(option13)+ avg(option21)+ avg(option27))/4 Oresultados,
                (avg(option7) + avg(option12)+ avg(option19)+ avg(option28))/4 Orelaciones'
            )
            ->join('users as usr', 'usr.id', '=', 'srv.user_id')
            ->get();
            return $rows;
    }
}
