<?php

namespace Lisandrop05\Voyager\Events;

use Illuminate\Queue\SerializesModels;
use Lisandrop05\Voyager\Models\DataType;

class BreadDataUpdated
{
    use SerializesModels;

    public $dataType;

    public $data;

    public function __construct(DataType $dataType, $data)
    {
        $this->dataType = $dataType;

        $this->data = $data;

        event(new BreadDataChanged($dataType, $data, 'Updated'));
    }
}
