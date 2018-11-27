<?php namespace App\Events\Backend\Test19;

    use Illuminate\Queue\SerializesModels;
    /**
    * Class Test19Deleted.
    */

    class Test19Deleted
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
