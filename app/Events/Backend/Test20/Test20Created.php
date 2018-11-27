<?php
    namespace App\Events\Backend\Test20;

    use Illuminate\Queue\SerializesModels;
    /**
    * Class Test20Created.
    */
    class Test20Created
    {
            use SerializesModels;
            /**
            * @var
            */


            public $test20 ;

            /**
            * @param $test20
            */
            public function __construct($test20)
            {
                 $this->test20 = $test20;
            }
    }
