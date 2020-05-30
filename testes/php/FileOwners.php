<?php


/* ----------------- DESCRIÇÃO DO TESTE -----------------------*/

/*
Implemente uma função que ao receber um array associativo contendo arquivos e donos, retorne os arquivos agrupados por dono. 

Por exempolo, um array ["Input.txt" => "Jose", "Code.py" => "Joao", "Output.txt" => "Jose"] a função groupByOwners deveria retornar ["Jose" => ["Input.txt", "Output.txt"], "Joao" => ["Code.py"]].


*/

class FileOwners
{
    public static function groupByOwners($files)
    {
        
        $new_files = array();
        foreach ($files as $key => $value) { 
        	if (array_key_exists($value, $new_files)){
        		array_push($new_files[$value], $key);
    		}else{
    			$new_files[$value] = array($key);
    		}
    	}
    		return $new_files;
    }        
}


$files = array
(
    "Input.txt" => "Jose",
    "Code.py" => "Joao",
    "Output.txt" => "Jose",
    "Click.js" => "Maria",
    "Out.php" => "Maria",

);
print_r(FileOwners::groupByOwners($files));