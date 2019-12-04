<template>
    <div class="kt-chat__input">
        <div class="kt-chat__editor">
            <textarea v-model="message"  @keydown.enter="send" placeholder="Ecrire votre message..." style="height: 50px"></textarea>
        </div>
        <div class="kt-chat__toolbar">
            <div class="kt_chat__tools">
                <a href="#"><i class="flaticon2-link"></i></a>
                <a href="#"><i class="flaticon2-photograph"></i></a>
                <a href="#"><i class="flaticon2-photo-camera"></i></a>
            </div>
            <div class="kt_chat__actions">
                <button type="button" class="btn btn-brand btn-md  btn-font-sm btn-upper btn-bold kt-chat__reply">Repondre</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                message:''
            }
        },
        methods:{
            send(e){
                e.preventDefault();
                if (this.message == '')
                {
                    return;
                }
                this.$emit('send', this.message);
                this.message =''

            }
        }

    }
</script>