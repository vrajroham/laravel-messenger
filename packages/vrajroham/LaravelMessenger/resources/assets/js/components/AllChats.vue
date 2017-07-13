<template>
    <div>
        <div class="header">                
            <i class="fa fa-address-book" aria-hidden="true"></i> &nbsp;CHATS
        </div>
        <div class="body">
            <div class="lm-container">
                <div class="row">
                    <ul class="list-group">
                        <a class="list-group-item" @click="gotChat(user)" v-for="user in users">{{ user.name }} <span class="badge"><i class="fa fa-angle-right"></i></span> &nbsp; <!-- <span class="badge badge-danger">2</span> --></a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:['current'],
        data(){
            return{
                users:[]
            }
        },
        mounted() {
            console.log('Component mounted.')
            axios.get('messenger/all-users').then((response)=>{
                    this.users = response.data.users;
                },(error)=>{
                    console.log(error.statusText);
            });            
        },
        methods:{
            gotChat(user){
                this.$emit('onSelect','singlechat',user);
            }
        }
    }
</script>
