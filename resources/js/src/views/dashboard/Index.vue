<template>
  <div>
    <template v-if="hasRole('pd')">
      <dashboard-siswa />
    </template>
  </div>
</template>

<script>
import DashboardSiswa from './../ujian/Index.vue'

export default {
  components: {
    DashboardSiswa
  },
}
</script>