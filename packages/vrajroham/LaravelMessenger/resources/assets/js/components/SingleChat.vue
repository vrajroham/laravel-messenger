<template>
    <div>
        <div class="header">                
            <a href="#" class="btn" @click="goHome"> <i class="fa fa-angle-left" aria-hidden="true"></i></a>  &nbsp;Mychat
        </div>
        <div class="body">
            <div class="lm-container">
                
            </div>
        </div>
        <div class="keep-bottom">
            <textarea name="" class="chat-text " id="" cols="30" rows="1"></textarea>            
            <button class="send"><i class="fa fa-arrow-right fa-2x"></i></button>
        </div>
    </div>    
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')            
        },
        methods:{
            goHome(){
                this.$emit('onSelect','allchats');
            }
        }
    }
</script>
<style>
    .keep-bottom {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        min-height: 55px;
        max-height: 200px;    
      }
    .keep-bottom textarea {
        border: 4px solid #000;
        position: absolute;
        bottom: 0;
        left: 0;
        color: #565867;
        background-color: #f4f7f9;
        resize: none;
        border: none;
        transition: background-color .2s ease,box-shadow .2s ease;
        box-sizing: border-box;
        padding: 18px;
        padding-right: 100px;
        padding-left: 30px;
        width: 100%;
        height: 100%;
        border: none;
        font-family:  "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 15px;
        font-weight: 400;
        line-height: 1.33;
        white-space: pre;
        white-space: pre-wrap;
        word-wrap: break-word;
        resize: all;
    }    
    .send{        
        position:absolute;
        top: 25%;
        right: 5%;
        color: #565867;
        background-color: #f4f7f9;
        border: none;
        transition: background-color .2s ease,box-shadow .2s ease;
    }
</style>