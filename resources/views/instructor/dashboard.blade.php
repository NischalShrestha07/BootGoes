@extends('layouts.app')

@section('content')
<div class="container-fluid px-3 px-lg-4 py-4">
    <div class="page-heading">
        <div class="page-heading-copy">
            <span class="page-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
            <div>
                <p class="eyebrow mb-1">Overview</p>
                <h1 class="h3 mb-1">Instructor Dashboard</h1>
                <p class="text-muted mb-0">Manage your courses, track student enrollments, and view your earnings.</p>
            </div>
        </div>
    </div>

    <section class="row g-3 mt-1" aria-label="Instructor metrics">
        <div class="col-12 col-sm-6 col-xl-3">
            <article class="metric-card metric-primary">
                <div class="metric-top">
                    <span class="metric-label">My Courses</span>
                    <span class="metric-icon"><i class="bi bi-book" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">0</div>
                <div class="metric-meta">
                    <span class="text-success">Create new</span>
                    <span>course</span>
                </div>
            </article>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <article class="metric-card metric-success">
                <div class="metric-top">
                    <span class="metric-label">Enrolled Students</span>
                    <span class="metric-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">0</div>
                <div class="metric-meta">
                    <span>Total across</span>
                    <span>all courses</span>
                </div>
            </article>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <article class="metric-card metric-warning">
                <div class="metric-top">
                    <span class="metric-label">Total Earnings</span>
                    <span class="metric-icon"><i class="bi bi-currency-dollar" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">$0</div>
                <div class="metric-meta">
                    <span>Revenue from</span>
                    <span>course sales</span>
                </div>
            </article>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <article class="metric-card metric-danger">
                <div class="metric-top">
                    <span class="metric-label">Reviews</span>
                    <span class="metric-icon"><i class="bi bi-star" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">0</div>
                <div class="metric-meta">
                    <span>Average rating</span>
                    <span>0.0</span>
                </div>
            </article>
        </div>
    </section>

    <section class="panel mt-3">
        <div class="panel-header">
            <div>
                <h2 class="h5 mb-1 section-title"><i class="bi bi-book" aria-hidden="true"></i><span>My Courses</span></h2>
                <p class="text-muted mb-0">Courses you have created. Start building your first course!</p>
            </div>
            <a class="btn btn-primary btn-sm" href="#">Create New Course</a>
        </div>
        <div class="text-center py-5 text-muted">
            <i class="bi bi-journal-plus" style="font-size: 3rem;"></i>
            <p class="mt-2">You haven't created any courses yet.</p>
        </div>
    </section>
</div>
@endsection