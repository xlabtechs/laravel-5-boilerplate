<?php namespace App\Events\Backend\Test19;

    use Illuminate\Queue\SerializesModels;
    /**
    * Class Test19Updated.
    */
    class Test19Updated
    {
            use SerializesModels;
            /**
            * @var
            */


            public $test19 ;

            /**
            * @param $test19
            */
            public function __construct($test19)
            {
                 $this->test19 = $test19;
            }
    }
