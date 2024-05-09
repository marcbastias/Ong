@extends('adminlte::page')

@section('content')
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <div class="container-fluid">
            <div class="page-header min-height-300 border-radius-xl mt-4"
                style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
                <span class="mask bg-gradient-primary opacity-6"></span>
            </div>
            <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden mt-4">
                <div class="row gx-4">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            @if ($user->photo)
                                <img id="picture" src="{{ Storage::url($user->photo) }}" alt="Foto de perfil"
                                    class="img-fluid rounded-circle" style="width: 120px; height: 120px;">
                            @else
                                <img src="{{ asset('assets/images/default-profile-image.jpg') }}"
                                    alt="Foto de perfil por defecto" class="img-fluid rounded-circle"
                                    style="width: 120px; height: 120px;">
                            @endif
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">{{ $user['name'] }}</h5>
                            <p class="mb-0 font-weight-bold text-sm">{{ implode(' ,', $user->getRoleNames()->toArray()) }}
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                        <div class="nav-wrapper relative end-0">
                            <ul class="nav nav-pills nav-fill p-1 bg-transparent flex-col on-resize" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="javascript:;"
                                        role="tab" aria-selected="true">
                                        <span class="text-dark">📱</span>
                                        <span class="ms-1">App</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="javascript:;"
                                        role="tab" aria-selected="false">
                                        <span class="text-dark">💬</span>
                                        <span class="ms-1">Messages</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="javascript:;"
                                        role="tab" aria-selected="false">
                                        <span class="text-dark">⚙️</span>
                                        <span class="ms-1">Settings</span>
                                    </a>
                                </li>
                                <div class="moving-tab absolute nav-link"
                                    style="padding: 0px; transition: all 0.5s ease 0s; transform: translate3d(0px, 0px, 0px); width: 355px;">
                                    <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="javascript:;"
                                        role="tab" aria-selected="true">-</a>
                                </div>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12 col-xl-4">
                    <div class="card h-100">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-0">Platform Settings</h6>
                        </div>
                        <div class="card-body p-3">
                            <h6 class="text-uppercase text-body text-xs font-weight-bolder">Account</h6>
                            <ul class="list-group">
                                <li class="list-group-item border-0 px-0">
                                    <div class="form-check form-switch ps-0">
                                        <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault"
                                            checked="">
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                            for="flexSwitchCheckDefault">Email me when someone follows me</label>
                                    </div>
                                </li>
                                <!-- More list items for account settings -->
                            </ul>
                            <h6 class="text-uppercase text-body text-xs font-weight-bolder mt-4">Application</h6>
                            <ul class="list-group">
                                <li class="list-group-item border-0 px-0">
                                    <div class="form-check form-switch ps-0">
                                        <input class="form-check-input ms-auto" type="checkbox"
                                            id="flexSwitchCheckDefault3">
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                            for="flexSwitchCheckDefault3">New launches and projects</label>
                                    </div>
                                </li>
                                <!-- More list items for application settings -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4">
                    <div class="card h-100">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-md-8 d-flex align-items-center">
                                    <h6 class="mb-0">Profile Information</h6>
                                </div>
                                <div class="col-md-4 text-end">
                                    <a href="javascript:;">
                                        <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="" aria-hidden="true"
                                            data-bs-original-title="Edit Profile" aria-label="Edit Profile"></i><span
                                            class="sr-only">Edit Profile</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <p class="text-sm">
                                Hi, I’m Alec Thompson, Decisions: If you can’t decide, the answer is no. If two equally
                                difficult paths, choose the one more painful in the short term (pain avoidance is creating
                                an illusion of equality).
                            </p>
                            <hr class="horizontal gray-light my-4">
                            <ul class="list-group">
                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full
                                        Name:</strong> &nbsp; Alec M. Thompson</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong
                                        class="text-dark">Mobile:</strong> &nbsp; (44) 123 1234 123</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong
                                        class="text-dark">Email:</strong> &nbsp; alecthompson@mail.com</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong
                                        class="text-dark">Location:</strong> &nbsp; USA</li>
                                <li class="list-group-item border-0 ps-0 pb-0">
                                    <strong class="text-dark text-sm">Social:</strong> &nbsp;
                                    <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                        <i class="fab fa-facebook fa-lg" aria-hidden="true"></i>
                                    </a>
                                    <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                        <i class="fab fa-twitter fa-lg" aria-hidden="true"></i>
                                    </a>
                                    <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                        <i class="fab fa-instagram fa-lg" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-xl-4">
                    <div class="card h-100">
                        <!-- Conversations Card Content -->
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer pt-3  ">
            <div class="container-fluid">
                <!-- Footer content goes here -->
            </div>
        </footer>
    </div>
@endsection
