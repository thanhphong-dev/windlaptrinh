@extends('layouts.admin')

@section('content')
<div class="main-content app-content">
    <div class="container-fluid">
        <!-- Start::page-header -->
        <div class="d-flex align-items-center justify-content-between my-4 page-header-breadcrumb flex-wrap gap-2">
            <div>
                <p class="fw-semibold fs-20 mb-0">Welcome Back, Jack Miller</p>
                <p class="fs-13 text-muted mb-0">Let's dive in and get things done.</p>
            </div>
            <div class="d-flex align-items-center gap-2 flex-wrap">
                <div class="form-group">
                    <div class="input-group border">
                        <div class="input-group-text bg-white border-0 pe-0"> <i class="ri-calendar-line lh-1"></i> </div>
                        <input type="text" class="form-control breadcrumb-input border-0 bg-white" id="daterange" placeholder="Search By Date Range">
                    </div>
                </div>
                <button type="button" class="btn btn-primary btn-wave"> 
                    <i class="ri-upload-2-line me-2"></i> Export report
                </button> 
            </div>
        </div>
        <!-- End::page-header -->

        <!-- Start:: row-1 -->
        <div class="row"> 
            <div class="col-xxl-9">
                <div class="row">
                    <div class="col-xl-3">
                        <div class="card custom-card main-card-item primary">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-3 flex-wrap">
                                    <div>
                                        <span class="d-block mb-3 fw-medium">Total Sales</span>
                                        <h3 class="fw-semibold lh-1 mb-0">32,981</h3>
                                    </div>
                                    <div class="text-end">
                                        <div class="mb-4">
                                            <span class="avatar avatar-md bg-primary svg-white avatar-rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><rect x="32" y="48" width="192" height="160" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M168,88a40,40,0,0,1-80,0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="javascript:void(0);" class="text-muted text-decoration-underline fw-medium fs-13">View all sales</a>
                                    <span class="text-success fw-semibold"><i class="ti ti-arrow-narrow-up"></i>0.29%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card main-card-item">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-3 flex-wrap">
                                    <div>
                                        <span class="d-block mb-3 fw-medium">Total Revenue</span>
                                        <h3 class="fw-semibold lh-1 mb-0">$14,32,145</h3>
                                    </div>
                                    <div class="text-end">
                                        <div class="mb-4">
                                            <span class="avatar avatar-md bg-secondary svg-white avatar-rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><line x1="128" y1="24" x2="128" y2="232" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M184,88a40,40,0,0,0-40-40H112a40,40,0,0,0,0,80h40a40,40,0,0,1,0,80H104a40,40,0,0,1-40-40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="javascript:void(0);" class="text-muted text-decoration-underline fw-medium fs-13">complete revenue</a>
                                    <span class="text-danger fw-semibold"><i class="ti ti-arrow-narrow-up"></i>3.45%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card main-card-item">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-3 flex-wrap">
                                    <div>
                                        <span class="d-block mb-3 fw-medium">Page Views</span>
                                        <h3 class="fw-semibold lh-1 mb-0">4,678</h3>
                                    </div>
                                    <div class="text-end">
                                        <div class="mb-4">
                                            <span class="avatar avatar-md bg-success svg-white avatar-rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><circle cx="84" cy="108" r="52" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M10.23,200a88,88,0,0,1,147.54,0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M172,160a87.93,87.93,0,0,1,73.77,40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M152.69,59.7A52,52,0,1,1,172,160" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="javascript:void(0);" class="text-muted text-decoration-underline fw-medium fs-13">Total page views</a>
                                    <span class="text-success fw-semibold"><i class="ti ti-arrow-narrow-up"></i>11.54%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card main-card-item">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-3 flex-wrap">
                                    <div>
                                        <span class="d-block mb-3 fw-medium">Profit By Sale</span>
                                        <h3 class="fw-semibold lh-1 mb-0">$645</h3>
                                    </div>
                                    <div class="text-end">
                                        <div class="mb-4">
                                            <span class="avatar avatar-md bg-info svg-white avatar-rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M40,56V184a16,16,0,0,0,16,16H216a8,8,0,0,0,8-8V80a8,8,0,0,0-8-8H56A16,16,0,0,1,40,56h0A16,16,0,0,1,56,40H192" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><circle cx="180" cy="132" r="12"/></svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="javascript:void(0);" class="text-muted text-decoration-underline fw-medium fs-13">Total profit earned</a>
                                    <span class="text-success fw-semibold"><i class="ti ti-arrow-narrow-up"></i>0.18%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Visitors Report
                                </div>
                                <div class="dropdown"> 
                                    <a href="javascript:void(0);" class="p-2 fs-12 text-muted" data-bs-toggle="dropdown" aria-expanded="false"> Sort By <i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i> </a> 
                                    <ul class="dropdown-menu" role="menu"> 
                                        <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li> 
                                         <li><a class="dropdown-item" href="javascript:void(0);">This Month</a></li> 
                                    </ul> 
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row gy-3">
                                    <div class="col-xl-6">
                                        <div class="p-3 bg-light text-default rounded border border-dashed">
                                            <span class="d-block mb-1">This Week</span>
                                            <h5 class="fw-semibold lh-1 mb-0">14,642<span class="text-success fw-semibold fs-13 ms-2 d-inline-flex align-items-center">0.64%<i class="ri-arrow-up-s-line ms-1"></i></span></h5>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="p-3 bg-light text-default rounded border border-dashed">
                                            <span class="d-block mb-1">Last Week</span>
                                            <h5 class="fw-semibold lh-1 mb-0">12,326<span class="text-danger fw-semibold fs-13 ms-2 d-inline-flex align-items-center">5.31%<i class="ri-arrow-down-s-line ms-1"></i></span></h5>
                                        </div>
                                    </div>
                                </div>
                                <div id="visitors-report"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Order Statistics
                                </div>
                                <div class="d-flex align-items-center flex-wrap gap-2">
                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example"> 
                                        <button type="button" class="btn btn-primary btn-wave">Day</button> 
                                        <button type="button" class="btn btn-primary-light btn-wave">Week</button> 
                                        <button type="button" class="btn btn-primary-light btn-wave">Month</button> 
                                        <button type="button" class="btn btn-primary-light btn-wave">Year</button> 
                                    </div>
                                    <div>
                                        <button class="btn btn-light border btn-sm">Export<i class="ri-share-forward-line ms-1"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pb-0">
                                <div id="ordered-statistics"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3">
                <div class="card custom-card overflow-hidden">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Top Selling categories
                        </div><div class="dropdown"> 
                            <a href="javascript:void(0);" class="p-2 fs-12 text-muted" data-bs-toggle="dropdown" aria-expanded="false"> Sort By <i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i> </a> 
                            <ul class="dropdown-menu" role="menu"> 
                                <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                 <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li> 
                                 <li><a class="dropdown-item" href="javascript:void(0);">This Month</a></li> 
                            </ul> 
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div id="top-categories" class="p-4 pb-3"></div>
                        <div class="border-top">
                            <ul class="list-group list-group-flush top-categories">
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="lh-1">
                                            <div class="fw-semibold mb-1">Electronics</div>
                                            <div><span class="text-muted fs-13">Increased by <span class="text-success fw-medium ms-1 d-inline-flex align-items-center">0.64%<i class="ti ti-trending-up ms-1"></i></span></span></div>
                                        </div>
                                        <div class="lh-1 text-end">
                                            <span class="d-block fw-semibold h6 mb-0">1,754</span>
                                            <span class="d-block fs-13 text-muted">Sales</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="lh-1">
                                            <div class="fw-semibold mb-1">Accessories</div>
                                            <div><span class="text-muted fs-13">Decreased by <span class="text-danger fw-medium ms-1 d-inline-flex align-items-center">2.75%<i class="ti ti-trending-down ms-1"></i></span></span></div>
                                        </div>
                                        <div class="lh-1 text-end">
                                            <span class="d-block fw-semibold h6 mb-0">1,234</span>
                                            <span class="d-block fs-13 text-muted">Sales</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="lh-1">
                                            <div class="fw-semibold mb-1">Home Appliances</div>
                                            <div><span class="text-muted fs-13">Increased by <span class="text-success fw-medium ms-1 d-inline-flex align-items-center">1.54%<i class="ti ti-trending-up ms-1"></i></span></span></div>
                                        </div>
                                        <div class="lh-1 text-end">
                                            <span class="d-block fw-semibold h6 mb-0">878</span>
                                            <span class="d-block fs-13 text-muted">Sales</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="lh-1">
                                            <div class="fw-semibold mb-1">Beauty Products</div>
                                            <div><span class="text-muted fs-13">Increased by <span class="text-success fw-medium ms-1 d-inline-flex align-items-center">1.54%<i class="ti ti-trending-up ms-1"></i></span></span></div>
                                        </div>
                                        <div class="lh-1 text-end">
                                            <span class="d-block fw-semibold h6 mb-0">270</span>
                                            <span class="d-block fs-13 text-muted">Sales</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="lh-1">
                                            <div class="fw-semibold mb-1">Furniture</div>
                                            <div><span class="text-muted fs-13">Decreased by <span class="text-danger fw-medium ms-1 d-inline-flex align-items-center">0.12%<i class="ti ti-trending-down ms-1"></i></span></span></div>
                                        </div>
                                        <div class="lh-1 text-end">
                                            <span class="d-block fw-semibold h6 mb-0">456</span>
                                            <span class="d-block fs-13 text-muted">Sales</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End:: row-1 -->

        <!-- Start:: row-2 -->
        {{-- <div class="row">
            <div class="col-xxl-3">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">
                            Country Wise Sales
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mb-0 top-country-sales">
                            <li>
                                <div class="d-flex align-items-center flex-wrap gap-2">
                                    <div class="lh-1">
                                        <span class="avatar avatar-md p-2 bg-light border avatar-rounded">
                                            <img src={{asset("assets/images/flags/us_flag.jpg")}} alt="">
                                        </span>
                                    </div>
                                    <div class="flex-fill lh-1">
                                        <span class="fw-semibold mb-2 d-block">United States</span>
                                        <span class="d-block text-muted fs-13">32,190 Sales</span>
                                    </div>
                                    <div class="text-end">
                                        <span class="text-default h6 fw-semibold mb-0">$32,190</span>
                                        <span class="text-success fw-medium d-block"><i class="ti ti-arrow-narrow-up"></i>0.27%</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center flex-wrap gap-2">
                                    <div class="lh-1">
                                        <span class="avatar avatar-md p-2 bg-light border avatar-rounded">
                                            <img src={{asset("assets/images/flags/germany_flag.jpg")}} alt="">
                                        </span>
                                    </div>
                                    <div class="flex-fill lh-1">
                                        <span class="fw-semibold mb-2 d-block">Germany</span>
                                        <span class="d-block text-muted fs-13">8,798 Sales</span>
                                    </div>
                                    <div class="text-end">
                                        <span class="text-default h6 fw-semibold mb-0">$29,234</span>
                                        <span class="text-success fw-medium d-block"><i class="ti ti-arrow-narrow-up"></i>0.12%</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center flex-wrap gap-2">
                                    <div class="lh-1">
                                        <span class="avatar avatar-md p-2 bg-light border avatar-rounded">
                                            <img src={{asset("assets/images/flags/mexico_flag.jpg")}} alt="">
                                        </span>
                                    </div>
                                    <div class="flex-fill lh-1">
                                        <span class="fw-semibold mb-2 d-block">Mexico</span>
                                        <span class="d-block text-muted fs-13">16,885 Sales</span>
                                    </div>
                                    <div class="text-end">
                                        <span class="text-default h6 fw-semibold mb-0">$26,166</span>
                                        <span class="text-danger fw-medium d-block"><i class="ti ti-arrow-narrow-down"></i>0.75%</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center flex-wrap gap-2">
                                    <div class="lh-1">
                                        <span class="avatar avatar-md p-2 bg-light border avatar-rounded">
                                            <img src={{asset("assets/images/flags/uae_flag.jpg")}} alt="">
                                        </span>
                                    </div>
                                    <div class="flex-fill lh-1">
                                        <span class="fw-semibold mb-2 d-block">Uae</span>
                                        <span class="d-block text-muted fs-13">14,885 Sales</span>
                                    </div>
                                    <div class="text-end">
                                        <span class="text-default h6 fw-semibold mb-0">$24,263</span>
                                        <span class="text-success fw-medium d-block"><i class="ti ti-arrow-narrow-up"></i>1.45%</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center flex-wrap gap-2">
                                    <div class="lh-1">
                                        <span class="avatar avatar-md p-2 bg-light border avatar-rounded">
                                            <img src={{asset("assets/images/flags/argentina_flag.jpg")}} alt="">
                                        </span>
                                    </div>
                                    <div class="flex-fill lh-1">
                                        <span class="fw-semibold mb-2 d-block">Argentina</span>
                                        <span class="d-block text-muted fs-13">17,578 Sales</span>
                                    </div>
                                    <div class="text-end">
                                        <span class="text-default h6 fw-semibold mb-0">$23,897</span>
                                        <span class="text-success fw-medium d-block"><i class="ti ti-arrow-narrow-up"></i>0.36%</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center flex-wrap gap-2">
                                    <div class="lh-1">
                                        <span class="avatar avatar-md p-2 bg-light border avatar-rounded">
                                            <img src={{asset("assets/images/flags/russia_flag.jpg")}} alt="">
                                        </span>
                                    </div>
                                    <div class="flex-fill lh-1">
                                        <span class="fw-semibold mb-2 d-block">Russia</span>
                                        <span class="d-block text-muted fs-13">10,118 Sales</span>
                                    </div>
                                    <div class="text-end">
                                        <span class="text-default h6 fw-semibold mb-0">$20,212</span>
                                        <span class="text-danger fw-medium d-block"><i class="ti ti-arrow-narrow-down"></i>0.68%</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">
                            Visitors By Gender
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="segmentation"></div>
                        <div>
                            <ul class="list-group segmentation-list">
                                <li class="list-group-item male">
                                    <div class="d-flex align-items-start justify-content-between">
                                        <div>
                                            <span class="d-block fw-semibold">Male<span class="text-success fw-medium ms-1 d-inline-flex align-items-center"><i class="ti ti-arrow-narrow-up"></i>0.78%</span></span>
                                        </div>
                                        <div class="h6 mb-0 fw-semibold">
                                            18,235
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item female">
                                    <div class="d-flex align-items-start justify-content-between">
                                        <div>
                                            <span class="d-block fw-semibold">Female<span class="text-danger fw-medium ms-1 d-inline-flex"><i class="ti ti-arrow-narrow-down"></i>1.57%</span></span>
                                        </div>
                                        <div class="h6 mb-0 fw-semibold">
                                            12,743
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item others">
                                    <div class="d-flex align-items-start justify-content-between">
                                        <div>
                                            <span class="d-block fw-semibold">Others<span class="text-success fw-medium ms-1 d-inline-flex align-items-center"><i class="ti ti-arrow-narrow-up"></i>0.32%</span></span>
                                        </div>
                                        <div class="h6 mb-0 fw-semibold">
                                            5,369
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item not-mentioned">
                                    <div class="d-flex align-items-start justify-content-between">
                                        <div>
                                            <span class="d-block fw-semibold">Not Mentioned<span class="text-success fw-medium ms-1 d-inline-flex align-items-center"><i class="ti ti-arrow-narrow-up"></i>19.45%</span></span>
                                        </div>
                                        <div class="h6 mb-0 fw-semibold">
                                            16,458
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">
                            Recent Activity
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled recent-activity-list">
                            <li>
                                <div class="d-flex justify-content-between align-items-start gap-2 pe-4">
                                    <div>
                                        <span class="d-block">Jane Smith ordered 5 new units of <span class="text-primary fw-semibold">Product Y.</span></span>
                                    </div>
                                    <div class="recent-activity-time fs-13">
                                        <span class="text-muted">12:45 Am</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex justify-content-between align-items-start gap-2 pe-4">
                                    <div>
                                        <span class="d-block">Scheduled demo with potential client DEF for next Tuesday</span>
                                    </div>
                                    <div class="recent-activity-time fs-13">
                                        <span class="text-muted">03:26 Pm</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex justify-content-between align-items-start gap-2 pe-4">
                                    <div>
                                        <span class="d-block">Product X price updated to <span class="text-success fw-semibold">$XX.XX</span> per every unit</span>
                                    </div>
                                    <div class="recent-activity-time fs-13">
                                        <span class="text-muted">08:52 Pm</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex justify-content-between align-items-start gap-2 pe-4">
                                    <div>
                                        <span class="d-block">Database backup completed successfully</span>
                                    </div>
                                    <div class="recent-activity-time fs-13">
                                        <span class="text-muted">02:54 Am</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex justify-content-between align-items-start gap-2 pe-4">
                                    <div>
                                        <span class="d-block">Generated <span class="text-warning fw-semibold">$10,000</span> in revenue</span>
                                    </div>
                                    <div class="recent-activity-time fs-13">
                                        <span class="text-muted">11:38 Am</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex justify-content-between align-items-start gap-2 pe-4">
                                    <div>
                                        <span class="d-block">Processed refund for Order <span class="text-danger fw-semibold">#13579</span> due to defective item</span>
                                    </div>
                                    <div class="recent-activity-time fs-13">
                                        <span class="text-muted">01:42 Pm</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3">
                <div class="card custom-card overflow-hidden">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Recent Transactions
                        </div>
                        <a href="javascript:void(0);" class="fs-13 text-muted"> View All<i class="ti ti-arrow-narrow-right ms-1"></i> </a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">Payment Mode</th>
                                        <th scope="col" class="text-end">Amount Paid</th>
                                    </tr>
                                </thead> 
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-start gap-2">
                                                <div>
                                                    <span class="avatar avatar-md avatar-rounded bg-primary-transparent">
                                                        <i class="ri-paypal-line fs-18"></i> 
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="d-block fw-semibold mb-1">Paypal ****2783</span>
                                                    <span class="d-block fs-13 text-muted">Online Transaction</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div>
                                                <span class="d-block fw-semibold mb-1 h6">$1,234.78</span>
                                                <span class="d-block fs-13 text-muted">Nov 22,2024</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-start gap-2">
                                                <div>
                                                    <span class="avatar avatar-md avatar-rounded bg-secondary-transparent">
                                                        <i class="ri-wallet-3-line fs-18"></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="d-block fw-semibold mb-1">Digital Wallet</span>
                                                    <span class="d-block fs-13 text-muted">Online Transaction</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div>
                                                <span class="d-block fw-semibold mb-1 h6">$623.99</span>
                                                <span class="d-block fs-13 text-muted">Nov 22,2024</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-start gap-2">
                                                <div>
                                                    <span class="avatar avatar-md avatar-rounded bg-success-transparent">
                                                        <i class="ri-mastercard-line fs-18"></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="d-block fw-semibold mb-1">Mastro Card ****7893</span>
                                                    <span class="d-block fs-13 text-muted">Card Payment</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div>
                                                <span class="d-block fw-semibold mb-1 h6">$1,324</span>
                                                <span class="d-block fs-13 text-muted">Nov 21,2024</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-start gap-2">
                                                <div>
                                                    <span class="avatar avatar-md avatar-rounded bg-info-transparent">
                                                        <i class="ti ti-currency-dollar fs-18"></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="d-block fw-semibold mb-1">Cash On Delivery</span>
                                                    <span class="d-block fs-13 text-muted">Pay On Delivery</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div>
                                                <span class="d-block fw-semibold mb-1 h6">$1,123.49</span>
                                                <span class="d-block fs-13 text-muted">Nov 20,2024</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-bottom-0">
                                            <div class="d-flex align-items-start gap-2">
                                                <div>
                                                    <span class="avatar avatar-md avatar-rounded bg-warning-transparent">
                                                        <i class="ri-visa-line fs-18"></i>
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="d-block fw-semibold mb-1">Visa Card ****2563</span>
                                                    <span class="d-block fs-13 text-muted">Card Payment</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="border-bottom-0 text-end">
                                            <div>
                                                <span class="d-block fw-semibold mb-1 h6">$1,289</span>
                                                <span class="d-block fs-13 text-muted">Nov 18,2024</span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- End:: row-2 -->

        <!-- Start:: row-3 -->
        <div class="row">
            <div class="col-xxl-12">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Recent Orders
                        </div>
                        <div class="d-flex flex-wrap gap-2"> 
                            <div> 
                                <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example"> 
                            </div> 
                            <div class="dropdown"> 
                                <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-wave" data-bs-toggle="dropdown" aria-expanded="false"> Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i> 
                                </a> 
                                <ul class="dropdown-menu" role="menu"> 
                                    <li><a class="dropdown-item" href="javascript:void(0);">New</a></li> 
                                    <li><a class="dropdown-item" href="javascript:void(0);">Popular</a></li> 
                                    <li><a class="dropdown-item" href="javascript:void(0);">Relevant</a></li> 
                                </ul> 
                            </div> 
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="row" class="ps-4"><input class="form-check-input" type="checkbox" id="checkboxNoLabeljob1" value="" aria-label="..."></th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Category</th>
                                        <th scope="col" class="text-center">Quantity</th>
                                        <th scope="col">Customer</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Ordered Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="ps-4"><input class="form-check-input" type="checkbox" id="checkboxNoLabeljob2" value="" aria-label="..."></td>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-md bg-light"><img src={{asset("assets/images/ecommerce/png/1.png")}} class="" alt="..."></span>
                                                <div class="ms-2">
                                                    <p class="fw-semibold mb-0 d-flex align-items-center"><a href="javascript:void(0);">Classic tufted leather sofa</a></p>
                                                    <p class="fs-13 text-muted mb-0">Pixel</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                           Furniture
                                        </td>
                                        <td class="text-center">
                                           1
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-xs avatar-rounded">
                                                        <img src={{asset("assets/images/faces/1.jpg")}} alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    Lucas Hayes
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-primary-transparent">Shipped</span></td>
                                        <td class="fw-semibold">$1200.00</td>
                                        <td>2024-05-18</td>
                                        <td>
                                            <div class="btn-list">
                                                <button class="btn btn-sm btn-icon btn-primary-light btn-wave">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                                <button class="btn btn-sm btn-icon btn-secondary-light btn-wave">
                                                    <i class="ri-edit-line"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-4"><input class="form-check-input" type="checkbox" id="checkboxNoLabeljob3" value="" aria-label="..." checked=""></td>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-md bg-light"><img src={{asset("assets/images/ecommerce/png/36.png")}} class="" alt="..."></span>
                                                <div class="ms-2">
                                                    <p class="fw-semibold mb-0 d-flex align-items-center"><a href="javascript:void(0);">Rose Flower Pot</a></p>
                                                    <p class="fs-13 text-muted mb-0">Sonic</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Decoration
                                        </td>
                                        <td class="text-center">
                                            2
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-xs avatar-rounded">
                                                        <img src={{asset("assets/images/faces/2.jpg")}} alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    Abigail Scott
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge bg-success-transparent">Delivered</span>
                                        </td>
                                        <td class="fw-semibold">$250.00</td>
                                        <td>2024-05-19</td>
                                        <td>
                                            <div class="btn-list">
                                                <button class="btn btn-sm btn-icon btn-primary-light btn-wave">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                                <button class="btn btn-sm btn-icon btn-secondary-light btn-wave">
                                                    <i class="ri-edit-line"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-4"><input class="form-check-input" type="checkbox" id="checkboxNoLabeljob4" value="" aria-label="..." checked=""></td>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-md bg-light"><img src={{asset("assets/images/ecommerce/png/31.png")}} class="" alt="..."></span>
                                                <div class="ms-2">
                                                    <p class="fw-semibold mb-0 d-flex align-items-center"><a href="javascript:void(0);">Leather Handbag</a></p>
                                                    <p class="fs-13 text-muted mb-0">Elite</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Fashion
                                        </td>
                                        <td class="text-center">
                                            1
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-xs avatar-rounded">
                                                        <img src={{asset("assets/images/faces/10.jpg")}} alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    Mason Wallace
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge bg-secondary-transparent">Processing</span>
                                        </td>
                                        <td class="fw-semibold">$800.00</td>
                                        <td>2024-05-20</td>
                                        <td>
                                            <div class="btn-list">
                                                <button class="btn btn-sm btn-icon btn-primary-light btn-wave">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                                <button class="btn btn-sm btn-icon btn-secondary-light btn-wave">
                                                    <i class="ri-edit-line"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-4"><input class="form-check-input" type="checkbox" id="checkboxNoLabeljob5" value="" aria-label="..."></td>
                                        <td>
                                            <div class="d-flex">
                                                <span class="avatar avatar-md bg-light"><img src={{asset("assets/images/faces/3.jpg")}} class="" alt="..."></span>
                                                <div class="ms-2">
                                                    <p class="fw-semibold mb-0 d-flex align-items-center"><a href="javascript:void(0);">Polaroid Medium Camera</a></p>
                                                    <p class="fs-13 text-muted mb-0">Bright</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                          Electronics
                                        </td>
                                        <td class="text-center">
                                            3
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-xs avatar-rounded">
                                                        <img src={{asset("assets/images/faces/3.jpg")}} alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    Chloe Lewis
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge bg-warning-transparent">Pending</span>
                                        </td>
                                        <td class="fw-semibold">$50.00</td>
                                        <td>2024-05-20</td>
                                        <td>
                                            <div class="btn-list">
                                                <button class="btn btn-sm btn-icon btn-primary-light btn-wave">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                                <button class="btn btn-sm btn-icon btn-secondary-light btn-wave">
                                                    <i class="ri-edit-line"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-4 border-bottom-0"><input class="form-check-input" type="checkbox" id="checkboxNoLabeljob7" value="" aria-label="..."></td>
                                        <td class="border-bottom-0">
                                            <div class="d-flex">
                                                <span class="avatar avatar-md bg-light"><img src={{asset("assets/images/ecommerce/png/13.png")}} class="" alt="..."></span>
                                                <div class="ms-2">
                                                    <p class="fw-semibold mb-0 d-flex align-items-center"><a href="javascript:void(0);">Digital Watch</a></p>
                                                    <p class="fs-13 text-muted mb-0">Nova</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="border-bottom-0">
                                            Fashion
                                        </td>
                                        <td class="border-bottom-0 text-center">
                                            2
                                        </td>
                                        <td class="border-bottom-0">
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-xs avatar-rounded">
                                                        <img src={{asset("assets/images/faces/11.jpg")}} alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    Henry Morgan
                                                </div>
                                            </div>
                                        </td>
                                        <td class="border-bottom-0">
                                            <span class="badge bg-primary-transparent">Shipped</span>
                                        </td>
                                        <td class="fw-semibold border-bottom-0">$100.00</td>
                                        <td class="border-bottom-0">2024-05-21</td>
                                        <td class="border-bottom-0">
                                            <div class="btn-list">
                                                <button class="btn btn-sm btn-icon btn-primary-light btn-wave">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                                <button class="btn btn-sm btn-icon btn-secondary-light btn-wave">
                                                    <i class="ri-edit-line"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer"> 
                        <div class="d-flex align-items-center"> 
                            <div> Showing 5 Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i> </div>
                            <div class="ms-auto"> 
                            <nav aria-label="Page navigation" class="pagination-style-4"> 
                                <ul class="pagination mb-0"> 
                                    <li class="page-item disabled"> <a class="page-link" href="javascript:void(0);"> Prev </a> </li>
                                        <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li> 
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li> 
                                        <li class="page-item"> <a class="page-link text-primary" href="javascript:void(0);"> next </a> </li> 
                                    </ul> 
                                </nav> 
                            </div> 
                        </div> 
                    </div>
                </div>
            </div>
           
        </div>
        <!-- End:: row-3 -->

    </div>
</div>
@endsection