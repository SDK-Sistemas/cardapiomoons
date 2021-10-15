<template>
    <div class="">  
        <a :href="url">
            <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white p-6">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">{{title}}</div>
                <p class="text-gray-700 text-base">
                <slot />
                </p>
            </div>
            </div>
        </a>
  </div>
</template>

<script>
    export default {
        props: {
            title: {
                type: String,
                default: '',
            },
            url: {
                type: String,
                default: '#',
            },
        }
    }
</script>