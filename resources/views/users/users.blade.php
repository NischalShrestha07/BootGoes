@extends('layouts.app')
@section('content')
<div class="container-fluid px-3 px-lg-4 py-4">
    <div class="page-heading">
        <div class="page-heading-copy">
            <span class="page-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
            <div>
                <p class="eyebrow mb-1">Management</p>
                <h1 class="h3 mb-1">Users</h1>
                <p class="text-muted mb-0">Review accounts, roles, account status, and team ownership.</p>
            </div>
        </div>
        <div class="heading-actions"><a class="btn btn-primary btn-sm"
                href="{{route('users.create')}}"><i class="bi bi-person-plus" aria-hidden="true"></i> Add User</a></div>
    </div>

    <section class="row g-3 mt-1" aria-label="User summary">
        <div class="col-12 col-sm-6 col-xl-3">
            <article class="metric-card metric-primary">
                <div class="metric-top">
                    <span class="metric-label">Total Users</span>
                    <span class="metric-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">8,742</div>
                <div class="metric-meta">
                    <span class="text-success">+5.1%</span>
                    <span>this month</span>
                </div>
            </article>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <article class="metric-card metric-success">
                <div class="metric-top">
                    <span class="metric-label">Active</span>
                    <span class="metric-icon"><i class="bi bi-check2-circle" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">7,980</div>
                <div class="metric-meta">
                    <span class="text-success">91%</span>
                    <span>healthy accounts</span>
                </div>
            </article>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <article class="metric-card metric-warning">
                <div class="metric-top">
                    <span class="metric-label">Pending</span>
                    <span class="metric-icon"><i class="bi bi-hourglass-split" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">184</div>
                <div class="metric-meta">
                    <span class="text-warning">12</span>
                    <span>need approval</span>
                </div>
            </article>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <article class="metric-card metric-danger">
                <div class="metric-top">
                    <span class="metric-label">Suspended</span>
                    <span class="metric-icon"><i class="bi bi-slash-circle" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">38</div>
                <div class="metric-meta">
                    <span class="text-danger">4</span>
                    <span>flagged today</span>
                </div>
            </article>
        </div>
    </section>

    <section class="panel mt-3">
        <div class="panel-header">
            <div>
                <h2 class="h5 mb-1 section-title"><i class="bi bi-table" aria-hidden="true"></i><span>User List</span>
                </h2>
                <p class="text-muted mb-0">Search, review, and manage team member accounts.</p>
            </div>
            <div class="d-flex flex-wrap gap-2">
                <a class="btn btn-primary btn-sm" href="{{route('users.create')}}"><i class="bi bi-person-plus"
                        aria-hidden="true"></i> Add User</a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table align-middle mb-0" id="usersTable" data-searchable-table>
                <thead>
                    <tr>
                        <th scope="col">User</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                        <th scope="col">Joined</th>
                        <th scope="col" class="text-end">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($users as $item)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <img class="avatar-img avatar-sm" src="{{asset('assets/images/avatar/avatar.jpg')}}"
                                    alt="{{$item->name}}">
                                <div>
                                    <p class="fw-semibold mb-0">{{$item->name}}</p>
                                </div>
                            </div>
                        </td>
                        <td>{{$item->email}}</td>
                        <td>Active</td>
                        <td>{{$item->created_at}}</td>
                        <td class="text-end"><a class="btn btn-light btn-sm"
                                href="{{route('user.detail',$item->id)}}">View</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-3 mt-3">
            <nav aria-label="Users pagination">
                {{$users->links('pagination::bootstrap-4')}}
            </nav>
        </div>
    </section>
</div>
@endsection