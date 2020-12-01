            <!-- MAIN CONTENT-->
            <div class="main-content" id='app'>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Newsletter Subscribers</h2>
                                </div>
                            </div>
                        </div>
                       <div class="row"><br></div>
                        
                       <div class="row">
                            <div class="col-lg-12">
                                <!-- USER DATA-->
                                <div class="user-data m-b-30">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account-calendar"></i>Leads</h3>
                                    <div class="filters m-b-45">
                                        <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                            <button @click='extract' class='btn btn-primary'>Export</button>
                                        </div>
										<div class='col-lg-6' v-if='subs.length > 0'>
											<textarea rows='5' v-model='subs' class='form-control'></textarea>
										</div>
                                    </div>
                                    
                                        <table class="table" id='table'>
                                            <thead>
                                                <tr>
                                                    <td>Name</td>
                                                    <td>Email</td>
                                                    <td>Date</td>
                                                </tr>
                                            </thead>
                                            <tbody>
												<?php foreach($subs as $sub): ?>
                                                <tr>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6><?php echo $sub->name ?></h6>
                                                        </div>
                                                    </td>
                                                    <td><a href="#"><?php echo $sub->email ?></a> </td>

                                                    <td> <?php echo date('jS F Y', strtotime($sub->date)) ?> </td>
                                                </tr>
												<?php endforeach; ?>
                                            </tbody>
                                        </table>
                                </div>
                                </div>