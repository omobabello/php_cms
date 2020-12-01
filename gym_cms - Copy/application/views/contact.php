    <!-- MAIN CONTENT-->
    <div class="main-content" id='app'>
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">Contact Company Page Content</h2>
                        </div>
                    </div>
                </div>
                <div class="row"><br></div>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Contact Banner</strong>
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

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Contact</strong>
                        </div>
                        <div class="card-body card-block">
                            <div class="alert alert-danger" v-if='message.length > 0' v-html='message'></div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class="form-control-label">Details</label>
                                </div>
                                <div class="row col-md-9">
                                    <textarea class='form-control' placeholder="Address" cols="30" rows="5" v-model='address'></textarea>
                                </div>

                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class="form-control-label"></label>
                                </div>
                                <div class="col col-md-2">
                                    <input type="text" class="form-control" name="" placeholder="State/Country" v-model='country' />
                                </div>
                                <div class="col col-md-3">
                                    <input type="text" class="form-control" name="" placeholder="Email Address" v-model='email' />
                                </div>
                                <div class="col col-md-2">
                                    <input type="text" class="form-control" name="" placeholder="Phone number(s)" v-model='phone' />
                                </div>
                                <div class="col col-md-2">
                                    <input type="text" class="form-control" name="" placeholder="Operating Hours" v-model='hours' />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class="form-control-label">Website</label>
                                </div>
                                <div class="row col-md-9">
                                    <input type="text" class="form-control" name="" placeholder="www.site.com" v-model='website' />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class="form-control-label">Article Title</label>
                                </div>
                                <div class="row col-md-9">
                                    <input type="text" class="form-control" name="" v-model='a_title' />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class="form-control-label">Article</label>
                                </div>
                                <div class="col col-md-9">
                                    <textarea class="form-control" name="" rows="8" v-model='article'></textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button @click='saveContact()' class="btn btn-success btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Save
                                </button>
                            </div>
                        </div>
                    </div>
                </div>