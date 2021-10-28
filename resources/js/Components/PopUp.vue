<template>
    <div class="popup-error">
        <div class="border-gray-300 rounded-md shadow-sm p-4 text-white" v-bind:class="{ 'bg-red-600': iserror,'bg-green-600': !iserror  }">
            <span>
                {{ message }}
            </span>
        </div>
        <div v-on:click="close()" class="border-gray-300 rounded-md shadow-sm p-4 text-white" v-bind:class="{ 'bg-red-600': iserror,'bg-green-600': !iserror  }">
            <span>
                X
            </span>
        </div>
    </div>
</template>

<style scoped>
    .popup-error {
        position: absolute;
        top: auto;
        left: 35vw;
        z-index: 5;
        display: inline-flex;
        flex-direction: row;
        flex-wrap: nowrap;
        align-content: center;
        justify-content: flex-end;
        align-items: center;
    }
</style>
<script>
    export default {
        props: ['message', 'iserror'],
        methods:{
            close: function(){
                this.$page.props.flash.message = null;
            }
        }
    }
</script>
