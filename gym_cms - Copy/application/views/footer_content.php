              <!-- MAIN CONTENT-->
              <div class="main-content" id='app'>
                  <div class="section__content section__content--p30">
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="overview-wrap">
                                      <h2 class="title-1">Footer Content</h2>
                                      <button class="au-btn au-btn-icon au-btn--green">
                                          <a href="newsletter.html" style="color: white">Newsletter Subscribers</a></button>
                                  </div>
                              </div>
                          </div>
                          <div class="row"><br></div>

                          <div class="row"><br></div>
                          <div class="col-lg-12">
                              <div class="card">
                                  <div class="card-header">Top Footer Content</div>
                                  <div class="card-body card-block">
                                      <div v-bind:class="messageClass" v-html='message' v-if='message.length > 0'></div>
                                      <div class="form-group">
                                          <div class="input-group">
                                              <div class="input-group-addon">About Company</div>
                                              <textarea v-model="about" class="form-control" cols="50" rows="10">
                                                   </textarea>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <div class="input-group">
                                              <div class="input-group-addon">Footer Credits Text</div>
                                              <textarea v-model="credit" class="form-control" cols="10" rows="2">
                                                     </textarea>
                                          </div>
                                      </div>
                                      <div class="form-actions form-group">
                                          <button @click='submitContent()' class="btn btn-success btn-sm">Submit</button>
                                      </div>
                                  </div>
                              </div>
                          </div>