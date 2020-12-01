              <!-- MAIN CONTENT-->
              <div class="main-content" id='app'>
                  <div class="section__content section__content--p30">
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="overview-wrap">
                                      <h2 class="title-1">Social Media Links</h2>
                                  </div>
                              </div>
                          </div>
                          <div class="row"><br></div>
                          <div class="col-lg-12">
                              <div class="card">
                                  <div class="card-header">Front Page Top Header social Links </div>
                                  <div v-bind:class='messageClass' style='margin:1em 1em 0' v-html='message' v-if='message.length > 0'></div>
                                  <div class="card-body card-block">
                                      <div class="form-group">
                                          <div class="input-group">
                                              <div class="input-group-addon">Facebook</div>
                                              <input type="text" v-model="facebook" class="form-control">
                                              <div class="input-group-addon">
                                                  <i class="fa fa-facebook-square"></i>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="input-group">
                                              <div class="input-group-addon">Twitter</div>
                                              <input type="text" v-model="twitter" class="form-control">
                                              <div class="input-group-addon">
                                                  <i class="fa fa-twitter"></i>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="input-group">
                                              <div class="input-group-addon">Instagram</div>
                                              <input type="text" v-model="instagram" class="form-control">
                                              <div class="input-group-addon">
                                                  <i class="fa fa-instagram"></i>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="input-group">
                                              <div class="input-group-addon">LinkedIn</div>
                                              <input type="text" v-model='linkedIn' class="form-control">
                                              <div class="input-group-addon">
                                                  <i class="fa fa-linkedin-square"></i>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-actions form-group">
                                          <button class="btn btn-success btn-sm" @click='addLink'>Submit</button>
                                      </div>
                                  </div>
                              </div>
                          </div>