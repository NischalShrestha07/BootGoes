@extends('layouts.app')

@section('content')
<div class="container-fluid px-3 px-lg-4 py-4">
    <div class="page-heading">
        <div class="page-heading-copy">
            <span class="page-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
            <div>
                <p class="eyebrow mb-1">Overview</p>
                <h1 class="h3 mb-1">Student Dashboard</h1>
                <p class="text-muted mb-0">Track your enrolled courses, progress, and learning activity.</p>
            </div>
        </div>
    </div>

    <section class="row g-3 mt-1" aria-label="Student metrics">
        <div class="col-12 col-sm-6 col-xl-3">
            <article class="metric-card metric-primary">
                <div class="metric-top">
                    <span class="metric-label">Enrolled Courses</span>
                    <span class="metric-icon"><i class="bi bi-book" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">0</div>
                <div class="metric-meta">
                    <span>Browse and</span>
                    <span>enroll now</span>
                </div>
            </article>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <article class="metric-card metric-success">
                <div class="metric-top">
                    <span class="metric-label">Completed</span>
                    <span class="metric-icon"><i class="bi bi-check-circle" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">0</div>
                <div class="metric-meta">
                    <span>Courses</span>
                    <span>completed</span>
                </div>
            </article>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <article class="metric-card metric-warning">
                <div class="metric-top">
                    <span class="metric-label">In Progress</span>
                    <span class="metric-icon"><i class="bi bi-hourglass-split" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">0</div>
                <div class="metric-meta">
                    <span>Courses</span>
                    <span>in progress</span>
                </div>
            </article>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <article class="metric-card metric-danger">
                <div class="metric-top">
                    <span class="metric-label">Certificates</span>
                    <span class="metric-icon"><i class="bi bi-award" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">0</div>
                <div class="metric-meta">
                    <span>Earned</span>
                    <span>certificates</span>
                </div>
            </article>
        </div>
    </section>

    <section class="panel mt-3">
        <div class="panel-header">
            <div>
                <h2 class="h5 mb-1 section-title"><i class="bi bi-book" aria-hidden="true"></i><span>My Courses</span></h2>
                <p class="text-muted mb-0">Courses you are enrolled in.</p>
            </div>
            <a class="btn btn-primary btn-sm" href="{{route('frontend.course')}}">Browse Courses</a>
        </div>
        <div class="text-center py-5 text-muted">
            <i class="bi bi-journal-plus" style="font-size: 3rem;"></i>
            <p class="mt-2">You haven't enrolled in any courses yet.</p>
            <a href="{{route('frontend.course')}}" class="btn btn-primary">Browse Courses</a>
        </div>
    </section>
</div>
@endsection