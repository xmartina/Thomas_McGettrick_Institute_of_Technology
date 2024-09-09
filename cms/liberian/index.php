<?php
$page_name = 'Liberian Portal';
$rootDir = '/home/multistream6/domains/thomas.matagram.com/public_html/';
$siteUrl = 'https://thomas.matagram.com/';
include_once($rootDir . 'cms/functions/liberian_function.php');
include_once($rootDir . 'cms/partials/header.php');
?>

    <!--Section 1A-->
    <div class="dashboard-main-body">

        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
            <h6 class="fw-semibold mb-0">Dashboard</h6>
            <ul class="d-flex align-items-center gap-2">
                <li class="fw-medium">
                    <a href="index.html" class="d-flex align-items-center gap-1 hover-text-primary">
                        <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                        Dashboard
                    </a>
                </li>
                <li>-</li>
                <li class="fw-medium">CRM</li>
            </ul>
        </div>

        <div class="row gy-4">
            <div class="col-xxl-8">
                <div class="row gy-4">

                    <div class="col-xxl-4 col-sm-6">
                        <div class="card p-3 shadow-2 radius-8 border input-form-light h-100 bg-gradient-end-1">
                            <div class="card-body p-0">
                                <div class="d-flex flex-wrap align-items-center justify-content-between gap-1 mb-8">

                                    <div class="d-flex align-items-center gap-2">
                      <span
                          class="mb-0 w-48-px h-48-px bg-primary-600 flex-shrink-0 text-white d-flex justify-content-center align-items-center rounded-circle h6 mb-0">
                        <iconify-icon icon="mingcute:user-follow-fill" class="icon"></iconify-icon>
                      </span>
                                        <div>
                                            <span class="mb-2 fw-medium text-secondary-light text-sm">New Users</span>
                                            <h6 class="fw-semibold">15,000</h6>
                                        </div>
                                    </div>

                                    <div id="new-user-chart" class="remove-tooltip-title rounded-tooltip-value"></div>
                                </div>
                                <p class="text-sm mb-0">Increase by <span
                                        class="bg-success-focus px-1 rounded-2 fw-medium text-success-main text-sm">+200</span>
                                    this week</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-4 col-sm-6">
                        <div class="card p-3 shadow-2 radius-8 border input-form-light h-100 bg-gradient-end-2">
                            <div class="card-body p-0">
                                <div class="d-flex flex-wrap align-items-center justify-content-between gap-1 mb-8">

                                    <div class="d-flex align-items-center gap-2">
                      <span
                          class="mb-0 w-48-px h-48-px bg-success-main flex-shrink-0 text-white d-flex justify-content-center align-items-center rounded-circle h6">
                        <iconify-icon icon="mingcute:user-follow-fill" class="icon"></iconify-icon>
                      </span>
                                        <div>
                                            <span
                                                class="mb-2 fw-medium text-secondary-light text-sm">Active Users</span>
                                            <h6 class="fw-semibold">8,000</h6>
                                        </div>
                                    </div>

                                    <div id="active-user-chart"
                                         class="remove-tooltip-title rounded-tooltip-value"></div>
                                </div>
                                <p class="text-sm mb-0">Increase by <span
                                        class="bg-success-focus px-1 rounded-2 fw-medium text-success-main text-sm">+200</span>
                                    this week</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-4 col-sm-6">
                        <div class="card p-3 shadow-2 radius-8 border input-form-light h-100 bg-gradient-end-3">
                            <div class="card-body p-0">
                                <div class="d-flex flex-wrap align-items-center justify-content-between gap-1 mb-8">

                                    <div class="d-flex align-items-center gap-2">
                      <span
                          class="mb-0 w-48-px h-48-px bg-yellow text-white flex-shrink-0 d-flex justify-content-center align-items-center rounded-circle h6">
                        <iconify-icon icon="iconamoon:discount-fill" class="icon"></iconify-icon>
                      </span>
                                        <div>
                                            <span class="mb-2 fw-medium text-secondary-light text-sm">Total Sales</span>
                                            <h6 class="fw-semibold">$5,00,000</h6>
                                        </div>
                                    </div>

                                    <div id="total-sales-chart"
                                         class="remove-tooltip-title rounded-tooltip-value"></div>
                                </div>
                                <p class="text-sm mb-0">Increase by <span
                                        class="bg-danger-focus px-1 rounded-2 fw-medium text-danger-main text-sm">-$10k</span>
                                    this week</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-4 col-sm-6">
                        <div class="card p-3 shadow-2 radius-8 border input-form-light h-100 bg-gradient-end-4">
                            <div class="card-body p-0">
                                <div class="d-flex flex-wrap align-items-center justify-content-between gap-1 mb-8">

                                    <div class="d-flex align-items-center gap-2">
                      <span
                          class="mb-0 w-48-px h-48-px bg-purple text-white flex-shrink-0 d-flex justify-content-center align-items-center rounded-circle h6">
                        <iconify-icon icon="mdi:message-text" class="icon"></iconify-icon>
                      </span>
                                        <div>
                                            <span class="mb-2 fw-medium text-secondary-light text-sm">Conversion</span>
                                            <h6 class="fw-semibold">25%</h6>
                                        </div>
                                    </div>

                                    <div id="conversion-user-chart"
                                         class="remove-tooltip-title rounded-tooltip-value"></div>
                                </div>
                                <p class="text-sm mb-0">Increase by <span
                                        class="bg-success-focus px-1 rounded-2 fw-medium text-success-main text-sm">+5%</span>
                                    this week</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-4 col-sm-6">
                        <div class="card p-3 shadow-2 radius-8 border input-form-light h-100 bg-gradient-end-5">
                            <div class="card-body p-0">
                                <div class="d-flex flex-wrap align-items-center justify-content-between gap-1 mb-8">

                                    <div class="d-flex align-items-center gap-2">
                      <span
                          class="mb-0 w-48-px h-48-px bg-pink text-white flex-shrink-0 d-flex justify-content-center align-items-center rounded-circle h6">
                        <iconify-icon icon="mdi:leads" class="icon"></iconify-icon>
                      </span>
                                        <div>
                                            <span class="mb-2 fw-medium text-secondary-light text-sm">Leads</span>
                                            <h6 class="fw-semibold">250</h6>
                                        </div>
                                    </div>

                                    <div id="leads-chart" class="remove-tooltip-title rounded-tooltip-value"></div>
                                </div>
                                <p class="text-sm mb-0">Increase by <span
                                        class="bg-success-focus px-1 rounded-2 fw-medium text-success-main text-sm">+20</span>
                                    this week</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-4 col-sm-6">
                        <div class="card p-3 shadow-2 radius-8 border input-form-light h-100 bg-gradient-end-6">
                            <div class="card-body p-0">
                                <div class="d-flex flex-wrap align-items-center justify-content-between gap-1 mb-8">

                                    <div class="d-flex align-items-center gap-2">
                      <span
                          class="mb-0 w-48-px h-48-px bg-cyan text-white flex-shrink-0 d-flex justify-content-center align-items-center rounded-circle h6">
                        <iconify-icon icon="streamline:bag-dollar-solid" class="icon"></iconify-icon>
                      </span>
                                        <div>
                                            <span
                                                class="mb-2 fw-medium text-secondary-light text-sm">Total Profit</span>
                                            <h6 class="fw-semibold">$3,00,700</h6>
                                        </div>
                                    </div>

                                    <div id="total-profit-chart"
                                         class="remove-tooltip-title rounded-tooltip-value"></div>
                                </div>
                                <p class="text-sm mb-0">Increase by <span
                                        class="bg-success-focus px-1 rounded-2 fw-medium text-success-main text-sm">+$15k</span>
                                    this week</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!--            Section 1B-->

            <!-- Top performance Start -->
            <div class="col-xxl-4">
                <div class="card">

                    <div class="card-body">
                        <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between">
                            <h6 class="mb-2 fw-bold text-lg mb-0">Top Performer</h6>
                            <a href="javascript:void(0)"
                               class="text-primary-600 hover-text-primary d-flex align-items-center gap-1">
                                View All
                                <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                            </a>
                        </div>

                        <div class="mt-32">

                            <div class="d-flex align-items-center justify-content-between gap-3 mb-32">
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/users/user1.png" alt=""
                                         class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                    <div class="flex-grow-1">
                                        <h6 class="text-md mb-0">Dianne Russell</h6>
                                        <span class="text-sm text-secondary-light fw-medium">Agent ID: 36254</span>
                                    </div>
                                </div>
                                <span class="text-primary-light text-md fw-medium">60/80</span>
                            </div>

                            <div class="d-flex align-items-center justify-content-between gap-3 mb-32">
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/users/user2.png" alt=""
                                         class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                    <div class="flex-grow-1">
                                        <h6 class="text-md mb-0">Wade Warren</h6>
                                        <span class="text-sm text-secondary-light fw-medium">Agent ID: 36254</span>
                                    </div>
                                </div>
                                <span class="text-primary-light text-md fw-medium">50/70</span>
                            </div>

                            <div class="d-flex align-items-center justify-content-between gap-3 mb-32">
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/users/user3.png" alt=""
                                         class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                    <div class="flex-grow-1">
                                        <h6 class="text-md mb-0">Albert Flores</h6>
                                        <span class="text-sm text-secondary-light fw-medium">Agent ID: 36254</span>
                                    </div>
                                </div>
                                <span class="text-primary-light text-md fw-medium">55/75</span>
                            </div>

                            <div class="d-flex align-items-center justify-content-between gap-3 mb-32">
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/users/user4.png" alt=""
                                         class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                    <div class="flex-grow-1">
                                        <h6 class="text-md mb-0">Bessie Cooper</h6>
                                        <span class="text-sm text-secondary-light fw-medium">Agent ID: 36254</span>
                                    </div>
                                </div>
                                <span class="text-primary-light text-md fw-medium">60/80</span>
                            </div>

                            <div class="d-flex align-items-center justify-content-between gap-3 mb-32">
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/users/user5.png" alt=""
                                         class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                    <div class="flex-grow-1">
                                        <h6 class="text-md mb-0">Arlene McCoy</h6>
                                        <span class="text-sm text-secondary-light fw-medium">Agent ID: 36254</span>
                                    </div>
                                </div>
                                <span class="text-primary-light text-md fw-medium">55/75</span>
                            </div>

                            <div class="d-flex align-items-center justify-content-between gap-3">
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/users/user1.png" alt=""
                                         class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                    <div class="flex-grow-1">
                                        <h6 class="text-md mb-0">Arlene McCoy</h6>
                                        <span class="text-sm text-secondary-light fw-medium">Agent ID: 36254</span>
                                    </div>
                                </div>
                                <span class="text-primary-light text-md fw-medium">50/70</span>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!-- Top performance End -->

        </div>
    </div>
<?php
include_once($rootDir . 'cms/partials/footer.php');
?>