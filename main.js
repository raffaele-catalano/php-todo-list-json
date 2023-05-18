const {createApp} = Vue;

createApp( {
    data() {
        return {
            apiUrl: 'server.php',
            //flag che determina il movimento dell'icona del cestino con valore booleano
            shake: false,
        }
    }, 
    methods: {
        getApi() {
            console.warn('prova sa sa');
        }
    },
    mounted() {
        this.getApi();
    }
}).mount('#app')