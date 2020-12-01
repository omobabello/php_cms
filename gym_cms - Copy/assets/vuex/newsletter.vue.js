var app = new Vue({
    el: '#app',
    data: {
        subs: '',
    },
    methods:{
        extract(){
            axios.post('http://localhost/gym_cms/index.php/ExportNewsLetter')
                .then(res => {
                    this.subs = res.data; 
                })
        }
    },
    mounted(){
        $('#table').DataTable();
    }
})