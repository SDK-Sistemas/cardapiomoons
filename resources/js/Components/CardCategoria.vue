<template>
  <a :href="url">
    <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
        <img v-show="categoria.image != null" class="w-full" :src="categoria.image == null? '#' : route('home')+'/storage/'+categoria.image.path" :alt="categoria.name">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">{{categoria.name}}</div>
          <p class="text-gray-700 text-base">
            <slot />
          </p>
        </div>
        <div class="px-6 pt-4 pb-2">
        </div>
    </div>
  </a>
</template>

<script>
  import BreezeButton from '@/Components/Button'
  import { Inertia } from '@inertiajs/inertia'

  export default {
    components: {
      BreezeButton,
    },
    props: {
        categoria: {
            type: Object
        },
        url: {
            type: String,
            default: '#',
        },
    }
  }
</script>

<style>

</style>