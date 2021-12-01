<?php 
    session_start();
    if (!isset($_SESSION["username"])) {
        ?>
            <script type="text/javascript">
                window.location="login.php";
            </script>
        <?php
    }
    include 'inc/header.php';
    include 'inc/connection.php';
 ?>
	<!--dashboard area-->
	<div class="dashboard-content">
		<div class="dashboard-header">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="left">
							<p><span>dashboard</span>Control panel</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="right text-right">
							<a href="dashboard.php"><i class="fas fa-home"></i>home</a>
							<span class="disabled">return book</span>
						</div>
					</div>
				</div>
				<div class="rBook">
					<form action="" method="post" name="form1">
                       <table class="table table-bordered">
                           <tr>
                               <td>
                                   <select name="enr" class="form-control">
                                        <option value="">1001</option>
                                        <option value="">1002</option>
                                        <option value="">1003</option>
                                   </select>
                               </td>
                               <td>
                                   <input type="submit" name="submit1" class="btn btn-info" value="Search">
                               </td>
                           </tr>
                       </table>
                   </form>
                   <div class="row">
						<div class="col-md-12">
							<div class="rbook-info">
								<table class="table  table-striped table-dark text-center">
									<thead>
										<tr>
											<th>Id No</th>
											<th>Name</th>
											<th>Username</th>
											<th>Dept</th>
											<th>Book Name</th>
											<th>Issue Date</th>
											<th>Email</th>
											<th>Phone</th>
											<th>Return Book</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1001</td>
											<td>Nguyen Van Cong</td>
											<td>shinichi_92</td>
											<td>FIT</td>
											<td>Android game programming for dummies</td>
											<td>25/11/21</td>
											<td>nguyenvancong@gmail.com</td>
											<td>016978524617</td>
											<td ><a href="return.php">Return book</a></td>
										</tr>
										<tr>
											<td>1002</td>
											<td>Nguyen Huu Cam</td>
											<td>camnh</td>
											<td>FIT</td>
											<td>App empire : make money, have a life, and let technology work for you</td>
											<td>26/11/21</td>
											<td>nguyenhuucam91@gmail.com</td>
											<td>0914253846</td>
											<td><a href="return.php">Return book</a></td>
										</tr>
										<tr>
											<td>1003</td>
											<td>Nguyen Thuy Linh</td>
											<td>linkcuteo</td>
											<td>FIT</td>
											<td>Auditing concepts and applications : a risk analysis approach</td>
											<td>24/11/21</td>
											<td>linkcuteo@gmail.com</td>
											<td>0937451269</td>
											<td><a href="return.php">Return book</a></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>					
		</div>
	</div>
	<?php 
		include 'inc/footer.php';
	 ?>