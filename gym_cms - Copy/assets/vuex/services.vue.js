function deleteService(serial) {
    app.deleteService(serial);
}

var app = new Vue({
    el: '#app',
    data: {
        shrinkTable: false,
        title: '',
        description: '',
        details: '',
        service_image: '',
        message: '',
        b_message: '',
        b_class: '',
        progress: 0,
        services: '',
        banner: '',
        hasBanner: false,
    },
    methods: {
        changeFile(event, owner) {
            if (owner == 'banner')
                this.banner = event.target.files[0];
            if (owner == 'service')
                this.service_image = event.target.files[0];
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
                axios.post('http://localhost/gym_cms/index.php/UploadBanner/service', formData, config)
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
        getServices() {
            axios.post('http://localhost/gym_cms/index.php/GetBanners')
                        .then(res => {
                            banner = res.data.filter(obj => obj.page == 'service');
                            if(banner.length > 0){
                                this.hasBanner = true; 
                                this.banner = banner[0].link;
                            }
                        });
            axios.post('http://localhost/gym_cms/index.php/GetServices')
                .then(res => {
                    this.services = res.data; 
                })
        },
        addService() {
            let message = '';
            let proceed = true;

            if(! this.valid_file(this.service_image,2) ){
                message += 'Upload valid image file not more than 2MB<br/>';
                proceed &= false;
            }

            if (!this.title) {
                message += 'Enter a title<br/>';
                proceed &= false;
            }

            if (!this.description) {
                message += 'Describe the service<br/>';
                proceed &= false;
            }

            if (proceed) {

                this.message = '';

                let formData = this.toFormData({
                    title: this.title,
                    description: this.description,
                    details: (this.details.split('\n')).join(','),
                    image: this.service_image
                })
                axios.post('http://localhost/gym_cms/index.php/AddService', formData)
                    .then(res => {
                        if (res.data.status) {
                            this.services = res.data.services;
                            this.shrinkTable = false;
                        } else {
                            this.message = ':( Operation Failed.';
                        }
                    })
                    .catch(err => {
                        console.log(err.response);
                    })
            } else {
                this.message = message;
            }

        },
        deleteService(serial) {
            swal({
                title: 'Delete?',
                text: 'Are you sure you want to delete this service ?',
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
                    this.services = this.services.filter(obj => obj.serial != serial);
                    axios.post('http://localhost/gym_cms/index.php/RemoveService', this.toFormData({ serial: serial }))
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
        toFormData(obj) {
            let formData = new FormData();
            for (key in obj) {
                formData.append(key, obj[key]);
            }
            return formData;
        },
        separate(doc){
            return doc.replace(/\,/g,'<br/>');
        }
    },
    mounted() {
        this.getServices();
    }
})