<?php

namespace bizzworxx\appginihelper\Model;

class ColumnInfo
{
    function __construct(public readonly string $tn, public readonly string $cn)
    {
        $this->table = new TableInfo($tn);

        $this->name = $cn;
        $ci = get_table_fields($this->tn, false)[$cn];
        $this->caption = $ci['info']['caption'];
        $this->description = $ci['info']['description'];

    }

    public readonly TableInfo $table;
    public readonly string $name;
    public readonly string $caption;
    public readonly string $description;
}