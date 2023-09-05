@extends('dashboard.layout.main')
@section('content')
    <div class="row">
        <div class="col">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="Close"></button>
                </div>
            @endif
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="m-0 font-weight-bold text-dark fw-bold">Hi {{ auth()->user()->name }} !</h3>
                        </div>
                        <div class="col-12 my-2">
                            <a href="/dashboard/profile/{{ auth()->user()->username }}/edit" class="btn btn-warning"><i
                                    class="fa-solid fa-pen-to-square"></i> Edit Account</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <h3>{{ auth()->user()->name }}</h3>
                        <div class="row">
                            <!-- Pending Requests Card Example -->
                            <div class="col-xl-4 col-md-6 mb-4">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                    User ID</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ auth()->user()->id }}
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-key fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pending Requests Card Example -->
                            <div class="col-xl-4 col-md-6 mb-4">
                                <div class="card border-left-danger shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                    Email</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    {{ auth()->user()->email }}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-mail-bulk fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-4 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Full Name</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    {{ auth()->user()->name }}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-id-card fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-4 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    Username</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    {{ auth()->user()->username }}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-4 col-md-6 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Post By
                                                    User
                                                </div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                            {{ $blog_count }} Posts</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-blog fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pending Requests Card Example -->
                            <div class="col-xl-4 col-md-6 mb-4">
                                <div class="card border-left-secondary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                                    User Role</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    @if ($user->is_admin)
                                                        <p class="badge bg-success">Admin</p>
                                                    @else
                                                        <p class="badge bg-danger">Not Admin</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-shield fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
