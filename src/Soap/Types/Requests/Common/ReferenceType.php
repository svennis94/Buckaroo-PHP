<?php

namespace SeBuDesign\Buckaroo\SOAP\Types\Requests\Common;

class ReferenceType
{
    public $Transforms;
    public $DigestMethod;
    public $DigestValue;
    public $URI;
    public $Id;

    public function __construct($sUri)
    {
        $this->URI = $sUri;
        $this->DigestMethod = new DigestMethodType();
        $this->DigestValue = '';
        $this->Transforms = [
            new TransformType(),
        ];
    }
}
