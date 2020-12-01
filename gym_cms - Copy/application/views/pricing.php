     <!-- MAIN CONTENT-->
     <div class="main-content" id='app'>
         <div class="section__content section__content--p30">
             <div class="container-fluid">
                 <div class="row">
                     <div class="col-md-12">
                         <div class="overview-wrap">
                             <h2 class="title-1">Pricing Content</h2>
                         </div>
                     </div>
                 </div>
                 <div class="row"><br></div>

                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <strong>Pricing Banner</strong>
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

                 <div class="col-lg-12" v-show='newPricing'>
                     <div class="card">
                         <div class="card-header">
                             <strong>Pricing Item </strong>
                             <button class="btn btn-default close" @click='closePanel()'><i class="fa fa-times-circle"></i></button>
                         </div>
                         <div class="card-body card-block">
                             <div class="alert alert-danger" v-html='p_message' v-if='p_message.length > 0'></div>
                             <div class="row form-group">
                                 <div class="col col-md-3">
                                     Background Active (Primary colour)
                                 </div>
                                 <div class="col col-md-9">
                                     <label class="switch switch-text switch-danger switch-pill">
                                         <input type="checkbox" class="switch-input" checked="true">
                                         <span data-on="On" data-off="Off" class="switch-label"></span>
                                         <span class="switch-handle"></span>
                                     </label>
                                 </div>
                             </div>

                             <div class="row form-group">
                                 <div class="col col-md-3">
                                     <label class="form-control-label">
                                         Service Price Title
                                     </label>
                                 </div>
                                 <div class="col col-md-9">
                                     <input type="text" class="form-control" placeholder="" v-model='p_title' />
                                 </div>
                             </div>

                             <div class="row form-group">
                                 <div class="col col-md-3">
                                     <label class="form-control-label">
                                         Pricing
                                     </label>
                                 </div>
                                 <div class="col col-md-1">
                                     <label class="form-control-label">
                                         Currency
                                     </label>
                                 </div>
                                 <div class="col col-md-2">
                                     <input type="text" class="form-control" placeholder="E.g. $ or ₦" v-model='currency' />
                                 </div>
                                 <div class="col col-md-1">
                                     <label class="form-control-label">
                                         Amount
                                     </label>
                                 </div>
                                 <div class="col col-md-2">
                                     <input type="number" min='1' class="form-control" placeholder="E.G 450.99" v-model='amount' />
                                 </div>
                                 <div class="col col-md-1">
                                     <label class="form-control-label">
                                         Duration
                                     </label>
                                 </div>
                                 <div class="col col-md-2">
                                     <input type="text" class="form-control" placeholder="Per year or Per Month" v-model='duration' />
                                 </div>
                             </div>

                             <div class="row form-group">
                                 <div class="col col-md-3">
                                     <label class="form-control-label">
                                         Description
                                     </label>
                                     <div class="alert alert-info">Seperate Points with newline(Enter Key)</div>
                                 </div>
                                 <div class="col col-md-9">
                                     <textarea class='form-control' cols="30" rows="10" v-model='description'></textarea>
                                 </div>
                             </div>

                             <div class="card-footer">
                                 <button @click='savePricing()' class="btn btn-success btn-sm">
                                     <i class="fa fa-dot-circle-o"></i> Submit
                                 </button>
                             </div>
                         </div>
                     </div>
                 </div>


                 <div class="container" v-show='newArticle'>
                     <div class="card">
                         <div class="card-header">
                             <strong>Red BG Column Contentz</strong>
                             <button class="btn btn-default close" @click='closePanel()'><i class="fa fa-times-circle"></i></button>
                         </div>
                         <div class="card-body card-block">
                             <div class="alert alert-danger" v-html='a_message' v-if='a_message.length > 0'></div>
                             <div class="row form-group">
                                 <div class="col col-md-3">
                                     <label class="form-control-label">
                                         Title
                                     </label>
                                 </div>
                                 <div class="col col-md-9">
                                     <input type="text" class="form-control" placeholder="" v-model='a_title' />
                                 </div>
                             </div>
                             <div class="row form-group">
                                 <div class="col col-md-3">
                                     <label class="form-control-label">
                                         Article
                                     </label>
                                 </div>
                                 <div class="col col-md-9">
                                     <textarea v-model='article' class="form-control" rows="7"> </textarea>
                                 </div>
                             </div>
                             <div class="card-footer">
                                 <button @click='saveArticle()' class="btn btn-success btn-sm">
                                     <i class="fa fa-dot-circle-o"></i> Submit
                                 </button>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="container row col-lg-12" v-show='!(newPricing || newArticle)'>
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-header">
                                 <strong>Pricing</strong>
                             </div>
                             <div class="card-body card-block">
                                 <button class="btn btn-primary" @click='showPanel("pricing")'><i class="fa fa-plus"></i> Add New Pricing</button><br><br>
                                 <div class="table-responsive table-responsive-data2">
                                     <table class="table table-data2" id='p_table'>
                                         <thead>
                                             <tr>
                                                 <th>Package Title</th>
                                                 <th>Price</th>
                                                 <th>Description excerpt</th>
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

                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-header">
                                 <strong>Red BG Column Contents</strong>
                             </div>
                             <div class="card-body card-block">
                                 <button class="btn btn-primary" @click='showPanel("article")'><i class="fa fa-plus"></i> Add New Article</button><br><br>
                                 <div class="table-responsive table-responsive-data2">
                                     <table class="table table-data2" id='a_table'>
                                         <thead>
                                             <tr>
                                                 <th>Package Title</th>
                                                 <th>price</th>
                                                 <th>Description excerpt</th>
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

                 </div>
             </div>
         </div>
     </div>