<template>
    <chat :user="this.user" :teacher="this.teacher"></chat>
</template>

<script>
    import Chat from './Chat';
    export default ({
        props:{
          user: {
              type: Object,
              required : true
          }  ,
          teacher:{
              type: Object,
                required:true
          }
        },
        data(){
            return {
                user: this.user,
                teacher:this.teacher
            }
        },
        components:{
            Chat
        }

    })
</script>