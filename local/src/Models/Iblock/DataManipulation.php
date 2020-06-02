<?

namespace Local\Models\Iblock;

abstract class DataManipulation {
    protected $filter = [];
    protected $sort = [];
    protected $pagination = false;
    protected $select = [];

    public function __construct()
    {
        \CModule::IncludeModule("iblock");
    }

    public function filter($filter)
    {
        $this->filter = $filter;
        return $this;
    }

    public function sort($sort)
    {
        $this->sort = $sort;
        return $this;
    }

    public function select($select)
    {
        $this->select = $select;
        return $this;
    }

    public function pagination($pagination)
    {
        $this->pagination = $pagination;
        return $this;
    }
}