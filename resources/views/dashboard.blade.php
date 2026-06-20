@extends('layouts.app')

@section('content')
<div class="container-fluid px-3 px-lg-4 py-4">
    <div class="page-heading">
        <div class="page-heading-copy">
            <span class="page-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
            <div>
                <p class="eyebrow mb-1">Overview</p>
                <h1 class="h3 mb-1">Admin Dashboard</h1>
                <p class="text-muted mb-0">Monitor users, courses, and system activity from one clean
                    workspace.</p>
            </div>
        </div>
        <div class="heading-actions"><button class="btn btn-outline-secondary btn-sm" type="button"><i
                    class="bi bi-download" aria-hidden="true"></i> Export</button><button class="btn btn-primary btn-sm"
                type="button"><i class="bi bi-file-earmark-plus" aria-hidden="true"></i> Create Report</button></div>
    </div>

    <section class="row g-3 mt-1" aria-label="Dashboard metrics">
        <div class="col-12 col-sm-6 col-xl-3">
            <article class="metric-card metric-primary">
                <div class="metric-top">
                    <span class="metric-label">Total Users</span>
                    <span class="metric-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">{{ $totalUsers }}</div>
                <div class="metric-meta">
                    <span class="text-success">Registered</span>
                    <span>users</span>
                </div>
            </article>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <article class="metric-card metric-success">
                <div class="metric-top">
                    <span class="metric-label">Admins</span>
                    <span class="metric-icon"><i class="bi bi-shield-check" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">{{ \App\Models\User::where('role', 'admin')->count() }}</div>
                <div class="metric-meta">
                    <span>Administrator</span>
                    <span>accounts</span>
                </div>
            </article>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <article class="metric-card metric-warning">
                <div class="metric-top">
                    <span class="metric-label">Instructors</span>
                    <span class="metric-icon"><i class="bi bi-person-badge" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">{{ \App\Models\User::where('role', 'instructor')->count() }}</div>
                <div class="metric-meta">
                    <span>Instructor</span>
                    <span>accounts</span>
                </div>
            </article>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <article class="metric-card metric-danger">
                <div class="metric-top">
                    <span class="metric-label">Students</span>
                    <span class="metric-icon"><i class="bi bi-mortarboard" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">{{ \App\Models\User::where('role', 'student')->count() }}</div>
                <div class="metric-meta">
                    <span>Student</span>
                    <span>accounts</span>
                </div>
            </article>
        </div>
    </section>

    <section class="row g-3 mt-1">
        <div class="col-12 col-xl-8">
            <div class="panel">
                <div class="panel-header">
                    <div>
                        <h2 class="h5 mb-1 section-title"><i class="bi bi-graph-up-arrow"
                                aria-hidden="true"></i><span>Sales Performance</span></h2>
                        <p class="text-muted mb-0">Monthly revenue compared with operational targets.
                        </p>
                    </div>
                    <a class="btn btn-light btn-sm" href="charts.html">View Details</a>
                </div>

                <div class="chart-bars" aria-label="Sales performance chart">
                    <div class="chart-column bar-42"><span></span><small>Jan</small></div>
                    <div class="chart-column bar-58"><span></span><small>Feb</small></div>
                    <div class="chart-column bar-51"><span></span><small>Mar</small></div>
                    <div class="chart-column bar-72"><span></span><small>Apr</small></div>
                    <div class="chart-column bar-66"><span></span><small>May</small></div>
                    <div class="chart-column bar-83"><span></span><small>Jun</small></div>
                </div>
            </div>
        </div>

        <div class="col-12 col-xl-4">
            <div class="panel h-100">
                <div class="panel-header">
                    <div>
                        <h2 class="h5 mb-1 section-title"><i class="bi bi-activity" aria-hidden="true"></i><span>Team
                                Activity</span></h2>
                        <p class="text-muted mb-0">Recent operational updates.</p>
                    </div>
                </div>

                <div class="activity-list">
                    <div class="activity-item"><span class="activity-dot bg-primary"></span>
                        <div>
                            <p class="mb-1 fw-semibold">New campaign launched</p>
                            <p class="text-muted small mb-0">Marketing team published the May offer.</p>
                        </div>
                    </div>
                    <div class="activity-item"><span class="activity-dot bg-success"></span>
                        <div>
                            <p class="mb-1 fw-semibold">Payment batch cleared</p>
                            <p class="text-muted small mb-0">246 invoices were processed successfully.
                            </p>
                        </div>
                    </div>
                    <div class="activity-item"><span class="activity-dot bg-warning"></span>
                        <div>
                            <p class="mb-1 fw-semibold">Support queue rising</p>
                            <p class="text-muted small mb-0">Average first response time is 18 minutes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="panel mt-3">
        <div class="panel-header">
            <div>
                <h2 class="h5 mb-1 section-title"><i class="bi bi-people" aria-hidden="true"></i><span>Recent
                        Users</span></h2>
                <p class="text-muted mb-0">Latest account activity across the workspace.</p>
            </div>
            <a class="btn btn-outline-secondary btn-sm" href="{{route('users.index')}}">Manage Users</a>
        </div>
        <div class="table-responsive">
            <table class="table align-middle mb-0">
                <thead>
                    <tr>
                        <th scope="col">User</th>
                        <th scope="col">Role</th>
                        <th scope="col">Joined</th>
                        <th scope="col" class="text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recentUsers as $item)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <img class="avatar-img avatar-sm" src="{{asset('assets/images/avatar/avatar.jpg')}}"
                                    alt="{{$item->name}}">
                                <div>
                                    <p class="fw-semibold mb-0">{{$item->name}}</p>
                                    <p class="text-muted small mb-0">{{$item->email}}</p>
                                </div>
                            </div>
                        </td>
                        <td>{{ ucfirst($item->role) }}</td>
                        <td>{{ $item->created_at->format('M d, Y') }}</td>
                        <td class="text-end"><a class="btn btn-light btn-sm"
                                href="{{route('user.detail', $item->id)}}">View</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection
