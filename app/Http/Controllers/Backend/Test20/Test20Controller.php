<?php

    namespace App\Http\Controllers\Backend\Test20;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use \Illuminate\Http\Response;
    use App\Http\Requests\Backend\Test20\CreateTest20;
    use App\Http\Requests\Backend\Test20\UpdateTest20;
    use App\Repositories\Backend\Test20Repository;
    use App\Events\Backend\Test20\Test20Created;
    use App\Events\Backend\Test20\Test20Updated;
    use App\Events\Backend\Test20\Test20Deleted;
    use Prettus\Repository\Criteria\RequestCriteria;
    //use XLabTechs\AdminListing\Facades\AdminListing;
    use App\Models\Test20;
    

class Test20Controller extends Controller
{
    /** @var test20Repository */
    private $test20Repository;


    public function __construct(Test20Repository $test20Repo)
    {
    $this->test20Repository = $test20Repo;
    }


    /**
    * Display a listing of the Test20.
    *
    * @param  Request $request
    * @return Response | \Illuminate\View\View|Response
    */

    public function index(Request $request)
    {
        $this-> test20Repository->pushCriteria(new RequestCriteria($request));
        $data=$this-> test20Repository 
         ->paginate(25);
        

        return view('backend.test20s.index')->with('test20s', $data);
    }

    


    


    /**
    * Show the form for creating a new Test20.
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function create()
    {
        
        
       

        return view('backend.test20s.create' );
    }

    /**
    * Store a newly created Test20 in storage.
    *
    * @param CreateTest20Request $request
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function store(CreateTest20 $request)
    {
        $obj=$this-> test20Repository->create($request->only( [ "name","status","zipcode",]));
        
      event(new Test20Created($obj));
      return redirect()->route('admin.test20.index')->withFlashSuccess(__('alerts.frontend.test20.saved'));
    }

    /**
    * Display the specified Test20.
    *
    * @param Test20 $test20
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    *
    */
    public function show(Test20 $test20)
    {   

        return view('backend.test20s.show' )->with('test20', $test20);
    }


    /**
    * Show the form for editing the specified Test20.
    *
    * @param Test20 $test20
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    *
    */
    public function edit(Test20 $test20)
    {
        



         
         

                return view('backend.test20s.edit'
        )->with('test20', $test20);
    }


    /**
    * Update the specified Test20 in storage.
    *
    * @param UpdateTest20Request $request
    *
    * @param Test20 $test20
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    */
    public function update(UpdateTest20  $request, Test20 $test20)
    {
        $obj=$this->test20Repository->update($test20, $request->all());


       
    event(new Test20Updated($obj));
    return redirect()->route('admin.test20.index')->withFlashSuccess(__('alerts.frontend.test20.updated'));

    }

    /**
    * Remove the specified Test20 from storage.
    *
    * @param Test20 $test20
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    *
    */
    public function destroy(Test20 $test20)
    {
        $obj=$this->test20Repository->delete($test20);
        event(new Test20Deleted($obj));
        return redirect()->back()->withFlashSuccess(__('alerts.frontend.test20.deleted'));
    }

}