<template>
    <!--<div class="container">-->
        <!--<div class="row justify-content-center">-->
            <!--<div class="col-md-8">-->
                <!--<div class="card">-->
                    <!--<div class="card-header">Example Component</div>-->

                    <!--<div class="card-body">-->
                        <!--I'm an example component.-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
    <!--</div>-->
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="kt-chat chat">
                <div class="kt-portlet kt-portlet--last">
                    <div class="kt-portlet__head">
                        <div class="kt-chat__head ">
                            <div class="kt-chat__left">
                                <div class="kt-chat__label">
                                    <a href="#" class="kt-chat__title">{{teacher.last_name}} {{teacher.first_name}}</a>
                                    <span class="kt-chat__status">
												<span class="kt-badge kt-badge--dot kt-badge--success"></span> Actif
											</span>
                                </div>
                            </div>
                            <div class="kt-chat__right">
                                <button type="button" class="btn btn-clean btn-sm btn-icon" data-dismiss="modal">
                                    <i class="flaticon2-cross"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div class="kt-scroll kt-scroll--pull" data-height="410" data-mobile-height="300">
                            <div class="kt-chat__messages kt-chat__messages--solid">
                                <div v-for="message in messages" :key="message.id">
                                    <div v-if="message.from == user.id">
                                        <div class="kt-chat__message kt-chat__message--success " >
                                            <div class="kt-chat__text">
                                                {{message.text}}
                                            </div>
                                        </div>
                                    </div>
                                    <div v-if="message.to == user.id">
                                        <div class="kt-chat__message kt-chat__message--info user_send">
                                            <div class="kt-chat__text">
                                                {{message.text}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__foot">
                        <Conversation @send="SendMessage"></Conversation>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Conversation from './Conversation'
    export default {
        props: {
            user:{
                type: Object,
                required:true
            },
            teacher:{
                type: Object,
                required: true
            },
            messages:{
                type: Array,
                required: true,
            }
        },
        data(){
            return {
                messages: [],
                user: this.user,
                teacher: this.teacher
            }
        },
        mounted(){
            console.log(this.teacher.id);
            axios.get(`/conversation/${this.teacher.id}`)
                .then( (response) => {
                    console.log(response.data);
                    this.messages = response.data
                })
        },
        methods:{
          SendMessage(text){
              axios.post('/conversation/send',{
                  text: text,
                  contact_id : this.teacher.id,
                  user_id : this.user.id
              }).then( (response) =>
                  this.messages.push(response.data)
              )
          }
        },
        components:{
          Conversation
        }
    }
</script>
<style type="scss">
    .user_send{
        margin-left: 50% !important;
    }
    .chat{
        overflow: scroll;
        maxheight: 300px
    }
</style>
