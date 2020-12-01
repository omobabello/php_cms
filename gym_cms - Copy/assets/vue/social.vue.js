var app = new Vue({
    el: '#app',
    data: {
        facebook: '',
        twitter: '',
        instagram: '',
        linkedIn: '',
        message: '',
        isError: false
    },
    methods: {
        addLink() {
            let message = '';
            let proceed = true;

            if (this.facebook && !this.isWebsite(this.facebook)) {
                message += 'Facebook link is not a valid website <br/>';
                proceed &= false;
            }

            if (this.twitter && !this.isWebsite(this.twitter)) {
                message += 'Twitter link is not a valid website <br/>';
                proceed &= false;
            }

            if (this.instagram && !this.isWebsite(this.instagram)) {
                message += 'Instagram link is not a valid website <br/>';
                proceed &= false;
            }

            if (this.linkedIn && !this.isWebsite(this.linkedIn)) {
                message += 'Linked In link is not a valid website <br/>';
                proceed &= false;
            }

            if (proceed) {
                this.clearMessage();
                
                let formData = this.toFormData({
                    facebook: this.facebook,
                    twitter: this.twitter,
                    instagram: this.instagram,
                    linkedIn: this.linkedIn
                })

                axios.post('http://localhost/gym_cms/index.php/AddSocialLinks', formData)
                    .then(ret => {
                        if (ret.data.status) {
                            this.displayMessage('Links successfully uploaded');
                        } else {
                            this.displayMessage('Operation Failed', true);
                        }
                    }).error(err => {
                        console.log(err.response)
                    })
            }else{
                this.displayMessage(message,true);
            }
        },
        getLinks() {
            axios.get('http://localhost/gym_cms/index.php/GetSocialLinks')
                .then(ret => {
                    this.facebook = ret.data.facebook
                    this.twitter = ret.data.twitter
                    this.instagram = ret.data.instagram
                    this.linkedIn = ret.data.linked_in
                })
        },
        isWebsite(web) {
            let pattern = /^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$/;
            return pattern.test(web);
        },
        toFormData(obj) {
            let formData = new FormData();
            for (key in obj) {
                formData.append(key, obj[key]);
            }
            return formData;
        },
        displayMessage(message, error = false) {
            this.isError = error;
            this.message = message;
        },
        clearMessage() {
            this.isError = false;
            this.message = ''
        }
    },
    computed: {
        messageClass() {
            return this.isError ? 'alert alert-danger' : 'alert alert-success';
        }
    },
    mounted(){
        this.getLinks();
    }
})