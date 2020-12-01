                <!-- MAIN CONTENT-->
                <div class="main-content" id='app'>
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="overview-wrap">
                                        <h2 class="title-1">Frequently Asked Questions</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row"><br></div>

                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>FAQ Banner</strong>
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


                            <div class="row">
                                <div class="col-lg-12" v-show='!newFaq'>
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>Current FAQ content</strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <button class="btn btn-sm btn-primary" @click='showNewFaq()'><i class="fa fa-plus"></i> New FAQ Article</button><br><br>
                                            <div class="table-responsive table-responsive-data2">
                                                <table class="table table-data2" id='table'>
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>FAQ Title</th>
                                                            <th>FAQ Article</th>
                                                            <th>Operations</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-12" v-show='newFaq'>
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>FAQ content</strong>
                                            <button class="btn btn-sm btn-default" @click='closeNewFaq()'><i class="fa fa-times"></i></button>
                                        </div>
                                        <div class="card-body card-block">
                                            <div class="alert alert-danger" v-if='message.length > 0' v-html='message'></div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label">
                                                        FAQ Title
                                                    </label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <textarea v-model='title' class="form-control" rows="2"> </textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label">
                                                        FAQ Article
                                                    </label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <textarea v-model='article' class="form-control" rows="7"> </textarea>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <button @click='saveFaq()' class="btn btn-success btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Submit
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>