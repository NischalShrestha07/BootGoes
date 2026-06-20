@extends('layouts.app')
@section('content')
<div class="container-fluid px-3 px-lg-4 py-4">
    <div class="page-heading">
        <div class="page-heading-copy">
            <span class="page-icon"><i class="bi bi-person-plus" aria-hidden="true"></i></span>
            <div>
                <p class="eyebrow mb-1">Management</p>
                <h1 class="h3 mb-1">Add User</h1>
                <p class="text-muted mb-0">Create a new user account with role and team assignments.</p>
            </div>
        </div>
        <div class="heading-actions">
            <a class="btn btn-outline-secondary btn-sm" href="{{ route('users.index') }}">
                <i class="bi bi-arrow-left" aria-hidden="true"></i> Back to Users
            </a>
        </div>
    </div>

    <section class="row g-3">
        <!-- Form Section -->
        <div class="col-12 col-xl-8">
            <form action="{{route('register.user')}}" method="POST" class="panel needs-validation" novalidate>
                @csrf
                <div class="panel-header">
                    <div>
                        <h2 class="h5 mb-1 section-title">
                            <i class="bi bi-person-plus" aria-hidden="true"></i><span>User Information</span>
                        </h2>
                        <p class="text-muted mb-0">Create a user account with validated fields.</p>
                    </div>
                </div>

                <!-- Keeps your strict layout flow inside a row grid -->
                <div class="row g-3 px-3 pb-3">
                    <div class="col-md-6">
                        <label class="form-label" for="name">Full name</label>
                        <input class="form-control" id="name" name="name" type="text" placeholder="Full Name" required>
                        @error('name')
                        <span class="text-danger bg-red d-block mt-1 p-1 rounded small">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="email">Email</label>
                        <input class="form-control" placeholder="Email Address" id="email" name="email" type="email"
                            required>
                        @error('email')
                        <span class="text-danger bg-red d-block mt-1 p-1 rounded small">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="phone">Phone</label>
                        <input class="form-control" placeholder="Phone Number" name="phone" id="phone" type="tel"
                            required>
                        @error('phone')
                        <span class="text-danger bg-red d-block mt-1 p-1 rounded small">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="role">Role</label>
                        <select class="form-select" name="role" id="role" required>
                            <option value="">Choose role</option>
                            <option value="admin">Admin</option>
                            <option value="instructor">Instructor</option>
                            <option value="student">Student</option>
                        </select>
                        @error('role')
                        <span class="text-danger bg-red d-block mt-1 p-1 rounded small">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Fixed inputs to omit textareas rows rules -->
                    <div class="col-md-6">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Enter Password" required />
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="password_confirmation">Re-type Password</label>
                        <input type="password" class="form-control" name="password_confirmation"
                            id="password_confirmation" placeholder="Re-enter Password" required />
                    </div>

                    <div class="col-12 d-flex justify-content-end gap-2 mt-4">
                        <a class="btn btn-outline-secondary" href="{{ route('users.index') }}">Cancel</a>
                        <button class="btn btn-primary" type="submit">
                            <i class="bi bi-person-check" aria-hidden="true"></i> Create User
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Sidebar Checklist Section -->
        <div class="col-12 col-xl-4">
            <div class="panel h-100">
                <div class="p-3">
                    <h2 class="h5 mb-3 section-title">
                        <i class="bi bi-list-check" aria-hidden="true"></i><span>Access Checklist</span>
                    </h2>
                    <div class="activity-list">
                        <div class="activity-item">
                            <span class="activity-dot bg-success"></span>
                            <div>
                                <p class="mb-1 fw-semibold">Assign role</p>
                                <p class="text-muted small mb-0">Start with the least privileged role.</p>
                            </div>
                        </div>
                        <div class="activity-item">
                            <span class="activity-dot bg-primary"></span>
                            <div>
                                <p class="mb-1 fw-semibold">Add team</p>
                                <p class="text-muted small mb-0">Team ownership controls dashboards.</p>
                            </div>
                        </div>
                        <div class="activity-item">
                            <span class="activity-dot bg-warning"></span>
                            <div>
                                <p class="mb-1 fw-semibold">Send invite</p>
                                <p class="text-muted small mb-0">Users receive activation by email.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection