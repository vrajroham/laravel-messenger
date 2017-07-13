<template>
    <div>
        <div class="messenger">s
            <a href="#" style="color:#0a6ac9"><i id="messenger-btn" class="fa fa-envelope fa-2x"></i></a>
        </div>
        <div class="chatbox hidden" id="messenger-chatbox">            
            <component :is="currentView" :user="user"  @onSelect="changeView" transition="fade" transition-mode="out-in"></component>
        </div>
    </div>    
</template>

<script>
    import allChats from './AllChats'
    import singleChat from './SingleChat'
    export default {
        components:{
            singlechat: singleChat,
            allchats: allChats
        },
        data() {
            return {
                currentView: 'allchats',
                user: null
            }
        },
        mounted() {
            console.log('Component mounted.')
            const btn = document.getElementById('messenger-btn');
            const element = document.getElementById('messenger-chatbox');
            btn.addEventListener('click', function(event) {
                element.classList.toggle('hidden');
                $(this).toggleClass('fa-envelope fa-times-circle-o')
            });
        },
        methods:{
            changeView(view,user){
                this.user = user;
                this.currentView = view;
            }
        }
    }
</script>
<style>
    .fade-transition {
  transition: opacity 0.2s ease;
}

.fade-enter, .fade-leave {
  opacity: 0;
}
</style>