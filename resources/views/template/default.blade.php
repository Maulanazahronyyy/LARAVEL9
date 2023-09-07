<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta5
* @link https://tabler.io
* Copyright 2018-2022 The Tabler Authors
* Copyright 2018-2022 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">

<head>
    @include('templates.partials.head')
</head>

<body>
    <div class="wrapper">
        @include('templates.partials.sidebar')
        <div class="page-wrapper">
            <div class="container-xl">
                <!-- Page title -->
                <div class="page-header d-print-none">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Page pre-title -->
                            <div class="page-pretitle">
                                {{ $preTitle ?? 'Data' }}
                            </div>
                            <h2 class="page-title">
                                {{ $title ?? 'Siswa App' }}
                            </h2>
                        </div>
                        <!-- Page title actions -->
                        <div class="col-auto ms-auto d-print-none">
                            @stack('page-action')
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-body">
                <div class="container-xl">
                    @include('templates.partials.alerts')
                    @yield('content')
                </div>
            </div>
            @include('templates.partials.footer')
        </div>
    </div>
    <div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New report</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="example-text-input"
                            placeholder="Your report name">
                    </div>
                    <label class="form-label">Report type</label>
                    <div class="form-selectgroup-boxes row mb-3">
                        <div class="col-lg-6">
                            <label class="form-selectgroup-item">
                                <input type="radio" name="report-type" value="1" class="form-selectgroup-input"
                                    checked>
                                <span class="form-selectgroup-label d-flex align-items-center p-3">
                                    <span class="me-3">
                                        <span class="form-selectgroup-check"></span>
                                    </span>
                                    <span class="form-selectgroup-label-content">
                                        <span class="form-selectgroup-title strong mb-1">Simple</span>
                                        <span class="d-block text-muted">Provide only basic data needed for the
                                            report</span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-selectgroup-item">
                                <input type="radio" name="report-type" value="1" class="form-selectgroup-input">
                                <span class="form-selectgroup-label d-flex align-items-center p-3">
                                    <span class="me-3">
                                        <span class="form-selectgroup-check"></span>
                                    </span>
                                    <span class="form-selectgroup-label-content">
                                        <span class="form-selectgroup-title strong mb-1">Advanced</span>
                                        <span class="d-block text-muted">Insert charts and additional advanced
                                            analyses to be inserted in the report</span>
                                    </span>
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="mb-3">
                                <label class="form-label">Report url</label>
                                <div class="input-group input-group-flat">
                                    <span class="input-group-text">
                                        https://tabler.io/reports/
                                    </span>
                                    <input type="text" class="form-control ps-0" value="report-01"
                                        autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">Visibility</label>
                                <select class="form-select">
                                    <option value="1" selected>Private</option>
                                    <option value="2">Public</option>
                                    <option value="3">Hidden</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Client name</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Reporting period</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div>
                                <label class="form-label">Additional information</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                        Cancel
                    </a>
                    <a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="12" y1="5" x2="12" y2="19" />
                            <line x1="5" y1="12" x2="19" y2="12" />
                        </svg>
                        Create new report
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Libs JS -->
    @include('templates.partials.scripts')

</body>

</html>
<div class="card">
                  <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Title</th>
                          <th>Email</th>
                          <th>Role</th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Paweł Kuna</td>
                          <td class="text-secondary">
                            UI Designer, Training
                          </td>
                          <td class="text-secondary"><a href="#" class="text-reset">paweluna@howstuffworks.com</a></td>
                          <td class="text-secondary">
                            User
                          </td>
                          <td>
                            <a href="#">Edit</a>
                          </td>
                        </tr>
                        <tr>
                          <td>Jeffie Lewzey</td>
                          <td class="text-secondary">
                            Chemical Engineer, Support
                          </td>
                          <td class="text-secondary"><a href="#" class="text-reset">jlewzey1@seesaa.net</a></td>
                          <td class="text-secondary">
                            Admin
                          </td>
                          <td>
                            <a href="#">Edit</a>
                          </td>
                        </tr>
                        <tr>
                          <td>Mallory Hulme</td>
                          <td class="text-secondary">
                            Geologist IV, Support
                          </td>
                          <td class="text-secondary"><a href="#" class="text-reset">mhulme2@domainmarket.com</a></td>
                          <td class="text-secondary">
                            User
                          </td>
                          <td>
                            <a href="#">Edit</a>
                          </td>
                        </tr>
                        <tr>
                          <td>Dunn Slane</td>
                          <td class="text-secondary">
                            Research Nurse, Sales
                          </td>
                          <td class="text-secondary"><a href="#" class="text-reset">dslane3@epa.gov</a></td>
                          <td class="text-secondary">
                            Owner
                          </td>
                          <td>
                            <a href="#">Edit</a>
                          </td>
                        </tr>
                        <tr>
                          <td>Emmy Levet</td>
                          <td class="text-secondary">
                            VP Product Management, Accounting
                          </td>
                          <td class="text-secondary"><a href="#" class="text-reset">elevet4@senate.gov</a></td>
                          <td class="text-secondary">
                            Admin
                          </td>
                          <td>
                            <a href="#">Edit</a>
                          </td>
                        </tr>
                        <tr>
                          <td>Maryjo Lebarree</td>
                          <td class="text-secondary">
                            Civil Engineer, Product Management
                          </td>
                          <td class="text-secondary"><a href="#" class="text-reset">mlebarree5@unc.edu</a></td>
                          <td class="text-secondary">
                            User
                          </td>
                          <td>
                            <a href="#">Edit</a>
                          </td>
                        </tr>
                        <tr>
                          <td>Egan Poetz</td>
                          <td class="text-secondary">
                            Research Nurse, Engineering
                          </td>
                          <td class="text-secondary"><a href="#" class="text-reset">epoetz6@free.fr</a></td>
                          <td class="text-secondary">
                            Admin
                          </td>
                          <td>
                            <a href="#">Edit</a>
                          </td>
                        </tr>
                        <tr>
                          <td>Kellie Skingley</td>
                          <td class="text-secondary">
                            Teacher, Services
                          </td>
                          <td class="text-secondary"><a href="#" class="text-reset">kskingley7@columbia.edu</a></td>
                          <td class="text-secondary">
                            Owner
                          </td>
                          <td>
                            <a href="#">Edit</a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>