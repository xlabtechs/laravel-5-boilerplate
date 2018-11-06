<?php

    namespace App\Http\Controllers\Backend\Test;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use \Illuminate\Http\Response;
    use App\Http\Requests\Backend\Test\CreateTest;
    use App\Http\Requests\Backend\Test\UpdateTest;
    use App\Repositories\Backend\TestRepository;
    use Prettus\Repository\Criteria\RequestCriteria;
    //use XLabTechs\AdminListing\Facades\AdminListing;
    use App\Models\Test;
    

class TestController extends Controller
{
    /** @var testRepository */
    private $testRepository;


    public function __construct(TestRepository $testRepo)
    {
    $this->testRepository = $testRepo;
    }


    /**
    * Display a listing of the Test.
    *
    * @param  Request $request
    * @return Response | \Illuminate\View\View|Response
    */

    public function index(Request $request)
    {
        $this-> testRepository->pushCriteria(new RequestCriteria($request));
        $data=$this-> testRepository 
         ->paginate(25);
        

        return view('backend.tests.index')->with('tests', $data);
    }

    


    



    


    /**
    * Show the form for creating a new Test.
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function create()
    {
        
        
       

        return view('backend.tests.create' );
    }

    /**
    * Store a newly created Test in storage.
    *
    * @param CreateTestRequest $request
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function store(CreateTest $request)
    {
        $obj=$this-> testRepository->create($request->only( [ "name","description","is_deleted","radius",]));
        

        return redirect()->route('admin.test.index')->withFlashSuccess(__('alerts.frontend.test.saved'));
    }

    /**
    * Display the specified Test.
    *
    * @param Test $test
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    *
    */
    public function show(Test $test)
    {
        return view('backend.tests.show')->with('test', $test);
    }


    /**
    * Show the form for editing the specified Test.
    *
    * @param Test $test
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    *
    */
    public function edit(Test $test)
    {
        



        
         

                return view('backend.tests.edit'
        )->with('test', $test);
    }


    /**
    * Update the specified Test in storage.
    *
    * @param UpdateTestRequest $request
    *
    * @param Test $test
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    */
    public function update(UpdateTest  $request, Test $test)
    {
        $this->testRepository->update($test, $request->all());


       

    return redirect()->route('admin.test.index')->withFlashSuccess(__('alerts.frontend.test.updated'));

    }

    /**
    * Remove the specified Test from storage.
    *
    * @param Test $test
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    *
    */
    public function destroy(Test $test)
    {
        $this->testRepository->delete($test);
        return redirect()->back()->withFlashSuccess(__('alerts.frontend.test.deleted'));
    }

}