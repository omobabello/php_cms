function editPricing(serial) {
    app.showEditPricing(serial);
}

function deletePricing(serial) {
    app.deletePricing(serial);
}

function editArt(serial) {
    app.showEditArticle(serial);
}

function deleteArt(serial) {
    app.deleteArticle(serial);
}

var app = new Vue({
    el: '#app',
    data: {
        hasBanner: false,
        banner: '',
        b_message: '',
        b_class: 'alert alert-danger',
        progress: 0,
        newPricing: false,
        newArticle: false,
        p_title: '',
        currency: '',
        duration: '',
        amount: '',
        description: '',
        a_title: '',
        article: '',
        p_message: '',
        a_message: '',
        pricingUrl: 'http://localhost/gym_cms/index.php/AddPricing',
        articleUrl: 'http://localhost/gym_cms/index.php/AddPricingArticle',
    },
    methods: {
        changeFile(event, owner) {
            this.banner = event.target.files[0];
        },
        changeBanner(){
            this.hasBanner = false;
        },
        showPanel(panel) {
            this.newPricing = (panel == 'pricing') ? true : false;
            this.newArticle = (panel == 'article') ? true : false;
        },
        showEditPricing(serial) {
            this.pricingUrl = `http://localhost/gym_cms/index.php/EditPricing/${serial}`;
            axios.post(`http://localhost/gym_cms/index.php/GetPricing/${serial}`)
                .then(res => {
                    this.p_title = res.data.title;
                    this.currency = res.data.currency;
                    this.description = res.data.description.replace(/\,/g, '\n');
                    this.amount = res.data.amount;
                    this.duration = res.data.duration;
                    this.showPanel('pricing');
                })
                .catch(err => {
                    console.log(err);
                });
        },
        showEditArticle(serial) {
            this.articleUrl = `http://localhost/gym_cms/index.php/EditPricingArticle/${serial}`;

            axios.post(`http://localhost/gym_cms/index.php/GetPricingArticle/${serial}`)
                .then(res => {
                    this.a_title = res.data.title;
                    this.article = res.data.article;
                    this.showPanel('article');
                })
                .catch(err => {
                    console.log(err);
                });
        },
        getPricings() {
            $('#p_table').DataTable({
                serverSide: true,
                ajax: {
                    url: 'http://localhost/gym_cms/index.php/GetPricings',
                    type: 'post',
                    error: function (e) {
                        console.log(e.responseText)
                    }
                }
            });

            axios.post('http://localhost/gym_cms/index.php/GetBanners')
            .then(res => {
                banner = res.data.filter(obj => obj.page == 'pricing');
                if(banner.length > 0){
                    this.hasBanner = true; 
                    this.banner = banner[0].link;
                }
            });
        },
        getArticles() {
            $('#a_table').DataTable({
                serverSide: true,
                ajax: {
                    url: 'http://localhost/gym_cms/index.php/GetPricingArticles',
                    type: 'post',
                    error: function (e) {
                        console.log(e.responseText)
                    }
                }
            })
        },
        valid_file(file, max) {
            if (file) {
                return (file.size / 1024 / 1024) <= max;
            } else {
                return false;
            }
        },
        uploadBanner() {
            if (this.valid_file(this.banner, 10)) {
                this.b_message = '';
                const config = {
                    onUploadProgress: function (progress) {
                        app.progress = Math.round((progress.loaded / progress.total) * 100);
                    }
                }
                let formData = this.toFormData({
                    image: this.banner
                });
                axios.post('http://localhost/gym_cms/index.php/UploadBanner/pricing', formData, config)
                    .then(res => {
                        if (res.data.status) {
                            this.progress = 0;
                            this.banner = res.data.file;
                            this.hasBanner = true;
                        } else {
                            this.b_message = res.data.message;
                            this.b_class = 'alert alert-danger';
                        }
                    }).catch(err => {
                        console.log(err.response)
                    })
            } else {
                this.b_class = 'alert alert-danger';
                this.b_message = 'Select an image file not more than 10MB'
            }
        },
        savePricing() {
            let message = '';
            let proceed = true;

            if (!this.p_title) {
                message += 'Enter a title <br/>';
                proceed &= false;
            }

            if (!this.currency) {
                message += 'Enter a currency <br/>';
                proceed &= false;
            }

            if (!this.amount) {
                message += 'Enter an amount <br/>';
                proceed &= false;
            }

            if (!this.duration) {
                message += 'Enter a duration <br/>';
                proceed &= false;
            }

            if (!this.description) {
                message += 'Enter a description <br/>';
                proceed &= false;
            }

            if (proceed) {
                let formData = this.toFormData({
                    title: this.p_title,
                    amount: this.amount,
                    description: this.description.replace(/\n/g, ','),
                    currency: this.currency,
                    duration: this.duration
                })
                axios.post(this.pricingUrl, formData)
                    .then(res => {
                        if (res.data.status) {
                            app.closePanel()
                        } else {
                            this.p_message = 'Operation Failed :(';
                        }
                    })
            } else {
                this.p_message = message;
            }
        },
        deletePricing(serial) {
            swal({
                title: 'Delete?',
                text: 'Are you sure you want to delete ?',
                closeOnClickOutside: false,
                buttons: {
                    cancel: {
                        className: 'btn btn-default',
                        text: 'Cancel',
                        visible: true
                    },
                    confirm: {
                        className: 'btn btn-danger',
                        text: 'Yes, Delete',
                        visible: true,
                        value: 'delete'
                    }
                }
            }).then(btn => {
                if (btn == 'delete') {
                    axios.post(`http://localhost/gym_cms/index.php/DeletePricing/${serial}`)
                        .then(res => {
                            $('#p_table').DataTable().ajax.reload();
                        })
                }
            })

        },
        saveArticle() {
            let message = '';
            let proceed = true;

            if (!this.a_title) {
                message += 'Enter Title <br/>';
                proceed &= false;
            }

            if (!this.article) {
                message += 'Enter Article Content';
                proceed &= false;
            }

            if (proceed) {
                let formData = this.toFormData({
                    article: this.article,
                    title: this.a_title
                });
                axios.post(this.articleUrl, formData)
                    .then(res => {
                        if (res.data.status) {
                            app.closePanel();
                        } else {
                            this.a_message = 'Operation Failed :(';
                        }
                    })
                    .catch(err => {
                        console.log(err)
                    })
            } else {
                this.a_message = message;
            }

        },
        deleteArticle(serial) {
            swal({
                title: 'Delete?',
                text: 'Are you sure you want to delete ?',
                closeOnClickOutside: false,
                buttons: {
                    cancel: {
                        className: 'btn btn-default',
                        text: 'Cancel',
                        visible: true
                    },
                    confirm: {
                        className: 'btn btn-danger',
                        text: 'Yes, Delete',
                        visible: true,
                        value: 'delete'
                    }
                }
            }).then(btn => {
                if (btn == 'delete') {
                    axios.post(`http://localhost/gym_cms/index.php/DeletePricingArticle/${serial}`)
                        .then(res => {
                            $('#a_table').DataTable().ajax.reload();
                        })
                }
            })

        },
        toFormData(obj) {
            let formData = new FormData();
            for (key in obj) {
                formData.append(key, obj[key]);
            }
            return formData;
        },
        closePanel() {
            this.newPricing = false;
            this.newArticle = false;
            this.title = '';
            this.currency = '';
            this.duration = '';
            this.description = '';
            this.amount = '';
            this.a_title = '';
            this.article = '';
            this.savePricing = 'http://localhost/gym_cms/index.php/AddPricing'
            this.saveArticle = 'http://localhost/gym_cms/index.php/AddPricingArticle';
            $('#p_table').DataTable().ajax.reload();
            $('#a_table').DataTable().ajax.reload();
        }
    },
    mounted() {
        this.getPricings();
        this.getArticles();
    }
})