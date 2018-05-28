    <!-- Left Sidebar Start -->
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
               <!--- Profile -->
                <div class="profile-info">
                    <div class="col-xs-12">
                      <div class="profile-text">Bienvenido </div>
                    </div>
                </div>
                <!--- Divider -->
                <div class="clearfix"></div>
                <hr class="divider" />
                <div class="clearfix"></div>
                <!--- Divider -->
                <div id="sidebar-menu">
                  <ul>
				   <li><a href='index.php'><i class='icon-home-3'></i><span>Home</span></a></li>
				   <?php if($user->IdRol == 1) {?>
				    <li><a href='userList.php'><i class='icon-user'></i><span>Users</span></a></li>
					<li><a href='imagesList.php'><i class='icon-picture'></i><span>Images Administration</span></a></li>
					<li><a href='testList.php'><i class='icon-video-alt'></i><span>Test Administration</span></a></li>
					<li><a href='scheduledList.php'><i class=' icon-th-list-1'></i><span>Scheduled Test</span></a></li>
					<li><a href='customerList.php'><i class=' icon-th-list-1'></i><span>Proximos Test</span></a></li>
					<li><a href='customerList.php'><i class=' icon-doc-inv'></i><span>Generar Reporte</span></a></li>
				   <?php }?>
				   </ul>
				  <div class="clearfix">
				 </div>
                </div>
            <div class="clearfix"></div>
			<br><br><br>
        </div>
            <div class="left-footer">
                <div class="progress progress-xs">
                  <div class="progress-bar bg-green-1" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                    <span class="progress-precentage">80%</span>
                  </div>
                  
                  <a data-toggle="tooltip" title="See task progress" class="btn btn-default md-trigger" data-modal="task-progress"><i class="fa fa-inbox"></i></a>
                </div>
            </div>
        </div>
        <!-- Left Sidebar End -->		    
		