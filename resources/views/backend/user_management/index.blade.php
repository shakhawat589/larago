@extends('backend.master')

@section('title')
    User Management | {{ env('APP_NAME') }}
@endsection

@push('page_css')
  <link href="{{asset('assets/vendors/datatables/dataTables.bootstrap.min.css')}}" rel="stylesheet">
@endpush
@push('css')

@endpush

@section('content')
  <div class="main">
      <div class="page-header">
          <h4 class="page-title">Users List</h4>
          <div class="breadcrumb">
              <span class="me-1 text-gray"><i class="feather icon-home"></i></span>
              <div class="breadcrumb-item"><a href="index-2.html"> Home </a></div>
              <div class="breadcrumb-item"><a href="javascript:void(0)"> pages </a></div>
              <div class="breadcrumb-item"><a href="v-user-list.html"> Users List </a></div>
          </div>
      </div>
      <div class="card">
          <div class="card-body">
              <div>
                  <table class="table table-hover user-list-table">
                      <thead>
                          <tr>
                              <th>
                                  <div class="form-check mb-0">
                                      <input type="checkbox" class="form-check-input">
                                  </div>
                              </th>
                              <th>Name</th>
                              <th>Phone</th>
                              <th>Role</th>
                              <th>Status</th>
                              <th>Last Online</th>
                              <th></th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>
                                  <div class="form-check mb-0">
                                      <input type="checkbox" class="form-check-input">
                                  </div>
                              </td>
                              <td>
                                  <div class="d-flex align-items-center">
                                      <div class="avatar avatar-circle avatar-image" style="width: 38px; height: 38px;">
                                          <img src="assets/images/avatars/thumb-1.jpg" alt="">
                                      </div>
                                      <div class="ms-2">
                                          <div class="text-dark fw-bold">Julio Baker</div>
                                          <div class="text-muted">julio.baker@example.com</div>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <span>+919-889-6370</span>
                              </td>
                              <td>
                                  <span>Admin</span>
                              </td>
                              <td>
                                  <div class="d-flex align-items-center text-success">
                                      <span class="badge-dot me-2 bg-success"></span>
                                      <span class="text-capitalize">active</span>
                                  </div>
                              </td>
                              <td>
                                  <span>06/03/2020</span>
                              </td>
                              <td class="text-end">
                                  <div class="dropdown">
                                      <a href="#" class="px-2" data-bs-toggle="dropdown">
                                          <i class="feather icon-more-vertical"></i>
                                      </a>
                                      <ul class="dropdown-menu dropdown-menu-end">
                                          <li>
                                              <a href="javascript:void(0)" class="dropdown-item">
                                                  <div class="d-flex align-items-center">
                                                      <i class="feather icon-user-plus"></i>
                                                      <span class="ms-2">Add to group</span>
                                                  </div>
                                              </a>
                                          </li>
                                          <li>
                                              <a href="javascript:void(0)" class="dropdown-item">
                                                  <div class="d-flex align-items-center">
                                                      <i class="feather icon-trash-2"></i>
                                                      <span class="ms-2">Delete User</span>
                                                  </div>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <div class="form-check mb-0">
                                      <input type="checkbox" class="form-check-input">
                                  </div>
                              </td>
                              <td>
                                  <div class="d-flex align-items-center">
                                      <div class="avatar avatar-circle avatar-image" style="width: 38px; height: 38px;">
                                          <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                      </div>
                                      <div class="ms-2">
                                          <div class="text-dark fw-bold">Robert Mitchell</div>
                                          <div class="text-muted">robert.mitchell@example.com</div>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <span>+202-739-6557</span>
                              </td>
                              <td>
                                  <span>User</span>
                              </td>
                              <td>
                                  <div class="d-flex align-items-center text-success">
                                      <span class="badge-dot me-2 bg-success"></span>
                                      <span class="text-capitalize">active</span>
                                  </div>
                              </td>
                              <td>
                                  <span>23/02/2020</span>
                              </td>
                              <td class="text-end">
                                  <div class="dropdown">
                                      <a href="#" class="px-2" data-bs-toggle="dropdown">
                                          <i class="feather icon-more-vertical"></i>
                                      </a>
                                      <ul class="dropdown-menu dropdown-menu-end">
                                          <li>
                                              <a href="javascript:void(0)" class="dropdown-item">
                                                  <div class="d-flex align-items-center">
                                                      <i class="feather icon-user-plus"></i>
                                                      <span class="ms-2">Add to group</span>
                                                  </div>
                                              </a>
                                          </li>
                                          <li>
                                              <a href="javascript:void(0)" class="dropdown-item">
                                                  <div class="d-flex align-items-center">
                                                      <i class="feather icon-trash-2"></i>
                                                      <span class="ms-2">Delete User</span>
                                                  </div>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <div class="form-check mb-0">
                                      <input type="checkbox" class="form-check-input">
                                  </div>
                              </td>
                              <td>
                                  <div class="d-flex align-items-center">
                                      <div class="avatar avatar-circle avatar-image" style="width: 38px; height: 38px;">
                                          <img src="assets/images/avatars/thumb-3.jpg" alt="">
                                      </div>
                                      <div class="ms-2">
                                          <div class="text-dark fw-bold">David Powell</div>
                                          <div class="text-muted">david.powell@example.com</div>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <span>+541-273-9057</span>
                              </td>
                              <td>
                                  <span>User</span>
                              </td>
                              <td>
                                  <div class="d-flex align-items-center text-danger">
                                      <span class="badge-dot me-2 bg-danger"></span>
                                      <span class="text-capitalize">Suspended</span>
                                  </div>
                              </td>
                              <td>
                                  <span>23/02/2020</span>
                              </td>
                              <td class="text-end">
                                  <div class="dropdown">
                                      <a href="#" class="px-2" data-bs-toggle="dropdown">
                                          <i class="feather icon-more-vertical"></i>
                                      </a>
                                      <ul class="dropdown-menu dropdown-menu-end">
                                          <li>
                                              <a href="javascript:void(0)" class="dropdown-item">
                                                  <div class="d-flex align-items-center">
                                                      <i class="feather icon-user-plus"></i>
                                                      <span class="ms-2">Add to group</span>
                                                  </div>
                                              </a>
                                          </li>
                                          <li>
                                              <a href="javascript:void(0)" class="dropdown-item">
                                                  <div class="d-flex align-items-center">
                                                      <i class="feather icon-trash-2"></i>
                                                      <span class="ms-2">Delete User</span>
                                                  </div>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <div class="form-check mb-0">
                                      <input type="checkbox" class="form-check-input">
                                  </div>
                              </td>
                              <td>
                                  <div class="d-flex align-items-center">
                                      <div class="avatar avatar-circle avatar-image" style="width: 38px; height: 38px;">
                                          <img src="assets/images/avatars/thumb-4.jpg" alt="">
                                      </div>
                                      <div class="ms-2">
                                          <div class="text-dark fw-bold">Christina Morrison</div>
                                          <div class="text-muted">christina.morrison@example.com</div>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <span>+920-706-2244</span>
                              </td>
                              <td>
                                  <span>Admin</span>
                              </td>
                              <td>
                                  <div class="d-flex align-items-center text-success">
                                      <span class="badge-dot me-2 bg-success"></span>
                                      <span class="text-capitalize">active</span>
                                  </div>
                              </td>
                              <td>
                                  <span>16/01/2020</span>
                              </td>
                              <td class="text-end">
                                  <div class="dropdown">
                                      <a href="#" class="px-2" data-bs-toggle="dropdown">
                                          <i class="feather icon-more-vertical"></i>
                                      </a>
                                      <ul class="dropdown-menu dropdown-menu-end">
                                          <li>
                                              <a href="javascript:void(0)" class="dropdown-item">
                                                  <div class="d-flex align-items-center">
                                                      <i class="feather icon-user-plus"></i>
                                                      <span class="ms-2">Add to group</span>
                                                  </div>
                                              </a>
                                          </li>
                                          <li>
                                              <a href="javascript:void(0)" class="dropdown-item">
                                                  <div class="d-flex align-items-center">
                                                      <i class="feather icon-trash-2"></i>
                                                      <span class="ms-2">Delete User</span>
                                                  </div>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <div class="form-check mb-0">
                                      <input type="checkbox" class="form-check-input">
                                  </div>
                              </td>
                              <td>
                                  <div class="d-flex align-items-center">
                                      <div class="avatar avatar-circle avatar-image" style="width: 38px; height: 38px;">
                                          <img src="assets/images/avatars/thumb-5.jpg" alt="">
                                      </div>
                                      <div class="ms-2">
                                          <div class="text-dark fw-bold">Calvin Reid</div>
                                          <div class="text-muted">calvin.reid@example.com</div>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <span>+267-270-0677</span>
                              </td>
                              <td>
                                  <span>User</span>
                              </td>
                              <td>
                                  <div class="d-flex align-items-center text-success">
                                      <span class="badge-dot me-2 bg-success"></span>
                                      <span class="text-capitalize">active</span>
                                  </div>
                              </td>
                              <td>
                                  <span>23/02/2020</span>
                              </td>
                              <td class="text-end">
                                  <div class="dropdown">
                                      <a href="#" class="px-2" data-bs-toggle="dropdown">
                                          <i class="feather icon-more-vertical"></i>
                                      </a>
                                      <ul class="dropdown-menu dropdown-menu-end">
                                          <li>
                                              <a href="javascript:void(0)" class="dropdown-item">
                                                  <div class="d-flex align-items-center">
                                                      <i class="feather icon-user-plus"></i>
                                                      <span class="ms-2">Add to group</span>
                                                  </div>
                                              </a>
                                          </li>
                                          <li>
                                              <a href="javascript:void(0)" class="dropdown-item">
                                                  <div class="d-flex align-items-center">
                                                      <i class="feather icon-trash-2"></i>
                                                      <span class="ms-2">Delete User</span>
                                                  </div>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <div class="form-check mb-0">
                                      <input type="checkbox" class="form-check-input">
                                  </div>
                              </td>
                              <td>
                                  <div class="d-flex align-items-center">
                                      <div class="avatar avatar-circle avatar-image" style="width: 38px; height: 38px;">
                                          <img src="assets/images/avatars/thumb-6.jpg" alt="">
                                      </div>
                                      <div class="ms-2">
                                          <div class="text-dark fw-bold">Devon Hughes</div>
                                          <div class="text-muted">devon.hughes@example.com</div>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <span>+12-123-1234</span>
                              </td>
                              <td>
                                  <span>User</span>
                              </td>
                              <td>
                                  <div class="d-flex align-items-center text-success">
                                      <span class="badge-dot me-2 bg-success"></span>
                                      <span class="text-capitalize">active</span>
                                  </div>
                              </td>
                              <td>
                                  <span>02/03/2020</span>
                              </td>
                              <td class="text-end">
                                  <div class="dropdown">
                                      <a href="#" class="px-2" data-bs-toggle="dropdown">
                                          <i class="feather icon-more-vertical"></i>
                                      </a>
                                      <ul class="dropdown-menu dropdown-menu-end">
                                          <li>
                                              <a href="javascript:void(0)" class="dropdown-item">
                                                  <div class="d-flex align-items-center">
                                                      <i class="feather icon-user-plus"></i>
                                                      <span class="ms-2">Add to group</span>
                                                  </div>
                                              </a>
                                          </li>
                                          <li>
                                              <a href="javascript:void(0)" class="dropdown-item">
                                                  <div class="d-flex align-items-center">
                                                      <i class="feather icon-trash-2"></i>
                                                      <span class="ms-2">Delete User</span>
                                                  </div>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <div class="form-check mb-0">
                                      <input type="checkbox" class="form-check-input">
                                  </div>
                              </td>
                              <td>
                                  <div class="d-flex align-items-center">
                                      <div class="avatar avatar-circle avatar-image" style="width: 38px; height: 38px;">
                                          <img src="assets/images/avatars/thumb-7.jpg" alt="">
                                      </div>
                                      <div class="ms-2">
                                          <div class="text-dark fw-bold">Tom Lucas</div>
                                          <div class="text-muted">tom.lucas@example.com</div>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <span>+716-879-2482</span>
                              </td>
                              <td>
                                  <span>User</span>
                              </td>
                              <td>
                                  <div class="d-flex align-items-center text-success">
                                      <span class="badge-dot me-2 bg-success"></span>
                                      <span class="text-capitalize">active</span>
                                  </div>
                              </td>
                              <td>
                                  <span>27/02/2020</span>
                              </td>
                              <td class="text-end">
                                  <div class="dropdown">
                                      <a href="#" class="px-2" data-bs-toggle="dropdown">
                                          <i class="feather icon-more-vertical"></i>
                                      </a>
                                      <ul class="dropdown-menu dropdown-menu-end">
                                          <li>
                                              <a href="javascript:void(0)" class="dropdown-item">
                                                  <div class="d-flex align-items-center">
                                                      <i class="feather icon-user-plus"></i>
                                                      <span class="ms-2">Add to group</span>
                                                  </div>
                                              </a>
                                          </li>
                                          <li>
                                              <a href="javascript:void(0)" class="dropdown-item">
                                                  <div class="d-flex align-items-center">
                                                      <i class="feather icon-trash-2"></i>
                                                      <span class="ms-2">Delete User</span>
                                                  </div>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <div class="form-check mb-0">
                                      <input type="checkbox" class="form-check-input">
                                  </div>
                              </td>
                              <td>
                                  <div class="d-flex align-items-center">
                                      <div class="avatar avatar-circle avatar-image" style="width: 38px; height: 38px;">
                                          <img src="assets/images/avatars/thumb-8.jpg" alt="">
                                      </div>
                                      <div class="ms-2">
                                          <div class="text-dark fw-bold">Wade Jenkins</div>
                                          <div class="text-muted">wade.jenkins@example.com</div>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <span>+12-123-1234</span>
                              </td>
                              <td>
                                  <span>User</span>
                              </td>
                              <td>
                                  <div class="d-flex align-items-center text-danger">
                                      <span class="badge-dot me-2 bg-danger"></span>
                                      <span class="text-capitalize">Suspended</span>
                                  </div>
                              </td>
                              <td>
                                  <span>17/01/2020</span>
                              </td>
                              <td class="text-end">
                                  <div class="dropdown">
                                      <a href="#" class="px-2" data-bs-toggle="dropdown">
                                          <i class="feather icon-more-vertical"></i>
                                      </a>
                                      <ul class="dropdown-menu dropdown-menu-end">
                                          <li>
                                              <a href="javascript:void(0)" class="dropdown-item">
                                                  <div class="d-flex align-items-center">
                                                      <i class="feather icon-user-plus"></i>
                                                      <span class="ms-2">Add to group</span>
                                                  </div>
                                              </a>
                                          </li>
                                          <li>
                                              <a href="javascript:void(0)" class="dropdown-item">
                                                  <div class="d-flex align-items-center">
                                                      <i class="feather icon-trash-2"></i>
                                                      <span class="ms-2">Delete User</span>
                                                  </div>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <div class="form-check mb-0">
                                      <input type="checkbox" class="form-check-input">
                                  </div>
                              </td>
                              <td>
                                  <div class="d-flex align-items-center">
                                      <div class="avatar avatar-circle avatar-image" style="width: 38px; height: 38px;">
                                          <img src="assets/images/avatars/thumb-9.jpg" alt="">
                                      </div>
                                      <div class="ms-2">
                                          <div class="text-dark fw-bold">Kathy Barnes</div>
                                          <div class="text-muted">kathy.barnes@example.com</div>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <span>+717-776-7425</span>
                              </td>
                              <td>
                                  <span>User</span>
                              </td>
                              <td>
                                  <div class="d-flex align-items-center text-danger">
                                      <span class="badge-dot me-2 bg-danger"></span>
                                      <span class="text-capitalize">Suspended</span>
                                  </div>
                              </td>
                              <td>
                                  <span>18/03/2020</span>
                              </td>
                              <td class="text-end">
                                  <div class="dropdown">
                                      <a href="#" class="px-2" data-bs-toggle="dropdown">
                                          <i class="feather icon-more-vertical"></i>
                                      </a>
                                      <ul class="dropdown-menu dropdown-menu-end">
                                          <li>
                                              <a href="javascript:void(0)" class="dropdown-item">
                                                  <div class="d-flex align-items-center">
                                                      <i class="feather icon-user-plus"></i>
                                                      <span class="ms-2">Add to group</span>
                                                  </div>
                                              </a>
                                          </li>
                                          <li>
                                              <a href="javascript:void(0)" class="dropdown-item">
                                                  <div class="d-flex align-items-center">
                                                      <i class="feather icon-trash-2"></i>
                                                      <span class="ms-2">Delete User</span>
                                                  </div>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <div class="form-check mb-0">
                                      <input type="checkbox" class="form-check-input">
                                  </div>
                              </td>
                              <td>
                                  <div class="d-flex align-items-center">
                                      <div class="avatar avatar-circle avatar-image" style="width: 38px; height: 38px;">
                                          <img src="assets/images/avatars/thumb-10.jpg" alt="">
                                      </div>
                                      <div class="ms-2">
                                          <div class="text-dark fw-bold">Bradley Rhodes</div>
                                          <div class="text-muted">bradley.rhodes@example.com</div>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <span>+706-539-7002</span>
                              </td>
                              <td>
                                  <span>User</span>
                              </td>
                              <td>
                                  <div class="d-flex align-items-center text-success">
                                      <span class="badge-dot me-2 bg-success"></span>
                                      <span class="text-capitalize">active</span>
                                  </div>
                              </td>
                              <td>
                                  <span>06/03/2020</span>
                              </td>
                              <td class="text-end">
                                  <div class="dropdown">
                                      <a href="#" class="px-2" data-bs-toggle="dropdown">
                                          <i class="feather icon-more-vertical"></i>
                                      </a>
                                      <ul class="dropdown-menu dropdown-menu-end">
                                          <li>
                                              <a href="javascript:void(0)" class="dropdown-item">
                                                  <div class="d-flex align-items-center">
                                                      <i class="feather icon-user-plus"></i>
                                                      <span class="ms-2">Add to group</span>
                                                  </div>
                                              </a>
                                          </li>
                                          <li>
                                              <a href="javascript:void(0)" class="dropdown-item">
                                                  <div class="d-flex align-items-center">
                                                      <i class="feather icon-trash-2"></i>
                                                      <span class="ms-2">Delete User</span>
                                                  </div>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <div class="form-check mb-0">
                                      <input type="checkbox" class="form-check-input">
                                  </div>
                              </td>
                              <td>
                                  <div class="d-flex align-items-center">
                                      <div class="avatar avatar-circle avatar-image" style="width: 38px; height: 38px;">
                                          <img src="assets/images/avatars/thumb-11.jpg" alt="">
                                      </div>
                                      <div class="ms-2">
                                          <div class="text-dark fw-bold">Howard Webb</div>
                                          <div class="text-muted">howard.webb@example.com</div>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <span>+270-230-9544</span>
                              </td>
                              <td>
                                  <span>User</span>
                              </td>
                              <td>
                                  <div class="d-flex align-items-center text-success">
                                      <span class="badge-dot me-2 bg-success"></span>
                                      <span class="text-capitalize">active</span>
                                  </div>
                              </td>
                              <td>
                                  <span>19/03/2020</span>
                              </td>
                              <td class="text-end">
                                  <div class="dropdown">
                                      <a href="#" class="px-2" data-bs-toggle="dropdown">
                                          <i class="feather icon-more-vertical"></i>
                                      </a>
                                      <ul class="dropdown-menu dropdown-menu-end">
                                          <li>
                                              <a href="javascript:void(0)" class="dropdown-item">
                                                  <div class="d-flex align-items-center">
                                                      <i class="feather icon-user-plus"></i>
                                                      <span class="ms-2">Add to group</span>
                                                  </div>
                                              </a>
                                          </li>
                                          <li>
                                              <a href="javascript:void(0)" class="dropdown-item">
                                                  <div class="d-flex align-items-center">
                                                      <i class="feather icon-trash-2"></i>
                                                      <span class="ms-2">Delete User</span>
                                                  </div>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <div class="form-check mb-0">
                                      <input type="checkbox" class="form-check-input">
                                  </div>
                              </td>
                              <td>
                                  <div class="d-flex align-items-center">
                                      <div class="avatar avatar-circle avatar-image" style="width: 38px; height: 38px;">
                                          <img src="assets/images/avatars/thumb-12.jpg" alt="">
                                      </div>
                                      <div class="ms-2">
                                          <div class="text-dark fw-bold">Stacy Larson</div>
                                          <div class="text-muted">stacy.larson@example.com</div>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <span>+308-379-5975</span>
                              </td>
                              <td>
                                  <span>User</span>
                              </td>
                              <td>
                                  <div class="d-flex align-items-center text-danger">
                                      <span class="badge-dot me-2 bg-danger"></span>
                                      <span class="text-capitalize">suspended</span>
                                  </div>
                              </td>
                              <td>
                                  <span>20/11/2019</span>
                              </td>
                              <td class="text-end">
                                  <div class="dropdown">
                                      <a href="#" class="px-2" data-bs-toggle="dropdown">
                                          <i class="feather icon-more-vertical"></i>
                                      </a>
                                      <ul class="dropdown-menu dropdown-menu-end">
                                          <li>
                                              <a href="javascript:void(0)" class="dropdown-item">
                                                  <div class="d-flex align-items-center">
                                                      <i class="feather icon-user-plus"></i>
                                                      <span class="ms-2">Add to group</span>
                                                  </div>
                                              </a>
                                          </li>
                                          <li>
                                              <a href="javascript:void(0)" class="dropdown-item">
                                                  <div class="d-flex align-items-center">
                                                      <i class="feather icon-trash-2"></i>
                                                      <span class="ms-2">Delete User</span>
                                                  </div>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <div class="form-check mb-0">
                                      <input type="checkbox" class="form-check-input">
                                  </div>
                              </td>
                              <td>
                                  <div class="d-flex align-items-center">
                                      <div class="avatar avatar-circle avatar-image" style="width: 38px; height: 38px;">
                                          <img src="assets/images/avatars/thumb-13.jpg" alt="">
                                      </div>
                                      <div class="ms-2">
                                          <div class="text-dark fw-bold">Lisa Smith</div>
                                          <div class="text-muted">lisa.smith@example.com</div>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <span>+917-502-3050</span>
                              </td>
                              <td>
                                  <span>User</span>
                              </td>
                              <td>
                                  <div class="d-flex align-items-center text-success">
                                      <span class="badge-dot me-2 bg-success"></span>
                                      <span class="text-capitalize">active</span>
                                  </div>
                              </td>
                              <td>
                                  <span>12/04/2020</span>
                              </td>
                              <td class="text-end">
                                  <div class="dropdown">
                                      <a href="#" class="px-2" data-bs-toggle="dropdown">
                                          <i class="feather icon-more-vertical"></i>
                                      </a>
                                      <ul class="dropdown-menu dropdown-menu-end">
                                          <li>
                                              <a href="javascript:void(0)" class="dropdown-item">
                                                  <div class="d-flex align-items-center">
                                                      <i class="feather icon-user-plus"></i>
                                                      <span class="ms-2">Add to group</span>
                                                  </div>
                                              </a>
                                          </li>
                                          <li>
                                              <a href="javascript:void(0)" class="dropdown-item">
                                                  <div class="d-flex align-items-center">
                                                      <i class="feather icon-trash-2"></i>
                                                      <span class="ms-2">Delete User</span>
                                                  </div>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <div class="form-check mb-0">
                                      <input type="checkbox" class="form-check-input">
                                  </div>
                              </td>
                              <td>
                                  <div class="d-flex align-items-center">
                                      <div class="avatar avatar-circle avatar-image" style="width: 38px; height: 38px;">
                                          <img src="assets/images/avatars/thumb-14.jpg" alt="">
                                      </div>
                                      <div class="ms-2">
                                          <div class="text-dark fw-bold">Regina Roberts</div>
                                          <div class="text-muted">regina.roberts@example.com</div>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <span>+304-556-3206</span>
                              </td>
                              <td>
                                  <span>User</span>
                              </td>
                              <td>
                                  <div class="d-flex align-items-center text-success">
                                      <span class="badge-dot me-2 bg-success"></span>
                                      <span class="text-capitalize">active</span>
                                  </div>
                              </td>
                              <td>
                                  <span>01/03/2020</span>
                              </td>
                              <td class="text-end">
                                  <div class="dropdown">
                                      <a href="#" class="px-2" data-bs-toggle="dropdown">
                                          <i class="feather icon-more-vertical"></i>
                                      </a>
                                      <ul class="dropdown-menu dropdown-menu-end">
                                          <li>
                                              <a href="javascript:void(0)" class="dropdown-item">
                                                  <div class="d-flex align-items-center">
                                                      <i class="feather icon-user-plus"></i>
                                                      <span class="ms-2">Add to group</span>
                                                  </div>
                                              </a>
                                          </li>
                                          <li>
                                              <a href="javascript:void(0)" class="dropdown-item">
                                                  <div class="d-flex align-items-center">
                                                      <i class="feather icon-trash-2"></i>
                                                      <span class="ms-2">Delete User</span>
                                                  </div>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <div class="form-check mb-0">
                                      <input type="checkbox" class="form-check-input">
                                  </div>
                              </td>
                              <td>
                                  <div class="d-flex align-items-center">
                                      <div class="avatar avatar-circle avatar-image" style="width: 38px; height: 38px;">
                                          <img src="assets/images/avatars/thumb-15.jpg" alt="">
                                      </div>
                                      <div class="ms-2">
                                          <div class="text-dark fw-bold">Kaylee Hicks</div>
                                          <div class="text-muted">kaylee.hicks@example.com</div>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <span>+205-423-8234</span>
                              </td>
                              <td>
                                  <span>User</span>
                              </td>
                              <td>
                                  <div class="d-flex align-items-center text-success">
                                      <span class="badge-dot me-2 bg-success"></span>
                                      <span class="text-capitalize">active</span>
                                  </div>
                              </td>
                              <td>
                                  <span>07/04/2020</span>
                              </td>
                              <td class="text-end">
                                  <div class="dropdown">
                                      <a href="#" class="px-2" data-bs-toggle="dropdown">
                                          <i class="feather icon-more-vertical"></i>
                                      </a>
                                      <ul class="dropdown-menu dropdown-menu-end">
                                          <li>
                                              <a href="javascript:void(0)" class="dropdown-item">
                                                  <div class="d-flex align-items-center">
                                                      <i class="feather icon-user-plus"></i>
                                                      <span class="ms-2">Add to group</span>
                                                  </div>
                                              </a>
                                          </li>
                                          <li>
                                              <a href="javascript:void(0)" class="dropdown-item">
                                                  <div class="d-flex align-items-center">
                                                      <i class="feather icon-trash-2"></i>
                                                      <span class="ms-2">Delete User</span>
                                                  </div>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
@endsection

@push('page_js')
    <script src="{{asset('assets/vendors/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/vendors/datatables/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/pages/user-list.js')}}"></script> 
@endpush

@push('js')
@endpush
