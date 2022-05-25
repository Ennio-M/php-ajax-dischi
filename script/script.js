const app = new Vue({
    el: '#app',
    data: {
        albums: [],
        apiPath: './server.php'
    },
    methods: {

    },
    mounted() {
        axios.get(this.apiPath).then((res) => {
            this.albums = res.data;
            //console.log(this.albums);
        })
    }
});