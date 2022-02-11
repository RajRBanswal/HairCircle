<html lang="en">
<head>
    <title>Admin</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
         <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('./sidebar/style.css')}}">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
          <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
        <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
        <link rel="shortcut icon" href="https://dashboardpack.com/wp-content/themes/dashboardpack/assets/images/favicon.ico">
        <link rel="apple-touch-icon" href="https://dashboardpack.com/wp-content/themes/dashboardpack/assets/images/apple-touch-icon.png">
        <link href="{{asset('assets/css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="fixed-sn deep-purple-skin">
        @if(session('admin.username'))
        <div class="wrapper d-flex align-items-stretch">
            <nav id="sidebar">
                  <h1>
                   <!--  <a href="{{url('/my_dashbord')}}" class="logo"><img src="{{asset('img/logo/hairlogo.jpeg')}}" class="img-fluid" width="150" height="150" style="border-radius: 5px;"></a> -->
                    <a href="{{url('/my_dashbord')}}" class="logo"><img src="{{asset('img/logo/hairlogo.jpeg')}}" class="img-fluid" style="height: 250px; width: 300px; border-right: solid 1px #000;"></a>
                </h1>
                <div class="p-4 pt-2">
                    <ul class="list-unstyled components mb-5">
                      <li class="active">
                        <a href="{{url('/my_dashbord')}}"><span class="fa fa-home mr-3"></span> Dashboard</a>
                      </li>
                      <li>
                      <!-- <a href="{{url('/vendor_list')}}"><i class="fa fa-users mr-3"></i> Vendors</a> -->
                       <a  class="dropdown-btn"><span class="fa fa-users mr-3"></span> Vendors <i class="fa fa-caret-down"></i></a>
                          <div class="dropdown-container">
                            <a href="{{url('/vendor_list')}}">Vendor List</a>
                            <a href="{{url('/vendor_request')}}">Vendor Request</a>
                            <a class="dropdown-btn">Vendor Purchase Orders<i class="fa fa-caret-down"></i></a>
                            <div class="dropdown-container bg-dark">
                              <a href="{{url('/all_order')}}">All Orders</a>
                              <a href="{{url('/get_confirm_order')}}">Confirmed Orders</a>
                            </div>
                            <a href="{{url('/sold_offline')}}">Sold Offline</a>
                            <a href="{{url('finance')}}">Finance</a>
                          </div>
                      </li>

                      <li>
                          <a class="dropdown-btn"><span class="fa fa-users mr-3"> </span>Customers <i class="fa fa-caret-down"></i></a>
                           <div class="dropdown-container">
                            <a href="{{url('/customer_list')}}">Customers List</a>
                            <a href="#">Orders</a>
                            <a href="{{url('/customer_cash_claim')}}">Cash Claims</a>
                            <a href="">Finance</a>
                          </div>
                      </li>
                       <li>
                        <!-- <button class="dropdown-btn">Dropdown 
                            
                          </button> -->
                          <a class="dropdown-btn"><span class="fa fa-cogs mr-3"></span> Stock / Inventory <i class="fa fa-caret-down"></i></a>
                          <div class="dropdown-container">
                            <a href="{{url('/add_product')}}">Add Stock</a>
                            <a href="{{url('/sales')}}">Sale Stock</a>
                            <a href="{{url('/products_list')}}">Available Stock</a>
                            <a href="{{url('/sold_stock')}}">Sold Stock</a>
                          </div>
                      <!--  -->
                      </li>

                       <li>
                      <a href="{{url('/finance')}}"><span class="fa fa-rupee mr-4"></span> Finance</a>
                      </li>
                    <!--   <li>
                      <a href="{{url('/employee_list')}}"><i class="fa fa-users mr-3"></i> Employees</a>
                      </li> -->
                  <!--     <li>
                      <a href="{{url('/all_order')}}"><span class="fa fa-suitcase mr-3"></span>All Orderes</a>
                      </li> -->
                     
                      <li>
                          <a class="dropdown-btn"><span class="fa fa-cogs mr-3"></span>Other Settings <i class="fa fa-caret-down"></i></a>
                          <div class="dropdown-container">
                            <a href="{{url('/all_enquiry')}}"> All Enquiry</a>
                            <a href="{{url('/all_diagnosis')}}"> All Diagnosis</a>
                            <a href="{{url('/set_schedule_admin')}}"> Set Time Schedule</a>
                            <a href="{{url('/cash_claim_setting')}}"> Cash Claim Settings</a>
                          </div>
                      
                      </li>
                      <!-- <li>
                      <a href="{{url('/kyc')}}"><span class="fa fa-paper-plane mr-3"></span> KYC</a>
                      </li> -->
                    </ul>
    
                   <!--  <div class="mb-5">
                        <div class="form-group d-flex">
                                <div class="dropdown dropup" >
                                    <i class="fa fa-user"></i>
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #DAA520; width: 100px; padding-right: 4px;">{{session('admin.username')}}</button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{url('/admin_logout')}}">Logout</a>   
                                  </div>
                                </div>
                        </div>
                    </div> -->

                </div>
            </nav>

            
            <div id="content">
              <!--Navbar -->
                <nav class="mb-1 navbar navbar-expand-lg navbar-dark lighten-1 " style="background-color: #DAA520;">
                  <a class="navbar-brand" id="sidebarCollapse" href="#">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                  </a>
                  <div class=" navbar-collapse d-flex" id="navbarSupportedContent-555">
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    
                    <ul class="navbar-nav ml-auto mt-1 nav-flex-icons" >
                      <li class=" avatar dropdown">
                        <a class="nav-link text-white username1" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                          <b id="usb">{{session('admin.username')}}</b> <i class="fa fa-caret-down"></i>
                          <!-- <img src="{{asset('asset/user1.jpg')}}" class="rounded-circle z-depth-0" -->
                            <!-- alt="avatar image" width="70" height="70"> -->
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary"
                          aria-labelledby="navbarDropdownMenuLink-55">
                          <!-- <a class="dropdown-item" href="{{url('/my_dashbord')}}">{{session('admin.username')}}</a> -->
                          <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#admin_reset_password">Reset Password</button>
                          <a class="dropdown-item" href="{{url('/admin_logout')}}">Log Out</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </nav>
<!--/.Navbar -->
    <!-- The Modal -->
        <div class="modal" id="admin_reset_password">
          <div class="modal-dialog">
            <div class="modal-content">
             <form  method="POST"  action="{{url('/admin_frpass')}}">
                @csrf
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Reset Password</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
        
              <!-- Modal body -->
              <div class="modal-body">
               
                     <div class="input-group form-group">
                        <input type="text" name="email_or_mo" class="form-control" placeholder="Mobile Or Email">
                    </div>  
                    <div class="input-group form-group">
                        <input type="password" name="password" class="form-control" placeholder="password">
                    </div>
                    <!--<div class="form-group">-->
                    <!--    <input type="submit" value="Update" class="btn float-right login_btn">-->
                    <!--</div>-->
                
              </div>
        
              <!-- Modal footer -->
              <div class="modal-footer rrb">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-outline-primary btn1" >Update</button>
              </div>
            </form>
            </div>
          </div>
        </div>
        <!--End Modal Form-->
            
                    @yield('content')
            </div>
           
        </div>
        @else
        <div class="container">
            <div class="row mt-5 l-9">
                <div class="form-group">
                    <h1><a href="{{url('/admin_panel')}}">Login First</a></h1>
                </div>
            </div>
        </div>
        @endif
</body>
<style type="text/css">
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}
.sidenav a{
   text-decoration: none; 
}
sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}
#usb{
  color: #fff;
  font-size: 20px;
}
#usb:hover{
color: #000;
}

            .username1{
                   margin-right:100px;
               }
            @media (max-width: 991px) {
               .username1{
                   margin-right:0px;
                   margin-top: -45px;
               }
            }
</style>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
<script type="text/javascript">
    function table_sort() {
      const styleSheet = document.createElement('style')
      styleSheet.innerHTML = `
            .order-inactive span {
                visibility:hidden;
            }
            .order-inactive:hover span {
                visibility:visible;
            }
            .order-active span {
                visibility: visible;
            }
        `
      document.head.appendChild(styleSheet)

      document.querySelectorAll('th.order').forEach(th_elem => {
        let asc = true
        const span_elem = document.createElement('span')
        span_elem.style = "font-size:0.8rem; margin-left:0.5rem"
        span_elem.innerHTML = "▼"
        th_elem.appendChild(span_elem)
        th_elem.classList.add('order-inactive')

        const index = Array.from(th_elem.parentNode.children).indexOf(th_elem)
        th_elem.addEventListener('click', (e) => {
          document.querySelectorAll('th.order').forEach(elem => {
            elem.classList.remove('order-active')
            elem.classList.add('order-inactive')
          })
          th_elem.classList.remove('order-inactive')
          th_elem.classList.add('order-active')

          if (!asc) {
            th_elem.querySelector('span').innerHTML = '▲'
          } else {
            th_elem.querySelector('span').innerHTML = '▼'
          }
          const arr = Array.from(th_elem.closest("table").querySelectorAll('tbody tr'))
          arr.sort((a, b) => {
            const a_val = a.children[index].innerText
            const b_val = b.children[index].innerText
            return (asc) ? a_val.localeCompare(b_val) : b_val.localeCompare(a_val)
          })
          arr.forEach(elem => {
            th_elem.closest("table").querySelector("tbody").appendChild(elem)
          })
          asc = !asc
        })
      })
    }

    table_sort();
</script>
<script type="text/javascript">
    $(function() {

    var start = moment().subtract(365, 'days');
    var end = moment();

    function cb(start, end) {
        $('#reportrange span').html(start.format('D-M-YYYY') + ' / ' + end.format('D-M-YYYY'));
        Search_date(start,end);
    }

    $('#reportrange').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
           'All': [moment().subtract(365, 'days'), moment()],
           'Today': [moment(), moment()],
           'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           'Last 7 Days': [moment().subtract(6, 'days'), moment()],
           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
           'This Month': [moment().startOf('month'), moment().endOf('month')],
           'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }, cb);

    cb(start, end);

});
</script>
 <!-- <script src="{{asset('./sidebar/js/jquery.min.js')}}"></script> -->
    <script src="{{asset('./sidebar/js/popper.js')}}"></script>
    <script src="{{asset('./sidebar/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('./sidebar/js/main.js')}}"></script>
    <!-- <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css"> -->
    <!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script> -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

    <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> -->
</html>