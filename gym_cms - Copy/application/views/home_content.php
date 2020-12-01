            <!-- MAIN CONTENT-->
            <div class="main-content" id='app'>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Home Content</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row"><br></div>
                        <!--Revolution Slider Layers-->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Revolution Slider Elements</strong>
                                </div>
                                <div class="card-body card-block">
                                    <div v-if='banners.length < 3'>
                                        <div v-bind:class='b_class' v-html='b_message' v-if='b_message.length > 0'></div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="file-input" class=" form-control-label">Slider Banner One
                                                    (Preferred size: 1920 x 1080)</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="file" @change='changeFile($event,"b")' class="form-control-file">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="" class=" form-control-label">Title Text</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" v-model='b_title' placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="" class=" form-control-label">Subtitle Text</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" v-model='b_subtitle' placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <div class="card-footer">
                                            <button @click='uploadBanner' class="btn btn-success btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Submit
                                            </button>
                                        </div>
                                    </div>
                                    <div class="table-responsive table-responsive-data2" v-if='banners.length > 0'>
                                        <table class="table table-data2">
                                            <thead>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Image</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="tr-shadow" v-for='acc in banners'>
                                                    <td>{{acc.title}}</td>
                                                    <td>{{acc.link | filename}}</td>
                                                    <td>
                                                        <button class="item" @click='removeBanner(acc.serial)' title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--End Slide Layers-->

                            <!--Next Section-->
                            <div class="container">
                                <div class="row col-lg-12" id='section-one'>
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">Section One Left Content</div>
                                            <div class="card-body">
                                                <div class="card-title">
                                                    <h3 class="text-center title-2">Change Text content on left Grid</h3>
                                                </div>
                                                <hr>
                                                <div v-bind:class='l_class' v-html='l_message' v-if='l_message.length > 0'></div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="" class=" form-control-label">Header Text</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" v-model='l_header' placeholder="" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="" class=" form-control-label">Body Paragraph
                                                            text</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <textarea type="text" v-model='l_paragraph' placeholder="" class="form-control" cols="5" rows="10">
                                                            </textarea>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="" class=" form-control-label">Bullet Points</label>
                                                        <div class="text text-info">Separate each point with new line(Enter Key)</div>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <textarea v-model='l_bullets' cols="30" rows="5" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button @click='addLeftContent' class="btn btn-success">
                                                        Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Right section======-->
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">Section One Accordion Content</div>
                                            <div class="card-body">
                                                <div class="card-title">
                                                    <h3 class="text-center title-2">Change Accordions on right Grid</h3>
                                                </div>
                                                <hr>
                                                <div v-if='accords.length < 4'>
                                                    <div v-bind:class='acc_class' v-html='acc_message' v-if='acc_message.length > 0'></div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="" class=" form-control-label">Accordion header
                                                                title</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="text" v-model='acc_header' placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="" class=" form-control-label">Accordion
                                                                Paragraph text</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <textarea type="text" v-model='acc_paragraph' class="form-control" cols="5" rows="7">
                                                                    </textarea>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <button @click='addAccordion' class="btn btn-success">
                                                            Submit
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="table-responsive table-responsive-data2" v-if='accords.length > 0'>
                                                    <table class="table table-data2">
                                                        <thead>
                                                            <tr>
                                                                <th>Title</th>
                                                                <th>Paragraph</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="tr-shadow" v-for='acc in accords'>
                                                                <td>{{acc.title}}</td>
                                                                <td>{{acc.paragraph}}</td>
                                                                <td>
                                                                    <button class="item" @click='removeAccords(acc.serial)' title="Delete">
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

                            <!--Grid Images Layers-->
                            <div class="col-lg-12">
                                <div class="card" id='grids'>
                                    <div class="card-header">
                                        <strong>Grid Image Layout(Part of Services)</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <div v-if='grids.length < 6'>
                                            <div v-bind:class='g_class' v-html='g_message' v-if='g_message.length > 0'></div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="" class=" form-control-label">Grid Image (Preferred
                                                        size: 330 x 219)</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" @change='changeFile($event,"g")' class="form-control-file" accept="image/*">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="" class=" form-control-label">Title Text</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" v-model='g_title' placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="" class=" form-control-label">First Paragraph Text</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea v-model='g_paragraph' class="form-control" rows="6"> </textarea>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="card-footer">
                                                <button @click='addGridImage' class="btn btn-success btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Submit
                                                </button>
                                            </div>
                                        </div>
                                        <div class="table-responsive table-responsive-data2" v-if='grids.length > 0'>
                                            <table class="table table-data2">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Title</th>
                                                        <th>Comment</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="tr-shadow" v-for='grid in grids'>
                                                        <td>{{grid.title}}</td>
                                                        <td>{{grid.paragrah}}</td>
                                                        <td>{{grid.image | filename}}</td>
                                                        <td>
                                                            <button class="item" @click='removeTestimonials(test.serial)' title="Delete">
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

                            <!--Client Testimonials-->
                            <div class="col-lg-12" id='testimonies'>
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Clientelle Testimonials</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <div v-bind:class='t_class' v-html='t_message' v-if='t_message.length > 0'></div>
                                        <div class="row form-group">
                                            <div class="col col-md-12">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                    <input type="text" v-model='t_name' placeholder="Client's Full Name" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-12">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        Title/Designation
                                                    </div>
                                                    <input type="text" v-model='t_title' placeholder="Client's Title or Designation" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-12">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        Testimony Text
                                                    </div>
                                                    <textarea v-model='t_comment' class="form-control" rows="5"> </textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-footer">
                                            <button @click='addTestimonials' class="btn btn-success btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Submit
                                            </button>
                                        </div>
                                        <br>
                                        <hr>
                                        <br>
                                        <div class="table-responsive table-responsive-data2" v-if='testimonials.length > 0'>
                                            <table class="table table-data2">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Title</th>
                                                        <th>Comment</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="tr-shadow" v-for='test in testimonials'>
                                                        <td>{{test.name}}</td>
                                                        <td>{{test.title}}</td>
                                                        <td>{{test.comment}}</td>
                                                        <td>
                                                            <button class="item" @click='removeTestimonials(test.serial)' title="Delete">
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