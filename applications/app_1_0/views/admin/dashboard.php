<div class="content">

  <!-- Start Page breadcrumb -->
  <div class="page-header">
 
      <ol class="breadcrumb">
		<li><a href="<?php echo base_url('admin')?>"><i class='fa fa-dashboard'></i> Dashboard</a></li>
		<?php if($this->router->fetch_class()!='home'){ echo '<li>'.$this->router->fetch_class().'</li>';}?>
        <?php if($this->router->fetch_method()!='index'){ echo "<li>".$this->router->fetch_method().'</li>';}?>
      </ol>
</div>
<?php 

?>
<div class="container-default">
	<div class="col-lg-12 dashboard">
		
	
		
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
		<a href="<?php echo base_url('admin/settings')?>"><div class="padding-5 margin-5 panel-dark tiles">
			<h1><i class="fa fa-sliders fa-2x"></i></h1>
			<h3>Settings</h3>
		</div></a>
		</div>
		
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
		<a href="<?php echo base_url('admin/api')?>"><div class="padding-5 margin-5 panel-primary tiles">
			<h1><i class="fa fa-gears fa-2x"></i></h1>
			<h3>API Settings</h3>
		</div></a>
		</div>
		
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
		<a href="<?php echo base_url('admin/users')?>"><div class="padding-5 margin-5 panel-success tiles">
			<h1><i class="fa fa-user fa-2x"></i></h1>
			<h3>User Account</h3>
		</div></a>
		</div>
		
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
		<a href="<?php echo base_url('admin/logs')?>"><div class="padding-5 margin-5 panel-danger tiles">
			<h1><i class="fa fa-list fa-2x"></i></h1>
			<h3>API Log</h3>
		</div></a>
		</div>
		
	</div>
	<div class="clearfix"></div>

</div>

<style>
	.tiles{
	color:#fff;
	text-align:center;
	}
	
	.dashboard a i,a h1,a h3{
	color:#fff !important;
	}
</style>
	


