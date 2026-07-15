class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        foreach ($nums as $indice => $valor){  
            $falta = $target - $valor;
            $indiceDaFalta = array_search($falta, $nums); 
            if ($indiceDaFalta !== false && $indiceDaFalta !== $indice) {
                return [$indice, $indiceDaFalta]; 
            } 
        }
    }
}