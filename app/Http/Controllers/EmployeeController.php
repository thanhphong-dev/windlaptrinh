<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Interfaces\UserRepositoryInferface;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmployeeController extends Controller
{
    private UserRepositoryInferface $userRepository;

    public function __construct(UserRepositoryInferface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index(Request $request)
    {
        // return response()->json([
        //     'data' => $this->userRepository->getAll()
        // ]);

        return view('admin.employee.list');
    }

    /**
     * Function create Employee
     *
     * @param Illuminate\View\View
     *
     * @author ThanhPhong <windlaptrinh@gmail.com>
     */
    public function create(Request $request): View
    {
        return view('admin.employee.create');
    }

    public function store(StoreUserRequest $request) {}
}
