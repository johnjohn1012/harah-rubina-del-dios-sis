<?php
include'../includes/connection.php';
include'../includes/sidebar.php';
?><?php 

                $query = 'SELECT ID, t.TYPE
                          FROM users u
                          JOIN type t ON t.TYPE_ID=u.TYPE_ID WHERE ID = '.$_SESSION['MEMBER_ID'].'';
                $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
                while ($row = mysqli_fetch_assoc($result)) {
                          $Aa = $row['TYPE'];
                   
if ($Aa=='User'){
           
             ?>    <script type="text/javascript">
                      //then it will be redirected
                      alert("Restricted Page! You will be redirected to POS");
                      window.location = "pos.php";
                  </script>
             <?php   }
                         
           
}   
            ?>




<div class="container-fluid">
    <div class="row">
        <!-- Customer record -->
        <div class="col-md-3 mb-3">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-0">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Customers</div>
                            <div class="h6 mb-0 font-weight-bold text-gray-800">
                                <?php 
                                $query = "SELECT COUNT(*) FROM customer";
                                $result = mysqli_query($db, $query) or die(mysqli_error($db));
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "$row[0]";
                                }
                                ?> Record(s)
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-3x" style="color: #007bff;"></i> <!-- Colorful and larger icon -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Supplier record -->
        <div class="col-md-3 mb-3">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-0">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Supplier</div>
                            <div class="h6 mb-0 font-weight-bold text-gray-800">
                                <?php 
                                $query = "SELECT COUNT(*) FROM supplier";
                                $result = mysqli_query($db, $query) or die(mysqli_error($db));
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "$row[0]";
                                }
                                ?> Record(s)
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-truck fa-3x" style="color: #f39c12;"></i> <!-- Modern icon with color -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Employee record -->
        <div class="col-md-3 mb-3">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-0">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Employees</div>
                            <div class="h6 mb-0 font-weight-bold text-gray-800">
                                <?php 
                                $query = "SELECT COUNT(*) FROM employee";
                                $result = mysqli_query($db, $query) or die(mysqli_error($db));
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "$row[0]";
                                }
                                ?> Record(s)
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-tie fa-3x" style="color: #28a745;"></i> <!-- Colorful icon for employees -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Registered Account record -->
        <div class="col-md-3 mb-3">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-0">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Registered Account</div>
                            <div class="h6 mb-0 font-weight-bold text-gray-800">
                                <?php 
                                $query = "SELECT COUNT(*) FROM users WHERE TYPE_ID=2";
                                $result = mysqli_query($db, $query) or die(mysqli_error($db));
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "$row[0]";
                                }
                                ?> Record(s)
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-id-card fa-3x" style="color: #e74a3b;"></i> <!-- Red color for ID card -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Product record -->
        <div class="col-md-3 mb-3">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-0">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Products</div>
                            <div class="h6 mb-0 font-weight-bold text-gray-800">
                                <?php 
                                $query = "SELECT COUNT(*) FROM product";
                                $result = mysqli_query($db, $query) or die(mysqli_error($db));
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "$row[0]";
                                }
                                ?> Record(s)
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-box fa-3x" style="color: #17a2b8;"></i> <!-- Blue icon for products -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Transaction record -->
        <div class="col-md-3 mb-3">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-0">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Transaction</div>
                            <div class="h6 mb-0 font-weight-bold text-gray-800">
                                <?php 
                                $query = "SELECT COUNT(*) FROM transaction";
                                $result = mysqli_query($db, $query) or die(mysqli_error($db));
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "$row[0]";
                                }
                                ?> Record(s)
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-exchange-alt fa-3x" style="color: #ffc107;"></i> <!-- Yellow icon for transactions -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Orders record -->
        <div class="col-md-3 mb-3">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-0">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Orders</div>
                            <div class="h6 mb-0 font-weight-bold text-gray-800">
                            <?php 
                                $query = "SELECT COUNT(*) FROM transaction";
                                $result = mysqli_query($db, $query) or die(mysqli_error($db));
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "$row[0]";
                                }
                                ?> Record(s)
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-shopping-cart fa-3x" style="color: #6c757d;"></i> <!-- Icon for orders -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Sales record -->
        <div class="col-md-3 mb-3">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-0">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Sales</div>
                            <div class="h6 mb-0 font-weight-bold text-gray-800">
                            <?php 
                                $query = "SELECT COUNT(*) FROM transaction";
                                $result = mysqli_query($db, $query) or die(mysqli_error($db));
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "$row[0]";
                                }
                                ?> Record(s)
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-3x" style="color: #28a745;"></i> <!-- Green icon for total sales -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Business Analytics</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="analyticsTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Total Sales</th>
                                    <th>Average Price</th>
                                    <th>Sold Quantity</th>
                                    <th>Last Sale Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Product A</td>
                                    <td>1500</td>
                                    <td>50</td>
                                    <td>30</td>
                                    <td>2025-02-10</td>
                                </tr>
                                <tr>
                                    <td>Product B</td>
                                    <td>2500</td>
                                    <td>100</td>
                                    <td>25</td>
                                    <td>2025-02-09</td>
                                </tr>
                                <tr>
                                    <td>Product C</td>
                                    <td>1200</td>
                                    <td>60</td>
                                    <td>20</td>
                                    <td>2025-02-08</td>
                                </tr>
                                <tr>
                                    <td>Product D</td>
                                    <td>3000</td>
                                    <td>120</td>
                                    <td>25</td>
                                    <td>2025-02-07</td>
                                </tr>
                                <tr>
                                    <td>Product E</td>
                                    <td>1800</td>
                                    <td>60</td>
                                    <td>30</td>
                                    <td>2025-02-06</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



                            


<?php
include'../includes/footer.php';
?>