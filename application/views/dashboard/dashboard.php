<h2 class="page-title">
  Dashboard
</h2>
<div class="alert alert-info" role="alert">
  <!-- SVG icon code with class="mr-1" -->
  Selamat Datang <b><?php echo ucwords($this->session->userdata('username')); ?>
</div>
<div class="row">
  <div class="col-md-6 col-xl-3">
    <div class="card card-sm">
      <div class="card-body d-flex align-items-center">
        <span class="bg-red text-white avatar mr-3"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <circle cx="12" cy="7" r="4" />
            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
          </svg>
        </span>
        <div class="mr-3">
          <div class="font-weight-medium">
            1,352 Members
          </div>
          <div class="text-muted">DATA CUSTOMER</div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-xl-3">
    <div class="card card-sm">
      <div class="card-body d-flex align-items-center">
        <span class="bg-blue text-white avatar mr-3"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2" />
            <path d="M12 3v3m0 12v3" />
          </svg>
        </span>
        <div class="mr-3">
          <div class="font-weight-medium">
            132 Transaki
          </div>
          <div class="text-muted">TRANSAKSI HARI INI</div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-xl-3">
    <div class="card card-sm">
      <div class="card-body d-flex align-items-center">
        <span class="bg-green text-white avatar mr-3"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <circle cx="9" cy="19" r="2" />
            <circle cx="17" cy="19" r="2" />
            <path d="M3 3h2l2 12a3 3 0 0 0 3 2h7a3 3 0 0 0 3 -2l1 -7h-15.2" />
          </svg>
        </span>
        <div class="mr-3">
          <div class="font-weight-medium">
            78 Orders
          </div>
          <div class="text-muted">32 shipped</div>
        </div>
      </div>
    </div>
  </div>
</div>