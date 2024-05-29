<?php
require_once('require/restrito.php'); 
?><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Real Estate Html Template">
    <meta name="author" content="">
    <meta name="generator" content="Jekyll">
    <title>Dashboard - Joviplanet</title>
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet">
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="vendors/fontawesome-pro-5/css/all.css">
    <link rel="stylesheet" href="vendors/bootstrap-select/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="vendors/slick/slick.min.css">
    <link rel="stylesheet" href="vendors/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="vendors/chartjs/Chart.min.css">
    <link rel="stylesheet" href="vendors/dropzone/css/dropzone.min.css">
    <link rel="stylesheet" href="vendors/animate.css">
    <link rel="stylesheet" href="vendors/timepicker/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="vendors/mapbox-gl/mapbox-gl.min.css">
    <link rel="stylesheet" href="vendors/dataTables/jquery.dataTables.min.css">
    <!-- Themes core CSS -->
    <link rel="stylesheet" href="css/themes.css">
    <!-- Favicons -->
    <link rel="icon" href="images/favicon.ico">
    <style>
      #gt_float_wrapper{
        top: 100px !important;
        z-index: 10 !important;
      }

      .main-header .dropdown-menu {
        z-index: 20 !important;
}
    </style>
     
  <?php require_once('require/scriptshead.php');?>
  </head>
  <body>
  <div class="gtranslate_wrapper"></div>
    <div class="wrapper dashboard-wrapper">
      <div class="d-flex flex-wrap flex-xl-nowrap">
        <div class="db-sidebar bg-white">
          <nav class="navbar navbar-expand-xl navbar-light d-block px-0 header-sticky dashboard-nav py-0">
            
             
          <div class="sticky-area shadow-xs-1 py-3">
          <!--MENUMOBILE-->
          <?php require_once('require/dashboard-menu-mobile.php');?>
          <!--MENUMOBILEFIM-->

          <!--MENUDESKTOP-->
          <?php require_once('require/dashboard-menu-desktop.php');?>
          <!--MENUDESKTOPFIM-->
            
            </div>
          </nav>
        </div>

        
        <div class="page-content">
          
          <!--MENUDESKTOP-->
          <?php require_once('require/dashboard-header.php');?>
          <!--MENUDESKTOPFIM-->
          <main id="content" class="bg-gray-01">
            <div class="px-3 px-lg-6 px-xxl-13 py-5 py-lg-10 add-new-invoice">
              <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <form metho="get">
                    <div class="row">
                      <div class="col-xl-9 mb-6 mb-xl-0">
                        <div class="card">
                          <div class="card-body p-6">
                            <div class="row mb-6">
                              <div class="invoice-logo col-md-6 mb-3 mb-md-0">
                                <h4 class="card-title mb-5 text-heading fs-22 lh-15">Invoice Logo</h4>
                                <div class="dropzone upload-file text-center py-5"
                                             data-uploader="true"
                                             id="myDropzone"
                                             data-uploader-url="./dashboard-add-new-invoice.html">
                                  <div class="dz-default dz-message">
                                    <span class="upload-icon lh-1 d-inline-block mb-4"><i
                                                                    class="fal fa-cloud-upload-alt"></i></span>
                                    <p class="text-heading fs-22 lh-15 mb-4">Drag and drop image
                                      or</p>
                                    <button class="btn btn-indigo px-7 mb-2" type="button">
                                      Browse file
                                    </button>
                                    <input type="file" hidden name="file">
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <h4 class="card-title mb-5 text-heading fs-22 lh-15">Invoice Label</h4>
                                <input type="text" class="form-control border-0 shadow-none form-control-lg"
                                               placeholder="Invoice Label" name="invoice-label"
                                               value="Invoice Label">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6 invoice-address-company">
                                <h4 class="card-title mb-5 text-heading fs-22 lh-15">From</h4>
                                <div class="invoice-address-company-fields">
                                  <div class="form-group">
                                    <label for="company-name" class="text-heading">Name</label>
                                    <input type="text"
                                                       class="form-control border-0 shadow-none form-control-lg"
                                                       id="company-name" placeholder="Business Name" name="name">
                                  </div>
                                  <div class="form-group">
                                    <label for="company-email"
                                                       class="text-heading">Email</label>
                                    <input type="text"
                                                       class="form-control border-0 shadow-none form-control-lg"
                                                       id="company-email" placeholder="name@company.com" name="email">
                                  </div>
                                  <div class="form-group">
                                    <label for="company-address"
                                                       class="text-heading">Address</label>
                                    <input type="text"
                                                       class="form-control border-0 shadow-none form-control-lg"
                                                       id="company-address" placeholder="XYZ Street" name="address">
                                  </div>
                                  <div class="form-group">
                                    <label for="company-phone"
                                                       class="text-heading">Phone</label>
                                    <input type="text"
                                                       class="form-control border-0 shadow-none form-control-lg"
                                                       id="company-phone" placeholder="(123) 456 789" name="phone">
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6 invoice-address-client">
                                <h4 class="card-title mb-5 text-heading fs-22 lh-15">Bill To</h4>
                                <div class="invoice-address-client-fields">
                                  <div class="form-group">
                                    <label for="client-name" class="text-heading">Name</label>
                                    <input type="text"
                                                       class="form-control border-0 shadow-none form-control-lg"
                                                       id="client-name" name="client-name"
                                                       placeholder="Client Name">
                                  </div>
                                  <div class="form-group">
                                    <label for="client-email" class="text-heading">Email</label>
                                    <input type="text"
                                                       class="form-control border-0 shadow-none form-control-lg"
                                                       id="client-email" placeholder="name@company.com" name="client-email">
                                  </div>
                                  <div class="form-group">
                                    <label for="client-address"
                                                       class="text-heading">Address</label>
                                    <input type="text"
                                                       class="form-control border-0 shadow-none form-control-lg"
                                                       id="client-address" placeholder="XYZ Street" name="client-address">
                                  </div>
                                  <div class="form-group">
                                    <label for="client-phone" class="text-heading">Phone</label>
                                    <input type="text"
                                                       class="form-control border-0 shadow-none form-control-lg"
                                                       id="client-phone" placeholder="(123) 456 789" name="client-phone">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-4">
                                <div class="form-group mb-4">
                                  <label for="number">Invoice Number</label>
                                  <input type="text"
                                                   class="form-control border-0 shadow-none form-control-lg"
                                                   id="number"
                                                   placeholder="#0001" name="invoice-number">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group mb-4">
                                  <label for="date">Invoice Date</label>
                                  <input type="date"
                                                   class="form-control form-control-lg border-0"
                                                   id="date" placeholder="Add date picker" name="available-from">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group mb-4">
                                  <label for="due">Due Date</label>
                                  <input type="date"
                                                   class="form-control form-control-lg border-0"
                                                   id="due" placeholder="None" name="available-to">
                                </div>
                              </div>
                            </div>
                            <div class="mb-6">
                              <div class="table-responsive">
                                <table class="table table-bordered item-table">
                                  <thead>
                                    <tr>
                                      <th class=""></th>
                                      <th>Items</th>
                                      <th class="">Rate</th>
                                      <th class="">Qty</th>
                                      <th class="text-right">Price</th>
                                      <th class="text-center">Tax</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td class="delete-item-row d-block d-md-table-cell w-100 w-md-auto">
                                        <ul class="table-controls list-unstyled">
                                          <li><a href="javascript:void(0);" class="delete-item"
                                                                   data-toggle="tooltip" data-placement="top" title=""
                                                                   data-original-title="Delete">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                     height="24"
                                                                     viewBox="0 0 24 24" fill="none"
                                                                     stroke="currentColor"
                                                                     stroke-width="2" stroke-linecap="round"
                                                                     stroke-linejoin="round"
                                                                     class="feather feather-x-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="15" y1="9" x2="9" y2="15"></line>
                                                <line x1="9" y1="9" x2="15" y2="15"></line>
                                              </svg>
                                            </a></li>
                                        </ul>
                                      </td>
                                      <td class="description d-block d-md-table-cell w-100 w-md-auto"><input type="text"
                                                                                   class="form-control border-0 shadow-none form-control-lg mb-3"
                                                                                   placeholder="Item Name" name="description[]">
                                        <select class="form-control border-0 shadow-none form-control-lg"
                                                                title="Select"
                                                                id="country" name="unit[]">
                                          <option>Select your unit</option>
                                          <option>Hours</option>
                                          <option>Months</option>
                                        </select>
                                      </td>
                                      <td class="rate d-inline-block d-md-table-cell">
                                        <input type="text"
                                                               class="form-control border-0 shadow-none form-control-lg"
                                                               placeholder="Price" name="price[]">
                                      </td>
                                      <td class="text-md-right qty d-inline-block d-md-table-cell"><input type="text"
                                                                                      class="form-control border-0 shadow-none form-control-lg"
                                                                                      placeholder="Quantity" name="quality[]"></td>
                                      <td class="text-md-right amount d-inline-block d-md-table-cell"><span class="editable-amount"><span
                                                            class="currency">$</span> <span class="amount">100.00</span></span>
                                      </td>
                                      <td class="text-md-center tax d-inline-block d-md-table-cell">
                                        <div class="n-chk">
                                          <label class="new-control new-checkbox new-checkbox-text checkbox-primary h-18 mx-auto my-0">
                                            <input type="checkbox" class="new-control-input" name="tax[]">
                                            <span class="d-inline-block d-md-none">Tax</span>
                                          </label>
                                        </div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                              <button type="button" class="btn btn-secondary btn-invoice-add-item">Add Item
                              </button>
                            </div>
                            <div class="row">
                              <div class="col-md-6 mb-6">
                                <div class="shadow-xxs-2 pt-1 pb-2 px-6 border-bottom border-primary border-5x rounded-lg">
                                  <div class="list-group list-group-flush">
                                    <div class="list-group-item d-flex py-2 px-0">
                                      <div class="invoice-summary-label">Subtotal</div>
                                      <div class="font-weight-500 text-heading ml-auto">
                                        <span class="currency">$</span><span class="amount">100</span>
                                      </div>
                                    </div>
                                    <div class="list-group-item d-flex py-2 px-0">
                                      <div class="invoice-summary-label">Discount</div>
                                      <div class="font-weight-500 text-heading ml-auto">
                                        <span class="currency">$</span><span>10</span>
                                      </div>
                                    </div>
                                    <div class="list-group-item d-flex py-2 px-0">
                                      <div class="invoice-summary-label">Tax</div>
                                      <div class="font-weight-500 text-heading ml-auto">
                                        <span>0%</span>
                                      </div>
                                    </div>
                                    <div class="list-group-item d-flex py-2 px-0">
                                      <div class="invoice-summary-label">Total</div>
                                      <div class="font-weight-500 text-heading ml-auto">
                                        <span class="currency">$</span><span>90</span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="invoice-detail-notes"
                                           class="text-heading">Notes</label>
                              <textarea class="form-control border-0 shadow-none form-control-lg" name="note"
                                              id="invoice-detail-notes"
                                              placeholder="Notes - For example, &quot;Thank you for doing business with us&quot;"
                                              style="height: 88px;"></textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3">
                        <div class="card card-body mb-6 p-6">
                          <div class="invoice-action-currency mb-5">
                            <h5 class="card-title fs-16 lh-2 text-dark mb-3">Currency</h5>
                            <div class="form-group mb-0">
                              <input name="currency" hidden type="text">
                              <div class="dropdown selectable-dropdown invoice-select-currency no-caret">
                                <a id="currencyDropdown"
                                           class="d-flex dropdown-toggle form-control bg-transparent form-control-lg bg-input"
                                           data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false">
                                  <div class="w-18px mr-1 image-flag">
                                    <img src="images/svg/flag-us.svg" alt="flag">
                                  </div>
                                  <span class="selectable-text text-truncate">USD - US Dollar</span>
                                  <span class="d-inline-block ml-auto"><i
                                                    class="fal fa-angle-down"></i></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="currencyDropdown">
                                  <a class="dropdown-item d-flex" data-img-value="assets/img/flag-us.svg"
                                               data-value="USD - US Dollar" href="javascript:void(0);">
                                    <div class="w-18px mr-1 image-flag">
                                      <img
                                                            src="images/svg/flag-us.svg"
                                                            class="flag-width" alt="flag">
                                      </div>
                                      <span class="selectable-text">USD - US Dollar</span></a>
                                    <a class="dropdown-item d-flex" data-img-value="assets/img/flag-gbp.svg"
                                               data-value="GBP - British Pound" href="javascript:void(0);">
                                      <div class="w-18px mr-1 image-flag">
                                        <img
                                                            src="images/svg/flag-gbp.svg"
                                                            class="flag-width" alt="flag">
                                        </div>
                                        <span class="selectable-text"> GBP -
                                          British Pound</span></a>
                                      <a class="dropdown-item d-flex" data-img-value="assets/img/flag-idr.svg"
                                               data-value="IDR - Indonesian Rupiah" href="javascript:void(0);">
                                        <div class="w-18px mr-1 image-flag">
                                          <img
                                                            src="images/svg/flag-idr.svg"
                                                            class="flag-width" alt="flag">
                                          </div>
                                          <span class="selectable-text">IDR -
                                            Indonesian Rupiah</span></a>
                                        <a class="dropdown-item d-flex" data-img-value="assets/img/flag-inr.svg"
                                               data-value="INR - Indian Rupee" href="javascript:void(0);">
                                          <div class="w-18px mr-1 image-flag">
                                            <img
                                                            src="images/svg/flag-inr.svg"
                                                            class="flag-width" alt="flag">
                                            </div>
                                            <span class="selectable-text">INR -
                                              Indian Rupee</span></a>
                                          <a class="dropdown-item d-flex" data-img-value="assets/img/flag-brl.svg"
                                               data-value="BRL - Brazilian Real" href="javascript:void(0);">
                                            <div class="w-18px mr-1 image-flag">
                                              <img
                                                            src="images/svg/flag-brl.svg"
                                                            class="flag-width" alt="flag">
                                              </div>
                                              <span class="selectable-text">
                                                BRL -
                                                Brazilian Real</span></a>
                                            <a class="dropdown-item d-flex" data-img-value="assets/img/flag-de.svg"
                                               data-value="EUR - Germany (Euro)" href="javascript:void(0);">
                                              <div class="w-18px mr-1 image-flag">
                                                <img
                                                            src="images/svg/flag-de.svg"
                                                            class="flag-width" alt="flag">
                                                </div>
                                                <span class="selectable-text">
                                                  EUR -
                                                  Germany (Euro)</span></a>
                                              <a class="dropdown-item d-flex" data-img-value="assets/img/flag-try.svg"
                                               data-value="TRY - Turkish Lira" href="javascript:void(0);">
                                                <div class="w-18px mr-1 image-flag">
                                                  <img
                                                            src="images/svg/flag-try.svg"
                                                            class="flag-width" alt="flag">
                                                  </div>
                                                  <span class="selectable-text">
                                                    TRY -
                                                    Turkish Lira</span></a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="invoice-action-tax mb-5">
                                          <h5 class="card-title fs-16 lh-2 text-dark mb-3">Tax</h5>
                                          <div class="invoice-action-tax-fields">
                                            <div class="form-group mb-0">
                                              <label>Type</label>
                                              <div class="dropdown selectable-dropdown invoice-tax-select no-caret">
                                                <a id="typeDropdown"
                                               class="dropdown-toggle form-control bg-transparent form-control-lg d-flex bg-input"
                                               data-toggle="dropdown"
                                               aria-haspopup="true" aria-expanded="false">
                                                  <span
                                                        class="selectable-text d-inline-block mr-auto text-truncate">None</span>
                                                  <span><i class="fal fa-angle-down"></i></span>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="typeDropdown">
                                                  <a class="dropdown-item" data-value="10"
                                                   href="javascript:void(0);">Deducted</a>
                                                  <a class="dropdown-item" data-value="5"
                                                   href="javascript:void(0);">Per Item</a>
                                                  <a class="dropdown-item" data-value="25"
                                                   href="javascript:void(0);">On Total</a>
                                                  <a class="dropdown-item" data-value="0"
                                                   href="javascript:void(0);">None</a>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="form-group mb-0 mt-3 tax-rate" style="display: none;">
                                              <label for="rate1">Rate (%)</label>
                                              <input type="number"
                                               class="form-control border-0 shadow-none form-control-lg input-rate" name="tax-rate"
                                               id="rate1"
                                               placeholder="Rate" value="0">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="invoice-action-discount mb-5">
                                          <h5 class="card-title fs-16 lh-2 text-dark mb-3">Discount</h5>
                                          <div class="form-group mb-0">
                                            <label>Type</label>
                                            <div class="dropdown selectable-dropdown invoice-discount-select no-caret">
                                              <a id="discountDropdown"
                                           class="d-flex dropdown-toggle form-control bg-transparent form-control-lg d-block bg-input"
                                           data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"> <span
                                                class="selectable-text d-inline-block mr-auto text-truncate">None</span>
                                                <span><i class="fal fa-angle-down"></i></span>
                                              </a>
                                              <div class="dropdown-menu" aria-labelledby="discountDropdown">
                                                <a class="dropdown-item d-flex" data-value="10"
                                               href="javascript:void(0);">Percent</a>
                                                <a class="dropdown-item d-flex" data-value="25"
                                               href="javascript:void(0);">Flat Amount</a>
                                                <a class="dropdown-item d-flex" data-value="0"
                                               href="javascript:void(0);">None</a>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="form-group mb-0 mt-3 discount-amount" style="display: none;">
                                            <label for="amount">Amount</label>
                                            <input type="number"
                                           class="form-control border-0 shadow-none form-control-lg input-rate" name="discount-rate"
                                           id="amount"
                                           placeholder="Rate" value="25">
                                          </div>
                                        </div>
                                      </div>
                                      <div class="invoice-actions-btn card card-body p-6">
                                        <div class="invoice-action-btn">
                                          <div class="mb-3">
                                            <a href="javascript:void(0);" class="btn btn-primary btn-send btn-block btn-lg">Send
                                              Invoice</a>
                                          </div>
                                          <div class="mb-3">
                                            <a href="dashboard-preview-invoice.html"
                                       class="btn btn-secondary btn-preview btn-block btn-lg">Preview</a>
                                          </div>
                                          <div>
                                            <button
                                       class="btn btn-success btn-download btn-block btn-lg">Save</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </main>
        </div>
      </div>
    </div>

    <div id="g_id_onload"
     data-client_id="35484172793-d3ckles74e0qf6938ak070cinhii80vi.apps.googleusercontent.com"
     data-context="signin"
     data-ux_mode="popup"
     data-callback="handleLoginResponse"
     data-nonce=""
     data-auto_select="false"
     data-itp_support="true">
</div>



    <!-- Vendors scripts -->
    <script src="vendors/jquery.min.js"></script>
    <script src="vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.bundle.js"></script>
    <script src="vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="vendors/slick/slick.min.js"></script>
    <script src="vendors/waypoints/jquery.waypoints.min.js"></script>
    <script src="vendors/counter/countUp.js"></script>
    <script src="vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="vendors/chartjs/Chart.min.js"></script>
    <script src="vendors/dropzone/js/dropzone.min.js"></script>
    <script src="vendors/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="vendors/hc-sticky/hc-sticky.min.js"></script>
    <script src="vendors/jparallax/TweenMax.min.js"></script>
    <script src="vendors/mapbox-gl/mapbox-gl.js"></script>
    <script src="vendors/dataTables/jquery.dataTables.min.js"></script>
    <!-- Theme scripts -->
    <script src="/js/theme.js"></script>
    
    <script src="/js/script.js"></script>
    <script src="https://accounts.google.com/gsi/client"></script>
 
  </body>
</html>