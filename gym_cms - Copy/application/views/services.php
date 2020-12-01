            <!-- MAIN CONTENT-->
            <div class="main-content" id='app'>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Services Content</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row"><br></div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Service Banner</strong>
                                </div>
                                <div class="card-body card-block" v-if='hasBanner'>
                                    <img v-bind:src="banner" alt="Banner" height='350px'><br><br>
                                    <button class="btn btn-block btn-primary" @click='changeBanner'>Change Banner</button>
                                </div>
                                <div class="card-body card-block" v-else>
                                    <div v-bind:class="b_class" v-if='b_message.length > 0'>{{b_message}}</div>
                                    <div class="progress" v-show='progress > 0'>
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" v-bind:style="{width: progress + '%'}" aria-valuemax="100"></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="" class=" form-control-label">Pricing Page Banner (Preferred size: 700 x 270)</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="file" accept='image/*' @change='changeFile($event,"banner")' class="form-control-file">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success btn-sm" @click='uploadBanner'>
                                            <i class="fa fa-upload"></i> Upload
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row col-lg-12">

                                <div class="col-md-12" v-if='shrinkTable'>
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>New Service</strong>
                                            <div class="btn close" @click='shrinkTable = false;'><i class="fa fa-times-circle"></i></div>
                                        </div>
                                        <div class="card-body card-block">
                                            <div class="alert alert-danger" v-html='message' v-if='message.length > 0'>{{message}}</div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label">
                                                        Service Image
                                                        <span class="text text-danger">Maximum file size is 2MB</span>
                                                    </label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <input type="file" class="form-control-file" @change='changeFile($event,"service")' accept='image/*'>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label">
                                                        Service Title
                                                    </label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <input type="text" class="form-control" placeholder="" v-model='title' />
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label">
                                                        Service Description
                                                    </label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <textarea v-model='description' name="input" class="form-control" rows="5"> </textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label">
                                                        Description List items &nbsp; </label>
                                                    <div class="alert alert-info">Use the enter key to break points</div>
                                                </div>
                                                <div class="col col-md-9">
                                                    <textarea class='form-control' cols="30" rows="10" v-model="details"></textarea>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-success btn-sm" @click='addService()'>
                                                    <i class="fa fa-dot-circle-o"></i> Submit
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>Services</strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <h3><button class="btn btn-primary" @click='shrinkTable = true;'><i class="fa fa-plus"></i>&nbsp;Add New Service</button></h3><br />
                                            <div class="table-responsive table-responsive-data2" v-if='services.length > 0'>
                                                <table class="table table-data2">
                                                    <thead>
                                                        <tr>
                                                            <th>Title</th>
                                                            <th>Description</th>
                                                            <th>Services</th>
                                                            <th>Operations</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="tr-shadow" v-for='serv in services'>
                                                            <td>{{serv.title}}</td>
                                                            <td>{{serv.description}}</td>
                                                            <td v-html='separate(serv.details)'></td>
                                                            <td>
                                                                <button class="item" @click='removeLogo(serv.serial)' title="Delete">
                                                                    <i class="zmdi zmdi-delete"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>