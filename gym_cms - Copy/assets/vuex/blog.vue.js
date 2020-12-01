var app = new Vue({
    el: '#app',
    data: {
        blog_link: '',
        message: '',
        isError: false
    },
    methods: {
        addBlog() {
            let message = '';
            let proceed = true;

            if (!this.isWebsite(this.blog_link)) {
                message += 'Blog link is not a website <br/>';
                proceed &= false;
            }

            if (proceed) {
                this.clearMessage();

                let formData = this.toFormData({
                   blog_link: this.blog_link
                })

                axios.post('http://localhost/gym_cms/index.php/AddBlog', formData)
                    .then(ret => {
                        if (ret.data.status) {
                            this.displayMessage('Link successfully uploaded');
                        } else {
                            this.displayMessage('Operation Failed', true);
                        }
                    })
            } else {
                this.displayMessage(message, true);
            }
        },
        getLinks() {
            axios.get('http://localhost/gym_cms/index.php/GetBlog')
                .then(ret => {
                    this.blog_link = ret.data.blog_link;
                    console.log(this.blog_link);
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
    mounted() {
       this.getLinks();
    }
})