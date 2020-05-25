<?php
namespace App\Http\Controllers\Api;

use App\Models\Todo;
use App\Http\Requests\TodoRequest;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = Todo::all();
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
        try {
            $result = Todo::create($request->validated());
            $response = [
                'success'   => true,
                'error'     => null,
                'result'    => $result,
            ];
        } catch (ValidationException $e) {
            $response = [
                'success'   => false,
                'error'     => $e->getMessage(),
                'result'    => null,
            ];
        }

        return response()->json($response);
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
        try {
            $result = $todo->update($request->validated());
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
