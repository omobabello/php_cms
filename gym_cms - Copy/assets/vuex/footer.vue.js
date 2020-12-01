var app = new Vue({
    el: '#app',
    data: {
        about: '',
        email: '',
        phone: '',
        address: '',
        credit: '',
        isError: false,
        message: '',
    },
    methods: {
        submitContent() {
            let proceed = true;
            let message = '';
            let email_regex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
            let phone_regex = /^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/;

            if (this.email && !email_regex.test(this.email)) {
                proceed &= false;
                message += 'Invalid email format <br/>';
            }

            if (this.phone && !phone_regex.test(this.phone)) {
                proceed &= false;
                message += 'Invalid phone format <br/>';
            }

            if (proceed) {
                let formData = this.toFormData({
                    about: this.about,
                    credit: this.credit
                })
                axios.post('http://localhost/gym_cms/index.php/AddFooterContents', formData)
                    .then(res => {
                        if (res.data.status) {
                            this.displayMessage(':). Content updated', 1);
                        } else {
                            this.displayMessage(':( Operation Failed', 1, true);
                        }
                    })
                    .catch(err => {
                        console.log(err.response.data);
                    })

            } else {
                this.displayMessage(message, 1, true);
            }
        },
        getContents() {
            axios.post('http://localhost/gym_cms/index.php/GetFooterContents')
                .then(res => {
                    this.about = res.data.about;
                    this.credit = res.data.credits;
                })
        },
        toFormData(obj) {
            let formData = new FormData();
            for (key in obj) {
                formData.append(key, obj[key]);
            }
            return formData;
        },
        displayMessage(message, up = 1, error = false) {
            this.isError = error;
            this.message = message;
        },
        clearMessage() {
            this.isError = false;
            this.message = '';
        }
    },
    computed: {
        messageClass() {
            return this.isError ? 'alert alert-danger' : 'alert alert-success';
        }
    },
    mounted(){
        this.getContents();
    }
})