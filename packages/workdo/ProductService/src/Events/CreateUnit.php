<?php

namespace Workdo\ProductService\Events;

use Illuminate\Queue\SerializesModels;

class CreateUnit
{
    use SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public $request;
    public $unit;
    public function __construct($request,$unit)
    {
        $this->request = $request;
        $this->unit = $unit;
    }
}
