<template>
  <div class="flex-col">
    <!-- Any options you want to have when a package field is created with this field. ex: a select field would have an input to enter in comma separated options available -->
  </div>
</template>

<script>
import { isEmpty } from 'lodash'

export default {
  props: [
    'modelValue',
    'field',
    'package',
    'errors',
    'fields'
  ],

  emits: [
    'update:modelValue'
  ],

  watch: {
    modelValue (newVal, oldVal) {
      if (newVal !== oldVal) {
        this.selected = newVal
      }
    },

    selected: {
      handler: function (newVal, oldVal) {
        this.$emit('update:modelValue', newVal)
      },
      deep: true
    }
  },

  data () {
    return {
      selected: null
    }
  },

  mounted () {
    if (!isEmpty(this.modelValue)) {
      this.selected = this.modelValue
    }
  }
}
</script>
