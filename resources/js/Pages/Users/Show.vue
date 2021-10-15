<template>
    <breeze-authenticated-layout>
        <template #header>
            <div class="flex justify-between">
                <div>
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        Users
                    </h2>
                </div>
            </div>
        </template>

        <div class="py-12 ">
            <div class="flex gap-x-2 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                <breeze-card-item title="Categorias" url="#">
                    <span> Gestão das Categorias e Pratos do Cardário.</span>
                </breeze-card-item>
                <breeze-card-item title="Menus" url="#">
                    <span> Gestão dos Menus do Cardário.</span>
                </breeze-card-item>
                <breeze-card-item title="Banners" url="#">
                    <span> Gestão dos Banners do Site.</span>
                </breeze-card-item>
                <breeze-card-item title="Usuários" url="#">
                    <span> Gestão dos usuários do Painel Administrativo.</span>
                </breeze-card-item>
            </div>
        </div>
    </breeze-authenticated-layout>
</template>

<script>
    import BreezeAuthenticatedLayout from '@/Layouts/Authenticated'
    import BreezeCardItem from '@/Components/CardItem'
    import { Inertia } from '@inertiajs/inertia'

    export default {
        components: {
            BreezeAuthenticatedLayout,
            BreezeCardItem
        },

        props: {
            auth: Object,
            errors: Object,
        },
        data(){
            return {
                input: {
                    search: null
                },
                showCancelados : true
            }
        },

        methods: {
            getEntregues(){
                Inertia.reload({
                    preserveState: true,
                })
            }
        },

        mounted: function () {
            window.setInterval(() => {
                this.getEntregues()
            }, 10000)
        }
    }
</script>
