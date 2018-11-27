<?php namespace App\Events\Backend\Test20;

    use Illuminate\Queue\SerializesModels;
    /**
    * Class Test20Deleted.
    */

    class Test20Deleted
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
