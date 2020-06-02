<?

namespace Local\Models\Iblock;

class IBlock {
    public function getProps($iblockID, $returnField)
    {
        $res = \CIBlock::GetProperties($iblockID);

        while ($res_arr = $res->Fetch()) {
            $props[] = $returnField ? $res_arr[$returnField] : $res_arr;
        }
        
        return $props;
    }
}