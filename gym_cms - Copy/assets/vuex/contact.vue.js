var app = new Vue({
    el: '#app',
    data: {
        message: '',
        address: '',
        country: '',
        email: '',
        phone: "",
        hours: '',
        website: '',
        a_title: '',
        article: '',
        progress: 0,
        b_message: '',
        b_class: '',
        hasBanner: false,
        banner: '',
    },
    methods: {
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
                axios.post('http://localhost/gym_cms/index.php/UploadBanner/contact', formData, config)
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
        saveContact() {
            let proceed = true;
            let email_regex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

            if (!this.allFieldsFilled()) {
                this.message = 'Please fill all fields';
                proceed &= false;
            }

            if (!email_regex.test(this.email)) {
                this.message = 'Email is invalid';
                proceed &= false;
            }

            if (proceed) {
                let formData = this.toFormData({
                    address: this.address,
                    country: this.country,
                    email: this.email,
                    phone: this.phone,
                    hours: this.hours,
                    website: this.website,
                    article: this.article,
                    title: this.a_title
                });
                axios.post('http://localhost/gym_cms/index.php/AddContact', formData)
                    .then(res => {
                        if (res.data.status) {
                            swal('Contact Saved Successfully');
                        } else {
                            this.message = 'Operation Failed :(';
                        }
                    })
            }
        },
        getContact() {
            axios.post('http://localhost/gym_cms/index.php/GetBanners')
            .then(res => {
                banner = res.data.filter(obj => obj.page == 'contact');
                if(banner.length > 0){
                    this.hasBanner = true; 
                    this.banner = banner[0].link;
                }
            });

            axios.post('http://localhost/gym_cms/index.php/GetContact')
                .then(res => {
                    this.a_title = res.data.title;
                    this.article = res.data.article;
                    this.country = res.data.country;
                    this.email = res.data.email;
                    this.website = res.data.website;
                    this.phone = res.data.phone;
                    this.address = res.data.address;
                    this.hours = res.data.hours;
                })
        },
        allFieldsFilled() {
            return this.address && this.country && this.phone && this.hours && this.website && this.a_title && this.article;
        },
        toFormData(obj) {
            let formData = new FormData();
            for (key in obj) {
                formData.append(key, obj[key]);
            }
            return formData;
        }
    },
    mounted() {
        this.getContact();
    }
})