<template>
    <breeze-authenticated-layout>
        <template #header>
            <div class="flex justify-between">
                <div>
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        Users
                    </h2>
                </div>
                <div>
                    <BreezeButtonLink class="mx-2 bg-red-600" href="#" v-on:click="call_delete()">Deletar</BreezeButtonLink>
                </div>
            </div>
        </template>

        <div class="py-12 ">
           <h1 class="my-4 text-lg font-bold bold mx-auto sm:px-6 lg:px-8 max-w-7xl">
                <span>
                   Usuário {{user.name}}
                </span>
            </h1>
            <div class="mx-auto sm:px-6 lg:px-8 max-w-7xl py-4">
                
                <form @submit.prevent="submit(user.id)">
                    <div class="grid grid-cols-2 gap-2 my-4">
                        <div>
                            <BreezeLabel value="Nome" />
                            <BreezeInput type="text" v-model="form.name" placeholder="Nome" class="w-full"/>
                            <div class="text-red-500 text-sm" v-if="errors.name">{{ errors.name }}</div>
                        </div>
                        <div>
                            <BreezeLabel value="E-mail" />
                            <BreezeInput type="email" v-model="form.email" placeholder="E-mail" class="w-full"/>
                            <div class="text-red-500 text-sm" v-if="errors.email">{{ errors.email }}</div>
                        </div>
                        <div>
                            <BreezeLabel value="Senha" />
                            <BreezeInput type="password" v-model="form.password" placeholder="Senha" class="w-full"/>
                            <div class="text-red-500 text-sm" v-if="errors.password">{{ errors.password }}</div>
                        </div>
                        <div>
                            <BreezeLabel value="Confirmar a Senha" />
                            <BreezeInput type="password" v-model="form.password_confirmation" placeholder="Confirmar Senha" class="w-full"/>
                            <div class="text-red-500 text-sm" v-if="errors.password_confirmation">{{ errors.password_confirmation }}</div>
                        </div>
                    </div>

                    <BreezeButton type="submit"> 
                        Salvar
                    </BreezeButton>
                </form>

            </div>
        </div>
    </breeze-authenticated-layout>
</template>

<script>
    import BreezeAuthenticatedLayout from '@/Layouts/Authenticated'
    import { Inertia } from '@inertiajs/inertia'
    import { useForm } from '@inertiajs/inertia-vue3'
    import BreezeInput from '@/Components/Input'
    import BreezeButton from '@/Components/Button'
    import BreezeLabel from '@/Components/Label'
    import BreezeButtonLink from '@/Components/ButtonLink'

    export default {
        components: {
            BreezeButtonLink,
            BreezeAuthenticatedLayout,
            BreezeInput,
            BreezeButton,
            BreezeLabel
        },

        props: {
            auth: Object,
            errors: Object,
            user: Object
        },
        setup () {
            const form = useForm({
                name: null,
                email: null,
                password: null,
                password_confirmation : null,
                _method: 'PUT'
            })

            function submit(id) {
                Inertia.post(route('adm.users.update', id), form)
            }

            return { form, submit }
        },
        mounted(){
            this.form.name = this.user.name
            this.form.email = this.user.email
        },
        methods: {
            call_delete: function(){

               if(confirm(`Tem certeza que deseja deletar o usuário ${this.user.name}? Está ação é irreversível!`) ){
                   Inertia.delete(route('adm.users.destroy', this.user.id))
               }else{
                   alert("Processo cancelado com sucesso!");
               }
            }
        }
    }
</script>
