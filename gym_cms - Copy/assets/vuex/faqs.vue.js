function editFaq(serial) {
    app.editFaq(serial);
}

function deleteFaq(serial) {
    app.deleteFaq(serial);
}

var app = new Vue({
    el: '#app',
    data: {
        saveUrl: 'http://localhost/gym_cms/index.php/AddFaq',
        message: '',
        newFaq: false,
        title: '',
        article: '',
        banner: '',
        hasBanner: false,
        b_message: '',
        b_class: '',
        progress: 0
    },
    methods: {
        showNewFaq() {
            this.newFaq = true;
        },
        changeFile(event, owner) {
            if (owner == 'banner')
                this.banner = event.target.files[0];
            if (owner == 'service')
                this.service_image = event.target.files[0];
        },
        valid_file(file, max) {
            if (file) {
                return (file.size / 1024 / 1024) <= max;
            } else {
                return false;
            }
        },
        changeBanner(){
            this.hasBanner = false;
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
                axios.post('http://localhost/gym_cms/index.php/UploadBanner/faq', formData, config)
                    .then(res => {
                        if (res.data.status) {
                            this.progress = 0;
                            this.banner = res.data.file;
                            this.hasBanner = true;
                        }else{
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
        editFaq(serial) {
            this.newFaq = true;
            this.saveUrl = `http://localhost/gym_cms/index.php/EditFaq/${serial}`;
            axios.post(`http://localhost/gym_cms/index.php/GetFaq/${serial}`)
                .then(res => {
                    this.title = res.data.title;
                    this.article = res.data.article;
                })
        },
        closeNewFaq() {
            this.newFaq = false;
            this.message = '';
            this.saveUrl = 'http://localhost/gym_cms/index.php/AddFaq';
        },
        getFaqs() {
            $('#table').DataTable({
                serverSide: true,
                ajax: {
                    url: 'http://localhost/gym_cms/index.php/GetFaqs',
                    type: 'post',
                    error: function (e) {
                        console.log(e.responseText)
                    }
                }
            });

            axios.post('http://localhost/gym_cms/index.php/GetBanners')
            .then(res => {
                banner = res.data.filter(obj => obj.page == 'faq');
                if(banner.length > 0){
                    this.hasBanner = true; 
                    this.banner = banner[0].link;
                }
            });
        },
        saveFaq() {
            let message = '';
            let proceed = true;

            if (!this.title) {
                message += 'Enter a title <br/>';
                proceed &= false;
            }

            if (!this.article) {
                message += 'Enter a article <br/>';
                proceed &= false;
            }

            let formData = this.toFormData({
                title: this.title,
                article: this.article
            })

            if (proceed) {
                axios.post(this.saveUrl, formData)
                    .then(res => {
                        if (res.data.status) {
                            $('#table').DataTable().ajax.reload();
                            this.closeNewFaq();
                            this.article = '';
                            this.title = '';
                        } else {
                            this.message = 'Operation Failed. :('
                        }
                    })
                    .catch(err => {
                        console.log(err);
                    })
            } else {
                this.message = message;
            }
        },
        deleteFaq(serial) {
            swal({
                title: 'Delete?',
                text: 'Are you sure you want to delete this FAQ ?',
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
                    axios.post('http://localhost/gym_cms/index.php/DeleteFaq', this.toFormData({ serial: serial }))
                        .then(res => {
                            $('#table').DataTable().ajax.reload();
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
    },
    mounted() {
        this.getFaqs();
    }
})