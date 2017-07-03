<template>
    <div>
        <div class="header">                
            <i class="fa fa-address-book" aria-hidden="true"></i> &nbsp;CHATS
        </div>
        <div class="body">
            <div class="lm-container">
                <div class="row">
                    <ul class="list-group">
                        <a class="list-group-item" href="#" @click="gotChat">Vaibhavraj Sambhaji Roham <span class="badge"><i class="fa fa-angle-right"></i></span> &nbsp; <span class="badge badge-danger">2</span></a>
                        <a class="list-group-item">Vaibhavraj Sambhaji Roham <span class="badge"><i class="fa fa-angle-right"></i></span> &nbsp; <span class="badge badge-danger">2</span></a>
                        <a class="list-group-item">Vaibhavraj Sambhaji Roham <span class="badge"><i class="fa fa-angle-right"></i></span> &nbsp; <span class="badge badge-danger">2</span></a>
                        <a class="list-group-item">Vaibhavraj Sambhaji Roham <span class="badge"><i class="fa fa-angle-right"></i></span> &nbsp; <span class="badge badge-danger">2</span></a>
                    </ul>
                </div>
            </div>
        </div>
    </div>    
</template>

<script>
    export default {
        props:['current'],
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            gotChat(){
                this.$emit('onSelect','singlechat');
            }
        }
    }
</script>
