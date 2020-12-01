              <!-- MAIN CONTENT-->
              <div class="main-content" id='app'>
                  <div class="section__content section__content--p30">
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="overview-wrap">
                                      <h2 class="title-1">Blog Link</h2>
                                  </div>
                              </div>
                          </div>
                          <div class="row"><br></div>
                          <div class="col-lg-12">
                              <div class="card">
                                  <div class="card-header">Enter link to your blog </div>
                                  <div v-bind:class='messageClass' style='margin:1em 1em 0' v-html='message' v-if='message.length > 0'></div>
                                  <div class="card-body card-block">
                                      <div class="form-group">
                                          <div class="input-group">
                                              <div class="input-group-addon">Blog link</div>
                                              <input type="text" v-model="blog_link" class="form-control">
                                              <div class="input-group-addon">
                                                  <i class="fa fa-globe"></i>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-actions form-group">
                                          <button class="btn btn-success btn-sm" @click='addBlog'>Submit</button>
                                      </div>
                                  </div>
                              </div>
                          </div>