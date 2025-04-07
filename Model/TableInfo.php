<?php

namespace bizzworxx\appginihelper\Model;

class TableInfo
{
    public function __construct(public readonly string $tn)
    {
        $this->pkField = getPKFieldName($this->tn);
        $this->name = $tn;

        $ti = getTableList(true, false)[$this->tn];
        $this->caption = $ti[0];
        $this->description = $ti[1];
        $this->icon = $ti[2];
        $this->group = $ti[3];
        $this->imageSource = application_url($this->icon);

    }

    public readonly string $name;
    public readonly string $pkField;
    public readonly string $caption;
    public readonly string $description;
    public readonly string $icon;
    public readonly string $group;

    public readonly string $imageSource;

    public function getImage(): string
    {
        return "<img src=\"{$this->imageSource}\" style=\"height: 1.25em\" />";
    }
}