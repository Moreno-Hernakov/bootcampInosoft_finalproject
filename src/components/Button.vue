<template>
  <button class="button w-full relative text-base bg-teal-500 px-4 py-2 font-medium hover:bg-teal-600 transition rounded" @click="onClick" :type="type">
    <slot></slot>
  </button>
</template>

<script>
export default {
  name: 'Button',
  props: ['type'],
  methods: {
    onClick() {
        this.$emit('click')
    }
  }
}
</script>

<style>

</style>