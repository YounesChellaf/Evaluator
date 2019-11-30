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
            <div class="kt-chat">
                <div class="kt-portlet kt-portlet--last">
                    <div class="kt-portlet__head">
                        <div class="kt-chat__head ">
                            <div class="kt-chat__left">
                                <div class="kt-chat__label">
                                    <a href="#" class="kt-chat__title">teacher</a>
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
                                <div class="kt-chat__message kt-chat__message--success">
                                    <div class="kt-chat__user">
												<span class="kt-media kt-media--circle kt-media--sm">
													<img src="" alt="image">
												</span>
                                        <a href="#" class="kt-chat__username">Maitre A</a>
                                        <span class="kt-chat__datetime"></span>
                                    </div>
                                    <div class="kt-chat__text">
                                        Bonjour monsieur , notre platforme vous offre l'aide pour evaluer et suivre votre éleve
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-chat__input">
                            <div class="kt-chat__editor">
                                <textarea placeholder="Ecrire votre message..." style="height: 50px"></textarea>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            user:{
                type: Object,
                required:true
            },
            teacher:{
                type: Object,
                required: true
            }
        },
        data(){
            return {
                message: [],
                teacher: this.teacher
            }
        },
        mounted(){
          console.log(this.user)
        }
    }
</script>
