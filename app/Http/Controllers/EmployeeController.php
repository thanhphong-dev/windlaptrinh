<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Interfaces\UserRepositoryInferface;
use Exception;
use Illuminate\Container\Attributes\Log;
use Illuminate\Database\QueryException;
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
        $users = $this->userRepository->getAll();

        return view('admin.employee.list', compact('users'));
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

    public function store(StoreUserRequest $request)
    {
        try {

            $data = $request->validated();

            if ($data->hasFile('avatar_url')) {
                $data['avatar_url'] = uploadImage($data['avatar_url'], '', 'employee/');
            }

            $this->userRepository->add($data);

            toastr()->success('success');
            return redirect()->back();

        } catch (Exception $e) {

            toastr()->error('error');
        }
    }
}
