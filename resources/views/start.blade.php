<html>
    <head>
        <title> Initial </title>
        <meta charset='UTF-8' />
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    </head>
    <body>
        <div id='app'>
            <div> <button v-on:click='createNewSheet'> Criar nova Ficha </button> </div>
            <div id='newSheetBox' v-if='showNewSheet'>
                <div class='attribute' v-for='attribute in newSheet.attributes'>
                    <div v-bind:onclick='JSON.parse(attribute.listener).click'>@{{ attribute.name }}</div>
                </div>
            </div>
        </div>
    </body>


<script>
    const app = new Vue({
        el: '#app',
        data: {
            showNewSheet: false,
            newSheet: '',
            sheets: [],
            standardSheet: '',
        },
        methods: {
            async loadData(){
                var response = await axios.get('/get/system/standard');
                this.standardSheet = JSON.parse(response.data.system.standard_sheet);
            },
            createNewSheet(){
                this.showNewSheet = true;
                this.newSheet = JSON.parse(JSON.stringify(this.standardSheet));
            },
            saveNewSheet(){

            },
            rollDice(exp, msg){
                console.log(exp + ' ' + msg);
            },
        },
        created: async function (){
            this.loadData();
        },
    });

</script>

<style>
</style>

</html>
    