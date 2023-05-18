const {createApp} = Vue;

createApp( {
    data() {
        return {
            apiUrl: 'server.php',
            taskList: [],
            //flag che determina il movimento dell'icona del cestino con valore booleano
            shake: false,
        }
    }, 
    methods: {
        getTaskList() {
            axios.get(this.apiUrl) .then(result => {
                this.taskList = result.data;
                console.log('pippo e paperino', this.taskList);
            });
        }
    },
    mounted() {
        this.getTaskList();
    }
}).mount('#app')