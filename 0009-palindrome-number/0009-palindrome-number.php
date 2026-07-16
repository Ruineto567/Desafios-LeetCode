class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $ValorInicial = $x;
        $ValorInvertido = 0;

        if ($x < 0) {
            return false;
        }

        while ($x != 0) {
            $UltimoDigito = $x % 10;
            $ValorInvertido = $ValorInvertido * 10 + $UltimoDigito;
            $x = floor($x / 10);
        }

        if ($ValorInicial != $ValorInvertido){
            return false;
        }

        return true;
    }
}