<?

namespace Local\Models\Iblock;

class Sections extends DataManipulation {

    public function get($keyBy = false)
    {
        $dbRes = $this->bGetList();

        while($res = $dbRes->GetNext())
        {
            if ($keyBy) {
                $sections[$res[$keyBy]] = $res;
            } else {
                $sections[] = $res;
            }
        }

        return $sections;
    }

    public function first()
    {
        $dbRes = $this->bGetList();
        $dbRes = $dbRes->GetNext();

        return $dbRes;
    }

    private function bGetList()
    {
        return \CIBlockSection::GetList(
            $this->sort,
            $this->filter,
            false,
            $this->select,
            $this->pagination
        );
    }
}