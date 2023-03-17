<?php
/**
* Task 4 - Function
* function kelulusan
* function grade
* function predikat
*/

	function kelulusan($uas, $uts,$tugas){
        $total = ($uts * 0.30) + ($uas * 0.35) + ($tugas * 0.35);

        if($total > 55){
            return 'lulus';
        }else{
            return 'tidak lulus';
        }

        return $total;

		
	}
	
	function grade($kelulusan) {
        if($kelulusan >= 85 && $kelulusan <= 100){
            return "A";
        }else if($kelulusan >= 70 && $kelulusan <= 84){
            return "B";
        }else if($kelulusan >= 56 && $kelulusan <= 69){
            return "C";
        }else if($kelulusan >= 36 && $kelulusan <= 55){
            return "E";
        }
        
        
	}
	
	function predikat($kelulusan){
        switch(grade($kelulusan)) {
            case "A" :
                return "sangat baik";
            case "B" :
                return "baik";
            case "C" :
                return "cukup";
            case "D" :
                return "kurang";
            case "E" :
                return "sangat kurang";
            default:
                return "Gak guna";
        }
		
	}
?>