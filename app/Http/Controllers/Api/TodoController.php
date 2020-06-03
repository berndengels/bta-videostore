<?php
namespace App\Http\Controllers\Api;

use Exception;
use App\Models\Todo;
use Illuminate\Http\Response;
use App\Http\Requests\TodoRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\TodoResource;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = Todo::all('id','title','done');
        $data = TodoResource::collection($data);
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
        $data = new TodoResource($todo);
        return response()->json($data);
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
        } else {
            $result = Todo::create($request->validated());
            $response = [
                'success'   => true,
                'errors'    => null,
                'result'    => new TodoResource($result),
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
        if ($request->validator && $request->validator->fails()) {
            $response = [
                'success'   => false,
                'errors'    => $request->validator->errors(),
                'result'    => null,
            ];
        } else {
            $todo->update($request->validated());
            $response = [
                'success'   => true,
                'errors'    => null,
                'result'    => new TodoResource($todo),
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
                'errors'     => null,
                'result'    => $result,
            ];
        } catch (Exception $e) {
            $response = [
                'success'   => false,
                'errors'    => [$e->getMessage()],
                'result'    => null,
            ];
        }

        return response()->json($response);
    }
}
