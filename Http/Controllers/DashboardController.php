<?php

namespace Modules\Dashboard\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        // $client = new \GuzzleHttp\Client();
        // $endpoint ='http://www.arsyscaturangga.co.id:8080/api/tangerine-api/web//user/default/register';
        // $method = 'POST';
        // $options = [
        //     'headers' => [
        //         'verify' =>false,
        //     ],
        //     'form_params' => [
        //         'username'=>'bQ3LTEKvA6baiOWVQ7H4@gmail.com',
        //         'password'=>'bQ3LTEKvA6baiOWVQ7H4',
        //         'email'=>'bQ3LTEKvA6baiOWVQ7H4@gmail.com',
        //     ]
        // ];
        // $response = $client->request($method, $endpoint,$options);
        // echo $response->getStatusCode().'<br/>';
        // echo $response->getHeaderLine('content-type').'<br/>';
        // echo $response->getBody().'<br/>';
        return view('dashboard::index');
    }

    public function modules()
    {
        $modules = app('modules')->all();
        return view('dashboard::modules.index', compact('modules'));
    }
    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('dashboard::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('dashboard::show');
    }

    public function modulesDetails($name)
    {
        $module = [];
        foreach(app('modules')->find($name)->json()->getItems() as $attr =>$value)
        {
            $module[] = [
                $attr => $value
            ];
        }
        dump($module);
    }
    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('dashboard::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
