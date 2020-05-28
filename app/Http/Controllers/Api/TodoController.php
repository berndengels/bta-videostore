<?php
namespace App\Http\Controllers\Api;

use App\Exceptions\ApiValidationException;
use Exception;
use App\Models\Todo;
use App\Http\Requests\TodoRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class TodoController extends Controller
{
    protected $onlyResultKeys = ['id','title','done'];
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = Todo::all('id','title','done');
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param Todo $todo
     * @return Response
     */
    public function show(Todo $todo)
    {
        return response()->json($todo->toArray());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  TodoRequest $request
     * @return Response
     */
    public function store(TodoRequest $request)
    {
        if ($request->validator && $request->validator->fails()) {
            $response = [
                'success'   => false,
                'errors'    => $request->validator->errors(),
                'result'    => null,
            ];
            return response()->json($response)->setStatusCode(422);
        } else {
            $result = Todo::create($request->validated());
            $response = [
                'success'   => true,
                'errors'     => null,
                'result'    => $result->only($this->onlyResultKeys),
            ];
            return response()->json($response);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  TodoRequest  $request
     * @param Todo $todo
     * @return Response
     */
    public function update(TodoRequest $request, Todo $todo)
    {
        if ($request->validator && $request->validator->fails()) {
            $response = [
                'success'   => false,
                'errors'    => $request->validator->errors(),
                'result'    => null,
            ];
            return response()->json($response)->setStatusCode(422);
        } else {
            $todo->update($request->validated());
            $response = [
                'success'   => true,
                'errors'     => null,
                'result'    => $todo->only($this->onlyResultKeys),
            ];
            return response()->json($response);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Todo $todo
     * @return Response
     */
    public function destroy(Todo $todo)
    {
        try {
            $result = $todo->delete();
            $response = [
                'success'   => true,
                'error'     => null,
                'result'    => $result,
            ];
        } catch (Exception $e) {
            $response = [
                'success'   => false,
                'error'     => $e->getMessage(),
                'result'    => null,
            ];
        }

        return response()->json($response);
    }
}
