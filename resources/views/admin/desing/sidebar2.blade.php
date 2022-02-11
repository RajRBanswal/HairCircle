<html lang="en">
<head>
    <title>Vendor</title>

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
        @if(session('user.name'))
        <div class="wrapper d-flex align-items-stretch">
            <nav id="sidebar">
                
                  <h1>
                      <a href="{{url('/my_dashboard')}}" class="logo"><img src="{{asset('img/logo/hairlogo.jpeg')}}" class="img-fluid" style="height: 250px; width: 300px; border-right: solid 1px #000;"></a>

                  </h1>
                  <div class="p-4 pt-2">
                    <ul class="list-unstyled components mb-5">
                      <li class="active">
                        <a href="{{url('/my_dashboard')}}"><span class="fa fa-home mr-3"></span> Dashboard</a>
                      </li>
                      <li>
                          <a href="{{url('/my_profile')}}"><span class="fa fa-user mr-3"></span> My Profile</a>
                      </li>
                      <li>
                          <!-- <a href="{{url('/product_list')}}"><i class="fa fa-shopping-cart mr-3"></i> Inventory</a> -->
                          <a class="dropdown-btn"><span class="fa fa-shopping-cart mr-3"></span> Inventory <i class="fa fa-caret-down"></i></a>
                          <div class="dropdown-container">
                            <a href="{{url('/product_list')}}">Available Stock</a>
                            <a href="{{url('/place_order')}}">Purchase Order</a>
                            <!-- <a href="{{url('')}}">Purchase History</a> -->
                            <a href="{{url('/all_orders')}}">Order Status</a>
                            <a href="{{url('/v_sold_stock')}}">Sold Stock</a>
                            
                          </div>
                      </li>
                      <li>
                        <a class="dropdown-btn"><span class="fa fa-rupee mr-4"></span>Finance <i class="fa fa-caret-down"></i></a>
                            <div class="dropdown-container">
                                <!-- <a href="">Transaction</a> -->
                                <a href="{{url('/all_order_amount')}}">HairCircle Company</a>
                                <a href="{{url('/all_c_transaction')}}">Customers</a>
                            </div>    
                      </li>
                      <li>
                        <!-- <a href="{{url('/all_customers')}}"><i class="fa fa-users mr-3"></i> Customer List</a> -->
                         <a class="dropdown-btn"><span class="fa fa-users mr-3"> </span>Customers <i class="fa fa-caret-down"></i></a>
                           <div class="dropdown-container">
                            <a href="{{url('/all_customers')}}">Customers List</a>
                            <a href="{{url('/new_orders')}}">New Orders</a>
                            <a href="{{url('/all_c_transaction')}}">Finance</a>
                          </div>
                      </li>
                      <!-- <li> -->
                      <!--<a href="{{url('/product_list')}}"><span class="fa fa-shopping-cart mr-3"></span>Product List</a>-->
                      <!-- </li> -->
                      <li>
                      <a href="{{url('/all_user')}}"><span class="fa fa-users mr-3"></span> All Customers</a>
                      </li>
                    </ul>

                </div>
            </nav>

            
             <div id="content" style="background-color: #EBECF0;">
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
                        <a class="nav-link username1" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                         <!-- <img src="https://img.icons8.com/ios/50/000000/name--v2.png" width="30" height="30" /> -->
                         <b id="usb">{{session('user.name')}} </b> <i class="fa fa-caret-down"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary"
                          aria-labelledby="navbarDropdownMenuLink-55">
                          <a class="dropdown-item" href="{{url('/my_dashboard')}}">{{session('user.name')}}</a>
                          <a class="dropdown-item" href="{{url('/logout')}}">Log Out</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </nav>
<!--/.Navbar -->
            
                    @yield('content')
            </div>
           
        </div>
        @else
        <div class="container">
            <div class="row mt-5 l-9">
                <div class="form-group">
                    <h1><a href="{{url('/login')}}">Login First</a></h1>
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
        get_new_vndor(start,end);
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
  <script>
    </script>
</html>



