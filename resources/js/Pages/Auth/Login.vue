<template>
    <Head title="Log in" />

    <form @submit.prevent="submit">

        <div class="input-group">
            <input v-model="form.email" type="text" class="form-control" placeholder="E-mail" aria-label="E-mail" >
        </div>

        <div class="input-group">
            <input v-model="form.password" type="password" class="form-control" placeholder="Senha" aria-label="Password" >
        </div>

        <div class="form-check">
            <input v-model:checked="form.remember"  class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Manter conectado
            </label>
        </div>

    </form>
</template>

<script>
import Auth from '@/Layouts/Auth.vue'
import { Head, Link } from '@inertiajs/inertia-vue3';

export default {
    layout: Auth,

    components: {Head, Link},

    props: {
        status: String,
    },

    data() {
        return {
            form: this.$inertia.form({
                email: '',
                password: '',
                remember: false
            })
        }
    },

    methods: {
        submit() {
            this.form.post(this.route('login'), {
                onFinish: () => this.form.reset('password'),
            })
        }
    }
}
</script>
