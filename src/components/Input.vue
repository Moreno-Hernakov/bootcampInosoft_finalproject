<template>
  <div class="input">
    <input
      class="block w-full py-2 px-3 text-sm text-[#333] font-normal bg-white bg-clip-padding
      border rounded focus:outline-none transition"
      :autofocus="autofocus"
      :class="{
        'focus:ring-2 border-[#FF6D6D] focus:border-red-400 focus:ring-red-400': error,
        'focus:ring border-[#ced4da] focus:border-blue-500': !error,
      }"
      :id="id"
      :type="type"
      :placeholder="placeholder"
      :value="value"
      @input="handleInput($event.target.value)"
    />
  </div>
</template>

<script>
export default {
  name: 'Input',
  props: ['id', 'type', 'placeholder', 'value', 'error', 'autofocus'],
  methods: {
    handleInput(value) {
      this.$emit('input', value);
    },
  },
}
</script>

<style>

</style>