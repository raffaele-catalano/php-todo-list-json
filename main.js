const {createApp} = Vue;

createApp( {
    data() {
        return {
            apiData: 'server.php',
            taskList: [],
            newTask: '',
            //TODO: flag che determina il movimento dell'icona del cestino con valore booleano
            shake: false,
        }
    }, 
    methods: {
        getData() {
            axios.get(this.apiData) .then(result => {
                this.taskList = result.data;
                    console.warn('lettura task------>', this.taskList);
            });
        },
        addNewTask() {
            const data = new FormData ();
            data.append('task', this.newTask);
            data.append('done', false);

            axios.post(this.apiData, data)
            .then(response => {
                    this.newTask = '';
                    this.taskList = response.data;
                        console.warn('ricezione task ------>', this.taskList);
                })
        },
        removeTask(index) {
            if(confirm('Are you sure?')) {
                const data = new FormData ();
                data.append('taskToDelete', index);
                axios.post(this.apiData, data)
                .then(response => {
                    this.taskList = response.data;
                        console.error('indice array task da eliminare --->',this.taskList);
                    })
            }
        }
    },
    mounted() {
        this.getData();
    }
}).mount('#app')