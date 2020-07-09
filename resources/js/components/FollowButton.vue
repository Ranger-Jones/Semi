<template>
    <div>
        <div class="d-flex justify-content-center pt-4">
            <a href="#" class="btn btn-sp btn-sp-blue btn-animate" @click="followUser" v-text="buttonText"></a>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['userId', 'follows'],

        mounted() {
            console.log('Component mounted.')
        },

        data: function() {
            return {
                status: this.follows,
            }
        },

        methods: {
            followUser(){
                axios.post('/follow/' + this.userId)
                    .then(response => {
                        this.status = ! this.status;

                        console.log(response.data);
                    })
                    .catch(errors => {
                        if (errors.response.status == 401) {
                            window.location = '/login';
                        }
                    });
            }
        },

        computed: {
            buttonText() {
                return (this.status) ? 'Unfollow' : 'Follow';
            }
        }
    }
</script>
