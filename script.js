const { createApp } = Vue;

createApp({
    data() {
        return {
            dischi: [],
            selectedDisc: null,
        }
    },
    methods: {
        showDetails(disc) {
            this.selectedDisc = disc;
        },

        hideDetails() {
            this.selectedDisc = null;
        }
    },
    mounted() {
        axios
            .get("http://localhost:8888/Boolean-BE/php-dischi-json/server.php")
            .then(resp => {
                this.dischi = resp.data.results;
            })
    },
}).mount("#app");
