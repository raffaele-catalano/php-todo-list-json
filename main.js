const {createApp} = Vue;

createApp( {
    data() {
        return {
            apiUrl: 'server.php',
            taskList: [],
            newTask: '',
            //flag che determina il movimento dell'icona del cestino con valore booleano
            shake: false,
        }
    }, 
    methods: {
        getData() {
            axios.get(this.apiUrl) .then(result => {
                this.taskList = result.data;
                console.warn('lettura task------>', this.taskList);
            });
        },
        addNewTask() {
            // const data = {
            //     toDoTask: {
            //         task: this.newTask, 
            //         done: false
            //     }

            // }
            // axios.post(this.apiUrl, data, {
            //     headers: {'Content-Type': 'multipart/form-data'}
            // }).then(response => {
            //     this.newTask = '';
            //     this.taskList = response.data;
            //     console.error('ricezione task ------>', this.taskList);
            // })

            const data = new FormData ();
            data.append('task', this.newTask);
            data.append('done', false);

            axios.post(this.apiUrl, data)
            .then(response => {
                    this.newTask = '';
                    this.taskList = response.data;
                    console.error('ricezione task ------>', this.taskList);
                })
        }
    },
    mounted() {
        this.getData();
    }
}).mount('#app')