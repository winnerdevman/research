<!-- Dashboard content -->
<div class="row">
    <div class="col-xl-12">

        <!-- Review Snapshot -->
        <div class="card">
            <div class="card-header d-sm-flex align-items-sm-center py-sm-0">
                <h5 class="py-sm-2 my-sm-1">Your Review Snapshot</h5>
            </div>

            <div class="card-body d-lg-flex align-items-lg-center justify-content-lg-between flex-lg-wrap">
                <div class="d-flex align-items-center mb-3 mb-lg-0">
                    <div id="tickets-status"></div>
                    <div class="ms-3">
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0">14,327</h5>
                            <span class="text-success ms-2">
                                <i class="ph-arrow-up fs-base lh-base align-top"></i>
                                (+2.9%)
                            </span>
                        </div>
                        <span class="d-inline-block bg-success rounded-pill p-1 me-1"></span>
                        <span class="text-muted">Jun 16, 10:00 am</span>
                    </div>
                </div>

                <div class="d-flex align-items-center mb-3 mb-lg-0">
                    <a href="#" class="bg-primary bg-opacity-10 text-primary lh-1 rounded-pill p-2">
                        <i class="ph-folders"></i>
                    </a>
                    <div class="ms-3">
                        <h5 class="mb-0">1,132</h5>
                        <span class="text-muted">total tickets</span>
                    </div>
                </div>

                <div class="d-flex align-items-center mb-3 mb-lg-0">
                    <a href="#" class="bg-primary bg-opacity-10 text-primary lh-1 rounded-pill p-2">
                        <i class="ph-arrow-arc-left"></i>
                    </a>
                    <div class="ms-3">
                        <h5 class="mb-0">06:25:00</h5>
                        <span class="text-muted">response time</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- /support tickets -->

        <!-- Latest orders -->
        <div class="card">
            <div class="card-header d-flex py-0">
                <h5 class="py-3 mb-0">Latest orders</h5>
            
                <div class="d-inline-flex align-items-center ms-auto">
                    <span class="badge bg-success fw-semibold">29 new</span>
                    <div class="dropdown ms-2">
                        <button type="button" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill" data-bs-toggle="dropdown">
                            <i class="ph-dots-three-vertical"></i>
                        </button>
                
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">
                                <i class="ph-eye me-2"></i>
                                View report
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="ph-printer me-2"></i>
                                Print report
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="ph-file-pdf me-2"></i>
                                Export report
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="ph-gear me-2"></i>
                                Configure
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table text-nowrap">
                    <thead>
                        <tr>
                            <th>Company</th>
                            <th>Delivery date</th>
                            <th>Delivery method</th>
                            <th>Status</th>
                            <th class="text-center" style="width: 20px;"><i class="ph-arrow-circle-down"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="me-3">
                                        <img src="../../../assets/images/brands/klm.svg" class="rounded-circle" width="32" height="32" alt="">
                                    </a>

                                    <div>
                                        <a href="#" class="text-body fw-semibold">KLM Royal Dutch Airlines</a>
                                        <div class="text-muted fs-sm">May 21st</div>
                                    </div>
                                </div>
                            </td>
                            <td>June 12th</td>
                            <td><img src="../../../assets/images/brands/ups.svg" class="me-1" width="20" alt=""> UPS Express</td>
                            <td><span class="badge bg-success bg-opacity-10 text-success">Delivered</span></td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <button type="button" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill" data-bs-toggle="dropdown">
                                        <i class="ph-dots-three-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-receipt me-2"></i>
                                            Order details
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-pdf me-2"></i>
                                            Download invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-chart-bar me-2"></i>
                                            Statistics
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="me-3">
                                        <img src="../../../assets/images/brands/amazon.svg" class="rounded-circle" width="32" height="32" alt="">
                                    </a>

                                    <div>
                                        <a href="#" class="text-body fw-semibold">Amazon Inc.</a>
                                        <div class="text-muted fs-sm">May 22nd</div>
                                    </div>
                                </div>
                            </td>
                            <td>June 13th</td>
                            <td><img src="../../../assets/images/brands/deutsche-post.svg" class="rounded-sm me-1" width="20" alt=""> Deutsche post</td>
                            <td><span class="badge bg-danger bg-opacity-10 text-danger">Delayed</span></td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <button type="button" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill" data-bs-toggle="dropdown">
                                        <i class="ph-dots-three-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-receipt me-2"></i>
                                            Order details
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-pdf me-2"></i>
                                            Download invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-chart-bar me-2"></i>
                                            Statistics
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="me-3">
                                        <img src="../../../assets/images/brands/honda.svg" class="rounded-circle" width="32" height="32" alt="">
                                    </a>

                                    <div>
                                        <a href="#" class="text-body fw-semibold">Honda Motor Company</a>
                                        <div class="text-muted fs-sm">May 22nd</div>
                                    </div>
                                </div>
                            </td>
                            <td>June 14th</td>
                            <td><img src="../../../assets/images/brands/postnl.svg" class="me-1" width="20" alt=""> PostNL</td>
                            <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Processing</span></td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <button type="button" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill" data-bs-toggle="dropdown">
                                        <i class="ph-dots-three-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-receipt me-2"></i>
                                            Order details
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-pdf me-2"></i>
                                            Download invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-chart-bar me-2"></i>
                                            Statistics
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="me-3">
                                        <img src="../../../assets/images/brands/holiday-inn.svg" class="rounded-circle" width="32" height="32" alt="">
                                    </a>

                                    <div>
                                        <a href="#" class="text-body fw-semibold">Holiday Inn Hotels</a>
                                        <div class="text-muted fs-sm">May 23rd</div>
                                    </div>
                                </div>
                            </td>
                            <td>June 15th</td>
                            <td><img src="../../../assets/images/brands/fedex.svg" class="rounded-sm me-1" width="20" alt=""> Fedex Express</td>
                            <td><span class="badge bg-success bg-opacity-10 text-success">Delivered</span></td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <button type="button" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill" data-bs-toggle="dropdown">
                                        <i class="ph-dots-three-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-receipt me-2"></i>
                                            Order details
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-pdf me-2"></i>
                                            Download invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-chart-bar me-2"></i>
                                            Statistics
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="me-3">
                                        <img src="../../../assets/images/brands/apple.svg" class="rounded-circle" width="32" height="32" alt="">
                                    </a>

                                    <div>
                                        <a href="#" class="text-body fw-semibold">Apple Inc.</a>
                                        <div class="text-muted fs-sm">May 23rd</div>
                                    </div>
                                </div>
                            </td>
                            <td>June 16th</td>
                            <td><img src="../../../assets/images/brands/deutsche-post.svg" class="rounded-sm me-1" width="20" alt=""> Deutsche post</td>
                            <td><span class="badge bg-indigo bg-opacity-10 text-indigo">Dispatched</span></td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <button type="button" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill" data-bs-toggle="dropdown">
                                        <i class="ph-dots-three-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-receipt me-2"></i>
                                            Order details
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-pdf me-2"></i>
                                            Download invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-chart-bar me-2"></i>
                                            Statistics
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="me-3">
                                        <img src="../../../assets/images/brands/debijenkorf.svg" class="rounded-circle" width="32" height="32" alt="">
                                    </a>

                                    <div>
                                        <a href="#" class="text-body fw-semibold">de Bijenkorf</a>
                                        <div class="text-muted fs-sm">May 23rd</div>
                                    </div>
                                </div>
                            </td>
                            <td>June 17th</td>
                            <td><img src="../../../assets/images/brands/tnt.svg" class="rounded-sm me-1" width="20" alt=""> TNT</td>
                            <td><span class="badge bg-indigo bg-opacity-10 text-indigo">Dispatched</span></td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <button type="button" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill" data-bs-toggle="dropdown">
                                        <i class="ph-dots-three-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-receipt me-2"></i>
                                            Order details
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-pdf me-2"></i>
                                            Download invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-chart-bar me-2"></i>
                                            Statistics
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="me-3">
                                        <img src="../../../assets/images/brands/texaco.svg" class="rounded-circle" width="32" height="32" alt="">
                                    </a>

                                    <div>
                                        <a href="#" class="text-body fw-semibold">Texaco Inc.</a>
                                        <div class="text-muted fs-sm">May 24th</div>
                                    </div>
                                </div>
                            </td>
                            <td>June 18th</td>
                            <td><img src="../../../assets/images/brands/dpd.svg" class="me-1" width="20" alt=""> DPD</td>
                            <td><span class="badge bg-danger bg-opacity-10 text-danger">Delayed</span></td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <button type="button" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill" data-bs-toggle="dropdown">
                                        <i class="ph-dots-three-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-receipt me-2"></i>
                                            Order details
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-pdf me-2"></i>
                                            Download invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-chart-bar me-2"></i>
                                            Statistics
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="me-3">
                                        <img src="../../../assets/images/brands/shell.svg" class="rounded-circle" width="32" height="32" alt="">
                                    </a>

                                    <div>
                                        <a href="#" class="text-body fw-semibold">Royal Dutch Shell</a>
                                        <div class="text-muted fs-sm">May 25th</div>
                                    </div>
                                </div>
                            </td>
                            <td>June 19th</td>
                            <td><img src="../../../assets/images/brands/ups.svg" class="me-1" width="20" alt=""> UPS Express</td>
                            <td><span class="badge bg-success bg-opacity-10 text-success">Delivered</span></td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <button type="button" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill" data-bs-toggle="dropdown">
                                        <i class="ph-dots-three-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-receipt me-2"></i>
                                            Order details
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-pdf me-2"></i>
                                            Download invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-chart-bar me-2"></i>
                                            Statistics
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="me-3">
                                        <img src="../../../assets/images/brands/tesla.svg" class="rounded-circle" width="32" height="32" alt="">
                                    </a>

                                    <div>
                                        <a href="#" class="text-body fw-semibold">Tesla Inc.</a>
                                        <div class="text-muted fs-sm">May 26th</div>
                                    </div>
                                </div>
                            </td>
                            <td>June 21st</td>
                            <td><img src="../../../assets/images/brands/dpd.svg" class="me-1" width="20" alt=""> DPD</td>
                            <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Processing</span></td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <button type="button" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill" data-bs-toggle="dropdown">
                                        <i class="ph-dots-three-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-receipt me-2"></i>
                                            Order details
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-file-pdf me-2"></i>
                                            Download invoice
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class="ph-chart-bar me-2"></i>
                                            Statistics
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /latest orders -->

    </div>
</div>
<!-- /dashboard content -->