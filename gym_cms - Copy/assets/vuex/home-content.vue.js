var app = new Vue({
    el: '#app',
    data: {
        t_message: '', l_message: '', acc_message: '', g_message: '', b_message: '',
        t_class: '', l_class: '', acc_class: '', g_class: '', b_class: '',
        t_name: '', l_header: '', acc_header: '', g_title: '', b_title: '',
        t_title: '', l_paragraph: '', acc_paragraph: '', g_paragraph: '', b_subtitle: '',
        t_comment: '', l_bullets: '', g_image: '', b_image: '',
        testimonials: '', accords: '', grids: '', banners: '',
    },
    methods: {
        changeFile(evt, trg) {
            if (trg == 'g')
                this.g_image = evt.target.files[0];
            if (trg == 'b') {
                this.b_image = evt.target.files[0];
            }
        },
        getContents() {
            axios.get('http://localhost/gym_cms/index.php/GetHomeContents')
                .then(res => {
                    this.testimonials = res.data.tests;
                    this.accords = res.data.accords;
                    this.banners = res.data.banners;
                    this.grids = res.data.grids;
                    this.l_header = res.data.sec1Left.title;
                    this.l_paragraph = res.data.sec1Left.paragraph;
                    this.l_bullets = res.data.sec1Left.bullets.replace(/\,/g, '\n');
                })
        },
        uploadBanner() {
            if (!this.b_image || (this.b_image.size / 1024 / 1024) > 10) {
                this.b_class = 'alert alert-danger';
                this.b_message = 'Select an image file not more than 10MB';
            } else if (!(this.b_title && this.b_subtitle)) {
                this.b_class = 'alert alert-danger';
                this.b_message = 'Please fill all fields';
            } else {
                this.b_message = '';
                let formData = this.toFormData({
                    image: this.b_image,
                    title: this.b_title,
                    subtitle: this.b_subtitle
                });
                axios.post('http://localhost/gym_cms/index.php/UploadBanner/home-page', formData)
                    .then(res => {
                        this.banners = res.data.banners;
                    }).catch(err => {
                        console.log(err.response);
                    })
            }
        },
        addTestimonials() {
            if (!(this.t_name && this.t_title && this.t_comment)) {
                this.t_message = 'Please fill all fields';
                this.t_class = 'alert alert-danger';
            } else {
                this.t_message = '';
                let formData = this.toFormData({
                    name: this.t_name,
                    title: this.t_title,
                    comment: this.t_comment
                });
                axios.post('http://localhost/gym_cms/index.php/AddTestimonials', formData)
                    .then(res => {
                        if (res.data.status) {
                            this.testimonials = res.data.tests;
                            this.t_message = 'Testimony added';
                            this.t_class = 'alert alert-success';
                        } else {
                            this.t_message = 'Operation Failed';
                        }
                    })
            }
        },
        addAccordion() {
            if (!(this.acc_header && this.acc_paragraph)) {
                this.acc_message = 'Please fill all fields';
                this.acc_class = 'alert alert-danger';
            } else {
                this.acc_message = '';
                let formData = this.toFormData({
                    header: this.acc_header,
                    paragraph: this.acc_paragraph
                });
                axios.post('http://localhost/gym_cms/index.php/AddAccordion', formData)
                    .then(res => {
                        if (res.data.status) {
                            this.accords = res.data.accords;
                            this.acc_message = 'Accordion added';
                            this.acc_class = 'alert alert-success';
                        } else {
                            this.acc_message = 'Operation Failed :(';
                        }
                    }).catch(err => {
                        console.log(err.response)
                    })
            }
        },
        addGridImage() {
            if (!this.g_image || (this.g_image.size / 1024 / 1014) > 5) {
                this.g_class = 'alert alert-danger';
                this.g_message = 'Select Grid image not more than 5MB';
            } else {
                if (!(this.g_title && this.g_paragraph)) {
                    this.g_message = 'Please fill all fields';
                    this.g_class = 'alert alert-danger';
                } else {
                    let formData = this.toFormData({
                        image: this.g_image,
                        title: this.g_title,
                        paragraph: this.g_paragraph,
                    });
                    axios.post('http://localhost/gym_cms/index.php/AddGridImage', formData)
                        .then(res => {
                            this.grids = res.data.grids;
                        })
                }
            }
        },
        removeTestimonials(serial) {
            this.testimonials = this.testimonials.filter(obj => obj.serial != serial);
            axios.post(`http://localhost/gym_cms/index.php/RemoveTestimonials/${serial}`);
        },
        removeAccords(serial) {
            this.accords = this.accords.filter(obj => obj.serial != serial);
            axios.post(`http://localhost/gym_cms/index.php/RemoveAccordion/${serial}`);
        },
        removeBanner(serial) {
            this.banners = this.banners.filter(obj => obj.serial != serial);
            axios.post(`http://localhost/gym_cms/index.php/RemoveBanner/${serial}`);
        },
        addLeftContent() {
            if (!(this.l_header && this.l_paragraph)) {
                this.l_message = 'Please fill all fields';
                this.l_class = 'alert alert-danger';
            } else {
                console.log('Owo be');
                let formData = this.toFormData({
                    header: this.l_header,
                    paragraph: this.l_paragraph,
                    bullets: this.l_bullets.replace(/\n/g, ','),
                });
                axios.post('http://localhost/gym_cms/index.php/AddHomeSectionOneLeft', formData)
                    .then(res => {
                        if (res.data.status) {
                            this.l_message = 'Content Updated';
                            this.l_class = 'alert alert-success';
                        } else {
                            this.l_class = 'alert alert-danger';
                            this.l_message = 'Operation Failed :(';
                        }
                    })
            }
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
        this.getContents();
    }
})