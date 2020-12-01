var app = new Vue({
    el: '#app',
    data: {
        s1_message: '', s2_message: '', s3_message: '', s4_message: '', sp_message: '', b_message: '',
        s1_class: '', s2_class: '', s3_class: '', s4_class: '', sp_class: '', b_class: '',
        s1_title: '', s2_title: '', s3_title: '', s4_title: '',
        s1_article: '', s2_article: '', s3_article: '', s4_article: '', progress: 0, s3_image: true, s4_image: true,
        s3_video_url: '', s3_image_file: '', s4_image_file: '', sp_image_file: '', banner: '', hasBanner: false,
        logos: [],
    },
    methods: {
        changeFile(evt, trg) {
            if (trg == 'b')
                this.banner = evt.target.files[0];
            if (trg == 'c')
                this.s3_image_file = evt.target.files[0];
            if (trg == 'd')
                this.s4_image_file = evt.target.files[0];
            if (trg == 'e')
                this.sp_image_file = evt.target.files[0];
        },
        uploadBanner() {
            if (!this.banner || (this.banner / 1024 / 1024) > 10) {
                this.b_class = 'alert alert-danger';
                this.b_message = 'Select an image file not more than 10MB'
            } else {
                this.b_message = '';
                const config = {
                    onUploadProgress: function (progress) {
                        app.progress = Math.round((progress.loaded / progress.total) * 100);
                    }
                }
                let formData = this.toFormData({
                    image: this.banner
                });
                axios.post('http://localhost/gym_cms/index.php/UploadBanner/about', formData, config)
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
            }
        },
        addSectionOne() {
            let proceed = true;
            let message = '';
            if (!this.s1_title) {
                message += 'Enter title <br/>';
                proceed &= false;
            }

            if (!this.s1_article) {
                message += 'Enter Article';
                proceed &= false;
            }

            if (proceed) {
                this.s1_message = '';
                let formData = this.toFormData({
                    title: this.s1_title,
                    article: this.s1_article
                });
                axios.post('http://localhost/gym_cms/index.php/AddAboutSectionOne', formData)
                    .then(res => {
                        if (res.data.status) {
                            this.s1_message = 'Content Updated :)';
                            this.s1_class = 'alert alert-success';
                        } else {
                            this.s1_message = 'Operation Failed :(';
                            this.s1_class = 'alert alert-danger';
                        }
                    })
            } else {
                this.s1_message = message;
                this.s1_class = 'alert alert-danger';
            }
        },
        addSectionTwo() {
            let proceed = true;
            let message = '';
            if (!this.s2_title) {
                message += 'Enter title <br/>';
                proceed &= false;
            }

            if (!this.s2_article) {
                message += 'Enter Article';
                proceed &= false;
            }

            if (proceed) {
                this.s2_message = '';
                let formData = this.toFormData({
                    title: this.s2_title,
                    article: this.s2_article
                });
                axios.post('http://localhost/gym_cms/index.php/AddAboutSectionTwo', formData)
                    .then(res => {
                        if (res.data.status) {
                            this.s2_message = 'Content Updated :)';
                            this.s2_class = 'alert alert-success';
                        } else {
                            this.s2_message = 'Operation Failed :(';
                        }
                    })
            } else {
                this.s2_message = message;
                this.s2_class = 'alert alert-danger';
            }
        },
        addSectionThree() {
            let proceed = true;
            let message = '';
            let url = /^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$/;

            if (this.s3_video_url && !url.test(this.s3_video_url)) {
                message += 'Enter valid URL <br/>';
                proceed &= false;
            }

            if (this.s3_image_file && (this.s3_image_file.size / 1024 / 1024) > 2) {
                message += 'Seelect an image file less than 2MB <br/>';
                proceed &= false;
            }

            if (!this.s3_title) {
                message += 'Enter title <br/>';
                proceed &= false;
            }

            if (!this.s3_article) {
                message += 'Enter Article';
                proceed &= false;
            }

            if (proceed) {
                this.s3_message = '';
                let formData = this.toFormData({
                    title: this.s3_title,
                    article: this.s3_article,
                    video_url: this.s3_video_url,
                    file: this.s3_image_file
                });
                axios.post('http://localhost/gym_cms/index.php/AddAboutSectionThree', formData)
                    .then(res => {
                        if (res.data.status) {
                            this.s3_message = 'Content Updated :)';
                            this.s3_class = 'alert alert-success';
                        } else {
                            this.s3_message = 'Operation Failed :(';
                            this.s3_class = 'alert alert-danger';
                        }
                    })
                    .catch(err => {
                        console.log(err.response);
                    })
            } else {
                this.s3_message = message;
                this.s3_class = 'alert alert-danger';
            }
        },
        addSectionFour() {
            let proceed = true;
            let message = '';

            if (this.s4_image_file && (this.s4_image_file.size / 1024 / 1024) > 2) {
                message += 'Seelect an image file less than 2MB <br/>';
                proceed &= false;
            }

            if (!this.s4_title) {
                message += 'Enter title <br/>';
                proceed &= false;
            }

            if (!this.s4_article) {
                message += 'Enter Article';
                proceed &= false;
            }

            if (proceed) {
                this.s4_message = '';
                let formData = this.toFormData({
                    title: this.s4_title,
                    article: this.s4_article,
                    file: this.s4_image_file
                });
                axios.post('http://localhost/gym_cms/index.php/AddAboutSectionFour', formData)
                    .then(res => {
                        console.log(res.data);
                        if (res.data.status) {
                            this.s4_message = 'Content Updated :)';
                            this.s4_class = 'alert alert-success';
                        } else {
                            this.s4_message = 'Operation Failed :(';
                            this.s4_class = 'alert alert-danger';
                        }
                    })
                    .catch(err => {
                        console.log(err.response);
                    })
            } else {
                this.s4_message = message;
                this.s4_class = 'alert alert-danger';
            }
        },
        addSponsorLogo() {
            if (!this.sp_image_file || (this.s4_image_file.size / 1024 / 1024) > 2) {
                this.sp_message = 'Select an image file not more than 2MB';
                this.sp_class = 'alert alert-danger';
            } else {
                this.sp_message = '';
                axios.post('http://localhost/gym_cms/index.php/AddSponsorLogo', this.toFormData({ file: this.sp_image_file }))
                    .then(res => {
                        if (res.data.status) {
                            this.logos = res.data.logos;
                            this.sp_message = 'Logo Uploaded';
                            this.sp_class = 'alert alert-success';
                        } else {
                            this.sp_message = 'Operation Failed :(';
                            this.sp_class = 'alert alert-danger';
                        }
                    })
            }
        },
        loadContent() {
            axios.post('http://localhost/gym_cms/index.php/LoadAboutContent')
                .then(res => {
                    result = res.data;
                    this.s1_title = result.s1.title;
                    this.s1_article = result.s1.article;
                    this.s2_title = result.s2.title;
                    this.s2_article = result.s2.article;
                    this.s3_title = result.s3.title;
                    this.s3_article = result.s3.article;
                    this.s3_video_url = result.s3.video_url;
                    this.s4_title = result.s4.title;
                    this.s4_article = result.s4.article;
                    this.s3_image = !Boolean(result.s3.image_url);
                    this.s4_image = !Boolean(result.s4.image_url);
                    this.hasBanner = result.banner != null;
                    this.banner = result.banner;
                    this.logos = result.logos;
                })
                .catch(err => {
                    console.log(err.response);
                })
        },
        removeLogo(serial) {
            this.logos = this.logos.filter(obj => obj.serial != serial);
            axios.post('http://localhost/gym_cms/index.php/RemoveLogo', this.toFormData({ logo: serial }))
        },
        toFormData(obj) {
            let formData = new FormData();
            for (key in obj) {
                formData.append(key, obj[key]);
            }
            return formData;
        },
    },
    filters: {
        filename(file) {
            let name = file.split('/');
            return name[name.length - 1];
        }
    },
    mounted() {
        this.loadContent();
    }
})