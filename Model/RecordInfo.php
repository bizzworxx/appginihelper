<?php

namespace bizzworxx\appginihelper\Model;

class RecordInfo
{
    function __construct(public readonly string $tn, public readonly string|int $pk)
    {
        $this->table = new TableInfo($this->tn);
        $this->data = getRecord($this->tn, $this->pk);
        $owner = getRecordOwner($this->tn, $this->pk);
        $this->owner = $owner ? new \bizzworxx\appginihelper\Membership\Member($owner) : null;
    }

    public readonly TableInfo $table;
    public readonly array $data;
    public readonly ?\bizzworxx\appginihelper\Membership\Member $owner;
}