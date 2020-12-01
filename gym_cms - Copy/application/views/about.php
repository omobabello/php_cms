            <!-- MAIN CONTENT-->
            <div class="main-content" id='app'>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">About Us Content</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row"><br></div>

                        <div class="col-lg-12" id='section-banner'>
                            <div class="card">
                                <div class="card-header">
                                    <strong>Banner Content</strong>
                                </div>
                                <div class="card-body card-block" v-if='hasBanner'>
                                    <img v-bind:src="banner" alt="Banner" height='350px'><br><br>
                                    <button class="btn btn-block btn-primary" @click='hasBanner = false;'>Change Banner</button>
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
                                            <input type="file" accept='image/*' @change='changeFile($event,"b")' class="form-control-file">
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
                        <div class="col-lg-12" id='section-one'>
                            <div class="card">
                                <div class="card-header">
                                    <strong>Section One Content</strong>
                                </div>
                                <div class="card-body card-block">
                                    <div v-bind:class="s1_class" v-html="s1_message" v-if='s1_message.length > 0'></div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="" class=" form-control-label">Section A Header</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" v-model='s1_title' placeholder="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="" class=" form-control-label">Section A Article</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <textarea v-model='s1_article' class="form-control" rows="7"> </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button @click='addSectionOne' class="btn btn-success btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12" id='section-two'>
                            <div class="card">
                                <div class="card-header">
                                    <strong>Section Two Content</strong>
                                </div>
                                <div class="card-body card-block">
                                    <div v-bind:class="s2_class" v-html="s2_message" v-if='s2_message.length > 0'></div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="" class=" form-control-label">Section B Header</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input v-model='s2_title' placeholder="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="" class=" form-control-label">Section B Article</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <textarea v-model='s2_article' class="form-control" rows="7"> </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button @click='addSectionTwo' class="btn btn-success btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12" id='section-three'>
                            <div class="card">
                                <div class="card-header">
                                    <strong>Section Three Content</strong>
                                </div>
                                <div class="card-body card-block">
                                    <div v-bind:class="s3_class" v-html="s3_message" v-if='s3_message.length > 0'></div>
                                    <div class="row form-group" v-show='s3_image'>
                                        <div class="col col-md-3">
                                            <label for="" class=" form-control-label">Section C Image</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="file" accept="image/*" @change="changeFile($event,'c')" class=" form-control-file">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="" class=" form-control-label">Video Embed URL</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" v-model='s3_video_url' placeholder="https://www.youtube.com/watch?v=keCwRdbwNQY" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="" class=" form-control-label">Section C Header</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" v-model='s3_title' placeholder="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="" class=" form-control-label">Section C Article</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <textarea v-model='s3_article' class="form-control" rows="7"> </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button @click='addSectionThree' class="btn btn-success btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12" id='section-four'>
                            <div class="card">
                                <div class="card-header">
                                    <strong>Section Four Content</strong>
                                </div>
                                <div class="card-body card-block">
                                    <div v-bind:class="s4_class" v-html="s4_message" v-if='s4_message.length > 0'></div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="" class=" form-control-label">Section D Title</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" v-model='s4_title' placeholder="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="" class=" form-control-label">Section D Article</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <textarea v-model='s4_article' class="form-control" rows="7"> </textarea>
                                        </div>
                                    </div>
                                    <div class="row form-group" v-show='s4_image'>
                                        <div class="col col-md-3">
                                            <label for="" class=" form-control-label">Section D Image</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="file" @change='changeFile($event,"d")' accept="image/*" class="form-control-file">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button @click='addSectionFour' class="btn btn-success btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12" id='section-partner'>
                            <div class="card">
                                <div class="card-header">
                                    <strong>Partners Content</strong>
                                </div>
                                <div class="card-body card-block">
                                    <div v-bind:class="sp_class" v-html="sp_message" v-if='sp_message.length > 0'></div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="" class=" form-control-label">Patner Logo (Preferred 200 x 90) </label>
                                        </div>
                                        <div class="col col-md-5">
                                            <input type="file" @change='changeFile($event,"e")' accept="image/*" class="form-control-file">
                                        </div>
                                        <div class="col col-m-3">
                                            <button @click='addSponsorLogo' class="btn btn-success btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Upload
                                            </button>
                                        </div>
                                    </div>
                                    <div class="table-responsive table-responsive-data2" v-if='logos.length > 0'>
                                        <table class="table table-data2">
                                            <thead>
                                                <tr>
                                                    <th>Logo File</th>
                                                    <th>Operations</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="tr-shadow" v-for='logo in logos'>
                                                    <td>{{logo.image_url | filename}}</td>
                                                    <td>
                                                        <button class="item" @click='removeLogo(logo.serial)' title="Delete">
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