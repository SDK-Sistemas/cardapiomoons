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
                    <BreezeButtonLink class="mx-2" :href="route('adm.users.create')">Novo Usuário</BreezeButtonLink>
                </div>
            </div>
        </template>

        <div class="py-12 ">
            <div class="mx-auto sm:px-6 lg:px-8 max-w-7xl py-4">
                <table class="table-fixed border-b border-gray-200 shadow rounded bg-white">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-2 text-xs text-gray-500 w-1/12">Nome</th>
                            <th class="px-6 py-2 text-xs text-gray-500 w-1/12">E-mail</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <tr v-for="user in users" v-bind:key="user.id" >
                            <td class="px-6 py-4 text-sm text-gray-500 text-center font-bold border border-gray-100" scope="row">
                                <a :href="route('adm.users.show', user.id)">{{user.name}}</a>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500 text-center border border-gray-100">{{user.email}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </breeze-authenticated-layout>
</template>

<script>
    import BreezeAuthenticatedLayout from '@/Layouts/Authenticated'
    import BreezeButtonLink from '@/Components/ButtonLink'

    export default {
        components: {
            BreezeAuthenticatedLayout,
            BreezeButtonLink
        },

        props: {
            auth: Object,
            errors: Object,
            users: Object
        }
    }
</script>
