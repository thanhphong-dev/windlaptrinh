<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Interfaces\UserRepositoryInferface;
use Exception;
use Flasher\Laravel\Http\Request as HttpRequest;
use Illuminate\Container\Attributes\Log;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Laravel\Ui\Presets\React;

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

    /**
     * Store Employee
     * 
     * @param \App\Http\Requests\StoreUserRequest
     * @return \Illuminate\Http\RedirectResponse
     * 
     * 
     * */
    public function store(StoreUserRequest $request): RedirectResponse
    {
        try {
            $data = $request->validated();

            if ($request->hasFile('avatar_url')) {
                $data['avatar_url'] = uploadImage($request->file('avatar_url'), '', 'employee/');
            }

            $this->userRepository->add($data);

            toastr()->success('view.toastr.users.add_success');

            return redirect()->back();
        } catch (Exception $e) {
            toastr()->error('error');
            return redirect()->back();
        }
    }
}
