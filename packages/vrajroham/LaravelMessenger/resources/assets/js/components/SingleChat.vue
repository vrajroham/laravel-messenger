<template>
    <div>
        <div class="header">                
            <a href="#" class="btn" @click="goHome"> <i class="fa fa-white fa-angle-left" aria-hidden="true"></i></a>  &nbsp; {{ user.name }}
        </div>
        <div class="body">
            <div class="lm-container">
                <div style="min-height:50px;margin-bottom:25px;">
                    <div style="background-color:#0a6ac9;color:#fff;font-weight:normal;border-radius: 3px !important;max-width:75%;min-width:75%;margin-left:25%;">
                        <div style="padding:10px">Hi Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                    </div>
                    <div style="float:right;">  12-2-2017</div>
                </div>
                <div style="min-height:50px;margin-bottom:25px;">
                    <div style="background-color:#f4f7f9;color:#000;font-weight:normal;border-radius: 3px !important;max-width:75%;">
                        <div style="padding:10px">Hi</div>
                    </div>
                    <div style="float:left;">  12-2-2017</div>
                </div>
                <div style="min-height:50px;margin-bottom:25px;">
                    <div style="background-color:#0a6ac9;color:#fff;font-weight:normal;border-radius: 3px !important;max-width:75%;min-width:75%;margin-left:25%;">
                        <div style="padding:10px">Hi Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                    </div>
                    <div style="float:right;">  12-2-2017</div>
                </div>
                <div style="min-height:50px;margin-bottom:25px;">
                    <div style="background-color:#f4f7f9;color:#000;font-weight:normal;border-radius: 3px !important;max-width:75%;">
                        <div style="padding:10px">Hi</div>
                    </div>
                    <div style="float:left;">  12-2-2017</div>
                </div>
                <div style="min-height:50px;margin-bottom:25px;">
                    <div style="background-color:#0a6ac9;color:#fff;font-weight:normal;border-radius: 3px !important;max-width:75%;min-width:75%;margin-left:25%;">
                        <div style="padding:10px">Hi Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                    </div>
                    <div style="float:right;">  12-2-2017</div>
                </div>
            </div>
        </div>
        <div class="keep-bottom">
            <textarea v-model="message" ref="messageBox" class="chat-text" id="" cols="30" rows="1" v-on:keyup.enter="send"></textarea>            
            <button class="send"><i class="fa fa-arrow-right fa-2x"></i></button>
        </div>
    </div>    
</template>

<script>
    export default {
        props:['user'],
        data(){
            return{
                message : null
            }
        },
        mounted() {
            $(".lm-container").scrollTop(1000000);
        },
        methods:{
            goHome(){
                this.$emit('onSelect','allchats');
            },
            send(e){
                let message = {'message':'Hello','user_to':2};
                axios.post('messenger/send-message',message).then((response)=>{                        
                        this.message = '';
                        this.$refs.messageBox.focus();
                    },(error)=>{
                        console.log(error);
                });
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